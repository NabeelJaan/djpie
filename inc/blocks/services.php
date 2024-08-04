<section class="bg-black pb-[112px] pt-[154px] our-services">
        <div class="container max-w-[1260px] mx-auto">
            <div class="text-white">
                <div class="flex mb-[81px]">

                    <div class="max-w-[49%]">
                        <h2 class="text-[90px] font-semibold"> 
                            <?php the_field('s_heading'); ?>
                        </h2>
                        <p class="font-semibold text-[22px] leading-[30px] mb-[24px]">
                            <?php the_field('s_description'); ?>
                        </p>
                    </div>

                </div>
            </div>

            <div class="text-white justify-center">
                <div class="flex gap-[48px] mb-[46px] justify-center">

                <?php 
                    if( have_rows('services') ) : 
                        while( have_rows('services') ) : the_row();
                ?>
                    <div class="border w-[388px] h-[374px] p-[16px] rounded-[32px] border-[#525252]">
                        <div class="border rounded-2xl w-[356px] h-[342px] bg-[#141414] border-[#141414]">
                            
                            <?php $s_icons = get_field('icon'); ?>
                            <img 
                                class="border rounded-[11px] w-[59px] h-[59px] ml-6 mt-6 p-[14px]" 
                                src="<?php echo esc_url($s_icons['url']); ?>"
                                alt="<?php echo esc_attr($s_icons['alt']); ?>"
                            />

                            <h2 class="font-semibold text-[28px] leading-10 mt-[16px] ml-6">
                                <?php the_sub_field('heading'); ?>
                            </h2>
                            <p class="leading-[25px] font-normal text-[16px] mt-[18px] ml-[24px]">
                                <?php the_sub_field('description'); ?>
                            </p>

                        </div>
                    </div>

                <?php
                        endwhile; 
                    endif;
                ?>

                </div>
            </div>
        </div>
    </section>