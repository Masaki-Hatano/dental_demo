<?php 
/*
Template Name: medical
*/
?>
<?php get_header(); ?>


    <section class="top">
        <div class="top__contents">
            <div class="top__img">
                <div class="top__title">診察案内</div>
                <div class="top__text">MEDICAL</div>
            </div>
            <div class="top__tag">
                <a href="<?php echo home_url(); ?>" class="top__home">ホーム</a>
                <div class="top__next tag__left">＞</div>
                <div class="top__about tag__left">診察案内</div>
            </div>
        </div>
    </section>

    <section class="type inner">
        <div class="general__contents">
            <div class="general__contents-title">
                <h3>一般診療</h3>
            </div>
            <div class="general__contents-category">
                <div class="category__btn"><a href="#general">一般歯科</a></div>
                <div class="category__btn"><a href="#kid">小児歯科</a></div>
                <div class="category__btn"><a href="#prevention">予防歯科</a></div>
            </div>
        </div><!-- general__contents -->

        <div class="special__contents">
            <div class="special__contents-title">
                <h3>特殊診療</h3>
            </div>
            <div class="special__contents-category">
                <div class="res__wide">
                    <div class="category__btn"><a href="#dentures">入れ歯</a></div>
                    <div class="category__btn"><a href="#correct">矯正歯科</a></div>
                    <div class="category__btn"><a href="#white">ホワイトニング</a></div>
                </div>
                <div class="res__wide">
                    <div class="category__btn"><a href="#implant">口腔外科</a></div>
                    <div class="category__btn"><a href="#laser">レーザー治療</a></div>
                </div>

            </div>
        </div><!-- special__contents  -->
    </section><!-- type -->



    <section class="gen-detail" id="gen">
        <div class="gen-detail__bg-top"></div>
        <div class="gen-detail__bg">
            <div class="contents__title" id="gen">
                <h3 class="title__gen-detail">一般診療</h3>
            </div> <!-- contents__title -->
            <div class="inner gen-detail__container">

                <div class="contents__card" id="general">
                    <div class="contents__card-inner">
                        <?php if ( get_field( 'worries' ) ) : ?>
                        <div class="contents__card-title">
                            <h4>一般歯科</h4>
                            <p><?php the_field( 'worries' ); ?>虫歯治療、歯茎がしみるなど</p>
                        </div>
                        <?php endif; ?>

                        <div class="contents__card-items">
                        <?php if ( get_field( 'textarea' ) ) : ?>
                            <div class="contents__card-left">
                                <p><?php the_field( 'textarea' ); ?></p>
                                <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                            </div>
                        <?php endif; ?>
                            <div class="contents__card-right"><img src="<?php echo get_template_directory_uri(); ?>/img/img_guidance/medical_1.png" alt=""></div>
                        </div>
                    </div>
                </div><!-- contents__card -->

                <div class="contents__card" id="kid">
                    <div class="contents__card-inner">
                        <div class="contents__card-title">
                            <h4>小児歯科</h4>
                            <p>小さいお子様の歯の治療</p>
                        </div>
                        <div class="contents__card-items">
                            <div class="contents__card-left">
                                <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                                </p>
                                <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                                </p>
                            </div>
                            <div class="contents__card-right"><img src="<?php echo get_template_directory_uri(); ?>/img/img_guidance/medical_2.png" alt=""></div>
                        </div>
                    </div>
                </div><!-- contents__card -->

                <div class="contents__card" id="prevention">
                    <div class="contents__card-inner">
                        <div class="contents__card-title">
                            <h4>予防歯科</h4>
                            <p>口腔内のケア全般</p>
                        </div>
                        <div class="contents__card-items">
                            <div class="contents__card-left">
                                <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                                </p>
                                <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                                </p>
                            </div>
                            <div class="contents__card-right"><img src="<?php echo get_template_directory_uri(); ?>/img/img_guidance/medical_3.png" alt=""></div>
                        </div>
                    </div>
                </div><!-- contents__card -->

            </div><!-- gen-detail__contents -->
        </div><!-- gen-detail__bg -->
        <div class="gen-detail__bg-bottom"></div>
    </section><!-- gen-detail -->



    <section class="sp-detail">
        <div class="sp-detail__bg-top" id="sp"></div>

        <div class="sp-detail__bg">
            <div class="contents__title" >
                <h3 class="title__sp-detail">特殊診療</h3>
            </div> <!-- contents__title -->
            <div class="inner sp-detail__container">

                <div class="contents__card" id="dentures">
                    <div class="contents__card-inner">
                        <div class="contents__card-title">
                            <h4>入れ歯</h4>
                            <p>入れ歯を作りたい、調整したい</p>
                        </div>
                        <div class="contents__card-items">
                            <div class="contents__card-left">
                                <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                                </p>
                                <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                                </p>
                            </div>
                            <div class="contents__card-right"><img src="<?php echo get_template_directory_uri(); ?>/img/img_guidance/medical_1.png" alt=""></div>
                        </div>
                    </div>
                </div><!-- contents__card -->

                <div class="contents__card" id="correct">
                    <div class="contents__card-inner">
                        <div class="contents__card-title">
                            <h4>矯正歯科</h4>
                            <p>歯並びが気になる</p>
                        </div>
                        <div class="contents__card-items">
                            <div class="contents__card-left">
                                <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                                </p>
                                <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                                </p>
                            </div>
                            <div class="contents__card-right"><img src="<?php echo get_template_directory_uri(); ?>/img/img_guidance/medical_2.png" alt=""></div>
                        </div>
                    </div>
                </div><!-- contents__card -->

                <div class="contents__card" id="white">
                    <div class="contents__card-inner">
                        <div class="contents__card-title">
                            <h4>ホワイトニング</h4>
                            <p>歯を白くしたい</p>
                        </div>
                        <div class="contents__card-items">
                            <div class="contents__card-left">
                                <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                                </p>
                                <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                                </p>
                            </div>
                            <div class="contents__card-right"><img src="<?php echo get_template_directory_uri(); ?>/img/img_guidance/medical_3.png" alt=""></div>
                        </div>
                    </div>
                </div><!-- contents__card -->

                <div class="contents__card" id="implant">
                    <div class="contents__card-inner">
                        <div class="contents__card-title">
                            <h4>口腔外科</h4>
                            <p>インプラント、親知らずの抜歯</p>
                        </div>
                        <div class="contents__card-items">
                            <div class="contents__card-left">
                                <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                                </p>
                                <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                                </p>
                            </div>
                            <div class="contents__card-right"><img src="<?php echo get_template_directory_uri(); ?>/img/img_guidance/medical_3.png" alt=""></div>
                        </div>
                    </div>
                </div><!-- contents__card -->

                <div class="contents__card" id="laser">
                    <div class="contents__card-inner">
                        <div class="contents__card-title">
                            <h4>レーザー治療</h4>
                            <p>口内炎を治したい</p>
                        </div>
                        <div class="contents__card-items">
                            <div class="contents__card-left">
                                <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                                </p>
                                <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                                </p>
                            </div>
                            <div class="contents__card-right"><img src="<?php echo get_template_directory_uri(); ?>/img/img_guidance/medical_3.png" alt=""></div>
                        </div>
                    </div>
                </div><!-- contents__card -->

            </div><!-- sp-detail__contents -->
        </div><!-- sp-detail__bg -->
        <div class="sp-detail__bg-bottom"></div>
    </section><!-- sp-detail -->

    <?php get_footer(); ?>
