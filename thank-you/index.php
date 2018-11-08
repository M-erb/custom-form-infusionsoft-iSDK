<?php 

  $say = 'Thank you!';
  $url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
  $parts = parse_url($url);
  parse_str($parts['query'], $params);
?>
<?php require('../partials/head.php') ?>
<body>
  <header id="Header" class="container">
    <h1 class="is-size-1"><?php echo $say ?></h1>
  </header>

  <section class="section">
    <div class="container">
      <h3>Form received with:</h3>
      <p><strong>First Name: </strong><?php echo $params['FirstName'] ?></p>
      <p><strong>Last Name: </strong><?php echo $params['LastName'] ?></p>
      <p><strong>Email Address: </strong><?php echo $params['Email'] ?></p>
    </div>
  </section>
  
</body>
<?php require('../partials/footer.php') ?>
