<?php
/*Template Name: Gallery*/


get_header(); ?>

<!-- GALLERY
============================================= -->
<section id="gallery">
	<div class="container">
		<div class="row gallery_row">
			<img class="border" src="/wp-content/themes/cakes/assets/img/border8.png" alt="border1">	
			<div class="col-sm-8 col-sm-offset-2">
				<h2><?php echo the_title(); ?></h2>
				<hr class="title">
				<p>Have a look at some of our cakes below. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur, at. </p>
				<br>
				<br>	
			</div>
			<div class="row">
				<div class="col-sm-10 col-sm-offset-1">
					<?php echo the_content(); ?>
				</div>
			</div>

			
			<img class="border" src="/wp-content/themes/cakes/assets/img/border8.png" alt="border1">
		</div>
	</div>


	
</section>

<?php get_footer(); ?>
