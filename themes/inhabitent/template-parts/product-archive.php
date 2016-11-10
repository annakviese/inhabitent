<?php
/**
* Template part for displaying product archive posts
*
* @package RED_Starter_Theme
*/

?>

<div class = "product-post">
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
   
        <?php if ( 'post' === get_post_type() ) : ?>
        <div class="archive-meta">
            <?php red_starter_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?> / <?php red_starter_posted_by(); ?>
        </div><!-- .archive-meta -->
        <?php endif; ?>
 
   		<?php if ( has_post_thumbnail() ) : ?>
          <?php  echo '<a rel="bookmark" href="'. esc_url( get_permalink() ) .'"/a>';  ?>
            <?php   the_post_thumbnail( 'large' ); ?>
           
            <?php the_title('<p class="archive-title"></h2>'); ?> 
               ..........<?php echo CFS()->get( 'product_price' ); ?> </p>
        <?php endif; ?>
</article><!-- #post-## -->
</div>