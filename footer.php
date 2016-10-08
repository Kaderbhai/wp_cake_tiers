<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Cakes
 */

?>

<?php wp_footer(); ?>
	
	<!-- FOOTER
	============================================= -->
	<hr class="margin">
	<footer>
		<div class="container-fluid">
			<div class="container">
				<div class="row">
				
					<div class="col-sm-4 about">
						<h3>About</h3>		
						<?php $about = new WP_Query(array ('post_type' => 'footer_sections')); ?>
						<?php while($about->have_posts()) : $about->the_post(); ?>
						<?php 
						$footer_about = get_field('footer_about');
						?>
							<p align="left"><?php echo $footer_about; ?></p>
				
						<?php wp_reset_postdata(); ?>
						<?php endwhile; ?>						
						</div> <!-- col -->				
					
					<div class="col-sm-4 social-contact">
					<h3>Contact me</h3>
						<?php $social_contact = new WP_Query(array ('post_type' => 'footer_sections')); ?>
						<?php while($social_contact->have_posts()) : $social_contact->the_post(); ?>
						<?php 
						$facebook_link      = get_field('facebook_link');
						$phone_number 		= get_field('phone_number');
						$email 				= get_field('email');
						?>
						<?php if (!empty($facebook_link)) { ?>
								<a href="<?php echo $facebook_link; ?>" target="_blank" class="badge social facebook ?>">
								<i class="fa fa-facebook"></i></a>
								<p><a href="tel:+44<?php echo $phone_number; ?>"><?php echo $phone_number; ?></a></p>
								<p><?php echo $email; ?></p>
						<?php } else { ?>
							
						<?php } ?>
						<?php wp_reset_postdata(); ?>
						<?php endwhile; ?>
					</div> <!-- col -->
					
					<div class="col-sm-4 contact">
						<h3>Find us</h3>
						<?php $find_me = new WP_Query(array ('post_type' => 'footer_sections')); ?>
						<?php while ($find_me->have_posts()) : $find_me->the_post(); ?>
						<?php 
						$house 		= get_field('house');
						$street 	= get_field('street');
						$town 		= get_field('town');
						$postcode 	= get_field('postcode');
						?>
						<p><?php echo $house; ?></p>
						<p><?php echo $street; ?></p>
						<p><?php echo $town; ?></p>
						<p><?php echo $postcode; ?></p>
						
						<?php wp_reset_postdata(); ?>
						<?php endwhile; ?>
					</div> <!-- col -->

				</div> <!-- row -->			
			</div>
		</div> <!-- container -->
		
		<div class="container-fluid copyright">
				<div class="col-sm-8 col-sm-offset-2" align="middle" 	>
					&copy; SeyKad 2016 Freelance Web Development/Design.
				</div>	<!-- col -->
		</div>
	</footer> <!-- footer -->
	
	
	
	<!-- BOOTSTRAP CORE JAVASCRIPT 
	=================================================================== -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>	
	<script src=""></script>
	<script src="<?php bloginfo('template_directory'); ?>/assets/js/bootstrap.min.js"></script>
	
</body>
</html>
