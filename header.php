<!DOCTYPE html>
<html lang="nl">
<head>
<meta charset="utf-8">
<title><?php bloginfo('name');?><?php wp_title();?></title>
<meta name="description" content="<?php bloginfo('description');?>" />
<meta http-equiv="language" content="<?php echo $lang = get_bloginfo("language"); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, user-scalable=no"/>
<!-- END META TAGS-->
<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.png" />
<link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">
<link href="<?php echo get_stylesheet_directory_uri(); ?>/static/css/all.min.css" />

<?php wp_head();?>
</head>

<div class="bg-woodsmoke">
  <div class="container container-top">
    <div class="row">
      <div class="ml-auto p-2">
        <img
          class="mr-2"
          src="<?php bloginfo('template_url');?>/static/img/whatsapp.svg"
          alt="+31 (0)6 40 25 31 34"
          width="20">
          <a href="tel:+3164025313">
          +31 (0)6 40 25 31 34
          </a>
      </div>
    </div>
  </div>
</div>
<?php get_template_part('components/navbar');?>
