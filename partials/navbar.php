<?php
$logo_option = "1na_logo_image";
if(!is_front_page())
    $logo_option = "1na_logowhite_image";
?>
<div class="_1na_brand-bar">
    <a href="<?php echo site_url('');?>">
        <img src="<?php echo get_option($logo_option);?>" alt="">
    </a>
    <div class="nav-wrapper">
        <div class="container">
            <div class="_1na_menu-label"></div>
            <button class="menu-toggle">
                <span class="burger">
                    <b class="bar"></b>
                    <b class="bar"></b>
                    <b class="bar"></b>
                </span>
            </button>
            <?php
            $args = array(
                'menu' => 'Main Menu',
                'container' => "nav",
                'menu_class' => "menu",
                'theme_location' => 'main_menu'
            );
            wp_nav_menu( $args );
            ?>
        </div>
    </div>
</div>
