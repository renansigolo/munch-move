/**
 * File footer.js.
 *
 * Contains accessibility handlers for the footer.
 */

(function() {
  function print() {
    window.print();
  }
  function zoomIn() {
    console.log("ZoomIn");
  }
  function zoomOut() {
    console.log("ZoomOut");
  }
  function zoomReset() {
    console.log("ZoomReset");
  }
  window.addEventListener("load", function() {
    var btnPrint = document.querySelector("#btn-print");
    var btnZoomOut = document.querySelector("#btn-zoom-out");
    var btnZoomReset = document.querySelector("#btn-zoom-reset");
    var btnZoomIn = document.querySelector("#btn-zoom-in");

    btnPrint.addEventListener("click", print);
    // btnZoomOut.addEventListener("click", zoomOut);
    // btnZoomReset.addEventListener("click", zoomReset);
    // btnZoomIn.addEventListener("click", zoomIn);
  });
})();
