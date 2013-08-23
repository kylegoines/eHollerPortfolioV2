<?php
/*
Template Name: daughter
*/
?>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>

        <div class="singleHero">
            <h2 class="workTitle">Only Daughter - Branding</h2>
        </div><!--homeHero-->

        <div class="wrapper">

            <div class="stickArea">
                <div class="workInfo">
                    <h3>Only Daughter</h3>
                    <small>with Burst Media</small>
                    <p>
                       change me!
                    </p>
                </div>

                <div class="imageContent">
                    <img src="<?php bloginfo( 'template_directory' ); ?>/img/daughter/computer1.jpg" />
                    <img src="<?php bloginfo( 'template_directory' ); ?>/img/daughter/computer2.jpg" />
                    <img src="<?php bloginfo( 'template_directory' ); ?>/img/daughter/computer3.jpg" />

                </div>

                <div class="clearFix"></div>
            </div><!--stickyArea-->




<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer') ); ?>