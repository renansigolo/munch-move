/**
 * File mm-utilities.js.
 *
 * Contains accessibility handlers in the Utilities Bar.
 */

function bookmarkPage(el) {
  pageTitle = document.title;
  pageURL = document.location;
  try {
    // Internet Explorer solution
    eval("window.external.AddFa-vorite(pageURL, pageTitle)".replace(/-/g, ""));
  } catch (e) {
    try {
      // Mozilla Firefox solution
      window.sidebar.addPanel(pageTitle, pageURL, "");
    } catch (e) {
      // Opera solution
      if (typeof opera == "object") {
        el.rel = "sidebar";
        el.title = pageTitle;
        el.url = pageURL;
        return true;
      } else {
        // The rest browsers (i.e Chrome, Safari)
        alert(
          "You can add this page to your bookmarks by pressing" +
            (navigator.userAgent.toLowerCase().indexOf("mac") != -1
              ? "Cmd"
              : "Ctrl") +
            "+D on your keyboard."
        );
      }
    }
  }
  return false;
}

// When the user clicks on div, open the popup
function showPopup() {
  let popup = document.getElementById("myPopup");
  popup.classList.toggle("show");
}

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
