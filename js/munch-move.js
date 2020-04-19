/**
 * File munch-move.js.
 *
 * Munch and Move Scripts
 */

(function() {
  console.log("Init Munch Move Scripts");
  /**
   * Accordion
   *
   * Toggle between adding and removing the "active" class,
   * to highlight the button that controls the panel
   */
  const accordion = () => {
    var acc = document.getElementsByClassName("accordion");
    var i;
    
    for (i = 0; i < acc.length; i++) {
      acc[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var panel = this.nextElementSibling;
        if (panel.style.display === "block") {
          panel.style.display = "none";
        } else {
          panel.style.display = "block";
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

  accordion()

})();
