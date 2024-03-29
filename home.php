<?php get_header(); ?>

<main class="ojHeroText">
  <span>
    <?php
    $homeQuery = 'pagename=homepage&post_type=page';
    if (get_bloginfo('language') != 'en-GB') {
      $homeQuery = 'pagename=homepage&post_type=page';
    } elseif (get_bloginfo('language') != 'nl-NL') {
      $homeQuery = 'pagename=homepage_nl&post_type=page';
    }
    query_posts( $homeQuery );
    ?>
    <?php while ( have_posts() ) : the_post(); ?>
      <?php the_content(); ?>
    <?php endwhile; ?>
  </span>

  <div class="ojJoin">
  <h2><?php transl( 'Newsletter', 'Nieuwsbrief') ?></h2>
      <?php wp_reset_query(); query_posts( 'pagename=newsletter_subscribtion&post_type=page' ); ?>
      <?php while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>
      <?php endwhile; ?>
  </div>

</main>

<div class="ojContentHome ojsLayout3Col">

  <section class="ojNews topLine">
    <h2><?php transl( 'News', 'Nieuws'); ?></h2>
    <ul class="itemsList">


      <?php query_posts( 'post_type=post&category_name=featured,featured_nl&posts_per_page=3' ); ?>
      <?php while ( have_posts() ) : the_post(); ?>

        <?php get_template_part( 'template-parts/content', 'list-news-item' ); ?>

      <?php endwhile;
       ?>




    </ul>
    <div class="" style="margin-bottom:5rem">
      <a href="<?php transl( '/index.php/news/', 'index.php/nl/nieuws/'); ?>"><?php transl( 'More news', 'Meer nieuws'); ?></a>
    </div>

  </section>





  <section class="ojJournals topLine">
    <h2><?php transl( 'Our journals', 'Onze journals'); ?></h2>
    <ul class="itemsList">

      <li class="journalItem incCard">
        <div class="thumb">
            <img src="<?php bloginfo('template_url'); ?>/images/logo-openjournals-square-color-DIAP-white.png" alt="">
        </div>
        <div class="text">
          <h3><a href="/index.php/journals"><?php transl( 'All journals', 'Alle journals'); ?></a></h3>
          <p><?php transl( 'Openjournals hosts a diverse set of high-quality academic journals. Check out all of them.', 'Openjournals bevat een gevarieerde verzameling peer-reviewed wetenschappelijke tijdschriften. Bekijk ze allemaal.'); ?></p>

          <div>
      </li>


      <?php query_posts( 'post_type=journal&category_name=featured,featured_nl' ); ?>
      <?php while ( have_posts() ) : the_post(); ?>


        <li class="journalItem incCard" onclick="window.open('<?php echo get_post_meta($post->ID, 'journal_url', true); ?>', '_blank')" >
          <div class="thumb">
            <?php
            if ( has_post_thumbnail() ) {
              echo get_the_post_thumbnail( $post->ID, 'medium' );
          }  ?>
          </div>
          <div class="text">
            <h3><a href="<?php echo get_post_meta($post->ID, 'journal_url', true); ?>" target="_blank"><?php transl( 'New journal', 'Nieuw journal'); ?></a></h3>
            <?php the_content(); ?>

            <div>
        </li>

      <?php endwhile; ?>

    </ul>
  </section>

  <section class="ojRightBar">
    <div class="topLine" style="height:780px;">
      <h2>Twitter</h2>
      <a class="twitter-timeline" data-height="700" href="https://twitter.com/openjournalsnl?ref_src=twsrc%5Etfw">Tweets by openjournalsnl</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
    </div>

    <div class="topLine">
      <h2>Partners</h2>
      <a href="https://knaw.nl/"><img src="<?php bloginfo('template_url'); ?>/images/logo-KNAW.jpg" alt="Partner KNAW" class="ojLogoWide"></a>
      <a href="https://www.nwo.nl/"><img src="<?php bloginfo('template_url'); ?>/images/logo-nwo.jpg" alt="Partner NWO" class="ojLogoPortait"></a>
      <a href="https://oapus.nl/"><img src="<?php bloginfo('template_url'); ?>/images/logo-oapus.png" alt="Partner OPUS Foundation" class="ojLogoWide noMarg"></a>
    </div>
  </section>

</div>








  </div>

  <div class="ojColorBar"> </div>
</div>




<?php get_footer(); ?>
