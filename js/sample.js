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