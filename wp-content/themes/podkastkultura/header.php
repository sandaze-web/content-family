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
<!--    <link media="print" rel="preload" href="/static/css/all.min.css" as="style" onload="this.rel='stylesheet'"/>-->

    <!-- ========== COLOR BRAND ========== -->
    <link rel="preload" href="/static/css/color.css" as="style" onload="this.rel='stylesheet'"/>
    <!-- ========== MAIN CSS ========== -->
    <link rel="preload" href="/css/style.css" as="style" onload="this.rel='stylesheet'"/>
    <!-- ========== PLUGINS CSS ========== -->
    <!-- ========== PLUGINS CSS ========== -->
    <link rel="preload" href="/static/css/plyr.css" as="style" onload="this.rel='stylesheet'"/>
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

    <!-- Yandex.Metrika counter -->
    <script type="text/javascript">
        (function(m,e,t,r,i,k,a){
            m[i]=m[i]function(){(m[i].a=m[i].a[]).push(arguments)};
            m[i].l=1*new Date();
            for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
            k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)
        })(window, document,'script','https://mc.yandex.ru/metrika/tag.js?id=105473410', 'ym');

        ym(105473410, 'init', {ssr:true, webvisor:true, clickmap:true, ecommerce:"dataLayer", accurateTrackBounce:true, trackLinks:true});
    </script>
    <noscript><div><img src="https://mc.yandex.ru/watch/105473410" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->



    <style>
        .header {
            width: 100%;
            padding: 16px 0;
            position: sticky;
            top: 0;
            background: #fff;
            z-index: 12;
        }

        .header-mainBx {
            display: flex;
            align-items: center;
        }

        .header-inner {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .header-select {
            position: relative;
        }

        .header-select__current {
            display: flex;
            align-items: center;
            gap: 12px;
            font-weight: 500;
            cursor: pointer;
        }

        .header-select__current i {
            color: rgb(73, 165, 249);
            font-size: 12px;
        }

        .header-selectBx {
            display: none;
        }

        .header-nav ul {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .header-nav ul li a {
            color: rgb(99, 102, 105);
            transition: 0.4s cubic-bezier(0.2, 0.8, 0.4, 1);
        }

        .header-nav ul li a:hover {
            color: rgb(11, 16, 20);
        }

        .header-cta {
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .header-media {
            display: flex;
            align-items: center;
            gap: 24px;
        }

        .header__phone {
            font-weight: 500;
            color: rgb(73, 165, 249);
            transition: 0.4s cubic-bezier(0.2, 0.8, 0.4, 1);
        }

        .header__phone:hover {
            color: rgb(64, 141, 223);
        }

        .header-socialsBx {
            display: flex;
            align-items: center;
            gap: 13px;
        }

        .header-logoBx {
            width: 100%;
            padding: 16px 0;
            display: block;
            position: relative;
            z-index: 10;
        }

        .header .burger {
            display: none;
            cursor: pointer;
            width: 18px;
            height: 18px;
            background-image: url("data:image/svg+xml;charset=UTF-8,%3csvg width='18' height='18' viewBox='0 0 18 18' fill='none' xmlns='http://www.w3.org/2000/svg'%3e%3ccircle cx='3' cy='3' r='3' fill='%233982C5' /%3e%3ccircle cx='15' cy='3' r='3' fill='%233982C5' /%3e%3ccircle cx='15' cy='15' r='3' fill='%233982C5' /%3e%3ccircle cx='3' cy='15' r='3' fill='rgb(73, 165, 249)' /%3e%3c/svg%3e");
            background-repeat: no-repeat;
            background-position: center;
            background-color: rgba(255, 255, 255, 0);
            margin-left: 21px;
            transition: 0.3s all;
        }

        .header .burger-menu {
            display: none;
        }

        /* Mobile header */
        @media (max-width: 760px) {
            .header {
                padding: 16px 0;
            }

            .header-main-logo {
                max-width: 50px;
            }

            .header-navBx {
                display: none;
            }

            .header-logoBx {
                padding: 16px 0 0;
            }

            .header-media {
                margin-left: auto;
            }

            .header .burger {
                display: block;
                margin-left: 10px;
            }

            .header .burger.active {
                background-image: url("data:image/svg+xml;charset=UTF-8,%3csvg width='28' height='28' viewBox='0 0 28 28' fill='none' xmlns='http://www.w3.org/2000/svg'%3e%3cpath d='M7.18945 20.7734L20.7729 7.18994' stroke='%233982C5' stroke-width='2' stroke-linecap='round' stroke-linejoin='round' /%3e%3cpath d='M20.7725 20.7734L7.18896 7.18994' stroke='rgb(73, 165, 249)' stroke-width='2' stroke-linecap='round' stroke-linejoin='round' /%3e%3c/svg%3e");
            }

            .header .burger-menu {
                height: 100vh;
                max-height: 0;
                overflow: hidden;
                transition: 0.4s;
                display: flex;
                align-items: center;
                justify-content: center;
            }

            .header .burger-menu.show {
                max-height: calc(100vh - 48px);
            }

            .header .burger-menu ul {
                display: flex;
                flex-direction: column;
                gap: 32px;
                text-align: center;
            }

            .header .burger-menu ul li a {
                font-size: 20px;
                text-align: center;
            }

            .header-cta button {
                display: none;
            }
        }


        .hero {
            padding: 30px 0 100px;
            position: relative;
            z-index: 1;
        }

        .hero-inner {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .hero__pretitle {
            font-weight: 700;
            color: rgb(123, 126, 129);
            margin-bottom: 15px;
        }

        .hero__title {
            max-width: 400px;
        }

        .hero__subtitle {
            margin-top: 7px;
            color: rgb(123, 126, 129);
            max-width: 288px;
        }

        .hero-buttonBx {
            display: flex;
            align-items: center;
            gap: 9px;
            margin-top: 70px;
        }

        .hero__price {
            color: rgb(123, 126, 129);
            font-weight: 700;
            margin-top: 11px;
        }

        .hero-mediaBx {
            width: 100%;
            max-width: 507px;
            height: 349px;
            border-radius: 25px;
            border: 1px solid rgb(227, 227, 227);
            position: relative;
        }

        .hero-mediaBx img,
        .hero-mediaBx video,
        .hero-mediaBx iframe {
            border-radius: 25px;
            overflow: hidden;
            height: 100%;
            width: 100%;
            object-fit: cover;
        }

        .hero-mediaBx p {
            position: absolute;
            right: calc(100% + 24px);
            bottom: 0;
            color: rgb(123, 126, 129);
            font-weight: 500;
            z-index: 5;
        }

        .hero-mediaBx p:after {
            content: "";
            width: 53px;
            height: 50px;
            background-image: url("data:image/svg+xml,%3Csvg%20width%3D%2253%22%20height%3D%2250%22%20viewBox%3D%220%200%2053%2050%22%20fill%3D%22none%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%3E%3Cpath%20d%3D%22M2.00006%2048.5002C1.66673%2032.6669%207.1%200.600229%2051.5%201.00023%22%20stroke%3D%22%23E3E3E3%22%20stroke-width%3D%222%22%20stroke-linecap%3D%22round%22%20stroke-linejoin%3D%22round%22%20stroke-dasharray%3D%224%204%22/%3E%3C/svg%3E");
            background-repeat: no-repeat;
            background-size: contain;
            position: absolute;
            bottom: 100%;
            left: 50%;
            transform: translate(calc(-50% + 25px), 0);
        }

        .hero__bg {
            z-index: -1;
            position: absolute;
            left: 50%;
            top: 0;
            transform: translate(-50%, 0);
            height: 110%;
            margin-top: -41px;
        }

        /* Mobile HERO */
        @media (max-width: 760px) {
            .hero {
                padding-top: 68px;
                padding-bottom: 0px;
                overflow: hidden;
            }

            .hero__bg {
                width: 389px;
                height: auto;
                top: 120px;
                right: -306px;
                left: auto;
                margin-top: 0;
            }

            .hero-inner {
                flex-direction: column;
                align-items: flex-start;
                justify-content: flex-start;
            }

            .hero__subtitle {
                color: rgb(11, 16, 20);
            }

            .hero-buttonBx {
                margin-top: 52px;
            }

            .hero-mediaBx {
                margin-top: 62px;
                display: flex;
                flex-direction: column-reverse;
                border: none;
                height: 241px;
            }

            .hero-mediaBx p {
                position: static;
                margin-bottom: 12px;
            }

            .hero-mediaBx p:after {
                content: none;
            }
        }

        @media (max-width: 472px) {
            .hero-buttonBx .link-btn span {
                color: #fff;
            }

            .hero-buttonBx .link-btn i {
                color: #fff;
            }
        }

    </style>

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

            <div class="header-cta">
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
                <button class="btn primary-btn">Оставить заявку</button>
            </div>

            <div class="burger"></div>
        </div>


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

<div class="header__container">
    <a class="header-logoBx" href="/">
        <img alt="" src="/images/logo.svg"/>
    </a>
</div>

<main id="primary" class="site-main">
