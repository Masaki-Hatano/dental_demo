<?php get_header(); ?>


<section class="top">
    <div class="top__slide">
        <img src="<?php echo get_template_directory_uri(); ?>/img/top-01.png" alt="">
    </div>

    <div class="top__contents">

        <div class="top__news">
            <img class="schedule__sp" src="<?php echo get_template_directory_uri(); ?>/img/medical-time-pc.jpg" alt="">
            <div class="top__news-contents">
                <div class="title">お知らせ</div><!-- after_news -->
                <a href="<?php echo get_permalink($data[0]->ID); ?>" class="past__news">過去のお知らせはこちら</a>
            </div>

            <?php $data = get_posts('post_type=post&posts_per_page=1');
            if (isset($data[0])) :
            ?>

                <a class="news__content" href="<?php echo get_permalink($data[0]->ID); ?>">
                    <!-- after__yajirusi -->
                    <div class="news__date"><?php echo date('Y年m月d日', strtotime($data[0]->post_date)); ?></div>
                    <div class="news__title"><?php echo ($data[0]->post_title); ?></div>
                    <div class="news__img"><img src="<?php echo get_template_directory_uri(); ?>/img/icon-arrow-black2.png" alt=""></div>
                </a>
            <?php endif; ?>

        </div>

        <div class="top__schedule">
            <img class="schedule" src="<?php echo get_template_directory_uri(); ?>/img/schedule .png" alt="">
        </div>
    </div>
</section>


<section class="concept">
    <div class="concept__wrap">
        <div class="concept__img"><img src="<?php echo get_template_directory_uri(); ?>/img/concept-img1.png" alt=""></div>
        <div class="concept__contents">
            <div class="concept__contents-title">CONCEPT</div>
            <h2>健康的で素敵な笑顔あふれる<br>街づくりを目指して</h2>
            <div class="concept__contents-text">
                私たちは最新の医療技術を追求すると共に、患者様とのコミュニケーションを大事することで、気軽に通いやすく些細なことでも相談できる「街の掛かり付け医」を目指しております。お子様からご高齢の方まで、快適な空間で治療が受けられる場を作り、地域医療に貢献しきたいと考えております。
            </div>
            <div class="about__btn"><a href="<?php echo home_url('/about/'); ?>">当院について</a></div>
        </div><!-- concept__contents -->
    </div><!-- inner -->
</section><!-- concept -->




<div class="recommend">
    <div class="contents__title">
        <h3 class="title__recommend">当院の3つのおすすめ</h3>
    </div> <!-- contents__title -->

    <div class="recommend__contents inner">
        <div class="recommend__card">
            <div class="recommend__top"><img src="<?php echo get_template_directory_uri(); ?>/img/recommend-1.png" alt=""></div>
            <div class="recommend__icon"><img src="<?php echo get_template_directory_uri(); ?>/img/osusume01.png" alt=""></div>
            <div class="recommend__title">
                <p>痛くない歯科医療の追求</p>
            </div>
            <div class="recommend__text">
                <p>歯の治療において、小さな違和感は大きなストレスにつながります。<br>私たちは常に快適な歯科医療技術の研究を行っております。</p>
            </div>
        </div><!-- recommend__card   -->

        <div class="recommend__card">
            <div class="recommend__top"><img src="<?php echo get_template_directory_uri(); ?>/img/recommend-2.png" alt=""></div>
            <div class="recommend__icon"><img src="<?php echo get_template_directory_uri(); ?>/img/osusume02.png" alt=""></div>
            <div class="recommend__title">
                <p>駅から徒歩3分</p>
            </div>
            <div class="recommend__text">
                <p>「通いやすさ」も医院選びの重要なポイントと考え、2019年のリニューアルを期に更に駅の近くへ場所を移しました。</p>
            </div>
        </div><!-- recommend__card    -->

        <div class="recommend__card">
            <div class="recommend__top"><img src="<?php echo get_template_directory_uri(); ?>/img/recommend-3.png" alt=""></div>
            <div class="recommend__icon"><img src="<?php echo get_template_directory_uri(); ?>/img/osusume03.png" alt=""></div>
            <div class="recommend__title">
                <p>夜20:30まで営業</p>
            </div>
            <div class="recommend__text">
                <p>朝から夜までお仕事をされている方のために、診療時間を見直しました</p>
                <p class="recommend__red">※駆け込みでも対応可能ですが、事前にご連絡いただけるとスムーズです。</p>
            </div>
        </div><!-- recommend__card    -->
    </div><!-- recommend__contents -->
</div><!-- recommend -->


<section class="announce">
    <div class="announce__bg-top"></div>

    <div class="announce__bg">
        <div class="contents__title">
            <h3 class="title__announce">診療案内</h3>
        </div> <!-- contents__title -->

        <div class="announce__contents inner">
            <div class="announce__contents-card">

                <a href="<?php echo home_url('/medical/'); ?> #gen" class="card__general">
                    <div class="card__border">
                        <div class="card__title">一般診療</div>
                        <div class="card__text">虫歯・入れ歯・小児歯科</div>
                    </div>
                </a>
                <a href="index_guidance.html#sp" class="card__special">
                    <div class="card__border">
                        <div class="card__title">特殊診療</div>
                        <div class="card__text">インプラント・ホワイトニング<br>予防歯科・口腔外科・審美歯科</div>
                    </div>
                </a>

            </div><!-- announce__contents-card -->
            <div class="announce__contents-text">
                <p>当院では、患者さんの歯の健康状態や治療方針を丁寧にカウンセリングし、十分ご理解していただいた上で治療いたします。<br>痛みに配慮することと、可能な限り削らない・抜かない治療に努めております。
                </p>
                <p class="announce__red">※特殊性の高い矯正治療などは保険の適応外となります。 これらの治療を行う際は事前に詳細と費用のご説明いたします。</p>
            </div><!-- announce__contents-text -->
        </div><!-- announce__contents -->
    </div><!-- announce__bg -->
    <div class="announce__bg-bottom"></div>
</section><!-- announce -->


<section class="blog">
    <div class="contents__title">
        <h3 class="title__blog">スタッフブログ</h3>
    </div> <!-- contents__title -->

    <?php
    $args = [
        'post_type' => 'blog', // カスタム投稿名が「gourmet」の場合
        'posts_per_page' => 6, // 表示する数
    ];
    $my_query = new WP_Query($args); ?>

    <?php if ($my_query->have_posts()) : // 投稿がある場合 
    ?>
        <div class="blog__contents inner">

            <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
                <a class="blog__card" href="<?php the_permalink(); ?>">
                <?php keika_time(7); ?>
                    <div class="blog__img">
                    <?php if (has_post_thumbnail()) {
                                the_post_thumbnail('my_thumbnail');
                            } else {
                                echo '<img src="' . esc_url(get_template_directory_uri()) . '/img/noimg.png" alt="">';
                            }
                            ?>
                    </div>
                    <div class="blog__text">
                        <div class="blog__tag">
                            <?php echo esc_html(get_the_terms(get_the_ID(), 'dentist')[0]->name); ?>
                            <?php echo esc_html(get_the_terms(get_the_ID(), 'other')[0]->name); ?>
                        </div>
                        <h4 class="blog__title"><?php the_title(); ?></h4>
                        <div class="blog__date"><?php the_time(get_option('date_format')); ?></div>
                    </div>
                </a><!-- blog__card -->
            <?php endwhile; ?>


        </div><!-- blog__contents -->
    <?php endif;
    wp_reset_postdata(); ?>
    <div class="blog__btn"><a href="<?php echo get_post_type_archive_link( 'blog' ); ?>">スタッフブログ一覧はこちら</a></div>
</section><!-- blog -->

<?php get_footer(); ?>