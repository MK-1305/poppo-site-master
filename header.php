<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>poppo-online-store</title>
    <?php wp_head(); ?>
  </head>
  <body>
    <!-- ローディング画面 -->
    <div id="loading">
      <div class="spinner">
        <div class="cube1"></div>
        <div class="cube2"></div>
      </div>
    </div>

    <header class="header">
      <div class="header-content">
        <div class="header-logo">
          <a href="">
            <img src="<?php echo get_template_directory_uri(); ?>/images/POPPO.png" alt="logo">
          </a>
        </div>
        <nav class="header-nav">
          <ul>
            <!-- 服のカテゴリーにする -->
            <li><a href="https://poppo.fashionstore.jp/categories/5194314">tops</a></li>
            <li><a href="https://poppo.fashionstore.jp/categories/5194952">bottoms</a></li>
            <li><a href="https://poppo.fashionstore.jp/categories/5194465">one piece</a></li>
            <li><a href="https://poppo.fashionstore.jp/categories/5299106">jacket</a></li>
          </ul>
          <div class="hamburger">
            <div class="bar"></div>
            <div class="bar"></div>
            <div class="bar"></div>
          </div>
        </nav>
      </div>
    </header>