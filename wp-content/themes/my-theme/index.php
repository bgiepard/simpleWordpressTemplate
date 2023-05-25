<?php get_header(); ?>

<?php

	if( have_posts() ):
		while( have_posts() ): the_post(); ?>

			<div class="mx-auto my-10 w-1/3 p-5 shadow rounded-3xl">
				<h1 class="text-3xl mb-2"><?php the_title(); ?></h1>
				<div><?php the_post_thumbnail('large'); ?></div>
				<small>Posted on: <?php the_time('F j, Y'); ?> at <?php the_time('g:i a'); ?>, in <?php the_category(); ?></small>
				<p class="mt-5"><?php the_content(); ?></p>
			</div>

	<?php endwhile;
	endif;
?>

<?php get_footer(); ?>