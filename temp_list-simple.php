<?php /* Template Name: List - simple list */ ?>
<?php get_header(); ?>


<div class="ojContent ojWide">
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


<div class="facetLayout">
  <div class="facets">
    <strong>Language</strong>
    <div class="facetItems">
      <button>Dutch</button>
      <button>English</button>
      <button>France</button>
      <button>Italian</button>
    </div>

    <strong>Category</strong>
    <div class="facetItems">
      <button>Education</button>
      <button>Language</button>
      <button>Health</button>
    </div>

    <strong>Order</strong>
    <div class="facetItems">
      <button>A-Z</button>
      <button>Publication</button>
    </div>

  </div>
  <ul class="itemsList">
  <?php wp_reset_query(); query_posts( 'post_type=journal&orderby=title&order=ASC' ); ?>
  <?php while ( have_posts() ) : the_post(); ?>
  <?php
  // global $more;
  // $more = 0;
  ?>
  <li class="itemListSlim">
    <div class="medThumb ttop">
    <a href="<?php echo get_post_meta($post->ID, 'journal_url', true); ?>">
      <?php
      if ( has_post_thumbnail() ) {
        echo get_the_post_thumbnail( $post->ID, array( 200, 300) );
    } else {
      echo '<div class="noThumb"></div>';
    } ?>
    </a>
    </div>
  
    <div class="text">
      <a href="<?php echo get_post_meta($post->ID, 'journal_url', true); ?>" target="_blank"><h3><?php the_title(); ?></h3>
      </a>
      <?php
      $content = get_post_field( 'post_content', get_the_ID() );
      $content_parts = get_extended( $content );
      ?>
      <div class="mainTxt">
      <?php echo $content_parts['main']; ?>
      </div>

      <div class="">
        <?php
        if ($content_parts['extended'] != '') { ?>
          <button class="bReadmore" id="<?php echo 'b'.$post->ID;?>" onclick="readMore('<?php echo $post->ID;?>')">Read more</button>
          <div class="hidden" id="<?php echo 'r'.$post->ID;?>">
            <?php echo $content_parts['extended'];?>
          </div>
        <?php } ?>
      </div>

      <div class="mb1">
        <a class="linkColor top1r" href="<?php echo get_post_meta($post->ID, 'journal_url', true); ?>">See the journal</a>
      </div>
      
      
      
    </div>
  </li>
  <?php endwhile; ?>
</ul>
</div>

<ul class="itemsList">
  <?php wp_reset_query(); query_posts( 'post_type=journal&orderby=title&order=ASC' ); ?>
  <?php while ( have_posts() ) : the_post(); ?>
  <?php
  // global $more;
  // $more = 0;
  ?>
  <li class="itemListSlim">
    <div class="medThumb ttop">
    <a href="<?php echo get_post_meta($post->ID, 'journal_url', true); ?>">
      <?php
      if ( has_post_thumbnail() ) {
        echo get_the_post_thumbnail( $post->ID, array( 200, 300) );
    } else {
      echo '<div class="noThumb"></div>';
    } ?>
    </a>
    </div>
  
    <div class="text">
      <a href="<?php echo get_post_meta($post->ID, 'journal_url', true); ?>" target="_blank"><h3><?php the_title(); ?></h3>
      </a>
      <?php
      $content = get_post_field( 'post_content', get_the_ID() );
      $content_parts = get_extended( $content );
      ?>
      <div class="mainTxt">
      <?php echo $content_parts['main']; ?>
      </div>

      <div class="">
        <?php
        if ($content_parts['extended'] != '') { ?>
          <button class="bReadmore" id="<?php echo 'b'.$post->ID;?>" onclick="readMore('<?php echo $post->ID;?>')">Read more</button>
          <div class="hidden" id="<?php echo 'r'.$post->ID;?>">
            <?php echo $content_parts['extended'];?>
          </div>
        <?php } ?>
      </div>

      <div class="mb1">
        <a class="linkColor top1r" href="<?php echo get_post_meta($post->ID, 'journal_url', true); ?>">See the journal</a>
      </div>
      
      
      
    </div>
  </li>
  <?php endwhile; ?>
</ul>



  </main>

</div>


  </div>
  <div class="ojColorBar"> </div>
</div>


<script src="<?php bloginfo('template_url'); ?>/js/list.js"></script>







<?php get_footer(); ?>
