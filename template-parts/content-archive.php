<div class="single_cards">

    <div class="post_img mb-[14px]">
        <a href="<?php the_permalink(); ?>" class="block overflow-hidden font-Oswald">
            <?php the_post_thumbnail( 'pb_cat', [ 'class' => 'transition ease-in-out duration-300 hover:scale-105' ] );?>
        </a>
    </div>

    <div class="content">
        <ul class="md:flex items-center gap-2 mt-6">
            <?php foreach((get_the_category()) as $category) : ?>
                <li class="bg-[var(--primary-color)] px-3 inline-flex items-center justify-center rounded-full">
                    <a  href="<?php echo esc_url(get_category_link($category->term_id)); ?>" 
                        class='font-monospace text-white text-sm'>
                        <?php echo esc_html($category->name); ?>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
        <h3 class="text-primary text-[<?php echo get_theme_mod('h3_font_size_setting', '32'); ?>] font-Oswald font-semibold mt-2">
            <?php the_title(); ?>
        </h3>
        <p class="text-base font-poppins font-normal mb-6 mt-2">
            <?php echo wp_trim_words(get_the_excerpt(), 18, '...'); ?>
        </p>
        <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>" class="c_inner flex items-center">
            <div class="w-[48px]">
                <img class="w-[48px] h-[48px] rounded-full" src="<?php echo get_avatar_url(get_the_author_meta('ID')); ?>" alt="<?php the_author(); ?>">
            </div>
            <div class="ml-3 max-w-[155px]">
                <p class="text-sm font-Oswald"><?php the_author(); ?></p>
                <time datetime="<?php echo get_the_date('c'); ?>" itemprop="datePublished" class="text-sm text-[var(--content-color)] font-poppins font-normal">
                    <?php echo get_the_date(); ?>
                </time>
            </div>
        </a>
    </div>
</div>