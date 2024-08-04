<!-- Related Posts -->

<section class="rel_posts px-4 pt-16 xl:px-0">
    <div class="max-w-[1216px] mx-auto">
        <div class="rel_posts_head mb-16 md:flex md: justify-between">
            <div class="max-w-[550px]">
                <h2 class="text-rich_black text-[<?php echo get_theme_mod('h2_font_size_setting', '36'); ?>] leading-[44px] font-medium font-Oswald">
                    Related articles
                </h2>
                <p class="text-[var(--content-color)] font-Lato text-xl leading-[30px] mt-5">
                    Read these articles next for actionable insights and advice.
                </p>
            </div>
            <div class="mt-10 md:mt-0">
                <a href="#"
                    class="text-base text-white rounded-md font-Inter font-medium bg-[var(--primary-color)] py-3 px-5 inline-block">
                    Read more on the blogs
                </a>
            </div>
        </div>
        <!-- Related Posts -->
        <div class="post_by_categories">
            <div class="cat_post_wrapper md:gap-x-5 md:gap-y-5 md:grid md:grid-flow-row md:grid-cols-2 lg:grid-cols-3 xl:gap-y-16 xl:gap-x-8 mb-16">
                <?php
                    $post_id = get_the_ID();
                    $categories = get_the_category($post_id);
                    if ($categories) {
                        $category_ids = array();
                        foreach ($categories as $individual_category) {
                            $category_ids[] = $individual_category->term_id;
                        }

                        $args = array(
                            'category__in' => $category_ids,
                            'post__not_in' => array($post_id),
                            'posts_per_page' => 6, 
                            'caller_get_posts' => 1
                        );

                        $related_posts_query = new WP_Query($args);

                        if ($related_posts_query->have_posts()) {
                            while ($related_posts_query->have_posts()) {
                                $related_posts_query->the_post();
                                ?>
                                <div class="cat_post_card mb-8 last:mb-0 md:mb-0">
                                    <div class="mb-6">
                                        <a href="<?php the_permalink(); ?>" class="block overflow-hidden font-Oswald">
                                            <?php the_post_thumbnail('pb_cat', ['class' => 'transition ease-in-out duration-300 hover:scale-105']); ?>
                                        </a>
                                    </div>
                                    <div class="featured__content">
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
                                        <h3 class="my-2 text-[<?php echo get_theme_mod('h3_font_size_setting', '32'); ?>] font-Oswald font-medium">
                                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                        </h3>
                                        <p class="text-base font-poppins font-normal mb-6">
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
                                <?php
                            }
                            wp_reset_postdata();
                        } else {
                            echo '<div class="cat_post_card mb-8 last:mb-0 md:mb-0">';
                            echo '<p>No related posts found.</p>';
                            echo '</div>';
                        }
                    }
                ?>
            </div>
        </div>
    </div>
</section>