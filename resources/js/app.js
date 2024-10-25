import "./bootstrap";

//Funciones del Header
document.addEventListener("DOMContentLoaded", function () {
    const menuToggle = document.getElementById("menu-toggle");
    const sideMenu = document.getElementById("side-menu");
    const closeMenu = document.getElementById("close-menu");

    menuToggle.addEventListener("click", function () {
        sideMenu.classList.toggle("translate-x-0");
    });

    closeMenu.addEventListener("click", function () {
        sideMenu.classList.remove("translate-x-0");
    });
});
