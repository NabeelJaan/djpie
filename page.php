<?php
    /**
     * The template for displaying all pages
     *
     * This is the template that displays all pages by default.
     * Please note that this is the WordPress construct of pages
     * and that other 'pages' on your WordPress site may use a
     * different template.
     *
     * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
     */

    get_header();
?>

<div id="primary" class="site-main page-data">

	<div class="px-4">
		<?php while ( have_posts() ) : the_post(); ?>
			<div class="entry-content max-w-[1280px] mx-auto py-16">
				<?php the_content();?>
			</div>
		<?php endwhile; ?>
	</div>

</div>

<?php get_footer();