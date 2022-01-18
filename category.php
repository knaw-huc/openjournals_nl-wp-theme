<?php /* Template Name: List page - general */ ?>
<?php include 'php.php'; ?>
<?php get_header(); ?>
<?php get_sidebar(); ?>



<div id="main">

  <div class="mlayout3col mlayoutHeight mFlexConditional mlayoutVolg">


    <div class="mBorderUnder mLineLeft mAlignMiddle mCollHeaderBar paddingSite" >
      <h1 ><?php single_cat_title(); ?></h1>

    </div>





    <main class="mLineLeft mDoubleCol mCardsVolg" id="list1">


        <?php while ( have_posts() ) : the_post();?>


          <article class="mCard mCardsSimpleThumb mLineLeft incCard">

            <?php //if ($postcounter <= 12) {?>

            <div class="mCards__thumbnailSmall">
          		<?php
          		if ( has_post_thumbnail() ) {
          			echo get_the_post_thumbnail( $post_id, 'thumbnail' );
          	}  ?>
            </div>
            <?php //} ?>
            <div>



              <?php if ($showDate) {?>
                <div class="mTextSmall mTextGrey"><?php echo get_the_date('d-m-Y'); ?></div>
                <?php } ?>
              <div>
                <h2>
                  <a href="<?php the_permalink(); ?>"><?php echo removeEngStr(get_the_title()); ?></a>
                </h2>
              </div>



              <?php
              // show card preview
              if ($getDomElem[0] != '') {
                foreach ($getDomElem as $value) {
                    $DOM = new DOMDocument();
                    $DOM->loadHTML(get_the_content());

                    $xpath = new DOMXPath($DOM);
                    $someclass_elements = $xpath->query('//'.$value);
                    $translation = iconv('utf-8', 'latin1', $someclass_elements[0]->textContent);
                    echo '<div>'.$translation.'</div>';
                }

              }



           ?>



              <?php if ($showTags) {?>
              <div class=""><?php
                        $post_categories = get_the_category();
                        $cats = array();
                        foreach($post_categories as $c){
                            $cat = get_category( $c );
                            $cats[] = array( 'name' => $cat->name, 'slug' => $cat->slug );
                            if ( ($chosenCategory != $cat->name) && $cat->name != 'Uncategorized') {
                              echo '<span class="tag mTextSmall">'.$cat->name.'</span>';
                            }

                        }
                ?>
              </div>
              <?php } ?>

            </div>

          </article>


          <?php $postcounter++ ?>
        <?php endwhile; ?>
        <?php //endif; ?>


    </main>

    <div class="mLineLeft paddingSite mRightAside mAlignTopBottom mBgGrey">
      <div>
        <div class="mTextBlock mTextSmall mMarginPageTop"  id="filteronList"></div>
        <?php get_template_part( 'template-parts/comp', 'social-media' ); ?>
      </div>

      <div></div>

    </div>

  </div>
</div>



<script src="<?php bloginfo('template_url'); ?>/js/findTags.js" charset="utf-8"></script>
<?php get_footer(); ?>
