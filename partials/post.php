<li>
    <a href="<?php the_permalink(); ?>">
        <div class='_1na_post'>
            <div class="row">
                <div class="col-lg-6">
                    <?php
                        $thumb_id = get_post_thumbnail_id( $post->ID );
                        $src_array = wp_get_attachment_image_src($thumb_id, 'large');
                    ?>
                    <div class="img-box" style="background-image: url('<?php echo $src_array[0]; ?>');"></div>
                </div>
                <div class="col-lg-6">
                    <span class="date">
                        <?php echo get_the_time("j ") . translateMonth(get_the_time("n")) . get_the_time(", Y"); ?>
                    </span>
                    <h2><?php the_title(); ?></h2>
                    <div class="content">
                        <?php the_excerpt(); ?>
                    </div>
                </div>
            </div>
            <div class="read-more">
                Leer +
            </div>
        </div>
    </a>
</li>

