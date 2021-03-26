<?php get_header();?>
<?php
global $footer_bg_img;
$footer_bg_img = '1na_footer_bgwimg';
$mypod = pods( 'page', get_the_ID() );
 ?>
<div class="_1na_page_wrapper">
     <div class="container">
        <div class="row _1na_content row-eq-height">
            <div class="col-12 col-lg-6">
                <div class="_1na_portfolio-img-box  _1na-parallax-box">
                    <img src="<?php echo get_option('1na_seccion3_bgimg');?>" class="spinning-img">
                    <div class="_1na_portfolio-img parallax-item" style="background-image: url('<?php echo get_option('1na_seccion3_img');?>');"></div>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="page-title">
                    <h1>
                        <span><?php echo $mypod->display( 'title_1' ); ?></span>
                        <?php echo $mypod->display( 'title_2' ); ?><br>
                        <span class="sub-content"><?php echo $mypod->display( 'sub_content' ); ?></span>
                    </h1>
                </div>
            </div>
        </div>
        <div class="row _1na_content">
            <div class="col-lg-12">        
                <ul class="_1na_post-list">
                <?php
                    $args = array( 'posts_per_page' => 10, 'order_by'=> 'order', 'order'=> 'DESC' );
                    $proyectos = pods( 'proyecto' , $args);

                    if ( 0 < $proyectos->total() ) {
                        while ( $proyectos->fetch() ) { ?>
                         <?php $link = get_post_permalink( $proyectos->display( 'ID' ) ); ?>
                            <li>                            
                                <a href="<?php echo $link ?>"> 
                                    <div class='_1na_post'>
                                       <div class="row row-eq-height">
                                            <div class="col-lg-4">                                                
                                                <div class="img-box" style="background-image: url('<?php echo get_the_post_thumbnail_url( $proyectos->display( 'ID' ) , $size = 'large' ); ?>');"></div>
                                            </div>
                                            <div class="col-lg-8">
                                                <div class="post-item-content">
                                                    <div class="post-order">
                                                        <span><?php echo $proyectos->display( 'order' ); ?></span>
                                                    </div>
                                                    <div class="post-item-text">
                                                        <h2><?php echo $proyectos->display( 'post_title' ); ?></h2>
                                                        <div class="content">
                                                            <?php echo $proyectos->display( 'url' ); ?>
                                                        </div>  
                                                    </div>
                                                </div>                  
                                            </div>
                                        </div>
                                        <div class="read-more">
                                            Ver +
                                        </div>
                                    </div>
                                </a>
                            </li>
                        <?php }
                    } ?>
                </ul>
            </div>
        </div> 
    </div> 
</div>
<?php get_template_part( 'partials/contact-proyectos' ); ?>
<?php get_footer(); ?>