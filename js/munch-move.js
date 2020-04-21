/**
 * File munch-move.js.
 *
 * Munch and Move Scripts
 */

(function ($) {
  console.log("Init Munch Move Scripts");
  /**
   * Accordion
   *
   * Toggle between adding and removing the "active" class,
   * to highlight the button that controls the panel
   */
  const accordion = () => {
    var acc = document.getElementsByClassName("accordion");
    var i;

    for (i = 0; i < acc.length; i++) {
      acc[i].addEventListener("click", function () {
        this.classList.toggle("active");
        var panel = this.nextElementSibling;
        if (panel.style.display === "block") {
          panel.style.display = "none";
        } else {
          panel.style.display = "block";
        }
      });
    }
  };

  // Enable Click on the Navbar Logo
  const navLogo = document.querySelector(".nav-logo");
  navLogo.addEventListener("click", () => {
    window.location.href = "/";
  });

  // Toogle Search Input in the Navbar
  const searchIcon = document.querySelector("#search-icon");

  function showSearchBar() {
    $("#navbar-search").show();
    $("#navbar-btn-search").show(60);
    $("#search-icon").hide(60);
  }

  function hideSearchBar() {
    $("#navbar-search").hide("fast");
    $("#navbar-btn-search").hide("fast");
    $("#search-icon").show("fast");
  }

  searchIcon.addEventListener("click", () => {
    showSearchBar();
  });

  // $("#masthead").mouseleave(function () {
  //   toggleNavbarSearch();
  // });
  $(".menu-service").mouseleave(function () {
    hideSearchBar();
  });

  accordion();

  // Desktop Mega Menu Tabs
  $("#menu-desktop")
    .find(".nav-tab a")
    .mouseenter(function () {
      // Hide all Content
      const tabContent = document.querySelectorAll(".tab-content");
      for (const tab of tabContent) {
        tab.style.display = "none";
      }

      // Show only the respective content
      $(`#${this.title}`).show();
      $(`#${this.title}`).mouseleave(function () {
        $(".tab-content").hide();
      });
    });
})(jQuery);
