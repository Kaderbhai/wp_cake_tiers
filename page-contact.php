<?php
/*Template Name: Contact*/
$contact_title         = get_field('contact_title');
$contact_lead_text     = get_field('contact_lead_text');
get_header(); ?>

<!-- CONTACT
=================================================================== -->
<section id="contact">
	<div class="container">
		<div class="row" id="primary">
			<div id="content" class="col-sm-12">
			
				 <section class="main-content" align="center">
					<h2><?php echo $contact_title; ?></h2>
					<hr class="horizontal4">
					<p class="lead"><?php echo $contact_lead_text; ?></p>
					
					<form role="form" class="clearfix">
						<div class="row">
							<?php while (have_posts() ) : the_post(); ?>	
								<?php the_content(); ?>
							<?php endwhile; ?>
						</div><!-- row -->				
					</form>
				 
				 </section><!-- main-content -->
			<hr>
			
			</div> <!-- content col -->
			
							<div class="col-sm-12" id="maps-height">
					<div id="map">
					</div> <!-- map -->
				</div> <!-- col -->
				
		</div> <!-- row primary -->
		<hr>
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
