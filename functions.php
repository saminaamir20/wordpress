<?php

/*Title dynamic*/





add_action('after_setup_theme','start_theme');

function start_theme()
{

	add_theme_support('title-tag');//parameter string and array type mixed $argument we send required string type  mixed $argument potional

	
	register_nav_menus(array(
    'header_menu'=>'main menu',
    'footer_menu'=>'footer menu',
    'sidebar_menu'=>'sidebar menu',


	) );

}


add_action('widgets_init','tisha_theme_widgets');
function tisha_theme_widgets(){

register_sidebar(array(
'id'=>'first_widgets',
'name'=>'sidebar menu',

) );

register_sidebar(array(
'id'=>'left_widgets',
'name'=>'left sidebar',

) );

register_sidebar(array(
'id'=>'right_widgets',
'name'=>'right sideber',

) );



}

function scrol_news(){

	echo "<marquee>The Headlines What is Lorem Ipsum?
Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</marquee>";
}
add_action('tisha','scrol_news');



function content_text(){
?><style type="text/css">
	body{
		background: gold;
		color:white;
	}
</style><?php
	echo "<h1>content</h1>
	<b><h3>What is Lorem Ipsum?
             Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</h3></b>";
}
add_action('tisha','content_text');



function pagebackgroung(){
?><style type="text/css">
	body{
		background: blue;
		
	}
</style><?php
	
}
add_action('P_bag','pagebackgroung');

function connect_all_link(){
	
wp_register_style('our-animate-style', get_template_directory_uri().'/assets/animate.css');
wp_enqueue_style('our-animate-style');

wp_register_style('our-responsive-style', get_template_directory_uri().'/assets/responsive.css');
wp_enqueue_style('our-responsive-style');


wp_enqueue_script('jquery');


wp_register_script('our-js-script', get_template_directory_uri().'/assets/js/main.js');
wp_enqueue_script('our-js-script');

wp_register_style('our-css-style', get_template_directory_uri().'/style.css');
wp_enqueue_style('our-css-style');



}
add_action('wp_enqueue_scripts','connect_all_link');




  ?>

