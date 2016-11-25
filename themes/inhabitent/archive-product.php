<?php
/**
 * The template for displaying product archive.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>
	<div id="primary" class="content-area">
		<div class="shop-wrapper">
			<header class="page-header">
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
				?>

			<!-- getting the product type names-->
				<?php $terms=get_terms('product_type'); ?>
				<?php foreach ($terms as $term) : ?>
				<div class='shop-stuff'> 
					<?php $url=get_term_link ($term->slug , 'product_type'); ?>
					<p><a href="<?php echo $url ?>"><?php echo $term->name ?></a></p> 
				</div>
				<?php endforeach; ?>

				</header><!-- .page-header -->
      

		<div class="archive-area">

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
		</div>
	


<?php get_footer(); ?>
