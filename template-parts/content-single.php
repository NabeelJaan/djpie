<article id="post-<?php the_ID(); ?>" <?php post_class( '' ); ?>>

    <!-- Single Post Header -->
    <header class="entry-header">
        <div class="bg-[var(--background-color)] pt-12 pb-[78px] px-4 xl:px-0">
            <div class="max-w-[1280px] mx-auto">
                <div class="mb-6 md:mb-0 md:flex md:items-center">
                    <div class="md:w-[50%] lg:max-w-[530px] xl:max-w-[590px] mr-5 xl:mr-16">
                        <div>
                            <?php
                                echo "<ul class='flex gap-2 items-center'>";
                                foreach(get_the_category($post->ID) as $category) {
                                    echo "<li class='bg-[var(--primary-color)] px-3 inline-flex items-center justify-center rounded-full'>
                                        <a class='font-monospace text-white text-sm' href='" . get_category_link($category->term_id) . "'>" . $category->name . "</a>
                                    </li>";
                                }
                                echo "</ul>";
                            ?>
                        </div>
                        <?php
                            the_title( sprintf( '<h1 class="entry-title text-pretty text-[var(--heading-color)] capitalize max-w-[860px] mx-auto text-2xl lg:text-[40px] lg:leading-[44px] font-Oswald font-medium mt-2 mb-[22px]">', esc_url( get_permalink() ) ), '</h1>' ); 
                        ?>

                        <p class="text-[var(--content-color)] text-lg text-pretty font-normal font-poppins mt-4 mb-6">
                            <?php
                                $sb_excerpt = get_the_excerpt();
                                $ex_length = wp_trim_words( $sb_excerpt, 28, '...' );
                                echo $ex_length;
                            ?>
                        </p>

                        <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>" class="c_inner flex items-center">
                            <?php 
                                $author_id = get_the_author_meta('ID');
                                $author_name = get_the_author();
                                $author_image = get_avatar_url($author_id);
                                $author_bio = get_the_author_meta('description', $author_id);
                            ?>
                            <div class="w-[48px]">
                                <img 
                                    class="w-[48px] h-[48px] rounded-full"
                                    src="<?php echo $author_image; ?>"
                                    alt="<?php echo $author_name; ?>"
                                >
                            </div>
                            <div class="ml-3 max-w-[155px]">
                                <h4 class="text-[<?php echo get_theme_mod('h4_font_size_setting', '28'); ?>] font-semibold font-Oswald">
                                    <?php echo $author_name; ?>
                                </h4>
                                <time datetime="<?php echo get_the_date( 'c' ); ?>" itemprop="datePublished" class="text-sm text-[var(--content-color)] font-poppins font-normal"><?php echo get_the_date(); ?></time>
                            </div>
                        </a>
                        
                    </div>

                    <div class="sf_img md:w-[50%] mt-8 md:mt-0">
                        <?php the_post_thumbnail( 'single_f_img', ['class' => 'w-full'] ); ?>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Post sub wrapper -->
    <div class="bg-white pt-12 pb-[78px] px-4 xl:px-0">
        <div class="max-w-[1216px] mx-auto">
            <div class="single__post__wrapper lg:flex lg:justify-between">
                <div class="">
                    <div class="toc lg:sticky lg:top-8 md:max-w-[300px] lg:max-w-[200px] xl:max-w-[280px]">
                        <div class="toc_list"></div>
                    </div>
                </div>
                <!-- Post content -->
                <div class="entry-content lg:max-w-[550px] xl:max-w-[620px] my-8 lg:mx-6 lg:my-0">
                    <?php the_content(); ?>

                    <?php
                        wp_link_pages(
                            array(
                                'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'tailpress' ) . '</span>',
                                'after'       => '</div>',
                                'link_before' => '<span>',
                                'link_after'  => '</span>',
                                'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'tailpress' ) . ' </span>%',
                                'separator'   => '<span class="screen-reader-text">, </span>',
                            )
                        );
                    ?>
                </div>

                <!-- right Sidebar -->
                <div>
                    <div class="sp_sidebar md:max-w-[222px] lg:top-8 lg:sticky">
                        <p class="text-xl font-semibold font-Oswald">Share the article</p>
                        <div class="social__share flex items-center gap-3 mt-5 border-b pb-8">
                            <?php
                                // Get current post's URL and title
                                $post_url = urlencode(get_permalink());
                                $post_title = urlencode(get_the_title());

                                // Create share URLs
                                $twitter_url = "https://twitter.com/intent/tweet?url={$post_url}&text={$post_title}";
                                $facebook_url = "https://www.facebook.com/sharer/sharer.php?u={$post_url}";
                                $linkedin_url = "https://www.linkedin.com/shareArticle?mini=true&url={$post_url}&title={$post_title}";
                            ?>
                            <div class="">
                                <a href="<?php echo $twitter_url; ?>" class="inline-flex p-3" target="_blank" title="Copy Link">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_7826_68106)">
                                            <path
                                                d="M7.55 21.75C16.605 21.75 21.558 14.247 21.558 7.742C21.558 7.531 21.554 7.315 21.544 7.104C22.5077 6.40716 23.3394 5.54397 24 4.555C23.102 4.955 22.15 5.215 21.174 5.329C22.2013 4.71317 22.9706 3.74571 23.339 2.606C22.3723 3.17855 21.3152 3.58232 20.213 3.8C19.4705 3.01058 18.4886 2.48782 17.4191 2.31257C16.3496 2.13732 15.2522 2.31936 14.2966 2.83053C13.3409 3.3417 12.5804 4.1535 12.1325 5.14038C11.6847 6.12725 11.5745 7.2342 11.819 8.29C9.86212 8.19179 7.94772 7.68348 6.19987 6.79802C4.45203 5.91255 2.90975 4.6697 1.673 3.15C1.04468 4.23367 0.852432 5.51588 1.13531 6.73617C1.41819 7.95646 2.15497 9.02331 3.196 9.72C2.41449 9.69507 1.65013 9.48461 0.966 9.106V9.166C0.965092 10.3033 1.35809 11.4059 2.07819 12.2863C2.7983 13.1666 3.80105 13.7704 4.916 13.995C4.19191 14.193 3.43198 14.2217 2.695 14.079C3.00948 15.0571 3.6215 15.9125 4.44561 16.526C5.26973 17.1395 6.26482 17.4803 7.292 17.501C6.2703 18.3035 5.10027 18.8966 3.84897 19.2461C2.59768 19.5957 1.2897 19.6948 0 19.538C2.25277 20.9834 4.87339 21.7512 7.55 21.75Z"
                                                fill="var(--primary-color)" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_7826_68106">
                                                <rect width="24" height="24" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </a>
                            </div>

                            <div>
                                <a href="<?php echo $facebook_url; ?>" class="inline-flex p-3" target="_blank">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M24 12C24 5.373 18.627 0 12 0C5.373 0 0 5.373 0 12C0 17.99 4.388 22.954 10.125 23.854V15.47H7.078V12H10.125V9.356C10.125 6.349 11.917 4.688 14.658 4.688C15.97 4.688 17.344 4.922 17.344 4.922V7.875H15.83C14.339 7.875 13.874 8.8 13.874 9.75V12H17.202L16.67 15.469H13.874V23.854C19.612 22.954 24 17.99 24 12Z"
                                            fill="var(--primary-color)" />
                                    </svg>
                                </a>
                            </div>
                            <div>
                                <a href="<?php echo $linkedin_url; ?>" class="inline-flex p-3" target="_blank">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_7826_68112)">
                                            <path
                                                d="M22.223 0H1.772C0.792 0 0 0.773 0 1.73V22.266C0 23.222 0.792 24 1.772 24H22.223C23.203 24 24 23.222 24 22.27V1.73C24 0.773 23.203 0 22.223 0ZM7.12 20.452H3.558V8.995H7.12V20.452ZM5.34 7.434C5.06253 7.44458 4.78578 7.39907 4.52631 7.30019C4.26684 7.20131 4.02999 7.05109 3.82994 6.85852C3.62989 6.66596 3.47075 6.43501 3.36205 6.1795C3.25335 5.92399 3.19732 5.64917 3.19732 5.3715C3.19732 5.09383 3.25335 4.81901 3.36205 4.5635C3.47075 4.30799 3.62989 4.07704 3.82994 3.88448C4.02999 3.69191 4.26684 3.54169 4.52631 3.44281C4.78578 3.34393 5.06253 3.29842 5.34 3.309C5.87915 3.32087 6.39221 3.54339 6.76931 3.92889C7.14642 4.31439 7.35758 4.83222 7.35758 5.3715C7.35758 5.91078 7.14642 6.42861 6.76931 6.81411C6.39221 7.19962 5.87915 7.42213 5.34 7.434ZM20.452 20.452H16.894V14.882C16.894 13.556 16.87 11.845 15.042 11.845C13.191 11.845 12.909 13.294 12.909 14.789V20.452H9.356V8.995H12.769V10.561H12.816C13.289 9.661 14.452 8.709 16.181 8.709C19.786 8.709 20.451 11.081 20.451 14.166L20.452 20.452Z"
                                                fill="var(--primary-color)" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_7826_68112">
                                                <rect width="24" height="24" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </a>
                            </div>
                            <div class="link_wrapper">
                                <a href="<?php the_permalink(); ?>" id="copyLink" title="Copy link to this post" class="flex justify-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" width="20px" height="20px">
                                        <path fill="#324366" d="M579.8 267.7c56.5-56.5 56.5-148 0-204.5c-50-50-128.8-56.5-186.3-15.4l-1.6 1.1c-14.4 10.3-17.7 30.3-7.4 44.6s30.3 17.7 44.6 7.4l1.6-1.1c32.1-22.9 76-19.3 103.8 8.6c31.5 31.5 31.5 82.5 0 114L422.3 334.8c-31.5 31.5-82.5 31.5-114 0c-27.9-27.9-31.5-71.8-8.6-103.8l1.1-1.6c10.3-14.4 6.9-34.4-7.4-44.6s-34.4-6.9-44.6 7.4l-1.1 1.6C206.5 251.2 213 330 263 380c56.5 56.5 148 56.5 204.5 0L579.8 267.7zM60.2 244.3c-56.5 56.5-56.5 148 0 204.5c50 50 128.8 56.5 186.3 15.4l1.6-1.1c14.4-10.3 17.7-30.3 7.4-44.6s-30.3-17.7-44.6-7.4l-1.6 1.1c-32.1 22.9-76 19.3-103.8-8.6C74 372 74 321 105.5 289.5L217.7 177.2c31.5-31.5 82.5-31.5 114 0c27.9 27.9 31.5 71.8 8.6 103.9l-1.1 1.6c-10.3 14.4-6.9 34.4 7.4 44.6s34.4 6.9 44.6-7.4l1.1-1.6C433.5 260.8 427 182 377 132c-56.5-56.5-148-56.5-204.5 0L60.2 244.3z"/>
                                    </svg>
                                </a>
                                <span id="copyMessage" style="display: none;">Link copied!</span>
                            </div>
                        </div>
                        <div class="flex flex-col gap-y-5 mt-6">

                            <p class="text-base font-semibold font-Oswald">Written by</p>

                            <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>" class="c_inner flex items-center">
                                <?php 
                                    $author_id = get_the_author_meta('ID');
                                    $author_name = get_the_author();
                                    $author_image = get_avatar_url($author_id);
                                    $author_bio = get_the_author_meta('description', $author_id);
                                ?>
                                <div class="w-[48px]">
                                    <img 
                                        class="w-[48px] h-[48px] rounded-full"
                                        src="<?php echo $author_image; ?>"
                                        alt="<?php echo $author_name; ?>"
                                    >
                                </div>
                                <div class="ml-3 max-w-[155px]">
                                    <p class="text-base font-semibold font-Oswald">
                                        <?php echo $author_name; ?>
                                    </p>
                                    <time datetime="<?php echo get_the_date( 'c' ); ?>" itemprop="datePublished" class="text-sm text-[var(--content-color)] font-poppins font-normal"><?php echo get_the_date(); ?></time>
                                </div>
                            </a>
                            <div>
                                <span class="text-base font-poppins text-pretty">
                                    <?php echo $author_bio ?>
                                </span>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

</article>