<?php

add_action('after_setup_theme', 'ikea_setup');
add_action('wp_enqueue_scripts', 'ikea_scripts');
//add_action('widgets_init', 'ikea_register');
add_action('init', 'ikea_register_types');

add_action('init', 'custom_login_redirect');
add_action('wp_ajax_custom_login', 'custom_login_callback');
add_action('wp_ajax_nopriv_custom_login', 'custom_login_callback');
add_action('wp_ajax_custom_registration', 'custom_registration_callback');
add_action('wp_ajax_nopriv_custom_registration', 'custom_registration_callback');

add_filter('show_admin_bar', '__return_false');

remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'feed_links', 2);
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'start_post_rel_link', 10, 0);
remove_action('wp_head', 'index_rel_link');
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

function ikea_setup()
{
    register_nav_menu('menu-header', 'menu-header');
    register_nav_menu('services-header', 'services-header');
    register_nav_menu('menu-footer', 'Меню в подвале');

    add_theme_support('custom-logo');
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_image_size('si_pic', 600, 240, true);
    //add_theme_support( 'menus' );
}

function ikea_scripts()
{
    wp_enqueue_style(
        'font-awesome',
        _ikea_assets_path('css/fontawesome-free-6.4.2-web/css/all.min.css'),
    );
    wp_enqueue_script(
        'js',
        _ikea_assets_path('js/js.js'),
        [],
        '1.0',
        true
    );
    wp_enqueue_script(
        'js-slider',
        _ikea_assets_path('js/slider.js'),
        [],
        '1.0',
        true
    );
    wp_enqueue_style(
        'ikea-style',
        _ikea_assets_path('css/styles.css'),
        [],
        '1.0',
        'all'
    );

    wp_enqueue_style(
        'ikea-style-header',
        _ikea_assets_path('css/header.css'),
        [],
        '1.0',
        'all'
    );

    wp_enqueue_style(
        'ikea-style-login',
        _ikea_assets_path('css/login.css'),
        [],
        '1.0',
        'all'
    );

    wp_enqueue_style(
        'ikea-style-product',
        _ikea_assets_path('css/product.css'),
        [],
        '1.0',
        'all'
    );

    wp_dequeue_style('wp-block-library');
    wp_dequeue_style('bodhi-svgs-attachment');
    wp_dequeue_style('wp-embed');
    wp_deregister_script('wp-embed');
}
/*
function ikea_register()
{
}
*/
function ikea_register_types()
{
    register_post_type('products', [
        'labels' => [
            'name'               => 'products', // основное название для типа записи
            'singular_name'      => 'products', // название для одной записи этого типа
            'add_new'            => 'Добавить новую products', // для добавления новой записи
            'add_new_item'       => 'Добавить новую products', // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item'          => 'Редактировать products', // для редактирования типа записи
            'new_item'           => 'Новая products', // текст новой записи
            'view_item'          => 'Смотреть products', // для просмотра записи этого типа.
            'search_items'       => 'Искать products', // для поиска по этим типам записи
            'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
            'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
            'parent_item_colon'  => '', // для родителей (у древовидных типов)
            'menu_name'          => 'products', // название меню
        ],
        'public'              => true,
        'menu_position'       => 20,
        'menu_icon'           => 'dashicons-cart',
        'hierarchical'        => false,
        'supports'            => ['title'],
        'has_archive' => true
    ]);

    register_post_type('news', [
        'labels' => [
            'name'               => 'News', // основное название для типа записи
            'singular_name'      => 'News', // название для одной записи этого типа
            'add_new'            => 'Добавить новую News', // для добавления новой записи
            'add_new_item'       => 'Добавить новую News', // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item'          => 'Редактировать News', // для редактирования типа записи
            'new_item'           => 'Новая News', // текст новой записи
            'view_item'          => 'Смотреть News', // для просмотра записи этого типа.
            'search_items'       => 'Искать News', // для поиска по этим типам записи
            'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
            'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
            'parent_item_colon'  => '', // для родителей (у древовидных типов)
            'menu_name'          => 'News', // название меню
        ],
        'public'              => true,
        'menu_position'       => 20,
        'menu_icon'           => 'dashicons-cart',
        'hierarchical'        => false,
        'supports'            => ['title'],
        'has_archive' => true
    ]);

    register_post_type('store', [
        'labels' => [
            'name'               => 'Store', // основное название для типа записи
            'singular_name'      => 'Store', // название для одной записи этого типа
            'add_new'            => 'Добавить новую Store', // для добавления новой записи
            'add_new_item'       => 'Добавить новую Store', // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item'          => 'Редактировать Store', // для редактирования типа записи
            'new_item'           => 'Новая Store', // текст новой записи
            'view_item'          => 'Смотреть Store', // для просмотра записи этого типа.
            'search_items'       => 'Искать NStoreews', // для поиска по этим типам записи
            'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
            'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
            'parent_item_colon'  => '', // для родителей (у древовидных типов)
            'menu_name'          => 'Store', // название меню
        ],
        'public'              => true,
        'menu_position'       => 20,
        'menu_icon'           => 'dashicons-cart',
        'hierarchical'        => false,
        'supports'            => ['title'],
        'has_archive' => true
    ]);
}

function custom_login_callback()
{
    $user_login = sanitize_user($_POST['user_login']);
    $user_pass = esc_attr($_POST['user_pass']);

    $user = wp_signon(array(
        'user_login' => $user_login,
        'user_password' => $user_pass,
    ));

    if (is_wp_error($user)) {
        echo '<div class="error">Ошибка входа: ' . $user->get_error_message() . '</div>';
    } else {
        echo 'Вход выполнен успешно. Перенаправление или другие действия здесь.';
    }

    wp_die();
}

function custom_login_redirect()
{
    if (strpos($_SERVER['REQUEST_URI'], '/wp-login.php') !== false) {
        wp_redirect('/login-page');
        exit;
    }
}

function custom_registration_callback()
{
    $user_login = sanitize_user($_POST['user_login']);
    $user_email = sanitize_email($_POST['user_email']);
    $user_pass = esc_attr($_POST['user_pass']);

    $errors = register_new_user($user_login, $user_email, $user_pass);

    if (is_wp_error($errors)) {
        foreach ($errors->get_error_messages() as $error) {
            echo '<div class="error">Ошибка регистрации: ' . $error . '</div>';
        }
    } else {
        echo 'Регистрация успешна. Перенаправление или другие действия здесь.';
    }

    wp_die();
}

function _ikea_assets_path($path)
{
    return get_template_directory_uri() . '/assets/' . $path;
}
