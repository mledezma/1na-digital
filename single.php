<?php get_header();?>
<?php
global $footer_bg_img;
$footer_bg_img = '1na_footer_bgwimg';
$back_link = site_url('');
if(wp_get_referer()){
    $back_link = wp_get_referer();
}
 ?>
<div class="_1na_page_wrapper _1na_single-post">
    <div class="_1na_post-hero" style="background-image: url('<?php echo get_the_post_thumbnail_url() ?>');">
        <div class="_1na_hero-content">
            <span class="date">
                <?php echo get_the_time("j ") . translateMonth(get_the_time("n")) . get_the_time(", Y"); ?>
            </span>
            <h1><?php the_title(); ?></h1>
        </div>
    </div>
    <div class="container">
        <a href="<?php echo $back_link; ?>" class="_1na_back-link">&lt; VOLVER</a>
        <div class="row">
            <div class="col-lg-7 post-content">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <?php the_content(); ?>
                <?php endwhile; endif; ?>
            </div>
            <div class="col-lg-5 other-notes">
                <h3>Otras notas</h3>
                <ul>
                    <?php
                    $current_post_id = get_the_ID();
                    global $post;
                    $args = array( 'posts_per_page' => 4, 'orderby' => 'rand' );
                    $rand_posts = get_posts( $args );
                    $count = 0;
                    foreach ( $rand_posts as $post ) :
                        setup_postdata( $post ); ?>
                        <?php
                            if($post->ID != $current_post_id && $count < 3){
                                get_template_part( 'partials/post-sidebar' );
                                $count++;
                            }
                        ?>
                    <?php endforeach;
                    wp_reset_postdata(); ?>
                </ul>
            </div>
        </div>
    </div>
 </div>           
<div class="_1na_footer_mask"></div>
<?php get_footer(); ?>
