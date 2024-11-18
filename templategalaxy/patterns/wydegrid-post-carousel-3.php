<?php
if (tg_fs()->is__premium_only()) {
    if (tg_fs()->can_use_premium_code()) {
        /**
         * Title: PRO: Post Carousel with Column 4
         * Slug: templategalaxy/wydeggrid-post-carousel-3
         * Categories: wydegrid
         */
?>
        <!-- wp:group {"metadata":{"categories":["wydegrid"],"patternName":"templategalaxy/zerion-post-carousel-4","name":"PRO: Post Carousel Columns 4"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
        <div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"lock":{"move":false,"remove":false},"metadata":{"categories":["tg-blocks"],"patternName":"tgpost-carousel","name":"TG BLOCK: Post Carousel"},"className":"tg-post-slider-holder","style":{"spacing":{"padding":{"right":"0","left":"0","top":"0","bottom":"0"}},"dimensions":{"minHeight":""}},"layout":{"type":"constrained","contentSize":"100%"}} -->
            <div id="POST-CAROUSEL" class="wp-block-group tg-post-slider-holder" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:query {"queryId":13,"query":{"perPage":"6","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"lock":{"move":false,"remove":true},"className":"tg-post-carousel-4"} -->
                <div class="wp-block-query tg-post-carousel-4"><!-- wp:post-template {"lock":{"move":false,"remove":true},"className":"tg-swiper-holder swiper-wrapper","layout":{"type":"default","columnCount":1}} -->
                    <!-- wp:group {"style":{"spacing":{"padding":{"bottom":"32px"}}},"layout":{"type":"constrained"}} -->
                    <div class="wp-block-group" style="padding-bottom:32px"><!-- wp:post-featured-image {"isLink":true,"height":"210px"} /-->

                        <!-- wp:post-terms {"term":"category"} /-->

                        <!-- wp:post-title {"level":3,"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"},":hover":{"color":{"text":"var:preset|color|primary"}}}},"spacing":{"margin":{"top":"10px","bottom":"10px"}},"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"medium"} /-->

                        <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                        <div class="wp-block-group"><!-- wp:post-author-name {"textColor":"light-gray"} /-->

                            <!-- wp:post-date {"textColor":"light-gray"} /-->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:group -->
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
