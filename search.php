<?php get_header(); ?>

<article class="l-main-contents">
    <div class="p-archive">
        <div class="p-archive__menu-img">
            <h2>Search:</h2>
            <span><?php echo get_search_query(); ?></span>
        </div>
        <section class="p-archive__contents">
            <div class="p-archive__contents__heading">
                <h3>小見出しが入ります</h3>
                <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
            </div>
            <?php query_posts($query_string.'&posts_per_page=5'); ?>
            <?php if (have_posts()) :
                while (have_posts()) :
                    the_post(); ?>
                    <div class="c-card">
                        <div class="c-card__img">
                        <a href="<?php the_permalink(); ?>">
                            <?php if (has_post_thumbnail()) : ?>
                                <?php the_post_thumbnail('full'); ?>
                            <?php endif; ?>
                        </a>
                        </div>
                        <div class="c-card__heading">
                            <h3><?php the_title(); ?></h3>
                            <div class="c-card__heading__contents">
                            <?php the_content('続きを読む'); ?>
                            </div>
                            <a href="<?php the_permalink(); ?>">詳しく見る</a>
                        </div>
                    </div>
                <?php endwhile;
            else :
                ?><p>表示する記事がありません</p><?php endif; ?>
            <!-- <div class="c-card">
                <img src="/img/card_cheese.png" alt="チーズバーガー">
                <div class="c-card__heading">
                    <h3>チーズバーガー</h3>
                    <h4>小見出しが入ります</h4>
                    <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                    <a href="#">詳しく見る</a>
                </div>
            </div>
            <div class="c-card">
                <img src="/img/card_cheese.png" alt="チーズバーガー">
                <div class="c-card__heading">
                    <h3>チーズバーガー</h3>
                    <h4>小見出しが入ります</h4>
                    <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                    <a href="#">詳しく見る</a>
                </div>
            </div> -->
            <div class="c-page">
            <?php wp_pagenavi(); ?>
                <!-- <div class="c-page__sp">
                    <div class="c-page__sp__left">
                        <a href="#"><i class="fas fa-angle-double-left"></i>前へ</a>
                    </div>
                    <div class="c-page__sp__right">
                        <a href="#">次へ<i class="fas fa-angle-double-right"></i></a>
                    </div>
                </div>
                <div class="c-page__tb">
                
                    <p>page 1/10</p>
                    <a href="#"><i class="fas fa-angle-double-left"></i></a>
                    <a href="#">1</a>
                    <a href="#">2</a>
                    <a href="#">3</a>
                    <a href="#">4</a>
                    <a href="#">5</a>
                    <a href="#">6</a>
                    <a href="#">7</a>
                    <a href="#">8</a>
                    <a href="#">9</a>
                    <a href="#"><i class="fas fa-angle-double-right"></i></a>
                </div> -->
            </div>
        </section>
    </div>
</article>
<?php get_sidebar(); ?> 
<?php get_footer(); ?>