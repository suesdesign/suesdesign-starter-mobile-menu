<?php
/*
*** Suesdesign Starter Theme 1.0 ***
*   sidebar
*/
?>

<div class="column1" id="main_sidebar">
	<aside>
<?php
	if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
	<div id="secondary" class="widget-area" role="complementary">
		<?php dynamic_sidebar( 'sidebar-1' ); ?>
	</div><!-- #secondary -->
<?php endif; ?>
</aside>
</div><!--.column1-->