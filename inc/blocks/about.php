

<section class="about_sec bg-black">
    <div class="max-w-[1244px] mx-auto">

        <div class="text-white pt-[56px] flex gap-[133px] border-t-[1px] border-[#0097B2]">
            <div class="flex gap-10 max-w-[50%]">

                <?php 
                    if( have_rows('our_stats') ) : 
                        while( have_rows('our_stats') ) : the_row();
                ?>

                    <div class="text-[#0097B2]">
                        <span class="text-[67px] font-semibold leading-[88px]">
                            <?php the_sub_field('number_stats'); ?>
                        </span>
                        <p class="font-medium text-[21px] leading-[32px]">
                            <?php the_sub_field('stats_description'); ?>
                        </p>
                    </div>

                <?php
                        endwhile; 
                    endif;
                ?>

            </div>
            <div class="py-3 max-w-[40%]">
                <p class="font-normal text-[22px] max-w-[80%] leading-8">
                    <?php the_field('stats_details'); ?>
                </p>
            </div>
        </div>
        <!-- About Company -->
        <div class="b-color flex py-[120px] border rounded-t-[80px] px-20 gap-9"> 
            <div class="text-white max-w-[50%]">
                <h1 class="font-medium text-[90px] leading-[96px] mb-[41px]">
                    <?php the_field('about_heading'); ?>
                </h1>
                <h3 class="text-[54px] font-medium leading-[54px] mb-[26px] max-w-[90%]">
                    <?php the_field('about_sub_heading'); ?>
                </h3>
                <p class="text-[22px font-medium] leading-[30px] mb-[37px] max-w-[60%]">
                    <?php the_field('about_description'); ?>
                </p>

                <?php 
                    $sm__btn = get_field('sm_button');
                    if( $sm__btn ) :
                ?> 
                    <a href="<?php echo esc_url( $sm__btn['url'] ); ?>" target="<?php echo esc_attr( $sm__btn['target'] ); ?>" class="flex border rounded-[80px] text-[#0097B2] w-[200px] h-[52px] items-center justify-center border-[#0097B2]">
                        <span class="ml-6">
                            <?php echo esc_html( $sm__btn['title'] ); ?>
                        </span>
                        <span class="border rounded-full bg-[#0097B2] ml-12 w-10 h-10 flex items-center justify-center">
                            <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1.22571 7.22559H13.7257M13.7257 7.22559L7.72571 1.22559M13.7257 7.22559L7.72571 13.2256" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </span>
                    </a>
                <?php endif; ?>
            </div>

            <div class="max-w-[50%]">
                <?php $about_img = get_field('about_image'); ?>
                <img class="mx-auto md:mx-0" src="<?php echo esc_url($about_img['url']); ?>" alt="<?php echo esc_attr($about_img['alt']); ?>">
            </div>

        </div>
    </div>
</section>