<?php
/*Template Name: Services*/
$services_titles				= get_field('services_titles');
$services_intro_text			= get_field('services_intro_text');	
$services_button_link			= get_field('services_button_link');
$services_button_text			= get_field('services_button_text');
$services_cc_title_1			= get_field('services_cc_title_1');
$services_cc_text_1				= get_field('services_cc_text_1');
$services_cc_cherry_1			= get_field('services_cc_cherry_1');	
$services_cc_title_2			= get_field('services_cc_title_2');
$services_cc_text_2				= get_field('services_cc_text_2');
$services_cc_cherry_2			= get_field('services_cc_cherry_2');
$services_cc_title_3			= get_field('services_cc_title_3');
$services_cc_text_3				= get_field('services_cc_text_3');
$services_cc_cherry_3			= get_field('services_cc_cherry_3');
get_header(); ?>

<!-- SERVICES 
============================================= -->
<section id="services">
	<div class="container">
		<div class="services_row">
			<img class="border" src="/wp-content/themes/cakes/assets/img/border8.png" alt="border1">
			<div class="col-sm-8 col-sm-offset-2">
				<h2><?php echo $services_titles; ?></h2>
				<hr class="title">
				<p><?php echo $services_intro_text; ?></p>
				
				<div class="row rservices">
				
					<div class="col-sm-4">
						<span><?php echo $services_cc_cherry_1; ?></span>
						<h4><?php echo $services_cc_title_1; ?></h4>
						<p><?php echo $services_cc_text_1; ?></p>
					</div> <!--price-->
						
					<div class="col-sm-4">
						<span><?php echo $services_cc_cherry_2; ?></span>
						<h4><?php echo $services_cc_title_2; ?></h4>
						<p><?php echo $services_cc_text_2; ?></p>
					</div> <!--price-->
					
					<div class="col-sm-4">
						<span><?php echo $services_cc_cherry_3; ?></span>
						<h4><?php echo $services_cc_title_3; ?></h4>
						<p><?php echo $services_cc_text_3; ?></p>
					</div> <!--price-->
				
				</div><!--services-->
				
				<button class="btn btn-lg" align="center"><a href="<?php echo $services_button_link; ?>"><?php echo $services_button_text; ?></a></button>
			</div>	
			<img class="border" src="/wp-content/themes/cakes/assets/img/border8.png" alt="border1">
		</div> <!--row-->
	</div><!--container-->
</section>
<?php get_template_part('template-parts/content','faq'); ?>
<?php get_footer(); ?>
