<?php require 'views/partials/header.view.php' ?>

<div class="main container">

<section class="opleidingen">
  <div class="row">
      <h2 style="background-color:DodgerBlue;">Educations:</2>
      
  <?php foreach ($vars['educations'] as $education) : ?>
        <div class="col-md-12"><?= $education->start_year ?>/<?= $education->end_year ?></div>
        <div class="col-md-12"><?= $education->degree ?></div>
        <div class="col-md-12"><?= $education->college ?></div>
    <?php endforeach ?>
  </div>
</section>
</div>
           
<?php require 'views/partials/footer.view.php' ?>