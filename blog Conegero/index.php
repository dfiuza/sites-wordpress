<?php
get_header();
get_template_part('template_parts/banner-home');
?>
<div class="depoimentos">
	<div class="container">
		<div class="col-sm-6">
			<?php
			$d = rand(1,5);
			$txt = get_theme_mod('bb_depo'.$d.'_txt');
			$url = get_theme_mod('bb_depo'.$d.'_url');
			$autor = get_theme_mod('bb_depo'.$d.'_autor');
			$url = wp_get_attachment_image_src($url);
			?>
			<img src="<?php echo $url[0]; ?>" />
			<i>"<?php echo $txt; ?>"</i><br/>
			<strong><?php echo $autor; ?></strong>
		</div>
		<div class="col-sm-6">
			<?php
			$d2 = rand(1,5);
			while($d2 == $d) {
				$d2 = rand(1,5);
			}
			$txt = get_theme_mod('bb_depo'.$d2.'_txt');
			$url = get_theme_mod('bb_depo'.$d2.'_url');
			$autor = get_theme_mod('bb_depo'.$d2.'_autor');
			$url = wp_get_attachment_image_src($url);
			?>
			<img src="<?php echo $url[0]; ?>" />
			<i>"<?php echo $txt; ?>"</i><br/>
			<strong><?php echo $autor; ?></strong>
		</div>
	</div>
</div>

<section>
	<div class="container">
		<div class="postscontent">
			<?php if(have_posts()): ?>
				<?php while(have_posts()): ?>
					<?php the_post(); ?>

					<?php get_template_part('template_parts/post'); ?>

				<?php endwhile; ?>
			<?php endif; ?>
		</div>

		<div class="loadmoreButton">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/more.png" />
			Carregar mais
		</div>

	</div>
</section>




























<?php get_footer(); ?>