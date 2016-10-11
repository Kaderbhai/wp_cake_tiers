<?php
//Gallery_home template
$gallery_home_title 		= get_field('gallery_home_title');
$gallery_home_text 			= get_field('gallery_home_text');
$gallery_home_image_1 		= get_field('gallery_home_image_1');
$gallery_home_image_2 		= get_field('gallery_home_image_2');
$gallery_home_image_3 		= get_field('gallery_home_image_3');
$gallery_home_button 		= get_field('gallery_home_button');
$gallery_home_button_link   = get_field('gallery_home_button_link');
?>

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