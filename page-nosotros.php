<?php get_header();?>
<?php
$featured_image = get_the_post_thumbnail();
global $footer_bg_img;
$footer_bg_img = '1na_footer_bgwimg';
$mypod = pods( 'page', get_the_ID() );
 ?>
<div class="_1na_page_wrapper">
    <div class="container">
        <div class="row _1na_content">
            <div class="col-lg-6 hide-on-mobile">
                <?php echo $featured_image; ?>
            </div>
            <div class="col-lg-6">
                <h1>
                    <span><?php echo $mypod->display( 'title_1' ); ?></span>
                    <?php echo $mypod->display( 'title_2' ); ?>
                </h1>
            </div>
        </div>
        <?php get_template_part( 'partials/features' ); ?>
        <div class="_1na_subcontent">
            <?php echo $mypod->display( 'sub_content' ); ?>
        </div>
    </div>
</div>
<?php get_template_part( 'partials/contact-nosotros' ); ?>
<div class="_1na_footer_mask"></div>
<?php get_footer(); ?>