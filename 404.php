<?php

get_header();
?>

<div class="mpFrame">
	<?php get_template_part( 'template-parts/mp_aside', '' ); ?>

	<div class="mpContent">
		<h1>Oops! That page can&rsquo;t be found.- 404</h1>
		<p>It looks like nothing was found at this location</p>
		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

	</div>
</div>







<?php
get_footer();
?>
