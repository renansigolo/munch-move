/**
 * File mm-utility-bar.js.
 *
 * Contains accessibility handlers in the Utilities Bar.
 */

(function () {
  let zoom = 1;
  let zoomStep = 0.1;

  const btnPrint = document.getElementById("print");
  const btnShare = document.getElementById("share");
  const btnZoomIn = document.getElementById("zoomIn");
  const btnZoomReset = document.getElementById("zoomReset");
  const btnZoomOut = document.getElementById("zoomOut");

  function print() {
    window.print();
    return false;
  }

  function share() {
    let popup = document.getElementById("mmPopup");
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

  window.addEventListener("load", () => {
    btnPrint.addEventListener("click", print);
    btnShare.addEventListener("click", share);
    btnZoomIn.addEventListener("click", zoomIn);
    btnZoomReset.addEventListener("click", zoomReset);
    btnZoomOut.addEventListener("click", zoomOut);
  });
})();
