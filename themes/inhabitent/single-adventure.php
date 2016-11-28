<?php
/**
 * The template for displaying all single adventure posts.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>
	<header class="adventure-image">
		<?php if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail( 'large' ); ?>
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div id="primary" class="content-area">
		<!--<main id="main" class="site-main" role="main">-->
			<?php while ( have_posts() ) : the_post(); ?>
				<div class="content-wrapper">
				<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
				<?php red_starter_posted_by(); ?>

				<div class="entry-content">
					<?php the_content(); ?>
					<?php
						wp_link_pages( array(
							'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
							'after'  => '</div>',
						) );
						
					?>
				</div><!-- .entry-content -->

				<div class="social-buttons">
					<a href="#" class="social-btn">
						<i class="fa fa-facebook" aria-hidden="true"> like </i>
					</a> 
					<a href="#" class="social-btn">
						<i class="fa fa-twitter" aria-hidden="true"> tweet </i>
					</a> 
					<a href="#" class="social-btn">
						<i class="fa fa-pinterest" aria-hidden="true"> pin </i>
					</a> 
					</div> <!--social buttons -->
				</div> <!-- content-wrapper -->

				<?php
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
				?>
		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>