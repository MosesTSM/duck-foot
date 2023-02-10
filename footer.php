		</main>
		<?php get_template_part('inc/banner-contact'); ?>


		<footer class="small-padding small-text">
			<div class="wrapper footer-wrapper center-align">
				<a href="<?php bloginfo('url'); ?>/" class="footer-logo-link">
					<?php get_template_part('inc/icon'); ?>
				</a>


				<p class="footer-address">
					<?php if( get_field('address', 'option') ): ?>
						<?php the_field('address', 'option'); ?><br /> 
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
					<?php if( get_field('code', 'option') ): ?>
						<?php the_field('code', 'option'); ?>
					<?php endif; ?>
				</p>	


				<div class="distributed-by">
					<p>Distributed by</p>
					<a href="https://thunderstruckag.com" target="_blank">
						<img src="<?php bloginfo('url'); ?>/wp-content/themes/florite/images/TAG-logo.png" alt="Thunderstruck Ag Equipment" />
					</a>
				</div>


				<div class="footer-notes">
					<div class="copyright">
						&copy;<?php echo date('Y'); ?> Flo-rite Seed Firmers | <a href="<?php bloginfo('url'); ?>/privacy-policy">Privacy Policy</a>
					</div>
					<div class="website-by">
						Powered by <a href="https://thunderstrucksales.com" id="website-by-tsm" target="_blank">		
							<svg version="1.1" id="tsm-credit-badge" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 26 18" width="26px" height="18px" preserveAspectRatio="xMidYMid meet">
								<polygon class="tsm-badge-uprights tsm-badge-upright-left" points="5.9,0 2,18 8.3,18 9.6,14.9 5.9,14.9 9.1,0 "/>
								<polygon class="tsm-badge-uprights tsm-badge-upright-right" points="20.8,0 17.5,14.9 13.3,14.9 11.1,18 20.1,18 24,0 "/>
								<polygon class="tsm-badge-bolt" points="10.6,0 9.9,3.1 12.8,3.1 10.1,9.4 13.2,9.4 9.6,18 17.5,6.2 14.5,6.2 15.8,3.1 18.6,3.1 19.3,0 "/>
							</svg>
						</a>
					</div>
				</div>
			</div>


			<svg class="footer-illustrations footer-illustrations-left" x="0px" y="0px" viewBox="0 0 430 380" width="430" height="380" preserveAspectRatio="xMidYMid meet">
				<g class="footer-left-one">
					<path d="M250.6,15c7.3,0.1,19.5,2.5,25.2,11c7.9,11.7-1.6,22.3-1.6,22.3s-72.8,21.8-102,31.6 s-42.1,17.8-42.1,17.8l-1.4-3.1c0,0-1,0.3-25.1,16.1s-48.9,36-58,56.2c-5.5,12.3-8.3,25.7-8,39.2l-23.1,37.7 c-0.8,1.2-2,2-3.5,2.3c-2.5,0.6-5-0.6-6.2-2.8c-0.5-1.1-0.5-2.3,0.1-3.4l18.9-37.7c0.5-11.2,3.1-22.1,7.7-32.3 	c7.6-16.7,14.3-27.3,51.7-57.1S159.8,61,159.8,61l1.2-1.5l8.3-2.8"/>
					<path d="M169.3,56.7l80.7-27.3c2.8-0.9,4.3-3.4,3.7-5.9c-0.7-3-1.9-5.8-3.4-8.4 c-2.9-5.1-7.8-8.9-13.6-10.4C216.2-1,195.3,8.7,175,33c-5.5,6.6-9.8,11.9-13,15.9C158.7,53.1,163.7,58.5,169.3,56.7L169.3,56.7z "/>
				</g>
				<g class="footer-left-two">
					<path d="M249.6,16.1c7.3,0.1,19.5,2.5,25.2,11c7.9,11.7-1.6,22.3-1.6,22.3s-72.8,21.8-102,31.6 s-42.1,17.8-42.1,17.8l-1.4-3.1c0,0-1,0.3-25.1,16.1s-48.9,36-58,56.2c-5.5,12.3-8.3,25.7-8,39.2l-23.1,37.7 c-0.8,1.2-2,2-3.5,2.3c-2.5,0.6-5-0.6-6.2-2.8c-0.5-1.1-0.5-2.3,0.1-3.4l18.9-37.7c0.5-11.2,3.1-22.1,7.7-32.3	c7.6-16.7,14.3-27.3,51.7-57.1S158.8,62,158.8,62l1.2-1.5l8.3-2.8"/>
					<path d="M168.3,57.7l80.7-27.3c2.8-0.9,4.3-3.4,3.7-5.9c-0.7-3-1.9-5.8-3.4-8.4 c-2.9-5.1-7.8-8.9-13.6-10.4c-20.6-5.6-41.6,4-61.8,28.3c-5.5,6.6-9.8,11.9-13,15.9C157.7,54.2,162.7,59.6,168.3,57.7 L168.3,57.7z"/>
				</g>
				<g class="footer-left-three">
					<path d="M247.8,16.9c7.3,0.1,19.5,2.5,25.2,11c7.9,11.7-1.6,22.3-1.6,22.3s-72.8,21.8-102,31.6 s-42.1,17.8-42.1,17.8l-1.4-3.1c0,0-1,0.3-25.1,16.1s-48.9,36-58,56.2c-5.5,12.3-8.3,25.7-8,39.2l-23.1,37.7 c-0.8,1.2-2,2-3.5,2.3c-2.5,0.6-5-0.6-6.2-2.8c-0.5-1.1-0.5-2.3,0.1-3.4L21,204.1c0.5-11.2,3.1-22.1,7.7-32.3 c7.6-16.7,14.3-27.3,51.7-57.1S157,62.9,157,62.9l1.2-1.5l8.3-2.8"/>
					<path d="M166.5,58.6l80.7-27.3c2.8-0.9,4.3-3.4,3.7-5.9c-0.7-3-1.9-5.8-3.4-8.4 c-2.9-5.1-7.8-8.9-13.6-10.4c-20.6-5.6-41.6,4-61.8,28.3c-5.5,6.6-9.8,11.9-13,15.9C155.9,55,160.9,60.4,166.5,58.6L166.5,58.6z"/>
				</g>
			</svg>

			<svg class="footer-illustrations footer-illustrations-right" x="0px" y="0px" viewBox="0 0 430 380" width="430" height="380" preserveAspectRatio="xMidYMid meet">
				<g class="footer-right-one">
					<path d="M250.6,15c7.3,0.1,19.5,2.5,25.2,11c7.9,11.7-1.6,22.3-1.6,22.3s-72.8,21.8-102,31.6 s-42.1,17.8-42.1,17.8l-1.4-3.1c0,0-1,0.3-25.1,16.1s-48.9,36-58,56.2c-5.5,12.3-8.3,25.7-8,39.2l-23.1,37.7 c-0.8,1.2-2,2-3.5,2.3c-2.5,0.6-5-0.6-6.2-2.8c-0.5-1.1-0.5-2.3,0.1-3.4l18.9-37.7c0.5-11.2,3.1-22.1,7.7-32.3 	c7.6-16.7,14.3-27.3,51.7-57.1S159.8,61,159.8,61l1.2-1.5l8.3-2.8"/>
					<path d="M169.3,56.7l80.7-27.3c2.8-0.9,4.3-3.4,3.7-5.9c-0.7-3-1.9-5.8-3.4-8.4 c-2.9-5.1-7.8-8.9-13.6-10.4C216.2-1,195.3,8.7,175,33c-5.5,6.6-9.8,11.9-13,15.9C158.7,53.1,163.7,58.5,169.3,56.7L169.3,56.7z "/>
				</g>
				<g class="footer-right-two">
					<path d="M249.6,16.1c7.3,0.1,19.5,2.5,25.2,11c7.9,11.7-1.6,22.3-1.6,22.3s-72.8,21.8-102,31.6 s-42.1,17.8-42.1,17.8l-1.4-3.1c0,0-1,0.3-25.1,16.1s-48.9,36-58,56.2c-5.5,12.3-8.3,25.7-8,39.2l-23.1,37.7 c-0.8,1.2-2,2-3.5,2.3c-2.5,0.6-5-0.6-6.2-2.8c-0.5-1.1-0.5-2.3,0.1-3.4l18.9-37.7c0.5-11.2,3.1-22.1,7.7-32.3	c7.6-16.7,14.3-27.3,51.7-57.1S158.8,62,158.8,62l1.2-1.5l8.3-2.8"/>
					<path d="M168.3,57.7l80.7-27.3c2.8-0.9,4.3-3.4,3.7-5.9c-0.7-3-1.9-5.8-3.4-8.4 c-2.9-5.1-7.8-8.9-13.6-10.4c-20.6-5.6-41.6,4-61.8,28.3c-5.5,6.6-9.8,11.9-13,15.9C157.7,54.2,162.7,59.6,168.3,57.7 L168.3,57.7z"/>
				</g>
				<g class="footer-right-three">
					<path d="M247.8,16.9c7.3,0.1,19.5,2.5,25.2,11c7.9,11.7-1.6,22.3-1.6,22.3s-72.8,21.8-102,31.6 s-42.1,17.8-42.1,17.8l-1.4-3.1c0,0-1,0.3-25.1,16.1s-48.9,36-58,56.2c-5.5,12.3-8.3,25.7-8,39.2l-23.1,37.7 c-0.8,1.2-2,2-3.5,2.3c-2.5,0.6-5-0.6-6.2-2.8c-0.5-1.1-0.5-2.3,0.1-3.4L21,204.1c0.5-11.2,3.1-22.1,7.7-32.3 c7.6-16.7,14.3-27.3,51.7-57.1S157,62.9,157,62.9l1.2-1.5l8.3-2.8"/>
					<path d="M166.5,58.6l80.7-27.3c2.8-0.9,4.3-3.4,3.7-5.9c-0.7-3-1.9-5.8-3.4-8.4 c-2.9-5.1-7.8-8.9-13.6-10.4c-20.6-5.6-41.6,4-61.8,28.3c-5.5,6.6-9.8,11.9-13,15.9C155.9,55,160.9,60.4,166.5,58.6L166.5,58.6z"/>
				</g>
			</svg>
		</footer>
		
	</div><!-- Container -->

<?php wp_footer(); ?> <!-- Retrieves the javascript from functions file -->

</body>
</html>