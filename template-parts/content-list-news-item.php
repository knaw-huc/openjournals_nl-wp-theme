<li class="newsItem incCard" onclick="window.location.href='<?php the_permalink(); ?>'">
  <div class="text">
    <small><?php the_date(); ?></small>
    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
    <?php the_content(); ?>
  </div>
</li>
