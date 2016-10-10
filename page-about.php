<?php
/*Template Name: About*/

$about_title 		= get_field('about_title');
$about_text 		= get_field('about_text');
$about_image 		= get_field('about_image');

get_header(); ?>

<!-- ABOUT
============================================= -->	
<section id="about">
	<div class="container">
		<div class="row">
			<img class="border" src="/wp-content/themes/cakes/assets/img/border8.png" alt="border1">
			<div class="col-sm-8 col-sm-offset-2">
				<h1><?php echo $about_title; ?></h1>
				<hr>
				
				<div class="col-sm-12">
					<img class="img-responsive" src="<?php echo $about_image['url']; ?>" alt="<?php echo $about_image['alt']; ?>">
								<hr>
				</div>
		
			</div>
				
				<div class="col-sm-12">
				
					<p><?php echo $about_text; ?></p>
					
				</div>
			
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
				
			<img class="border" src="/wp-content/themes/cakes/assets/img/border8.png" alt="border1">
		</div>
	</div>
</section>

<?php get_footer(); ?>
