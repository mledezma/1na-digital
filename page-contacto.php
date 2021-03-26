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
            <div class="col-lg-12">
                <h1>
                    <span><?php echo $mypod->display( 'title_1' ); ?></span>
                    <?php echo $mypod->display( 'title_2' ); ?>
                </h1>
            </div>
        </div>
        <div class="row _1na_content">
            <div class="col-lg-7">
                <h2>Hablemos</h2>
                <?php echo do_shortcode('[contact-form-7 id="329" title="Contact Page Form"]');?>
            </div>
            <div class="col-lg-5">
                <h2>Tel&eacute;fonos</h2>
                <?php echo $mypod->display( 'post_content' ); ?>
                <div class="text-center featured-img">
                    <?php echo $featured_image; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="_1na_subcontent"></div>
<div class="_1na_footer_mask"></div>


<?php
get_footer(); ?>