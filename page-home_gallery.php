<?php
/*Template Name: Home Gallery*/

$gallery_page_title 		= get_field('gallery_page_title');
$gallery_page_text 			= get_field('gallery_page_text');
$gallery_link_image_1 		= get_field('gallery_link_image_1');
$gallery_link_image_2 		= get_field('gallery_link_image_2');
$gallery_link_image_3 		= get_field('gallery_link_image_3');
$gallery_link_image_4 		= get_field('gallery_link_image_4');
$gallery_link_1 			= get_field('gallery_link_1');
$gallery_link_2 			= get_field('gallery_link_2');
$gallery_link_3 			= get_field('gallery_link_3');
$gallery_link_4 			= get_field('gallery_link_4');
$gallery_link_text_1 		= get_field('gallery_link_text_1');
$gallery_link_text_2 		= get_field('gallery_link_text_2');
$gallery_link_text_3 		= get_field('gallery_link_text_3');
$gallery_link_text_4 		= get_field('gallery_link_text_4');

get_header(); ?>

<!-- GALLERY HOME PAGE
============================================= -->
<section id="gallery_home_page">
	<div class="container">
		<div class="row gallery_row">
			<img class="border" src="/wp-content/themes/cakes/assets/img/border8.png" alt="border1">	
			<div class="col-sm-8 col-sm-offset-2">
				<h2><?php echo $gallery_page_title; ?></h2>
				<hr class="title">
				<p><?php echo $gallery_page_text; ?></p>
				<br>
				<br>		
			</div>
			
			<div class="col-sm-5 col-sm-offset-1">
				<a href="<?php echo $gallery_link_1; ?>"><img class="img-responsive img-circle" src="<?php echo $gallery_link_image_1['url']; ?>" alt="<?php echo $gallery_link_image_1['alt']; ?>"></img></a>
				<p><?php echo $gallery_link_text_1; ?></p>
			</div>
			<div class="col-sm-5">
				<a href="<?php echo $gallery_link_2; ?>"><img class="img-responsive img-circle" src="<?php echo $gallery_link_image_2['url']; ?>" alt="<?php echo $gallery_link_image_2['alt']; ?>"></img></a>
				<p><?php echo $gallery_link_text_2; ?></p>			
			</div>
			<div class="col-sm-5 col-sm-offset-1">
				<a href="<?php echo $gallery_link_3; ?>"><img class="img-responsive img-circle" src="<?php echo $gallery_link_image_3['url']; ?>" alt="<?php echo $gallery_link_image_3['alt']; ?>"></img></a>
				<p><?php echo $gallery_link_text_3; ?></p>
			</div>
			<div class="col-sm-5">
				<a href="<?php echo $gallery_link_4; ?>"><img class="img-responsive img-circle" src="<?php echo $gallery_link_image_4['url']; ?>" alt="<?php echo $gallery_link_image_4['alt']; ?>"></img></a>
				<p><?php echo $gallery_link_text_4; ?></p>
			</div>
			
			<img class="border" src="/wp-content/themes/cakes/assets/img/border8.png" alt="border1">
		</div>
	</div>


	
</section>

<?php get_footer(); ?>