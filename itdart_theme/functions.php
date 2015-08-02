<?php

//抜粋
function new_excerpt_more($post) {
	return ' <a href="'. get_permalink($post->ID) . '">' . '(Read more...)' . '</a>';	
}	
add_filter('excerpt_more', 'new_excerpt_more');

//アイキャッチ
add_theme_support( 'post-thumbnails' );

//カスタムメニュー
add_theme_support( 'menus' );
register_nav_menu( 'header', 'Header Menu' );


//ウィジェット複数対応
register_sidebars(1,
    array(
    'name'=>'トップ) ハイライト',
    'id' => 'topbox',
    'before_widget' => '',
    'after_widget' => '',
    'before_title' => '<span class="nonedisplay">',
    'after_title' => '</span>',
    ));
register_sidebars(1,
    array(
    'name'=>'フッター) 左',
    'id' => 'footer_1',
    'before_widget' => '<div class="widgetbox">',
    'after_widget' => '</div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>',
    ));
register_sidebars(1,
    array(
    'name'=>'フッター) 中央',
    'id' => 'footer_2',
    'before_widget' => '<div class="widgetbox">',
    'after_widget' => '</div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>',
    ));
register_sidebars(1,
    array(
    'name'=>'フッター) 右',
    'id' => 'footer_3',
    'before_widget' => '<div class="widgetbox">',
    'after_widget' => '</div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>',
    ));
register_sidebars(1,
    array(
    'name'=>'サイドバー',
    'id' => 'sidebar',
    'before_widget' => '<div class="widgetbox">',
    'after_widget' => '</div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>',
    ));

/* 投稿一覧にスラッグ追加 */
function add_posts_columns_slug($columns) {
	$columns['slug'] = 'Slug';
	return $columns;
}
function add_posts_columns_slug_row($column_name, $post_id) {
	if( 'slug' == $column_name ) {
		$slug = get_post($post_id) -> post_name;
		echo $slug;
	}
}
add_filter( 'manage_pages_columns', 'add_posts_columns_slug' );
add_action( 'manage_pages_custom_column', 'add_posts_columns_slug_row', 10, 2 );

?>