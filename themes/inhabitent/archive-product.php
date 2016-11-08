<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="archive-area">
		<main id="main" class="archive" role="main">

		<?php if ( have_posts() ) : ?>
		
			<header class="archive-header">
				<?php
					
					// the_archive_title( '<h1 class="page-title">', '</h1>' );
					// the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
				<h1>SHOP</h1>
			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>
			
			<!--<section class = "products">-->
				<?php while ( have_posts() ) : the_post(); ?>
					<div class = "product-post">
						
					<?php
						get_template_part( 'template-parts/archive' );
					?>
					
				<?php endwhile; ?>
					
					<?php the_posts_navigation(); ?>
					
				<?php else : ?>
					
					<?php get_template_part( 'template-parts/archive', 'none' ); ?>
					</div> <!-- product post -->
			<?php endif; ?>
			 
		<!--</section>-->
		<!-- products section-->

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
