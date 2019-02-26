<?php if($this->session->userdata('is_authenticated') == FALSE){
    redirect('users/login');
}
?>


<div class="row">
<h3><?php echo 'Actor Info '; ?></h3>
    <div class="col-md-12">
        <div class="form-group">
            <strong>Actor Name:</strong>
            <?php echo $actor['actor_name']; ?>
        </div>
    </div>

    <div class="col-md-12">
        <div class="form-group">
            <strong>Actor Birth date:</strong>
            <?php echo $actor['actor_name']; ?>
        </div>
    </div>

    <div class="col-md-12">
        <div class="form-group">
            <strong>Location / City:</strong>
            <?php echo $actor['city']; ?>
        </div>
    </div>


    <div class="col-md-12">
        <div class="form-group">
            <strong>Description:</strong>
            <?php echo $actor['description']; ?>
        </div>
    </div>
</div>