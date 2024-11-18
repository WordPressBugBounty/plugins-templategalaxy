<?php
if (tg_fs()->is__premium_only()) {
    if (tg_fs()->can_use_premium_code()) {
        /**
         * Title: PRO: Featured Category Carousel
         * Slug: templategalaxy/wydeggrid-category-carousel
         * Categories: wydegrid
         */
        $tg_patterns_images = array(
            TEMPLATEGALAXY_URL . 'assets/images/wydegrid/cat_1.jpg',
            TEMPLATEGALAXY_URL . 'assets/images/wydegrid/cat_2.jpg',
            TEMPLATEGALAXY_URL . 'assets/images/wydegrid/cat_3.jpg',
            TEMPLATEGALAXY_URL . 'assets/images/wydegrid/cat_4.jpg',
        );
?>
        <!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"backgroundColor":"light-shade","layout":{"type":"constrained","contentSize":"1180px"}} -->
        <div class="wp-block-group has-light-shade-background-color has-background" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"lock":{"move":false,"remove":false},"metadata":{"categories":["tg-blocks"],"patternName":"tgcontent-carousel","name":"TG BLOCK: Content Carousel"},"className":"tg-content-carousel"} -->
            <div id="CONTENT-CAROUSEL" class="wp-block-group tg-content-carousel"><!-- wp:group {"lock":{"move":false,"remove":true},"className":"swiper-wrapper","style":{"spacing":{"blockGap":"0"}}} -->
                <div id="slide-holder" class="wp-block-group swiper-wrapper"><!-- wp:group {"className":"swiper-slide","layout":{"type":"constrained"}} -->
                    <div id="TG-SLIDE" class="wp-block-group swiper-slide"><!-- wp:group {"style":{"spacing":{"padding":{"top":"10px","bottom":"20px","left":"10px","right":"10px"},"blockGap":"16px"}},"backgroundColor":"light-color","layout":{"type":"constrained"}} -->
                        <div class="wp-block-group has-light-color-background-color has-background" style="padding-top:10px;padding-right:10px;padding-bottom:20px;padding-left:10px"><!-- wp:cover {"url":"<?php echo esc_url($tg_patterns_images[0]) ?>","id":5728,"dimRatio":0,"customOverlayColor":"#afadad","isUserOverlayColor":true,"minHeight":230,"isDark":false,"className":"wydegrid-hover-cover","layout":{"type":"constrained"}} -->
                            <div class="wp-block-cover is-light wydegrid-hover-cover" style="min-height:230px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#afadad"></span><img class="wp-block-cover__image-background wp-image-5728" alt="" src="<?php echo esc_url($tg_patterns_images[0]) ?>" data-object-fit="cover" />
                                <div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
                                    <p class="has-text-align-center has-large-font-size"></p>
                                    <!-- /wp:paragraph -->
                                </div>
                            </div>
                            <!-- /wp:cover -->

                            <!-- wp:heading {"textAlign":"center","level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"},":hover":{"color":{"text":"var:preset|color|secondary"}}}},"typography":{"textTransform":"uppercase","fontSize":"24px","fontStyle":"normal","fontWeight":"700"}},"textColor":"heading-color"} -->
                            <h3 class="wp-block-heading has-text-align-center has-heading-color-color has-text-color has-link-color" style="font-size:24px;font-style:normal;font-weight:700;text-transform:uppercase"><a href="#">Life Style</a></h3>
                            <!-- /wp:heading -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:group {"className":"swiper-slide","layout":{"type":"constrained"}} -->
                    <div id="TG-SLIDE" class="wp-block-group swiper-slide"><!-- wp:group {"style":{"spacing":{"padding":{"top":"10px","bottom":"20px","left":"10px","right":"10px"},"blockGap":"16px"}},"backgroundColor":"light-color","layout":{"type":"constrained"}} -->
                        <div class="wp-block-group has-light-color-background-color has-background" style="padding-top:10px;padding-right:10px;padding-bottom:20px;padding-left:10px"><!-- wp:cover {"url":"<?php echo esc_url($tg_patterns_images[1]) ?>","id":5759,"dimRatio":0,"customOverlayColor":"#383937","isUserOverlayColor":true,"minHeight":230,"className":"wydegrid-hover-cover","layout":{"type":"constrained"}} -->
                            <div class="wp-block-cover wydegrid-hover-cover" style="min-height:230px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#383937"></span><img class="wp-block-cover__image-background wp-image-5759" alt="" src="<?php echo esc_url($tg_patterns_images[1]) ?>" data-object-fit="cover" />
                                <div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
                                    <p class="has-text-align-center has-large-font-size"></p>
                                    <!-- /wp:paragraph -->
                                </div>
                            </div>
                            <!-- /wp:cover -->

                            <!-- wp:heading {"textAlign":"center","level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"},":hover":{"color":{"text":"var:preset|color|secondary"}}}},"typography":{"textTransform":"uppercase","fontSize":"24px","fontStyle":"normal","fontWeight":"700"}},"textColor":"heading-color"} -->
                            <h3 class="wp-block-heading has-text-align-center has-heading-color-color has-text-color has-link-color" style="font-size:24px;font-style:normal;font-weight:700;text-transform:uppercase"><a href="#">Sports</a></h3>
                            <!-- /wp:heading -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:group {"className":"swiper-slide","layout":{"type":"constrained"}} -->
                    <div id="TG-SLIDE" class="wp-block-group swiper-slide"><!-- wp:group {"style":{"spacing":{"padding":{"top":"10px","bottom":"20px","left":"10px","right":"10px"},"blockGap":"16px"}},"backgroundColor":"light-color","layout":{"type":"constrained"}} -->
                        <div class="wp-block-group has-light-color-background-color has-background" style="padding-top:10px;padding-right:10px;padding-bottom:20px;padding-left:10px"><!-- wp:cover {"url":"<?php echo esc_url($tg_patterns_images[2]) ?>","id":4613,"dimRatio":0,"customOverlayColor":"#c09b92","isUserOverlayColor":true,"minHeight":230,"isDark":false,"className":"wydegrid-hover-cover","layout":{"type":"constrained"}} -->
                            <div class="wp-block-cover is-light wydegrid-hover-cover" style="min-height:230px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#c09b92"></span><img class="wp-block-cover__image-background wp-image-4613" alt="" src="<?php echo esc_url($tg_patterns_images[2]) ?>" data-object-fit="cover" />
                                <div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
                                    <p class="has-text-align-center has-large-font-size"></p>
                                    <!-- /wp:paragraph -->
                                </div>
                            </div>
                            <!-- /wp:cover -->

                            <!-- wp:heading {"textAlign":"center","level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"},":hover":{"color":{"text":"var:preset|color|secondary"}}}},"typography":{"textTransform":"uppercase","fontSize":"24px","fontStyle":"normal","fontWeight":"700"}},"textColor":"heading-color"} -->
                            <h3 class="wp-block-heading has-text-align-center has-heading-color-color has-text-color has-link-color" style="font-size:24px;font-style:normal;font-weight:700;text-transform:uppercase"><a href="#">Technology</a></h3>
                            <!-- /wp:heading -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:group {"className":"swiper-slide","layout":{"type":"constrained"}} -->
                    <div id="TG-SLIDE" class="wp-block-group swiper-slide"><!-- wp:group {"style":{"spacing":{"padding":{"top":"10px","bottom":"20px","left":"10px","right":"10px"},"blockGap":"16px"}},"backgroundColor":"light-color","layout":{"type":"constrained"}} -->
                        <div class="wp-block-group has-light-color-background-color has-background" style="padding-top:10px;padding-right:10px;padding-bottom:20px;padding-left:10px"><!-- wp:cover {"url":"<?php echo esc_url($tg_patterns_images[3]) ?>","id":5759,"dimRatio":0,"customOverlayColor":"#383937","isUserOverlayColor":true,"minHeight":230,"className":"wydegrid-hover-cover","layout":{"type":"constrained"}} -->
                            <div class="wp-block-cover wydegrid-hover-cover" style="min-height:230px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#383937"></span><img class="wp-block-cover__image-background wp-image-5759" alt="" src="<?php echo esc_url($tg_patterns_images[3]) ?>" data-object-fit="cover" />
                                <div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
                                    <p class="has-text-align-center has-large-font-size"></p>
                                    <!-- /wp:paragraph -->
                                </div>
                            </div>
                            <!-- /wp:cover -->

                            <!-- wp:heading {"textAlign":"center","level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"},":hover":{"color":{"text":"var:preset|color|secondary"}}}},"typography":{"textTransform":"uppercase","fontSize":"24px","fontStyle":"normal","fontWeight":"700"}},"textColor":"heading-color"} -->
                            <h3 class="wp-block-heading has-text-align-center has-heading-color-color has-text-color has-link-color" style="font-size:24px;font-style:normal;font-weight:700;text-transform:uppercase"><a href="#">Travels</a></h3>
                            <!-- /wp:heading -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->

                <!-- wp:group {"lock":{"move":false,"remove":true},"className":"tg-slider-control","layout":{"type":"constrained","contentSize":"100%"}} -->
                <div id="slider-control" class="wp-block-group tg-slider-control"><!-- wp:html {"lock":{"move":false,"remove":true}} -->
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
