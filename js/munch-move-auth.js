"use strict";

/**
 * Munch & Move Auth Method
 */

var isStaff = false;

function authStaff() {
  var staffAuthenticated = document.querySelector("#js-authenticated"),
    staffError = document.querySelector(".staff-content__error"),
    userPassword = document.querySelector(".staff-form__content input").value,
    staffForm = document.querySelector(".staff-form");

  userPassword === "Oranges" ? saveStaffCredentials() : showError();

  function saveStaffCredentials() {
    staffError.style.display = "none";
    staffAuthenticated.style.display = "flex";
    staffForm.style.display = "none";
    sessionStorage.setItem("isStaff", true);
  }

  function showError() {
    staffError.style.display = "flex";
  }
}

(function () {
  var staffAuthenticated = document.querySelector("#js-authenticated"),
    staffError = document.querySelector(".staff-content__error"),
    staffForm = document.querySelector(".staff-form");

  function showStaffContent() {
    staffError.style.display = "none";
    staffAuthenticated.style.display = "flex";
    staffForm.style.display = "none";
  }

  function checkStaff() {
    var urlPath = location.pathname;
    var pathArr = urlPath.split("/");
    var urlSlug = pathArr[pathArr.length - 2];

    switch (urlSlug) {
      case "staff-development-kit-and-resource-manual":
        console.log("staff-development-kit-and-resource-manual");

        break;
      case "staff-development-kit":
        console.log("staff-development-kit");
        break;
      case "munch-move-resource-manual":
        console.log("munch-move-resource-manual");
        break;

      default:
        break;
    }

    isStaff = sessionStorage.getItem("isStaff");
    console.log(isStaff);

    if (
      !isStaff &&
      urlSlug === ("staff-development-kit" || "munch-move-resource-manual")
    ) {
      window.location =
        "http://munch-move-dev.local/munch-move-program-training/staff-development-kit-and-resource-manual/";
    } else {
      if (isStaff) {
        showStaffContent();
      }
    }
  }

  checkStaff();
})();
