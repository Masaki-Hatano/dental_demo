<?php 
/*
Template Name: staff
*/
?>
    <?php get_header(); ?>


    <section class="top">
        <div class="top__contents">
            <div class="top__img">
                <div class="top__title">スタッフ紹介</div>
                <div class="top__text">STAFF</div>
            </div>
            <div class="top__tag">
                <a href="<?php echo home_url(); ?>" class="top__home">ホーム</a>
                <div class="top__next tag__left">＞</div>
                <div class="top__about tag__left">スタッフ紹介</div>
            </div>
        </div>
    </section>

    <section class="greeting">

        <div class="contents__title" id="greeting">
            <h3 class="title__greeting">院長のあいさつ</h3>
        </div> <!-- contents__title -->

        <div class="greeting__contents">

            <div class="greeting__contents-left">
                <h4>気軽に相談できる<br>街の歯医者さんでありたい。</h4>
                <div class="greeting__contents-comment">
                    <p>当院は治療はもちろん、予防歯科にも力を入れておりますので、お口に関する相談だけでもお越しいただきたいと考えております。</p>
                    <p>「患部を直すこと」より「未然に防ぐこと」が最も良い歯科医療と言えますので、些細なことでも気軽に話せる街の歯医者さんとして、明るい街づくりに貢献していきたいと考えております。</p>
                </div>
                <div class="greeting__contents-name">
                    <p>みなみ歯科クリニック</p>
                    <p>院長 南 俊雄</p>
                </div>
                <div class="greeting__sp-img"><img src="<?php echo get_template_directory_uri(); ?>/img/img_staff/staff1.png" alt=""></div>
                <div class="greeting__contents-career">
                    <h5>経歴</h5>
                    <div class="career__detail">
                        <div class="career__date">2004年</div>
                        <div class="career__from">東京医科歯科大学歯学部 卒業</div>
                    </div>

                    <div class="career__detail">
                        <div class="career__date">2008年</div>
                        <div class="career__from">東京歯科大学歯学研究科大学院修了<br>博士(歯学)取得</div>
                    </div>

                    <div class="career__detail">
                        <div class="career__date">2012年</div>
                        <div class="career__from">みなみ歯科クリニック 開院</div>
                    </div>
                </div>
                <div class="greeting__contents-license">
                    <h5>資格</h5>
                    <p>歯科医師臨床研修指導歯科医</p>
                    <p>博士(歯学)</p>
                    <p>衛生検査技師</p>
                </div>
            </div>

            <div class="greeting__contents-right"><img src="<?php echo get_template_directory_uri(); ?>/img/img_staff/staff1.png" alt=""></div>

        </div><!-- greeting__contents -->
    </section><!-- greeting -->


    <section class="introduction">
        <div class="contents__title">
            <h3 class="title__introduction">スタッフ紹介</h3>
        </div> <!-- contents__title -->

        <div class="introduction__contents inner">
            <div class="introduction__contents-dr">
                <h5>歯科衛生士</h5>
                <div class="dr__box">


                    <div class="dr__box-card">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/img_staff/staff2.png" alt="">
                        <div class="card__title">
                            <span class="license">歯科衛生士</span>
                            <span class="name">鈴木 太郎</span>
                        </div>
                        <dl class="card__prf">
                            <dt class="prf__cat">出身地</dt>
                            <dd class="prf__ans">北海道</dd>
                            <dt class="prf__cat">趣味</dt>
                            <dd class="prf__ans">スキー、料理</dd>
                            <dt class="prf__cat">好きな食べ物</dt>
                            <dd class="prf__ans">お寿司、うなぎ</dd>
                    </dl>
                    </div><!-- dr__box-card -->


                    <div class="dr__box-card">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/img_staff/staff3.png" alt="">
                        <div class="card__title">
                            <span class="license">歯科衛生士</span>
                            <span class="name">山田 花子</span>
                        </div>
                        <dl class="card__prf">
                            <dt class="prf__cat">出身地</dt>
                            <dd class="prf__ans">北海道</dd>
                            <dt class="prf__cat">趣味</dt>
                            <dd class="prf__ans">スキー、料理</dd>
                            <dt class="prf__cat">好きな食べ物</dt>
                            <dd class="prf__ans">お寿司、うなぎ</dd>
                    </dl>
                    </div><!-- dr__box-card -->

                </div><!-- dr__box -->
            </div><!-- introduction__contents-dr -->



            <div class="introduction__contents-as">
                <h5>歯科助手</h5>
                <div class="dr__box">


                    <div class="dr__box-card">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/img_staff/staff4.png" alt="">
                        <div class="card__title">
                            <span class="license">歯科助手</span>
                            <span class="name">山田 花子</span>
                        </div>
                        <dl class="card__prf">
                            <dt class="prf__cat">出身地</dt>
                            <dd class="prf__ans">北海道</dd>
                            <dt class="prf__cat">趣味</dt>
                            <dd class="prf__ans">スキー、料理</dd>
                            <dt class="prf__cat">好きな食べ物</dt>
                            <dd class="prf__ans">お寿司、うなぎ</dd>
                    </dl>
                    </div><!-- dr__box-card -->

                    <div class="dr__box-card">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/img_staff/staff5.png" alt="">
                        <div class="card__title">
                            <span class="license">歯科助手</span>
                            <span class="name">山田 花子</span>
                        </div>
                        <dl class="card__prf">
                            <dt class="prf__cat">出身地</dt>
                            <dd class="prf__ans">北海道</dd>
                            <dt class="prf__cat">趣味</dt>
                            <dd class="prf__ans">スキー、料理</dd>
                            <dt class="prf__cat">好きな食べ物</dt>
                            <dd class="prf__ans">お寿司、うなぎ</dd>
                    </dl>
                    </div><!-- dr__box-card -->

                    <div class="dr__box-card">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/img_staff/staff6.png" alt="">
                        <div class="card__title">
                            <span class="license">歯科助手</span>
                            <span class="name">山田 花子</span>
                        </div>
                        <dl class="card__prf">
                            <dt class="prf__cat">出身地</dt>
                            <dd class="prf__ans">北海道</dd>
                            <dt class="prf__cat">趣味</dt>
                            <dd class="prf__ans">スキー、料理</dd>
                            <dt class="prf__cat">好きな食べ物</dt>
                            <dd class="prf__ans">お寿司、うなぎ</dd>
                    </dl>
                    </div><!-- dr__box-card -->

                    <div class="dr__box-card">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/img_staff/staff7.png" alt="">
                        <div class="card__title">
                            <span class="license">歯科助手</span>
                            <span class="name">山田 花子</span>
                        </div>
                        <dl class="card__prf">
                            <dt class="prf__cat">出身地</dt>
                            <dd class="prf__ans">北海道</dd>
                            <dt class="prf__cat">趣味</dt>
                            <dd class="prf__ans">スキー、料理</dd>
                            <dt class="prf__cat">好きな食べ物</dt>
                            <dd class="prf__ans">お寿司、うなぎ</dd>
                    </dl>
                    </div><!-- dr__box-card -->

                    <div class="dr__box-card">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/img_staff/staff8.png" alt="">
                        <div class="card__title">
                            <span class="license">歯科助手</span>
                            <span class="name">山田 花子</span>
                        </div>
                        <dl class="card__prf">
                                <dt class="prf__cat">出身地</dt>
                                <dd class="prf__ans">北海道</dd>
                                <dt class="prf__cat">趣味</dt>
                                <dd class="prf__ans">スキー、料理</dd>
                                <dt class="prf__cat">好きな食べ物</dt>
                                <dd class="prf__ans">お寿司、うなぎ</dd>
                        </dl>
                    </div><!-- dr__box-card -->

                </div><!-- dr__box -->
            </div><!-- introduction__contents-as -->

        </div><!-- introduction__contents -->
    </section><!-- introduction -->

    <?php get_footer(); ?>

