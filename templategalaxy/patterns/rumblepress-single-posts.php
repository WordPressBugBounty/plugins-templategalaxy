<?php
if (tg_fs()->is__premium_only()) {
    if (tg_fs()->can_use_premium_code()) {
        /**
         * Title: PRO: Single Post Template
         * Slug: templategalaxy/rumblepress-single-posts
         * Categories: rumblepress
         */
?>
        <!-- wp:template-part {"slug":"header","theme":"rumblepress","area":"header"} /-->

        <!-- wp:group {"tagName":"main","style":{"border":{"top":{"color":"var:preset|color|border-color","width":"1px"},"right":[],"bottom":{"width":"0px","style":"none"},"left":[]},"spacing":{"padding":{"top":"0","left":"0","right":"0"}}},"backgroundColor":"background-alt","layout":{"type":"constrained","contentSize":"100%"}} -->
        <main class="wp-block-group has-background-alt-background-color has-background" style="border-top-color:var(--wp--preset--color--border-color);border-top-width:1px;border-bottom-style:none;border-bottom-width:0px;padding-top:0;padding-right:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
            <div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--40)"><!-- wp:columns -->
                <div class="wp-block-columns"><!-- wp:column {"width":"70%"} -->
                    <div class="wp-block-column" style="flex-basis:70%"><!-- wp:group {"style":{"spacing":{"padding":{"top":"24px","bottom":"24px","right":"24px","left":"24px"}},"border":{"radius":"0px","width":"0px","style":"none"}},"backgroundColor":"light-color","layout":{"type":"constrained","contentSize":"1180px"}} -->
                        <div class="wp-block-group has-light-color-background-color has-background" style="border-style:none;border-width:0px;border-radius:0px;padding-top:24px;padding-right:24px;padding-bottom:24px;padding-left:24px"><!-- wp:shortcode {"metadata":{"categories":["tg-blocks"],"patternName":"tg_breadcrumbs","name":"TG BLOCK: Breadcrumbs"}} -->
                            [TG_BREADCRUMBS]
                            <!-- /wp:shortcode -->

                            <!-- wp:post-title {"textAlign":"left","level":1,"style":{"typography":{"fontStyle":"normal","fontWeight":"600","fontSize":"44px"},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}}},"textColor":"heading-color"} /-->

                            <!-- wp:group {"style":{"spacing":{"padding":{"bottom":"0"}},"border":{"bottom":{"width":"0px","style":"none"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
                            <div class="wp-block-group" style="border-bottom-style:none;border-bottom-width:0px;padding-bottom:0"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                                <div class="wp-block-group"><!-- wp:post-author-name {"style":{"typography":{"textTransform":"capitalize"}}} /-->

                                    <!-- wp:post-date /-->
                                </div>
                                <!-- /wp:group -->

                                <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                                <div class="wp-block-group"><!-- wp:heading {"level":5} -->
                                    <h5 class="wp-block-heading">Share On</h5>
                                    <!-- /wp:heading -->

                                    <!-- wp:shortcode {"metadata":{"categories":["tg-blocks"],"patternName":"tg_social_shares","name":"TG BLOCK: Social Shares"}} -->
                                    [TG_SOCIAL_SHARES]
                                    <!-- /wp:shortcode -->
                                </div>
                                <!-- /wp:group -->
                            </div>
                            <!-- /wp:group -->

                            <!-- wp:post-featured-image {"isLink":true,"height":"460px","style":{"border":{"radius":"0px"}}} /-->

                            <!-- wp:post-content /-->
                        </div>
                        <!-- /wp:group -->

                        <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
                        <div class="wp-block-group"><!-- wp:post-navigation-link {"type":"previous","showTitle":true,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}}} /-->

                            <!-- wp:post-navigation-link {"textAlign":"right","showTitle":true,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}}} /-->
                        </div>
                        <!-- /wp:group -->

                        <!-- wp:group {"style":{"spacing":{"padding":{"top":"30px","bottom":"30px","left":"30px","right":"30px"}},"border":{"radius":"0px","width":"0px","style":"none"}},"backgroundColor":"light-color","layout":{"type":"constrained"}} -->
                        <div class="wp-block-group has-light-color-background-color has-background" style="border-style:none;border-width:0px;border-radius:0px;padding-top:30px;padding-right:30px;padding-bottom:30px;padding-left:30px"><!-- wp:avatar {"size":100,"align":"center","style":{"border":{"radius":"100px"}}} /-->

                            <!-- wp:post-author-name {"textAlign":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|dark-color"}}},"typography":{"fontStyle":"normal","fontWeight":"500","textTransform":"capitalize"}},"textColor":"dark-color","fontSize":"medium"} /-->

                            <!-- wp:post-author-biography {"textAlign":"center"} /-->
                        </div>
                        <!-- /wp:group -->

                        <!-- wp:group {"style":{"spacing":{"padding":{"top":"24px","bottom":"24px","left":"24px","right":"24px"}}},"backgroundColor":"background","layout":{"type":"constrained","contentSize":"100%"}} -->
                        <div class="wp-block-group has-background-background-color has-background" style="padding-top:24px;padding-right:24px;padding-bottom:24px;padding-left:24px"><!-- wp:heading {"level":3} -->
                            <h3 class="wp-block-heading">Related Posts</h3>
                            <!-- /wp:heading -->

                            <!-- wp:shortcode {"metadata":{"categories":["tg-blocks"],"patternName":"tg_related_posts","name":"TG BLOCK: Related Posts"}} -->
                            [TG_RELATED_POSTS]
                            <!-- /wp:shortcode -->
                        </div>
                        <!-- /wp:group -->

                        <!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|70"},"padding":{"top":"22px","bottom":"22px","left":"24px","right":"24px"}},"border":{"radius":"0px","width":"0px","style":"none"}},"backgroundColor":"light-color","layout":{"type":"constrained","contentSize":"900px"}} -->
                        <div class="wp-block-group has-light-color-background-color has-background" style="border-style:none;border-width:0px;border-radius:0px;margin-top:var(--wp--preset--spacing--70);padding-top:22px;padding-right:24px;padding-bottom:22px;padding-left:24px"><!-- wp:comments -->
                            <div class="wp-block-comments"><!-- wp:comments-title /-->

                                <!-- wp:comment-template -->
                                <!-- wp:columns -->
                                <div class="wp-block-columns"><!-- wp:column {"width":"40px"} -->
                                    <div class="wp-block-column" style="flex-basis:40px"><!-- wp:avatar {"size":40,"style":{"border":{"radius":"20px"}}} /--></div>
                                    <!-- /wp:column -->

                                    <!-- wp:column -->
                                    <div class="wp-block-column"><!-- wp:comment-author-name {"fontSize":"small"} /-->

                                        <!-- wp:group {"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"layout":{"type":"flex"}} -->
                                        <div class="wp-block-group" style="margin-top:0px;margin-bottom:0px"><!-- wp:comment-date {"fontSize":"small"} /-->

                                            <!-- wp:comment-edit-link {"fontSize":"small"} /-->
                                        </div>
                                        <!-- /wp:group -->

                                        <!-- wp:comment-content /-->

                                        <!-- wp:comment-reply-link {"fontSize":"small"} /-->
                                    </div>
                                    <!-- /wp:column -->
                                </div>
                                <!-- /wp:columns -->
                                <!-- /wp:comment-template -->

                                <!-- wp:comments-pagination -->
                                <!-- wp:comments-pagination-previous /-->

                                <!-- wp:comments-pagination-numbers /-->

                                <!-- wp:comments-pagination-next /-->
                                <!-- /wp:comments-pagination -->

                                <!-- wp:post-comments-form /-->
                            </div>
                            <!-- /wp:comments -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:column -->

                    <!-- wp:column {"width":"30%"} -->
                    <div class="wp-block-column" style="flex-basis:30%"><!-- wp:template-part {"slug":"sidebar","theme":"rumblepress","area":"uncategorized"} /--></div>
                    <!-- /wp:column -->
                </div>
                <!-- /wp:columns -->
            </div>
            <!-- /wp:group -->
        </main>
        <!-- /wp:group -->

        <!-- wp:template-part {"slug":"footer","theme":"rumblepress","area":"footer"} /-->
<?php }
}
