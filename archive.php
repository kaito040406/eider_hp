<?php get_header(); ?>

<div class="news">
    <div class="container">
        <div class="newsx">
            <div class="news-title main-course-item">
                <h3>NEWS</h3>
                <p>ニュース</p>
            </div>
            <div class="news-mex">
                <div class="news-me main-course-item">
                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                            <a href="<?php the_permalink(); ?>"><?php $about_url = site_url(); ?>
                                <span class="date"><?php the_time('Y年m月d日'); ?></span>
                                <div class="flex">
                                    <h3 class="h3"><?php the_title(); ?></h3>
                                </div>
                            </a>
                        <?php endwhile; ?>
                </div>
            </div>
        </div>
        <div class="navigation">
            <div class="flex">
                <?php if (function_exists("the_pagination")) the_pagination(); ?>
            </div>
        <?php else : ?>
        <?php endif; ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>