<?php
//Introduction template
$introduction_title 	= get_field('introduction_title');
$introduction_text 		= get_field('introduction_text');
?>

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