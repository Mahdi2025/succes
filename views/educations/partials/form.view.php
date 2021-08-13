<section class="Education_form">
     <form method="POST" action="<?= $vars['action'] ?>">
              <div class="row">

                 <h2>Add a new education</h2>
            <div class="col-12">
                <label for="start_year" class="form-label">When did start your study?</label>
                <input type="number"  value="<?= isset($vars['education']) ? $vars['education']->start_year : '' ?>" class="form-control" id="start_year" name="start_year" >
            </div>
            <div class="col-6">
                <label for="end_year" class="form-label">when did you accomplished your study?</label>
                <input type="number" value="<?= isset($vars['education']) ? $vars['education']->end_year : '' ?>"  class="form-control" id="end_year" name="end_year" >
            </div>
            <div class="col-12">
                <label for="degree" class="form-label">Degree:</label>
                <input type="text" value="<?= isset($vars['education']) ? $vars['education']->degree : '' ?>"  class="form-control" id="degree" name="degree" >
            </div>
            <div class="col-12">
                <label for="institute" class="form-label">College:</label>
                <input type="text"  value="<?= isset($vars['education']) ? $vars['education']->college : '' ?>" class="form-control" id="college" name="college" >
            </div>
        </div>
            <hr>
            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="edit" class="btn btn-primary">edit</button>
            <input type="hidden" name="f_token" value="<?= createToken() ?>">
       
        </form>
    </section>