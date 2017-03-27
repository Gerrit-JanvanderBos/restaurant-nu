<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset');?>"
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
  </head>

<body <?php body_class(); ?>>

<div class="blog-masthead">
  <div class="container">
    <?php wp_nav_menu(array(
      'theme_location' => 'header-menu',
      'menu_class' => 'blog-nav list-inline'
    ));?>
  </div>
</div>

<div class="container">
  <div class="blog-header">
  <h1 class="blog-title"><?php bloginfo('name'); ?></h1>
  <?php $description = get_bloginfo('description', 'display'); ?>
  <?php if('description') { ?><p class="lead blog-description"><?php echo $description ?></p><?php }?>
</div>

<div class="row">