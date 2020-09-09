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
                            <?php the_excerpt(); ?>
                            </div>
                            <a href="<?php the_permalink(); ?>">詳しく見る</a>
                        </div>
                    </div>
                <?php endwhile;
            else :
                ?><p>商品がありません</p><?php endif; ?>
            <div class="c-page">
            <?php wp_pagenavi(); ?>
            </div>