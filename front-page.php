<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


<div class="home-banner-title">
	<h1 id="home-title"><span>The</span> aftermarket paddle tine</h1>
	<h2 id="home-subtitle">Duck Foot is the most trusted name in header precision efficiency</h2>
</div>

<div class="home-page-banner-image-container">
	<img src="<?php bloginfo('url'); ?>/wp-content/themes/duck-foot/images/home-banner-image-crop.webp" alt="combine header loaded with duck foot attachments" />
</div>

<?php if( '' !== get_post()->post_content ) { ?>
	<div class="home-main-content">
        <?php the_content(); ?>
    </div>
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