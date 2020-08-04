<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<title>
    <?php  wp_title( '|', true, 'right' );  bloginfo('name');
      if ( is_home() || is_front_page() ) echo ' - ' . get_bloginfo('description'); ?>
</title>

<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" media="screen" />
<?php wp_head() ?>

</head>

   <body <?php body_class(); ?>>
    <div id="wrapper">
      <div id= placeholder></div>
        <div id="header">

<!-- logo -->
    <div id="logo">
      <a href="<?php bloginfo('url') ?>" title="<?php bloginfo('name') ?>">
        <img  style= "height: 120px" src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="Logo" /> </a>
    </div>

       <div id="nav">
          <?php wp_nav_menu( array('menu' => 'menu-wip' )); ?>
        </div>
     </div>


<?php wp_head() ?>

