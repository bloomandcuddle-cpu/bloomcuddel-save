<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|', true, 'right'); ?></title>
    <?php wp_head(); ?>
</head>

<body <?php body_class('bloomcuddle-theme'); ?>>

<header class="main-header">
    <nav class="navbar">
        <div class="logo">
            <a href="<?php echo esc_url(home_url('/')); ?>">
                <span>Bloom & Cuddle</span>
            </a>
        </div>
        
        <?php
        // محاولة عرض القائمة الرئيسية
        if (has_nav_menu('primary')) {
            wp_nav_menu(array(
                'theme_location' => 'primary',
                'menu_class'     => 'nav-links',
                'container'      => false,
            ));
        } else {
            // قائمة افتراضية إذا لم تنشئ واحدة
            echo '<ul class="nav-links">';
            echo '<li><a href="' . esc_url(home_url('/')) . '">Home</a></li>';
            echo '<li><a href="' . esc_url(home_url('/guides')) . '">Guides</a></li>';
            echo '<li><a href="' . esc_url(home_url('/about')) . '">About</a></li>';
            echo '</ul>';
        }
        ?>
        
        <div class="hamburger">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </nav>
</header>

<main class="site-content">