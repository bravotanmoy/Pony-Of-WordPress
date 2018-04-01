<!--------------Footer--------------->
<footer>
    <div class="wrap-footer zerogrid">
        <div class="row block09">

            <?php dynamic_sidebar('footer-widget '); ?>

        </div>

        <div class="row copyright">
            <p>Copyright © 2013 - <a href="http://www.zerotheme.com/432/free-responsive-html5-css3-website-templates.html" target="_blank">Free Html5 Templates</a> by <a href="http://www.zerotheme.com" target="_blank">Zerotheme.com</a></p>
        </div>
    </div>
</footer>

<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/css3-mediaqueries.js"></script>
<![endif]-->

<link href='<?php echo get_template_directory_uri(); ?>/./images/favicon.ico' rel='icon' type='image/x-icon'/>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/responsiveslides.js"></script>
<script>

(function($){

    $(function() {
        $("#slider").responsiveSlides({
            auto: true,
            pager: false,
            nav: true,
            speed: 500,
            maxwidth: 962,
            namespace: "centered-btns"
        });
    });
})(jQuery);

</script>
<?php wp_footer(); ?>
</body>
</html>