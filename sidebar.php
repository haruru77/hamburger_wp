<article class="l-sidebar">
            <div class="p-sidebar__menu__wrap">
                <div class="p-sidebar__main">
                    <div class="u-sidebar__pc__menu">
                        Menu
                    </div>
                    <button class="u-close p-sidebar">
                        <i class="fas fa-times"></i>
                    </button>
                    <?php wp_nav_menu(array(
        'theme_location' => 'category_nav',
        )); ?>
                </div>
            </div>
        </article>