<?php
/*Template Name: Contact*/

$contact_title 			= get_field('contact_title');
$contact_intro_text 			= get_field('contact_intro_text');
$contact_form    		= get_field('contact_form');

get_header(); ?>

	<!-- CONTACT
	=================================================================== -->
	<section id="contact">
		<div class="container">
			<div class="row row_contact" id="primary">
			<img class="border" src="/wp-content/themes/cakes/assets/img/border8.png" alt="border1">
				<div id="content" class="col-sm-12">
				
					 <section class="main-content" align="center">
						<h2><?php echo $contact_title; ?></h2>
						<hr class="horizontal4">
						<p class="lead"><?php echo $contact_intro_text; ?></p>
						
							<?php echo $contact_form; ?>
						<hr class="horizontal4">		
					 </section><!-- main-content -->

				
				</div> <!-- content col -->
				
								<div class="col-sm-12" id="maps-height">
						<div id="map">
						</div> <!-- map -->
					</div> <!-- col -->
			<img class="border" src="/wp-content/themes/cakes/assets/img/border8.png" alt="border1">				
			</div> <!-- row primary -->
		</div> <!-- container -->
	</section>		
	
					

<script>
		var map;
		function initMap() {
		  map = new google.maps.Map(document.getElementById('map'), {
			center: {lat: 52.4153, lng:  -4.0829}, 
			zoom: 11
		  });
		}

    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD6ow432nOhJDc6h9NT8ea0ggqUI7JNYRI&callback=initMap"></script>	
<?php get_footer(); ?>
