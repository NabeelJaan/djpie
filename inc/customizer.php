<?php

/*
==============
TypoGraphy
==============
*/

add_action('customize_register', 'simpleBlog_customizer_settings');

function simpleBlog_customizer_settings($wp_customize) {
    $wp_customize->add_panel('global_panel', array(
        'title' => 'Global',
        'priority' => 50,
    ));

    $wp_customize->add_section('typography_colors_section', array(
        'title' => 'Colors',
        'panel' => 'global_panel',
    ));

    // Add settings and controls for color options
    $color_settings = [
        'primary_color' => ['#131b24', 'Primary Color'],
        'background_color' => ['#F0F4F9', 'Background Color'],
        'headings_color' => ['#000000', 'Headings'],
        'links_color' => ['#304ddb', 'Links Color'],
        'paragraph_color' => ['#314351', 'Body Color (White Bg)'],
        'pWithDarkBg_color' => ['#314351', 'Body Color (Dark Bg)'],
    ];

    foreach ($color_settings as $id => $value) {
        $wp_customize->add_setting($id . '_setting', array(
            'default' => $value[0],
            'sanitize_callback' => 'sanitize_hex_color',
        ));

        $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, $id . '_control', array(
            'label' => $value[1],
            'section' => 'typography_colors_section',
            'settings' => $id . '_setting',
        )));
    }

    // Section for Heading sizes within the Typography panel
    $wp_customize->add_section('typography_heading_sizes_section', array(
        'title' => 'Headings',
        'panel' => 'global_panel',
    ));

    // Settings and controls for heading font sizes
    $heading_settings = [
        'h1_font_size_setting' => ['40px', 'H1 Font Size'],
        'h2_font_size_setting' => ['36px', 'H2 Font Size'],
        'h3_font_size_setting' => ['32px', 'H3 Font Size'],
        'h4_font_size_setting' => ['28px', 'H4 Font Size'],
        'h5_font_size_setting' => ['24px', 'H5 Font Size'],
        'h6_font_size_setting' => ['20px', 'H6 Font Size'],
    ];

    foreach ($heading_settings as $id => $value) {
        $wp_customize->add_setting($id . '_setting', array(
            'default' => $value[0],
            'sanitize_callback' => 'sanitize_text_field',
        ));

        $wp_customize->add_control($id . '_control', array(
            'label' => $value[1],
            'section' => 'typography_heading_sizes_section',
            'type' => 'text',
            'settings' => $id . '_setting',
        ));
    }
}



    /*
    ========================
    Footer Settings
    ========================
    */

add_action('customize_register', 'sb_footer_customizer_settings');

function sb_footer_customizer_settings($wp_customize) {

    $wp_customize->add_panel('footer_panel', array(
        'title' => 'Footer Options',
        'priority' => 60,
    ));

    // Footer 1 Logo Section
    $wp_customize->add_section('footer1_logo_section', array(
        'title' => 'Footer Logo',
        'panel' => 'footer_panel',
    ));

    $wp_customize->add_setting('footer1_logo_setting', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'footer1_logo_control', array(
        'label' => 'Upload Footer Logo',
        'section' => 'footer1_logo_section',
        'settings' => 'footer1_logo_setting',
    )));

    // Footer 1 About Text Section
    $wp_customize->add_section('footer1_about_text_section', array(
        'title' => 'Footer About Text',
        'panel' => 'footer_panel',
    ));

    $wp_customize->add_setting('footer1_about_text_setting', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('footer1_about_text_control', array(
        'label' => 'Footer About Text Heading',
        'section' => 'footer1_about_text_section',
        'type' => 'text',
        'settings' => 'footer1_about_text_setting',
    ));

    // Footer 1 Social Icons Section
    $wp_customize->add_section('footer1_social_icons_section', array(
        'title' => 'Footer Social Icons',
        'panel' => 'footer_panel',
    ));

    $social_icons1 = array(
        'footer1_facebook' => 'Facebook Link',
        'footer1_twitter' => 'Twitter Link',
        'footer1_linkedin' => 'LinkedIn Link',
        'footer1_instagram' => 'Instagram Link',
    );

    foreach ($social_icons1 as $icon => $label) {
        $wp_customize->add_setting($icon . '_text_setting', array(
            'default' => '',
            'sanitize_callback' => 'sanitize_text_field',
        ));

        $wp_customize->add_control($icon . '_text_control', array(
            'label' => $label,
            'section' => 'footer1_social_icons_section',
            'type' => 'text',
            'settings' => $icon . '_text_setting',
        ));
    }

    // Footer Recent Posts Section
    $wp_customize->add_section('footer1_recent_post_section', array(
        'title' => 'Footer Recent Post Heading',
        'panel' => 'footer_panel',
    ));

    $wp_customize->add_setting('footer1_recent_post_heading_setting', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('footer1_recent_post_heading_control', array(
        'label' => 'Footer Recent Post Heading',
        'section' => 'footer1_recent_post_section',
        'type' => 'text',
        'settings' => 'footer1_recent_post_heading_setting',
    ));

    // Footer Menu heading
    $wp_customize->add_section('footer1_menu_section', array(
        'title' => 'Footer Menu Heading',
        'panel' => 'footer_panel',
    ));

    $wp_customize->add_setting('footer1_menu_heading_setting', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('footer1_menu_heading_control', array(
        'label' => 'Footer Menu Heading',
        'section' => 'footer1_menu_section',
        'type' => 'text',
        'settings' => 'footer1_menu_heading_setting',
    ));

    // Footer copy right section
    $wp_customize->add_section('footer1_copy_right_section', array(
        'title' => 'Copy Right',
        'panel' => 'footer_panel',
    ));

    $wp_customize->add_setting('footer1_copy_right_setting', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('footer1_copy_right_heading_control', array(
        'label' => 'copy right text',
        'section' => 'footer1_copy_right_section',
        'type' => 'text',
        'settings' => 'footer1_copy_right_setting',
    ));
}