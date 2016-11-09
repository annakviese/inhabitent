
<?php /* Template Name: About page 
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>
        

			 <section class = "about-hero">
            </section>
        <div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

            <div = "about-text">
            <?php
            $props = CFS()->get_field_info('our_story');
            echo $props['label'];
            ?>
            <?php echo CFS()->get( 'our_story'); ?>

            <?php
            $props = CFS()-> get_field_info('our_team');
            echo $props['label'];
            ?>

            <?php 
            echo CFS()->get( 'our_team');
            ?>
            </div>
		
    </main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer();  ?>