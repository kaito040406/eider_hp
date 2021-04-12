<?php

/**
 * <title>タグを出力する
 */
add_theme_support('title-tag');


/**
 * タイトルタグの区切り文字をエン・ダッシュから縦線に変更する
 */
add_filter('document_title_separator', 'my_document_title_separator');
function my_document_title_separator($separator)
{
    $separator = '|';
    return $separator;
}



/**
 * アイキャッチ画像を使用可能にする
 */
add_theme_support('post-thumbnails');

// function custom_shortcode_atts_wpcf7_filter( $out, $pairs, $atts ) {
//     $my_attr = 'destination-email';

//     if ( isset( $atts[$my_attr] ) ) {
//         $out[$my_attr] = $atts[$my_attr];
//     }

//     return $out;
// }






/*
** カスタム投稿タイプ（お知らせ）
*/

function post_has_archive($args, $post_type)
{
    if ('post' == $post_type) {
        $args['rewrite'] = true;
        $args['has_archive'] = 'news';
        $args['label'] = 'お知らせ';
    }
    return $args;
}
add_filter('register_poat_type_args', 'post_has_archive', 10,2);


function cpt_register_news()
{
    $labels = [
        "singular_name" => "news",
        "edit_item" => "news",
    ];
    $args = [
        "label" => "お知らせ",
        "labels" => $labels,
        "description" => "",
        "public" => true,
        "show_in_rest" => true,
        "rest_base" => "",
        "rest_controller_class" => "WP_REST_Posts_Controller",
        "has_archive" => true,
        "delete_with_user" => false,
        "exclude_from_search" => false,
        "map_meta_cap" => true,
        "hierarchical" => true,
        "rewrite" => ["slug" => "news", "with_front" => true],
        "query_var" => true,
        "menu_position" => 5,
        "supports" => ["title", "editor", "thumbnail", 'author'],
    ];
    register_post_type("news", $args);
}
add_action('init', 'cpt_register_news');





function column_posts($query)
{
    if (is_admin() || !$query->is_main_query()) {
        return;
    }
    if ($query->is_post_type_archive('news')) {
        $query->set('posts_per_page', '10');
        return;
    }
    if ($query->is_archive()) {
        $query->set('posts_per_page', '9');
        return;
    }
}
add_action('pre_get_posts', 'column_posts');

/*pagenation*/
function the_pagination()
{
    global $wp_query;
    $bignum = 999999999;
    if ($wp_query->max_num_pages <= 1)
        return;
    echo '<nav class="pagination">';
    echo paginate_links(array(
        'base' => str_replace($bignum, '%#%', esc_url(get_pagenum_link($bignum))),
        'format' => '',
        'current' => max(1, get_query_var('paged')),
        'total' => $wp_query->max_num_pages,
        'prev_text' => '&larr;',
        'next_text' => '&rarr;',
        'type' => 'list',
        'end_size' => 3,
        'mid_size' => 3
    ));
    echo '</nav>';
}
