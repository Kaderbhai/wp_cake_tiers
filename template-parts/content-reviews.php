<?php
//Reviews Template
$reviews_title 				= get_field('reviews_title');
$reviews_text 				= get_field('reviews_text');
?>
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