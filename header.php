<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?> </title>
    <?php wp_head(); ?>
</head>

<body>
    <header>
        <div class="header__contents">

            <a href="<?php echo home_url(); ?>" class="header__logo">
                <img src="<?php echo get_template_directory_uri(); ?>/img/header_logo.png" alt="">
            </a>

            <div class="header__right">
                <div class="header__nav">

                    <a href="<?php echo home_url(); ?>" class="nav__items <?php  if(is_front_page()) echo 'current' ;?>">
                        <div class="nav__logo"><img src="<?php echo get_template_directory_uri(); ?>/img/drawer_icon-011@2x.png" alt=""></div>
                        <div class="nav__title">
                            <p>ホーム</p>
                        </div>
                    </a>
                    <a href="<?php echo home_url('/about/'); ?>" class="nav__items <?php  if(is_page('about')) echo 'current' ;?>">
                        <div class="nav__logo"><img src="<?php echo get_template_directory_uri(); ?>/img/drawer_icon-022@2x.png" alt=""></div>
                        <div class="nav__title">
                            <p>当院について</p>
                        </div>
                    </a>
                    <a href="<?php echo home_url('/medical/'); ?>" class="nav__items <?php  if(is_page('medical')) echo 'current' ;?>">
                        <div class="nav__logo"><img src="<?php echo get_template_directory_uri(); ?>/img/drawer_icon-033.png" alt=""></div>
                        <div class="nav__title">
                            <p>診療案内</p>
                        </div>
                    </a>
                    <a href="<?php echo home_url('/staff/'); ?>" class="nav__items <?php  if(is_page('staff')) echo 'current' ;?>">
                        <div class="nav__logo"><img src="<?php echo get_template_directory_uri(); ?>/img/drawer_icon-044@2x.png" alt=""></div>
                        <div class="nav__title">
                            <p>スタッフ紹介</p>
                        </div>
                    </a>
                    <a href="<?php echo get_post_type_archive_link( 'blog' ); ?>" class="nav__items <?php  if(is_archive()) echo 'current' ;?>">
                        <div class="nav__logo"><img src="<?php echo get_template_directory_uri(); ?>/img/drawer_icon-055@2x.png" alt=""></div>
                        <div class="nav__title">
                            <p>スタッフブログ</p>
                        </div>
                    </a>
                    <a href="<?php echo home_url('/contact/'); ?>" class="nav__items <?php  if(is_page('contact')) echo 'current' ;?>">
                        <div class="nav__logo"><img src="<?php echo get_template_directory_uri(); ?>/img/drawer_icon-066@2x.png" alt=""></div>
                        <div class="nav__title">
                            <p>お問い合わせ</p>
                        </div>
                    </a>
                </div>
                <div class="header__address">
                    <div class="add">
                        <p>〒166-0001 東京都杉並区阿佐谷北7-3-1</p>
                    </div>
                    <div class="tel"><img src="<?php echo get_template_directory_uri(); ?>/img/header_tel.png" alt=""></div>
                </div><!-- header__nav -->
            </div><!-- header__right -->
        </div><!-- header__contents -->


        <a href="<?php echo home_url('/rsv/'); ?>">
            <div class="top__reserve">
                <div class="reserve__contents">
                    <div class="reserve_img">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icon-pc.png" alt="">
                    </div>
                    <p>WEB予約<br>はこちら</p>
                </div>
            </div><!-- top__reserve -->
        </a>
    </header>


    <div class="sp__drawer">
        <div class="drawer-icon">
            <div class="drawer-icon__bars">
                <div class="drawer-icon__bar1"></div>
                <div class="drawer-icon__bar2"></div>
                <div class="drawer-icon__bar3"></div>
            </div>
        </div>

        <div class="drawer-hide">
            <div class="drawer__logo">
                <img src="<?php echo get_template_directory_uri(); ?>/img/logo-drawer.png" alt="">
            </div>
            <div class="drawer-content">
                <div class="drawer-content__items">
                    <div class="drawer-content__item">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/drawer_icon-01.png" alt="">
                        <a href="<?php echo home_url(); ?>">ホーム</a><!-- ::after yajirusi -->
                    </div>
                    <div class="drawer-content__item">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/drawer_icon-02.png" alt="">
                        <a href="<?php echo home_url('/about/'); ?>">当院について</a>
                    </div>
                    <div class="drawer-content__item">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/drawer_icon-03.png" alt="">
                        <a href="index_about.html">診療案内</a>
                    </div>
                    <div class="drawer-content__item">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/drawer_icon-04.png" alt="">
                        <a href="index_staff.html">スタッフ紹介</a>
                    </div>
                    <div class="drawer-content__item">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/drawer_icon-05.png" alt="">
                        <a href="index_blog.html">スタッフブログ</a>
                    </div>
                    <div class="drawer-content__item">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/drawer_icon-06.png" alt="">
                        <a href="index_page-contact.html">お問い合わせ</a>
                    </div>
                </div>
            </div>

            <div class="drawer-bg"></div>
        </div>
    </div><!-- sp__drawer -->
