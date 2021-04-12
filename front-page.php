<?php get_header(); ?>
<div class="news">
    <div class="container">
        <div class="newsx">
            <div class="news-title main-course-item">
                <h3>NEWS</h3>
                <p>ニュース</p>
            </div>
            <?php
            $args = array(
                'post_type' => 'news',
                'post_per_page' => 6, //件数
                'paged' => $paged
            );
            $the_query = new WP_Query($args);
            if ($the_query->have_posts()) :
            ?>
                <div class="news-mex">
                    <div class="news-me main-course-item">
                        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                            <a href="<?php bloginfo('url'); ?>/news">
                                <span class="date"><?php the_time('Y年m月d日'); ?></span>
                                <div class="flex">
                                    <h3 class="h3"><?php the_title(); ?></h3>
                                </div>
                            </a>
                        <?php endwhile; ?>
                    <?php else : ?>
                    <?php endif; ?>
                    </div>
                </div>
        </div>
    </div>
</div>

<div class="about">
    <div class="container">
        <div class="aboutx">
            <div class="about1">
                <div class="about-co main-course-item">
                    <h3>ABOUT US</h3>
                </div>
                <div class="about-ti main-course-item-2">
                    <h3>あなたの暮らしに快適を</h3>
                </div>
                <div class="about-me main-course-item-2">
                    <p>安心、安全serviceのことなら弊社にお任せ下さい。
                        関西エリアを中心に地域密着でお客様の要望にしっかりお応えできるように致します。
                        屋根、外壁、内装等、豊富な横のつながりを活かして、お客様のさまざまなニーズにお応えしています。
                        私たちはこれからも、みなさまからのお喜びの声を力に変えて、
                        人や地域にserviceを追求してまいります。
                        引き続き弊社をご愛顧賜りますようお願い申し上げます。</p>
                </div>
                <div class="about-bo">
                    <a href="<?php bloginfo('url'); ?>/campany">more</a>
                </div>
            </div>
            <div class="about-img main-course-item-4">
                <img src="https://shibatakoumuten.co.jp/dist/img/index/bg-about.jpg?v=20201105164328" alt="">
            </div>
        </div>
    </div>
</div>

<?php get_template_part('sec', 'service'); ?>

<div class="pastrecords clear">
    <div class="past-title scrollanime slide-left">
        <h3 class="main-course-item">PAST RECORD</h3>
        <p class="main-course-item-2">実績</p>
    </div>
    <div class="container">
        <div class="past">
            <div class="past-item">
                <div class="past-main main-course-item">
                    <div class="flex2">
                        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                                <section>
                                    <div class="past-img">
                                        <?php if (has_post_thumbnail()) : ?>
                                            <?php the_post_thumbnail('medium'); ?>
                                        <?php else : ?>
                                            <img src="https://shibatakoumuten.co.jp/app/wp-content/uploads/2021/03/b482a3cadd45c6ec2275c882c0a92f75.jpg" alt="">
                                        <?php endif; ?>
                                    </div>
                                    <div class="past-mes">
                                        <div class="past-day">
                                            <p><?php the_time('Y年m月d日'); ?></p>
                                        </div>
                                        <div class="past-me">
                                            <h3><?php the_title(); ?></h3>
                                        </div>
                                        <div class="past-buttom">
                                            <div class="past-bu">
                                                <a href="<?php the_permalink(); ?>">detail</a>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>