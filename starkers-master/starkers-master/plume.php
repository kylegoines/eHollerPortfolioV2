<?php
/*
Template Name: plume
*/
?>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>

        <div class="singleHero">
            <h2 class="workTitle">Plume - Packaging</h2>
        </div><!--homeHero-->

        <div class="wrapper">

            <div class="stickArea">
                <div class="workInfo">
                    <h3>Plume</h3>
                    <small>Independent</small>
                    <p>
                       A creative answer for a store that needed a more organic, efficient, display package and shipping design. The packaging and labeling is a versatile and greener way to package products. It uses recycled cardboard to form boxes and designed labels for a double use for shipping as well as a labeling.
                    </p>
                </div>

                <div class="imageContent">
                    <img src="<?php bloginfo( 'template_directory' ); ?>/img/plume/computer1.jpg" />
                    <img src="<?php bloginfo( 'template_directory' ); ?>/img/plume/computer2.jpg" />
                    <img src="<?php bloginfo( 'template_directory' ); ?>/img/plume/computer3.jpg" />

                </div>

                <div class="clearFix"></div>
            </div><!--stickyArea-->




<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer') ); ?>