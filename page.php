<?php get_header();  ?>
<?php do_action('P_bag')?>
</section>
<section class="page_all_item">
	
	<div class="mid_content">
	<div class="page_title">
		<h1 style="text-align: center; color: blue;"><?php the_title();?></h1>

	</div>
	<div class="page_content">
		<p><?php the_content();  ?></p>
	</div>
	</div>
<div class="left_side">left side</div>
	<div class="right_side">right side</div>
</section>


<?php get_footer(); ?>
