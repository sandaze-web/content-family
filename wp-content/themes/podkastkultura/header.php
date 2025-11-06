<?php
/**
 * Header template
 * @package PodkastKultura
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="utf-8"/>
    <meta content="IE=edge" http-equiv="X-UA-Compatible"/>
    <meta content="width=device-width,initial-scale=1" name="viewport"/>
    <!-- ========== COLOR BRAND ========== -->
    <link href="/static/css/color.css" rel="stylesheet"/>
    <!-- ========== MAIN CSS ========== -->
    <link href="/css/style.css" rel="stylesheet"/>
    <!-- ========== PLUGINS CSS ========== -->
    <link href="/static/css/all.css" rel="stylesheet"/>
    <!-- ========== PLUGINS CSS ========== -->
    <link href="/static/css/plyr.css" rel="stylesheet"/>
    <!--==========   FAVICON   ==========-->
    <link href="<?php echo get_template_directory_uri(); ?>/assets/favicon/apple-touch-icon.png" rel="apple-touch-icon"
          sizes="76x76"/>
    <link href="<?php echo get_template_directory_uri(); ?>/assets/favicon/favicon-32x32.png" rel="icon" sizes="32x32"
          type="image/png"/>
    <link href="<?php echo get_template_directory_uri(); ?>/assets/favicon/favicon-16x16.png" rel="icon" sizes="16x16"
          type="image/png"/>
    <link href="<?php echo get_template_directory_uri(); ?>/assets/favicon/site.webmanifest" rel="manifest"/>
    <link color="#5bbad5" href="<?php echo get_template_directory_uri(); ?>/assets/favicon/safari-pinned-tab.svg"
          rel="mask-icon"/>
    <meta content="#da532c" name="msapplication-TileColor"/>
    <meta content="noindex, nofollow" name="robots"/>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header class="header">
    <div class="header__container">
        <div class="header-inner">
            <div class="header-mainBx">
                <a href="/" class="header-main-logo">
                    <img src="/images/logo-main.svg" alt="">
                </a>
                <div class="header-select">
                    <div class="header-select__current">
                        <span>Москва</span>
                    </div>
                    <div class="header-selectBx">
                        <div class="header-select__item">Санкт-Петербург</div>
                    </div>
                </div>
            </div>

            <div class="header-navBx">
                <nav class="header-nav">
                    <?php
                    wp_nav_menu([
                            'theme_location' => 'header_menu',
                            'container'      => false,
                            'menu_class'     => '', // ты можешь задать класс ul
                            'items_wrap'     => '<ul>%3$s</ul>',
                            'fallback_cb'    => false,
                    ]);
                    ?>
                </nav>
            </div>

            <div class="header-media">
<!--                <a class="header__phone" href="tel:+74996475090">+7 499 647 50 90</a>-->
                <?php if ($phone = get_field('site_phone', 'option')): ?>
                    <a href="tel:<?php echo preg_replace('/\D+/', '', $phone); ?>" class="header__phone">
                        <?php echo esc_html($phone); ?>
                    </a>
                <?php endif; ?>
                <div class="header-socialsBx">
                    <?php if ($tg = get_field('site_telegram', 'option')): ?>
                        <a class="header-socialsBx__item" href="<?php echo esc_url($tg); ?>" target="_blank" aria-label="Telegram">
                            <img alt="" src="/images/socials/tg.svg"/>
                        </a>
                    <?php endif; ?>

                    <?php if ($wa = get_field('site_whatsapp', 'option')): ?>
                        <a class="header-socialsBx__item" href="<?php echo esc_url($wa); ?>" target="_blank" aria-label="WhatsApp">
                            <img alt="" src="/images/socials/wa.svg"/>
                        </a>
                    <?php endif; ?>


                </div>
            </div>

            <div class="burger"></div>
        </div>

        <a class="header-logoBx" href="/">
            <img alt="" src="/images/logo.svg"/>
        </a>

        <div class="burger-menu">
            <?php
            wp_nav_menu([
                    'theme_location' => 'header_menu',
                    'container'      => false,
                    'menu_class'     => '', // ты можешь задать класс ul
                    'items_wrap'     => '<ul>%3$s</ul>',
                    'fallback_cb'    => false,
            ]);
            ?>
        </div>
    </div>
</header>

<main id="primary" class="site-main">
