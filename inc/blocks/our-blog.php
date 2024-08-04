<section class="bg-black pt-[100px]"> 
        <div class="container max-w-[1260px] mx-auto">
            <div class="text-white">
                <div class="ml-[90px] max-w-[47%]">
                    <h2 class="font-medium text-[90px] leading-[96px] mb-[24px]">
                        <?php the_field('blog_heading'); ?>
                    </h2>
                    <p class="font-normal text-[22px] leading-[30px]">
                        <?php the_field('blog_description'); ?>
                    </p>
                </div>

                <!-- Posts -->

                <?php 
                    // $pbc_cat_name = get_field('pbc_name');

                    $args = array(
                        'post_type'         =>  'post',
                        'posts_per_page'    =>  3,
                        // 'category_name'     =>  $pbc_cat_name,
                        'post_status'       =>  'publish'
                    );
                    $the_query = new WP_Query( $args );
                    
                    if ( $the_query->have_posts() ):
                        while ( $the_query->have_posts() ) : $the_query->the_post();

                ?>

                    <div>
                        <div class="flex gap-[45px] pt-[100px]">
                            <div class="border w-[388px] h-[486px] border-[#525252] rounded-[32px]">
                                <img class="p-[16px]" src="img/Card dalam 3.png" alt="">

                                <a href="<?php the_permalink(); ?>" class="block overflow-hidden font-Oswald">
                                    <?php the_post_thumbnail( '', [ 'class' => 'p-[16px]' ] );?>
                                </a>
                                <h2 class="font-semibold text-[28px] leading-[40px] ml-[30px]">
                                    <?php the_title(); ?>
                                </h2>
                                <p class="font-normal text-[16px] mt-[9px] ml-[30px]">
                                    <?php echo wp_trim_words(get_the_excerpt(), 18, '...'); ?>
                                </p>
                                    <a class="flex text-[#0097B2] pt-[9px] items-center ml-[30px]" href="#">
                                        <span class="<?php the_permalink(); ?>">
                                            View All
                                        </span>
                                        <span class="border rounded-full bg-[#0097B2] border-[#0097B2] w-[13px] h-[13px] ml-[7px] flex items-center justify-center">
                                            <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1.22571 7.22559H13.7257M13.7257 7.22559L7.72571 1.22559M13.7257 7.22559L7.72571 13.2256" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                        </span>
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>

                    <?php
                        endwhile;
                        wp_reset_postdata();
                        endif;
                    ?>

                <!-- Button -->
                <div class="pt-[70px] ml-[620px] pb-[126px]">

                    <?php 
                        $blog__btn = get_field('blog_button');
                        if( $blog__btn ) :
                    ?>  
                        <a href="<?php echo esc_url( $blog__btn['url'] ); ?>" target="<?php echo esc_attr( $blog__btn['target'] ); ?>" class="flex border rounded-[80px] text-[#0097B2] w-[200px] h-[52px] items-center justify-center border-[#0097B2]">
                            <span class="ml-6">
                                <?php echo esc_html( $blog__btn['title'] ); ?>
                            </span>
                            <span class="border rounded-full bg-[#0097B2] ml-12 w-10 h-10 flex items-center justify-center">
                                <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1.22571 7.22559H13.7257M13.7257 7.22559L7.72571 1.22559M13.7257 7.22559L7.72571 13.2256" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </span>
                        </a>

                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>