<?php
/**
 * Human Academy Unofficial Theme Setting
 * Author:Raisuke Uchino at Shinjyuku Devision
 * Note:このテーマは学習用に作成しているため、予期しない動作が起こる場合があります
 **/


//テーマの基本設定
add_action( 'after_setup_theme', 'theme_setup' );

function theme_setup(){
    //言語の設定
    load_theme_textdomain('human', get_template_directory() . '/languages');
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'responsive-embeds' );
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );
    //投稿フォーマットを使用する場合はsingle.phpに条件分岐が必要
    //add_theme_support( 'post-formats', array( 'aside', 'gallery' ) );
}

//絵文字機能を削除
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );

//Block表示のCSSを一旦削除。スピード重視のためfile_get_contentsで読み出しをする
function mytheme_enqueue() {
    wp_dequeue_style( 'wp-block-library' );
}
add_action( 'wp_enqueue_scripts', 'mytheme_enqueue' );

//SVGをメディアに対応
function custom_mime_types( $mimes ) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter( 'upload_mimes', 'custom_mime_types' );

//メニューの設定に関しては下記のファイルに記載しています。
//メニューエリアの追加ができます
include ('inc/function/menu.php');

//追加設定ページ
//テーマに管理画面項目を追加する設定をしています
include ('inc/function/options.php');




