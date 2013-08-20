<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.png">

    <title>DANGRILL - a test</title>

    <!-- Bootstrap core CSS -->
    <!--
<link href="../../dist/css/bootstrap.css" rel="stylesheet">
    <link href="../../dist/css/bootstrap-glyphicons.css" rel="stylesheet">
-->
<!-- Le styles -->
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="stylesheet/less" type="text/css" href="http://localhost:8888/jprater/wp-content/themes/jprater/bootstrap-3/less/bootstrap.less">
<link href='http://fonts.googleapis.com/css?family=Quicksand:400,300,700' rel='stylesheet' type='text/css'>
<script src="http://localhost:8888/jprater/wp-content/themes/jprater/bootstrap-3/assets/js/less.js" type="text/javascript"></script>
<script src="http://localhost:8888/jprater/wp-content/themes/jprater/bootstrap-3/js/carousel.js"></script>



<?php wp_head(); ?>
  </head>
  
<body>



    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"> <img src="http://localhost:8888/jprater/wp-content/themes/jprater/images/dangrill.png" > </a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
           

  <?php wp_list_pages(array('title_li' => '')); ?>


          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
    

    
    
