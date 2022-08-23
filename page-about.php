<?php 
/*
Template Name: about
*/
?>


<?php get_header(); ?>


    <section class="top">
        <div class="top__contents">
            <div class="top__img">
                <div class="top__title">当院について</div>
                <div class="top__text">ABOUT OUR CLINIC</div>
            </div>
            <div class="top__tag">
                <a href="<?php echo home_url(); ?>" class="top__home">ホーム</a>
                <div class="top__next tag__left">＞</div>
                <div class="top__about tag__left"><?php the_title(); ?></div>
            </div>
        </div>
    </section>


        
    <section class="policy">
        <div class="contents__title">
            <h3 class="title__policy">ポリシーと特徴</h3>
        </div> <!-- contents__title -->
        <div class="policy__wrap">
            <div class="policy__img"><img src="<?php echo get_template_directory_uri(); ?>/img/img__about/feature_1.png" alt=""></div>
            <div class="policy__contents">
                <div class="policy__contents-title">POLICY</div>
                <h2>コミュニケーションから始まる最適な医療提供</h2>
                <div class="policy__contents-text">当院ではまず患者様から詳しくお話を伺います。難しい言葉は使わず、実際に感じている小さな違和感からあらゆる可能性を考え、最適な治療方法をご提案いたします。</div>
                <div class="policy__contents-text">「どこよりも本音で話せる歯医者さん」を目指し、スタッフ一同、「人間力の向上」にも勤めております。</div>
            </div><!-- policy__contents -->
        </div><!-- inner -->
    </section><!-- policy -->


    <section class="feature">
        <div class="feature__wrap">
            <div class="feature__contents">
                <div class="feature__contents-title">FEATURE</div>
                <h2>「医療技術の追求」と<br>「通いやすさ」</h2>
                <div class="feature__contents-text">歯の治療において、小さな違和感は大きなストレスにつながります。私たちは常に快適な歯科医療技術の研究を行っております。<br>また、「通いやすさ」も医院選びの重要なポイントと考え、2019年のリニューアルを期に更に駅の近くへ場所を移しました。</div>
                <div class="feature__contents-text">朝から夜までお仕事をされている方のために診療時間を見直し、平日でもご利用いただけるようにいたしました。</div>
            </div><!-- feature__contents -->
            <div class="feature__img"><img src="<?php echo get_template_directory_uri(); ?>/img/img__about/feature_2.png" alt=""></div>
        </div><!-- inner -->
    </section><!-- feature -->


    <section class="state">
        <div class="contents__title">
            <h3 class="title__state">院内の様子</h3>
        </div> <!-- state__title -->

        <div class="state__contents inner">
            <div class="state__box"><img src="<?php echo get_template_directory_uri(); ?>/img/img__about/about__state01.png" alt=""></div>
            <div class="state__box"><img src="<?php echo get_template_directory_uri(); ?>/img/img__about/about__state02.png" alt=""></div>
            <div class="state__box"><img src="<?php echo get_template_directory_uri(); ?>/img/img__about/about__state03.png" alt=""></div>
            <div class="state__box"><img src="<?php echo get_template_directory_uri(); ?>/img/img__about/about__state04.png" alt=""></div>
            <div class="state__box"><img src="<?php echo get_template_directory_uri(); ?>/img/img__about/about__state05.png" alt=""></div>
            <div class="state__box"><img src="<?php echo get_template_directory_uri(); ?>/img/img__about/about__state06.png" alt=""></div>
        </div>
    </section>


    <?php get_footer(); ?>
