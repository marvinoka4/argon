<?php

/**
 * The off-canvas menu uses the Off-Canvas Component
 *
 */
?>

<div class="off-canvas-content" data-off-canvas-content>
    <header class="header" role="banner">

        <div class="grid-container fluid padding-vertical-1">
            <div class="grid-x align-middle">
                <div class="large-3 medium-3 small-6 cell">
                    <a href="<?php echo home_url(); ?>">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/util/site_logo.svg" width="200" alt="AKM" />
                    </a>
                </div>
                <div class="large-9 medium-9 small-6 cell flex-container align-right align-middle">
                    <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'main-menu',
                            'container' => '',
                            'items_wrap' => '<ul class="dropdown menu show-for-large" data-dropdown-menu>%3$s</ul>',
                            'walker' => new nav_walker(),
                        )
                    )
                    ?>
                    <div class="hide-for-large">
                        <button class="hamburger hamburger--elastic" type="button" aria-label="Menu" aria-controls="navigation" data-toggle="off-canvas">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
        </div>

    </header> <!-- end .header -->