<?php
if (tg_fs()->is__premium_only()) {
    if (tg_fs()->can_use_premium_code()) {
        /**
         * Title: PRO: News Ticker 2
         * Slug: templategalaxy/wydeggrid-newsticker-2
         * Categories: wydegrid
         */
?>
        <!-- wp:group {"metadata":{"categories":["wydegrid"],"patternName":"templategalaxy/zerion-newsticker-2","name":"PRO: News Ticker 2"},"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"backgroundColor":"background-alt","layout":{"type":"constrained","contentSize":"1180px"}} -->
        <div class="wp-block-group has-background-alt-background-color has-background" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:columns {"verticalAlignment":"center"} -->
            <div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"150px"} -->
                <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:150px"><!-- wp:group {"layout":{"type":"constrained","justifyContent":"left"}} -->
                    <div class="wp-block-group"><!-- wp:heading {"level":4,"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color"} -->
                        <h4 class="wp-block-heading has-light-color-color has-text-color has-link-color">Breaking News &gt;</h4>
                        <!-- /wp:heading -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:column -->

                <!-- wp:column {"verticalAlignment":"center","width":""} -->
                <div class="wp-block-column is-vertically-aligned-center"><!-- wp:group {"lock":{"move":false,"remove":false},"metadata":{"categories":["tg-blocks"],"patternName":"tgpost-newsticker","name":"TG BLOCK: News Ticker"},"className":"tg-post-slider-holder news-ticker-holder ticker-1","style":{"spacing":{"padding":{"right":"0","left":"0","top":"0","bottom":"0"}},"dimensions":{"minHeight":""}},"layout":{"type":"constrained","contentSize":"100%"}} -->
                    <div id="NEWS-TICKER" class="wp-block-group tg-post-slider-holder news-ticker-holder ticker-1" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:query {"queryId":13,"query":{"perPage":"4","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"lock":{"move":false,"remove":true},"className":"tg-news-ticker"} -->
                        <div class="wp-block-query tg-news-ticker"><!-- wp:post-template {"lock":{"move":false,"remove":true},"className":"tg-swiper-holder swiper-wrapper","layout":{"type":"default","columnCount":1}} -->
                            <!-- wp:group {"layout":{"type":"constrained"}} -->
                            <div class="wp-block-group"><!-- wp:post-title {"level":5,"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"},":hover":{"color":{"text":"var:preset|color|primary"}}}},"spacing":{"margin":{"top":"0px","bottom":"0px"},"padding":{"top":"0","bottom":"0"}},"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"normal"} /--></div>
                            <!-- /wp:group -->
                            <!-- /wp:post-template -->
                        </div>
                        <!-- /wp:query -->

                        <!-- wp:group {"lock":{"move":false,"remove":true},"className":"tg-slider-control","layout":{"type":"constrained","contentSize":"100%"}} -->
                        <div id="slider-control" class="wp-block-group tg-slider-control"><!-- wp:html {"lock":{"move":false,"remove":true}} -->
                            <div class="tg-ticker-navigation">
                                <div class="swiper-button-next tg-ticker-next"></div>
                                <div class="swiper-button-prev tg-ticker-prev"></div>
                            </div>
                            <!-- /wp:html -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:column -->
            </div>
            <!-- /wp:columns -->
        </div>
        <!-- /wp:group -->
<?php }
}