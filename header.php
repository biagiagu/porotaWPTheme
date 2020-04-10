<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body>

    <!-- MENU -->
    <nav id="site-navigation" class="nav-wrapper main-navigation" role="navigation">
        <?php
            $args = [
                'theme_location'    => 'main-menu',
                'menu_class'        => 'left hide-on-med-and-down',
                'menu_id'           => 'nav-mobile'
            ];
            wp_nav_menu($args);
        ?>
    </nav>

    <a href="#" class="brand-logo">LOGO aquí!</a>
    <i class="material-icons">casino</i>