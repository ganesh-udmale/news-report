<?php       
    if ($this->session->userdata('is_authenticated') == FALSE) {
        redirect('users/login'); // the user is not logged in, redirect them!
    }
?>
<div class="pull-right">
    <a class="btn btn-success" href="<?php echo site_url('news/create') ?>"> Create New Item</a>
</div>
<h2><?php echo $title; ?></h2>
<div class="clearfix" ></div>
 
<table class="table table-bordered" border='1' cellpadding='4'>
<thead>
    <tr>
        <th><strong>#</strong></th>
        <th><strong>Title</strong></th>
        <th><strong>Content</strong></th>
        <th><strong>Action</strong></th>
    </tr>
    </thead>
    <tbody>
<?php $cnt=1; foreach ($news as $news_item): ?>
        <tr>
        <td> <?php echo $cnt++; ?> </td>
            <td><?php echo $news_item->title; ?></td>
            <td><?php echo $news_item->text; ?></td>
            <td>
                <a href="<?php echo site_url('news/view/'.$news_item->slug); ?>">View</a> | 
                <a href="<?php echo site_url('news/edit/'.$news_item->id); ?>">Edit</a> | 
                <a href="<?php echo site_url('news/delete/'.$news_item->id); ?>" onClick="return confirm('Are you sure you want to delete?')">Delete</a>
            </td>
        </tr>
<?php endforeach; ?>
</tbody>
</table>