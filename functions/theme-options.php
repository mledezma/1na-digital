<?php

add_action('admin_menu', 'theme_options_page_create');
function theme_options_page_create() {
    add_submenu_page( "themes.php", '1na Digital Options', '1na Digital Options', 'edit_pages', '1na_options_page', '_1na_options_display');
}

//preparing js file
function include_media_button_js_file() {
    if(is_admin()){
        wp_enqueue_script('media_button', get_stylesheet_directory_uri() . '/assets/js/admin/1na-options.js', array('jquery'), '1.0', true);
    }
}
add_action('wp_enqueue_media', 'include_media_button_js_file');

function _1na_options_display() {

    wp_enqueue_media();

    /*LOGO*/
    if (isset($_POST['1na_logo_image'])) {
        update_option('1na_logo_image', $_POST['1na_logo_image']);
        $_1na_logo = $_POST['1na_logo_image'];
    }
    if (isset($_POST['1na_logowhite_image'])) {
        update_option('1na_logowhite_image', $_POST['1na_logowhite_image']);
        $_1na_logowhite = $_POST['1na_logowhite_image'];
    }
    if (isset($_POST['1na_logo_big'])) {
        update_option('1na_logo_big', $_POST['1na_logo_big']);
        $_1na_logowhite = $_POST['1na_logo_big'];
    }

    /*FILOSOFIA*/
    if (isset($_POST['1na_seccion1_title_1'])) {
        update_option('1na_seccion1_title_1', $_POST['1na_seccion1_title_1']);
        $_1na_seccion1_title_1 = $_POST['1na_seccion1_title_1'];
    }
    if (isset($_POST['1na_seccion1_title_2'])) {
        update_option('1na_seccion1_title_2', $_POST['1na_seccion1_title_2']);
        $_1na_seccion1_title_2 = $_POST['1na_seccion1_title_2'];
    }

    /*SERVICIOS*/
    if (isset($_POST['1na_seccion2_title_1'])) {
        update_option('1na_seccion2_title_1', $_POST['1na_seccion2_title_1']);
        $_1na_seccion2_title_1 = $_POST['1na_seccion2_title_1'];
    }
    if (isset($_POST['1na_seccion2_title_2'])) {
        update_option('1na_seccion2_title_2', $_POST['1na_seccion2_title_2']);
        $_1na_seccion2_title_2 = $_POST['1na_seccion2_title_2'];
    }
    if (isset($_POST['1na_seccion2_content'])) {
        update_option('1na_seccion2_content', $_POST['1na_seccion2_content']);
        $_1na_seccion2_content = $_POST['1na_seccion2_content'];
    }
    if (isset($_POST['1na_seccion2_footer'])) {
        update_option('1na_seccion2_footer', $_POST['1na_seccion2_footer']);
        $_1na_seccion2_footer = $_POST['1na_seccion2_footer'];
    }

    /*PROYECTOS*/
    if (isset($_POST['1na_seccion3_title_1'])) {
        update_option('1na_seccion3_title_1', $_POST['1na_seccion3_title_1']);
        $_1na_seccion3_title_1 = $_POST['1na_seccion3_title_1'];
    }
    if (isset($_POST['1na_seccion3_title_2'])) {
        update_option('1na_seccion3_title_2', $_POST['1na_seccion3_title_2']);
        $_1na_seccion3_title_2 = $_POST['1na_seccion3_title_2'];
    }
    if (isset($_POST['1na_seccion3_text'])) {
        update_option('1na_seccion3_text', $_POST['1na_seccion3_text']);
        $_1na_seccion3_text = $_POST['1na_seccion3_text'];
    }
    if (isset($_POST['1na_seccion3_btntext'])) {
        update_option('1na_seccion3_btntext', $_POST['1na_seccion3_btntext']);
        $_1na_seccion3_btntext = $_POST['1na_seccion3_btntext'];
    }
    if (isset($_POST['1na_seccion3_btnurl'])) {
        update_option('1na_seccion3_btnurl', $_POST['1na_seccion3_btnurl']);
        $_1na_seccion3_btnurl = $_POST['1na_seccion3_btnurl'];
    }
    if (isset($_POST['1na_seccion3_img'])) {
        update_option('1na_seccion3_img', $_POST['1na_seccion3_img']);
        $_1na_seccion3_img = $_POST['1na_seccion3_img'];
    }
    if (isset($_POST['1na_seccion3_bgimg'])) {
        update_option('1na_seccion3_bgimg', $_POST['1na_seccion3_bgimg']);
        $_1na_seccion3_bgimg = $_POST['1na_seccion3_bgimg'];
    }

    /*CONTACTO*/
    if (isset($_POST['1na_seccion4_bgimg'])) {
        update_option('1na_seccion4_bgimg', $_POST['1na_seccion4_bgimg']);
        $_1na_seccion4_bgimg = $_POST['1na_seccion4_bgimg'];
    }

    /*FOOTER*/
    if (isset($_POST['1na_footer_text'])) {
        update_option('1na_footer_text', $_POST['1na_footer_text']);
        $_1na_footer_text = $_POST['1na_footer_text'];
    }
    if (isset($_POST['1na_footer_logo'])) {
        update_option('1na_footer_logo', $_POST['1na_footer_logo']);
        $_1na_footer_logo = $_POST['1na_footer_logo'];
    }
    if (isset($_POST['1na_footer_bgimg'])) {
        update_option('1na_footer_bgimg', $_POST['1na_footer_bgimg']);
        $_1na_footer_bgimg = $_POST['1na_footer_bgimg'];
    }
    if (isset($_POST['1na_footer_bgwimg'])) {
        update_option('1na_footer_bgwimg', $_POST['1na_footer_bgwimg']);
        $_1na_footer_bgwimg = $_POST['1na_footer_bgwimg'];
    }



    $_1na_logo = get_option('1na_logo_image');
    $_1na_logowhite = get_option('1na_logowhite_image');
    $_1na_logobig = get_option('1na_logo_big');

    $_1na_seccion1_title_1 = get_option('1na_seccion1_title_1');
    $_1na_seccion1_title_2 = get_option('1na_seccion1_title_2');

    $_1na_seccion2_title_1 = get_option('1na_seccion2_title_1');
    $_1na_seccion2_title_2 = get_option('1na_seccion2_title_2');
    $_1na_seccion2_content = get_option('1na_seccion2_content');
    $_1na_seccion2_footer = get_option('1na_seccion2_footer');

    $_1na_seccion3_title_1 = get_option('1na_seccion3_title_1');
    $_1na_seccion3_title_2 = get_option('1na_seccion3_title_2');
    $_1na_seccion3_text = get_option('1na_seccion3_text');
    $_1na_seccion3_btntext = get_option('1na_seccion3_btntext');
    $_1na_seccion3_btnurl= get_option('1na_seccion3_btnurl');
    $_1na_seccion3_img = get_option('1na_seccion3_img');
    $_1na_seccion3_bgimg= get_option('1na_seccion3_bgimg');

    $_1na_seccion4_bgimg= get_option('1na_seccion4_bgimg');

    $_1na_footer_text= get_option('1na_footer_text');
    $_1na_footer_logo = get_option('1na_footer_logo');
    $_1na_footer_bgimg= get_option('1na_footer_bgimg');
    $_1na_footer_bgwimg= get_option('1na_footer_bgwimg');

    include(locate_template('partials/admin/1na-options.php', false, false ));
}