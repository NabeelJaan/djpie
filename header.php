<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!-- Google fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

	<style>
		:root {
			--primary-color: <?php echo get_theme_mod('primary_color_setting', '#131b24'); ?>;
			--background-color: <?php echo get_theme_mod('background_color_setting', '#F0F4F9'); ?>;
			--heading-color: <?php echo get_theme_mod('headings_color_setting', '#000000'); ?>;
			--links-color: <?php echo get_theme_mod('links_color_setting', '#304ddb'); ?>;
			--content-color: <?php echo get_theme_mod('paragraph_color_setting', '#314351'); ?>;
			--content-color2: <?php echo get_theme_mod('pWithDarkBg_color_setting', '#314351'); ?>;
			--h1-font-size: <?php echo get_theme_mod('h1_font_size_setting', '40px'); ?>;
			--h2-font-size: <?php echo get_theme_mod('h2_font_size_setting', '36px'); ?>;
			--h3-font-size: <?php echo get_theme_mod('h3_font_size_setting', '32px'); ?>;
			--h4-font-size: <?php echo get_theme_mod('h4_font_size_setting', '28px'); ?>;
			--h5-font-size: <?php echo get_theme_mod('h5_font_size_setting', '24px'); ?>;
			--h6-font-size: <?php echo get_theme_mod('h6_font_size_setting', '20px'); ?>;
		}
	</style>


	<?php wp_head(); ?>
</head>

<body <?php body_class( 'bg-white' ); ?>>

<?php do_action( 'tailpress_site_before' ); ?>

	<?php do_action( 'tailpress_header' ); ?>

	<header class="bg-black	px-4 xl:px-0">

		<div class="mx-auto max-w-[1280px]">
			<div class="lg:flex lg:justify-between lg:items-center py-6">
				<div class="flex justify-between items-center">
					<div>
						<?php if ( has_custom_logo() ) { ?>
                     <?php the_custom_logo(); ?>
						<?php } else { ?>
							<a href="<?php echo get_bloginfo( 'url' ); ?>" class="font-extrabold font-Oswald text-lg uppercase">
								<?php echo get_bloginfo( 'name' ); ?>
							</a>

						<?php } ?>
					</div>

					<div class="lg:hidden">
						<a href="#" aria-label="Toggle navigation" id="primary-menu-toggle" class="hamburger-menu">
							<div class="bar"></div>	
						</a>
					</div>

				</div>

				<?php
				wp_nav_menu(
					array(
						'container_id'    => 'primary-menu',
						'container_class' => 'bg-white lg:bg-transparent',
						'menu_class'      => 'lg:flex lg:-mx-4',
						'theme_location'  => 'primary',
						'li_class'        => 'font-Oswald text-black hover:text-secondary lg:mx-4',
						'fallback_cb'     => false,
					)
				);
				?>
			</div>
		</div>
	</header>

	<div id="content" class="site-content flex-grow">
		
	<?php do_action( 'tailpress_content_start' ); ?>

	<main>
