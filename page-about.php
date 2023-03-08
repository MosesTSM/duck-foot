<?php /* Template Name: About */ ?>
<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>



<section id="main-content" class="small-padding long-text">		
	<div class="about-title wrapper medium-wrapper xsmall-padding-bottom">
		<?php if( get_field('page_title') ): ?>
			<h1><?php the_field('page_title'); ?></h1>
		<?php else: ?>
			<h1><?php the_title(); ?></h1>				
		<?php endif; ?>
	</div>

	<?php if( '' !== get_post()->post_content ) { ?>
		<div class="about-content">
			<div class="about-content-image">
				<?php the_post_thumbnail(); ?>
			</div>

			<div class="wrapper medium-wrapper">
				<div class="about-content-adjust">
			        <?php the_content(); ?>
			    </div>
			</div>
	    </div>
	<?php } ?>
</section>


<section id="award" class="bg-black">
	<?php $image = get_field('award_photo'); if( !empty( $image ) ): ?>
	    <img class="awards-photo" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
	<?php endif; ?>
	<div class="wrapper center-align">
		<h2><?php the_field('awards_title'); ?></h2>
		<h5><?php the_field('awards_subtitle'); ?></h5>
	</div>
</section>



<?php endwhile; endif; ?>
<?php get_footer(); ?>