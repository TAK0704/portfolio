
<?php get_header(); ?>

      <div id="top">

        <div class="swiper-container">

          <h1>FORMOSA</h1>

            <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <img src="<?php echo get_template_directory_uri(); ?>/image/top1.jpg" alt="トップ画像">
                </div>
                <div class="swiper-slide">
                  <img src="<?php echo get_template_directory_uri(); ?>/image/top2.jpg" alt="トップ画像">
                </div>
                <div class="swiper-slide">
                  <img src="<?php echo get_template_directory_uri(); ?>/image/top3.jpg" alt="トップ画像">
                </div>
                <div class="swiper-slide">
                  <img src="<?php echo get_template_directory_uri(); ?>/image/top4.jpg" alt="トップ画像">
                </div>
            </div>

        </div>

      </div><!-- top -->

      <div id="about" class="content">
        <h2>About Me</h2>
        <div class="content_wrapper">
          <img src="<?php echo get_template_directory_uri(); ?>/image/profile.jpg" alt="プロフィール画像">
          <div class="text-box">
            <h3>平野<span>-HIRANO-</span></h3>
            <p>1994年7月4日東京生まれ、千葉育ち。県内高校卒業後、法政大学経営学部に進学。2017年秋から1年間、台湾に留学。大学卒業後はHAL東京夜間2年制に入学し、Webデザインを学ぶ。2020年卒業予定。2018年秋から派遣社員として勤務。<br><br>Web制作歴：1年半。デザインよりコーディング、プログラミングに関心<br>スキル：Illustrator、Photoshop、HTML、CSS、PHP、JavaScript、WordPress<br>趣味・特技：絵を描くこと、ディズニー、中国語、料理、バンド
            </p>
          </div>
        </div><!-- content_wrapper -->
      </div><!-- content -->

      <div id="works" class="content">
        <h2>Works</h2>
        <div class="content_wrapper works_wrapper">

          <div class="swiper-container2">

              <div class="swiper-wrapper">

                <?php if(have_posts()): while(have_posts()):the_post(); ?>

                <div class="swiper-slide slide2">
                  <div class="link_box">
                    <?php the_post_thumbnail(); ?>
                    <div class="text-box">
                      <h3><?php the_title(); ?></span></h3>
                      <p><?php the_excerpt(); ?></p>
                    </div>
                    <a href="<?php the_permalink(); ?>"></a>
                  </div><!-- link_box -->
                </div>

              <?php endwhile; endif; ?>

                <!-- <div class="swiper-slide slide2">
                  <div class="link_box">
                    <img src="http://placehold.jp/300x400.png" alt="プロフィール画像">
                    <div class="text-box">
                      <h3>タイトル<span>-title-</span></h3>
                      <p>内容説明内容説明内容説明内容説明内容説明内容説明内容説明内容説明内容説明内容説明内容説明内容説明内容説明内容説明内容説明内容説明内容説明内容説明内容説明内容説明内容説明内容説明内容説明内容説明内容説明内容説明内容説明内容説明内容説明内容説明内容説明内容説明内容説明内容説明内容説明内容説明内容説明内容説明内容説明内容説明内容説明内容説明内容説明内容説明内容説明内容説明内容説明内容説明内容説明内容説明内容説明内容説明内容説明内容説明内容説明内容説明内容説明内容説明内容説明内容説明内容説明内容説明内容説明内容説明内容説明内容説明内容説明内容説明内容説明内容説明内容説明内容説明内容説明内容説明内容説明内容説明内容説明内容説明内容説明内容説明内容説明内容説明内容説明内容説明内容説明内容説明内容説明内容説明内容説明内容説明内容説明内容説明内容説明内容説明内容説明内容説明内容説明内容説明内容説明内容説明内容説明内容説明内容説明内容説明内容説明内容説明内容説明内容説明内容説明内容説明内容説明内容説明内容説明内容説明内容説明内容説明内容説明内容説明内容説明内容説明内容説明内容説明内容説明内容説明内容説明内容説明内容説明内容説明内容説明内容説明内容説明内容説明内容説明内容説明内容説明内容説明内容説明内容説明内容説明内容説明内容説明内容説明内容説明内容説明内容説明内容説明内容説明内容説明内容説明内容説明内容説明内容説明内容説明内容説明内容説明内容説明内容説明内容説明内容説明内容説明内容説明内容説明内容説明内容説明内容説明内容説明内容説明内容説明内容説明内容説明内容説明内容説明内容説明内容説明内容説明内容説明内容説明内容説明内容説明内容説明内容説明内容説明内容説明内容説明内容説明内容説明内容説明内容説明</p>
                      <a href="<?php echo home_url('/'); ?>post.php"></a>
                    </div>
                  </div>
                </div> -->

              </div>

              <div class="swiper-pagination"></div>

              <div class="swiper-button-prev"></div>
              <div class="swiper-button-next"></div>

          </div>

        </div><!-- content_wrapper -->
      </div><!-- content -->

      <div id="hobby" class="content">
        <h2>Hobby</h2>
        <div class="content_wrapper">

          <div class="img_wrapper">

            <?php
              $args = array(
                'post_type' => 'hobby', // 投稿タイプを指定
                'posts_per_page'   => 12 // 表示するページ数
                );
              $the_query = get_posts( $args );
              foreach ( $the_query as $post ) : setup_postdata( $post );
            ?>

            <div class="img_block">
              <?php the_post_thumbnail(); ?>
              <div class="shadow"></div>
              <div class="hobby_txt">
                <h5><?php the_title(); ?></h5>
                <p><?php the_content(); ?></p>
              </div>
            </div>

          <?php endforeach; ?>
          <?php wp_reset_postdata(); ?>

          </div><!-- img_wrapper -->

        </div><!-- content_wrapper -->
      </div><!-- content -->

      <div id="contact" class="content">
        <h2>Contact</h2>
        <div class="content_wrapper">

          <form method="post">

            <?php
              echo do_shortcode('[mwform_formkey key="133"]');
            ?>

            <!-- <div class="item">
              <label class="label">お名前</label>
              <input class="inputs" type="text" name="name">
            </div>

            <div class="item">
              <label class="label">メールアドレス</label>
              <input class="inputs" type="email" name="email">
            </div>

            <div class="item">
              <label class="label">お問い合わせ内容</label>
              <textarea class="inputs" name="inquiry"></textarea>
            </div>

            <div class="btn-area">
              <input type="submit" value="送信する"><input type="reset" value="取り消す">
            </div> -->

          </form>

        </div><!-- content_wrapper -->
      </div><!-- content -->

<?php get_footer(); ?>