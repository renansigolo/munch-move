"use strict";

/**
 * Custom JS for Munch & Move Theme
 */
function togglePlay() {
  jQuery(".play").toggle();
  jQuery(".pause").toggle();
}

function playSong() {
  document.querySelector("#player").play();
  jQuery(".pause").show();
  jQuery(".play").hide();
}

function pauseSong() {
  document.querySelector("#player").pause();
  jQuery(".play").show();
  jQuery(".pause").hide();
}

function redirectTo(url) {
  return (window.location = url);
}

function authStaff() {
  var staffAuthenticated = document.querySelector(
    ".staff-content__authenticated"
  );
  var staffError = document.querySelector(".staff-content__error");
  var userPassword = document.querySelector(".staff-form__content input").value;
  var staffForm = document.querySelector(".staff-form");

  if (userPassword === "Oranges") {
    staffError.style.display = "none";
    staffAuthenticated.style.display = "flex";
    staffForm.style.display = "none";
  } else {
    staffError.style.display = "flex";
  }
}

(function ($) {
  // console.log('jQuery:', jQuery().jquery);
  // console.log('jQuery UI:', jQuery.ui.version);

  /*======= IE Banner =========*/
  function msieversion() {
    var ua = window.navigator.userAgent;
    var msie = ua.indexOf("MSIE ");

    if (msie > 0 || !!navigator.userAgent.match(/Trident.*rv\:11\./)) {
      // If Internet Explorer, return version number
      console.log(parseInt(ua.substring(msie + 5, ua.indexOf(".", msie))));
      $("#ie-banner").show();
    }

    return false;
  }

  msieversion();

  /*======= Covid Banner =========*/
  var toast = document.querySelector(".website-moved"),
    toastBtnDismiss = document.querySelector(".website-moved .dismiss"),
    toastBtnQuickLinks = document.querySelector(
      ".website-moved #js-quick-links"
    ),
    distance = $("#masthead").offset().top,
    $window = $(window);

  function dismissToast() {
    sessionStorage.showToast = false;
    toast.style.transform = "translateY(360px)";
    return;
  }

  toastBtnDismiss.addEventListener("click", function () {
    dismissToast();
  });
  toastBtnQuickLinks.addEventListener("click", function () {
    dismissToast();
  });

  $window.scroll(function () {
    var showToast = sessionStorage.getItem("showToast");

    if ($window.scrollTop() <= distance || showToast) {
      toast.style.transform = "translateY(360px)";
    } else {
      toast.style.transform = "translateY(0)";
    }
  });

  // Remove the Related Link matching the current page
  var allRelatedLinks = document.querySelectorAll(".related-links a");

  for (var i = 0; i < allRelatedLinks.length; i++) {
    var relatedLink = allRelatedLinks[i];

    if (window.location.href === relatedLink.href) {
      relatedLink.parentNode.style.display = "none";
    }
  }

  // Toggle Mobile Menu
  var btnMenu = document.getElementById("btn-menu");
  btnMenu.addEventListener("click", function () {
    $("#mobile-menu").toggle();
    $("#overlay").toggle();
  });

  // Mobile Menu
  $(document).ready(function () {
    $("#menu-mobile li.has-sub>a").on("click", function () {
      $(this).removeAttr("href");
      var element = $(this).parent("li");

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
  });

  // Enable Click on the Navbar Logo
  var navLogo = document.querySelector(".nav-logo");
  navLogo.addEventListener("click", function () {
    window.location.href = "/";
  });

  // Toogle Search Input in the Navbar
  var searchIcon = document.querySelector("#search-icon");

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

  searchIcon.addEventListener("click", function () {
    showSearchBar();
  });
  $(".menu-service").mouseleave(function () {
    hideSearchBar();
  });

  // Desktop Mega Menu Tabs
  $("#menu-desktop")
    .find(".nav-tab a")
    .mouseenter(function () {
      var menuTab = this.parentNode;

      // Hide all .active classes in the Mega Menu Tabs/Links
      var tabLinks = document.querySelectorAll(".menu-item");
      for (var _i = 0; _i < tabLinks.length; _i++) {
        tabLinks[_i].classList.remove("active");
      }

      // Hide all Content in the Mega Menu
      var tabContent = document.querySelectorAll(".tab-content");
      for (var _i2 = 0; _i2 < tabContent.length; _i2++) {
        tabContent[_i2].style.display = "none";
      }

      // Show only the respective content
      menuTab.classList.add("active");
      $("#".concat(this.title)).show();
      $("#".concat(this.title)).mouseleave(function () {
        $(".tab-content").hide();
        menuTab.classList.remove("active");
      });
    });

  /**
   * Accordion
   *
   * Toggle between adding and removing the "active" class,
   * to highlight the button that controls the panel
   */
  function accordion() {
    var accElements = document.getElementsByClassName("accordion");

    for (var _i3 = 0; _i3 < accElements.length; _i3++) {
      accElements[_i3].addEventListener("click", function () {
        this.classList.toggle("active");
        var panel = this.nextElementSibling;

        if (panel.style.maxHeight) {
          panel.style.maxHeight = null;
        } else {
          panel.style.maxHeight = panel.scrollHeight + "px";
        }
      });
    }
  }

  // Form Munch & Move to italic
  $.fn.wrapInTag = function () {
    return this.html(function () {
      return $(this)
        .html()
        .replace(/Munch &amp; Move/gi, "<i>Munch &amp; Move</i>");
    });
  };

  var elements = [
    "h1",
    "h2",
    "h3",
    "h4",
    "h5",
    "h6",
    "p",
    "a",
    "small",
    "span",
  ];
  elements.forEach(function (element) {
    $(element).wrapInTag();
  });

  var songs = [];
  var trackRows = document.querySelectorAll(".js-song-title");

  function clearStyle() {
    for (var _i4 = 0; _i4 < trackRows.length; _i4++) {
      trackRows[_i4].parentNode.style.backgroundColor = "#fff";
      trackRows[_i4].nextElementSibling.style.fontWeight = "300";
      trackRows[_i4].style.fontWeight = "300";
    }
  }

  for (var _i5 = 0; _i5 < trackRows.length; _i5++) {
    var song = trackRows[_i5];
    songs.push({
      index: song.getAttribute("data-song-index"),
      title: song.getAttribute("data-song-title"),
      url: song.getAttribute("data-song-url"),
    });
    song.addEventListener("click", function () {
      clearStyle();
      this.parentNode.style.backgroundColor = "#DAF0FF";
      this.nextElementSibling.style.fontWeight = "700";
      this.style.fontWeight = "700";
      var songUrl = this.getAttribute("data-song-url");
      playAudio(songUrl);
    });
  }

  function playAudio(url) {
    document.getElementById(
      "player-container"
    ).innerHTML = '<audio src="'.concat(
      url,
      '" id="player" controls controlsList="nodownload">'
    );
    playSong();
  }

  accordion();
})(jQuery);
