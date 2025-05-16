<?php
//メニューの設定
//ここに必要となるメニューの名称を配列で作成すると、外観→メニューに設定項目が追加される
register_nav_menus( array(
    'global_nav' => 'グローバルメニュー',
    'footer_nav' => 'フッターメニュー',
    'aside_nav' => 'サイドメニュー',
    'aside02_nav' => 'サイドメニュー02',
) );
