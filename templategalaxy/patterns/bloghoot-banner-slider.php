<?php
if (tg_fs()->is__premium_only()) {
    if (tg_fs()->can_use_premium_code()) {
        /**
         * Title: PRO: Banner Slider
         * Slug: templategalaxy/bloghoot-banner-slider
         * Categories: bloghoot
         */
?>
        <!-- wp:group {"align":"full","style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"},"blockGap":"10px"}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
        <div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"10px"}}}} -->
            <div class="wp-block-columns"><!-- wp:column {"width":"67%"} -->
                <div class="wp-block-column" style="flex-basis:67%"><!-- wp:group {"lock":{"move":false,"remove":false},"metadata":{"categories":["tg-blocks"],"patternName":"tgpost-slider","name":"TG BLOCK: Post Slider"},"className":"tg-post-slider-holder","style":{"spacing":{"padding":{"right":"0","left":"0","top":"0","bottom":"0"}},"dimensions":{"minHeight":""}},"layout":{"type":"constrained","contentSize":"100%"}} -->
                    <div id="POST-SLIDER" class="wp-block-group tg-post-slider-holder" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:query {"queryId":13,"query":{"perPage":"3","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"lock":{"move":false,"remove":true},"className":"tg-post-slider"} -->
                        <div class="wp-block-query tg-post-slider"><!-- wp:post-template {"lock":{"move":false,"remove":true},"className":"tg-swiper-holder swiper-wrapper","layout":{"type":"default","columnCount":1}} -->
                            <!-- wp:cover {"useFeaturedImage":true,"isUserOverlayColor":true,"minHeight":450,"gradient":"dark-gradient","contentPosition":"bottom left","className":"is-style-bloghoot-cover-zoom-on-hover","style":{"spacing":{"padding":{"right":"32px","left":"32px","top":"28px","bottom":"28px"},"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
                            <div class="wp-block-cover has-custom-content-position is-position-bottom-left is-style-bloghoot-cover-zoom-on-hover" style="padding-top:28px;padding-right:32px;padding-bottom:28px;padding-left:32px;min-height:450px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim has-background-gradient has-dark-gradient-gradient-background"></span>
                                <div class="wp-block-cover__inner-container"><!-- wp:post-terms {"term":"category","className":"is-style-categories-mixed-bullet","style":{"elements":{"link":{"color":{"text":"var:preset|color|background"},":hover":{"color":{"text":"var:preset|color|secondary"}}}},"typography":{"textTransform":"uppercase"}},"fontSize":"x-small"} /-->

                                    <!-- wp:post-title {"isLink":true,"className":"is-style-bloghoot-post-title-primary-underline-on-hover","style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"},":hover":{"color":{"text":"var:preset|color|primary"}}}},"typography":{"fontStyle":"normal","fontWeight":"600","textDecoration":"none"},"spacing":{"padding":{"top":"0","bottom":"0"},"margin":{"top":"10px","bottom":"20px"}}}} /-->

                                    <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                                    <div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                                        <div class="wp-block-group"><!-- wp:avatar {"size":40,"style":{"border":{"radius":"40px"}}} /-->

                                            <!-- wp:post-author-name {"className":"is-style-default","style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"textColor":"background"} /-->
                                        </div>
                                        <!-- /wp:group -->

                                        <!-- wp:paragraph -->
                                        <p>-</p>
                                        <!-- /wp:paragraph -->

                                        <!-- wp:post-date {"format":"M j, Y","className":"is-style-default","style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"textColor":"background"} /-->
                                    </div>
                                    <!-- /wp:group -->
                                </div>
                            </div>
                            <!-- /wp:cover -->
                            <!-- /wp:post-template -->

                            <!-- wp:group {"lock":{"move":true,"remove":true},"className":"tg-slider-control","layout":{"type":"constrained","contentSize":"100%"}} -->
                            <div id="slider-control" class="wp-block-group tg-slider-control"><!-- wp:html {"lock":{"move":false,"remove":true}} -->
                                <div class="tgpost-slider-pagination swiper-pagination"></div>
                                <div class="tg-swiper-navigations">
                                    <div class="swiper-button-next tgpost-slider-next"></div>
                                    <div class="swiper-button-prev tgpost-slider-prev"></div>
                                </div>
                                <!-- /wp:html -->
                            </div>
                            <!-- /wp:group -->
                        </div>
                        <!-- /wp:query -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:column -->

                <!-- wp:column {"width":"33%"} -->
                <div class="wp-block-column" style="flex-basis:33%"><!-- wp:query {"queryId":3,"query":{"perPage":2,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"ignore","inherit":false,"taxQuery":null,"parents":[],"format":[]}} -->
                    <div class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"blockGap":"10px"}}} -->
                        <!-- wp:cover {"useFeaturedImage":true,"isUserOverlayColor":true,"minHeight":220,"gradient":"dark-gradient","contentPosition":"bottom left","className":"is-style-bloghoot-cover-zoom-on-hover","style":{"spacing":{"padding":{"top":"16px","bottom":"16px","left":"24px","right":"24px"}}},"layout":{"type":"constrained"}} -->
                        <div class="wp-block-cover has-custom-content-position is-position-bottom-left is-style-bloghoot-cover-zoom-on-hover" style="padding-top:16px;padding-right:24px;padding-bottom:16px;padding-left:24px;min-height:220px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim has-background-gradient has-dark-gradient-gradient-background"></span>
                            <div class="wp-block-cover__inner-container"><!-- wp:post-terms {"term":"category","className":"is-style-categories-mixed-bullet","style":{"typography":{"textTransform":"uppercase"},"elements":{"link":{"color":{"text":"var:preset|color|background"},":hover":{"color":{"text":"var:preset|color|primary"}}}}},"fontSize":"x-small"} /-->

                                <!-- wp:post-title {"level":4,"isLink":true,"className":"is-style-bloghoot-post-title-primary-underline-on-hover","style":{"elements":{"link":{"color":{"text":"var:preset|color|background"},":hover":{"color":{"text":"var:preset|color|primary"}}}},"spacing":{"margin":{"top":"10px","bottom":"0"}},"typography":{"fontStyle":"normal","fontWeight":"600"}}} /-->

                                <!-- wp:group {"style":{"spacing":{"margin":{"top":"12px","bottom":"0"},"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
                                <div class="wp-block-group" style="margin-top:12px;margin-bottom:0"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                                    <div class="wp-block-group"><!-- wp:avatar {"size":24,"style":{"border":{"radius":"40px"}}} /-->

                                        <!-- wp:post-author-name {"className":"is-style-default","style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"textColor":"background"} /-->
                                    </div>
                                    <!-- /wp:group -->

                                    <!-- wp:paragraph -->
                                    <p>-</p>
                                    <!-- /wp:paragraph -->

                                    <!-- wp:post-date {"format":"M j, Y","className":"is-style-default","style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"textColor":"background"} /-->
                                </div>
                                <!-- /wp:group -->
                            </div>
                        </div>
                        <!-- /wp:cover -->
                        <!-- /wp:post-template -->

                        <!-- wp:query-no-results -->
                        <!-- wp:paragraph {"placeholder":"Add text or blocks that will display when a query returns no results."} -->
                        <p></p>
                        <!-- /wp:paragraph -->
                        <!-- /wp:query-no-results -->
                    </div>
                    <!-- /wp:query -->
                </div>
                <!-- /wp:column -->
            </div>
            <!-- /wp:columns -->

            <!-- wp:group {"lock":{"move":false,"remove":false},"metadata":{"categories":["tg-blocks"],"patternName":"tgpost-carousel","name":"TG BLOCK: Post Carousel"},"className":"tg-post-slider-holder","style":{"spacing":{"padding":{"right":"0","left":"0","top":"0","bottom":"0"}},"dimensions":{"minHeight":""}},"layout":{"type":"constrained","contentSize":"100%"}} -->
            <div id="POST-CAROUSEL" class="wp-block-group tg-post-slider-holder" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:query {"queryId":13,"query":{"perPage":"4","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"lock":{"move":false,"remove":true},"className":"tg-post-carousel-gap"} -->
                <div class="wp-block-query tg-post-carousel-gap"><!-- wp:post-template {"lock":{"move":false,"remove":true},"className":"tg-swiper-holder swiper-wrapper","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"default","columnCount":1}} -->
                    <!-- wp:cover {"useFeaturedImage":true,"isUserOverlayColor":true,"minHeight":220,"gradient":"dark-gradient","contentPosition":"bottom left","className":"is-style-bloghoot-cover-zoom-on-hover","style":{"spacing":{"padding":{"right":"24px","left":"24px","top":"24px","bottom":"24px"},"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
                    <div class="wp-block-cover has-custom-content-position is-position-bottom-left is-style-bloghoot-cover-zoom-on-hover" style="padding-top:24px;padding-right:24px;padding-bottom:24px;padding-left:24px;min-height:220px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim has-background-gradient has-dark-gradient-gradient-background"></span>
                        <div class="wp-block-cover__inner-container"><!-- wp:post-terms {"term":"category","className":"is-style-categories-mixed-bullet","style":{"typography":{"textTransform":"uppercase"},"elements":{"link":{"color":{"text":"var:preset|color|background"},":hover":{"color":{"text":"var:preset|color|primary"}}}}},"fontSize":"x-small"} /-->

                            <!-- wp:post-title {"level":4,"isLink":true,"className":"is-style-bloghoot-post-title-primary-underline-on-hover","style":{"elements":{"link":{"color":{"text":"var:preset|color|background"},":hover":{"color":{"text":"var:preset|color|primary"}}}},"typography":{"fontStyle":"normal","fontWeight":"600"}}} /-->

                            <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
                            <div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                                <div class="wp-block-group"><!-- wp:avatar {"size":24,"style":{"border":{"radius":"40px"}}} /-->

                                    <!-- wp:post-author-name {"className":"is-style-default","style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"textColor":"background"} /-->
                                </div>
                                <!-- /wp:group -->

                                <!-- wp:paragraph -->
                                <p>-</p>
                                <!-- /wp:paragraph -->

                                <!-- wp:post-date {"format":"M j, Y","className":"is-style-default","style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color"} /-->
                            </div>
                            <!-- /wp:group -->
                        </div>
                    </div>
                    <!-- /wp:cover -->
                    <!-- /wp:post-template -->

                    <!-- wp:group {"lock":{"move":true,"remove":true},"className":"tg-slider-control","layout":{"type":"constrained","contentSize":"100%"}} -->
                    <div id="slider-control" class="wp-block-group tg-slider-control"><!-- wp:html {"lock":{"move":false,"remove":true}} -->
                        <div class="swiper-pagination tgpost-carousel-pagination"></div>
                        <div class="tg-swiper-navigations">
                            <div class="swiper-button-next tgpost-carousel-next"></div>
                            <div class="swiper-button-prev tgpost-carousel-prev"></div>
                        </div>
                        <!-- /wp:html -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:query -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->
<?php  }
}
