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
                        <a class="news-link" href="<?php the_permalink(); ?>">
                          <div class="news-body">
                            <time class="release"><?php the_time('Y.m.d'); ?></time>
                            <p class="title"><?php the_title(); ?></p>
                          </div>
                        </a>
</body>
</html>
