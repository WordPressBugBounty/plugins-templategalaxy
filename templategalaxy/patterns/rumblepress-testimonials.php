<?php
if (tg_fs()->is__premium_only()) {
    if (tg_fs()->can_use_premium_code()) {
        /**
         * Title: PRO: Testimonial Carousel
         * Slug: templategalaxy/rumblepress-testimonials
         * Categories: rumblepress
         */
        $tg_patterns_images = array(
            TEMPLATEGALAXY_URL . 'assets/images/patterns-assets/testimonial_1.jpg',
            TEMPLATEGALAXY_URL . 'assets/images/patterns-assets/testimonial_2.jpg',
            TEMPLATEGALAXY_URL . 'assets/images/patterns-assets/testimonial_3.jpg',
        );
?>
        <!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
        <div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"lock":{"move":false,"remove":false},"metadata":{"categories":["tg-blocks"],"patternName":"tgcontent-carousel","name":"TG BLOCK: Content Carousel"},"className":"tg-content-carousel","style":{"spacing":{"padding":{"bottom":"40px"}}}} -->
            <div id="CONTENT-CAROUSEL" class="wp-block-group tg-content-carousel" style="padding-bottom:40px"><!-- wp:group {"lock":{"move":false,"remove":true},"className":"swiper-wrapper","style":{"spacing":{"blockGap":"0"}}} -->
                <div id="slide-holder" class="wp-block-group swiper-wrapper"><!-- wp:group {"className":"swiper-slide","layout":{"type":"constrained"}} -->
                    <div id="TG-SLIDE" class="wp-block-group swiper-slide"><!-- wp:group {"style":{"border":{"radius":"5px","color":"#ebebeb","width":"1px"},"spacing":{"padding":{"top":"30px","bottom":"30px","left":"30px","right":"30px"}}},"layout":{"type":"constrained"}} -->
                        <div class="wp-block-group has-border-color" style="border-color:#ebebeb;border-width:1px;border-radius:5px;padding-top:30px;padding-right:30px;padding-bottom:30px;padding-left:30px"><!-- wp:paragraph {"fontSize":"medium"} -->
                            <p class="has-medium-font-size">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            <!-- /wp:paragraph -->

                            <!-- wp:group {"style":{"spacing":{"margin":{"top":"36px"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                            <div class="wp-block-group" style="margin-top:36px"><!-- wp:image {"id":239,"width":"undefinedpx","height":"60px","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"50px"}}} -->
                                <figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url($tg_patterns_images[0]) ?>" alt="" class="wp-image-239" style="border-radius:50px;width:undefinedpx;height:60px" /></figure>
                                <!-- /wp:image -->

                                <!-- wp:group {"style":{"spacing":{"blockGap":"7px"}},"layout":{"type":"flex","orientation":"vertical"}} -->
                                <div class="wp-block-group"><!-- wp:heading {"level":4,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}}} -->
                                    <h4 class="wp-block-heading" style="font-style:normal;font-weight:500">George Gerrat</h4>
                                    <!-- /wp:heading -->

                                    <!-- wp:paragraph {"style":{"color":{"text":"#8c8a8a"}},"fontSize":"normal"} -->
                                    <p class="has-text-color has-normal-font-size" style="color:#8c8a8a">Freelancer</p>
                                    <!-- /wp:paragraph -->
                                </div>
                                <!-- /wp:group -->
                            </div>
                            <!-- /wp:group -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:group {"className":"swiper-slide","layout":{"type":"constrained"}} -->
                    <div id="TG-SLIDE" class="wp-block-group swiper-slide"><!-- wp:group {"style":{"border":{"color":"#ebebeb","width":"1px"},"spacing":{"padding":{"top":"30px","bottom":"30px","left":"30px","right":"30px"}}},"layout":{"type":"constrained"}} -->
                        <div class="wp-block-group has-border-color" style="border-color:#ebebeb;border-width:1px;padding-top:30px;padding-right:30px;padding-bottom:30px;padding-left:30px"><!-- wp:paragraph {"fontSize":"medium"} -->
                            <p class="has-medium-font-size">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            <!-- /wp:paragraph -->

                            <!-- wp:group {"style":{"spacing":{"margin":{"top":"36px"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                            <div class="wp-block-group" style="margin-top:36px"><!-- wp:image {"id":241,"width":"undefinedpx","height":"60px","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"50px"}}} -->
                                <figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url($tg_patterns_images[1]) ?>" alt="" class="wp-image-241" style="border-radius:50px;width:undefinedpx;height:60px" /></figure>
                                <!-- /wp:image -->

                                <!-- wp:group {"style":{"spacing":{"blockGap":"7px"}},"layout":{"type":"flex","orientation":"vertical"}} -->
                                <div class="wp-block-group"><!-- wp:heading {"level":4,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}}} -->
                                    <h4 class="wp-block-heading" style="font-style:normal;font-weight:500">Manika Lamier</h4>
                                    <!-- /wp:heading -->

                                    <!-- wp:paragraph {"style":{"color":{"text":"#8c8a8a"}},"fontSize":"normal"} -->
                                    <p class="has-text-color has-normal-font-size" style="color:#8c8a8a">Blogger</p>
                                    <!-- /wp:paragraph -->
                                </div>
                                <!-- /wp:group -->
                            </div>
                            <!-- /wp:group -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:group {"className":"swiper-slide","layout":{"type":"constrained"}} -->
                    <div id="TG-SLIDE" class="wp-block-group swiper-slide"><!-- wp:group {"style":{"border":{"color":"#ebebeb","width":"1px"},"spacing":{"padding":{"top":"30px","bottom":"30px","left":"30px","right":"30px"}}},"layout":{"type":"constrained"}} -->
                        <div class="wp-block-group has-border-color" style="border-color:#ebebeb;border-width:1px;padding-top:30px;padding-right:30px;padding-bottom:30px;padding-left:30px"><!-- wp:paragraph {"fontSize":"medium"} -->
                            <p class="has-medium-font-size">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            <!-- /wp:paragraph -->

                            <!-- wp:group {"style":{"spacing":{"margin":{"top":"36px"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                            <div class="wp-block-group" style="margin-top:36px"><!-- wp:image {"id":241,"width":"undefinedpx","height":"60px","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"50px"}}} -->
                                <figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url($tg_patterns_images[2]) ?>" alt="" class="wp-image-241" style="border-radius:50px;width:undefinedpx;height:60px" /></figure>
                                <!-- /wp:image -->

                                <!-- wp:group {"style":{"spacing":{"blockGap":"7px"}},"layout":{"type":"flex","orientation":"vertical"}} -->
                                <div class="wp-block-group"><!-- wp:heading {"level":4,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}}} -->
                                    <h4 class="wp-block-heading" style="font-style:normal;font-weight:500">Manika Lamier</h4>
                                    <!-- /wp:heading -->

                                    <!-- wp:paragraph {"style":{"color":{"text":"#8c8a8a"}},"fontSize":"normal"} -->
                                    <p class="has-text-color has-normal-font-size" style="color:#8c8a8a">Blogger</p>
                                    <!-- /wp:paragraph -->
                                </div>
                                <!-- /wp:group -->
                            </div>
                            <!-- /wp:group -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:group {"className":"swiper-slide","layout":{"type":"constrained"}} -->
                    <div id="TG-SLIDE" class="wp-block-group swiper-slide"><!-- wp:group {"style":{"border":{"color":"#ebebeb","width":"1px"},"spacing":{"padding":{"top":"30px","bottom":"30px","left":"30px","right":"30px"}}},"layout":{"type":"constrained"}} -->
                        <div class="wp-block-group has-border-color" style="border-color:#ebebeb;border-width:1px;padding-top:30px;padding-right:30px;padding-bottom:30px;padding-left:30px"><!-- wp:paragraph {"fontSize":"medium"} -->
                            <p class="has-medium-font-size">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            <!-- /wp:paragraph -->

                            <!-- wp:group {"style":{"spacing":{"margin":{"top":"36px"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                            <div class="wp-block-group" style="margin-top:36px"><!-- wp:image {"id":241,"width":"undefinedpx","height":"60px","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"50px"}}} -->
                                <figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url($tg_patterns_images[1]) ?>" alt="" class="wp-image-241" style="border-radius:50px;width:undefinedpx;height:60px" /></figure>
                                <!-- /wp:image -->

                                <!-- wp:group {"style":{"spacing":{"blockGap":"7px"}},"layout":{"type":"flex","orientation":"vertical"}} -->
                                <div class="wp-block-group"><!-- wp:heading {"level":4,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}}} -->
                                    <h4 class="wp-block-heading" style="font-style:normal;font-weight:500">Manika Lamier</h4>
                                    <!-- /wp:heading -->

                                    <!-- wp:paragraph {"style":{"color":{"text":"#8c8a8a"}},"fontSize":"normal"} -->
                                    <p class="has-text-color has-normal-font-size" style="color:#8c8a8a">Blogger</p>
                                    <!-- /wp:paragraph -->
                                </div>
                                <!-- /wp:group -->
                            </div>
                            <!-- /wp:group -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->

                <!-- wp:group {"lock":{"move":false,"remove":true},"className":"tg-slider-control","layout":{"type":"constrained","contentSize":"100%"}} -->
                <div id="slider-control" class="wp-block-group tg-slider-control"><!-- wp:html {"lock":{"move":false,"remove":true}} -->
                    <div class="tgcontent-carousel-pagination swiper-pagination"></div>
                    <div class="tg-swiper-navigations">
                        <div class="swiper-button-next tgcontent-slide-next"></div>
                        <div class="swiper-button-prev tgcontent-slide-prev"></div>
                    </div>
                    <!-- /wp:html -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->
<?php }
}
