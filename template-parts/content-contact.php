<?php
// Contact Templete
$contact_link_title 		= get_field('contact_link_title');
$contact_link_text 			= get_field('contact_link_text');
$contact_link_button_text 	= get_field('contact_link_button_text');
$contact_link_button_link 	= get_field('contact_link_button_link');
?>


<!-- CONTACT
============================================= -->
<section id="contact">
	<div class="container">
		<div class="row row_contact">
			<img class="border" src="/wp-content/themes/cakes/assets/img/border8.png" alt="border1">
			<div class="col-sm-8 col-sm-offset-2">
				<h2><?php echo $contact_link_title; ?></h2>
				<hr class="title">
				<p><?php echo $contact_link_text; ?></p>
				<button class="btn btn-lg" align="center"><a href="<?php echo $contact_link_button_link; ?>"><?php echo $contact_link_button_text; ?></a></button>
			</div>
			<img class="border" src="/wp-content/themes/cakes/assets/img/border8.png" alt="border1">
		</div>
	</div>
</section>
	

