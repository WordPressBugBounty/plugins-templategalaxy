<?php
if (tg_fs()->is__premium_only()) {
    if (tg_fs()->can_use_premium_code()) {
        /**
         * Title: PRO: Single Post Template
         * Slug: templategalaxy/bloghoot-single-post-template
         * Categories: bloghoot
         */
?>
        <!-- wp:group {"tagName":"main","style":{"border":{"top":{"width":"0px","style":"none"},"right":[],"bottom":{"width":"0px","style":"none"},"left":[]},"spacing":{"padding":{"top":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"light-shade","layout":{"type":"constrained","contentSize":"100%"}} -->
        <main class="wp-block-group has-light-shade-background-color has-background" style="border-top-style:none;border-top-width:0px;border-bottom-style:none;border-bottom-width:0px;margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|60","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
            <div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--40)"><!-- wp:columns -->
                <div class="wp-block-columns"><!-- wp:column {"width":""} -->
                    <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","bottom":"0px","right":"0px","left":"0px"}},"border":{"radius":"0px","width":"0px","style":"none"}},"backgroundColor":"light-color","layout":{"type":"constrained","contentSize":"100%"}} -->
                        <div class="wp-block-group has-light-color-background-color has-background" style="border-style:none;border-width:0px;border-radius:0px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:post-title {"style":{"typography":{"fontSize":"48px"},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}}},"textColor":"heading-color"} /-->

                            <!-- wp:group {"style":{"spacing":{"padding":{"bottom":"0"}},"border":{"bottom":{"width":"0px","style":"none"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
                            <div class="wp-block-group" style="border-bottom-style:none;border-bottom-width:0px;padding-bottom:0"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                                <div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                                    <div class="wp-block-group"><!-- wp:avatar {"size":48,"style":{"border":{"radius":"50px"}}} /-->

                                        <!-- wp:post-author-name {"style":{"typography":{"textTransform":"capitalize"}}} /-->
                                    </div>
                                    <!-- /wp:group -->

                                    <!-- wp:post-date {"className":"is-style-post-date-with-icon"} /-->
                                </div>
                                <!-- /wp:group -->

                                <!-- wp:shortcode {"metadata":{"categories":["tg-blocks"],"patternName":"tg_social_shares","name":"TG BLOCK: Social Shares"}} -->
                                [TG_SOCIAL_SHARES]
                                <!-- /wp:shortcode -->
                            </div>
                            <!-- /wp:group -->

                            <!-- wp:post-featured-image {"isLink":true,"height":"460px","style":{"border":{"radius":"0px"}}} /-->

                            <!-- wp:post-content /-->

                            <!-- wp:group {"style":{"border":{"top":{"color":"var:preset|color|border-color","width":"1px"}},"spacing":{"padding":{"top":"24px"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
                            <div class="wp-block-group" style="border-top-color:var(--wp--preset--color--border-color);border-top-width:1px;padding-top:24px"><!-- wp:post-navigation-link {"type":"previous","showTitle":true,"linkLabel":true,"arrow":"arrow","style":{"typography":{"fontStyle":"normal","fontWeight":"600"}}} /-->

                                <!-- wp:post-navigation-link {"textAlign":"right","showTitle":true,"linkLabel":true,"arrow":"arrow","style":{"typography":{"fontStyle":"normal","fontWeight":"600"}}} /-->
                            </div>
                            <!-- /wp:group -->
                        </div>
                        <!-- /wp:group -->

                        <!-- wp:group {"style":{"spacing":{"padding":{"top":"24px","bottom":"24px","left":"24px","right":"24px"}},"border":{"radius":"0px","width":"1px"}},"backgroundColor":"light-color","borderColor":"border-color","layout":{"type":"constrained"}} -->
                        <div class="wp-block-group has-border-color has-border-color-border-color has-light-color-background-color has-background" style="border-width:1px;border-radius:0px;padding-top:24px;padding-right:24px;padding-bottom:24px;padding-left:24px"><!-- wp:avatar {"size":100,"align":"center","style":{"border":{"radius":"100px"}}} /-->

                            <!-- wp:post-author-name {"textAlign":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"typography":{"fontStyle":"normal","fontWeight":"500","textTransform":"capitalize"}},"textColor":"heading-color","fontSize":"medium"} /-->

                            <!-- wp:post-author-biography {"textAlign":"center"} /-->
                        </div>
                        <!-- /wp:group -->

                        <!-- wp:group {"style":{"spacing":{"margin":{"top":"24px"},"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"}},"border":{"radius":"0px","width":"0px","style":"none"}},"backgroundColor":"light-color","layout":{"type":"constrained","contentSize":"100%"}} -->
                        <div class="wp-block-group has-light-color-background-color has-background" style="border-style:none;border-width:0px;border-radius:0px;margin-top:24px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:comments -->
                            <div class="wp-block-comments"><!-- wp:comments-title {"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}}},"textColor":"heading-color"} /-->

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
                    <div class="wp-block-column" style="flex-basis:30%"><!-- wp:template-part {"slug":"sidebar","theme":"bloghoot","area":"uncategorized"} /--></div>
                    <!-- /wp:column -->
                </div>
                <!-- /wp:columns -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"},"margin":{"top":"0","bottom":"0"}},"border":{"top":{"color":"var:preset|color|border-color","width":"1px"},"right":[],"bottom":[],"left":[]}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
            <div class="wp-block-group" style="border-top-color:var(--wp--preset--color--border-color);border-top-width:1px;margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"border":{"left":{"width":"0px","style":"none"},"top":[],"right":[],"bottom":{"color":"var:preset|color|heading-color","width":"2px"}},"spacing":{"padding":{"left":"0px"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--heading-color);border-bottom-width:2px;border-left-style:none;border-left-width:0px;padding-left:0px"><!-- wp:group {"style":{"border":{"bottom":{"width":"0px","style":"none"},"top":[],"right":[],"left":[]},"spacing":{"padding":{"bottom":"0px"}}},"layout":{"type":"constrained"}} -->
                    <div class="wp-block-group" style="border-bottom-style:none;border-bottom-width:0px;padding-bottom:0px"><!-- wp:heading {"className":"is-style-heading-style-overlap","style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"typography":{"fontSize":"20px","fontStyle":"normal","fontWeight":"600","textTransform":"none"},"border":{"bottom":{"color":"var:preset|color|primary","width":"2px"}},"spacing":{"padding":{"bottom":"6px"}}},"textColor":"heading-color"} -->
                        <h2 class="wp-block-heading is-style-heading-style-overlap has-heading-color-color has-text-color has-link-color" style="border-bottom-color:var(--wp--preset--color--primary);border-bottom-width:2px;padding-bottom:6px;font-size:20px;font-style:normal;font-weight:600;text-transform:none">Related Articles</h2>
                        <!-- /wp:heading -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->

                <!-- wp:shortcode {"metadata":{"categories":["tg-blocks"],"patternName":"tg_related_posts","name":"TG BLOCK: Related Posts"}} -->
                [TG_RELATED_POSTS]
                <!-- /wp:shortcode -->
            </div>
            <!-- /wp:group -->
        </main>
        <!-- /wp:group -->
<?php }
}
