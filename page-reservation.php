<?php 
/*
Template Name: rsv
*/
?>

<?php get_header(); ?>


    <section class="top">
        <div class="top__contents">
            <div class="top__img">
                <div class="top__title">WEB予約</div>
                <div class="top__text">RESERVE</div>
            </div>
            <div class="top__tag">
                <a href="" class="top__home">ホーム</a>
                <div class="top__next tag__left">＞</div>
                <div class="top__about tag__left">WEB予約</div>
            </div>
        </div>
    </section>

    <div class="reserve_thanks-text">
        <div class="reserve_thanks-text-content">
            <h2>お電話でのご予約/ご相談</h2>
            <div class="reserve_thanks-address">
                <img src="./img/img_contact/tel_contact.png" alt="">
                <div class="adress-time">(年中無休 AM9:00〜PM22:00)</div>
            </div>
            <p>お急ぎの方は電話での連絡がスムーズです。<br>混雑状況によっては当日受診をご利用いただけない場合がございます。<br>あらかじめご了承ください。</p>
        </div>
        <div class="reserve_thanks-text-content">
            <h2>メールでのご予約/ご相談</h2>
            <p>【ご予約に関しての注意点】<br>メールアドレスの入力間違いにより送信できない事が発生しておりますので、メールアドレスは正しくご入力下さい。<br>※24時間以内に当院からの返信がない場合には、お電話(TEL 03-1234-5678)にてお問い合わせ下さい。</p>
        </div>
    </div>


    <div class="reserve">
        <div class="contents__title">
            <h3 class="title__recommend">予約フォーム</h3>
        </div> <!-- contents__title -->

        <div class="reserve__box">
          
        
<!--         
        <form action="https://mskwork.org/wordpress/rsv/rsv_thx" class="reserve-form" method="post">
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
                        <div class="form__label"><p class="btn__red">初診/再診</p></div>
                        <div class="form__input sp-radio">
                            <label class="btn__red radio" for="radio-01"><input type="radio" id="radio-01" name="radio" checked ><span class="radio-btn">初診</span></label>
                            <label class="btn__red radio" for="radio-02"><input type="radio" id="radio-02" name="radio"><span class="radio-btn">再診</span></label>
                        </div> 
                    </div>

                    <div class="form__content">
                        <div class="form__label checkbox__must"><p class="btn__red">診療内容</p></div>
                        
                        <div class="form__input sp-checkbox">
                            <label class="btn__red" for="checkbox-01" ><input type="checkbox" id="checkbox-01"><span class="checkbox bottom">虫歯</span></label>
                            <label class="btn__red" for="checkbox-02" ><input type="checkbox" id="checkbox-02"><span class="checkbox bottom">被せ物がとれた</span></label>
                            <label class="btn__red" for="checkbox-03" ><input type="checkbox" id="checkbox-03"><span class="checkbox bottom">矯正歯科</span></label>
                            <label class="btn__red" for="checkbox-04" ><input type="checkbox" id="checkbox-04"><span class="checkbox bottom">咬み合わせ</span></label>
                            <label class="btn__red" for="checkbox-05" ><input type="checkbox" id="checkbox-05"><span class="checkbox bottom">歯周病</span></label>
                            <label class="btn__red" for="checkbox-06" ><input type="checkbox" id="checkbox-06"><span class="checkbox bottom">小児歯科</span></label>
                            <label class="btn__red" for="checkbox-07" ><input type="checkbox" id="checkbox-07"><span class="checkbox bottom">入れ歯</span></label>
                            <label class="btn__red" for="checkbox-08" ><input type="checkbox" id="checkbox-08"><span class="checkbox bottom">インプラント</span></label>
                            <label class="btn__red" for="checkbox-09" ><input type="checkbox" id="checkbox-09"><span class="checkbox">その他</span></label>
                        </div>
                    </div>

                    <div class="form__content">
                        <div class="form__label"><p class="btn__red">ご連絡方法</p></div>
                        <div class="form__input uni">
                            <select name="contact">
                                <option value="email-01">メール 01</option>
                                <option value="email-02">メール 02</option>
                                <option value="email-03">メール 03</option>
                            </select>     
                        </div>
                    </div>

                    <div class="form__content">
                        <div class="form__label"><label class="btn__red" for="date" >希望日</label></div>
                        <div class="form__input">
                                <input type="date" id="date">
                                <input type="date" id="date">
                                <input type="date" id="date">
                        </div>
                    </div>
                    
                    <div class="form__content">
                        <div class="form__label"><label class="btn__red" for="detail" >お問い合わせ内容</label></div>
                        <div class="form__input"><textarea name="" id="detail" cols="29" rows="6" placeholder="ご自由にご記入ください"></textarea></div>
                    </div>
                </div>

                    <div class="form__contents-btn">
                        <button type="submit" class="form__btn"><p>送信</p></button>
                    </div>
            </form>
           -->
          
          
            <?php echo do_shortcode( '[contact-form-7 id="125" title="予約"]' ); ?>
        </div><!-- reserve__box -->
    </div><!-- reserve -->


    <?php get_footer(); ?>

