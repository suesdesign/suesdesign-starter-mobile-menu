<?php
/*
*** Suesdesign Starter Theme ***
*   The sidebar containing the footer widget areas.
*/
?>


<div id="footerwidgets" role="complementary">
<?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
	<div class="column1">
		<?php dynamic_sidebar( 'footer-1' ); ?>
	</div><!-- .first -->
<?php endif; ?>
<?php if ( is_active_sidebar( 'footer-2' ) ) : ?>
	<div class="column1">
		<?php dynamic_sidebar( 'footer-2' ); ?>
	</div><!-- .second -->
<?php endif; ?>
<?php if ( is_active_sidebar( 'footer-3' ) ) : ?>
	<div class="column1">
		<?php dynamic_sidebar( 'footer-3' ); ?>
	</div><!-- .third -->
<?php endif; ?>
</div><!--#footerwidgets -->