<section class="sidebar">
    <div class="introduction">
        <div class="sidebar__title-items">
            <img class="sidebar__icon" src="<?php echo get_template_directory_uri(); ?>/img/img_blog/icon-02.png" alt="">
            <h5 class="sidebar__title">クリニックの紹介</h5>
        </div>
        <img class="side__img" src="<?php echo get_template_directory_uri(); ?>/img/img_blog/sidebar-img_1.png" alt="">
        <div class="introduction__name">みなみ歯科クリニック</div>
        <div class="introduction__text">お子様からご高齢の方まで、快適な空間で治療が受けられる場を作り、地域医療に貢献しきたいと考えております。</div>
        <a href="<?php echo home_url('/about/'); ?>" class="introduction__about">当院について</a>
    </div><!-- introduction -->

    <?php
    $args = [
        'posts_per_page' => 3, // 表示する数
    ];
    $the_query = new WP_Query($args); ?>
    <?php if ($the_query->have_posts()) : // 投稿がある場合 ?>
        <div class="article">
            
            <div class="sidebar__title-items">
                <img class="sidebar__icon" src="<?php echo get_template_directory_uri(); ?>/img/img_blog/sidebar-icon_2.png" alt="">
                <h5 class="sidebar__title">新着記事</h5>
            </div>
            
            <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                <a href="<?php the_permalink(); ?>" class="blog__card">
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
                        <?php /* 1個だけ出力する例 */ if ( !empty( $tmp_cat = get_the_category() ) ) { echo $tmp_cat[0]->cat_name; } ?>
                        </div>
                        <h4 class="blog__title"><?php the_title(); ?></h4>
                        <div class="blog__date"><?php the_time('Y-m-d') ?></div>
                    </div>
                </a><!-- blog__card -->
            <?php endwhile; ?>


        </div><!-- article -->
    <?php endif; ?>


    <div class="category">
        <div class="sidebar__title-items">
            <img class="sidebar__icon" src="<?php echo get_template_directory_uri(); ?>/img/img_blog/sidebar-icon_3.png" alt="">
            <h5 class="sidebar__title">カテゴリー</h5>
        </div>
        <div class="category__tag">
            <?php // タームの一覧を表示
            $catlist = wp_list_categories(array(
                'taxonomy' => 'dentist', // タクソノミーの指定
                'title_li' => '', // リストの外側に表示されるタイトルを非表示
            ));
            echo $catlist; // タームの一覧を表示
            ?>
            <?php // タームの一覧を表示
            $catlist = wp_list_categories(array(
                'taxonomy' => 'other', // タクソノミーの指定
                'title_li' => '', // リストの外側に表示されるタイトルを非表示
            ));
            echo $catlist; // タームの一覧を表示
            ?>
        </div>
    </div>
    <!-- category -->
</section><!-- sidebar -->