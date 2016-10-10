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
	
			</div>
			<div class="row">
				<div class="col-sm-10 col-sm-offset-1">
			
			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>
			
				<?php echo the_content(); ?>
				</div>
			</div>

			
			<img class="border" src="/wp-content/themes/cakes/assets/img/border8.png" alt="border1">
		</div>
	</div>


	
</section>

<?php get_footer(); ?>
