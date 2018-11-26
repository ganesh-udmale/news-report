<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">            
            <h2><?php echo $title; ?></h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="<?php echo base_url('News');?>"> Back</a>
        </div>
    </div>
</div>




<?php echo validation_errors(); ?>
 
<?php echo form_open('news/edit/'.$news_item['id']); ?>
 <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Title:</strong>
                <input type="input" name="title" size="50" class="form-control" value="<?php echo $news_item['title'] ?>" />
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Description:</strong>
                <textarea name="text" class="form-control"><?php echo $news_item['text'] ?></textarea>               
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <input type="submit" class="btn btn-primary" name="submit" value="Edit news item" />
        </div>
    </div>
</form>