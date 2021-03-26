<section class="_1na_section_4">
    <div class="_1na_section-bg"></div>
    <div class="_1na_section-color"></div>
    <div class="_1na_section-content-wide _1na_section-content-centered container">
        <div class="_1na_contact-slider-link" style="background-image: url('<?php echo get_option('1na_seccion4_bgimg');?>');">
            <h2 style="background-image: url('<?php echo get_stylesheet_directory_uri();?>/assets/img/arrow.png');" class="next-controller">
                ¿Quéres iniciar un<br>proyecto con nosotros?
                <small>Completá el siguiente formulario para coordinar una reunión</small>
            </h2>
        </div>
    </div>
</section>
<div class="_1na_contact_slider_mask">
    <div class="close-contact-slider">
        <i class="fa fa-times"></i>
    </div>
    <form id="slide-contact">
        <div class="_1na_contact-slider">
            <div class="_1na_contact-slide slide2 active" data-index="2">
                <div class="slide-box">
                    <div class="row">
                        <div class="col col-sm-5"></div>
                        <div class="col col-sm-7">
                            <div class="error-message"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col col-sm-5">
                            <label for="slide-name">Nombre</label>
                        </div>
                        <div class="col col-sm-7">
                            <input type="text" id="slide-name" name="slide-name" data-format="string">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col col-sm-5">
                            <label for="slide-business">Empresa</label>
                        </div>
                        <div class="col col-sm-7">
                            <input type="text" id="slide-business" name="slide-business" data-format="string">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col col-sm-5">
                            <label for="slide-mail">Correo</label>
                        </div>
                        <div class="col col-sm-7">
                            <input type="text" id="slide-mail" name="slide-mail" data-format="email">
                        </div>
                    </div>
                    <div class="text-right">
                        <span style="background-image: url('<?php echo get_stylesheet_directory_uri();?>/assets/img/arrow.png');" class="next-controller"></span>
                    </div>
                </div>
            </div>
            <div class="_1na_contact-slide slide3" data-index="3" style="display: none;">
                <div class="slide-box">
                    <div class="row">
                        <div class="col col-sm-12">
                            <div class="error-message"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col col-xs-12">
                            <label for="slide-about">Sobre su proyecto</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col col-xs-12">
                            <textarea id="slide-about" name="slide-about" rows="4"  data-format="string"></textarea>
                        </div>
                    </div>
                    <div class="text-right">
                        <span class="next-controller last-controller" style="background-image: url('<?php echo get_stylesheet_directory_uri();?>/assets/img/arrow.png');"></span>
                    </div>
                </div>
            </div>
            <div class="_1na_contact-slide slide4" data-index="4" style="display: none;">
                <div class="error-message">Estamos enviando sus datos... <i class="fa fa-spinner" aria-hidden="true"></i></div>
                <h2 class="success-message">¡Muchas Gracias!</h2>
            </div>
        </div>
    </form>
</div>