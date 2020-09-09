jQuery(".p-sidebar").click(function() {
    jQuery(this).toggleClass("is-open");
    jQuery(".p-sidebar__menu__wrap").toggleClass("is-open");
    jQuery(".p-sidebar__back").toggleClass("is-open");
    jQuery("body").toggleClass("is-open");
});
jQuery(".p-sidebar__back").click(function() {
    jQuery(this).toggleClass("is-open");
    jQuery(".p-sidebar__menu__wrap").toggleClass("is-open");
    jQuery(".p-sidebar").toggleClass("is-open");
    jQuery("body").toggleClass("is-open");
});
jQuery(".menu-item > a").click(function() {
    jQuery(".p-sidebar__menu__wrap").removeClass("is-open");
    jQuery(".p-sidebar__back").removeClass("is-open");
    jQuery("body").removeClass("is-open");
});