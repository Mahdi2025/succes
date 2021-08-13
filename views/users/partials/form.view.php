<form method="POST" action="<?= $vars['action'] ?>">
    <div class="container">
        <div class="row mt-3">
            <div class="col-8">
                <input type="text" name="name" value="<?= isset($vars['education']) ? $vars['education']->name : '' ?>" placeholder="Naam opleiding">
            </div>
        </div>
        
        <div class="row mt-3">
            <div class="col-3">
                <input type="text" name="start_year" value="<?= isset($vars['education']) ? $vars['education']->start_year : '' ?>" placeholder="Start jaartal">
            </div>
            <div class="col-3">
                <input type="text" name="end_year" value="<?= isset($vars['education']) ? $vars['education']->start_year : '' ?>" placeholder="Afgerond jaartal">
            </div>
        </div>
    </div>
</form>