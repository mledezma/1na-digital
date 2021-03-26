<li>
    <a href="<?php the_permalink(); ?>">
        <div class='_1na_post _1na_sidebar-item'>
            <div class="img-box" style="background-image: url('<?php echo get_the_post_thumbnail_url() ?>');">
                <div class="img-content">
                     <span class="date">
                    <?php echo get_the_time("j ") . translateMonth(get_the_time("n")) . get_the_time(", Y"); ?>
                </span>
                    <h2><?php the_title(); ?></h2>
                </div>
             </div>
        </div>
    </a>
</li>