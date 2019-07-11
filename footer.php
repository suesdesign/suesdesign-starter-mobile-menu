<?php
/*
*** Suesdesign Starter Theme 1.0 ***
*   Footer
*/
?>

</div><!--.container-->
<footer id="footer" role="contentinfo">
	<div class="container">
	<?php get_sidebar('footer'); ?>
		<div class="footer-info">
			<p class="copyright">&copy; Copyright <?php echo date('Y'); ?> <?php bloginfo('name'); ?></p>
			<p class="credit">Website design by <a href="http://www.suesdesign.co.uk/" target="_blank">Sue Johnson</a></p>
		</div><!--.footer-info-->
	</div><!--.container-->
</footer>
</div><!--.outer-wrapper-->
<?php wp_footer(); ?>
</body>
</html>