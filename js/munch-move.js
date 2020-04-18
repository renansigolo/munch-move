/**
 * File munch-move.js.
 *
 * Munch and Move Scripts
 */

(() => {
  console.log("Init Munch Move Scripts");
  /**
   * Accordion
   *
   * Toggle between adding and removing the "active" class,
   * to highlight the button that controls the panel
   */
  const accordion = () => {
    let accordionClasses = document.getElementsByClassName("accordion");
    let i;

    for (const accElement of accordionClasses) {
      accElement.addEventListener("click", function () {
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

  // Enable Click on the Navbar Logo
  const navLogo = document.querySelector(".nav-logo");
  navLogo.addEventListener("click", () => {
    window.location.href = "/";
  });

  // Toogle Search Input in the Navbar
  const searchIcon = document.querySelector("#search-icon");
  searchIcon.addEventListener("click", () => {
    jQuery("#navbar-search").toggle();
    jQuery("#search-icon").toggle();
  });
})();
