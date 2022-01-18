<aside class="aside paddingSite mLineLeft">
  <div class="asideInner">
    <div class="mBranding mMarginBottom">
      <a href="/"><img src="<?php bloginfo('template_url'); ?>/images/logo_Meertens.png" alt="Welkom op de site van het Meertens Instituut. Link naar homepage"></a>
      <div class="mSubTitle mText--XS">
        <?php transl( 'Onderzoek en documentatie <br> van Nederlandse taal en cultuur', 'Research and documentation <br>  of Dutch language and culture') ?>
      </div>
      <button type="button" name="button" onclick="handleMenu()" id="hamburgerButton">Menu</button>
    </div>


    <nav class="mMainNavgation mMarginBottom" id="MainNavgation">
      <?php

        $cleanMenu = wp_nav_menu( array(
          //'menu_id' => 'my-custom-menu',
          'echo' => false,
          'depth'=> 2,
        ) );
        echo strip_tags($cleanMenu, "<a><ul><li>");
        //echo $cleanMenu;

      ?>
    </nav>


    <div>
      <?php
      //index.php/home-eng/
      $langData = pll_the_languages( array( 'raw' => 1 ) );
      $baseUrl = get_site_url();
      $transLink = '';

      if ($langData[nl][current_lang] == 1) {
        // nl page

        if ($langData[en][url]  != $baseUrl.'/index.php/en/') {
          // if has translation
          $transLink = '<a href="'.$langData[en][url].'">English</a>';
        }
        if ( is_home() ) {
          $transLink = '<a href="/index.php/en/">English</a>';
        }
      } else {
        //eng page
        if ($langData[nl][url]  != $baseUrl) {
          // if has translation
          $transLink = '<a href="'.$langData[nl][url].'">Nederlands</a>';
        }
        if ( is_home() ) {
          $transLink = '<a href="/index.php/">Nederlands</a>';
        }


      }



      echo $transLink;
      ?>

      <!-- <label class="switch">
         <span class="mSwitchLabel">ENG</span>
        <input type="checkbox" id="langSwitch">
        <span class="slider round"></span>
      </label> -->

    </div>

  </div>
</aside>

<div class="mSubNavLayer" id="subnav">
  <div class="mSubNav mLineLeft paddingSite">
    <div><button type="button" name="button" onclick="hideSubnav()">close</button></div>
    <nav class="mMainNavgation mSubNavInner" id="subnavInner"></nav>
    <div></div>
  </div>
</div>
