/**
 * File accessibility.js.
 *
 * Contains accessibility handlers.
 */

(function () {
  let zoom = 1;
  let zoomStep = 0.1;

  const btnPrint = document.querySelector("#print");
  const btnShare = document.querySelector("#share");
  const btnZoomIn = document.querySelector("#zoomIn");
  const btnZoomReset = document.querySelector("#zoomReset");
  const btnZoomOut = document.querySelector("#zoomOut");

  const print = () => {
    window.print();
    return false;
  };

  const share = () => {
    console.log("Share button clicked");
    return false;
  };

  const zoomOut = () => {
    if (zoom > zoomStep) {
      zoom -= zoomStep;
      document.body.style.zoom = zoom;
    }
  };

  const zoomReset = () => {
    zoom = 1;
    document.body.style.zoom = 0;
  };

  const zoomIn = () => {
    zoom += zoomStep;
    document.body.style.zoom = zoom;
  };

  window.addEventListener("load", () => {
    btnPrint.addEventListener("click", print);
    btnShare.addEventListener("click", share);
    btnZoomIn.addEventListener("click", zoomIn);
    btnZoomReset.addEventListener("click", zoomReset);
    btnZoomOut.addEventListener("click", zoomOut);
  });
})();
