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
                <div class="page-main" id="pg-news">
                  <div class="main-container">
                    <div class="main-wrapper">
                      <div class="newsLists">
<?php
if  ( have_posts() ):
  while ( have_posts() ) : the_post();
      get_template_part( 'content-archive' );
  endwhile;
endif;
?>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
<?php get_footer(); ?>
</body>
</html>
