/**
 * File munch-move.js.
 *
 * Munch and Move Scripts
 *
 */
(() => {
  console.log("Init Munch Move Scripts");

  let navLogo = document.querySelector(".nav-logo");
  navLogo.addEventListener("click", () => {
    window.location.href = "/";
  });

  // let breadcrumbs = document.querySelector('#breadcrumbs')

  // let span = document.createElement("span");
  // let preText = document.createTextNode('You are here: ')

  // span.appendChild(preText)

  // console.log('preText', preText)

  // breadcrumbs.insertBefore(span, breadcrumbs.childNodes[0])
})();
