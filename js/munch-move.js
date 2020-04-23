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
    const accElements = document.getElementsByClassName("accordion");

    for (const accEl of accElements) {
      accEl.addEventListener("click", function () {
        this.classList.toggle("active");
        let panel = this.nextElementSibling;

        // Toogle Panel Visibility
        panel.style.display =
          panel.style.display === "block" ? "none" : "block";
      });
    }
  };

  // Toggle Mobile Menu
  $("#btn-menu").on("click", function () {
    $("#display-mobile-menu").slideDown("fast");
  });

  $(document).ready(function () {
    $("#menu-mobile li.has-sub>a").on("click", function () {
      $(this).removeAttr("href");
      let element = $(this).parent("li");
      if (element.hasClass("open")) {
        element.removeClass("open");
        element.find("li").removeClass("open");
        element.find("ul").slideUp(50);
      } else {
        element.addClass("open");
        element.children("ul").slideDown(50);
        element.siblings("li").children("ul").slideUp();
        element.siblings("li").removeClass("open");
        element.siblings("li").find("li").removeClass("open");
        element.siblings("li").find("ul").slideUp();
      }
    });

    // $("#menu-mobile>ul>li.has-sub>a").append('<span class="holder"></span>');
  });

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

  $(".menu-service").mouseleave(function () {
    hideSearchBar();
  });
  // $("#masthead").mouseleave(function () {
  //   toggleNavbarSearch();
  // });

  // Desktop Mega Menu Tabs
  $("#menu-desktop")
    .find(".nav-tab a")
    .mouseenter(function () {
      let menuTab = this.parentNode;

      // Hide all .active classes in the Mega Menu Tabs/Links
      let tabLinks = document.querySelectorAll(".menu-item");
      for (const tabLink of tabLinks) {
        tabLink.classList.remove("active");
      }

      // Hide all Content in the Mega Menu
      const tabContent = document.querySelectorAll(".tab-content");
      for (const tab of tabContent) {
        tab.style.display = "none";
      }

      // Show only the respective content
      menuTab.classList.add("active");
      $(`#${this.title}`).show();
      $(`#${this.title}`).mouseleave(function () {
        $(".tab-content").hide();
        menuTab.classList.remove("active");
      });
    });

  accordion();
})(jQuery);
