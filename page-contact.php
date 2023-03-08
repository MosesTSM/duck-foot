<?php /* Template Name: Contact */ ?>
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
	        <?php the_content(); ?>
        <?php } ?>
    </div>
</section>


<section id="contact" class="small-padding">
	<div class="wrapper thin-wrapper">
		<div class="contact-columns">
			<div class="contact-column contact-info">
				<?php if( get_field('office_phone', 'option') ): ?>
					<div class="contact-info-block">
						<h5>Duck Foot Office:</h5>
						<div class="buttons-wrapper left-buttons">
							<a class="phone-link button" href="tel:<?php the_field('office_phone', 'option'); ?>">
								<?php the_field('office_phone', 'option'); ?>
							</a>
						</div>
					</div>
				<?php endif; ?>

				<div class="contact-info-block">
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
				</div>
			</div><div class="contact-column contact-form">
				<?php echo apply_shortcodes( '[contact-form-7 id="87" title="Contact form"]' ); ?>
			</div>
		</div>
	</div>
</section>



<?php endwhile; endif; ?>
<?php get_footer(); ?>