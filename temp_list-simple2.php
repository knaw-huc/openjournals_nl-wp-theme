<?php /* Template Name: List - simple list2 */ ?>
<?php get_header(); ?>


<div class="ojContent ojsLayoutMidCol">
<main class="ojNews">

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
  <?php wp_reset_query(); query_posts( 'post_type=journal&orderby=title&order=ASC' ); ?>
  <?php while ( have_posts() ) : the_post(); ?>
  <li class="itemListSlim" onclick="window.location.href='<?php the_permalink(); ?>'">
    <div class="mCards__thumbnailSmall ttop">
      <?php
      if ( has_post_thumbnail() ) {
        echo get_the_post_thumbnail( $post->ID, 'thumbnail' );
    } else {
      echo '<div class="noThumb">g</div>';
    } ?>
    </div>
  
    <div class="text">
      <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
      <?php echo the_content() ?>
    </div>
  </li>
  <?php endwhile; ?>
</ul>



  </main>

</div>


  </div>
  <div class="ojColorBar"> </div>
</div>










<?php get_footer(); ?>
