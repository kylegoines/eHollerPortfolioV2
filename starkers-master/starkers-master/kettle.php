<?php
/*
Template Name: kettle
*/
?>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>

        <div class="singleHero">
            <h2 class="workTitle">Kettle Chips Campagin</h2>
        </div><!--homeHero-->

        <div class="wrapper">

            <div class="stickArea">
                <div class="workInfo">
                    <h3>Kettle Chips</h3>
                    <small>with Burst Media</small>
                    <p>
                       change me!
                    </p>
                </div>

                <div class="imageContent">
                    <img src="<?php bloginfo( 'template_directory' ); ?>/img/kettle/computer.jpg" />
                    <img src="<?php bloginfo( 'template_directory' ); ?>/img/kettle/standards.jpg" />
                    <img src="<?php bloginfo( 'template_directory' ); ?>/img/kettle/float.jpg" />
                </div>

                <div class="clearFix"></div>
            </div><!--stickyArea-->




<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer') ); ?>