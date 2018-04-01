 <div id="footer">
        <a href="http://www.aszx.net">web development</a> by <a href="http://www.bryantsmith.com">bryant smith</a>
        <div id="bar">
            <?php
                wp_nav_menu(array(
                    'theme_location' => 'footer-menu'
                ));
            ?>
        </div>
    </div>
<?php wp_footer(); ?>        
</body>
</html>
