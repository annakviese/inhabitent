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
                    <button class "shop"> do stuff </button>
                </div> <!-- shop offers --> 

        <!--eat stuff section-->
                <div class = "shop-offers">
                    <img src="<?php echo get_template_directory_uri() . '/images/product-icons/eat.svg'; ?>" alt="simple map icon" />
                    <p>Get back to nature with all the tools and toys
                        you need to enjoy the great outdoors
                    </p>
                    <button class "shop"> do stuff </button>
                </div> <!-- shop offers -->

        <!--sleep stuff section--> 
                <div class = "shop-offers">
                    <img src="<?php echo get_template_directory_uri() . '/images/product-icons/sleep.svg'; ?>" alt="simple map icon" />
                    <p>Get back to nature with all the tools and toys
                        you need to enjoy the great outdoors
                    </p>
                    <button class "shop"> do stuff </button>
                </div> <!-- shop offers -->

         <!--wear stuff section--> 
                <div class = "shop-offers">
                 <img src="<?php echo get_template_directory_uri() . '/images/product-icons/wear.svg'; ?>" alt="simple map icon" />
                    <p>Get back to nature with all the tools and toys
                        you need to enjoy the great outdoors
                    </p>
                    <button class "shop"> do stuff </button>
                </div> <!-- shop offers -->
            </div> <!-- shop stuff -->
            </section> <!-- shopping section ends -->

<!--Section with the last 3 journal entries -->

            <section class = "journal">
               
            </section>

            <section class = "adventures">
            </section>
			        
	</div><!-- #secondary -->

    </body> 


<?php get_footer(); ?>