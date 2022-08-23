<?php
/*
Template Name: blog
*/
?>

<?php get_header(); ?>


<section class="top">
    <div class="top__contents">
        <div class="top__img">
            <div class="top__title">スタッフブログ</div>
            <div class="top__text">STAFF BLOG</div>
        </div>
        <div class="top__tag">
            <a href="<?php echo home_url(); ?>" class="top__home">ホーム</a>
            <div class="top__next tag__left">＞</div>
            <div class="top__about tag__left"><?php the_title(); ?></div>
        </div>
    </div>
</section>

<div class="contents__wrap">

    <section class="blog">
        <?php if (have_posts()) : ?>
            <div class="blog__contents">


                <?php while (have_posts()) : the_post(); ?>
                    <a href="<?php the_permalink(); ?>" class="blog__card">
                        <?php keika_time(3); ?>
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
                            <div class="blog__date"><?php the_time('Y-m-d') ?></div>
                        </div>
                    </a><!-- blog__card -->
                <?php endwhile; ?>


            </div><!-- blog__contents -->
        <?php endif; ?>



        <div class="pagenation">
            <?php if (paginate_links()) : //ページが1ページ以上あれば以下を表示 ?>
                <div class="pagenation__contents">
                    <?php
                    echo
                    paginate_links(
                        array(
                            'end_size' => 1,
                            'mid_size' => 1,
                            'prev_next' => true,
                            'prev_text' => '&lt;&lt;前へ',
                            'next_text' => '次へ&gt;&gt;',
                        )
                    );
                    ?>
                </div>
            <?php endif; ?>
        </div>
    </section><!-- blog -->


    <?php get_sidebar('archive'); ?>
</div><!-- contents__wrap -->

<?php get_footer(); ?>