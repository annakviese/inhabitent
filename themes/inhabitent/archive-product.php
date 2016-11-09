<?php
/**
 * The template for displaying product archive.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="archive-area">

		<?php if ( have_posts() ) : ?>
		
			<header class="page-header">
				<h1>SHOP</h1>
			</header><!-- .page-header -->

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
			
			 
		<!--</section>-->
		<!-- products section-->

		
	</div><!-- #primary -->


<?php get_footer(); ?>
