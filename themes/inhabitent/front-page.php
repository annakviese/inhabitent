<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>
            <section class = "banner-image">
                     <img src="<?php echo get_template_directory_uri() . '/images/logos/inhabitent-logo-full.svg'; ?>" class="banner-img" alt="inhabitent circle logo" />
            </section>

        <div id="primary" class="content-area">
		<!-- <main id="main" class="site-main" role="main"> -->

<!--Section to shop for offers -->
            
            <section class = "shopping">
                <h1> Shop stuff </h1>
            <div class = "shop-stuff">

        <?php    
           $terms = get_terms('product_type');  

            foreach ($terms as $term) {
            
            
            $url = get_term_link ($term->slug , 'product_type');
            echo "<div class = 'shop-offers'><img class='shop-icon' src=" . get_template_directory_uri() . "/images/product-type-icons/" . $term->slug . ".svg>";
            echo "<p> $term->description </p> ";
            echo "<a href= '$url' class='button'> $term->name stuff</a> </div>";
        }
        ?>
      </div> <!-- shop stuff -->
      </section> <!--shopping section ends -->



<!--Section with the last 3 journal entries -->

            <section class = "journal">
                <h1>inhabitent journal</h1>
                <div class = "journal-posts">
           <?php $args = array( 'post_type' => 'post','numberposts' => '3','order' => 'DESC','post_status' => 'publish' );
            $recent_posts = get_posts( $args ); ?>

            <?php foreach( $recent_posts as $post ) : setup_postdata($post); ?>
            <div class="recent-posts">
                <?php the_post_thumbnail();?>
                <p class="homedate"><?php the_date(); ?> /
                <?php comments_number(); ?> </p>
                <h2>
                <a href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a>
                </h2>
                <div class="button">
                    <a href="<?php the_permalink(); ?>"> read entry </a>
                </div>
            </div> <!-- end recent-posts -->

            <?php endforeach; wp_reset_postdata(); ?>

            </section> <!-- end of journal section -->

<!--adventure section -->
            <section class = "adventures-section">
                <h1>adventures</h1>
                
                <div class = "adventures">
                    
                    <div class = "left-box">
                        <h1><a href="#">Getting Back to Nature in a Canoe </a></h1>
                        <div class="button">
                            <a href="#"> read more </a>
                        </div>
                    </div>

                    <div class = "right-side">
                        <div class = "upper-right-box">
                           <h2> <a href="#">A Night with Friends at the Beach</a></h2>
                           <div class="button">
                                <a href="#"> read more </a>
                             </div>
                        </div>
                        <div class = "bottom-right-section">
                            <div class = "left">
                                 <h3>   <a href="#">Taking in the View at Big Mountain</a></h3>
                                <div class="button">
                                    <a href="#"> read more </a>
                                </div>
                            </div>

                            <div class = "right">
                               <h3> <a href="#">Star - Gazing at the Night Sky</a></h3>
                               <div class="button">
                                    <a href="#"> read more </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <a href = "#" class="more-button"> More Adventures </a>
                </div> <!-- adventures -->
            </section> <!-- adventure section -->
			        
	</div><!-- #secondary -->
    </div> <!--content area -->
    </body> 


<?php get_footer(); ?>