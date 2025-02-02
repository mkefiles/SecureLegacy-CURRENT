console.log("JavaScript is live...");

let mobileDropdown = document.getElementById("mobile-dropdown");
let menuButton = document.getElementById("menu-button");

// DESC: If window is resized, close the mobile-menu
window.addEventListener("resize", () => {
    mobileDropdown.classList.remove("show-me-block");
});

// DESC: If scrolled, close the mobile-menu
window.addEventListener("scroll", () => {
    mobileDropdown.classList.remove("show-me-block");
});

// DESC: Toggle the mobile-menu
menuButton.addEventListener("click", () => {
    mobileDropdown.classList.toggle("show-me-block");
});