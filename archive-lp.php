<?php 
/*
Template Name: lp
*/
?>



<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rich-Life</title>

    <?php wp_head(); ?>

</head>

<body>

    <header id="lphd">
            <div class="header__contents">
                <div class="header-logo"><img src="<?php echo get_template_directory_uri(); ?>/img/img/logo.png" alt="logo"></div>
                <nav class="header-right">
                    <ul class="nav-items">
                        <li class="nav-item"><a class="nav-toggle">家具</a></li> <!-- after::↓ -->
                        <li class="nav-item"><a class="nav-toggle">家電</a></li>
                        <li class="nav-item"><a>法人のお客様へ</a></li>
                        <li class="nav-item"><button>ログイン/会員登録</button></li>
                        <li class="nav-item"><img src="<?php echo get_template_directory_uri(); ?>/img/img/cart-shopping-solid 1.png" alt="cart"></li>
                    </ul>
                </nav>
            </div>
        
    </header>

    <div class="header__hamburger">
        <div class="hamburger__contents">
            <div class="hamburger__content">
                <div class="hamburger-icon">
                    <div class="hamburger-icon__bars">
                        <div class="hamburger-icon__bar1"></div>
                        <div class="hamburger-icon__bar2"></div>
                        <div class="hamburger-icon__bar3"></div>
                    </div>
                </div>
                <div class="header__sp-toggle">
                    <div class="toggle-items">
                        <div class="toggle-item">家具</div>
                        <div class="toggle-item">家電</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- header ps 右画像つける -->
    <div class="header__sp-icon">
        <div class="header__sp-items">
            <img class="header__sp-vector" src="<?php echo get_template_directory_uri(); ?>/img/img/Vector.png" alt="vector">
            <img class="header__sp-cart" src="<?php echo get_template_directory_uri(); ?>/img/img/cart-shopping-solid 1.png" alt="cart">
        </div>
    </div>



    <section class="lp_top wow fadeInUp">
        <div class="lp_top__contents">
            <div class="lp_top__catchphrase catchphrase1"><span>いつでもどこでも。</span></div>
            <div class="lp_top__catchphrase catchphrase2"><span>わたしの好きが集まる暮らし。</span></div>
            <div class="lp_top__catchphrase-sub"><span>おうち空間を自由かつ手軽に模様替え</span></div>
        </div>
    </section>

    <section class="subscribe">
        <div class="subscribe__contents">

            <div class="subscribe__copy-side">
                <div class="sub-cpl">
                    <div class="limited">LIMITED TIME</div>
                    <div class="camp"><a>CAMPAIGN</a></div>
                </div>
            </div>

            <div class="subscribe__box">
                <div class="subscribe__box-title">
                    <div class="subscribe__copy">
                        高品質でセンスのいい
                        <br class="pc_hid">家具・家電を<br>
                        <a class="uni">10</a>
                        <a class="under">%0FF価格で
                            <br class="pc_hid">レンタルできます。</a>
                    </div>
                </div>
                <div class="subscribe__features">
                    <div class="subscribe__feature">月額<br class="pc_hid">440円〜</div>
                    <div class="subscribe__feature">1ヶ月〜レンタル可能</div>
                    <div class="subscribe__feature">長期レンタル<br class="pc_hid">割引あり</div>
                </div>
                <div class="subscribe__button">
                    <div class="subscribe__button-bubble"><a>カンタン！ 3 STEP</a></div>
                    <button class="subscribe__button-now"><a>今すぐ会員登録</a></button>
                </div>
            </div>

            <div class="subscribe__copy-side">
                <div class="sub-cpr">
                    <div class="limited">LIMITED TIME</div>
                    <div class="camp"><a>CAMPAIGN</a></div>
                </div>
            </div>

        </div>
    </section>

    <section class="benefit">
        <div class="contents__title">
            <a class="benefit__title">Rich-Lifeがお約束する、<br class="pc_hid">5つの暮らし</a> <!-- beforeafter -->
        </div>
        <div class="benefit__container  wow fadeInUp" data-wow-offset="200">
            <div class="benefit__card">
                <div class="benefit__card-reason">reason 01</div>
                <div class="benefit__card-img"><img src="<?php echo get_template_directory_uri(); ?>/img/img/img_chair.png" alt="chair"></div>
                <div class="benefit__card-text">交換・返却費が無料で“今”最適な空間を選べる</div>
            </div>
            <div class="benefit__card">
                <div class="benefit__card-reason">reason 02</div>
                <div class="benefit__card-img"><img src="<?php echo get_template_directory_uri(); ?>/img/img/img_woman.png" alt="woman"></div>
                <div class="benefit__card-text">初期コスト抑え、気軽に質の良い空間を手に入れられる</div>
            </div>
            <div class="hid-box"></div>
            <div class="benefit__card">
                <div class="benefit__card-reason">reason 03</div>
                <div class="benefit__card-img"><img src="<?php echo get_template_directory_uri(); ?>/img/img/img_man.png" alt="man"></div>
                <div class="benefit__card-text">モノを持たずに引っ越しや模様替えを楽しめる</div>
            </div>
            <div class="benefit__card">
                <div class="benefit__card-reason">reason 04</div>
                <div class="benefit__card-img"><img src="<?php echo get_template_directory_uri(); ?>/img/img/img_earth.png" alt="earth"></div>
                <div class="benefit__card-text">モノをなるべく捨てない、環境に優しい暮らし</div>
            </div>
            <div class="benefit__card">
                <div class="benefit__card-reason">reason 05</div>
                <div class="benefit__card-img"><img src="<?php echo get_template_directory_uri(); ?>/img/img/img_drink.png" alt="drink"></div>
                <div class="benefit__card-text">本当に好きなモノに囲まれる豊かな暮らし</div>
            </div>
        </div>
    </section>


    <section class="authoritativeness wow fadeInUp" data-wow-offset="200">
        <!-- <img class="sp_bg" src="<?php echo get_template_directory_uri(); ?>/img/img/img_backgroundsp.png" alt=""></div> -->
        <!-- background背景 -->
        <div class="authoritativeness__items">
            <div class="authoritativeness__deco"><img src="<?php echo get_template_directory_uri(); ?>/img/img/leaf_left.png" alt="leaf_left"></div>
            <div class="authoritativeness__titles">
                <a class="user">おかげさまで<br class="pc_hid">Rich-Life USER 総会員数</a>
                <div class="authoritativeness__title">
                    <a class="title-left">16</a>
                    <a class="title-right">万人突破!</a>
                </div>
            </div>
            <div class="authoritativeness__deco"><img src="<?php echo get_template_directory_uri(); ?>/img/img/leaf_right.png" alt="leaf_right"></div>
        </div>
    </section>


    <section class="voice">
        <div class="contents__title">
            <a class="voice__title">利用者さまの声</a> <!-- before-after -->
        </div>
        <div class="voice__container wow fadeInUp" data-wow-offset="200">
            <div class="voice__card">
                <div class="voice__card-img-women"><img src="<?php echo get_template_directory_uri(); ?>/img/img/img_woman in the room.png" alt="woman-in-the-room ">
                </div>
                <div class="voice__card-title">
                    <p>センスのいい家具で</p>
                    <div class="title-under">
                        <p>ワンランク上のお部屋に</p>
                    </div>
                </div>
                <div class="voice__card-voice">必要なときにだけ借りることができるコンセプトに魅力を感じて利用。
                    レンタルできる家具はどれもセンスが良いので、ハズレがありません。そしてRich-Lifeの家具をお迎えしたことで、いつものおうち空間がワンランク上の部屋になって本当にうれしいです。
                    今ではシーズンごとに家具のテイストを変えるのが楽しみになっています。</div>
                <div class="voice__card-commentator">20代女性・XXXX子さん</div>
            </div>
            <div class="voice__card">
                <div class="voice__card-img-pc"><img src="<?php echo get_template_directory_uri(); ?>/img/img/img_parent&child.png" alt="parent&child"></div>
                <div class="voice__card-title">
                    <p>家具家電を汚した時の</p>
                    <div class="title-under">
                        <p>レンタル保証がうれしい。</p>
                    </div>
                </div>
                <div class="voice__card-voice">
                    家具のレンタルに興味はあったものの、小さい子どもがいるので家具・家電を汚してしまった時のことが心配でなかなか踏み切れずにいました。ですがRich-Lifeは家具を汚したときの保証があるので安心して利用できています。以前子供がソファーに飲み物をこぼしてしまったのですが無料で交換してくれてとても助かりました。
                </div>
                <div class="voice__card-commentator">30代女性・XXXX子さん</div>
            </div>
            <div class="voice__card">
                <div class="voice__card-img-room"><img src="<?php echo get_template_directory_uri(); ?>/img/img/img_room 1.png" alt="room"></div>
                <div class="voice__card-title">
                    <p>本当に好きなモノに囲まれる</p>
                    <div class="title-under">
                        <p>豊かな暮らしを。</p>
                    </div>
                </div>
                <div class="voice__card-voice">
                    子どもが巣立ち、これからは必要最小限でかつ品質の良いお気に入りのモノたちに囲まれた生活をしたいと思っていました。でもいきなり購入するのは気が引ける、と思っていたところこちらのサービスを見つけました。月額440円〜利用できますので色々試しながらこれからの自分たちに合った家具・家電を探しています。
                </div>
                <div class="voice__card-commentator">50代女性・XXXX子さん</div>
            </div>
        </div>
    </section>
    <section class="solution">
        <div class="contents__title">
            <a class="solution__title">こんなことでお悩みではないですか？</a> <!-- before-after -->
        </div>
        <div class="solution__contents wow fadeInUp" data-wow-offset="200">
            <div class="solution__content">
                <p>しっくりくる家具を選びたい、<br class="pc_hid">でもいきなり買うのは自信がない</p>
            </div>
            <div class="solution__content">
                <p>引っ越しのたびに物を持っている<br class="pc_hid">ことが大きな負担である。</p>
            </div>
            <div class="solution__content">
                <p>きちんとした家具を使いたいけ<br class="pc_hid">ど、予算的に負担が大きい</p>
            </div>
            <div class="solution__content-group">
                <div class="solution__content-double">
                    <p>新しい商品が出たら買い換えたい</p>
                </div>
                <div class="solution__content-double">
                    <p>模様替えをもっと楽しみたい</p>
                </div>
            </div>
            <div class="solution__content">
                <p>モノを捨てない、環境に優しい<br class="pc_hid">暮らしを楽しみながらしたい</p>
            </div>
        </div>
    </section>
    <div class="solution__comment">
        <img class="sol-img" src="<?php echo get_template_directory_uri(); ?>/img/img/solution_back1.png" alt="">
        <img class="sol-img-tab" src="<?php echo get_template_directory_uri(); ?>/img/img/sol-tab.jpeg" alt="">
        <img class="sol-img-sp" src="<?php echo get_template_directory_uri(); ?>/img/img/solution_back.png" alt="">
        <div class="sol-comment">Rich-Lifeの<br class="pc_hid">家具・家電レンタルサービスは<br class="pc_hid">そんな理想の暮らしをご提供いたします。</div>
    </div>


    <section class="realization-scene01">
        <div class="contents__title">
            <a class="realization__title">Rich-Lifeで叶える、理想の暮らし紹介</a> <!-- before-after -->
        </div>
        <div class="realization__top wow fadeInUp" data-wow-offset="200"><img src="<?php echo get_template_directory_uri(); ?>/img/img/img_main.jpeg" alt="main"></div><!-- ::before'scene 01' -->
        <div class="realization__bg"></div>
        <div class="realization__contents wow fadeInUp" data-wow-offset="200">
            <!-- display:flex -->
            <div class="realization__rectangle">
                <div class="realization__rectangle-title">
                    <div class="title_group">
                        <div class="rectangle-title-up">「スキ」なものを際立たせた</div>
                        <div class="rectangle-title-under">空間作りを。</div>
                    </div>
                </div>
                <div class="realization__rectangle-stylepoint">
                    <p class="advice-title">STYLE POINT</p>
                    <p class="advice-comment">
                        ソファの足元にオットマンを配置すれば、カウチスタイルの出来上がり。<br>アームレスの特徴を活かして左右どちらにでも足を降ろしやすいので、楽な姿勢を見つけてみて。</p>
                </div>
                <div class="realization__rectangle-advice">
                    <p class="advice-title">ONE POINT ADVICE</p>
                    <p class="advice-comment">
                        モバイルプロジェクターをサイドテーブルに置いて、足を伸ばした状態でゆったりと映画を楽むのはどうでしょう。Rich-Lifeではターンテーブルやスピーカーなどの音楽 家電も取り扱っています。
                    </p>
                    <img class="re-pr-sp" src="<?php echo get_template_directory_uri(); ?>/img/img/img_projector-sp.jpeg" alt="projector">
                    <img class="re-pr-tab" src="<?php echo get_template_directory_uri(); ?>/img/img/img_projector-tab.jpeg" alt="projector">
                </div>
            </div>
            <div class="re-img">
                <img class="re-pr" src="<?php echo get_template_directory_uri(); ?>/img/img/img_projector.jpeg" alt="projector">
            </div>
        </div>
        <div class="realization__lineup wow fadeInUp" data-wow-offset="200">
            <div class="realization__lineup-title">
                <!-- ::before,after-border -->
                <div class="lineup__title-main"><p>使用している家具・家電</p></div>
                <p class="lineup__title-sub">LINE UP</p>
            </div>
            <div class="realization__lineup-card">
                <div class="lineup-card-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/img/img_speaker.jpeg" alt="speaker">
                    <p class="re__card-title">House of Speaker</p>
                    <p class="re__card-sub">Rich Black</p>
                </div>
                <div class="lineup-card-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/img/img_projector2.jpeg" alt="projector">
                    <p class="re__card-title">Mobile Projector</p>
                    <p class="re__card-sub">Silver</p>
                </div>
                <div class="lineup-card-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/img/img_roomsofa.jpeg" alt="room-sofa">
                    <p class="re__card-title">Couch Sofa</p>
                    <p class="re__card-sub">1P</p>
                </div>
            </div>
        </div>
    </section>


    <section class="realization-scene02">
        <div class="realization__top wow fadeInUp" data-wow-offset="200"><img src="<?php echo get_template_directory_uri(); ?>/img/img/img_main02.jpeg" alt="main"></div><!-- ::before'scene 02' -->
        <div class="realization__bg"></div>
        <div class="realization__contents wow fadeInUp" data-wow-offset="200">
            <div class="re-img">
                <img class="re-pr" src="<?php echo get_template_directory_uri(); ?>/img/img/img_room-left.jpeg" alt="projector">
            </div>
            <div class="realization__rectangle">
                <!-- ::after-bg -->
                <div class="realization__rectangle-title">
                    <div class="title_group">
                        <span class="rectangle-title-up">季節にあった彩りを</span>
                        <span class="rectangle-title-under">手軽に楽しむ。</span>
                    </div>
                </div>
                <div class="realization__rectangle-stylepoint">
                    <p class="advice-title">STYLE POINT</p>
                    <p class="advice-comment">
                        ソファの上のクッションや壁面のフレーム、ソファ横の1人掛けの椅子などをベージュ〜ブラウンのアースカラーで統一。一方で碧編の白をワゴンの上に置くことで調和をとり、全体的に落ち着いた雰囲気に。
                    </p>
                </div>
                <div class="realization__rectangle-advice">
                    <p class="advice-title">ONE POINT ADVICE</p>
                    <p class="advice-comment">お部屋のコーディネートをまとめるコツの一つとして、
                        同系色を散らして使うテクニックがあります。寒い冬の日でもどこかあたたかさと落ち着きを感じさせるベージュ〜ブラウンのアースカラーを試してみては？</p>
                        <img class="re-pr-sp" src="<?php echo get_template_directory_uri(); ?>/img/img/img_room-left-sp.jpeg" alt="projector">
                        <img class="re-pr-tab" src="<?php echo get_template_directory_uri(); ?>/img/img/img_room-left-tab.jpeg" alt="projector">

                </div>
            </div>
        </div>
        <div class="realization__lineup wow fadeInUp" data-wow-offset="200">
            <div class="realization__lineup-title">
                <!-- ::before,after-border -->
                <p class="lineup__title-main">使用している家具・家電</p>
                <p class="lineup__title-sub">LINE UP</p>
            </div>
            <div class="realization__lineup-card">
                <div class="lineup-card-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/img/img_sofa.jpeg" alt="sofa">
                    <p class="re__card-title">Low Sofa</p>
                    <p class="re__card-sub">ローソファ</p>
                </div>
                <div class="lineup-card-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/img/img_table.jpeg" alt="table">
                    <p class="re__card-title">Mini Table</p>
                    <p class="re__card-sub">直径45cm</p>
                </div>
                <div class="lineup-card-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/img/img_chair.jpeg" alt="chair">
                    <p class="re__card-title">Single Sofa</p>
                    <p class="re__card-sub">一人掛けソファ</p>
                </div>
            </div>
        </div>
    </section>
    <section class="subscribe__02">
        <section class="subscribe">
            <div class="subscribe__contents">
    
                <div class="subscribe__copy-side">
                    <div class="sub-cpl">
                        <div class="limited">LIMITED TIME</div>
                        <div class="camp"><a>CAMPAIGN</a></div>
                    </div>
                </div>
    
                <div class="subscribe__box">
                    <div class="subscribe__box-title">
                        <div class="subscribe__copy">
                            高品質でセンスのいい
                            <br class="pc_hid">家具・家電を<br>
                            <a class="uni">10</a>
                            <a class="under">%0FF価格で
                                <br class="pc_hid">レンタルできます。</a>
                        </div>
                    </div>
                    <div class="subscribe__features">
                        <div class="subscribe__feature">月額<br class="pc_hid">440円〜</div>
                        <div class="subscribe__feature">1ヶ月〜レンタル可能</div>
                        <div class="subscribe__feature">長期レンタル<br class="pc_hid">割引あり</div>
                    </div>
                    <div class="subscribe__button">
                        <div class="subscribe__button-bubble"><a>カンタン！ 3 STEP</a></div>
                        <button class="subscribe__button-now"><a>今すぐ会員登録</a></button>
                    </div>
                </div>
    
                <div class="subscribe__copy-side">
                    <div class="sub-cpr">
                        <div class="limited">LIMITED TIME</div>
                        <div class="camp"><a>CAMPAIGN</a></div>
                    </div>
                </div>
    
            </div>
        </section>

    </section>
    <section class="features">
        <div class="contents__title">
            <a class="features__title">Rich-Lifeが愛される4つのポイント</a> <!-- before-after -->
        </div>
        <div class="features__contents wow fadeInUp" data-wow-offset="200">
            <div class="features__content">
                <div class="features__items">
                    <div class="features__img">
                        <img class="img1" src="<?php echo get_template_directory_uri(); ?>/img/img/img_desk&chair.jpeg" alt="desk-chair">
                    </div>
                    <div class="features__content-point">
                        <div class="point-tag">point 01</div>
                        <div class="point-title"><span>交</span>換・返却が自由でカンタン</div><!-- ::before頭文字 -->
                        <div class="point-text">
                            自分の生活に最適なものを使うために時間や労力をかけて選んだにも関わらず、「思っていたのと違う」と後悔した経験はありませんか？Rich-Lifeでは家具・家電のレンタルができますので取捨選択にかける時間を大幅にカットできます。また実際に使用してみて、自分に合わないと思ったらすぐに交換・返却ができるので、手軽さゆえの心の余裕が生まれるのもポイント。
                        </div>
                    </div>
                </div>
            </div>
            <div class="features__content">
                <div class="features__items">
                    <div class="features__content-point">
                        <div class="point-tag even">point 02</div>
                        <div class="point-title even"><span>月</span>額定額制で返却期限なし</div><!-- ::before頭文字 -->
                        <div class="point-text">
                            1ヶ月という短期間からのレンタルが可能ですので、自分により合う家具・家電を色々試せる手軽さが最大の特徴。また、月額定額制なので費用管理がしやすいのもポイント。
                        </div>
                    </div>
                    <div class="features__img">
                        <img class="img2" src="<?php echo get_template_directory_uri(); ?>/img/img/img_subscription.jpeg" alt="subscription">
                    </div>
                </div>
            </div>
            <div class="features__content">
                <div class="features__items">
                    <div class="features__img">
                        <img class="img3" src="<?php echo get_template_directory_uri(); ?>/img/img/img_room.jpeg" alt="room">
                    </div>
                    <div class="features__content-point">
                        <div class="point-tag">point 03</div>
                        <div class="point-title"><span>き</span>ちんとした品質でセンスのいいものだけをセレクト</div><!-- ::before頭文字 -->
                        <div class="point-text">
                            きちんとしたモノは自分の生活の質を向上させてくれます。生活の質は心の余裕にも繋がりますので、それが自然と自分の気持ちをも高めてくれる好循環が生まれます。またきちんとした品質でかつセンスのいいものだけを取り揃えておりますので家具・家電の善し悪しが分からないという人でも失敗が少ないのも嬉しいポイントです。
                        </div>
                    </div>
                </div>
            </div>
            <div class="features__content">
                <div class="features__items">
                    <div class="features__content-point">
                        <div class="point-tag even">point 04</div>
                        <div class="point-title even"><span>ラ</span>イフステージの変化に対応</div><!-- ::before頭文字 -->
                        <div class="point-text">
                            年齢が上がるにつれてライフステージは変遷していくもの。それと同時に、そのときの暮らしにあった家具・家電のスペックが変わりますので、購入するとなると生活スタイルが変わるたびに家具・家電の入れ替えを迫られるなんてことも。でもRich-Lifeはレンタル品なので、先の心配をすることなく「今の自分に必要なモノだけ」を置いておける気楽さを手に入れられます。また、まだまだ使えるモノを廃棄するという手間や罪悪感をも払拭してくれます。
                        </div>
                    </div>
                    <div class="features__img">
                        <img class="img4" src="<?php echo get_template_directory_uri(); ?>/img/img/img_family.jpeg" alt="family">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="how-to-use">
        <div class="contents__title">
            <a class="how-to-use__title">気軽に簡単にRich-Lifeの使い方</a> <!-- before-after -->
        </div>
        <div class="how-to-use__contents wow fadeInUp" data-wow-offset="200">
            <div class="how-to-use__contents-card">
                <img class="how-to-use__contents-img" src="<?php echo get_template_directory_uri(); ?>/img/img/img_search.jpeg" alt="search">
                <div class="how-to-use__content-items">
                    <div class="how-to-use__content-title no01">ネットで注文</div><!-- ::before-number -->
                    <div class="how-to-use__content-text">スマホやパソコンから、商品と配送希望日を選んで、注文</div>
                </div>
            </div>
            <div class="how-to-use__contents-card">
                <img class="how-to-use__contents-img" src="<?php echo get_template_directory_uri(); ?>/img/img/img_moving.jpeg" alt="moving">
                <div class="how-to-use__content-items">
                    <div class="how-to-use__content-title no02">配送・設置</div><!-- ::before-number -->
                    <div class="how-to-use__content-text">専門業者がご自宅までお届け 商品の搬入は全ておまかせ</div>
                </div>
            </div>
            <div class="how-to-use__contents-card">
                <img class="how-to-use__contents-img" src="<?php echo get_template_directory_uri(); ?>/img/img/img_chairhowto.jpeg" alt="chair">
                <div class="how-to-use__content-items">
                    <div class="how-to-use__content-title no03">ご利用</div><!-- ::before-number -->
                    <div class="how-to-use__content-text">購入した商品と同じように普段の生活でご利用いただけます</div>
                </div>
            </div>
            <div class="how-to-use__contents-card">
                <img class="how-to-use__contents-img" src="<?php echo get_template_directory_uri(); ?>/img/img/img_roomhowto.jpeg" alt="room">
                <div class="how-to-use__content-items">
                    <div class="how-to-use__content-title no04">交換・返送</div><!-- ::before-number -->
                    <div class="how-to-use__content-text">交換や返却の際も、搬出は専門業者に全ておまかせ ※一部地域を除く</div>
                </div>
            </div>
        </div>
    </section>
    <section class="subscribe__03">
        <section class="subscribe">
            <div class="subscribe__contents">
    
                <div class="subscribe__copy-side">
                    <div class="sub-cpl">
                        <div class="limited">LIMITED TIME</div>
                        <div class="camp"><a>CAMPAIGN</a></div>
                    </div>
                </div>
    
                <div class="subscribe__box">
                    <div class="subscribe__box-title">
                        <div class="subscribe__copy">
                            高品質でセンスのいい
                            <br class="pc_hid">家具・家電を<br>
                            <a class="uni">10</a>
                            <a class="under">%0FF価格で
                                <br class="pc_hid">レンタルできます。</a>
                        </div>
                    </div>
                    <div class="subscribe__features">
                        <div class="subscribe__feature">月額<br class="pc_hid">440円〜</div>
                        <div class="subscribe__feature">1ヶ月〜レンタル可能</div>
                        <div class="subscribe__feature">長期レンタル<br class="pc_hid">割引あり</div>
                    </div>
                    <div class="subscribe__button">
                        <div class="subscribe__button-bubble"><a>カンタン！ 3 STEP</a></div>
                        <button class="subscribe__button-now"><a>今すぐ会員登録</a></button>
                    </div>
                </div>
    
                <div class="subscribe__copy-side">
                    <div class="sub-cpr">
                        <div class="limited">LIMITED TIME</div>
                        <div class="camp"><a>CAMPAIGN</a></div>
                    </div>
                </div>
    
            </div>
        </section>
    
        </div>
    </section>
    <section class="faq">
        <div class="contents__title">
            <a class="faq__title">よくある質問</a> <!-- before-after -->
        </div>
        <div class="faq__contents wow fadeInUp" data-wow-offset="200">
            <div class="faq__contents-left">
                <div class="faq__question">
                    <div class="faq__question-text">
                        <a class="que">Rich-lifeはどんなサービスですか？</a> <!-- before-Q -->
                        <div class="faq-items">
                            <div class="faq__vertical"></div> <!-- deg90 -->
                            <div class="faq__horizon"></div> <!-- display:none -->
                        </div>
                    </div>
                    <div class="faq__answer">
                        <a class="answer">Rich-lifeは必要なときに必要なものだけを使える家具・家電のレンタルサービスです。</a><!-- before-A -->
                    </div>
                </div>

                <div class="faq__question">
                    <div class="faq__question-text">
                        <a class="que">注文してから届くまでどのくらい<br class="pc_hid">の期間がかかりますか？</a> <!-- before-Q -->
                        <div class="faq-items">
                            <div class="faq__vertical"></div> <!-- deg90 -->
                            <div class="faq__horizon"></div> <!-- display:none -->
                        </div>
                    </div>
                    <div class="faq__answer">
                        <a class="answer">商品とお住まいの地域によりますが、約1週間ほどでお届けいたします。</a><!-- before-A -->
                    </div>
                </div>


                <div class="faq__question">
                    <div class="faq__question-text">
                        <a class="que">申込の仕方を教えてください。</a> <!-- before-Q -->
                        <div class="faq-items">
                            <div class="faq__vertical"></div> <!-- deg90 -->
                            <div class="faq__horizon"></div> <!-- display:none -->
                        </div>
                    </div>
                    <div class="faq__answer">
                        <a class="answer">1.ご希望の商品を選択し、カートへ入れてください。<br>
                            2.右上のカートボタンを押し、お届け先と支払い情報の登録をお願いいたします。<br>
                            3.配送日を選択し、注文確定ボタンを押していただけましたら注文完了となります。</a><!-- before-A -->
                    </div>
                </div>
            </div>

            <div class="faq__contents-right">
                <div class="faq__question">
                    <div class="faq__question-text">
                        <a class="que">レンタル期間は選べますか？</a> <!-- before-Q -->
                        <div class="faq-items">
                            <div class="faq__vertical"></div> <!-- deg90 -->
                            <div class="faq__horizon"></div> <!-- display:none -->
                        </div>
                    </div>
                    <div class="faq__answer">
                        <a class="answer">レンタル期間は1ヶ月からです。更新手続きは毎月自動で行いますので更新手続きは不要です。</a><!-- before-A -->
                    </div>
                </div>
                <div class="faq__question">
                    <div class="faq__question-text">
                        <a class="que">商品の交換は可能ですか？</a> <!-- before-Q -->
                        <div class="faq-items">
                            <div class="faq__vertical"></div> <!-- deg90 -->
                            <div class="faq__horizon"></div> <!-- display:none -->
                        </div>
                    </div>
                    <div class="faq__answer">
                        <a class="answer">可能でございます。マイページより交換申請手続きをお願いいたします。</a><!-- before-A -->
                    </div>
                </div>
            </div>

        </div>
        <div class="faq__button">
            <button class="faq__button-look">
                <p>よくある質問を見る</p>
            </button><!-- after -> -->
        </div>
    </section>

    <footer id="bg888">
        <div class="footer__container">
            <div class="footer__contents">
                <div class="footer__contents-card">
                    <div class="footer__content-title">SERVICE</div>
                    <div class="footer__content">
                        <ul>
                            <li>すべて</li>
                            <li>家具</li>
                            <li>家電</li>
                            <li>お知らせ</li>
                            <li>商品の魅力・選び方記事</li>
                        </ul>
                    </div>
                </div>
                <div class="footer__contents-card">
                    <div class="footer__content-title">ABOUT</div>
                    <div class="footer__content">
                        <ul>
                            <li>会社概要</li>
                            <li>採用情報</li>
                        </ul>
                    </div>
                </div>
                <div class="footer__contents-card">
                    <div class="footer__content-title">SUPPORT</div>
                    <div class="footer__content">
                        <ul>
                            <li>よくある質問</li>
                            <li>お問い合わせ(個人のお客様)</li>
                            <li>お問い合わせ(法人のお客様)</li>
                            <li>プライバシー</li>
                            <li>利用規約</li>
                            <li>法人会員向け利用規約</li>
                            <li>特定商取引法に基づく表記</li>
                        </ul>
                    </div>
                </div>
                <div class="footer__contents-card">
                    <div class="footer__content-title">CLAS BUSINESS</div>
                    <div class="footer__content">
                        <ul>
                            <li>法人向けサービスについて</li>
                            <li>手軽にためす</li>
                            <li>まとめておまかせ</li>
                            <li>導入事例</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer__icon">
                <img src="<?php echo get_template_directory_uri(); ?>/img/img/inst.jpeg" alt="instagram">
                <img src="<?php echo get_template_directory_uri(); ?>/img/img/twitter.jpeg" alt="twitter">
                <img src="<?php echo get_template_directory_uri(); ?>/img/img/facebook.jpeg" alt="facebook">
            </div>
            <div class="notes">本サイト内は株式会社CLAS様のご協力のもと作成したコーディング用の練習課題です。実在の人物・団体とは関係ありません。</div>
            <div class="copyright">©️ 2022 Rich-Life Inc.</div>
        </div>
    </footer>
    <div id="lp_page-top"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/img/yajirusiue.png" alt=""></a></div>

    <script src="/imgttps://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        new WOW().init();
    </script>
    <?php wp_footer() ?>
</body>