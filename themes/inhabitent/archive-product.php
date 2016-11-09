<?php
/**
 * The template for displaying product archive.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>
		<div class = "shop-wrapper">
			<header class="page-header">
				<h1>SHOP</h1>
			</header><!-- .page-header -->

		<div id="primary" class="archive-area">

			<?php if ( have_posts() ) : ?>
			<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>
		
					<?php
						get_template_part( 'template-parts/product-archive' );
					?>
					
				<?php endwhile; ?>
					
					<?php the_posts_navigation(); ?>
					
				<?php else : ?>
					
					<?php get_template_part( 'template-parts/product-archive', 'none' ); ?>
					
			<?php endif; ?>
		
			</div><!-- #primary -->
		</div>
	


<?php get_footer(); ?>
