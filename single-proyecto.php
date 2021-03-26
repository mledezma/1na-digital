<?php get_header();?>
<?php
global $footer_bg_img;
$footer_bg_img = '1na_footer_bgwimg';
$back_link = site_url('');
if(wp_get_referer()){
    $back_link = wp_get_referer();
}
$proyecto = pods( 'proyecto', get_the_ID() );
 ?>
<div class="_1na_page_wrapper _1na_single-post _1na_single-project">
    <div class="_1na_post-hero" style="background-image: url('<?php echo get_the_post_thumbnail_url() ?>');">
        <div class="project-order">
            <div class="container">
                <span><?php echo $proyecto->display( 'order' ); ?></span>
            </div>
        </div>
        <div class="_1na_hero-content">
            <div class="container">
                <div class="text-box">
                    <span class="date"><?php echo $proyecto->display( 'url' ); ?></span>
                    <h1><?php the_title(); ?></h1>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 post-content">
                <a href="<?php echo $back_link; ?>" class="_1na_back-link">&lt; VOLVER</a>
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <?php the_content(); ?>
                <?php endwhile; endif; ?>
                <a href="<?php echo $proyecto->display( 'contact_url' );?>">
                    <p class="text-center icon-text">
                        <img src="<?php echo $proyecto->display( 'achievement_icon' ); ?>" alt=""><br>
                        <span>
                            <?php echo $proyecto->display( 'achievement_description' ); ?>
                        </span>
                    </p>
                </a>
            </div>
            <div class="col-lg-12 other-notes">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2 post-content">
                        <h3>OTROS TRABAJOS RECIENTES</h3>
                    </div>
                </div>
                <div class="row">
                    <?php
                    $params = array(
                        'limit' => 4,
                        'orderby' => 'order',
                        'order'   => 'ASC'
                    );
                    $proyectos = pods( 'proyecto' , $params);

                    if ( 0 < $proyectos->total() ) {
                        $max = 3;
                        $i = 0;
                        while ( $proyectos->fetch() ) { ?>
                            <?php  
                                $current = get_the_ID(); 
                                if($current !== $proyectos->row()['ID'] && ($i <= $max)) {
                                    $i++;
                            ?>                            
                                <div class="col-12 col-lg-4">
                                    <div class="_1na_proyecto-link">
                                        <a href="<?php echo $proyectos->display('permalink'); ?>">
                                            <div class='_1na_post _1na_sidebar-item'>
                                                <?php
                                                    $row = $proyectos->row();
                                                ?>
                                                <div class="img-box" style="background-image: url('<?php echo get_the_post_thumbnail_url($row['ID']) ?>');">
                                                    <div class="img-content">
                                                        <h2><?php echo $proyectos->display('title'); ?></h2>
                                                        <span>ver más +</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            <?php } ?>
                        <?php }
                    } ?>
                </div>
            </div>
        </div>
    </div>
 </div>           
<div class="_1na_footer_mask"></div>
<?php get_footer(); ?>
