<?php
//FAQ template
$faq_title 		= get_field('faq_title');
$faq_content 	= get_field('faq_content');
?>
<!-- FAQ 
============================================= -->
<section id="faq">
	<div class="container">
		<div class="row faq_row">
			<img class="border" src="/wp-content/themes/cakes/assets/img/border8.png" alt="border1">
			<div class="col-sm-8 col-sm-offset-2">
				<h2><?php echo $faq_title; ?></h2>
				<hr class="title">
				<?php echo $faq_content; ?>
			</div>	
			<img class="border" src="/wp-content/themes/cakes/assets/img/border8.png" alt="border1">
		</div> <!--row-->
	</div><!--container-->
</section>