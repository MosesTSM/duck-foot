<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>



<div class="home-banner-title">
	<div class="home-banner-title-container">
		<h1 id="home-title"><span>The</span> aftermarket paddle tine</h1>
		<h2 id="home-subtitle">Duck Foot is the most trusted name in header precision &amp; harvest efficiency</h2>
	</div>
</div>

<div class="home-page-banner-image-container">
	<img src="<?php bloginfo('url'); ?>/wp-content/themes/duck-foot/images/home-banner-image-crop.webp" alt="combine header loaded with duck foot attachments" />
</div>



<?php if( '' !== get_post()->post_content ) { ?>
	<section id="home-main" class="xsmall-padding bg-primary">
		<div class="home-banner-primary-spacer"></div>
		<div class="wrapper">
			<div class="home-main-content">
		        <?php the_content(); ?>
		    </div>
		</div>
	</section>
<?php } else { ?>
	<div class="home-banner-spacer"></div>
<?php } ?>



<?php if( have_rows('crops') ): ?>
	<section id="crops" class="large-padding">
		<div class="wrapper thin-wrapper">
			<?php if( get_field('crops_title') ): ?>
				<div class="title-half">
					<h2><?php the_field('crops_title'); ?></h2>
				</div>
			<?php endif; ?>
		</div>

		<div class="wrapper small-padding-top">
			<ul class="applicable-crops long-text">
				<?php while( have_rows('crops') ): the_row(); 
					$link = get_sub_field('crop_link');
					$photo = get_sub_field('crop_photo'); 
					?>
					<li class="crop-listing">
						<div class="crop-photo">
							<?php if( $photo ): ?>
								<img src="<?php echo $photo['url']; ?>" alt="<?php echo $photo['alt'] ?>" />
							<?php endif; ?>
						</div>

						<div class="crop-text-bg"></div>

						<?php if( $photo ): ?>
							<div class="crop-text">
						<?php else: ?>
							<div class="crop-text crop-text-no-img">
						<?php endif; ?>
							<p><?php the_sub_field('crop_name'); ?></p>
							<?php if( $link ): 
							    $link_url = $link['url'];
							    $link_title = $link['title'];
							    $link_target = $link['target'] ? $link['target'] : '_self';
							?>
								<a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
									<?php echo $link_title; ?>
								</a>
							<?php break; endif; ?>
						</div>
					</li>
				<?php endwhile; ?>
			</ul>
		</div>
	</section>
<?php endif; ?>










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