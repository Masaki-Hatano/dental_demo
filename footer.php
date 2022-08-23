

    <div class="footer__bg-top"></div>
    <footer>

        <div class="footer__contents inner">
            <div class="footer__box">
                <div class="clinic__detail">
                    <div class="clinic__logo"><img src="<?php echo get_template_directory_uri(); ?>/img/header_logo.png" alt=""></div>
                    <div class="address">
                        <p>〒166-0001</p>
                        <p class="add">東京都杉並区阿佐谷北7-3-1</p>
                    </div><!-- address -->
                    <div class="clinic__tel"><img src="<?php echo get_template_directory_uri(); ?>/img/header_tel.png" alt=""></div>
                    <div class="clinic__rest">
                        <p>(年中無休 AM9:00〜PM22:00)</p>
                    </div>
                    <div class="clinic__btn">
                        <a href="<?php echo home_url('/rsv/'); ?>" class="reserve__btn">WEB予約</a>
                        <a href="<?php echo home_url('/contact/'); ?>" class="contact__btn">お問い合わせ</a>
                    </div>
                    <div class="clinic__time"><img src="<?php echo get_template_directory_uri(); ?>/img/medical-time-pc.jpg" alt=""></div>
                </div><!-- clinic__detail -->
                <div class="clinic__map">
                    <div class="map__item">
                        <iframe
                        src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3239.7927775760313!2d139.6366984152475!3d35.70671668018837!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sja!2sjp!4v1654157812941!5m2!1sja!2sjp"
                        width="385" height="385" 
                        style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div><!-- footer__box -->



            <div class="footer__site-list">
                <div class="cite__contents">

                    <div class="site__item">
                        <dt><a href="<?php echo home_url(); ?>">TOP</a></dt>
                    </div><!-- site__item -->

                    <div class="site__item">
                        <dt><a href="index">当院について</a></dt>
                        <dd><a href="index">ポリシーと特徴</a></dd>
                        <dd><a href="index">当院の様子</a></dd>
                    </div><!-- site__item -->

                    <div class="site__item">
                        <dt><a href="index">スタッフ紹介</a></dt>
                        <dd><a href="index">院長のあいさつ</a></dd>
                        <dd><a href="index">スタッフ</a></dd>
                    </div><!-- site__item -->

                    <div class="site__item">
                        <dt><a href="index">診療内容</a></dt>
                        <div class="site__item-blocks">
                            <div class="site__item-block">
                                <dd><a href="index">一般歯科</a></dd>
                                <dd><a href="index">小児歯科</a></dd>
                                <dd><a href="index">予防歯科</a></dd>
                                <dd><a href="index">入れ歯</a></dd>
                            </div>
                            <div class="site__item-block">
                                <dd><a href="index">矯正歯科</a></dd>
                                <dd><a href="index_guidance.html#white">ホワイトニング</a></dd>
                                <dd><a href="index">口腔外科</a></dd>
                                <dd><a href="<?php echo get_post_type_archive_link( 'lp' ); ?>">レーザー治療</a></dd>
                            </div>
                        </div>
                    </div><!-- site__item -->

                    <div class="site__item">
                        <dt><a href="index">お問い合わせ</a></dt>
                        <dd><a href="index">お問い合わせフォーム</a></dd>
                        <dd><a href="index">WEB予約</a></dd>
                    </div><!-- site__item -->
                </div><!-- site__item -->
            </div><!-- footer__site-list -->
            
            
            
            <div id="page-top"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/totop.png" alt=""></a></div>
        </div><!-- footer__contents -->
        <div class="footer__bottom">
            <p>©︎2020-2021 みなみ歯科クリニック</p>
        </div>

    </footer>
    <div class="responsive__fixed">
        <div class="responsive__fixed-items">
            <div class="responsive__fixed-left">
                <div class="clinic__tel"><img src="<?php echo get_template_directory_uri(); ?>/img/header_tel.png" alt=""></div>
                <div class="clinic__rest">
                    <p>(年中無休 AM9:00〜PM22:00)</p>
                </div>
            </div>
            <div class="responsive__fixed-right">
                <div class="reserve__btn">
                    <p class="ue" >WEB予約</p>
                    <p class="shita">はこちら</p>
                </div>
            </div>
        </div>
    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <?php wp_footer() ?>
</body>

</html>