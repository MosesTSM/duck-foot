<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>



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



<?php if( have_rows('patents','option') ): ?>
	<section id="patents" class="small-padding bg-light center-align small-text">
		<div class="wrapper xthin-wrapper">
			<?php if( get_field('patents_title','option') ): ?>
				<h5><?php the_field('patents_title','option'); ?></h5>
			<?php endif; ?>

			<?php while( have_rows('patents','option') ): the_row(); ?>
				<div class="patent-region">
					<h6><?php the_sub_field('region'); ?></h6>
					<?php if( have_rows('patent','option') ): ?>
						<ul>
							<?php while( have_rows('patent','option') ): the_row(); ?>
								<li class="long-text">
									<?php if( get_field('patent_link','option') ): ?><a href="<?php the_sub_field('patent_link'); ?>"><?php endif; ?>
									<?php the_sub_field('patent_number'); ?>
									<?php if( get_field('patent_link','option') ): ?></a><?php endif; ?>
								</li>
							<?php endwhile;	?>
						</ul>
					<?php endif; ?>
				</div>
			<?php endwhile;	?>

			<?php if( get_field('patents_disclaimer','option') ): ?>
				<p class="long-text"><em><?php the_field('patents_disclaimer','option'); ?></em></p>
			<?php endif; ?>
		</div>
	</section>
<?php endif; ?>



<?php endwhile; endif; ?>
<?php get_footer(); ?>