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
<?php echo form_open('movies/create'); ?>    
<div class="row">
        <div class=" col-md-12">
            <div class="form-group">
                <strong>Movie Name:</strong>
                <input type="input" name="movie_name" size="50" class="form-control"  />
            </div>
        </div>

        <div class=" col-md-12">
            <div class="form-group">
                <strong>Actor:</strong>
                
                <select  name="actor_id" class="form-control">
                <?php foreach($actors as $actor){ ?>
                    <option value="<?php echo $actor->id; ?>"><?php echo $actor->actor_name; ?></option>
                
                <?php } ?>
                </select>
                
            </div>
        </div>

        <div class=" col-md-12">
            <div class="form-group">
                <strong>Location:</strong>
                <input type="input" name="location" size="50" class="form-control"  />
            </div>
        </div>

        <div class=" col-md-12">
            <div class="form-group">
                <strong>Movie Date:</strong>
                <input type="date" name="date" size="50" class="form-control"  />
            </div>
        </div>

        <div class=" col-md-12">
            <div class="form-group">
                <strong>Description:</strong>
                <textarea name="description" class="form-control" rows="5"> </textarea>               
            </div>
        </div>

        <div class=" col-md-12 text-center">
            <input type="submit" class="btn btn-primary" name="submit" value="Create Movie" />
        </div>
    </div>
</form>