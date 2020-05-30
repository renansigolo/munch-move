"use strict";

/**
 * File mm-utility-bar.js.
 *
 * Contains accessibility handlers in the Utilities Bar.
 */
(function () {
  var zoom = 1;
  var zoomStep = 0.1;
  var btnPrint = document.getElementById("print");
  var btnShare = document.getElementById("share");
  var btnZoomIn = document.getElementById("zoomIn");
  var btnZoomReset = document.getElementById("zoomReset");
  var btnZoomOut = document.getElementById("zoomOut");

  function print() {
    window.print();
    return false;
  }

  function share() {
    var popup = document.getElementById("share-popup");
    popup.classList.toggle("show");
  }

  function zoomOut() {
    if (zoom > zoomStep) {
      zoom -= zoomStep;
      document.body.style.zoom = zoom;
    }
  }

  function zoomReset() {
    zoom = 1;
    document.body.style.zoom = 0;
  }

  function zoomIn() {
    zoom += zoomStep;
    document.body.style.zoom = zoom;
  }

  window.addEventListener("load", function () {
    btnPrint.addEventListener("click", print);
    btnShare.addEventListener("click", share);
    btnZoomIn.addEventListener("click", zoomIn);
    btnZoomReset.addEventListener("click", zoomReset);
    btnZoomOut.addEventListener("click", zoomOut);
  });
})();