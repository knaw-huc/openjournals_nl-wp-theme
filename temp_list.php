<?php /* Template Name: Cards */ ?>
<?php get_header(); ?>



<main class="ojWide">
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

    <div class="ojCards">
              <?php query_posts( 'post_type=journal' ); ?>
            <?php while ( have_posts() ) : the_post(); ?>





      <div class="incCard">
        <?php
        if ( has_post_thumbnail() ) {
          echo get_the_post_thumbnail( $post_id, 'medium' );
      }  ?>
        <a href="<?php echo get_post_meta($post->ID, 'journal_url', true); ?>"><?php the_title(); ?></a>
      </div>

      <?php endwhile; ?>


  </div>


</main>




  </div>
  <div class="ojColorBar"> </div>
</div>










<?php get_footer(); ?>
