<!DOCTYPE html>
<html>
<head>

<meta charset="<?php bloginfo('charset');?>">
<?php wp_head(); ?>
</head>

<body<?php body_class(); ?> >


	<header class="header_area">
<section class="header_img">
<img height="900px" width=100% src="<?php echo get_template_directory_uri(); ?>/images/A.jpg">
</section>
<section class="hr">
	<?php
	wp_nav_menu( array(
			'theme_location'  => 'header_menu',
			'menu_class'  => 'm_menu',
			'container'=>'div',

		) );


	
?>
</section>

</header>