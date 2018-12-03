<?php       
    if ($this->session->userdata('is_authenticated') == FALSE) {
        redirect('users/login'); 
    }
?>
<h2><?php echo 'Movie Insert'; ?></h2>
 
<?php
     if ($this->session->flashdata('errors')){
?>
<div class="alert alert-danger">
    <?php echo $this->session->flashdata('errors'); ?>
</div>
     <?php } ?>
<?php echo form_open('actors/create'); ?>    
<div class="row">
        <div class=" col-md-12">
            <div class="form-group">
                <strong>Actor Name:</strong>
                <input type="input" name="actor_name" size="50" class="form-control"  />
            </div>
        </div>

        <div class=" col-md-12">
            <div class="form-group">
                <strong>Date of Birth:</strong>
                <input type="date" name="dob" size="50" class="form-control"  />
            </div>
        </div>


        <div class=" col-md-12">
            <div class="form-group">
                <strong>City:</strong>
                <input type="input" name="city" size="50" class="form-control"  />
            </div>
        </div>

        <div class=" col-md-12">
            <div class="form-group">
                <strong>Description:</strong>
                <textarea name="description" class="form-control" rows="5"> </textarea>               
            </div>
        </div>

        <div class=" col-md-12 text-center">
            <input type="submit" class="btn btn-primary" name="submit" value="Add Actor" />
        </div>
    </div>
</form>