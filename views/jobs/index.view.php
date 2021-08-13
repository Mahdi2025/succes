<?php require 'views/partials/header.view.php' ?>

<div class="main container">

    <section class="jobs">
        <div class="row">
            <h2 style="background-color:DodgerBlue;">Jobs:</h2>
            <hr>
            <?php foreach ($vars['jobs'] as $job) : ?>
                <div class="col-12"><?= $job->start_year ?>/<?= $job->end_year ?></div>
                <div class="col-12"><?= $job->company_name ?></div>
                <div class="col-12"><?= $job->position ?></div>
            <?php endforeach ?>
        </div>
    </section>

  
</div>


<?php require 'views/partials/footer.view.php' ?>
