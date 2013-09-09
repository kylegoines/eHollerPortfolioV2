<?php
/*
Template Name: nike
*/
?>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>

        <div class="singleHero">
            <h2 class="workTitle">Nike - Free Your Run Campaign</h2>
        </div><!--homeHero-->

        <div class="wrapper">

            <div class="stickArea">
                <div class="workInfo">
                    <h3>Nike</h3>
                    <small>with razorfish</small>
                    <p>
                       gave us the opportunity to research, design, and produce the new Nike iD online advertisements. We came up with a solution to animate the shoe through rich media and standard banners while utilizing Burst Media’s independent web sites to showcase the brand. As a repeat client we also designed and developed customized solutions for their Women's spring collection, Nike Free Bionic, and Free your moves campaigns.
                    </p>
                </div>

                <div class="imageContent">
                    <img src="<?php bloginfo( 'template_directory' ); ?>/img/nike/computer1.jpg" />
                    <img src="<?php bloginfo( 'template_directory' ); ?>/img/nike/standards.jpg" />
                    <img src="<?php bloginfo( 'template_directory' ); ?>/img/nike/fixedFooter.jpg" />
                </div>

                <div class="clearFix"></div>
            </div><!--stickyArea-->




<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer') ); ?>