<?php
if (tg_fs()->is__premium_only()) {
    if (tg_fs()->can_use_premium_code()) {
        /**
         * Title: PRO: Post Grid 4
         * Slug: templategalaxy/wydeggrid-post-grid-4
         * Categories: wydegrid
         */
?>
        <!-- wp:group {"style":{"spacing":{"padding":{"top":"28px","bottom":"28px","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
        <div class="wp-block-group" style="padding-top:28px;padding-right:var(--wp--preset--spacing--40);padding-bottom:28px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"border":{"left":{"color":"var:preset|color|primary","width":"3px"}},"spacing":{"padding":{"top":"5px","bottom":"5px","left":"20px","right":"20px"}}},"backgroundColor":"background","layout":{"type":"constrained","justifyContent":"left","contentSize":"100%"}} -->
            <div class="wp-block-group has-background-background-color has-background" style="border-left-color:var(--wp--preset--color--primary);border-left-width:3px;padding-top:5px;padding-right:20px;padding-bottom:5px;padding-left:20px"><!-- wp:heading {"textAlign":"left","level":4,"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"textTransform":"uppercase","fontSize":"24px"}},"textColor":"primary"} -->
                <h4 class="wp-block-heading has-text-align-left has-primary-color has-text-color has-link-color" style="font-size:24px;text-transform:uppercase">Featured Post Grid</h4>
                <!-- /wp:heading -->
            </div>
            <!-- /wp:group -->

            <!-- wp:query {"queryId":6,"query":{"perPage":"1","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} -->
            <div class="wp-block-query"><!-- wp:post-template {"layout":{"type":"default","columnCount":3}} -->
                <!-- wp:group {"className":"is-style-wydegrid-boxshadow","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"light-color","layout":{"type":"constrained","contentSize":"100%"}} -->
                <div class="wp-block-group is-style-wydegrid-boxshadow has-light-color-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:columns {"verticalAlignment":"center"} -->
                    <div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center"} -->
                        <div class="wp-block-column is-vertically-aligned-center"><!-- wp:cover {"useFeaturedImage":true,"dimRatio":50,"isUserOverlayColor":true,"minHeight":410,"gradient":"dark-gradient","contentPosition":"bottom left","layout":{"type":"constrained"}} -->
                            <div class="wp-block-cover has-custom-content-position is-position-bottom-left" style="min-height:410px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim has-background-gradient has-dark-gradient-gradient-background"></span>
                                <div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
                                    <p class="has-text-align-center has-large-font-size"></p>
                                    <!-- /wp:paragraph -->
                                </div>
                            </div>
                            <!-- /wp:cover -->
                        </div>
                        <!-- /wp:column -->

                        <!-- wp:column {"verticalAlignment":"center"} -->
                        <div class="wp-block-column is-vertically-aligned-center"><!-- wp:group {"style":{"spacing":{"padding":{"top":"20px","bottom":"20px","left":"28px","right":"28px"},"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
                            <div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:20px;padding-right:28px;padding-bottom:20px;padding-left:28px"><!-- wp:post-terms {"term":"category","className":"is-style-categories-background-with-round"} /-->

                                <!-- wp:post-title {"level":1,"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"},":hover":{"color":{"text":"var:preset|color|secondary"}}}},"typography":{"fontStyle":"normal","fontWeight":"600","lineHeight":"1.3","textTransform":"uppercase","fontSize":"40px"}}} /-->

                                <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                                <div class="wp-block-group"><!-- wp:post-author-name {"className":"is-style-author-name-with-icon","style":{"typography":{"textTransform":"capitalize"}}} /-->

                                    <!-- wp:post-date {"format":"M j, Y","className":"is-style-post-date-with-icon"} /-->
                                </div>
                                <!-- /wp:group -->

                                <!-- wp:post-excerpt {"excerptLength":32,"style":{"spacing":{"margin":{"top":"20px"}}},"fontSize":"normal"} /-->

                                <!-- wp:group {"style":{"border":{"top":{"color":"var:preset|color|border-color","width":"1px"}},"spacing":{"margin":{"top":"20px"}}},"layout":{"type":"flex","orientation":"vertical"}} -->
                                <div class="wp-block-group" style="border-top-color:var(--wp--preset--color--border-color);border-top-width:1px;margin-top:20px"><!-- wp:read-more {"content":"Continue Reading","className":"is-style-readmore-hover-secondary-fill","style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"spacing":{"padding":{"top":"10px","bottom":"10px","left":"16px","right":"16px"},"margin":{"top":"20px"}}},"backgroundColor":"primary","textColor":"light-color"} /--></div>
                                <!-- /wp:group -->
                            </div>
                            <!-- /wp:group -->
                        </div>
                        <!-- /wp:column -->
                    </div>
                    <!-- /wp:columns -->
                </div>
                <!-- /wp:group -->
                <!-- /wp:post-template -->

                <!-- wp:query-no-results -->
                <!-- wp:paragraph {"placeholder":"Add text or blocks that will display when a query returns no results."} -->
                <p></p>
                <!-- /wp:paragraph -->
                <!-- /wp:query-no-results -->
            </div>
            <!-- /wp:query -->

            <!-- wp:query {"queryId":6,"query":{"perPage":"3","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} -->
            <div class="wp-block-query"><!-- wp:post-template {"layout":{"type":"grid","columnCount":"3"}} -->
                <!-- wp:group {"className":"is-style-wydegrid-boxshadow","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"light-color","layout":{"type":"constrained"}} -->
                <div class="wp-block-group is-style-wydegrid-boxshadow has-light-color-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:cover {"useFeaturedImage":true,"dimRatio":50,"isUserOverlayColor":true,"minHeight":227,"gradient":"dark-gradient","contentPosition":"bottom left","layout":{"type":"constrained"}} -->
                    <div class="wp-block-cover has-custom-content-position is-position-bottom-left" style="min-height:227px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim has-background-gradient has-dark-gradient-gradient-background"></span>
                        <div class="wp-block-cover__inner-container"><!-- wp:post-terms {"term":"category","className":"is-style-categories-background-with-round"} /--></div>
                    </div>
                    <!-- /wp:cover -->

                    <!-- wp:group {"style":{"spacing":{"padding":{"top":"20px","bottom":"20px","left":"20px","right":"20px"},"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
                    <div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:20px;padding-right:20px;padding-bottom:20px;padding-left:20px"><!-- wp:post-title {"level":3,"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"},":hover":{"color":{"text":"var:preset|color|secondary"}}}},"typography":{"fontStyle":"normal","fontWeight":"600","lineHeight":"1.3","textTransform":"uppercase","fontSize":"18px"}}} /-->

                        <!-- wp:post-date {"format":"M j, Y","className":"is-style-post-date-with-icon"} /-->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
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
