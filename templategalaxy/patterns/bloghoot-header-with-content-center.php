<?php
if (tg_fs()->is__premium_only()) {
    if (tg_fs()->can_use_premium_code()) {
        /**
         * Title: PRO: Header With Content Center
         * Slug: templategalaxy/bloghoot-header-with-content-center
         * Categories: bloghoot
         */
?>
        <!-- wp:group {"metadata":{"categories":["bloghoot"],"patternName":"bloghoot/header-with-content-center","name":"Header with Content Center"},"style":{"spacing":{"padding":{"top":"0px","bottom":"0px","left":"0","right":"0"}}},"backgroundColor":"light-color","layout":{"type":"constrained","contentSize":"100%"}} -->
        <div class="wp-block-group has-light-color-background-color has-background" style="padding-top:0px;padding-right:0;padding-bottom:0px;padding-left:0"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","padding":{"top":"28px","bottom":"28px","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
            <div class="wp-block-group" style="padding-top:28px;padding-right:var(--wp--preset--spacing--40);padding-bottom:28px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:site-title {"style":{"typography":{"fontStyle":"normal","fontWeight":"700","fontSize":"84px","textTransform":"uppercase"},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"},":hover":{"color":{"text":"var:preset|color|primary"}}}}}} /--></div>
            <!-- /wp:group -->

            <!-- wp:group {"style":{"border":{"top":{"color":"var:preset|color|border-color","width":"1px"},"bottom":{"color":"var:preset|color|border-color","width":"1px"}},"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"20px","bottom":"20px","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"backgroundColor":"primary","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
            <div class="wp-block-group has-primary-background-color has-background" style="border-top-color:var(--wp--preset--color--border-color);border-top-width:1px;border-bottom-color:var(--wp--preset--color--border-color);border-bottom-width:1px;margin-top:0;margin-bottom:0;padding-top:20px;padding-right:var(--wp--preset--spacing--40);padding-bottom:20px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:navigation {"textColor":"light-color"} /--></div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->
<?php  }
}
