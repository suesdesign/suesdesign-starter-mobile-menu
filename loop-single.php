<?php
/*
*** Suesdesign Starter Theme 1.0 ***
*   Single post loop
*/
?>

<main id="maincontent" class="column2" role="main">

<?php if ( have_posts () ) : while (have_posts()) : the_post(); ?>
  <article <?php post_class() ?> id="post-<?php the_ID(); ?>">
    <header>
      <h1 class="entry-title">
        <?php the_title(); ?>
      </h1>
      <p class="author">By <?php the_author(); ?></p>
      <time class="date"><?php the_time('F jS, Y') ?></time>
    </header>
    <div class="entry">
      <?php the_content();  ?>
    </div><!--.entry-->
    <?php comments_template( '', true ); ?>
    <footer>
      <p class="postmetadata">
        <?php _e( 'Posted in' ); ?> <?php the_category( ', ' ); ?><br>
        <?php the_tags('Tags: ', ', ', '<br />'); ?>
      </p><!-- .metadata-->
    </footer>
  </article><!-- finish enclosing post-->  

<?php endwhile; else :?>

<!-- Stuff to do if there are no pages-->
<h2 class="entry-title">Not found</h2>
<p>Sorry, no pages matched your criteria. Perhaps searching will help</p>
<?php get_search_form(); ?>
   
<?php endif; ?>

</main>