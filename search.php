<?php get_header(); ?>

<section class="general_hero bg-[var(--background-color)] px-4 py-20 xl:px-0">
    <div class="gen__content max-w-1140px mx-auto">
        <h1 class="page-title text-center font-Oswald text-5xl font-bold text-[var(--content-color)]">
            <?php _e( 'Search results for:', 'nd_dosth' ); ?>
            <span><?php echo get_search_query(); ?></span>
        </h1>
    </div>
</section>

<section class="content-container px-4 py-14 xl:px-0 py-50px">
    <div class="max-w-[1280px] mx-auto">
        <div class="w-full">
            <div class="grid gap-5 md:grid-cols-2 lg:grid-cols-3 md:grid-flow-row md:gap-20px lg:gap-8">
                <?php if ( have_posts() ): ?>
                    <?php while( have_posts() ): ?>
                        <?php the_post(); ?>
                        <div class="search-result">
                            <div class="single_cards">
                                <div class="post_img mb-[14px]">
                                    <a href="<?php the_permalink(); ?>" class="block overflow-hidden font-Oswald">
                                        <?php the_post_thumbnail( 'pb_cat', [ 'class' => 'transition ease-in-out duration-300 hover:scale-105' ] );?>
                                    </a>
                                </div>
                                <div class="content">
                                    <ul class="bus_types flex items-center gap-2 mt-6">
                                        <?php foreach((get_the_category()) as $category) : ?>
                                            <li>
                                                <a  href="<?php echo esc_url(get_category_link($category->term_id)); ?>" 
                                                    class="text-sm text-secondary font-monospace font-medium leading-5">
                                                    <?php echo esc_html($category->name); ?>
                                                </a>
                                            </li>
                                        <?php endforeach; ?>
                                    </ul>
                                    <h3 class="text-primary text-xl font-Oswald font-semibold mt-2">
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
                                            <h4 class="text-sm font-Oswald"><?php the_author(); ?></h4>
                                            <time datetime="<?php echo get_the_date('c'); ?>" itemprop="datePublished" class="text-sm text-[var(--content-color)] font-poppins font-normal">
                                                <?php echo get_the_date(); ?>
                                            </time>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php else: ?>
                    <p><?php _e( 'No Search Results found', 'nd_dosth' ); ?></p>
                <?php endif; ?>
            </div>
        </div>
        <div>
            <?php
                the_posts_pagination(array(
                    'mid_size'  => 2,
                    'prev_text' => __( '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" class="w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" /></svg>', 'textdomain' ),
                    'next_text' => __( '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" class="w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" /></svg>', 'textdomain' ),
                ));
            ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>
