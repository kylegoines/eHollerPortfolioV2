<?php
/*
Template Name: Home
*/
?>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>

        <div class="homeHero">
            <div class="welcomeImg"></div>
            <div class="pointer"></div>
        </div><!--homeHero-->

        <div class="wrapper">
            <h2>My Work</h2>

            <div class="work">
                <div class="row">
                    <div class="box">
                        <a href="<?php echo esc_url( get_permalink( get_page_by_title( 'gapWork' ) ) ); ?>">
                        </a>
                        <div class="overlay"></div>
                        <div class="workimg gap"></div>
                    </div><!--box-->

                    <div class="box">
                        <a href="<?php echo esc_url( get_permalink( get_page_by_title( 'vh1Work' ) ) ); ?>">
                        </a>
                        <div class="overlay"></div>
                        <div class="workimg vh1"></div>
                    </div><!--box-->

                    <div class="box">
                        <a href="<?php echo esc_url( get_permalink( get_page_by_title( 'nikeWork' ) ) ); ?>">
                        </a>
                        <div class="overlay"></div>
                        <div class="workimg nike"></div>
                    </div><!--box-->

                </div><!--row-->

                <div class="row">
                    
                    <div class="box">
                        <a href="<?php echo esc_url( get_permalink( get_page_by_title( 'kettleWork' ) ) ); ?>">
                        </a>
                        <div class="overlay"></div>
                        <div class="workimg kettle"></div>
                    </div><!--box-->


                    <div class="box">
                        <a href="<?php echo esc_url( get_permalink( get_page_by_title( 'subaruWork' ) ) ); ?>">
                        </a>
                        <div class="overlay"></div>
                        <div class="workimg subaru"></div>
                    </div><!--box-->

                    <div class="box">
                        <a href="<?php echo esc_url( get_permalink( get_page_by_title( 'geicoWork' ) ) ); ?>">
                        </a>
                        <div class="overlay"></div>
                        <div class="workimg geico"></div>
                    </div><!--box-->

                </div><!--row-->

                <div class="row">
                    
                    <div class="box">
                        <a href="<?php echo esc_url( get_permalink( get_page_by_title( 'plumeWork' ) ) ); ?>">
                        </a>
                        <div class="overlay"></div>
                        <div class="workimg plume"></div>
                    </div><!--box-->


                    <div class="box">
                        <a href="<?php echo esc_url( get_permalink( get_page_by_title( 'fcsWork' ) ) ); ?>">
                        </a>
                        <div class="overlay"></div>
                        <div class="workimg fcs"></div>
                    </div><!--box-->

                    <div class="box">
                        <a href="<?php echo esc_url( get_permalink( get_page_by_title( 'daughterWork' ) ) ); ?>">
                        </a>
                        <div class="overlay"></div>
                        <div class="workimg daughter"></div>
                    </div><!--box-->

                </div><!--row-->
                <div class="clearFix"></div>
            </div><!--work-->

            <div class="callout">
                <h4>Agencies, I love Working With Them</h4>
            </div><!--callout-->
            
            <div class="agencyLogos"></div>



<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer') ); ?>