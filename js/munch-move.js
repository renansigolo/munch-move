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
  let staffAuthenticated = document.querySelector(
    ".staff-content__authenticated"
  );
  let staffError = document.querySelector(".staff-content__error");

  let userPassword = document.querySelector(".staff-form__content input").value;

  if (userPassword === "Oranges") {
    staffError.style.display = "none";
    staffAuthenticated.style.display = "flex";
  } else {
    staffError.style.display = "flex";
  }
}

(function ($) {
  console.log("Init Munch Move Scripts");

  // Toggle Mobile Menu
  $("#btn-menu").on("click", function (e) {
    $("#mobile-menu").toggle();
    let bodyEl = document.querySelector("body");
    let bodyOverflow = bodyEl.style.overflow;

    bodyEl.style.overflow = bodyOverflow === "hidden" ? "auto" : "hidden";
    $("#overlay").toggle();
  });

  // Mobile Menu
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

        if (panel.style.maxHeight) {
          panel.style.maxHeight = null;
        } else {
          panel.style.maxHeight = panel.scrollHeight + "px";
        }
      });
    }
  };

  // Form Munch & Move to italic
  $.fn.wrapInTag = function (opts) {
    let tag = opts.tag || "italic",
      words = opts.words || [],
      replacement = `<${tag}>${words}</${tag}>`;

    return this.html(function () {
      return $(this).html().replace(words, replacement);
    });
  };

  const elements = [
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

  elements.forEach((element) => {
    $(element).wrapInTag({
      tag: "i",
      words: ["Munch &amp; Move"],
    });
  });

  // Audio Player
  const parseTime = (timestamp) => {
    timestamp = timestamp.toFixed(0);

    let hours = Math.floor(timestamp / 60 / 60);
    let minutes = Math.floor(timestamp / 60) - hours * 60;
    let seconds = timestamp % 60;

    // let formatted = hours + ":" + minutes + ":" + seconds;
    let formatted =
      // hours.toString().padStart(2, "0") +
      // ":" +
      minutes.toString().padStart(2, "0") +
      ":" +
      seconds.toString().padStart(2, "0");

    return formatted;
  };

  let songs = [];

  let trackRows = document.querySelectorAll(".js-song-title");
  function clearStyle() {
    for (const song of trackRows) {
      song.parentNode.style.backgroundColor = "#fff";
      song.nextElementSibling.style.fontWeight = "300";
      song.style.fontWeight = "300";
    }
  }

  for (const song of trackRows) {
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
      let songUrl = this.getAttribute("data-song-url");
      playAudio(songUrl);
    });
  }

  function playAudio(url) {
    document.getElementById(
      "player-container"
    ).innerHTML = `<audio src="${url}" id="player" controls controlsList="nodownload">`;
    playSong();
  }

  accordion();
})(jQuery);
