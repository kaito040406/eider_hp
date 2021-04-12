<?php get_header(); ?>
<div class="pastrecords clear">
    <div class="past-title scrollanime slide-left">
        <!-- <h3 class="main-course-item">PAST RECORD</h3> -->
        <h3 class="main-course-item">詳細</h3>
        <p class="main-course-item-2"><?php the_title(); ?></p>
    </div>
    <div class="container">
        <div class="past">
            <div class="past-item">
                <div class="past-main main-course-item">
                    <div class="flex2">
                        <section>
                            <div class="past-img">
                            <?php if (has_post_thumbnail()) : ?>
                                    <?php the_post_thumbnail('medium'); ?>
                                <?php else : ?>
                                    <!-- <img src="<?php echo get_template_directory_uri(); ?>/img/no_image.jpg"> -->
                                <?php endif; ?>
                            </div>
                            <div class="past-mes">
                                <div class="past-day">
                                    <p><?php the_time('Y年m月d日'); ?></p>
                                </div>
                                <div class="past-buttom">
                                    <?php the_content(); ?>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>