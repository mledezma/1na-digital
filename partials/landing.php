<?php
    $mypod = pods( 'landing', get_the_ID() );
    $img_desktop = $mypod->field( 'left_img_lg' , true );
    $img_icon = $mypod->field( 'right_img_extra' , true );
    $shortcode_form = $mypod->field( 'right_shortcode' , true );
    $img_mobile = $mypod->field( 'left_img_sm' , true );
?>
<section class="_1na_section_1">
    <div class="_1na_section-bg"></div>
    <div class="_1na_section-color"></div>
    <div class="_1na_section-content-wide">
        <div class="row _1na_content landing-content flex-column-reverse flex-lg-row">

            <div class="col-sm-12 col-lg-6 col-lg-push-6">
                <h2>
                    <?php echo $mypod->display( 'left_title' ); ?>
                </h2>
                <?php echo $mypod->display( 'left_content' ); ?>
                <p>
                    <img src="<?php echo $img_mobile["guid"]; ?>" class="mobile-only">
                    <img src="<?php echo $img_desktop["guid"];v ?>" class="desktop-only">
                </p>
            </div>

            <div class="col-sm-12 col-lg-6 col-lg-push-6 column-right">
                <h1>
                    <?php echo $mypod->display( 'right_title_main' ); ?>
                </h1>
                <img src="<?php echo $img_icon["guid"]; ?>" class="extra-icon">
                <h3>
                    <?php echo $mypod->display( 'right_subtitle' ); ?>
                </h3>                
                <?php echo $mypod->display( 'right_content' ); ?>
                <?php echo do_shortcode('['.$shortcode_form.']');?>
            </div>
            
        </div>
    </div>
</section>