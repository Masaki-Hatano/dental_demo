<?php 
/*
Template Name: news
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
                <div class="top__about tag__left">スタッフブログ</div>
            </div>
        </div>
    </section>

    <div class="contents__wrap">

<section class="news-blog">

<?php
 
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
 
$the_query = new WP_Query( array(
  'post_status' => 'publish',
  'paged' => $paged,
  'posts_per_page' => 3, // 表示件数
  'orderby'     => 'date',
  'order' => 'DESC'
) );
 
 
if ($the_query->have_posts()) : ?>
 

        <div class="news-blog__contents">


        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                <a href="<?php the_permalink(); ?>" class="news-blog__card">
                    <div class="news-blog__img">
                        <?php if (has_post_thumbnail()) {
                            the_post_thumbnail('my_thumbnail');
                        } else {
                            echo '<img src="' . esc_url(get_template_directory_uri()) . '/img/noimg.png" alt="">';
                        }
                        ?>
                    </div>
                    <div class="news-blog__text">
                        <div class="news-blog__tag">
                            <?php /* 1個だけ出力する例 */ if ( !empty( $tmp_cat = get_the_category() ) ) { echo $tmp_cat[0]->cat_name; } ?>
                        </div>
                        <h4 class="news-blog__title"><?php the_title(); ?></h4>
                        <div class="news-blog__date"><?php the_time('Y-m-d') ?></div>
                    </div>
                </a><!-- blog__card -->
            <?php endwhile; ?>


        </div><!-- blog__contents -->
    <?php endif; ?>



    <div class="pagenation">

            <div class="pagenation__contents">
            <?php //ページリスト表示処理
global $wp_rewrite;
$paginate_base = get_pagenum_link(1);
if(strpos($paginate_base, '?') || ! $wp_rewrite->using_permalinks()){
  $paginate_format = '';
  $paginate_base = add_query_arg('paged','%#%');
}else{
  $paginate_format = (substr($paginate_base,-1,1) == '/' ? '' : '/') .
  user_trailingslashit('page/%#%/','paged');
  $paginate_base .= '%_%';
}
echo paginate_links(array(
  'base' => $paginate_base,
  'format' => $paginate_format,
  'total' => $the_query->max_num_pages,
  'mid_size' => 1,
  'current' => ($paged ? $paged : 1),
  'prev_text' => '< 前へ',
  'next_text' => '次へ >',
)); ?>
            </div>

    </div>
</section><!-- blog -->



        <?php get_sidebar(); ?>
    </div><!-- contents__wrap -->

    <?php get_footer(); ?>

