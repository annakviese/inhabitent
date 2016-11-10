<?php
/**
 * The template for displaying product archive.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>
		<div class = "shop-wrapper">
			<header class="page-header">
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
				?>
			</header><!-- .page-header -->

			
			<!-- getting the product type names-->
				<?php $terms = get_terms('product_type'); ?>
				<?php foreach ($terms as $term) : ?>
				<div class = 'shop-stuff'> <?php $url = get_term_link ($term->slug , 'product_type'); ?>
				<a href='<?php echo $url ?>' class='button'> <?php  echo $term->name ?></a> </div>
				<?php endforeach; ?>
      

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
