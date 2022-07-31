<?php
get_header();
get_template_part('template_parts/banner-single');
?>

<section>
	<div class="container">
		
		<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<?php if(have_posts()): ?>
				<?php while(have_posts()): ?>
					<?php the_post(); ?>

					<h1><?php the_title(); ?></h1>

					<div class="post_content">
						<?php the_content(); ?>
					</div>

					<hr/>

					<h3>Confira outros posts interessantes:</h3>

					<div class="row">
						<?php
						$categories = get_the_category();
						$bb_query = new WP_Query(array(
							'posts_per_page' => 4,
							'post__not_in' => array( $post->ID ),
							'cat' => $categories[0]->term_id
						));

						if($bb_query->have_posts()) {
							while($bb_query->have_posts()) {
								$bb_query->the_post();

								get_template_part('template_parts/related_post');
							}
						}

						wp_reset_postdata();
						?>
					</div>

					<hr/>

					<?php
					if(comments_open()) {
						comments_template();
					}
					?>

				<?php endwhile; ?>
			<?php endif; ?>
		</div>

	</div>
</section>


<?php get_footer(); ?>