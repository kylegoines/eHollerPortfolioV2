<?php
/**
 * The Template for displaying all single posts
 *
 * Please see /external/starkers-utilities.php for info on Starkers_Utilities::get_template_parts()
 *
 * @package 	WordPress
 * @subpackage 	Starkers
 * @since 		Starkers 4.0
 */
?>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

<article>

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

	



</article>
<?php endwhile; ?>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>