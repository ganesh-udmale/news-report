<!DOCTYPE html>
<html>
<head>
    <title>CodeIgniter Tutorial</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>theme/css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>theme/css/style.css" />
    <script type="text/javascript" src="<?php echo base_url(); ?>theme/js/bootstrap.min.js" > </script>
</head>
<body>
<div class="header" >
<div class=" gal-box" >
<a href="<?php echo site_url('news'); ?>">
        <img class="logo" src="<?php echo base_url(); ?>theme/images/news_logo.png" > 
    </a>
</div>
<div class="site-title" >
    <h1 class="text-center">CI News Test </h1>
    <p class="menu">
    <a href="<?php echo base_url('news'); ?>">Home</a> | 
    <a href="<?php echo site_url('news/create'); ?>">Add News</a></p>
</div> 
</div> 

<hr>
<div class="container">
    <div class="section "> 