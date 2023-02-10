<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>



<?php get_template_part('inc/rich-snippets'); ?>


<section id="home-page-hero">
	<?php if ( has_post_thumbnail() ) : ?>
		<?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
		<div class="home-page-hero-bg" style="background: url('<?php echo $backgroundImg[0]; ?>') no-repeat center center; background-size: cover;"></div>
	<?php else: ?>
		<div class="home-page-hero-bg"></div>
	<?php endif; ?>

	<div class="wrapper">
		<div class="home-banner">
			<h1>Revolutionary <br />Seed Firmers</h1>

			<?php $croppedimg = get_field('banner_product_image'); if( !empty( $croppedimg ) ): ?>
			    <img class="home-banner-crop" src="<?php echo esc_url($croppedimg['url']); ?>" alt="<?php echo esc_attr($croppedimg['alt']); ?>" />
			<?php else: ?>
				<img class="home-banner-crop" src="<?php bloginfo('url'); ?>/wp-content/themes/florite/images/home-banner-crop-FR_FR100.png" alt="Flo-rite FR100" />
			<?php endif; ?>
		</div>
	</div>
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


<section id="model-viewer-app">
	<model-viewer 
		alt="Flo-rite Seed Firmer 3d preview" 
		src="<?php bloginfo('url'); ?>/wp-content/themes/florite/models/FR_3D_FR100Universal_360Website_4.glb"
		ar ar-modes="webxr scene-viewer quick-look" 
		poster="<?php bloginfo('url'); ?>/wp-content/themes/florite/models/poster.webp" 
		shadow-intensity="1" 
		camera-controls 
		touch-action="pan-y"
		disable-zoom
		camera-target="0m -20m 0m"
		camera-orbit="270deg 84deg auto"
		field-of-view="80deg"
		>
		<div class="progress-bar hide" slot="progress-bar">
			<div class="update-bar"></div>
		</div>
		<div id="ar-prompt">
			<img src="<?php bloginfo('url'); ?>/wp-content/themes/florite/models/ar_hand_prompt.png" alt="hand-icon" />
		</div>
	</model-viewer>

	<div class="buttons-wrapper absolute-buttons center-buttons">
		<a href="<?php bloginfo('url'); ?>/products/firmer/" class="button">Learn more about our seed firmer</a>
	</div>
</section>





<?php get_template_part('inc/banner-testimonies'); ?>



<?php endwhile; endif; ?>
<?php get_footer(); ?>