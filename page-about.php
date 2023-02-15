<?php /* Template Name: About */ ?>
<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>



<section id="main-content" class="small-padding long-text">		
	<div class="wrapper thin-wrapper">
		<?php if( get_field('page_title') ): ?>
			<h1><?php the_field('page_title'); ?></h1>
		<?php else: ?>
			<h1><?php the_title(); ?></h1>				
		<?php endif; ?>

		<?php if( '' !== get_post()->post_content ) { ?>
			<div class="wrapper thin-wrapper">
		        <?php the_content(); ?>
		    </div>
		<?php } ?>
    </div>
</section>





<section id="award" class="bg-black">

</section>



<?php endwhile; endif; ?>
<?php get_footer(); ?>