<?php

    add_action('acf/init', 'sb_acf_blocks');
    
    function sb_acf_blocks() {

        // Check function exists.
        if( function_exists('acf_register_block_type') ) {

            // hero Section
            acf_register_block_type([
                "name" => __("hero section"),
                "title" => __("hero Section"),
                "description" => __("hero Section on home page"),
                "render_template" => "inc/blocks/hero.php",
                "category" => "simpleblog",
                "icon" => "block-default",
                "keywords" => ["hero Section", ""],
            ]);

            // about
            acf_register_block_type([
                "name" => __("About"),
                "title" => __("about"),
                "description" => __("about on home page"),
                "render_template" => "inc/blocks/about.php",
                "category" => "simpleblog",
                "icon" => "block-default",
                "keywords" => ["about", ""],
            ]);

            // Our Services
            acf_register_block_type([
                "name" => __("Our Services"),
                "title" => __("Our Services"),
                "description" => __("Our Services on home page"),
                "render_template" => "inc/blocks/services.php",
                "category" => "simpleblog",
                "icon" => "block-default",
                "keywords" => ["Services", ""],
            ]);

            // Our Work
            acf_register_block_type([
                "name" => __("Our Work"),
                "title" => __("Our Work"),
                "description" => __("Our Work on home page"),
                "render_template" => "inc/blocks/our-work.php",
                "category" => "simpleblog",
                "icon" => "block-default",
                "keywords" => ["PostByCategory", ""],
            ]);

            // Our blogs
            acf_register_block_type([
                "name" => __("our Blog"),
                "title" => __("our Blog"),
                "description" => __("our Blog on home page"),
                "render_template" => "inc/blocks/our-blog.php",
                "category" => "simpleblog",
                "icon" => "block-default",
                "keywords" => ["our Blog", ""],
            ]);

            // Testimonials
            acf_register_block_type([
                "name" => __("Testimonials"),
                "title" => __("Testimonials"),
                "description" => __("Testimonials on home page"),
                "render_template" => "inc/blocks/testimonials.php",
                "category" => "simpleblog",
                "icon" => "block-default",
                "keywords" => ["Testimonials", ""],
            ]);
            // team
            acf_register_block_type([
                "name" => __("team"),
                "title" => __("team"),
                "description" => __("team on home page"),
                "render_template" => "inc/blocks/team.php",
                "category" => "simpleblog",
                "icon" => "block-default",
                "keywords" => ["team", ""],
            ]);
            // faq
            acf_register_block_type([
                "name" => __("faq"),
                "title" => __("faq"),
                "description" => __("faq on home page"),
                "render_template" => "inc/blocks/faq.php",
                "category" => "simpleblog",
                "icon" => "block-default",
                "keywords" => ["faq", ""],
            ]);
        }
    }

?>