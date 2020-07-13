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
$common_pages = new WP_Query( $args );
if( $common_pages->have_posts() ): 
    while( $common_pages->have_posts() ): $common_pages->the_post();
?>
                    <li class="common-item">
                      <a class="common-link" href="<?php the_permalink(); ?>">
                        <div class="common-image"><?php the_post_thumbnail(); ?></div>
                        <div class="common-body">
                          <p class="name"><?php the_title(); ?></p>
                          <p class="caption"><?php echo get_the_excerpt(); ?></p>
                          <div class="buttonBox">
                            <button type="button" class="seeDetail">MORE</button>
                          </div>
                        </div>
                      </a>
                    </li>
<?php
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