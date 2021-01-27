<?php  


/*
	Template Name: with Right_sidebar 

*/

 ?>

<?php get_header();  ?>

	<div class="custom_right_side"><h1>right sidebar</h1>
	<?php dynamic_sidebar('right_widgets'); ?></div>
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
