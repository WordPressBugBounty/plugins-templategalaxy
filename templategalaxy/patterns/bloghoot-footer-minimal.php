<?php
if (tg_fs()->is__premium_only()) {
    if (tg_fs()->can_use_premium_code()) {
        /**
         * Title: PRO: Footer Minimal
         * Slug: templategalaxy/bloghoot-footer-minimal
         * Categories: bloghoot
         */
?>
        <!-- wp:group {"metadata":{"categories":["bloghoot"],"patternName":"templategalaxy/bloghoot-footer-minimal","name":"Footer Minimal"},"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"40px","bottom":"28px"}}},"backgroundColor":"black-color","layout":{"type":"constrained","contentSize":"1440px"}} -->
        <div class="wp-block-group has-black-color-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:40px;padding-right:var(--wp--preset--spacing--40);padding-bottom:28px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:site-title {"textAlign":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"},":hover":{"color":{"text":"var:preset|color|secondary"}}}},"typography":{"fontStyle":"normal","fontWeight":"700","textTransform":"uppercase"}}} /-->

            <!-- wp:group {"style":{"spacing":{"padding":{"top":"28px","bottom":"0px"},"margin":{"top":"40px"}},"border":{"top":{"color":"#ffffff33","width":"1px"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
            <div class="wp-block-group" style="border-top-color:#ffffff33;border-top-width:1px;margin-top:40px;padding-top:28px;padding-bottom:0px"><!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"typography":{"lineHeight":"1.6"}},"textColor":"background"} -->
                <p class="has-text-align-center has-background-color has-text-color has-link-color" style="line-height:1.6">Proudly Powered by WordPress | Theme: Bloghoot by WebsiteinWP</p>
                <!-- /wp:paragraph -->

                <!-- wp:social-links {"iconColor":"light-color","iconColorValue":"#FFFFFF","className":"is-style-logos-only","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|30","left":"var:preset|spacing|50"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
                <ul class="wp-block-social-links has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

                    <!-- wp:social-link {"url":"#","service":"x"} /-->

                    <!-- wp:social-link {"url":"#","service":"instagram"} /-->

                    <!-- wp:social-link {"url":"#","service":"tiktok"} /-->

                    <!-- wp:social-link {"url":"#","service":"youtube"} /-->

                    <!-- wp:social-link {"url":"#","service":"linkedin"} /-->

                    <!-- wp:social-link {"url":"#","service":"pinterest"} /-->
                </ul>
                <!-- /wp:social-links -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->
<?php }
}
