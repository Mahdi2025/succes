<?php require 'views/partials/header.view.php' ?>
    <section class="main-section">
        <?php foreach($vars['users'] as $user) : ?>
            <div class="row">
                <div class="col-md-3"><?= $user->first_name ?></div>
                <div class="col-md-9"><?= $user->last_name ?></div>
            </div>
        <?php endforeach ?>
    </section>
<?php require 'views/partials/footer.view.php' ?> 