
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
            <div class="top__about tag__left">スタッフブログ</div>
        </div>
    </div>
</section>

<div class="contents__wrap">
    
    <section class="single">
    <?php if (have_posts() ): ?>

      <div class="single__contents">
      <?php while (have_posts()) : the_post(); ?>


        <div class="single__title">
        <h1><?php the_title(); ?></h1>
            <div class="single__tag">
                <div class="single__date"><?php the_date('Y-m-d'); ?></div>
                <div class="single__cat">
                    <?php echo esc_html(get_the_terms(get_the_ID(), 'dentist')[0]->name); ?>
                    <?php echo esc_html(get_the_terms(get_the_ID(), 'other')[0]->name); ?>
                </div>
            </div>

        <div class="news__pic">
            <?php if (has_post_thumbnail()) {
                    the_post_thumbnail('large');
            }?>
        </div>

        <h2>見出し</h2>
        <h3>見出し</h3>
        <h4>見出し</h4>

        <div class="single__text">
            <?php the_content(); ?>
        </div>
        <?php endwhile; ?>
        </div>
        <?php endif; ?>

        <div class="single__pagenation">
            <div class="pagenation__contents">

                <?php $nextpost = get_adjacent_post(false, '', false); if ($nextpost) : ?>
                <a href="<?php echo get_permalink($nextpost->ID); ?>">
                    <div class="pagenation__page">
                        <img class="hover_left" src="<?php echo get_template_directory_uri(); ?>/img/img_blog/arrow-circle-left.png" alt="">
                        <p class="pl">前の記事へ</p>
                    </div>
                </a>
                <?php endif; ?>

                <a href="<?php echo home_url('/blog/'); ?>">
                    <div class="pagenation__btn">記事一覧</div>
                </a>

                <?php $prevpost = get_adjacent_post(false, '', true); if ($prevpost) : ?>
                <a href="<?php echo get_permalink($prevpost->ID); ?>">
                    <div class="pagenation__page">
                        <p>次の記事へ</p>
                        <img class="pl hover_right" src="<?php echo get_template_directory_uri(); ?>/img/img_blog/arrow-circle-right.png" alt="">
                    </div>
                </a>
                <?php endif; ?>



        </div><!-- pagenation__contents -->
      </div><!-- single__pagenation -->
    </section><!-- blog -->

    
    <?php get_sidebar('archive'); ?>

</div><!-- contents__wrap -->

<?php get_footer(); ?>









