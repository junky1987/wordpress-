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
              <div class="page-inner full-width">
                <div class="page-main" id="pg-newsDetail">
                  <div class="main-container">
                    <div class="main-wrapper">
<?php
if ( have_posts() ):
  while ( have_posts() ) : the_post();
?>
                      <div class="news">
                        <time class="time"><?php the_time( 'Y.m.d' ); ?></time>
                        <p class='title'><?php the_title(); ?></p>
                        <div class="news-body">
                          <?php the_content(); ?>
                        </div>
                      </div>
                      <div class="more-news">
                        <div class="next">
                          <a class="another-link" href="#">NEXT</a>
                        </div>
                        <div class="prev">
                          <a class="another-link" href="#">PREV</a>
                        </div>
                      </div>
<?php
  endwhile;
endif;
?>
                    </div>
                  </div>
                </div>
              </div>
<?php get_footer(); ?>
</body>
</html>