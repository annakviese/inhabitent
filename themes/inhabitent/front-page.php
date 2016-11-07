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

            <!--<div id="primary" class="content-area">
		    <main id="main" class="site-main" role="main">-->

<!--Section to shop for offers -->
            
            <section class = "shopping">
                <h1> Shop stuff </h1>
            <div class = "shop-stuff">
        <!--do stuff section-->
                <div class = "shop-offers">
                    <img src="<?php echo get_template_directory_uri() . '/images/product-icons/do.svg'; ?>" alt="simple map icon" />
                    <p>Get back to nature with all the tools and toys
                        you need to enjoy the great outdoors
                    </p>
                    <a href = "#" class="button"> do stuff </a>
                </div> <!-- shop offers --> 

        <!--eat stuff section-->
                <div class = "shop-offers">
                    <img src="<?php echo get_template_directory_uri() . '/images/product-icons/eat.svg'; ?>" alt="simple map icon" />
                    <p>Get back to nature with all the tools and toys
                        you need to enjoy the great outdoors
                    </p>
                    <a href = "#" class="button"> eat stuff </a>
                </div> <!-- shop offers -->

        <!--sleep stuff section--> 
                <div class = "shop-offers">
                    <img src="<?php echo get_template_directory_uri() . '/images/product-icons/sleep.svg'; ?>" alt="simple map icon" />
                    <p>Get back to nature with all the tools and toys
                        you need to enjoy the great outdoors
                    </p>
                    <a href = "#" class="button"> sleep stuff </a>
                </div> <!-- shop offers -->

         <!--wear stuff section--> 
                <div class = "shop-offers">
                 <img src="<?php echo get_template_directory_uri() . '/images/product-icons/wear.svg'; ?>" alt="simple map icon" />
                    <p>Get back to nature with all the tools and toys
                        you need to enjoy the great outdoors
                    </p>
                    <a href = "#" class="button"> wear stuff </a>
                </div> <!-- shop offers -->
            </div> <!-- shop stuff -->
            </section> <!-- shopping section ends -->



<!--Section with the last 3 journal entries -->

            <section class = "journal">
                <h1>inhabitent journal</h1>
                <div class = "journal-posts">
                <?php          
                    //Get 3 recent published posts in descending order
                    $args = array( 'numberposts' => '3', 'order' => 'DESC','post_status' => 'publish' );
                    $recent_posts = wp_get_recent_posts( $args );
                    
                    // now get the data 
                    foreach( $recent_posts as $recent )
                    {
                    echo '<div class = "recent-posts">';
                    echo '<img src="'.$recent["post_thumbnail_id"] .'"/>';
                    echo get_the_post_thumbnail($recent["ID"]);
                    echo '<a>' . $recent["post_title"]. '</a>';
                    echo '<p class="homedate">'. $recent["post_date"]. '</p>';
                    echo '<p class="homecomments">'. $recent["comment_count"]. " comments". '</p>';
                    echo '</div>';
                    }
                    ?>
                </div> <!-- journal posts -->
            </section> <!-- end of journal section -->

            <section class = "adventures">
            </section>
			        
	</div><!-- #secondary -->

    </body> 


<?php get_footer(); ?>