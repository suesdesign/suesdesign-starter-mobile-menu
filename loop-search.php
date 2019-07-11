<?php
/*
*** Suesdesign Starter Theme 1.0 ***
*   Search loop
*/
?>

<?php
global $wp_query;
$total_results = $wp_query->found_posts;
?>

<main id="maincontent" class="column2" role="main">
<h1 class="entry-title"><?php printf( __( 'Search results for: %s', 'chapeltowndt' ), get_search_query() ); ?></h1>

<p><?php printf('Total results = ' . $total_results, 'chapeltown_dt'); ?></p>

<?php if ( have_posts () ) : ?>
	<?php if ( ($wp_query->post_count) > 1 ) : ?>
		<?php while (have_posts()) : the_post(); ?>
			<article <?php post_class() ?> id="post-<?php the_ID(); ?>" role="article">
				<header>
					<h2 class="entry-title">
						<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>">
						<?php the_title(); ?></a>
					</h2>
					<time class="date"><?php the_time('F jS, Y') ?></time>
				</header>
				<div class="entry">
				<?php
					if ( has_post_thumbnail() ) {
					the_post_thumbnail('medium');
					} ?>
				<?php the_excerpt();  ?>
				</div><!--.entry-->
				<footer>
					<p class="postmetadata">
						<?php _e( 'Posted in' ); ?> <?php the_category( ', ' ); ?><br>
						<?php the_tags('Tags: ', ', ', '<br />'); ?>
					</p><!-- .metadata-->
				</footer>
			</article><!-- finish enclosing post-->  
		<?php endwhile; ?>

	<?php else : ?>

		<?php while (have_posts()) : the_post(); ?>
		<!-- Do your post header stuff here for single post-->
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>" role="article">
			<header>
				<h2 class="entry-title">
					<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>">
					<?php the_title(); ?></a>
				</h2>
				<time class="date"><?php the_time('F jS, Y') ?></time>
			</header>
			<div class="entry">
				<?php the_content() ?>
			</div><!--.entry-->
			<footer>
			<p class="postmetadata">
				<?php _e( 'Posted in' ); ?> <?php the_category( ', ' ); ?><br>
				<?php the_tags('Tags: ', ', ', '<br />'); ?>
				</p><!-- .metadata-->
			</footer>
     
			</article>  <!-- finish enclosing post-->
			<?php endwhile; endif; ?>

<?php else : ?>
		<!-- Stuff to do if there are no posts-->
		<h2 class="entry-title">Not found</h2>
		<p>Sorry, no posts matched your criteria. Perhaps searching will help</p>
		<?php get_search_form(); ?>
<?php endif; ?>

<!--bottom navigation to older and newer posts if there is more than one page of posts-->
<div class="page-navigation">
	<?php
	/*
	** pagination
	*/
	global $wp_query;

	$big = 999999999; // need an unlikely integer

	echo paginate_links( array(
		'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
		'format' => '?paged=%#%',
		'current' => max( 1, get_query_var('paged') ),
		'total' => $wp_query->max_num_pages
	) );
	?>        
</div><!--.navigation-->

</main>