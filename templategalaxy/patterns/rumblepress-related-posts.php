<?php
if (tg_fs()->is__premium_only()) {
    if (tg_fs()->can_use_premium_code()) {
        /**
         * Title: PRO: Related Posts Section
         * Slug: templategalaxy/rumblepress-related-posts
         * Categories: rumblepress
         */
?>
        <!-- wp:group {"style":{"spacing":{"padding":{"top":"24px","bottom":"24px","left":"24px","right":"24px"}}},"backgroundColor":"background","layout":{"type":"constrained","contentSize":"100%"}} -->
        <div class="wp-block-group has-background-background-color has-background" style="padding-top:24px;padding-right:24px;padding-bottom:24px;padding-left:24px"><!-- wp:heading {"level":3} -->
            <h3 class="wp-block-heading"><?php esc_html_e('Related Posts', 'templategalaxy') ?></h3>
            <!-- /wp:heading -->

            <!-- wp:shortcode {"metadata":{"categories":["tg-blocks"],"patternName":"tg_related_posts","name":"TG BLOCK: Related Posts"}} -->
            [TG_RELATED_POSTS]
            <!-- /wp:shortcode -->
        </div>
        <!-- /wp:group -->
<?php }
}
