<?php
if (tg_fs()->is__premium_only()) {
    if (tg_fs()->can_use_premium_code()) {
        /**
         * Title: PRO: Banner Slider 5
         * Slug: templategalaxy/wydeggrid-banner-5
         * Categories: wydegrid
         */
?>
        <!-- wp:group {"style":{"spacing":{"padding":{"right":"0","left":"0","top":"0","bottom":"0"},"margin":{"top":"0","bottom":"0"},"blockGap":"10px"}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
        <div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"10px"}}}} -->
            <div class="wp-block-columns"><!-- wp:column {"width":"25%"} -->
                <div class="wp-block-column" style="flex-basis:25%"><!-- wp:query {"queryId":6,"query":{"perPage":"2","pages":0,"offset":"1","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false}} -->
                    <div class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"default","columnCount":"2"}} -->
                        <!-- wp:cover {"useFeaturedImage":true,"isUserOverlayColor":true,"minHeight":250,"gradient":"dark-gradient","contentPosition":"bottom left","className":"wydegrid-hover-cover","style":{"spacing":{"padding":{"top":"16px","bottom":"16px","left":"20px","right":"20px"},"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
                        <div class="wp-block-cover has-custom-content-position is-position-bottom-left wydegrid-hover-cover" style="padding-top:16px;padding-right:20px;padding-bottom:16px;padding-left:20px;min-height:250px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim has-background-gradient has-dark-gradient-gradient-background"></span>
                            <div class="wp-block-cover__inner-container"><!-- wp:post-terms {"term":"category","className":"is-style-categories-background-with-round"} /-->

                                <!-- wp:post-title {"level":4,"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"},":hover":{"color":{"text":"var:preset|color|primary"}}}},"typography":{"fontSize":"20px"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} /-->

                                <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                                <div class="wp-block-group"><!-- wp:post-author-name {"className":"is-style-author-name-with-white-icon","style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"typography":{"textTransform":"capitalize"}},"textColor":"light-color"} /-->

                                    <!-- wp:post-date {"format":"M j, Y","className":"is-style-post-date-with-white-icon","style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color"} /-->
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

                <!-- wp:column {"width":"50%"} -->
                <div class="wp-block-column" style="flex-basis:50%"><!-- wp:group {"lock":{"move":false,"remove":false},"metadata":{"categories":["tg-blocks"],"patternName":"tgpost-slider","name":"TG BLOCK: Post Slider"},"className":"tg-post-slider-holder","style":{"spacing":{"padding":{"right":"0","left":"0","top":"0","bottom":"0"}},"dimensions":{"minHeight":""}},"layout":{"type":"constrained","contentSize":"100%"}} -->
                    <div id="POST-SLIDER" class="wp-block-group tg-post-slider-holder" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:query {"queryId":13,"query":{"perPage":"3","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"lock":{"move":false,"remove":true},"className":"tg-post-slider"} -->
                        <div class="wp-block-query tg-post-slider"><!-- wp:post-template {"lock":{"move":false,"remove":true},"className":"tg-swiper-holder swiper-wrapper","layout":{"type":"default","columnCount":1}} -->
                            <!-- wp:cover {"useFeaturedImage":true,"isUserOverlayColor":true,"minHeight":510,"gradient":"dark-gradient","contentPosition":"bottom left","className":"wydegrid-hover-cover","style":{"spacing":{"padding":{"left":"24px","right":"24px","top":"20px","bottom":"20px"},"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
                            <div class="wp-block-cover has-custom-content-position is-position-bottom-left wydegrid-hover-cover" style="padding-top:20px;padding-right:24px;padding-bottom:20px;padding-left:24px;min-height:510px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim has-background-gradient has-dark-gradient-gradient-background"></span>
                                <div class="wp-block-cover__inner-container"><!-- wp:post-terms {"term":"category","className":"is-style-categories-background-with-round"} /-->

                                    <!-- wp:post-title {"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"},":hover":{"color":{"text":"var:preset|color|primary"}}}},"typography":{"fontStyle":"normal","fontWeight":"600","fontSize":"40px"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} /-->

                                    <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                                    <div class="wp-block-group"><!-- wp:post-author-name {"className":"is-style-author-name-with-white-icon","style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"typography":{"textTransform":"capitalize"}},"textColor":"light-color"} /-->

                                        <!-- wp:post-date {"format":"M j, Y","className":"is-style-post-date-with-white-icon","style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color"} /-->
                                    </div>
                                    <!-- /wp:group -->

                                    <!-- wp:post-excerpt {"excerptLength":29,"style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"textColor":"background"} /-->
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

                <!-- wp:column {"width":"25%"} -->
                <div class="wp-block-column" style="flex-basis:25%"><!-- wp:query {"queryId":6,"query":{"perPage":"2","pages":0,"offset":"1","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false}} -->
                    <div class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"default","columnCount":"2"}} -->
                        <!-- wp:cover {"useFeaturedImage":true,"isUserOverlayColor":true,"minHeight":250,"gradient":"dark-gradient","contentPosition":"bottom left","className":"wydegrid-hover-cover","style":{"spacing":{"padding":{"top":"16px","bottom":"16px","left":"20px","right":"20px"},"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
                        <div class="wp-block-cover has-custom-content-position is-position-bottom-left wydegrid-hover-cover" style="padding-top:16px;padding-right:20px;padding-bottom:16px;padding-left:20px;min-height:250px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim has-background-gradient has-dark-gradient-gradient-background"></span>
                            <div class="wp-block-cover__inner-container"><!-- wp:post-terms {"term":"category","className":"is-style-categories-background-with-round"} /-->

                                <!-- wp:post-title {"level":4,"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"},":hover":{"color":{"text":"var:preset|color|primary"}}}},"typography":{"fontSize":"20px"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} /-->

                                <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                                <div class="wp-block-group"><!-- wp:post-author-name {"className":"is-style-author-name-with-white-icon","style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"typography":{"textTransform":"capitalize"}},"textColor":"light-color"} /-->

                                    <!-- wp:post-date {"format":"M j, Y","className":"is-style-post-date-with-white-icon","style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color"} /-->
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
        </div>
        <!-- /wp:group -->
<?php }
}
