<?php

//テーマサポート
function custom_theme_support() {
    add_theme_support( 'html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',    
        ) );
    add_theme_support( 'title-tag');
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'wp-block-styles' );
    register_nav_menus( array(
        'footer_nav'=>esc_html__('footer navigation', 'hamburger_wp'),
        'category_nav'=>esc_html__('category navigation','hamburger_wp'),
    ));
    }
    add_action( 'after_setup_theme', 'custom_theme_support' );

    //タイトル出力
    function hamburgerwp_title( $title ) {
        if ( is_front_page() && is_home() ) { //トップページなら
            $title = get_bloginfo( 'name', 'display' );
        } elseif ( is_singular() ) { //シングルページなら
            $title = single_post_title( '', false );
        }
            return $title;
        }
    add_filter( 'pre_get_document_title', 'hamburgerwp_title' );

    function hamburgerwp_script() {
        $locale = get_locale();
        $locale = apply_filters( 'theme_locale', $locale, 'hamburgerwp' );
        if( $locale == 'ja' ) {
            wp_enqueue_style( 'mplus1p', '//fonts.googleapis.com/earlyaccess/mplus1p.css', array() );
            }
        wp_enqueue_style( 'Roboto', 'https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap', array() );
        wp_enqueue_style( 'mplus', 'https://mplus-fonts.sourceforge.jp/webfonts/basic_latin/mplus_webfonts.css', array() );
        wp_enqueue_style( 'mplus', 'https://mplus-fonts.sourceforge.jp/webfonts/general-j/mplus_webfonts.css', array() );
        wp_enqueue_style( 'fontawesome', 'https://use.fontawesome.com/releases/v5.14.0/css/all.css', array(), '5.14.0' );
        wp_enqueue_style( 'hamburgerwp', get_template_directory_uri() . '/scss/style.css', array(), '1.0.0' );
        wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css', array(), '1.0.0' );
        wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery-3.5.1.min.js', array(), '3.5.1', true );
        wp_enqueue_script( 'samplejs', get_template_directory_uri() . '/js/sample.js', array(), '1.0.0', true );
    }
    add_action( 'wp_enqueue_scripts', 'hamburgerwp_script' );
    
//　「カテゴリー：」を削除
    function custom_archive_title($title){
        $titleParts=explode(': ',$title);
        if($titleParts[1]){
            return $titleParts[1];
        }
        return $title;
    }
    add_filter('get_the_archive_title','custom_archive_title');

// コメント幅
if ( ! isset( $content_width ) ) {
    $content_width = 960;
};