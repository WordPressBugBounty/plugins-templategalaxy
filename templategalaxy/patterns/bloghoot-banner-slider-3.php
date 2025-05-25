<?php
if (tg_fs()->is__premium_only()) {
    if (tg_fs()->can_use_premium_code()) {
        /**
         * Title: PRO: Banner Slider 3
         * Slug: templategalaxy/bloghoot-banner-slider-3
         * Categories: bloghoot
         */
?>
        <!-- wp:group {"align":"full","style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"},"blockGap":"10px"}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
        <div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"lock":{"move":false,"remove":false},"metadata":{"categories":["tg-blocks"],"patternName":"tgpost-slider","name":"TG BLOCK: Post Slider"},"className":"tg-post-slider-holder","style":{"spacing":{"padding":{"right":"0","left":"0","top":"0","bottom":"0"}},"dimensions":{"minHeight":""}},"layout":{"type":"constrained","contentSize":"100%"}} -->
            <div id="POST-SLIDER" class="wp-block-group tg-post-slider-holder" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:query {"queryId":13,"query":{"perPage":"3","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"lock":{"move":false,"remove":true},"className":"tg-post-slider"} -->
                <div class="wp-block-query tg-post-slider"><!-- wp:post-template {"lock":{"move":false,"remove":true},"className":"tg-swiper-holder swiper-wrapper","layout":{"type":"default","columnCount":1}} -->
                    <!-- wp:cover {"useFeaturedImage":true,"dimRatio":70,"overlayColor":"black","isUserOverlayColor":true,"minHeight":540,"contentPosition":"center center","className":"is-style-bloghoot-cover-zoom-on-hover","style":{"spacing":{"padding":{"right":"32px","left":"32px","top":"28px","bottom":"28px"},"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
                    <div class="wp-block-cover is-style-bloghoot-cover-zoom-on-hover" style="padding-top:28px;padding-right:32px;padding-bottom:28px;padding-left:32px;min-height:540px"><span aria-hidden="true" class="wp-block-cover__background has-black-background-color has-background-dim-70 has-background-dim"></span>
                        <div class="wp-block-cover__inner-container"><!-- wp:group {"layout":{"type":"constrained","contentSize":"680px"}} -->
                            <div class="wp-block-group"><!-- wp:post-terms {"term":"category","textAlign":"center","className":"is-style-categories-mixed-bullet","style":{"elements":{"link":{"color":{"text":"var:preset|color|background"},":hover":{"color":{"text":"var:preset|color|secondary"}}}},"typography":{"textTransform":"uppercase"}},"fontSize":"x-small"} /-->

                                <!-- wp:post-title {"textAlign":"center","isLink":true,"className":"is-style-bloghoot-post-title-primary-underline-on-hover","style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"},":hover":{"color":{"text":"var:preset|color|primary"}}}},"typography":{"fontStyle":"normal","fontWeight":"600","textDecoration":"none"},"spacing":{"padding":{"top":"0","bottom":"0"},"margin":{"top":"10px","bottom":"20px"}}},"fontSize":"xx-large"} /-->

                                <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
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
        <!-- /wp:group -->
<?php }
}
