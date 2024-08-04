<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>
<body class="antialiased">
	<div class=" md:flex items-center justify-center min-h-screen">
		<div class="w-full md:w-1/2 flex items-center justify-center">
			<div class="max-w-sm m-8 relative z-50">
				<div style="font-size:150px; margin-bottom:-30px;" class="text-[var(--content-color)] text-center font-bold">404</div>
				<div class="text-3xl md:text-9xl text-[var(--content-color)] text-center font-medium mb-4 ">OOPS!</div>
				<p class="text-[var(--content-color)] text-lg md:text-xl text-center font-regular mb-4"><?php _e( 'Sorry, the page you are looking for could not be found.', 'tailpress' ); ?></p>
				<div class="flex items-center justify-center " >
				<a href="<?php echo get_bloginfo( 'url' ); ?>" class="px-6 border border-charcoal bg-charcoal font-semibold border-solid py-2 rounded text-white hover:bg-white hover:text-[var(--content-color)]">
					<?php _e( 'Go Home', 'tailpress' ); ?>
				</a>
				</div>
			</div>
		</div>
	</div>
</body>
</html>