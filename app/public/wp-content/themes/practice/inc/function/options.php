<?php
//テーマ全体の管理画面項目の追加
if( function_exists('acf_add_options_page') ) {
    acf_add_options_page(array(
        'page_title' 	=> 'テーマ共通設定',
        'menu_title'	=> 'テーマ設定',
        'menu_slug' 	=> 'theme-settings',
        'capability'	=> 'edit_posts',
        'redirect'		=> false
    ));

    acf_add_options_sub_page(array( //サブページ
        'page_title'    => 'ヘッダー設定',
        'menu_title'    => 'ヘッダー',
        'menu_slug'     => 'theme-settings-header',
        'capability'    => 'edit_posts',
        'parent_slug'   => 'theme-settings', //親ページのスラッグ
        'position'  => false,
    ));
    acf_add_options_sub_page(array( //サブページ
        'page_title'    => 'フッター設定',
        'menu_title'    => 'フッター',
        'menu_slug'     => 'theme-settings-footer',
        'capability'    => 'edit_posts',
        'parent_slug'   => 'theme-settings', //親ページのスラッグ
        'position'  => false,
    ));
    acf_add_options_sub_page(array( //サブページ
        'page_title'    => 'トップページ設定',
        'menu_title'    => 'トップページ',
        'menu_slug'     => 'theme-settings-top',
        'capability'    => 'edit_posts',
        'parent_slug'   => 'theme-settings', //親ページのスラッグ
        'position'  => false,
    ));
}
