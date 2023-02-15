<?php /* Template Name: Contact */ ?>
<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>



<?php if( '' !== get_post()->post_content ) { ?>
	<section id="main-content" class="small-padding long-text">		
		<div class="wrapper thin-wrapper">
			<h1><?php the_title(); ?></h1>
	        <?php the_content(); ?>
	    </div>
	</section>
<?php } ?>


<section id="contact">
	<div class="wrapper">
		<div class="contact-columns">
			<div class="contact-column contact-info">
				<p class="footer-address">
					<strong>Mailing Address:</strong><br />
					<?php if( get_field('mailing_address', 'option') ): ?>
						<?php the_field('mailing_address', 'option'); ?><br /> 
					<?php endif; ?>
					<?php if( get_field('city', 'option') ): ?>
						<?php the_field('city', 'option'); ?>, 
					<?php endif; ?>
					<?php if( get_field('province', 'option') ): ?>
						<?php the_field('province', 'option'); ?><br />
					<?php endif; ?>
					<?php if( get_field('country', 'option') ): ?>
						<?php the_field('country', 'option'); ?>,
					<?php endif; ?>
					<?php if( get_field('postal', 'option') ): ?>
						<?php the_field('postal', 'option'); ?>
					<?php endif; ?>
				</p>
			</div><div class="contact-column contact-form">

			</div>
		</div>
	</div>
</section>



<?php endwhile; endif; ?>
<?php get_footer(); ?>