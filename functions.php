<?php

function requireAll($dir) {
    // require all php files
    $scan = glob("$dir/*");
    foreach ($scan as $path) {
        if (preg_match('/\.php$/', $path)) {
            require_once $path;
        }
        elseif (is_dir($path)) {
            requireAll($path);
        }
    }
}
requireAll(get_stylesheet_directory() . '/functions/');

function add_assets() {

    wp_enqueue_style( 'bootstrapcss', get_template_directory_uri() . '/assets/lib/bootstrap/bootstrap.min.css' );
    wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'mobile', get_template_directory_uri() . '/assets/css/mobile.css' );
    wp_enqueue_style( 'fontAwesome', get_template_directory_uri() . '/assets/lib/fontAwesome/css/font-awesome.min.css' );
    wp_enqueue_style( 'fonts1', get_template_directory_uri() . '/assets/fonts/fonts1/stylesheet.css' );
    wp_enqueue_style( 'fonts2', get_template_directory_uri() . '/assets/fonts/fonts2/stylesheet.css' );
    wp_enqueue_style( 'fonts3', get_template_directory_uri() . '/assets/fonts/fonts3/stylesheet.css' );
    wp_enqueue_style( 'fonts4', "https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i&amp;subset=latin-ext" );

    if(!is_admin()){
        wp_deregister_script('jquery');
        wp_register_script('jquery', get_template_directory_uri() . '/assets/lib/jQuery/jquery-3.2.1.min.js', null, false, true);
        wp_enqueue_script('jquery');
    }

    wp_register_script('popper', get_template_directory_uri() . '/assets/lib/jQuery/popper.min.js', null, false, true);
    wp_enqueue_script('popper');

    wp_register_script('bootstrapjs', get_template_directory_uri() . '/assets/lib/bootstrap/bootstrap.min.js', null, false, true);
    wp_enqueue_script('bootstrapjs');

    wp_register_script('greensock', get_template_directory_uri() . '/assets/lib/greensock/TweenMax.min.js', null, false, true);
    wp_enqueue_script('greensock');

    wp_register_script('theme-js', get_template_directory_uri() . '/assets/js/app.js', array(), false, true);
    wp_enqueue_script('theme-js');

    wp_localize_script( 'theme-js', 'configData', array( 'ajaxMailURL' => admin_url( 'admin-ajax.php' ).'?action=1namail') );
}

add_action("wp_enqueue_scripts", "add_assets");

function na_menus(){
	register_nav_menus(array(
		'main_menu' => __('Main Menu','1naDigital'),
		'social_menu' => __('Social Menu','1naDigital')
	));
}

add_action("init","na_menus");

add_theme_support( 'post-thumbnails' );

// Replaces the excerpt "Read More" text by a link
function new_excerpt_more($more) {
    global $post;
    return '<a class="moretag" href="'. get_permalink($post->ID) . '"> Leer +</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');

function translateMonth($number){
    $meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
    return $meses[$number-1];
}

add_image_size( 'large', 600, 9999, false );

/**
 * Remove unnecesary head meta from wordpress
 */
function remove_unnecesary_html() {
    remove_action('wp_head', 'wp_resource_hints', 2);
    remove_action('wp_head', 'print_emoji_detection_script', 7);
    remove_action('wp_print_styles', 'print_emoji_styles');
    remove_action('wp_head', 'rsd_link');
    remove_action('wp_head', 'wlwmanifest_link');
    remove_action('wp_head', 'wp_generator');
    //These two lines are necesary if you installed the REST API
    remove_action('wp_head', 'rest_output_link_wp_head', 10);
    remove_action('wp_head', 'wp_oembed_add_discovery_links', 10);
}
add_action('after_setup_theme', 'remove_unnecesary_html');

add_action( 'wp_ajax_1namail', 'wpse_sendmail' );
add_action( 'wp_ajax_nopriv_1namail', 'wpse_sendmail' );

function wpse_sendmail()
{
    $email = $_POST['slide-mail'];
    $name = $_POST['slide-name'];
    $business = $_POST['slide-business'];
    $message = $_POST['slide-about'];

    $to = array(
        'haceloweb@gmail.com',
        'randall@1nadigital.com',
        'carlos@1nadigital.com',
        'hola@1nadigital.com'
    );
    $subject = 'Nuevo Contacto - 1na WEB';
    $body = "
        Has recibido un nuevo contacto:<br><br>

        Correo: ".$email."<br>
        Nombre: ".$name."<br>
        Empresa: ".$business."<br>
        Proyecto: ".$message."<br>
    ";
    $headers = array('Content-Type: text/html; charset=UTF-8','From: My Site Name &lt;noreply@1nadigital.com');

    if(wp_mail($to, $subject, $body, $headers)){
        echo "success";
    }
    else{
        echo "error";
    }

    die();
}

add_action( 'wp_footer', 'contact_wp_footer' );
 
function contact_wp_footer() {
?>
<script type="text/javascript">
document.addEventListener( 'wpcf7mailsent', function( event ) {
    document.getElementById('fields-box').style.display = 'none';
}, false );
</script>
<?php
}

function wpse_sendmailContactPage()
{

    $name    = sanitize_text_field( $_POST["cf-name"] );
    $company    = sanitize_text_field( $_POST["cf-company"] );
    $email   = sanitize_email( $_POST["cf-email"] );
    $project = esc_textarea( $_POST["cf-project"] );

    $to = array(
        'dalfaro@briffkase.com',
        'randall@1nadigital.com',
        'carlos@1nadigital.com',
        'hola@1nadigital.com'
    );

    $subject = 'Nuevo Contacto - 1na WEB';
    $body = "
        Has recibido un nuevo contacto:<br><br>

        Correo: ".$email."<br>
        Nombre: ".$name."<br>
        Empresa: ".$company."<br>
        Proyecto: ".$project."<br>
    ";
    $headers = array('Content-Type: text/html; charset=UTF-8','From: My Site Name &lt;noreply@1nadigital.com');
    die;
}

add_filter('wpcf7_form_action_url', 'remove_unit_tag');

function remove_unit_tag($url){
    $remove_unit_tag = explode('#',$url);
    $new_url = $remove_unit_tag[0];
    return $new_url;
}
