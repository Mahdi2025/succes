<?php require 'views/partials/header.view.php' ?>

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

    
<?php require 'views/partials/footer.view.php' ?>