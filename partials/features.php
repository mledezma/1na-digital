<section class="_1na_section_1">
    <div class="_1na_section-content-wide">
        <div class="row">
            <?php
            $params = array(
                'limit' => 3,
                'orderby' => 'position',
                'order'   => 'ASC'
            );
            $filosofias = pods( 'filosofia' , $params);

            if ( 0 < $filosofias->total() ) {
                while ( $filosofias->fetch() ) { ?>
                    <div class="col-lg-4">
                        <div class="_1na_feature-item">
                            <div class="img-box">
                                <img src="<?php echo $filosofias->display( 'imagen' ); ?>" alt="">
                            </div>
                            <p><?php echo $filosofias->display( 'post_content' ); ?></p>
                        </div>
                    </div>
                <?php }
            } ?>
        </div>
    </div>
</section>
