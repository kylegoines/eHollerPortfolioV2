<?php
/*
Template Name: gap
*/
?>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>

        <div class="singleHero">
            <h2 class="workTitle">Gap - Be Bright Campagin</h2>
        </div><!--homeHero-->

        <div class="wrapper">

            <div class="stickArea">
                <div class="workInfo">
                    <h3>Gap</h3>
                    <small>with Burst Media</small>
                    <p>
                       change me!
                    </p>
                </div>

                <div class="imageContent">
                    <img src="<?php bloginfo( 'template_directory' ); ?>/img/gap/computer.jpg" />
                    <img src="<?php bloginfo( 'template_directory' ); ?>/img/gap/standards.jpg" />

                </div>

                <div class="clearFix"></div>
            </div><!--stickyArea-->




<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer') ); ?>