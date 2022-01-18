<div class="mCardHome">
	<div style="font-size:.8rem; color:#666;"><?php echo get_the_date('d-m-Y'); ?></div>
	<div><strong><?php the_title(); ?></strong></div>
	<div><?php echo get_the_excerpt() ?><br><a href="<?php the_permalink(); ?>">Read more</a></div>
</div>
