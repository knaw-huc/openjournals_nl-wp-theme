<?php get_header(); ?>


<div class="ojContent ojsLayoutMidCol">
  <main class="ojMain">

  <?php
  if (have_posts()) :
      while (have_posts()) : the_post();
          ?>
          <h1 class="ojTopLIne"><?php the_title(); ?></h1>
          <?php the_content(); ?>

          <?php
      endwhile;
  else :
  ?>
      <h2>No Posts Found</h2>
      <p>Sorry, there are no posts yet.</p>
  <?php
  endif;
  ?>
  </main>

</div>



  </div>
  <div class="ojColorBar"> </div>
</div>










<?php get_footer(); ?>
