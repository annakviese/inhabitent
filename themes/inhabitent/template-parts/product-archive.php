<?php
/**
* Template part for displaying product archive posts
*
* @package RED_Starter_Theme
*/

?>

<div class="product-post">
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
   
        <?php if ( 'post' === get_post_type() ) : ?>
        <div class="archive-meta">
            <?php red_starter_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?> / <?php red_starter_posted_by(); ?>
        </div><!-- .archive-meta -->
        <?php endif; ?>
 
        <?php if ( has_post_thumbnail() ) : ?>
            <div class="product-thumbnail"><a href="<?php the_permalink() ; ?> "> <?php the_post_thumbnail( 'large' ); ?> </a></div>
        <?php endif; ?>

         <div class="product-info">  
         <p> 
            <?php the_title('<p class="archive-title">'); ?> 
               ..........<?php echo CFS()->get( 'product_price' ); ?> </p>
        </div>
</article><!-- #post-## -->
</div>