<?php
if (tg_fs()->is__premium_only()) {
    if (tg_fs()->can_use_premium_code()) {
        /**
         * Title: PRO: Full Width Post Slider
         * Slug: templategalaxy/zerion-post-slider
         * Categories: zerion
         */
?>
        <!-- wp:group {"lock":{"move":false,"remove":false},"metadata":{"categories":["tg-blocks"],"patternName":"tgpost-slider","name":"TG BLOCK: Post Slider"},"className":"tg-post-slider-holder","style":{"spacing":{"padding":{"right":"0","left":"0","top":"0","bottom":"0"}},"dimensions":{"minHeight":""}},"layout":{"type":"constrained","contentSize":"100%"}} -->
        <div id="POST-SLIDER" class="wp-block-group tg-post-slider-holder" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:query {"queryId":13,"query":{"perPage":"3","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"lock":{"move":false,"remove":true},"className":"tg-post-slider"} -->
            <div class="wp-block-query tg-post-slider"><!-- wp:post-template {"lock":{"move":false,"remove":true},"className":"tg-swiper-holder swiper-wrapper","layout":{"type":"default","columnCount":1}} -->
                <!-- wp:cover {"useFeaturedImage":true,"dimRatio":40,"overlayColor":"dark-color","isUserOverlayColor":true,"minHeight":640,"contentPosition":"center center","className":"is-style-zerion-cover-zoom-effect-hover","style":{"spacing":{"padding":{"right":"30px","left":"30px","top":"30px","bottom":"30px"},"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained","contentSize":"860px"}} -->
                <div class="wp-block-cover is-style-zerion-cover-zoom-effect-hover" style="padding-top:30px;padding-right:30px;padding-bottom:30px;padding-left:30px;min-height:640px"><span aria-hidden="true" class="wp-block-cover__background has-dark-color-background-color has-background-dim-40 has-background-dim"></span>
                    <div class="wp-block-cover__inner-container"><!-- wp:post-title {"textAlign":"center","level":1,"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|background"},":hover":{"color":{"text":"#0279be"}}}},"spacing":{"margin":{"top":"10px","bottom":"10px"}},"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"xxx-large"} /-->

                        <!-- wp:post-excerpt {"textAlign":"center","excerptLength":29,"style":{"typography":{"lineHeight":"1.5"},"spacing":{"margin":{"bottom":"40px"}}},"fontSize":"medium"} /-->

                        <!-- wp:read-more {"content":"Explore More","className":"is-style-default","style":{"border":{"width":"2px"},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"spacing":{"padding":{"top":"18px","bottom":"18px","left":"40px","right":"40px"}}},"textColor":"light-color","fontSize":"medium"} /-->
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

<?php }
}
