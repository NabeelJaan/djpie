<?php
/**
 * The template for displaying archive pages
 */

get_header();  

$current_category_id = get_queried_object_id();
?>

<section class="cat_bar px-4 bg-[var(--background-color)] xl:px-0">
    <div class="max-w-[1280px] mx-auto relative overflow-hidden">
        <div class="flex items-center justify-between">
            <div class="category-list-desktop">
                <ul class="bus_types flex items-center">
                    <?php
                        $categories = get_categories( array(
                            'type'          => 'post',
                            'orderby'       => 'name',
                            'order'         => 'ASC',
                            'hide_empty'    => 1,
                            'hierarchical'  => 1,
                            'taxonomy'      => 'category'
                        ));

                        foreach( $categories as $category ) : 
                            if( $category->count > 0 && $category->parent == 0 ) : ?>
                                <li>
                                    <a href="<?php echo esc_url( get_category_link( $category->term_id ) ); ?>" 
                                    class="text-sm leading-[22px] font-normal font-poppins p-5 first:pl-0 inline-block">
                                        <?php echo esc_html( $category->name ); ?>
                                    </a>
                                </li>
                            <?php endif; 
                        endforeach; ?>
                </ul>
            </div>

            <div class="category-list-mobile hidden">
    <select onchange="location = this.value;" id="categorySelect" class="styled-select">
        <?php 
        // Get the current category based on context
        if (is_category()) {
            $current_category_id = get_query_var('cat');
        } elseif (is_single()) {
            $categories = get_the_category();
            $current_category_id = $categories ? $categories[0]->term_id : 0;
        } else {
            $current_category_id = 0; // Default to no category selected
        }

        foreach($categories as $category) :
            if($category->count > 0 && $category->parent == 0) :
                $selected = ($category->term_id == $current_category_id) ? 'selected' : '';
                ?>
                <option value="<?php echo esc_url(get_category_link($category->term_id)); ?>" <?php echo $selected; ?>>
                    <?php echo esc_html($category->name); ?>
                </option>
            <?php endif;
        endforeach; ?>
    </select>
</div>

            <div class="search__wrap">
                <a href="#" id="searchIcon" class="z-10 relative">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" class="injected-svg" data-src="/icons/search.svg" xmlns:xlink="http://www.w3.org/1999/xlink" role="img">
                        <path d="M19.25 19.25L15.5 15.5M4.75 11C4.75 7.54822 7.54822 4.75 11 4.75C14.4518 4.75 17.25 7.54822 17.25 11C17.25 14.4518 14.4518 17.25 11 17.25C7.54822 17.25 4.75 14.4518 4.75 11Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                </a>
                <div class="search__form" id="searchForm">
                    <?php get_search_form(); ?>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="px-4 pt-10 xl:px-0">
    <div class="max-w-[1280px] mx-auto">
    <div class="main_head mb-11 max-w-[630px]">
        <h1 class="text-3xl md:text-[<?php echo get_theme_mod('h1_font_size_setting', '40'); ?>] font-Oswald font-bold mb-6">
            <?php
            // Check if it's a category page
            if (is_category()) {
                $title = single_cat_title('', false);
                printf(__('<span>%s</span>', 'text-domain'), $title);
            }
            // Check if it's an author page
            elseif (is_author()) {
                $author = get_queried_object();
                $title = $author->display_name;
                printf(__('<span>%s</span>', 'text-domain'), $title);
            }
            ?>
        </h1>
        <div class="text-base md:text-lg font-normal font-poppins text-[var(--content-color)] mb-11">
            <?php 
            // Display category description if it's a category page
            if (is_category()) {
                echo category_description(); 
            }
            // Optionally, display a custom message or bio if it's an author page
            elseif (is_author()) {
                echo nl2br(get_the_author_meta('description', $author->ID)); // Display author's bio
            }
            ?>
        </div>

        <nav>
            <ul class="grid grid-cols-2 gap-4 md:grid-flow-row md:grid-cols-4 md:gap-5">
                <?php
                    $args = array(
                        'orderby'       => 'name',
                        'order'         => 'ASC',
                        'hide_empty'    => 1,
                        'hierarchical'  => 1,
                        'taxonomy'      => 'category',
                        'parent'        => $current_category_id,
                    );

                    $subcategories = get_categories($args);
                    foreach ($subcategories as $category) :
                        if ($category->count > 0) : ?>
                            <li>
                                <a href="<?php echo esc_url(get_category_link($category->term_id)); ?>"
                                   class="text-[var(--content-color)] font-poppins text-base md:text-lg font-medium bg-[var(--background-color)] h-[56px] flex items-center justify-center rounded-[4px] transition-all ease-in-out duration-500 hover:shadow-md">
                                    <?php echo esc_html($category->name); ?>
                                </a>
                            </li>
                        <?php endif;
                    endforeach;
                ?>
            </ul>
        </nav>
    </div>
</section>

<div class="for_icon max-w-[1280px] mx-auto px-4 pb-16 xl:pb-24 xl:px-0">
    <div class="grid gap-5 md:grid-cols-2 md:grid-flow-row md:gap-[20px] lg:grid-cols-3 lg:gap-8">
        <?php
            if (have_posts()) :
                while (have_posts()) : the_post();
                    get_template_part('template-parts/content', 'archive');
                endwhile;
            else :
                get_template_part('template-parts/content', 'none');
            endif;
        ?>
    </div>
    <div>
        <?php
            echo '<div class="pagination flex items-center justify-center mt-[24px]">';
            the_posts_pagination(array(
                'mid_size'  => 2,
                'prev_text' => __('«', 'simpleBlog'),
                'next_text' => __('»', 'simpleBlog'),
            ));
            echo '</div>';
        ?>
    </div>
</div>

<?php get_footer(); ?>