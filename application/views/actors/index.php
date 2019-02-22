<div class="pull-right">
    <a class="btn btn-success" href="<?php echo site_url('actors/create') ?>"> Add Actor</a>
</div>
<h2><?php echo 'Movies List'; ?></h2>
<div class="clearfix" ></div>


<table class="table table-bordered" border='1' cellpadding='4'>
<thead>
    <tr>
        <th><strong>#</strong></th>
        <th><strong>Name</strong></th>
        <th><strong>DOB</strong></th>
        <th><strong>City</strong></th>
        <th><strong>Description</strong></th>
        <th><strong>#</strong></th>        
    </tr>
    </thead>
    <tbody>
    <?php if(!empty($actors)){ ?>
<?php $cnt=1; foreach ($actors as $actor): ?>
        <tr>
        <td> <?php echo $cnt++; ?> </td>
            <td><?php echo $actor->actor_name; ?></td>
            <td><?php echo $actor->dob; ?></td>
            <td><?php echo $actor->city; ?></td>            
            <td><?php echo $actor->description; ?></td>
            
            <td>
                <a href="<?php echo site_url('news/view/'.$actor->id); ?>">View</a> | 
                <a href="<?php echo site_url('news/edit/'.$actor->id); ?>">Edit</a> | 
                <a id="delete" href="javascript:void(0);" onClick="deleteActor('<?php echo $actor->id ?>'')">Delete</a>
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
    $(document).ready(function(){
        // $("#delete").click(function(event){
           
        // })
        });


         function deleteActor(id){
           var isConf = confirm('Are you sure you want to delete?');
           alert(isConf);
           if(isConf){
               alert(isConf)
                // var href = <?php echo base_url() ?>actors
                var btn = this;
                $.ajax({
                type: "GET",
                url: <?php echo base_url(); ?>index.php/iris/,
                data: {'id': id}
                success: function(response) {
                    if (response == "Success"){
                    $(btn).closest('tr').fadeOut("slow");
                    }else {
                    alert("Error");
                    }            }
                });
            }
            event.preventDefault();
            }
</script>