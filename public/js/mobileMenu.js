
function manageMobileMenu() {
    const menu = $("#menu");
    const mobileMenuButton = $("#mobile-menu-button");
    const openButton = $("#open-button");
    const closeButton = $("#close-button");

    if(menu.hasClass("hidden")) {
        $('body').addClass('overflow-hidden');
        $('footer').addClass("hidden");
        menu.removeClass("hidden");
        openButton.addClass("hidden");
        closeButton.removeClass("hidden");
        return
    }

    $('body').removeClass('overflow-hidden');
    $('footer').removeClass("hidden");
    menu.addClass("hidden");
    openButton.removeClass("hidden");
    closeButton.addClass("hidden");
}
