<?php get_header(); ?>

	<div class="">

	<?php if ( have_posts() ) : ?>

		<?php
		while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'template-parts/content', 'single' ); ?>
			
			<div class="lg:max-w-[550px] xl:max-w-[620px] mx-auto px-4 xl:px-0">
				<?php
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
				?>
			</div>

			<?php get_template_part( 'template-parts/content', 'relatedPost' ) ?>

		<?php endwhile; ?>

	<?php endif; ?>

	</div>

<?php
get_footer();