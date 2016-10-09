<?php
/*Template Name: Contact*/
get_header(); ?>

	<!-- CONTACT
	=================================================================== -->
	<section id="contact">
		<div class="container">
			<div class="row row_contact" id="primary">
			<img class="border" src="/wp-content/themes/cakes/assets/img/border8.png" alt="border1">
				<div id="content" class="col-sm-12">
				
					 <section class="main-content" align="center">
						<h2>Get in Contact!</h2>
						<hr class="horizontal4">
						<p class="lead">Have any questions about the course? Fell free to get in touch with me! I&rsquo;ll do my best to get back to you asap!.</p>
						
						<form role="form" class="clearfix">
								<div class="col-sm-6">
									<div class="form-group"></div>
										<label for="contact-name" class="sr-only">Name</label>
										<input type="text" class="form-control input-lg"id="contact-name" placeholder="Your name.."></input>
									</div><!-- form-group -->
								
								<div class="col-sm-6">
									<div class="form-group"></div>
									<label for="contact-email" class="sr-only">Email</label>
									<input type="text" class="form-control input-lg"id="contact-email" placeholder="Your email.."></input>
								</div><!-- form-group -->

								<div class="col-sm-12">
									<div class="form-group"></div>
									<label for="contact-subject" class="sr-only">Subject</label>
									<input type="text" class="form-control input-lg"id="contact-subject" placeholder="Your subject.."></input>
								</div><!-- form-group -->
								
								<div class="col-sm-12">
									<div class="form-group"></div>
									<label for="contact-words" class="sr-only">Message</label>
									<textarea type="text" class="form-control input-lg" id="contact-words" placeholder="Your message.." rows="8"></textarea>
								</div><!-- form-group -->
							<br>
							<br/>
							<input type="submit" class="btn btn-info btn-lg pull-right" value="Get in touch &raquo;"></input>
							
						</form>
					 
					 </section><!-- main-content -->
				<hr>
				
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
