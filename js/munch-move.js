/**
 * File munch-move.js.
 *
 * Munch and Move Scripts
 */

(function () {
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
      acc[i].addEventListener("click", function () {
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
    jQuery("#navbar-btn-search").toggle();
    jQuery("#search-icon").toggle();
  });

  accordion();

  // Desktop Mega Menu Tabs
  // const navLinks = document.querySelectorAll(".nav-tab a");

  // for (const navLink of navLinks) {
  //   navLink.addEventListener("mouseenter", function () {
  //     // Get all elements with class="tab-content" and hide them
  //     tabscontent = document.getElementsByClassName("tab-content");
  //     for (const tab of tabscontent) {
  //       tab.style.display = "none";
  //     }

  //     // Tab Content
  //     // Get the matching table content clicked
  //     let tabTitle = this.getAttribute("title");
  //     let tabElement = document.getElementById(tabTitle);

  //     // tabElement.addEventListener("mouseenter", function () {
  //     //   console.log('Enter')
  //     // });

  //     tabElement.addEventListener("mouseover", function () {
  //       console.log("asndkas");
  //     });

  //     if (this.classList.contains("active")) {
  //       this.classList.remove("active");
  //       tabElement.style.display = "none";
  //     } else {
  //       this.classList.add("active");
  //       // Show the current tab content
  //       tabElement.style.display = "block";
  //     }
  //   });

  // navLink.addEventListener("mouseout", function () {
  //   // Get all elements with class="tab-content" and hide them
  //   // tabscontent = document.getElementsByClassName("tab-content");
  //   // for (const tab of tabscontent) {
  //   //   tab.style.display = "none";
  //   // }
  //   //   console.log("this", this);
  //   //   // Get all elements with class="tab-content" and hide them
  //   //   tabscontent = document.getElementsByClassName("tab-content");
  //   //   for (const tab of tabscontent) {
  //   //     tab.style.display = "none";
  //   //   }
  //   //   // Tab Content
  //   //   // Get the matching table content clicked
  //   //   let tabTitle = this.getAttribute("title");
  //   //   let tabElement = document.getElementById(tabTitle);

  //   if (this.classList.contains("active")) {
  //     this.classList.remove("active");
  //     tabElement.style.display = "none";
  //   } else {
  //     this.classList.add("active");
  //     // Show the current tab content
  //     tabElement.style.display = "block";
  //   }
  // });
  // }

  // let parent = document.getElementById("parent");
  // parent.onmouseover = parent.onmouseout = parent.onmousemove = handler;

  // function handler(event) {
  //   let type = event.type;
  //   while (type < 11) type += " ";

  //   log(type + " target=" + event.target.id);
  //   return false;
  // }
})();
