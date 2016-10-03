<?php
/**
 * Bootstrap Basic theme
 * 
 * @package Feminea
 */

require get_template_directory() . '/inc/customizer.php';

require get_template_directory() . '/inc/BootstrapBasicMyWalkerNavMenu.php';

function feminea_customize_register( $wp_customize ) {
    $wp_customize->add_setting( 'feminea_logo' ); // Add setting for logo uploader
    $wp_customize->add_setting( 'feminea_header_background' ); // Add setting for logo uploader
    $wp_customize->add_setting( 'feminea_footer_background' ); // Add setting for logo uploader
    $wp_customize->add_setting( 'feminea_main_header_background' ); // Add setting for logo uploader
    $wp_customize->add_setting( 'feminea_titre_site' ); // Add setting for logo uploader
         
    // Add control for logo uploader (actual uploader)
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'feminea_logo', array(
        'label'    => __( 'Logo', 'feminea' ),
        'section'  => 'title_tagline',
        'settings' => 'feminea_logo',
    ) ) );

    // Add control for header background uploader (actual uploader)
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'feminea_header', array(
        'label'    => __( 'Header Background', 'feminea' ),
        'section'  => 'title_tagline',
        'settings' => 'feminea_header_background',
    ) ) );

    // Add control for footer background uploader (actual uploader)
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'feminea_footer', array(
        'label'    => __( 'Footer Background', 'feminea' ),
        'section'  => 'title_tagline',
        'settings' => 'feminea_footer_background',
    ) ) );

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'feminea_main_header_background', array(
        'label'    => __( 'Main Header Background', 'feminea' ),
        'section'  => 'title_tagline',
        'settings' => 'feminea_main_header_background',
    ) ) );

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'feminea_titre_site', array(
        'label'    => __( 'Titre Site', 'feminea' ),
        'section'  => 'title_tagline',
        'settings' => 'feminea_titre_site',
    ) ) );
}

add_action( 'customize_register', 'feminea_customize_register' );

register_nav_menus( array(
        'Top' => 'Navigation principale',
    ) 
);

register_nav_menus( array(
        'Footer' => 'Navigation footer',
    ) 
);

function my_function_admin_bar(){
    return false;
}
add_filter( 'show_admin_bar' , 'my_function_admin_bar');

?>