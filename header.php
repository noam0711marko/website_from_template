<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" />
    <?php wp_head(); ?>
</head>

<body data-bs-spy="scroll" data-bs-target="#mainNavbar" data-bs-offset="0" class="scrollspy-example" tabindex="0">

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark" id="mainNavbar">
        <div class="container-fluid">
            <a class="navbar-brand" href="/#home"><?php bloginfo( 'name' ); ?></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">

                <?php
                    wp_nav_menu(
                        array(
                            'menu' => 'primary',
                            'container' => '',
                            'theme_location' => 'primary',
                            'items_wrap' => '<ul class="navbar-nav ms-auto mb-2 mb-lg-0">%3$s</ul>',
                            'add_a_class'     => 'nav-link',
                        )
                    );
                ?>

               
            </div>
        </div>
    </nav>
    <!-- End Navbar -->