const burgerBtn = document.querySelector('.burger');
const navMenu = document.querySelector('.mobile-nav-bar');
const exitBtn = document.querySelector('.exit-menu-btn');
burgerBtn.addEventListener("click", function () {
    navMenu.style.display = "block";
    navMenu.classList.add('show');
});

exitBtn.addEventListener("click", function () {
    navMenu.style.display = "none";
});
