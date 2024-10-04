<?php

/**
 * Title: Post Carousel with 3 Cols
 * Slug: templategalaxy/mediator-post-carousel
 * Categories: mediator
 */
?>
<!-- wp:group {"lock":{"move":false,"remove":false},"style":{"spacing":{"padding":{"right":"0","left":"0","top":"0","bottom":"0"}},"dimensions":{"minHeight":""}},"className":"tg-post-slider-holder","layout":{"type":"constrained","contentSize":"100%"}} -->
<div id="POST-CAROUSEL" class="wp-block-group tg-post-slider-holder" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:query {"queryId":13,"query":{"perPage":"4","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"lock":{"move":false,"remove":true},"className":"tg-post-carousel"} -->
    <div class="wp-block-query tg-post-carousel"><!-- wp:post-template {"lock":{"move":false,"remove":true},"className":"tg-swiper-holder swiper-wrapper","layout":{"type":"default","columnCount":1}} -->
        <!-- wp:group {"layout":{"type":"constrained"}} -->
        <div class="wp-block-group"><!-- wp:post-featured-image {"height":"280px"} /-->

            <!-- wp:post-terms {"term":"category"} /-->

            <!-- wp:post-title {"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"},":hover":{"color":{"text":"var:preset|color|secondary"}}}},"spacing":{"margin":{"top":"10px","bottom":"10px"}},"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"big"} /-->

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