/* 
   MAROON 9 Main JavaScript
   CTEC 4350 Capstone Project Group 2
*/

/* Wait for the full page to load before running */
window.addEventListener("load", init, false);

function init() {
  /* Get the hamburger button */
  let hamburger = document.querySelector("#hamburger");

  /* Attach a click event to the hamburger button */
  if (hamburger) {
    hamburger.addEventListener("click", toggleMenu, false);
  }

  /* Close the mobile menu when user clicks outside the nav */
  document.addEventListener("click", closeMenu, false);
}

/*  the mobile menu open or closed */
function toggleMenu(event) {
  event.stopPropagation();

  let mobileMenu = document.querySelector("#mobileMenu");
  let hamburger  = document.querySelector("#hamburger");

  if (mobileMenu.classList.contains("open")) {
    mobileMenu.classList.remove("open");
    hamburger.classList.remove("open");
  } else {
    mobileMenu.classList.add("open");
    hamburger.classList.add("open");
  }
}

/* Close the mobile menu when clicking anywhere outside the nav */
function closeMenu(event) {
  let nav        = document.querySelector(".nav");
  let mobileMenu = document.querySelector("#mobileMenu");
  let hamburger  = document.querySelector("#hamburger");

  if (nav && !nav.contains(event.target)) {
    mobileMenu.classList.remove("open");
    hamburger.classList.remove("open");
  }
}
