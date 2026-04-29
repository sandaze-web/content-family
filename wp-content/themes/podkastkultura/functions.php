<?php
/**
 * Functions
 * @package PodkastKultura
 */

if (!defined('ABSPATH')) {
    exit;
}

add_action('after_setup_theme', function () {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array('search-form', 'gallery', 'caption', 'style', 'script'));
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'podkastkultura'),
        'footer' => __('Footer Menu', 'podkastkultura'),
    ));
});

//add_action('wp_enqueue_scripts', function () {
//    wp_enqueue_style('pk-style', get_stylesheet_uri(), array(), '1.0.0');
////    wp_enqueue_style('pk-style-1', get_template_directory_uri() . '/assets/css/all.min.css', array(), null);
////    wp_enqueue_style('pk-style-2', get_template_directory_uri() . '/assets/css/color.css', array(), null);
////    wp_enqueue_style('pk-style-3', get_template_directory_uri() . '/assets/css/plyr.css', array(), null);
//    wp_enqueue_script('pk-script-1', get_template_directory_uri() . '/assets/plugins/jquery.maskedinput.min.js', array('jquery'), null, true);
//    wp_enqueue_script('pk-script-2', get_template_directory_uri() . '/assets/plugins/jquery.min.js', array('jquery'), null, true);
//    wp_enqueue_script('pk-script-3', get_template_directory_uri() . '/assets/plugins/jquery.spincrement.min.js', array('jquery'), null, true);
//    wp_enqueue_script('pk-script-4', get_template_directory_uri() . '/assets/plugins/plyr.js', array('jquery'), null, true);
//    wp_enqueue_script('slick', get_template_directory_uri() . '/assets/plugins/slick.min.js', array('jquery'), null, true);
//    wp_enqueue_script('pk-script-5', get_template_directory_uri() . '/assets/plugins/swiper-bundle.min.js', array('jquery'), null, true);
//});

add_action('wp_head', function () {
    ?>
    <link rel="preload" href="<?php echo get_template_directory_uri(); ?>/assets/css/all.min.css" as="style" onload="this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/all.min.css">
    </noscript>

    <link rel="preload" href="<?php echo get_template_directory_uri(); ?>/assets/css/slick.min.css" as="style" onload="this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/slick.min.css">
    </noscript>

    <link rel="preload" href="<?php echo get_template_directory_uri(); ?>/assets/css/slick-theme.css" as="style" onload="this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/slick-theme.css">
    </noscript>
    <?php
}, 5);

// Widget area example
add_action('widgets_init', function () {
    register_sidebar(array(
        'name' => __('Sidebar', 'podkastkultura'),
        'id' => 'sidebar-1',
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));
});

add_action('acf/init', 'register_acf_blocks');
function register_acf_blocks()
{
    if (function_exists('acf_register_block_type')) {

        acf_register_block_type([
            'name' => 'hero',
            'title' => __('Главная секция'),
            'description' => __('Главный экран'),
            'render_template' => 'template-parts/hero.php',
            'category' => 'layout',
            'icon' => 'cover-image',
            'keywords' => ['hero', 'главная', 'баннер'],
            'supports' => ['align' => false],
        ]);
        acf_register_block_type([
            'name' => 'studios',
            'title' => 'Наши студии',
            'description' => 'Блок с карточками студий и слайдером',
            'render_template' => 'template-parts/studios.php',
            'category' => 'layout',
            'icon' => 'store',
            'keywords' => ['студии', 'слайдер', 'podcast'],
            'supports' => ['align' => false,]
        ]);

        acf_register_block_type([
            'name' => 'equipment',
            'title' => 'Оборудование',
            'description' => 'Секция с карточками оборудования',
            'render_template' => 'template-parts/equipment.php',
            'category' => 'layout',
            'icon' => 'camera',
            'supports' => ['align' => false],
        ]);

        acf_register_block_type([
            'name' => 'price',
            'title' => 'Калькулятор с формой',
            'description' => 'Блок с калькулятором и формой бронирования',
            'render_template' => 'template-parts/section-price.php',
            'category' => 'layout',
            'icon' => 'money-alt',
            'supports' => ['align' => false],
        ]);

        acf_register_block_type(array(
            'name' => 'steps',
            'title' => __('Шаги'),
            'description' => __('Секция с шагами записи подкаста.'),
            'render_template' => 'template-parts/steps.php',
            'category' => 'layout',
            'icon' => 'list-view',
            'keywords' => array('steps', 'подкаст', 'этапы'),
            'supports' => ['align' => false],
        ));

        acf_register_block_type(array(
            'name' => 'examples',
            'title' => __('Примеры'),
            'description' => __('Секция с примерами подкастов.'),
            'render_template' => 'template-parts/examples.php',
            'category' => 'layout',
            'icon' => 'video-alt3',
            'keywords' => array('examples', 'подкаст', 'видео'),
            'supports' => ['align' => false],
        ));

        acf_register_block_type(array(
            'name' => 'team',
            'title' => __('Команда'),
            'description' => __('Секция с командой.'),
            'render_template' => 'template-parts/team.php',
            'category' => 'layout',
            'icon' => 'groups',
            'keywords' => array('team', 'команда'),
            'supports' => ['align' => false],
        ));

        acf_register_block_type(array(
            'name' => 'invite-section',
            'title' => __('Приглашение'),
            'description' => __('Секция "Podcast Kultura" с заголовком, картинкой и подзаголовком.'),
            'render_template' => get_template_directory() . '/template-parts/section-invite.php',
            'category' => 'layout',
            'icon' => 'admin-users',
            'keywords' => array('invite', 'podcast', 'section'),
            'supports' => ['align' => false],
        ));

        acf_register_block_type(array(
            'name' => 'schema-section',
            'title' => __('Схема студии'),
            'description' => __('Блок со схемой помещения и списком зон.'),
            'render_template' => get_template_directory() . '/template-parts/section-schema.php',
            'category' => 'layout',
            'icon' => 'grid-view',
            'keywords' => array('schema', 'layout', 'studio'),
            'supports' => ['align' => false],
        ));

        acf_register_block_type(array(
            'name' => 'faq-section',
            'title' => __('FAQ (Часто задаваемые вопросы)'),
            'description' => __('Блок с вопросами/ответами'),
            'render_template' => get_template_directory() . '/template-parts/faq-section.php',
            'category' => 'layout',
            'icon' => 'grid-view',
            'keywords' => array('schema', 'layout', 'studio'),
            'supports' => ['align' => false],
        ));
        acf_register_block_type(array(
            'name' => 'contacts-section',
            'title' => __('Блок контакты'),
            'description' => __('Блок с контактами'),
            'render_template' => get_template_directory() . '/template-parts/section-contacts.php',
            'category' => 'layout',
            'icon' => 'phone',
            'keywords' => array('schema', 'layout', 'studio'),
            'supports' => ['align' => false],
        ));
        acf_register_block_type(array(
            'name' => 'section-studios-price',
            'title' => __('Цены в каждой студии'),
            'description' => __('Цены в каждой студии'),
            'render_template' => get_template_directory() . '/template-parts/section-studios-price.php',
            'category' => 'layout',
            'icon' => 'grid-view',
            'keywords' => array('schema', 'layout', 'studio'),
            'supports' => ['align' => false],
        ));
        acf_register_block_type(array(
            'name' => 'section-installation',
            'title' => __('Цена монтажа'),
            'description' => __('Цена монтажа'),
            'render_template' => get_template_directory() . '/template-parts/section-installation.php',
            'category' => 'layout',
            'icon' => 'phone',
            'keywords' => array('schema', 'layout', 'studio'),
            'supports' => ['align' => false],
        ));
        acf_register_block_type(array(
            'name' => 'section-contacts-without-map',
            'title' => __('Контакты без карты'),
            'description' => __('Контакты без карты'),
            'render_template' => get_template_directory() . '/template-parts/section-contacts-without-map.php',
            'category' => 'layout',
            'icon' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M11.9998 0C5.37257 0 0 5.37273 0 11.9998C0 18.6269 5.37257 24 11.9998 24C18.627 24 24 18.6269 24 11.9998C24 5.37273 18.627 0 11.9998 0ZM17.1876 14.2822H12.1002C12.083 14.2822 12.067 14.278 12.05 14.2774C12.0329 14.2782 12.017 14.2822 11.9997 14.2822C11.5414 14.2822 11.1698 13.9106 11.1698 13.4522V4.98C11.1698 4.52168 11.5414 4.15007 11.9997 4.15007C12.458 4.15007 12.8297 4.52168 12.8297 4.98V12.6223H17.1873C17.6457 12.6223 18.0173 12.9939 18.0173 13.4522C18.0173 13.9106 17.646 14.2822 17.1876 14.2822Z" fill="#2271b1"/>
    </svg>',
            'keywords' => array('schema', 'layout', 'studio'),
            'supports' => ['align' => false],
        ));


        acf_register_block_type(array(
            'name' => 'section-title',
            'title' => __('Секция-заголовок'),
            'description' => __('Секция-заголовок'),
            'render_template' => get_template_directory() . '/template-parts/section-title.php',
            'category' => 'layout',
            'icon' => 'grid-view',
            'keywords' => array('schema', 'layout', 'studio'),
            'supports' => ['align' => false],
        ));

        acf_register_block_type(array(
            'name'              => 'section-geo',
            'title'             => __('Как пройти в студию'),
            'description'       => __('Блок с видео-инструкцией как пройти в студию пешком и на машине'),
            'render_template'   => get_template_directory() . '/template-parts/section-geo.php',
            'category'          => 'layout',
            'icon'              => 'location-alt',
            'keywords'          => array('geo', 'studio', 'навигация', 'видео'),
            'supports'          => ['align' => false],
        ));

        acf_register_block_type(array(
            'name'              => 'section-requisites',
            'title'             => __('Реквизиты'),
            'description'       => __('Блок с реквизитами компании'),
            'render_template'   => get_template_directory() . '/template-parts/section-requisites.php',
            'category'          => 'layout',
            'icon'              => 'id-alt',
            'keywords'          => array('реквизиты', 'инн', 'кпп'),
            'supports'          => ['align' => false],
        ));
        acf_register_block_type(array(
            'name'              => 'section-cases',
            'title'             => __('Блок для страницы пример'),
            'description'       => __('Блок с примерами видео и изображений'),
            'render_template'   => get_template_directory() . '/template-parts/section-cases.php',
            'category'          => 'layout',
            'icon'              => 'format-video',
            'keywords'          => array('cases', 'примеры', 'видео'),
            'supports'          => ['align' => false],
        ));

        acf_register_block_type(array(
            'name'              => 'section-about',
            'title'             => __('О нашей студии'),
            'description'       => __('Блок "О нашей студии" с цитатой, ссылками и фото'),
            'render_template'   => get_template_directory() . '/template-parts/section-about.php',
            'category'          => 'layout',
            'icon'              => 'businessperson',
            'keywords'          => array('about', 'студия', 'о нас'),
            'supports'          => ['align' => false],
        ));

        acf_register_block_type(array(
            'name'              => 'section-info',
            'title'             => __('Услуги и позиционирование'),
            'description'       => __('Блок с описанием услуг и слайдером изображений'),
            'render_template'   => get_template_directory() . '/template-parts/section-info.php',
            'category'          => 'layout',
            'icon'              => 'admin-tools',
            'keywords'          => array('info', 'услуги', 'позиционирование'),
            'supports'          => ['align' => false],
        ));
        acf_register_block_type(array(
            'name'              => 'section-included',
            'title'             => __('Что включено'),
            'description'       => __('Блок с описанием что включено в стоимость'),
            'render_template'   => get_template_directory() . '/template-parts/section-included.php',
            'category'          => 'layout',
            'icon'              => 'grid-view',
            'supports'          => ['align' => false],
        ));
        acf_register_block_type(array(
            'name'              => 'section-tags',
            'title'             => __('Теги + 3 медиа'),
            'description'       => __('Блок с тегами и фото после главной'),
            'render_template'   => get_template_directory() . '/template-parts/section-tags.php',
            'category'          => 'layout',
            'icon'              => 'grid-view',
            'supports'          => ['align' => false],
        ));
        acf_register_block_type(array(
            'name'              => 'section-about-short',
            'title'             => __('О нас (коротко)'),
            'description'       => __('Короткое описание о нас'),
            'render_template'   => get_template_directory() . '/template-parts/section-about-short.php',
            'category'          => 'layout',
            'icon'              => 'grid-view',
            'supports'          => ['align' => false],
        ));
        acf_register_block_type(array(
            'name'              => 'section-slider',
            'title'             => __('Слайдер'),
            'description'       => __('Слайдер за кадром'),
            'render_template'   => get_template_directory() . '/template-parts/section-slider.php',
            'category'          => 'layout',
            'icon'              => 'grid-view',
            'supports'          => ['align' => false],
        ));


    }
}

if (function_exists('acf_add_options_page')) {
    acf_add_options_page(array(
        'page_title'    => 'Настройки сайта',
        'menu_title'    => 'Настройки сайта',
        'menu_slug'     => 'theme-general-settings',
        'capability'    => 'edit_posts',
        'redirect'      => false,
        'position'      => 2,
        'icon_url'      => 'dashicons-admin-generic',
    ));
}

add_action('after_setup_theme', function () {
    register_nav_menus([
        'header_menu' => __('Меню в шапке', 'podkastkultura'),
    ]);
});

function register_theme_menus() {
    register_nav_menus([
        'footer_menu' => 'Меню в футере',
    ]);
}
add_action('init', 'register_theme_menus');
function custom_breadcrumbs() {
    // Не выводим на главной
    if (is_front_page()) return;

    echo '<div class="breadcrumb">';
    echo '<div class="breadcrumb__container">';
    echo '<div class="breadcrumb-inner">';
    echo '<ul class="crumbs-list" itemscope itemtype="https://schema.org/BreadcrumbList">';

    // Главная
    echo '<li class="crumbs-list__item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">';
    echo '<a class="crumbs-list__link" href="' . home_url() . '" itemprop="item">';
    echo '<span itemprop="name">Главная</span>';
    echo '<meta itemprop="position" content="1" />';
    echo '</a>';
    echo '</li>';

    // Если это страница
    if (is_page()) {
        global $post;
        if ($post->post_parent) {
            $parent_id  = $post->post_parent;
            $breadcrumbs = array();
            while ($parent_id) {
                $page = get_page($parent_id);
                $breadcrumbs[] = '<li class="crumbs-list__item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem"><a class="crumbs-list__link" href="' . get_permalink($page->ID) . '" itemprop="item"><span itemprop="name">' . get_the_title($page->ID) . '</span><meta itemprop="position" content="2" /></a></li>';
                $parent_id  = $page->post_parent;
            }
            $breadcrumbs = array_reverse($breadcrumbs);
            foreach ($breadcrumbs as $crumb) echo $crumb;
        }
        echo '<li class="crumbs-list__item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">';
        echo '<span itemprop="name">' . get_the_title() . '</span>';
        echo '<meta itemprop="position" content="3" />';
        echo '</li>';
    }

    // Если это пост (выводим без категории, но со ссылкой на блог)
    elseif (is_single()) {
        $blog_page = get_page_by_path('blog'); // проверь, чтобы слаг страницы блога был /blog
        if ($blog_page) {
            echo '<li class="crumbs-list__item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">';
            echo '<a class="crumbs-list__link" href="' . get_permalink($blog_page->ID) . '" itemprop="item">';
            echo '<span itemprop="name">' . get_the_title($blog_page->ID) . '</span>';
            echo '<meta itemprop="position" content="2" />';
            echo '</a>';
            echo '</li>';
        }

        echo '<li class="crumbs-list__item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">';
        echo '<span itemprop="name">' . get_the_title() . '</span>';
        echo '<meta itemprop="position" content="3" />';
        echo '</li>';
    }

    // Если это страница автора
    elseif (is_author()) {
        $author = get_queried_object();
        $author_name = $author->display_name;

        $blog_page = get_page_by_path('blog');
        if ($blog_page) {
            echo '<li class="crumbs-list__item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">';
            echo '<a class="crumbs-list__link" href="' . get_permalink($blog_page->ID) . '" itemprop="item">';
            echo '<span itemprop="name">' . get_the_title($blog_page->ID) . '</span>';
            echo '<meta itemprop="position" content="2" />';
            echo '</a>';
            echo '</li>';
        }

        echo '<li class="crumbs-list__item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">';
        echo '<span itemprop="name">' . esc_html($author_name) . '</span>';
        echo '<meta itemprop="position" content="3" />';
        echo '</li>';
    }

    // Категория
    elseif (is_category()) {
        echo '<li class="crumbs-list__item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">';
        echo '<span itemprop="name">' . single_cat_title('', false) . '</span>';
        echo '<meta itemprop="position" content="2" />';
        echo '</li>';
    }

    // Поиск
    elseif (is_search()) {
        echo '<li class="crumbs-list__item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">';
        echo '<span itemprop="name">Результаты поиска по: "' . get_search_query() . '"</span>';
        echo '<meta itemprop="position" content="2" />';
        echo '</li>';
    }

    // 404
    elseif (is_404()) {
        echo '<li class="crumbs-list__item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">';
        echo '<span itemprop="name">Ошибка 404</span>';
        echo '<meta itemprop="position" content="2" />';
        echo '</li>';
    }

    echo '</ul>';
    echo '</div></div></div>';
}




function allow_svg_upload($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes', 'allow_svg_upload');


add_action('wp_ajax_send_form_handler', 'send_form_handler');
add_action('wp_ajax_nopriv_send_form_handler', 'send_form_handler');

function send_form_handler() {

    $to = "Grigorii_Petruk@mail.ru";

    $form_name = isset($_POST['form_name']) ? sanitize_text_field($_POST['form_name']) : 'Форма';
    $subject = "Новая заявка: " . $form_name;

    // Собираем письмо
    $message = "<h2>Новая заявка с сайта</h2>";
    $message .= "<p><strong>Форма:</strong> {$form_name}</p>";

    // Основные данные
    $fields = [
            "Имя" => "name",
            "Телефон" => "phone",
            "Контактные данные" => "contact_value",
            "Студия" => "services_studio",
            "Услуга" => "services_variant",
            "Кол-во часов" => "hours",
            "Итоговая стоимость" => "calculated_total",
            "Способ связи" => "contact_method",
    ];

    foreach ($fields as $label => $key) {
        if (!empty($_POST[$key])) {
            $value = sanitize_text_field($_POST[$key]);
            $message .= "<p><strong>{$label}:</strong> {$value}</p>";
        }
    }

    // Опции
    if (!empty($_POST['services_option'])) {
        $opts = array_map('sanitize_text_field', $_POST['services_option']);
        $message .= "<p><strong>Опции:</strong> " . implode(", ", $opts) . "</p>";
    }

    // Доп. опции
    if (!empty($_POST['extra_option'])) {
        $extra = array_map('sanitize_text_field', $_POST['extra_option']);
        $message .= "<p><strong>Дополнительно:</strong> " . implode(", ", $extra) . "</p>";
    }

    // Заголовки
    $headers = [
            'Content-Type: text/html; charset=UTF-8',
            'From: Content Family <hello@' . $_SERVER['SERVER_NAME'] . '>'
    ];

    wp_mail($to, $subject, $message, $headers);

    wp_send_json(['success' => true]);
}
