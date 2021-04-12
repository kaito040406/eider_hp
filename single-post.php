<?php get_header(); ?>
<div class="pastrecords clear">
    <div class="past-title scrollanime slide-left">
        <h3 class="main-course-item">PAST RECORD</h3>
        <p class="main-course-item-2">実績</p>
    </div>
    <div class="container">
        <div class="past">
            <div class="past-item">
                <div class="past-main main-course-item">
                    <?php query_posts('posts_per_page=11'); ?>
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