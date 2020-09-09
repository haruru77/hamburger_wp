<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
    <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
    <div class="all-wrapper">
        <div class="p-sidebar__back"></div>
        <header class="l-header">
            <div class="p-header__top">
                <h1><a href="<?php echo esc_url( home_url('/') ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
                <?php get_search_form(); ?>
            </div>
            <button class="p-header__menu p-sidebar">
                Menu
            </button>
        </header>