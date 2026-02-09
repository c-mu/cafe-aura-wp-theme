<?php get_header(); ?>

<main>
    <section id="home" class="hero">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top.jpg" alt="AURAのトップ画像">
    </section>
    <section class="about">
        <div class="container">
            <h2>ABOUT</h2>
            <p>「AURA」は、日常を昇華させる「一杯の芸術」を追求しています。<br>
                世界中から厳選した希少なシングルオリジンと、<br>
                奥深いハウスブレンドが織りなす極上の風味をどうぞ。</p>
            <p>また、厳選素材で丁寧に仕立てた季節のケーキが、洗練された時間に寄り添います。<br>
                感性を満たす静かな休息の場所、それが'AURA'です。</p>
        </div>
    </section>
    <section id="menu" class="menu">
        <div class="container">
            <h2>MENU</h2>
            <table>
                <tr>
                    <td>SPECIALTY</td>
                    <td>ハウスブレンド 'AURA'</td>
                    <td>¥650</td>
                </tr>
                <tr>
                    <td>SINGLE ORIGIN</td>
                    <td>本日のシングルオリジン（ハンドドリップ）</td>
                    <td>¥850</td>
                </tr>
                <tr>
                    <td>ESPRESSO</td>
                    <td>クラシック・ラテ（Hot/Iced）</td>
                    <td>¥700</td>
                </tr>
                <tr>
                    <td>ESPRESSO</td>
                    <td>マキアート・ノワール</td>
                    <td>¥800</td>
                </tr>
                <tr>
                    <td>TEA</td>
                    <td>ファイン・リーフ・ティー</td>
                    <td>¥750</td>
                </tr>
                <tr>
                    <td>SWEETS</td>
                    <td>季節のタルト</td>
                    <td>¥950</td>
                </tr>
                <tr>
                    <td>SWEETS</td>
                    <td>ニューヨークチーズケーキ</td>
                    <td>¥880</td>
                </tr>
                <tr>
                    <td>SWEETS</td>
                    <td>クラフト・ソフトクッキー（2種）</td>
                    <td>¥480</td>
                </tr>
                <tr>
                    <td>COLD PRESS</td>
                    <td>フレッシュ・ジュース</td>
                    <td>¥900</td>
                </tr>
                <tr>
                    <td>NON-ALCOHOL</td>
                    <td>ボタニカル・モクテル</td>
                    <td>¥850</td>
                </tr>
            </table>
        </div>
    </section>
    <section id="access" class="access">
        <div class="container">
            <h2>ACCESS</h2>
            <p class="access-info">
                〒810-0001 福岡県福岡市中央区天神2丁目（天神駅 徒歩3分）<br>
                営業時間：10:00 - 20:00（定休日：火曜日）
            </p>
            <div class="map-container">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3323.5282844464014!2d130.39977727621752!3d33.59159494191251!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x35419191884faac9%3A0x5d50dc331a824a89!2z44Ki44Kv44Ot44K556aP5bKh!5e0!3m2!1sja!2sjp!4v1761918102548!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </section>

    <!-- NEWS -->
    <section id="news" class="news-section">
        <div class="container">
            <h2>NEWS</h2>
            <ul>
            <?php
                $args = array(
                'post_type'      => 'post',
                'posts_per_page' => 3,
                );

                $the_query = new WP_Query($args);
                
                if ($the_query->have_posts()) :
                while ($the_query->have_posts()) : $the_query->the_post();
            ?>            
                <li>
                <span class="date"><?php echo get_the_date('Y.m.d'); ?></span>
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </li>
                <?php
                endwhile;
                wp_reset_postdata();
                else :
            ?>
                <li>お知らせはありません。</li>
            <?php endif; ?>
            </ul>
        </div>
    </section>

</main>
<aside id="reserve">
    <div class="container">
        <h2>INFORMATION</h2>
        <p>静寂な空間で、思考はクリアになる。</p>
        <p>AURAは、喧騒から離れ、本物のアートとしてのコーヒー体験に浸るための場所です。</p>
        <p>次のインスピレーションを求める、あなたをお待ちしております。</p>
        <figure>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon.png" alt="テイクアウト用コーヒーカップのアイコン">
        </figure>
        <div class="btn">
            <a href="">予約はこちら</a>
        </div>
    </div>
</aside>

<?php get_footer(); ?>