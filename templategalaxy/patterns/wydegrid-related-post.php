<?php
if (tg_fs()->is__premium_only()) {
    if (tg_fs()->can_use_premium_code()) {
        /**
         * Title: PRO: Related Posts
         * Slug: templategalaxy/wydeggrid-related-post
         * Categories: wydegrid
         */
?>
        <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","padding":{"top":"24px","bottom":"24px","left":"24px","right":"24px"}}},"backgroundColor":"background","layout":{"type":"constrained"}} -->
        <div class="wp-block-group has-background-background-color has-background" style="padding-top:24px;padding-right:24px;padding-bottom:24px;padding-left:24px"><!-- wp:heading {"level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}}},"textColor":"heading-color"} -->
            <h3 class="wp-block-heading has-heading-color-color has-text-color has-link-color">Related Posts</h3>
            <!-- /wp:heading -->

            <!-- wp:shortcode {"metadata":{"categories":["tg-blocks"],"patternName":"tg_related_posts","name":"TG BLOCK: Related Posts"}} -->
            [TG_RELATED_POSTS]
            <!-- /wp:shortcode -->
        </div>
        <!-- /wp:group -->
<?php }
}
