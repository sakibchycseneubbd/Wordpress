<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
  <title><?php wp_title();?></title>
  <meta charset="<?php bloginfo('charset');?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" rel="stylesheet">
  <link href="<?php echo get_bloginfo('template_directory'); ?>/style.css" rel="stylesheet">
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  <?php wp_head();?>
</head>
<body>
<div class="container">
<?php
wp_nav_menu(array(
	'theme_location'==>'menu-1';
));
?>
<div class="blog-header">
<h1 class="blog-title"><a href="<?php echo esc_url( home_url( '/' ));?>"><?php bloginfo('name');?></a></h1>
<p class="lead blog-description"><?php bloginfo('description');?></p>
</div>
</div>
</body>
</html>