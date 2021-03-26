<?php get_header();?>
<?php
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
                <div class="_1na_filters">
                    <span>Tags</span><br>
                    <?php
                    $tags = get_tags();
                    foreach ( $tags as $tag ) : ?>
                        <?php $tag_link = get_tag_link( $tag->term_id ); ?>
                        <a href='<?=$tag_link?>' title='<?=$tag->name?>' class='<?=$tag->slug?>'><?=$tag->name?></a>
                    <?php endforeach; ?>
                </div>
                <ul class="_1na_post-list">
                    <?php
                    global $post;
                    $args = array( 'posts_per_page' => 50, 'order_by'=> 'publish_date', 'order'=> 'DESC' );
                    $postslist = get_posts( $args );
                    foreach ( $postslist as $post ){
                        setup_postdata( $post );
                        get_template_part( 'partials/post' );
                    }
                    wp_reset_postdata();
                    ?>
                </ul>
            </div>
        </div> 
    </div> 
 </div>           
<div class="_1na_footer_mask"></div>
<?php get_footer(); ?>
