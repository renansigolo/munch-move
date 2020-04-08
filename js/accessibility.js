/**
 * File accessibility.js.
 *
 * Contains accessibility handlers.
 */

(function() {
  let zoom = 1;
  let zoomStep = 0.2;

  const print = () => {
    window.print();
    return false;
  };

  const zoomIn = () => {
    document.body.style.zoom = "1.1";
  };

  const zoomOut = () => {
    document.body.style.zoom = "0.9";
  };

  const zoomReset = () => {
    document.body.style.zoom = "0";
  };

  // window.addEventListener("load", () => {
  //   document.querySelector(".zoomIn").addEventListener("click", function() {
  //     zoom += zoomStep;
  //     document.body.style.zoom = zoom;
  //   });

  //   document.querySelector(".zoomReset").addEventListener("click", function() {
  //     zoom = 1;
  //     document.body.style.zoom = 0;
  //   });

  //   document.querySelector(".zoomOut").addEventListener("click", function() {
  //     if (zoom > zoomStep) {
  //       zoom -= zoomStep;
  //       document.body.style.zoom = zoom;
  //     }
  //   });

  //   let btnPrint = document.querySelector(".btn--print");
  //   btnPrint.addEventListener("click", print);
  // });
})();
