<?php
//include the SDK
require_once("../iSDK/src/isdk.php");
//build our application object
$app = new iSDK;
$errorPage = '/error';

//connect to the API
if ($app->cfgCon("APPNAME", "APIKEY")) {

  //grab our posted contact fields
  $contact = array(
    'Email' => $_POST['emailAddress'],
    'FirstName' => $_POST['firstName'],
    'LastName' => $_POST['lastName']
  );

  //grab the returnURL
  $returnURL = $_POST['returnURL'];


  //Make Email address required
  if (!empty($contact['Email'])) {

    $contactId = $app->addWithDupCheck($contact, 'Email');
    $infusedContact = $app->loadCon($contactId, array('Email', 'FirstName', 'LastName'));

    if (!empty($_FILES['contactFile'])) {
      $file = $_FILES['contactFile'];
      $file_name = $file['name'];

      // Can use to limit file size, returns in Bytes
      // NOTE Infusionsoft has limit of 10MB
      $file_size=$file['size'];

      $file_tmp= $file['tmp_name'];
      $data = file_get_contents($file_tmp);
      $base64 = base64_encode($data);
      
      // Upload file if there is one
      $test = $app->uploadFile($file_name, $base64, $contactId);
    }

    $queryData = http_build_query($infusedContact);

    //Send them to the success page
    header('location: ' . $returnURL . '?' . $queryData . '&id=' . $contactId);

  } else {
    header('location: ' . $errorPage . '?error=' . 'You must provide at least an email address.');
  }

} else {
  echo "Connection Error";
}
?>
