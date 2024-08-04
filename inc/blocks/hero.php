

<section class="hero-sec bg-black pt-[348px] pb-[53px]">
    <div class="container max-w-[1244px] mx-auto">
        <div>
            <div class="text-white text-center">
                <h1 class="text-[98px] leading-[98px] mb-[43px]">
                    <?php the_field('hero_heading'); ?>
                </h1>
                <p class="text-center w-[49%] mx-auto ">
                    <?php the_field('hero_description'); ?>
                </p>
            </div>
            <div class="mx-auto justify-center flex mt-[53px]">
                <?php 
                    $hero__btn = get_field('hero_see_more_button');
                    if( $hero__btn ) :
                ?>  
                    <a href="<?php echo esc_url( $hero__btn['url'] ); ?>" target="<?php echo esc_attr( $hero__btn['target'] ); ?>" class="flex border rounded-[80px] text-[#0097B2] w-[200px] h-[52px] items-center justify-center border-[#0097B2]">
                        <span class="ml-6">
                            <?php echo esc_html( $hero__btn['title'] ); ?>
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