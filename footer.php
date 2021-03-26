	<footer>
	    <?php
        global $footer_bg_img;
        if (empty($footer_bg_img)) {
            $footer_bg_img = '1na_footer_bgimg';
        }
        ?>
	    <div class="_1na_footer" style="background-image: url('<?php echo get_option($footer_bg_img); ?>');">
	        <img style="max-width:114px" src="<?php echo get_option('1na_footer_logo'); ?>" alt="" class="_1na_logo-footer">
	        <p><?php echo get_option('1na_footer_text'); ?></p>
	        <div class="social-icons">
	            <a href="https://www.facebook.com/1naDigital/">
	                <i class="fa fa-facebook-f"></i>
	            </a>
	            <a href="https://twitter.com/1naDigital/">
	                <i class="fa fa-twitter"></i>
	            </a>
	            <a href="http://instagram.com/1naDigital/">
	                <i class="fa fa-instagram"></i>
	            </a>
	            <a href="https://www.linkedin.com/company/1nadigital/">
	                <i class="fa fa-linkedin" aria-hidden="true"></i>
	            </a>
	        </div>
	    </div>
	    <?php wp_footer(); ?>
	</footer>
	</body>

	</html>