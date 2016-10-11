<?php
//Services_home template

$services_home_title 		= get_field('services_home_title');
$services_home_text 		= get_field('services_home_text');
$services_home_image 		= get_field('services_home_image');
$services_home_button_text  = get_field('services_home_button_text');
$services_home_button_link  = get_field('services_home_button_link');
?>

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