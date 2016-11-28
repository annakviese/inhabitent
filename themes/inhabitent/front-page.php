<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>
            <section class="banner-image">
                     <img src="<?php echo get_template_directory_uri() . '/images/logos/inhabitent-logo-full.svg'; ?>" class="banner-img" alt="inhabitent circle logo" />
            </section>

        <div id="primary" class="content-area">
		<!-- <main id="main" class="site-main" role="main"> -->

<!--Section to shop for offers -->
            
            <section class="shopping">
                <h1> Shop stuff </h1>
            <div class="shop-stuff">

        <?php    
           $terms=get_terms('product_type');  

            foreach ($terms as $term) {
            
            
            $url=get_term_link ($term->slug , 'product_type');
            echo "<div class='shop-offers'><img class='shop-icon' src=" . get_template_directory_uri() . "/images/product-type-icons/" . $term->slug . ".svg>";
            echo "<p> $term->description </p> ";
            echo "<a href= '$url' class='button'> $term->name stuff</a> </div>";
        }
        ?>
      </div> <!-- shop stuff -->
      </section> <!--shopping section ends -->



<!--Section with the last 3 journal entries -->

        <section class="journal">
            <h1>inhabitent journal</h1>
            <div class="journal-posts">
                <?php $args=array( 'post_type' => 'post','numberposts' => '3','order' => 'DESC','post_status' => 'publish' );
                    $recent_posts=get_posts( $args ); ?>

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
                    </div> <!--button-->          
                </div> <!-- end recent-posts -->

                 <?php endforeach; wp_reset_postdata(); ?>
            </div> <!--journal posts -->
        </section> <!-- end of journal section -->

<!--adventure section -->
        <section class="adventures-section">
            <h1>adventures</h1>

            <div class="adventure-posts">
                <?php $args=array( 'post_type' => 'adventure','numberposts' => '4','order' => 'DESC','post_status' => 'publish' );
                    $adventure_posts=get_posts( $args );
                    $adventure_posts_html=[];

                    foreach ( $adventure_posts as $post ) : setup_postdata( $post );
                    //add adventure post markup to output buffer object and push into array
                        ob_start(); ?>
                        <?php the_post_thumbnail( 'large' ); ?>

                        <div class="adventure-meta">
                            <h1><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h1>
                            <div class="button"><a href="<?php the_permalink(); ?>">Read More</a></div>
                        </div>

                        <?php array_push( $adventure_posts_html, ob_get_clean() );
                    endforeach; wp_reset_postdata(); ?>

                <div class="adventures">  
                    <div class="left-box">
                        <?php echo $adventure_posts_html[0]; ?>
                    </div>

                    <div class="right-side">
                        <div class="upper-right-box">
                            <?php echo $adventure_posts_html[1]; ?>
                        </div> <!-- upper-right-box-->

                        <div class="bottom-right-section">
                            <div class="left">
                                <?php echo $adventure_posts_html[2]; ?>
                            </div> <!--left-->

                        <div class="right">
                            <?php echo $adventure_posts_html[3]; ?>
                        </div> <!--right-->

                    </div> <!--right-side-->
                </div> <!-- adventures -->
            <a href="<?php echo get_post_type_archive_link('adventure'); ?>" class="more-button"> More Adventures </a>
         </section> <!-- adventure section -->
			        
	</div><!-- #secondary -->
    </div> <!--content area -->

<?php get_footer(); ?>