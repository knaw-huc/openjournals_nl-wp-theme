<?php include 'php.php'; ?>


<?php get_header(); ?>
<?php get_sidebar(); ?>





<main id="main">
  <div class="mlayout3col mlayoutHome mlayoutHeight mLineLeft">

    <div class="homeBlok-wide centerBlock mLineLeft mHomeAboutBox" id="about" style="background-image: url(<?php bloginfo('template_url'); ?>/images/home-table-hero.png);">
      <?php transl( '<h1>Het Meertens Instituut is een onderzoeksinstituut dat zich bezighoudt met de bestudering en documentatie van Nederlandse taal en cultuur. Centraal staan de verschijnselen die het alledaagse leven in onze samenleving vormgeven.</h1>', '<h1>The Meertens Institute, established in 1926, has been a research institute of the Royal Netherlands Academy of Arts and Sciences (KNAW) since 1952. We study the diversity in language and culture in the Netherlands.</h1>') ?>

    </div>


    <div class="mCardsColumn mLineLeft" id="colA">
      <h2 class="mhomeColHeader mhomeColHeaderGreen paddingSite"><?php transl( 'Uitgelicht', 'Featured (in Dutch)') ?></h2>
      <?php
      query_posts( 'category_name=uitgelicht&posts_per_page=6&lang=nl' );
      $counter = 0;
      ?>
      <?php while ( have_posts() ) : the_post(); ?>
        <?php
        if ($counter == 0) {
          get_template_part( 'template-parts/content', 'cardSimpleThumbBig' );
        } else {
          get_template_part( 'template-parts/content', 'cardSimple' );
        }
        $counter++;
         ?>

      <?php endwhile; ?>
    </div>


    <div class="mCardsColumn  mLineLeft" id="colB">
      <h2 class="mhomeColHeader paddingSite"><?php transl( 'Nieuws', 'News (in Dutch)') ?></h2>
      <?php query_posts( 'category_name=nieuws&posts_per_page=3&lang=nl' ); ?>
      <?php while ( have_posts() ) : the_post(); ?>
        <?php get_template_part( 'template-parts/content', 'cardSimpleThumb' ); ?>
      <?php endwhile; ?>


      <h2 class="mhomeColHeader paddingSite"><?php transl( 'In de media', 'In the media (in Dutch)') ?></h2>
      <?php query_posts( 'category_name=in-de-media&posts_per_page=3&lang=nl' ); ?>
      <?php while ( have_posts() ) : the_post(); ?>
        <?php get_template_part( 'template-parts/content', 'cardSimpleThumb' ); ?>
      <?php endwhile; ?>

    </div>


    <div class="mCardsColumn  homeBlok-high" id="colC">
      <div class="homeBlok-right-top paddingSite">
        <div><strong><?php transl( 'Onderzoek', 'Research') ?></strong><br><a href="/index.php/onderzoek/onderzoeksprojecten-2/"><?php transl( 'Bekijk de onderzoeksprojecten van het Meertens Instituut', 'Our research projects') ?></a></div>
        <div><strong><?php transl( 'Databanken', 'Datasets') ?></strong><br><a href="/index.php/collecties/databanken/"><?php transl( 'Bekijk de databanken van het Meertens Instituut', 'Our datasets') ?></a></div>
        <div><strong><?php transl( 'Publicaties', 'Publications') ?></strong><br><a href="/index.php/onderzoek/publicaties/"><?php transl( 'Bekijk de publicaties van het Meertens Instituut', 'Our publications') ?></a></div>
      </div>


        <h2 class="mhomeColHeader paddingSite "><?php transl( 'Agenda', 'Events (in Dutch)') ?></h2>
        <?php query_posts( 'category_name=agenda&posts_per_page=3&lang=nl' ); ?>
        <?php while ( have_posts() ) : the_post(); ?>
          <?php get_template_part( 'template-parts/content', 'cardSimpleNoDate' ); ?>
        <?php endwhile; ?>
        <div class="paddingSite"><br><br>
          <?php get_template_part( 'template-parts/comp', 'social-media' ); ?>
        </div>


    </div>





  </div>

</main>


<?php get_footer(); ?>
