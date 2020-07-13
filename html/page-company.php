<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <meta name="keywords" content="共通キーワード" />
  <meta name="description" content="共通ディスクリプション" />
  <title>PACIFIC MALL DEVELOPMENT</title>
  <link rel="shortcut icon" href="./assets/images/common/favicon.ico" />
  <link href="https://fonts.googleapis.com/earlyaccess/notosansjapanese.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Vollkorn:400i" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="./assets/css/styles.css" />
  <script type="text/javascript" src="./assets/js/jquery-3.3.1.min.js"></script>
  <script type="text/javascript" src="./assets/js/bundle.js"></script>
</head>
<body>
<?php get_header(); ?>
			  <div class="page-inner">
          <div class="page-main" id="pg-common">
            <ul class="commons">
<?php
$parent_id = get_the_ID();
$args = array(
    'posts_per_page' => -1,
    'post_type'  => 'page',
    'orderby' => 'menu_order',
    'order' => 'ASC',
    'post_parent' => $parent_id,
);
$common_pages = get_child_pages();
if( $common_pages->have_posts() ): 
    while( $common_pages->have_posts() ): $common_pages->the_post();
        get_template_part( 'content-common' );
    endwhile;
    wp_reset_postdata();
  endif;
  ?>
            </ul>
          </div>
        </div>
<?php get_footer(); ?>
</body>
</html>