		
<div class="span-24">
    <div id="footer">Copyright &copy; <a href="<?php bloginfo('home'); ?>"><strong><?php bloginfo('name'); ?></strong></a>  - <?php bloginfo('description'); ?></div>
        <div id="footer2">Powered by <a href="http://wordpress.org/"><strong>WordPress</strong></a></div>
	</div>
</div>
</div>
<?php
	 wp_footer();
	echo get_theme_option("footer")  . "\n";
?>
</body>
</html>