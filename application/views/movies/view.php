<?php       
    if ($this->session->userdata('is_authenticated') == FALSE) {
        redirect('users/login'); // the user is not logged in, redirect them!
    }
?>
<div class="row">
<h3><?php echo 'Movie Detail '; ?></h3>
<hr>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Movie Title:</strong>
            <?php echo $movie['movie_name'] ?>
        </div>
    </div>

    
    <div class="col-md-12">
        <div class="form-group">
            <strong>Actors List:</strong>
            <?php echo $movie['actor_name']; ?>
        </div>
    </div>

    
    <div class="col-md-12">
        <div class="form-group">
            <strong>Location:</strong>
            <?php echo $movie['location']; ?>
        </div>
    </div>

    
    <div class="col-md-12">
        <div class="form-group">
            <strong>Release Date:</strong>
            <?php echo $movie['date']; ?>
        </div>
    </div>

    <div class="col-md-12">
        <div class="form-group">
            <strong>Description:</strong>
            <?php echo $movie['description']; ?>
        </div>
    </div>
</div>