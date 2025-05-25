<?php
if (tg_fs()->is__premium_only()) {
    if (tg_fs()->can_use_premium_code()) {
        /**
         * Title: PRO: Related Posts
         * Slug: templategalaxy/bloghoot-related-posts
         * Categories: bloghoot
         */
?>
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
<?php }
}
