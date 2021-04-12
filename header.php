<!DOCTYPE html>
<html lang="en">

<head>
    <title>株式会社 eider</title>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" />
    <!-- CSSを読み込んだ後にjsを読み込むようにしましょう -->
    <!-- <script src="script.js"></script> -->
    <!-- デフォルトのjqを削除 -->
    <?php
    wp_deregister_script('jquery');
    wp_head();
    ?>

    <!-- jquery読み込み -->
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/lib/jquery.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/script.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
    </script>
</head>

<body>
    <header>
        <div class="top">
            <div class="container">
                <div class="top1">
                    <div class="top-img main-course-item">
                        <img src="https://fly3.gigafile.nu/folder-pc-thumb.php?file=B%2F0326-29944128eaa52f758438eab2aa9e7e7f%2FK6ZtRhhH.png&size=300" alt="">
                    </div>
                    <div class="top-li main-course-item-2">
                        <ul>
                            <a href="<?php bloginfo('url'); ?>/">
                                <li>top</li>
                            </a>
                            <a href="<?php bloginfo('url'); ?>/campany">
                                <li>campany</li>
                            </a>
                            <a href="<?php bloginfo('url'); ?>/service">
                                <li>service</li>
                            </a>
                            <a href="<?php bloginfo('url'); ?>/news">
                                <li>news</li>
                            </a>
                            <a href="<?php bloginfo('url'); ?>/contact">
                                <li>contact</li>
                            </a>
                        </ul>
                    </div>
                    <div class="header-right">
                        <div class="header-nav" style="width:100px;"></div>
                        <div class="login" id="login-show"><img src="https://everydayicons.jp/wp/wp-content/themes/everydayicons/icons/png/ei-menu.png" alt="">
                            </a></div>
                    </div>
                </div>
            </div>
        </div>
        <?php
        if (is_front_page()) { ?>
            <div class="header">
                <div class="container">
                    <div class="he-fl">
                        <div class="headerx main-course-item">
                            <div class="header-u">
                                <div class="header-title">
                                    <h3><span>T</span><span>H</span><span>I</span><span>N</span><span>K</span>
                                        <br>
                                        <p><span>f</span><span>o</span><span>r</span></p>
                                        <span>R</span><span>E</span><span>S</span><span>I</span><span>D</span><span>E</span><span>N</span><span>T</span><span>S</span>
                                    </h3>
                                </div>
                                <div class="header-me">
                                    <p>すべてはお客様のために</p>
                                </div>
                            </div>
                            <div class="bo ">
                                <a href="<?php bloginfo('url'); ?>/campany">ABOUT</a>
                            </div>
                        </div>
                        <div class="header1">
                            <div class="slider">
                                <ul>
                                    <li><img src="https://vico-co.jp/dist/img/main/l-hero__image01.jpg?v=20200908170427">
                                    </li>
                                    <li><img src="https://vico-co.jp/dist/img/main/l-hero__image02.jpg?v=20200908170427">
                                    </li>
                                    <li><img src="https://vico-co.jp/dist/img/main/l-hero__image03.jpg?v=20200908170427">
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </header>
    <div class="login-modal-wrapper" id="login-modal">
        <div class="modal">
            <div class="close-modal ">
                <i class="fa fa-2x fa-times">
                    <img src="https://www.bing.com/th?id=AMMS_12263d560a764574c801590ec100332d&w=110&h=110&c=7&rs=1&qlt=80&pcl=f9f9f9&cdv=1&dpr=1.25&pid=16.1" alt="">
                </i>
            </div>
            <div id="login-form">
                <a href="<?php bloginfo('url'); ?>/">top</a>
            </div>
            <div id="login-form">
                <a href="<?php bloginfo('url'); ?>/campany">campany</a>
            </div>
            <div id="login-form">
                <a href="<?php bloginfo('url'); ?>/service">service</a>
            </div>
            <div id="login-form">
                <a href="<?php bloginfo('url'); ?>/news">news</a>
            </div>
            <div id="login-form">
                <a href="<?php bloginfo('url'); ?>/contact">contact</a>
            </div>
        </div>
    </div>
<?php } else if (is_page('campany')) { ?>
    <div class="topx">
        <div class="flex">
            <div class="topx-img ">
                <img src="https://shibatakoumuten.co.jp/dist/img/main/main-about.jpg?v=20201105164328" alt="">
                <div class="topx-title">
                    <p>ホーム・about us</p>
                    <h3>eiderの強み</h3>
                </div>
            </div>
        </div>
    </div>
<?php } else if (is_page('contact')) { ?>
    <div class="topx">
        <div class="flex">
            <div class="topx-img ">
                <img src="https://shibatakoumuten.co.jp/dist/img/main/main-about.jpg?v=20201105164328" alt="">
                <div class="topx-title">
                    <p>ホーム・about us</p>
                    <h3>eiderの強み</h3>
                </div>
            </div>
        </div>
    </div>
<?php } else if (is_page('service')) { ?>
    <div class="topx">
        <div class="flex">
            <div class="topx-img ">
                <img src="https://shibatakoumuten.co.jp/dist/img/main/main-about.jpg?v=20201105164328" alt="">
                <div class="topx-title">
                    <p>ホーム・about us</p>
                    <h3>eiderの強み</h3>
                </div>
            </div>
        </div>
    </div>
<?php } else if (is_archive('news')) { ?>
    <div class="topx">
        <div class="flex">
            <div class="topx-img ">
                <img src="https://shibatakoumuten.co.jp/dist/img/main/main-about.jpg?v=20201105164328" alt="">
                <div class="topx-title">
                    <p>ホーム・about us</p>
                    <h3>eiderの強み</h3>
                </div>
            </div>
        </div>
    </div>
<?php } else if (is_single()) { ?>
    <div class="topx">
        <div class="flex">
            <div class="topx-img ">
                <img src="https://shibatakoumuten.co.jp/dist/img/main/main-about.jpg?v=20201105164328" alt="">
                <div class="topx-title">
                    <p>ホーム・about us</p>
                    <h3>eiderの強み</h3>
                </div>
            </div>
        </div>
    </div>
<?php } else {
        } ?>
<!-- <div class="topx">
            <div class="flex">
                <div class="topx-img ">
                    <img src="https://shibatakoumuten.co.jp/dist/img/main/main-about.jpg?v=20201105164328" alt="">
                    <div class="topx-title">
                        <p>ホーム・about us</p>
                        <h3>eiderの強み</h3>
                    </div>
                </div>
            </div>
        </div> -->
<?php wp_head(); ?>