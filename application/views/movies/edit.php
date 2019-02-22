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
            <a class="btn btn-primary" href="<?php echo base_url('Movies');?>"> Back</a>
        </div>
    </div>
</div>




<?php echo validation_errors(); ?>
 
<?php echo form_open('movies/edit/'.$movies['id']); ?>
 <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Movie Name:</strong>
                <input type="input" name="movie_name" size="50" class="form-control" value="<?php echo $movies['movie_name'] ?>" />
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Actor:</strong>
                <select  name="actor_id" class="form-control">
                    <?php foreach($actors as $actor){ ?>
                    <option value="<?php echo $actor->id ?>" <?php echo  set_select('actor_id', $actor->id , (($movies['actor_id'] == $actor->id ) ? TRUE: '')); ?>> <?php echo $actor->actor_name ?> </option>
                    <?php }   ?>
                </select>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Location:</strong>
                <input type="input" name="location" size="50" class="form-control" value="<?php echo $movies['location'] ?>" />
            </div>
        </div>
        
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Date:</strong>
                <input type="date" name="date" size="50" class="form-control" value="<?php echo $movies['date'] ?>" />
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Description:</strong>
                <textarea name="description" class="form-control"><?php echo $movies['description'] ?></textarea>               
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <input type="submit" class="btn btn-primary" name="submit" value="Edit Movie" />
        </div>
    </div>
</form>