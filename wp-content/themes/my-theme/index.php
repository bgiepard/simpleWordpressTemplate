<?php get_header(); ?>


<section class="container mx-auto p-4 py-12 md:p-24">
	<h1 class="text-3xl mb-4">Simple section</h1>
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta inventore quibusdam reprehenderit sapiente.
		A consequuntur et eum nesciunt voluptatibus. Architecto aspernatur at consectetur delectus, dignissimos distinctio dolore,
		eveniet exercitationem, explicabo illo in iste labore laboriosam laborum laudantium libero magnam maxime molestias nam
		necessitatibus nemo omnis perferendis placeat praesentium quaerat quo repellendus rerum sunt suscipit ullam ut velit voluptate voluptates.
		Amet aperiam aspernatur blanditiis consectetur dolore dolores doloribus eaque facere, inventore labore libero
		minima mollitia qui quia quibusdam sed similique veritatis vero! Adipisci aliquam aliquid aspernatur aut beatae,
		dolor esse, facilis illum magni nisi, nobis non possimus quaerat repellendus saepe sint totam unde.
		Adipisci deserunt ea magnam maiores molestiae molestias ratione! Aperiam at aut blanditiis consequatur doloribus fuga laboriosam
		laudantium officia praesentium quas. Expedita hic nobis praesentium quo ratione rem ullam vero! Cumque deleniti distinctio ducimus,
		id minus voluptatum? Autem deleniti dignissimos distinctio fugiat fugit laudantium non quasi. Accusamus accusantium dolorum eligendi
		minima molestias placeat quaerat quis quod sint vero? Ab accusamus accusantium aperiam atque cum dicta doloremque fugit hic illo ipsa
		iure magni officia possimus praesentium repellendus reprehenderit sapiente, sunt veniam vitae voluptate? Accusamus accusantium deleniti
		dignissimos enim excepturi ipsa laudantium maiores pariatur porro quibusdam quis, recusandae temporibus unde, voluptatem.</p>
</section>

<?php
	$args = array(
		'post_type' => 'opinions',
		'posts_per_page' => -1
	);

	$custom_query = new WP_Query($args);
	if ($custom_query->have_posts()) :
?>
<div class="bg-sky-100 mt-10 py-12 px-4">
	<div class="container mx-auto">
		<h2 class="text-3xl mb-6">Reviews</h2>
	</div>

	<div class="container mx-auto flex flex-wrap gap-4">
		<?php
			while ($custom_query->have_posts()) :
			$custom_query->the_post();
			$rating         = get_field('ocena');
			$rounded_rating = round($rating * 2) / 2;
			$full_stars     = floor($rounded_rating);
			$half_star      = $rounded_rating - $full_stars === 0.5;
		?>
		<div class="p-5 bg-white shadow w-full lg:w-[45%] xl:w-[20%]">
			<span class="text-2xl block"><?php the_field('imie'); ?></span>
			<span class="mb-4 italic text-sky-600 text-sm"><?php the_field('stanowisko'); ?></span>
			<div class="flex w-1/2 mb-4">
				<?php for ($i = 1; $i <= $full_stars; $i++) : ?>
				<img class="w-1/5" src="<?php echo get_template_directory_uri(); ?>/assets/fullstar.png" alt="" />
				<?php endfor; ?>

				<?php if ($half_star) : ?>
				<img class="w-1/5" src="<?php echo get_template_directory_uri(); ?>/assets/halfstar.png" alt="" />
				<?php endif; ?>

				<?php for ($i = $full_stars + ($half_star ? 1 : 0); $i < 5; $i++) : ?>
				<img class="w-1/5" src="<?php echo get_template_directory_uri(); ?>/assets/emptystar.png" alt="" />
				<?php endfor; ?>
			</div>

			<span class="text-sm"><?php the_content(''); ?></span>
		</div>
		<?php endwhile; ?>
	</div>
</div>
<?php
	endif;
	wp_reset_postdata();
?>

<?php get_footer(); ?>