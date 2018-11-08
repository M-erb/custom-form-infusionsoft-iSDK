<?php 

  $say = 'Custom Infusionsoft Form!'

?>
<?php require('./partials/head.php') ?>
<body>
  <header id="Header" class="container">
    <h1 class="is-size-1 has-text-centered"><?php echo $say ?></h1>
  </header>

  <section class="section">
    <div class="container">
      <div class="columns has-centered">
        <div class="column is-half">
          <?php require('./views/form.php') ?>
        </div>
      </div>
    </div>
  </section>
  
</body>
<?php require('./partials/footer.php') ?>
