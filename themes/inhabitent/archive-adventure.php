<?php
/**
 *
 * Template Name: Adventures Page
 *
**/

get_header(); ?>
	<div id="primary" class="content-area">
		<!--<main id="main" class="site-main" role="main">-->
		<div class = "adventure-posts-wrapper">
			<header class="page-header">
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
				?>
			</header>
			<?php
			$args = array(
						'post_type' => 'adventure',
						'orderby' => 'post_date',
						'order' => 'ASC',
						'posts_per_page' => 4
					);
					$adventures = new WP_Query( $args );

				if( $adventures->have_posts() ) : ?>
					<header>
						<h2 class="page-title screen-reader-text"><?php single_post_title(); ?></h2>
					</header>

					<div class = "adventure-posts-grid">
						<?php /* Start the Loop */ ?>
						<?php while ( $adventures->have_posts() ) { 
										$adventures->the_post(); ?>

							<div class = "adventure-post">
								<div class = "adventure-post-image">
									<?php the_post_thumbnail( 'large' ); ?>
								</div>

								<div class = "adventure-post-meta">
									<div class = "post-title">
										<h3><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h3>
									</div>

									<div class="button">
										<a href="<?php the_permalink(); ?>">Read More</a>
									</div>
								</div>
							</div>
						<?php 
						}; ?>
					</div>
				<?php endif; ?>
		</div>
		<!--</main>  main  -->
	</div> <!-- content area -->

<?php get_footer(); ?>
