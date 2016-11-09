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
		    <main id="main" class="shop-main" role="shop">

<!--Section to shop for offers -->
            
            <section class = "shopping">
                <h1> Shop stuff </h1>

            <div class = "shop-stuff">
        <?php    
           $terms = get_terms('product_type');  

            foreach ($terms as $term) {
            
            
            $url = get_term_link ($term->slug , 'product_type');
            echo "<div class='shopc'><img class='logotype' src=" . get_template_directory_uri() . "/images/product-type-icons/" . $term->slug . ".svg>";
            echo "<div class = 'shop-offers'><p> $term->description </p> ";
            echo "<a href= '$url' class='button'> $term->name </a> </div>";
        }
        ?>
      </div> <!-- shop stuff -->
      </section> <!--shopping section ends -->



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
                    echo '<a href =' . get_permalink( $recent['ID'] ) .' class="button"> read entry </a>';
                    echo '</div>';
                    }
                $args = array( 'numberposts' => '3', 'order' => 'DESC','post_status' => 'publish' );
                $product_posts = get_posts ( $args);
                ?>
                <!--  <?php foreach ( $product_posts as $post ) : setup_postdata( $post ); 
                //  {
                //     echo '<div class = "product-posts">';
                //     echo '<img src="'.$post["post_thumbnail_id"] .'"/>';
                //     echo get_the_post_thumbnail($post["ID"]);
                //     echo '<a>' . $post["post_title"]. '</a>';
                //     echo '<p class="homedate">'. $post["post_date"]. '</p>';
                //     echo '<p class="homecomments">'. $post["comment_count"]. " comments". '</p>';
                //     echo '<a href =' . get_permalink( $recent['ID'] ) .' class="button"> read entry </a>';
                //     echo '</div>';
                //     }
                // ?>
                // <?php endforeach; wp_reset_postdata(); ?>
                    

                </div> <!-- journal posts -->
            </section> <!-- end of journal section -->

<!--adventure section -->
            <section class = "adventures-section">
                <h1>adventures</h1>
                <div class = "adventures">
                    
                    <div class = "left-box">
                        <a href="#">Getting Back to Nature in a Canoe </a>
                    </div>

                    <div class = "right-side">
                        <div class = "upper-right-box">
                            <a href="#">A Night with Friends at the Beach</a>
    
                        </div>
                        <div class = "bottom-right-section">
                            <div class = "left">
                                <a href="#">Taking in the View at Big Mountain</a>
                            </div>

                            <div class = "right">
                                <a href="#">Star - Gazing at the Night Sky</a>
                            </div>
                        </div>
                    </div>

                    <a href = "#" class="button"> More Adventures </a>
                </div> <!-- adventures -->
            </section>
			        
	</div><!-- #secondary -->

    </body> 


<?php get_footer(); ?>