<?php
if (tg_fs()->is__premium_only()) {
    if (tg_fs()->can_use_premium_code()) {
        /**
         * Title: PRO: Post Grid
         * Slug: templategalaxy/bloghoot-post-grid
         * Categories: bloghoot
         */
?>
        <!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"28px","bottom":"28px","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
        <div class="wp-block-group alignfull" style="padding-top:28px;padding-right:var(--wp--preset--spacing--40);padding-bottom:28px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"border":{"left":{"width":"0px","style":"none"},"top":[],"right":[],"bottom":{"color":"var:preset|color|heading-color","width":"2px"}},"spacing":{"padding":{"left":"0px"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
            <div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--heading-color);border-bottom-width:2px;border-left-style:none;border-left-width:0px;padding-left:0px"><!-- wp:group {"style":{"border":{"bottom":{"width":"0px","style":"none"},"top":[],"right":[],"left":[]},"spacing":{"padding":{"bottom":"0px"}}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-group" style="border-bottom-style:none;border-bottom-width:0px;padding-bottom:0px"><!-- wp:heading {"className":"is-style-heading-style-overlap","style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"typography":{"fontSize":"20px","fontStyle":"normal","fontWeight":"600","textTransform":"none"},"border":{"bottom":{"color":"var:preset|color|primary","width":"2px"}},"spacing":{"padding":{"bottom":"6px"}}},"textColor":"heading-color"} -->
                    <h2 class="wp-block-heading is-style-heading-style-overlap has-heading-color-color has-text-color has-link-color" style="border-bottom-color:var(--wp--preset--color--primary);border-bottom-width:2px;padding-bottom:6px;font-size:20px;font-style:normal;font-weight:600;text-transform:none">Post Grid #2</h2>
                    <!-- /wp:heading -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->

            <!-- wp:query {"queryId":6,"query":{"perPage":8,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} -->
            <div class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"blockGap":"24px"}},"layout":{"type":"grid","columnCount":4}} -->
                <!-- wp:group {"className":"is-style-default","style":{"spacing":{"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"},"margin":{"top":"0","bottom":"0"}},"border":{"width":"0px","style":"none"}},"backgroundColor":"light-color","layout":{"type":"constrained"}} -->
                <div class="wp-block-group is-style-default has-light-color-background-color has-background" style="border-style:none;border-width:0px;margin-top:0;margin-bottom:0;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:post-featured-image {"isLink":true,"height":"180px","style":{"spacing":{"margin":{"top":"0","bottom":"0","left":"0","right":"0"}}}} /-->

                    <!-- wp:group {"style":{"spacing":{"padding":{"top":"24px","bottom":"0px","left":"0px","right":"0px"},"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|30"},"border":{"width":"0px","style":"none"}},"layout":{"type":"constrained"}} -->
                    <div class="wp-block-group" style="border-style:none;border-width:0px;margin-top:0;margin-bottom:0;padding-top:24px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:post-terms {"term":"category","className":"is-style-categories-mixed-bullet","style":{"elements":{"link":{"color":{"text":"var:preset|color|background-alt"},":hover":{"color":{"text":"var:preset|color|secondary"}}}},"typography":{"textTransform":"uppercase"}},"fontSize":"x-small"} /-->

                        <!-- wp:post-title {"level":3,"isLink":true,"className":"is-style-bloghoot-post-title-primary-underline-on-hover","style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"},":hover":{"color":{"text":"var:preset|color|primary"}}}},"typography":{"fontStyle":"normal","fontWeight":"600","lineHeight":"1.4","textTransform":"none","fontSize":"18px"},"spacing":{"margin":{"bottom":"16px"}}}} /-->

                        <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                        <div class="wp-block-group"><!-- wp:post-date {"format":"M j, Y","className":"is-style-post-date-with-icon"} /--></div>
                        <!-- /wp:group -->
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
