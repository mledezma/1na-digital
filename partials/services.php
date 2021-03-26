<section class="_1na_section_2">
    <div class="_1na_section-bg"></div>
    <div class="_1na_section-color"></div>
    <div class="_1na_section-content-wide _1na_section-content-centered container">
        <h2><span><?php echo get_option('1na_seccion2_title_1');?></span><br><?php echo get_option('1na_seccion2_title_2');?></h2>
        <div class="row">
            <?php
            $params = array(
                'limit' => 3,
                'orderby' => 'position',
                'order'   => 'ASC'
            );
            $servicios = pods( 'servicio' , $params);

            if ( 0 < $servicios->total() ) {
                while ( $servicios->fetch() ) { ?>
                    <div class="col-lg-4">
                        <div class="_1na_service-item">
                            <div class="img-box">
                                <img src="<?php echo $servicios->display( 'imagen' ); ?>" alt="">
                            </div>
                            <h3><?php echo $servicios->display( 'post_title' ); ?></h3>
                            <p><?php echo $servicios->display( 'post_content' ); ?></p>
                        </div>
                    </div>
                <?php }
            } ?>
        </div>
        <p class="bottom-text text-center">
            <a href="/nosotros/" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">
                Conocé más aquí
            </a>
        </p>
    </div>
</section>