<?php 
/*
Template Name: contact
*/
?>

<?php get_header(); ?>

    <section class="top">
        <div class="top__contents">
            <div class="top__img">
                <div class="top__title">お問い合わせ</div>
                <div class="top__text">CONTACT</div>
            </div>
            <div class="top__tag">
                <a href="<?php echo home_url(); ?>" class="top__home">ホーム</a>
                <div class="top__next tag__left">＞</div>
                <div class="top__about tag__left">お問い合わせ</div>
            </div>
        </div>
    </section>

    <div class="contact_thanks-text">
        <p>お急ぎの方は、お電話(TEL 03-1234-5678)での連絡がスムーズです。<br>以下のフォームからお問い合わせ頂いた場合、ご連絡が2～3日後になる場合がございます。<br>また、メールアドレスの入力間違いにより送信できない事が発生しておりますので、メールアドレスは正しくご入力下さい。</p>
        <p class="text_red">※3営業日以内に当院からの返信がない場合には、お電話(TEL 03-1234-5678)にてお問い合わせ下さい。</p>
    </div>

    <div class="contact">
        <div class="contents__title">
            <h3 class="title__recommend">お問い合わせフォーム</h3>
        </div> <!-- contents__title -->

        <div class="contact__box">
            <!-- <form action="index_page-contact-thanks.html" class="contact-form" method="post">
                <div class="form__contents">
              
                    <div class="form__content">
                        <div class="form__label"><label class="btn__red" for="name"　>お名前</label></div>
                        <div class="form__input"><input type="text" id="name" placeholder="山田 太郎"></div>
                    </div>

                    <div class="form__content">
                        <div class="form__label"><label class="btn__red" for="kana" >フリガナ</label></div>
                        <div class="form__input"><input type="text" id="kana" placeholder="ヤマダ タロウ" pattern="[\u30A1-\u30F6]*"></div>
                    </div>

                    <div class="form__content">
                        <div class="form__label"><label class="btn__red" for="tel" >電話番号</label></div>
                        <div class="form__input"><input type="tel" id="tel" placeholder="000-0000-0000"></div> 
                    </div>

                    <div class="form__content">
                        <div class="form__label"><label class="btn__red" for="mail" >メールアドレス</label></div>
                        <div class="form__input"><input type="email" id="mail" placeholder="xxx@example.com"></div>
                    </div>

                    <div class="form__content">
                        <div class="form__label"><label class="btn__red" for="detail" >お問い合わせ内容</label></div>
                        <div class="form__input"><textarea name="" id="detail" cols="29" rows="6" placeholder="ご自由にご記入ください"></textarea></div>
                    </div>
                <!-- </div>form__contents -->
<!-- 
                    <div class="form__contents-btn">
                        <button type="submit" class="form__btn"><p>送信</p></button>
                    </div>

            </form>contact-form -->
            <?php echo do_shortcode( '[contact-form-7 id="112" title="お問い合わせ"]' ); ?>
        </div><!-- contact__box -->
    </div><!-- contact -->

    <?php get_footer(); ?>
