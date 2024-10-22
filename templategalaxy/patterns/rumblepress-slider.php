<?php
if (tg_fs()->is__premium_only()) {
    if (tg_fs()->can_use_premium_code()) {
        /**
         * Title: PRO: Slider
         * Slug: templategalaxy/rumblepress-slider
         * Categories: rumblepress
         */
        $tg_patterns_images = array(
            TEMPLATEGALAXY_URL . 'assets/images/rumblepress/slider_1.jpg',
            TEMPLATEGALAXY_URL . 'assets/images/rumblepress/slider_2.jpg',
            TEMPLATEGALAXY_URL . 'assets/images/rumblepress/slider_3.jpg',
        );
?>
        <!-- wp:group {"lock":{"move":false,"remove":false},"metadata":{"categories":["tg-blocks"],"patternName":"tg-slider","name":"TG BLOCK: Slider"},"className":"tg-slider"} -->
        <div id="TG-SLIDER" class="wp-block-group tg-slider"><!-- wp:group {"lock":{"move":false,"remove":true},"className":"swiper-wrapper"} -->
            <div id="slide-holder" class="wp-block-group swiper-wrapper"><!-- wp:cover {"url":"<?php echo esc_url($tg_patterns_images[0]) ?>","id":5542,"dimRatio":80,"isUserOverlayColor":true,"focalPoint":{"x":0.5,"y":0.2},"minHeight":640,"gradient":"dark-gradient-two","contentPosition":"center center","className":"swiper-slide","style":{"spacing":{"padding":{"right":"28px","left":"28px","top":"28px","bottom":"28px"}},"border":{"radius":{"bottomLeft":"0px","bottomRight":"0px"}}},"layout":{"type":"constrained","contentSize":"980px"}} -->
                <div class="wp-block-cover swiper-slide" style="border-bottom-left-radius:0px;border-bottom-right-radius:0px;padding-top:28px;padding-right:28px;padding-bottom:28px;padding-left:28px;min-height:640px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-80 has-background-dim wp-block-cover__gradient-background has-background-gradient has-dark-gradient-two-gradient-background"></span><img class="wp-block-cover__image-background wp-image-5542" alt="" src="<?php echo esc_url($tg_patterns_images[0]) ?>" style="object-position:50% 20%" data-object-fit="cover" data-object-position="50% 20%" />
                    <div class="wp-block-cover__inner-container"><!-- wp:heading {"textAlign":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"spacing":{"margin":{"top":"0","bottom":"0"}},"typography":{"fontSize":"84px"}},"textColor":"light-color"} -->
                        <h2 class="wp-block-heading has-text-align-center has-light-color-color has-text-color has-link-color" style="margin-top:0;margin-bottom:0;font-size:84px">Your Ultimate Guide to Achieving Balance in Life</h2>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color"} -->
                        <p class="has-text-align-center has-light-color-color has-text-color has-link-color">Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.</p>
                        <!-- /wp:paragraph -->

                        <!-- wp:buttons {"style":{"spacing":{"margin":{"top":"40px"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
                        <div class="wp-block-buttons" style="margin-top:40px"><!-- wp:button {"backgroundColor":"transparent","className":"is-style-button-hover-secondary-bgcolor","style":{"spacing":{"padding":{"left":"40px","right":"40px","top":"14px","bottom":"14px"}},"border":{"radius":"0px","width":"1px"}},"fontSize":"medium"} -->
                            <div class="wp-block-button has-custom-font-size is-style-button-hover-secondary-bgcolor has-medium-font-size"><a class="wp-block-button__link has-transparent-background-color has-background wp-element-button" style="border-width:1px;border-radius:0px;padding-top:14px;padding-right:40px;padding-bottom:14px;padding-left:40px">Explore More</a></div>
                            <!-- /wp:button -->
                        </div>
                        <!-- /wp:buttons -->
                    </div>
                </div>
                <!-- /wp:cover -->

                <!-- wp:cover {"url":"<?php echo esc_url($tg_patterns_images[1]) ?>","id":5727,"dimRatio":80,"isUserOverlayColor":true,"minHeight":640,"gradient":"dark-gradient-two","contentPosition":"center center","className":"swiper-slide","style":{"spacing":{"padding":{"right":"28px","left":"28px","top":"28px","bottom":"28px"}},"border":{"radius":{"bottomLeft":"0px","bottomRight":"0px"}}},"layout":{"type":"constrained","contentSize":"980px"}} -->
                <div class="wp-block-cover swiper-slide" style="border-bottom-left-radius:0px;border-bottom-right-radius:0px;padding-top:28px;padding-right:28px;padding-bottom:28px;padding-left:28px;min-height:640px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-80 has-background-dim wp-block-cover__gradient-background has-background-gradient has-dark-gradient-two-gradient-background"></span><img class="wp-block-cover__image-background wp-image-5727" alt="" src="<?php echo esc_url($tg_patterns_images[1]) ?>" data-object-fit="cover" />
                    <div class="wp-block-cover__inner-container"><!-- wp:heading {"textAlign":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"spacing":{"margin":{"top":"0","bottom":"0"}},"typography":{"fontSize":"84px"}},"textColor":"light-color"} -->
                        <h2 class="wp-block-heading has-text-align-center has-light-color-color has-text-color has-link-color" style="margin-top:0;margin-bottom:0;font-size:84px">Essential Gear for Every Sports Enthusiast</h2>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color"} -->
                        <p class="has-text-align-center has-light-color-color has-text-color has-link-color">Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.</p>
                        <!-- /wp:paragraph -->

                        <!-- wp:buttons {"style":{"spacing":{"margin":{"top":"40px"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
                        <div class="wp-block-buttons" style="margin-top:40px"><!-- wp:button {"backgroundColor":"transparent","className":"is-style-button-hover-secondary-bgcolor","style":{"spacing":{"padding":{"left":"40px","right":"40px","top":"14px","bottom":"14px"}},"border":{"radius":"0px","width":"1px"}},"fontSize":"medium"} -->
                            <div class="wp-block-button has-custom-font-size is-style-button-hover-secondary-bgcolor has-medium-font-size"><a class="wp-block-button__link has-transparent-background-color has-background wp-element-button" style="border-width:1px;border-radius:0px;padding-top:14px;padding-right:40px;padding-bottom:14px;padding-left:40px">Explore More</a></div>
                            <!-- /wp:button -->
                        </div>
                        <!-- /wp:buttons -->
                    </div>
                </div>
                <!-- /wp:cover -->

                <!-- wp:cover {"url":"<?php echo esc_url($tg_patterns_images[2]) ?>","id":5728,"dimRatio":80,"isUserOverlayColor":true,"minHeight":640,"gradient":"dark-gradient-two","contentPosition":"center center","className":"swiper-slide","style":{"spacing":{"padding":{"right":"28px","left":"28px","top":"28px","bottom":"28px"}},"border":{"radius":{"bottomLeft":"0px","bottomRight":"0px"}}},"layout":{"type":"constrained","contentSize":"980px"}} -->
                <div class="wp-block-cover swiper-slide" style="border-bottom-left-radius:0px;border-bottom-right-radius:0px;padding-top:28px;padding-right:28px;padding-bottom:28px;padding-left:28px;min-height:640px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-80 has-background-dim wp-block-cover__gradient-background has-background-gradient has-dark-gradient-two-gradient-background"></span><img class="wp-block-cover__image-background wp-image-5728" alt="" src="<?php echo esc_url($tg_patterns_images[2]) ?>" data-object-fit="cover" />
                    <div class="wp-block-cover__inner-container"><!-- wp:heading {"textAlign":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"spacing":{"margin":{"top":"0","bottom":"0"}},"typography":{"fontSize":"84px"}},"textColor":"light-color"} -->
                        <h2 class="wp-block-heading has-text-align-center has-light-color-color has-text-color has-link-color" style="margin-top:0;margin-bottom:0;font-size:84px">Wanderlust Chronicles, Tales From My Global Travelss</h2>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color"} -->
                        <p class="has-text-align-center has-light-color-color has-text-color has-link-color">Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.</p>
                        <!-- /wp:paragraph -->

                        <!-- wp:buttons {"style":{"spacing":{"margin":{"top":"40px"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
                        <div class="wp-block-buttons" style="margin-top:40px"><!-- wp:button {"backgroundColor":"transparent","className":"is-style-button-hover-secondary-bgcolor","style":{"spacing":{"padding":{"left":"40px","right":"40px","top":"14px","bottom":"14px"}},"border":{"radius":"0px","width":"1px"}},"fontSize":"medium"} -->
                            <div class="wp-block-button has-custom-font-size is-style-button-hover-secondary-bgcolor has-medium-font-size"><a class="wp-block-button__link has-transparent-background-color has-background wp-element-button" style="border-width:1px;border-radius:0px;padding-top:14px;padding-right:40px;padding-bottom:14px;padding-left:40px">Explore More</a></div>
                            <!-- /wp:button -->
                        </div>
                        <!-- /wp:buttons -->
                    </div>
                </div>
                <!-- /wp:cover -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"lock":{"move":false,"remove":true},"className":"tg-slider-control","layout":{"type":"constrained","contentSize":"100%"}} -->
            <div id="slider-control" class="wp-block-group tg-slider-control"><!-- wp:html {"lock":{"move":false,"remove":true}} -->
                <div class="swiper-pagination tg-slider-pagination"></div>
                <div class="tg-swiper-navigations">
                    <div class="swiper-button-next tg-slider-next"></div>
                    <div class="swiper-button-prev tg-slider-prev"></div>
                </div>
                <!-- /wp:html -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->
<?php }
}
