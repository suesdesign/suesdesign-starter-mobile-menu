<?php
/*
*** Suesdesign Starter Theme 1.0 ***
*   Loop for page
*/
?> 
 
<main id="maincontent" class="column2" role="main">

<?php if ( have_posts () ) : while (have_posts()) : the_post(); ?>

  <article class="page" id="post-<?php the_ID(); ?>">
    <header>
      <h1 class="entry-title">
        <?php the_title(); ?>
      </h1>
    </header>
    <div class="entry">
      <?php the_content() ?>
    </div><!--.entry-->
  </article><!-- finish enclosing post-->  
<?php endwhile; else : ?>

<!-- Stuff to do if there are no pages-->
<h2 class="entry-title">Not found</h2>
<p>Sorry, no pages matched your criteria. Perhaps searching will help</p>
<?php get_search_form(); ?>
   
<?php endif; ?>

</main>