<section class="hobbie_form">
<form method="POST" action="<?= $vars['action'] ?>">
    <form method="POST" action="hobbie/create">
            <div class="row">
                <h2>Add a new Hobbie:</h2>
            <div class="col-12">
                    <label for="hobbie" class="form-label">Hobbie:</label>
                    <input type="text"value="<?= isset($vars['hobbie']) ? $vars['hobbie']->hobbie : '' ?>"  class="form-control" id="hobbie" name="hobbie">
                </div>
            </div>
            <hr>
            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="edit" class="btn btn-primary">edit</button>
            <input type="hidden" name="f_token" value="<?= createToken() ?>">
            
        </form>
    </section>

