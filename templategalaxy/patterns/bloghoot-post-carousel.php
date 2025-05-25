<?php
if (tg_fs()->is__premium_only()) {
    if (tg_fs()->can_use_premium_code()) {
        /**
         * Title: PRO: Post Carousel
         * Slug: templategalaxy/bloghoot-post-carousel
         * Categories: bloghoot
         */
?>
        <!-- wp:group {"align":"full","metadata":{"categories":["bloghoot"],"patternName":"templategalaxy/bloghoot-post-carousel","name":"Post Carousel"},"style":{"spacing":{"padding":{"top":"24px","bottom":"64px","left":"24px","right":"24px"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
        <div class="wp-block-group alignfull" style="padding-top:24px;padding-right:24px;padding-bottom:64px;padding-left:24px"><!-- wp:group {"style":{"border":{"left":{"width":"0px","style":"none"},"top":[],"right":[],"bottom":{"color":"var:preset|color|heading-color","width":"2px"}},"spacing":{"padding":{"left":"0px"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
            <div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--heading-color);border-bottom-width:2px;border-left-style:none;border-left-width:0px;padding-left:0px"><!-- wp:group {"style":{"border":{"bottom":{"width":"0px","style":"none"},"top":[],"right":[],"left":[]},"spacing":{"padding":{"bottom":"0px"}}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-group" style="border-bottom-style:none;border-bottom-width:0px;padding-bottom:0px"><!-- wp:heading {"className":"is-style-heading-style-overlap","style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"typography":{"fontSize":"20px","fontStyle":"normal","fontWeight":"600","textTransform":"none"},"border":{"bottom":{"color":"var:preset|color|primary","width":"2px"}},"spacing":{"padding":{"bottom":"6px"}}},"textColor":"heading-color"} -->
                    <h2 class="wp-block-heading is-style-heading-style-overlap has-heading-color-color has-text-color has-link-color" style="border-bottom-color:var(--wp--preset--color--primary);border-bottom-width:2px;padding-bottom:6px;font-size:20px;font-style:normal;font-weight:600;text-transform:none">Post Carousel #1</h2>
                    <!-- /wp:heading -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"lock":{"move":false,"remove":false},"metadata":{"categories":["tg-blocks"],"patternName":"tgpost-carousel","name":"TG BLOCK: Post Carousel"},"className":"tg-post-slider-holder","style":{"spacing":{"padding":{"right":"0","left":"0","top":"0","bottom":"0"}},"dimensions":{"minHeight":""}},"layout":{"type":"constrained","contentSize":"100%"}} -->
            <div id="POST-CAROUSEL" class="wp-block-group tg-post-slider-holder" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:query {"queryId":13,"query":{"perPage":"4","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"lock":{"move":false,"remove":true},"className":"tg-post-carousel"} -->
                <div class="wp-block-query tg-post-carousel"><!-- wp:post-template {"lock":{"move":false,"remove":true},"className":"tg-swiper-holder swiper-wrapper","layout":{"type":"default","columnCount":1}} -->
                    <!-- wp:cover {"useFeaturedImage":true,"isUserOverlayColor":true,"minHeight":280,"gradient":"dark-gradient","contentPosition":"bottom left","className":"bloghoot-hover-cover","style":{"spacing":{"padding":{"left":"16px","right":"16px","top":"16px","bottom":"16px"},"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
                    <div class="wp-block-cover has-custom-content-position is-position-bottom-left bloghoot-hover-cover" style="padding-top:16px;padding-right:16px;padding-bottom:16px;padding-left:16px;min-height:280px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim has-background-gradient has-dark-gradient-gradient-background"></span>
                        <div class="wp-block-cover__inner-container"><!-- wp:post-terms {"term":"category","className":"is-style-categories-mixed-bullet","style":{"typography":{"textTransform":"uppercase"},"elements":{"link":{"color":{"text":"var:preset|color|light-color"},":hover":{"color":{"text":"var:preset|color|primary"}}}}},"fontSize":"x-small"} /-->

                            <!-- wp:post-title {"level":4,"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"},":hover":{"color":{"text":"var:preset|color|primary"}}}},"typography":{"fontStyle":"normal","fontWeight":"600","fontSize":"20px"}}} /-->

                            <!-- wp:post-date {"format":"M j, Y","className":"is-style-post-date-with-white-icon","style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"textColor":"background"} /-->
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
<?php }
}
