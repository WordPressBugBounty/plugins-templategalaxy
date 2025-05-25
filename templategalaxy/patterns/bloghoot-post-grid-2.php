<?php
if (tg_fs()->is__premium_only()) {
    if (tg_fs()->can_use_premium_code()) {
        /**
         * Title: PRO: Post Grid 2
         * Slug: templategalaxy/bloghoot-post-grid-2
         * Categories: bloghoot
         */
?>
        <!-- wp:group {"metadata":{"categories":["bloghoot"],"patternName":"bloghoot/missed-posts","name":"You May Missed Posts"},"align":"full","style":{"spacing":{"padding":{"top":"24px","bottom":"24px","left":"24px","right":"24px"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
        <div class="wp-block-group alignfull" style="padding-top:24px;padding-right:24px;padding-bottom:24px;padding-left:24px"><!-- wp:group {"style":{"border":{"left":{"width":"0px","style":"none"},"top":[],"right":[],"bottom":{"color":"var:preset|color|heading-color","width":"2px"}},"spacing":{"padding":{"left":"0px"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
            <div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--heading-color);border-bottom-width:2px;border-left-style:none;border-left-width:0px;padding-left:0px"><!-- wp:group {"style":{"border":{"bottom":{"width":"0px","style":"none"},"top":[],"right":[],"left":[]},"spacing":{"padding":{"bottom":"0px"}}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-group" style="border-bottom-style:none;border-bottom-width:0px;padding-bottom:0px"><!-- wp:heading {"className":"is-style-heading-style-overlap","style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"typography":{"fontSize":"20px","fontStyle":"normal","fontWeight":"600","textTransform":"none"},"border":{"bottom":{"color":"var:preset|color|primary","width":"2px"}},"spacing":{"padding":{"bottom":"6px"}}},"textColor":"heading-color"} -->
                    <h2 class="wp-block-heading is-style-heading-style-overlap has-heading-color-color has-text-color has-link-color" style="border-bottom-color:var(--wp--preset--color--primary);border-bottom-width:2px;padding-bottom:6px;font-size:20px;font-style:normal;font-weight:600;text-transform:none">Post Grid</h2>
                    <!-- /wp:heading -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->

            <!-- wp:query {"queryId":6,"query":{"perPage":4,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false}} -->
            <div class="wp-block-query"><!-- wp:post-template {"layout":{"type":"grid","columnCount":2}} -->
                <!-- wp:cover {"useFeaturedImage":true,"isUserOverlayColor":true,"minHeight":340,"gradient":"dark-gradient","contentPosition":"bottom left","className":"bloghoot-hover-cover","style":{"spacing":{"padding":{"left":"16px","right":"16px","top":"16px","bottom":"16px"},"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-cover has-custom-content-position is-position-bottom-left bloghoot-hover-cover" style="padding-top:16px;padding-right:16px;padding-bottom:16px;padding-left:16px;min-height:340px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim has-background-gradient has-dark-gradient-gradient-background"></span>
                    <div class="wp-block-cover__inner-container"><!-- wp:post-terms {"term":"category","className":"is-style-categories-mixed-bullet","style":{"typography":{"textTransform":"uppercase"},"elements":{"link":{"color":{"text":"var:preset|color|light-color"},":hover":{"color":{"text":"var:preset|color|primary"}}}}},"fontSize":"x-small"} /-->

                        <!-- wp:post-title {"level":3,"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"},":hover":{"color":{"text":"var:preset|color|primary"}}}},"typography":{"fontStyle":"normal","fontWeight":"600","fontSize":"28px"},"spacing":{"margin":{"bottom":"16px"}}}} /-->

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

                <!-- wp:query-no-results -->
                <!-- wp:paragraph {"placeholder":"Add text or blocks that will display when a query returns no results."} -->
                <p></p>
                <!-- /wp:paragraph -->
                <!-- /wp:query-no-results -->
            </div>
            <!-- /wp:query -->
        </div>
        <!-- /wp:group -->
<?php }
}
