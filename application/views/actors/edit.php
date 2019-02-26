<?php       
    if ($this->session->userdata('is_authenticated') == FALSE) {
        redirect('users/login'); // the user is not logged in, redirect them!
    }
?>
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">            
            <h2><?php echo $title; ?></h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="<?php echo base_url('Actors');?>"> Back</a>
        </div>
    </div>
</div>




<?php echo validation_errors(); ?>
 
<?php echo form_open('actors/edit/'.$actors['id']); ?>
 <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Actor Name:</strong>
                <input type="input" name="actor_name" size="50" class="form-control" value="<?php echo $actors['actor_name'] ?>" />
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>city:</strong>
                <input type="input" name="city" size="50" class="form-control" value="<?php echo $actors['city'] ?>" />
            </div>
        </div>
        
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Date:</strong>
                <input type="date" name="dob" size="50" class="form-control" value="<?php echo $actors['dob'] ?>" />
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Description:</strong>
                <textarea name="description" class="form-control"><?php echo $actors['description'] ?></textarea>               
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <input type="submit" class="btn btn-primary" name="submit" value="Edit Actor" />
        </div>
    </div>
</form>