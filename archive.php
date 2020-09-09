<?php get_header(); ?>

<article class="l-main-contents">
    <div class="p-archive">
        <div class="p-archive__menu-img">
            <h2>Menu:</h2>
            <?php the_archive_title(); ?>
        </div>
        <section class="p-archive__contents">
            <div class="p-archive__contents__heading">
                <h3>小見出しが入ります</h3>
                <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
            </div>
            <?php get_template_part('menu-card'); ?>
        </section>
    </div>
</article>
<?php get_sidebar(); ?> 
<?php get_footer(); ?>