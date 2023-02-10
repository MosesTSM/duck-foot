<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>



<?php get_template_part('inc/rich-snippets'); ?>


<section id="home-page-hero">

</section>


<?php if( '' !== get_post()->post_content ) { ?>
	<section id="home-content">	
		<div class="home-columns">
			<div class="home-column home-text-column small-padding side-padding long-text">
		        <?php the_content(); ?>
		    </div>
		    <div class="home-column home-image-column">
				<?php $contentimg = get_field('home_content_image'); if( !empty( $contentimg ) ): ?>
				    <img src="<?php echo esc_url($contentimg['url']); ?>" alt="<?php echo esc_attr($contentimg['alt']); ?>" />
				<?php else: ?>
					<img src="<?php bloginfo('url'); ?>/wp-content/themes/florite/images/home-content-image.jpg" alt="man inspecting crops in field" />
				<?php endif; ?>
			</div>
	    </div>
	</section>
<?php } ?>


<?php get_template_part('inc/banner-testimonies'); ?>



<?php endwhile; endif; ?>
<?php get_footer(); ?>