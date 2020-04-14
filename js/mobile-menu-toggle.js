/** Hide or display the mobile menu */
function toggle() {
  if (jQuery(window).width() <= 1400) {
    jQuery("#desktop").hide();
    jQuery("#mobile").show();
    jQuery(".nav.menu-mobile").hide();
  } else {
    jQuery("#mobile").hide();
    jQuery("#desktop").show();
  }
}

/** On page load set the menu display initially */
jQuery(window).load(function () {
  jQuery(".nav.menu-mobile").hide();
  toggle();
});

/** Toggle the menu display on browser resize */
jQuery(window).resize(function () {
  toggle();
});
