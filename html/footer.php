<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <meta name="keywords" content="共通キーワード" />
  <meta name="description" content="共通ディスクリプション" />
  <title>PACIFIC MALL DEVELOPMENT</title>
  <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/common/favicon.ico" />
  <link href="https://fonts.googleapis.com/earlyaccess/notosansjapanese.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Vollkorn:400i" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/styles.css" />
  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery-3.3.1.min.js"></script>
  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/bundle.js"></script>
</head>
<body>
<?php get_header(); ?>
<?php if( ! is_front_page() ): ?>
            </div> 
          </div>
        </main>
      </div>
    </div>
<?php endif; ?>
    <footer class="footer" id="footer">
      <div class="footerContents">
        <div class="footerContents-contact">
          <div class="enterprise-logo">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/logo-footer.svg" alt="PACIFIC MALL DEVELOPMENT" />
          </div>
          <div class="enterprise-detail">
            <p class="name">パシフィックモール開発株式会社</p>
            <p class="address">
              東京都千代田区大手町0-1-2<br />
              パシフィックモールビルディング18F 
            </p>
          </div>
        </div>
        <div class="footerContents-sitemap">
          <nav class="footer-nav">
        <?php
        wp_nav_menu(
            array (
              'theme_location' => 'place_footer',
              'container' => false,
            )
        );
        ?>
            <!-- <ul class="menu"> 
              <li class="menu-item">
                <a class="nav-link" href="#">企業情報</a>
              </li>
              <li class="menu-item">
                <a class="nav-link" href="#">会社概要</a>
              </li>
              <li class="menu-item">
                <a class="nav-link" href="#">事業紹介</a>
              </li>
              <li class="menu-item">
                <a class="nav-link" href="#">沿革</a>
              </li>
              <li class="menu-item">
                <a class="nav-link" href="#">店舗情報</a>
              </li>
              <li class="menu-item">
                <a class="nav-link" href="#">地域貢献活動</a>
              </li>
              <li class="menu-item">
                <a class="nav-link" href="#">ニュースリリース</a>
              </li>
              <li class="menu-item">
                <a class="nav-link" href="#">お問い合わせ</a>
              </li>
            </ul>-->
          </nav>
        </div>
      </div>
      <p class="copyright">
        <small class="copyright-text">&#169; 2019 PACIFIC MALL DEVELOPMENT CO.,LTD.</small>
      </p>
    </footer>
  </div><!-- /.container -->
<?php wp_footer(); ?>
</body>
</html>
