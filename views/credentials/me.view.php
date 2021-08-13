<?php require 'views/partials/header.view.php' ?>

<div class="main container">
 
    <section class="opleidingen">
        <div class="row">
            <h2>Educations:</h2>
            <hr>
            <?php foreach ($vars['educations'] as $education) : ?>
                <div class="col-12"><?= $education->start_year ?>/<?= $education->end_year ?></div>
                <div class="col-12"><?= $education->company_name ?></div>
            <?php endforeach ?>
        </div>
  
 
        <div class="main container">

<section class="jobs">
    <div class="row">
        <h2>Jobs:</h2>
        <hr>
        <?php foreach ($vars['jobs'] as $job) : ?>
            <div class="col-12"><?= $job->start_year ?>/<?= $job->end_year ?></div>
            <div class="col-12"><?= $job->company_name ?></div>
        <?php endforeach ?>
    </div>
</section>


</div>

 
<div class="main container">

    <section class="skills">
        <div class="row">
            <h2>Skills:</h2>
            <hr>
            <?php foreach ($vars['skills'] as $skills) : ?>
                <tr>
                    <div class="col-12"><?= $skills->skill ?></div>
                </tr>
            <?php endforeach ?>
        </div>


    </section>
    <section class="hobbies">
        <div class="row">
            <h2>Hobbies:</h2>
            <hr>
            <?php foreach ($vars['hobbies'] as $hobbie) : ?>
                <div class="col-12"><?= $hobbie->hobbie ?></div>
                
            <?php endforeach ?>
        </div>

        


</div>


  






<!-- // var_dump($vars['educations']);
//       var_dump($vars['skills']);
// var_dump($vars['hobbies']);
// var_dump($vars['jobs']); -->

 





























































<?php require 'views/partials/footer.view.php' ?>

