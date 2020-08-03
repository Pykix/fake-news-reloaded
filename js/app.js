const menuIcons = document.querySelector(".menuIcons");
const line = document.querySelectorAll(".no-active");
const menu = document.querySelector(".menu");
const body = document.querySelector("body");
const btnWrapper = document.querySelector(".mainWrapper");

menuIcons.addEventListener("click", function () {
    this.classList.toggle("active");
    menu.classList.toggle("active");
    btnWrapper.classList.toggle("menu-actived");
    body.classList.toggle("menu-actived");

    for (const element of line) {
        element.classList.remove("no-active");
    }
});