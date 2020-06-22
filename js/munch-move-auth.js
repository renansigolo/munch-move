"use strict";

/**
 * Munch & Move Auth Method
 */

function authStaff() {
  var staffAuthenticated = document.querySelector("#js-authenticated");
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
  console.log("Hello");
})(jQuery);
