<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no" />
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header>
	<div class="top_head"></div>
	<div class="header">
		<div class="container">
			<div class="row">
				<div class="col-sm-2">
					<?php
					if(has_custom_logo()) {
						the_custom_logo();
					}
					?>
				</div>
				<div class="col-sm-10">
					<div class="menuarea">
						<nav>
							<?php
							if(has_nav_menu('top')) {
								wp_nav_menu(array(
									'theme_location' => 'top',
									'container' => false,
									'fallback_cb' => false
								));
							}
							?>
						</nav>
						<div class="social">
							<?php if(get_theme_mod('bb_facebook')): ?>
							<a target="_blank" href="<?php echo get_theme_mod('bb_facebook'); ?>">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/fb_logo.png" />
							</a>
							<?php endif; ?>
							<?php if(get_theme_mod('bb_youtube')): ?>
							<a target="_blank" href="<?php echo get_theme_mod('bb_youtube'); ?>">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/yt_logo.png" />
							</a>
							<?php endif; ?>
							<?php if(get_theme_mod('bb_instagram')): ?>
							<a target="_blank" href="<?php echo get_theme_mod('bb_instagram'); ?>">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/in_logo.png" />
							</a>
							<?php endif; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>