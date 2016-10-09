<?php
/*Template Name: Home Page*/

$introduction_title 	= get_field('introduction_title');
$introduction_text 		= get_field('introduction_text');

$services_home_title 		= get_field('services_home_title');
$services_home_text 		= get_field('services_home_text');
$services_home_image 		= get_field('services_home_image');
$services_home_button_text  = get_field('services_home_button_text');
$services_home_button_link  = get_field('services_home_button_link');

$gallery_home_title 		= get_field('gallery_home_title');
$gallery_home_text 			= get_field('gallery_home_text');
$gallery_home_image_1 		= get_field('gallery_home_image_1');
$gallery_home_image_2 		= get_field('gallery_home_image_2');
$gallery_home_image_3 		= get_field('gallery_home_image_3');
$gallery_home_button 		= get_field('gallery_home_button');
$gallery_home_button_link   = get_field('gallery_home_button_link');

$contact_link_title 		= get_field('contact_link_title');
$contact_link_text 			= get_field('contact_link_text');
$contact_link_button_text 	= get_field('contact_link_button_text');
$contact_link_button_link 	= get_field('contact_link_button_link');

$reviews_title 				= get_field('reviews_title');
$reviews_text 				= get_field('reviews_text');

get_header(); ?>

<!-- INTRODUCTION 
============================================= -->
<section id="intro">
	<div class="container">
		<div class="row">
			<div class="col-sm-4 col-sm-offset-6">
				<img class="border" src="/wp-content/themes/cakes/assets/img/border1.png" alt="border1">	
				<h1><?php echo $introduction_title; ?></h1>
					<hr>
				<p><?php echo $introduction_text; ?></p>
				<img class="border" src="/wp-content/themes/cakes/assets/img/border1.png" alt="border1">				
			</div>
		</div>
	</div>
</section>
<hr class="margin">

<!-- SERVICES HOME
============================================= -->
<section id="services_home">
	<div class="container">
		<div class="row services_home_row">
			<img class="border" src="/wp-content/themes/cakes/assets/img/border8.png" alt="border1">
			<div class="col-sm-10 col-sm-offset-1">
				<h2><?php echo $services_home_title; ?></h2>
				<hr class="title">
				<div class="col-sm-8">
					<p><?php echo $services_home_text; ?></p>
				</div>
				<div class="col-sm-4">
					<img class="img-responsive" src="<?php echo $services_home_image['url']; ?>" alt="<?php echo $services_home_image['alt']; ?>">
				</div>
				<button class="btn btn-lg" align="center"><a href= "<?php echo $services_home_button_link; ?>"><?php echo $services_home_button_text; ?></a></button>
			</div>	
			<img class="border" src="/wp-content/themes/cakes/assets/img/border8.png" alt="border1">
		</div> <!--row-->
	</div><!--container-->
</section>

<!-- GALLERY HOME
============================================= -->
<section id="gallery_home">
	<div class="container">
		<div class="row gallery_row">
			<img class="border" src="/wp-content/themes/cakes/assets/img/border8.png" alt="border1">	
			<div class="col-sm-8 col-sm-offset-2">
				<h2><?php echo $gallery_home_title; ?></h2>
				<hr class="title">
				<p><?php echo $gallery_home_text; ?></p>
					
					<div class="row">
						<div class="col-sm-4">
							<img class="img-responsive img-circle" src="<?php echo $gallery_home_image_1['url']; ?>"	 alt="<?php echo $gallery_home_image_1['alt']; ?>">		
						</div>
						
						<div class="col-sm-4">
							<img class="img-responsive img-circle" src="<?php echo $gallery_home_image_2['url']; ?>"	 alt="<?php echo $gallery_home_image_2['alt']; ?>">				
						</div>
						<div class="col-sm-4">
							<img class="img-responsive img-circle" src="<?php echo $gallery_home_image_3['url']; ?>"	 alt="<?php echo $gallery_home_image_3['alt']; ?>">				
						</div>
					</div>

				
				<button class="btn btn-lg" align="center"><a href="<?php echo $gallery_home_button_link; ?>"><?php echo $gallery_home_button; ?></a></button>
			</div>
			<img class="border" src="/wp-content/themes/cakes/assets/img/border8.png" alt="border1">
		</div>
	</div>
</section>

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
	


<!-- REVIEWS 
============================================= -->
<section id="reviews">
	<div class="container">
		<div class="row reviews_row">
			<img class="border" src="/wp-content/themes/cakes/assets/img/border8.png" alt="border1">
			<div class="col-sm-10 col-sm-offset-1">
				
				<h2><?php echo $reviews_title; ?></h2>
				<h4><?php echo $reviews_text ?></h4>
				<hr class="title">
							
					<?php $loop = new WP_Query( array('post_type' => 'reviews', 'orderby' => 'post_id', 'order' => 'ASC' ) ); ?>
					
					<?php while( $loop -> have_posts () ) : $loop -> the_post(); ?>
					
						<div class="row review">
							
							<div class="col-sm-4" align="center">
								<?php if (has_post_thumbnail()) {
										the_post_thumbnail ('thumbnail', array('class' => 'img-responsive img-circle')); ;
										
									}
									?>
							</div> <!-- col -->

							<div class="col-sm-8">
								<blockquote>
								<?php the_content(); ?>
								<cite><b><?php the_excerpt(); ?></b></cite>
								</blockquote>
							</div> <!-- col -->
							
						</div><!-- row test -->
						
					<?php endwhile; ?>
		
			</div> <!-- col -->			
			<img class="border" src="/wp-content/themes/cakes/assets/img/border8.png" alt="border1">		 
		</div>
	</div>
</section>


	
<?php get_footer(); ?>
