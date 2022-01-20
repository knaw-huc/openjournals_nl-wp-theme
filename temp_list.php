<?php /* Template Name: List */ ?>
<?php get_header(); ?>



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

<ul class="itemsList">
  <?php wp_reset_query(); query_posts( 'post_type=post' ); ?>
  <?php while ( have_posts() ) : the_post(); ?>
    <?php get_template_part( 'template-parts/content', 'list-news-item' ); ?>
  <?php endwhile; ?>
</ul>



  </main>



  </div>
  <div class="ojColorBar"> </div>
</div>










<?php get_footer(); ?>
