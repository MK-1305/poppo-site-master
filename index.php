<?php get_header(); ?>
    <div class="scroll-wrap">
      <section>
        <div id="top" class="title">
          <h1>もっと、私らしく</h1>
        </div>
      </section>

      <section>
        <div class="text">
          <h2>About</h2>
          <p class="text-about">
            <span>poppoは</span><br>
            <span>あなたらしさを見つけられる</span><br>
            <span>そんなファッションサイト</span>
          </p>
        </div>
        <div class="img-wrap">
          <div class="img"></div>
        </div>
      </section>

      <section>
        <div class="text">
          <h2>Feature</h2>
          <p class="text-about">
            <span>国内外のトレンドを取り入れた</span><br>
            <span>多種多様なアイテムを</span><br>
            <span>いち早く揃えています</span>
          </p>
        </div>
        <div class="img-wrap">
          <div class="img"></div>
        </div>
      </section>

      <section>
        <div class="new-release">
          <h3>New release</h3>
          <p>12.16 アウターを追加しました</p>
          <p>12.14 トップスを追加しました</p>
          <p>12.11 ボトムスを追加しました</p>
        </div>
      </section>

      <section class="recommend">
        <div class="recommend-image">
          <img src="<?php echo get_template_directory_uri(); ?>/images/img1.jpg" alt="">
        </div>
          <div class="recommend-content">
            <h3>Recommend</h3>
            <ul class="recommend-thumbnails">
              <li><a href="https://poppo.fashionstore.jp/items/79507810"><img src="<?php echo get_template_directory_uri(); ?>/images/img1.jpg" alt=""></a></li>
              <li><a href="https://poppo.fashionstore.jp/items/79507702"><img src="<?php echo get_template_directory_uri(); ?>/images/img2.jpg" alt=""></a></li>
              <li><a href="https://poppo.fashionstore.jp/items/79645403"><img src="<?php echo get_template_directory_uri(); ?>/images/img3.jpg" alt=""></a></li>
              <li><a href="https://poppo.fashionstore.jp/items/79295873"><img src="<?php echo get_template_directory_uri(); ?>/images/img4.jpg" alt=""></a></li>
              <li><a href="https://poppo.fashionstore.jp/items/76606682"><img src="<?php echo get_template_directory_uri(); ?>/images/img5.jpg" alt=""></a></li>
              <li><a href="https://poppo.fashionstore.jp/items/79507860"><img src="<?php echo get_template_directory_uri(); ?>/images/img6.jpg" alt=""></a></li>
              <li><a href="https://poppo.fashionstore.jp/items/79079341"><img src="<?php echo get_template_directory_uri(); ?>/images/img7.jpg" alt=""></a></li>
              <li><a href="https://poppo.fashionstore.jp/items/79079220"><img src="<?php echo get_template_directory_uri(); ?>/images/img8.jpg" alt=""></a></li>
              <li><a href="https://poppo.fashionstore.jp/items/76578544"><img src="<?php echo get_template_directory_uri(); ?>/images/img9.jpg" alt=""></a></li>
            </ul>
          </div>
      </section>

      <section class="contact">
        <div class="contact-box">
          <form action="">
            <p class="contact-title">contact</p>

            <div class="input-box">
              <input type="text" placeholder="お名前" required>
            </div>
            
            <div class="input-box">
              <input type="text" placeholder="メールアドレス" required>
            </div>

            <div class="input-box">
              <input type="text" placeholder="件名" required>
            </div>
            
            <div class="input-box">
              <textarea name="内容" id="" cols="20" rows="5" placeholder="内容"></textarea>
            </div>

            <button type="submit" class="btn">送信</button>
          </form>
        </div>
        <div class="circle1"></div>
        <div class="circle2"></div>
        <div class="circle3"></div>
      </section>
    </div>
<?php get_footer(); ?>
