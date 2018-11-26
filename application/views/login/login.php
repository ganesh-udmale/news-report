<div class="row page-content">
<div class="col-lg-4">  </div>
  <div class="col-lg-4 login-form">
    <h2>Login Form</h2>
    <?php if(validation_errors()) { ?>
      <div class="alert alert-danger">
        <?php echo validation_errors(); ?>
      </div>
    <?php } ?>
    <?php 
    // echo '<pre>'; print_r($this->session->userdata('is_authenticated'));  
    if(!empty($this->input->get('msg')) && $this->input->get('msg') == 1) { ?>
      <div class="alert alert-danger">
        Please Enter Your Valid Information.
      </div>
    <?php } ?>
    <?php echo form_open('users/dologin'); ?>
          
      <div class="form-group">
         <input type="text" name="email" class="form-control" id="email" placeholder="Email">
      </div>
      <div class="form-group">
         <input type="password" name="password" class="form-control" id="password" placeholder="Password">
      </div>  
      <div class="form-group pull-right">
       <button type="submit" id="login" class="btn btn-primary">Login</button>
    </div>
      
    </div>
    
    <?php echo form_close(); ?>
    <div class="col-lg-4">  </div>
</div>