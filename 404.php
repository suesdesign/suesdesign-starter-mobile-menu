<?php
/*
*** Suesdesign Starter Theme 1.0 ***
*   404 page not found
*/
?>

<?php get_header(); ?>
	<div class="column2" >
		<main id="maincontent">
            
<div class="page" id="post-<?php the_ID(); ?>">
	<h1 class="entry-title">Sorry the page you were looking for cannot be found. Perhaps searching will help.</h1>
		<div class="entry">
			<?php get_search_form(); ?>          
		</div><!--.entry-->
	</div><!-- finish enclosing post-->
	</main>
	</div><!--column2-->
     
<?php 
	get_sidebar();
	get_footer();