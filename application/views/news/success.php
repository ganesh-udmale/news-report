<?php       
    if ($this->session->userdata('is_authenticated') == FALSE) {
        redirect('users/login'); // the user is not logged in, redirect them!
    }
?>
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
    <div class="alert alert-success">
        <h2 > <i>News added successfully! </i></h2>

        <div class="pull-right">
            <a class="btn btn-primary" href="<?php echo site_url('news');?>"> Back</a>
        </div>
        <div class="clearfix" ></div>
    </div>
   </div>
</div>