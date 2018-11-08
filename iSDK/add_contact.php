<?php
require_once("src/isdk.php");

$app = new iSDK;


if ($app->cfgCon("connectionName")) {

    $memberInformation = array(
        "FirstName" => 'Jake',
        "LastName" => 'Test',
        "Company" => 'Test',
        "Email" => 'test@test1.com'
    );

    //add member as a contact in Infusionsoft
    $contactId = $app->addWithDupCheck($memberInformation, 'Email');

    var_dump($contactId);
}
?>