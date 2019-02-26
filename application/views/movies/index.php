<div class="pull-right">
    <a class="btn btn-success" href="<?php echo site_url('movies/create') ?>"> Create Movie</a>
</div>
<h2><?php echo 'Movies List'; ?></h2>
<div class="clearfix" ></div>


<table class="table table-bordered" border='1' cellpadding='4'>
<thead>
    <tr>
        <th><strong>#</strong></th>
        <th><strong>Name</strong></th>
        <th><strong>Actor</strong></th>
        <th><strong>Location</strong></th>
        <th><strong>Date</strong></th>
        <th><strong>Description</strong></th>
        <th><strong>#</strong></th>        
    </tr>
    </thead>
    <tbody>
    <?php if(!empty($movies)){ ?>
<?php $cnt=1; foreach ($movies as $movie): ?>
        <tr id="movie_<?php echo $movie->id; ?>">
        <td> <?php echo $cnt++; ?> </td>
            <td><?php echo $movie->movie_name; ?></td>
            <td><?php echo $movie->actor_id; ?></td>
            <td><?php echo $movie->location; ?></td>
            <td><?php echo $movie->date; ?></td>
            <td><?php echo $movie->description; ?></td>
            
            <td>
                <a href="<?php echo site_url('movies/view/'.$movie->id); ?>">View</a> | 
                <a href="<?php echo site_url('movies/edit/'.$movie->id); ?>">Edit</a> |                 
                <a id="delete" href="javascript:void(0);" onClick="deleteMovie('<?php echo $movie->id ?>')">Delete</a>
            </td>
        </tr>
<?php endforeach; ?>
<?php }else{ ?>
        <tr>
            <td colspan="6" class="text-center">    <em>No Record Available.</em> </td>
        </tr>
  <?php } ?>
</tbody>
</table>
<script>
function deleteMovie(mov_id){
    var isConf = confirm('Are you sure you want to delete?');        
    if(isConf){ 
        $.ajax({
            type: "POST",
            url: '<?php echo base_url(); ?>movies/deleteMovie',
            data: {'action': 'deleteMovie', 'movie_id': mov_id},
            success: function(response) {
                if (response == "1" || response == "true"){ 
                    $('#movie_'+mov_id).remove();
                }else {
                // alert("Error");
                }        
            }
        });
    }
    event.preventDefault();
}
</script>