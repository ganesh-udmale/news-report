<?php       
    if ($this->session->userdata('is_authenticated') == FALSE) {
        redirect('users/login'); // the user is not logged in, redirect them!
    }
?>
<h2><?php echo $title; ?></h2>
 
<?php
     if ($this->session->flashdata('errors')){
?>
<div class="alert alert-danger">
    <?php echo $this->session->flashdata('errors'); ?>
</div>
     <?php } ?>
<?php echo form_open('news/create'); ?>    
<div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Title:</strong>
                <input type="input" name="title" size="50" class="form-control"  />
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Description:</strong>
                <textarea name="text" class="form-control" rows="5"> </textarea>               
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <input type="submit" class="btn btn-primary" name="submit" value="Create news item" />
        </div>
    </div>




</form>