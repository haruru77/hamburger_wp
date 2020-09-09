<?php get_header(); ?>

<article class="l-main-contents">
    <?php if (have_posts()) :
        while (have_posts()) :
            the_post(); ?>
            <div class="p-single">
                <div class="p-single__menu-img">
                    <?php if (has_post_thumbnail()) : ?>
                        <?php the_post_thumbnail('full'); ?>
                    <?php endif; ?>
                    <div class="u-margin__single">
                        <div class="p-single__menu-img__ttl">
                        <h1><?php the_title(); ?></h1>
                        </div>
                    </div>
                </div>
                <div class="u-margin__single">
                    <div class="p-single__contents">
                    <?php the_content(); ?>
                    <?php wp_link_pages(); ?>
                    </div>
                    <?php the_tags(''); ?>
                    <?php the_post_navigation(); ?>
                </div>
            </div>
        <?php endwhile;
    else :
        ?><p>商品がありません</p><?php endif; ?>
</article>
<?php get_sidebar(); ?>
<?php get_footer(); ?>