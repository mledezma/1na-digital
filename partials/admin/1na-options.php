<h1>1na Digital theme options</h1>

<form method="post">

    <h2>General</h2>
    <p>En esta sección se editan elementos globales del sitio</p>

    <table class="form-table">
        <tbody>
        <tr>
            <th scope="row">
                <label for="header_full_image">1na Digital Logo</label>
            </th>
            <td>
                <div class='image-preview-wrapper'>
                    <img id='1na-logo-preview' src='<?= $_1na_logo; ?>' style='width: 100px;'>
                </div>
                <input id="insert-1na-logo-image" type="button" class="button" value="<?php _e( 'Upload image' ); ?>" />
                <input type='hidden' name='1na_logo_image' id='1na_logo_image' value='<?= $_1na_logo; ?>'>
            </td>
        </tr>
        <tr>
            <th scope="row">
                <label for="header_full_image">1na Digital Logo</label>
            </th>
            <td>
                <div class='image-preview-wrapper'>
                    <img id='1na-logowhite-preview' src='<?= $_1na_logowhite; ?>' style='width: 100px;'>
                </div>
                <input id="insert-1na-logowhite-image" type="button" class="button" value="<?php _e( 'Upload image' ); ?>" />
                <input type='hidden' name='1na_logowhite_image' id='1na_logowhite_image' value='<?= $_1na_logowhite; ?>'>
            </td>
        </tr>
        <tr>
            <th scope="row">
                <label for="header_full_image">1na Digital Logo Grande</label>
            </th>
            <td>
                <div class='image-preview-wrapper'>
                    <img id='1na-logobig-preview' src='<?= $_1na_logobig; ?>' style='width: 100px;'>
                </div>
                <input id="insert-1na-logobig-image" type="button" class="button" value="<?php _e( 'Upload image' ); ?>" />
                <input type='hidden' name='1na_logo_big' id='1na_logo_big' value='<?= $_1na_logobig; ?>'>
            </td>
        </tr>
        </tbody>
    </table>

    <h2>Homepage</h2>
    <p>En esta sección se editan algunos de los contenidos del homepage</p>

    <table class="form-table">
        <tbody>
        <tr>
            <th scope="row">
                <label for="1na_seccion1_title_1">Filosofía Sección (Titulo color 1)</label>
            </th>
            <td>
                <input name='1na_seccion1_title_1' id='1na_seccion1_title_1' value='<?= $_1na_seccion1_title_1; ?>'>
            </td>
        </tr>
        <tr>
            <th scope="row">
                <label for="1na_seccion1_title_2">Filosofía Sección (Titulo color 2)</label>
            </th>
            <td>
                <input name='1na_seccion1_title_2' id='1na_seccion1_title_2' value='<?= $_1na_seccion1_title_2; ?>'>
            </td>
        </tr>
        <tr>
            <th scope="row">
                <label for="1na_seccion2_title_1">Servicios Sección (Titulo color 1)</label>
            </th>
            <td>
                <input name='1na_seccion2_title_1' id='1na_seccion2_title_1' value='<?= $_1na_seccion2_title_1; ?>'>
            </td>
        </tr>
        <tr>
            <th scope="row">
                <label for="1na_seccion2_title_2">Servicios Sección (Titulo color 2)</label>
            </th>
            <td>
                <input name='1na_seccion2_title_2' id='1na_seccion2_title_2' value='<?= $_1na_seccion2_title_2; ?>'>
            </td>
        </tr>
        <tr>
            <th scope="row">
                <label for="1na_seccion2_content">Servicios Sección (Texto del párrafo)</label>
            </th>
            <td>
                <textarea name='1na_seccion2_content' id='1na_seccion2_content'  rows="4" cols="50"><?= $_1na_seccion2_content; ?></textarea>
            </td>
        </tr>
        <tr>
            <th scope="row">
                <label for="1na_seccion2_footer">Servicios Sección (Texto inferior)</label>
            </th>
            <td>
                <textarea name='1na_seccion2_footer' id='1na_seccion2_footer'  rows="4" cols="50"><?= $_1na_seccion2_footer; ?></textarea>
            </td>
        </tr>
        </tbody>
    </table>

    <h2>Portafolio</h2>
    <p>En esta sección se edita el contenido de la sección del portafolio</p>

    <table class="form-table">
        <tbody>
        <tr>
            <th scope="row">
                <label for="1na_seccion3_title_1">Portafolio Sección (Titulo color 1)</label>
            </th>
            <td>
                <input name='1na_seccion3_title_1' id='1na_seccion3_title_1' value='<?= $_1na_seccion3_title_1; ?>'>
            </td>
        </tr>
        <tr>
            <th scope="row">
                <label for="1na_seccion3_title_2">Portafolio Sección (Titulo color 2)</label>
            </th>
            <td>
                <input name='1na_seccion3_title_2' id='1na_seccion3_title_2' value='<?= $_1na_seccion3_title_2; ?>'>
            </td>
        </tr>
        <tr>
            <th scope="row">
                <label for="1na_seccion3_text">Portafolio Sección (Texto del párrafo)</label>
            </th>
            <td>
                <textarea name='1na_seccion3_text' id='1na_seccion3_text'  rows="4" cols="50"><?= $_1na_seccion3_text; ?></textarea>
            </td>
        </tr>
        <tr>
            <th scope="row">
                <label for="1na_seccion3_btntext">Portafolio CTA texto</label>
            </th>
            <td>
                <input name='1na_seccion3_btntext' id='1na_seccion3_btntext' value='<?= $_1na_seccion3_btntext; ?>'>
            </td>
        </tr>
        <tr>
            <th scope="row">
                <label for="1na_seccion3_btnurl">Portafolio CTA target</label>
            </th>
            <td>
                <input name='1na_seccion3_btnurl' id='1na_seccion3_btnurl' value='<?= $_1na_seccion3_btnurl; ?>'>
            </td>
        </tr>
        <tr>
            <th scope="row">
                <label for="header_full_image">Portafolio main image</label>
            </th>
            <td>
                <div class='image-preview-wrapper'>
                    <img id='1na-project-img-preview' src='<?= $_1na_seccion3_img; ?>' style='width: 100px;'>
                </div>
                <input id="insert-1na-projects-image" type="button" class="button" value="<?php _e( 'Upload image' ); ?>" />
                <input type='hidden' name='1na_seccion3_img' id='1na_seccion3_img' value='<?= $_1na_seccion3_img; ?>'>
            </td>
        </tr>
        <tr>
            <th scope="row">
                <label for="header_full_image">Portafolio background image</label>
            </th>
            <td>
                <div class='image-preview-wrapper'>
                    <img id='1na-project-bgimg-preview' src='<?= $_1na_seccion3_bgimg; ?>' style='width: 100px;'>
                </div>
                <input id="insert-1na-projects-bgimage" type="button" class="button" value="<?php _e( 'Upload image' ); ?>" />
                <input type='hidden' name='1na_seccion3_bgimg' id='1na_seccion3_bgimg' value='<?= $_1na_seccion3_bgimg; ?>'>
            </td>
        </tr>
        </tbody>
    </table>

    <h2>Contacto Home</h2>
    <p>En esta sección se editan elementos de la sección de contacto en el home</p>

    <table class="form-table">
        <tbody>
        <tr>
            <th scope="row">
                <label for="header_full_image">Contacto Home background</label>
            </th>
            <td>
                <div class='image-preview-wrapper'>
                    <img id='1na-contact-bgimg-preview' src='<?= $_1na_seccion4_bgimg; ?>' style='width: 100px;'>
                </div>
                <input id="insert-1na-contact-bgimage" type="button" class="button" value="<?php _e( 'Upload image' ); ?>" />
                <input type='hidden' name='1na_seccion4_bgimg' id='1na_seccion4_bgimg' value='<?= $_1na_seccion4_bgimg; ?>'>
            </td>
        </tr>
        </tbody>
    </table>

    <h2>Footer</h2>
    <p>En esta sección se editan elementos del footere</p>

    <table class="form-table">
        <tbody>
        <tr>
            <th scope="row">
                <label for="1na_footer_text">Copyright</label>
            </th>
            <td>
                <input name='1na_footer_text' id='1na_footer_text' value='<?= $_1na_footer_text; ?>'>
            </td>
        </tr>
        <tr>
            <th scope="row">
                <label for="header_full_image">Footer logo image</label>
            </th>
            <td>
                <div class='image-preview-wrapper'>
                    <img id='1na-footer-logo-preview' src='<?= $_1na_footer_logo; ?>' style='width: 100px;'>
                </div>
                <input id="insert-1na-footer-logo" type="button" class="button" value="<?php _e( 'Upload image' ); ?>" />
                <input type='hidden' name='1na_footer_logo' id='1na_footer_logo' value='<?= $_1na_footer_logo; ?>'>
            </td>
        </tr>
        <tr>
            <th scope="row">
                <label for="header_full_image">Footer background image</label>
            </th>
            <td>
                <div class='image-preview-wrapper'>
                    <img id='1na-footer-bgimg-preview' src='<?= $_1na_footer_bgimg; ?>' style='width: 100px;'>
                </div>
                <input id="insert-1na-footer-bgimage" type="button" class="button" value="<?php _e( 'Upload image' ); ?>" />
                <input type='hidden' name='1na_footer_bgimg' id='1na_footer_bgimg' value='<?= $_1na_footer_bgimg; ?>'>
            </td>
        </tr>
        <tr>
            <th scope="row">
                <label for="header_full_image">Footer background white image</label>
            </th>
            <td>
                <div class='image-preview-wrapper'>
                    <img id='1na-footer-bgwimg-preview' src='<?= $_1na_footer_bgwimg; ?>' style='width: 100px;'>
                </div>
                <input id="insert-1na-footer-bgwimage" type="button" class="button" value="<?php _e( 'Upload image' ); ?>" />
                <input type='hidden' name='1na_footer_bgwimg' id='1na_footer_bgwimg' value='<?= $_1na_footer_bgwimg; ?>'>
            </td>
        </tr>
        </tbody>
    </table>

    <p class="submit"><input type="submit" value="Save Changes" class="button-primary" name="Submit"></p>
</form>