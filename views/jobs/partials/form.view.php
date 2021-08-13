<section class="job_form">
        <form method="<?= $vars['method'] ?>" action="<?= $vars['action'] ?>">
            <div class="row">
                      <h2>Add a new job:</h2>
            <div class="col-12">
                <label for="start_year" class="form-label">start year?</label>
                <input type="number" value="<?= isset($vars['job']) ? $vars['job']->start_year : '' ?>" class="form-control" id="start_year" name="start_year">
            </div>
            <div class="col-12">
                <label for="end_year" class="form-label">end_year?</label>
                <input type="number" value="<?= isset($vars['job']) ? $vars['job']->end_year : '' ?>" class="form-control" id="end_year" name="end_year">
            </div>
            <div class="col-12">
                <label for="company_name" class="form-label">company_name:</label>
                <input type="text" value="<?= isset($vars['job']) ? $vars['job']->company_name : '' ?>" class="form-control" id="company_name" name="company_name">
            </div>
            <div class="col-12">   
                    <label for="position" class="form-label">position:</label>
                    <input type="text" value="<?= isset($vars['job']) ? $vars['job']->position : '' ?>"  class="form-control" id="position" name="position">
                </div>
            
        </div>
        <hr>
            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="edit" class="btn btn-primary">edit</button>
            <input type="hidden" name="f_token" value="<?= createToken() ?>">
        
        </form>
    </section>
    
