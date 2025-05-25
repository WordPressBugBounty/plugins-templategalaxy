<?php
if (tg_fs()->is__premium_only()) {
    if (tg_fs()->can_use_premium_code()) {
        /**
         * Title: PRO: Header With Ads
         * Slug: templategalaxy/bloghoot-header-with-ads
         * Categories: bloghoot
         */
        $bloghoot_agency_url = trailingslashit(get_template_directory_uri());
        $bloghoot_images = array(
            $bloghoot_agency_url . 'assets/images/advertisement_img.jpg',
        );
?>

        <!-- wp:group {"tagName":"header","metadata":{"categories":["bloghoot"],"patternName":"bloghoot/header-with-ads","name":"Header Default"},"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"},"blockGap":"0"}},"backgroundColor":"light-color","layout":{"type":"constrained","contentSize":"100%"}} -->
        <header class="wp-block-group has-light-color-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"5px","bottom":"5px"}}},"backgroundColor":"black-color","layout":{"type":"constrained","contentSize":"1180px"}} -->
            <div class="wp-block-group has-black-color-background-color has-background" style="padding-top:5px;padding-right:var(--wp--preset--spacing--40);padding-bottom:5px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
                <div class="wp-block-group"><!-- wp:navigation {"textColor":"light-color","overlayBackgroundColor":"light-color","overlayTextColor":"heading-color","className":"bloghoot-topbar-nav","fontSize":"small","layout":{"type":"flex","justifyContent":"left"}} -->
                    <!-- wp:home-link {"label":"Home"} /-->

                    <!-- wp:page-list /-->
                    <!-- /wp:navigation -->

                    <!-- wp:social-links {"iconBackgroundColor":"transparent","iconBackgroundColorValue":"#ffffff00","openInNewTab":true,"className":"bloghoot-social-icons","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|20","left":"var:preset|spacing|20"}}}} -->
                    <ul class="wp-block-social-links has-icon-background-color bloghoot-social-icons"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

                        <!-- wp:social-link {"url":"#","service":"instagram"} /-->

                        <!-- wp:social-link {"url":"#","service":"x"} /-->

                        <!-- wp:social-link {"url":"#","service":"linkedin"} /-->

                        <!-- wp:social-link {"url":"#","service":"youtube"} /-->

                        <!-- wp:social-link {"url":"#","service":"pinterest"} /-->

                        <!-- wp:social-link {"url":"#","service":"tiktok"} /-->
                    </ul>
                    <!-- /wp:social-links -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"20px","bottom":"20px"},"blockGap":"0"}},"backgroundColor":"light-color","layout":{"type":"constrained","contentSize":"1180px"}} -->
            <div class="wp-block-group has-light-color-background-color has-background" style="padding-top:20px;padding-right:var(--wp--preset--spacing--40);padding-bottom:20px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
                <div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                    <div class="wp-block-group"><!-- wp:site-logo {"width":68,"shouldSyncIcon":false,"style":{"color":{"duotone":"unset"}}} /-->

                        <!-- wp:site-title {"textAlign":"center","style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"700","fontSize":"44px"},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"},":hover":{"color":{"text":"var:preset|color|primary"}}}}}} /-->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:image {"lightbox":{"enabled":false},"id":6728,"sizeSlug":"full","linkDestination":"custom"} -->
                    <figure class="wp-block-image size-full"><img src="<?php echo esc_url($bloghoot_images[0]) ?>" alt="" class="wp-image-6728" /></figure>
                    <!-- /wp:image -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","bottom":"0px","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}},"border":{"top":{"color":"var:preset|color|border-color","width":"1px"},"bottom":{"color":"var:preset|color|border-color","width":"1px"},"right":{},"left":{}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
            <div class="wp-block-group" style="border-top-color:var(--wp--preset--color--border-color);border-top-width:1px;border-bottom-color:var(--wp--preset--color--border-color);border-bottom-width:1px;padding-top:0px;padding-right:var(--wp--preset--spacing--40);padding-bottom:0px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
                <div class="wp-block-group"><!-- wp:navigation {"ref":6716,"textColor":"heading-color","overlayBackgroundColor":"light-color","overlayTextColor":"heading-color","className":"bloghoot-navigation","style":{"typography":{"fontStyle":"normal","fontWeight":"400","textTransform":"none","fontSize":"18px"}},"layout":{"type":"flex","justifyContent":"left"}} /-->

                    <!-- wp:search {"label":"Search","showLabel":false,"placeholder":"Search Site...","width":100,"widthUnit":"%","buttonText":"Search","buttonPosition":"button-only","buttonUseIcon":true,"isSearchFieldHidden":true,"style":{"border":{"radius":"60px","width":"0px","style":"none"},"elements":{"link":{"color":{"text":"var:preset|color|black-color"}}}},"backgroundColor":"transparent","textColor":"black-color"} /-->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </header>
        <!-- /wp:group -->
<?php }
}
