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
            <?php get_template_part('menu-card'); ?>
        </section>
    </div>
</article>
<?php get_sidebar(); ?> 
<?php get_footer(); ?>