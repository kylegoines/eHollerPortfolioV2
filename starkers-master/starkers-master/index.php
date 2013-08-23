<?php
/**
 * The main template file
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file 
 *
 * Please see /external/starkers-utilities.php for info on Starkers_Utilities::get_template_parts()
 *
 * @package 	WordPress
 * @subpackage 	Starkers
 * @since 		Starkers 4.0
 */
?>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>

<?php if ( have_posts() ): ?>

<?php while ( have_posts() ) : the_post(); ?>

        <div class="singleHero">
            <h2 class="workTitle"><?php the_title() ?></h2>
            <div class="sideLogo"></div>
        </div><!--homeHero-->

        <div class="wrapper">

            <div class="blogWrap">


                <?php the_content(); ?>
<div class="next"><?php next_post_link() ?></div>
                <div class="theEnd"></div>
<div class="prev"><?php previous_post_link() ?></div>
            </div><!--blogwrap-->

<?php endwhile; ?>

<?php else: ?>
<h2>No posts to display</h2>
<?php endif; ?>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer') ); ?>