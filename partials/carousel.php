<div id="_1na-slider" class="carousel slide _1na-slider _1na-parallax-box" data-ride="carousel">
    <div class="carousel-inner">
        <?php
        $params = array(
            'limit' => 20,
            'orderby' => 'position',
            'order'   => 'ASC',
        );
        $slides = pods( 'slide' , $params);
        $class_active = " active";
        $indicators_counter = 0;
        $indicators_html = "";
        if ( 0 < $slides->total() ) {
            while ( $slides->fetch() ) { ?>

                <div class="carousel-item<?php echo $class_active; ?>">
                    <div class="_1na-slide">
                        <div class="_1na-slide-bg parallax-item" style="background-image: url('<?php echo $slides->display( 'background_image' ); ?>')" data-mvmnt="0.01"></div>
                        <div class="_1na-slide-image parallax-item" style="background-image: url('<?php echo $slides->display( 'main_image' ); ?>')" data-mvmnt="0.02"></div>
                        <div class="_1na-slide-textbox parallax-item" data-mvmnt="0.05">
                            <div class="_1na-slide-text">
                                <h2><?php echo $slides->display( 'post_title' ); ?></h2>
                                <p><?php echo $slides->display( 'post_content' ); ?></p>
                            </div>
                        </div>
                    </div>
                </div>

            <?php
                $indicators_html .= '<li data-target="#_1na-slider" data-slide-to="'.$indicators_counter.'" class="'.$class_active.'">0'.($indicators_counter+1).'</li><br>';
                $class_active = '';
                $indicators_counter++;
            }
        }?>

    </div>
    <ol class="carousel-indicators">
        <?php echo $indicators_html; ?>
    </ol>
</div>