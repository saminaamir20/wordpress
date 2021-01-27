<?php  


/*
	Template Name: with Left_sidebar 

*/

 ?>

<?php get_header();  ?>

<section class="Custom_page_all_item">
	<div class="custom_left_side"><h1>left sidebar</h1>
	<?php dynamic_sidebar('left_widgets'); ?></div>
	
	<div class="custom_mid_content">
	<div class="page_title">
		<h1 style="text-align: center; color: blue;"><?php the_title();?></h1>

	</div>
	<div class="page_content">
		<p><?php the_content();  ?></p>
	</div>
	</div>

	

</section>



<?php get_footer(); ?>
