const nav = document.querySelectorAll('.nav ul li');
const title = document.querySelector('.title');
const form_contact = document.querySelector('.section_contact');
const parallax = document.getElementById('parallax');

window.addEventListener('load', () => {

    const TL = gsap.timeline({ paused: true });

    TL
        .staggerFrom(title, 1, { left: -50, opacity: -5 }, 0.2)
        .from(nav, 1, { x: 1000 }, 0.2)
        .from(parallax, 1, { y: -100 }, 0.2)
        .from(form_contact, 1, { x:1000, opacity: -2 } ,0.5)

    TL.play();
});

const header = document.querySelector("header");

window.addEventListener("scroll", () => {

    if (window.scrollY > 0) {
        header.classList.add('colle')
    } else {
        header.classList.remove('colle')
    }
});

const navtel = document.querySelector('.onglets_tel');
const navlink = document.querySelector('.nav');

let menuOpen = false;
navtel.addEventListener('click', () => {
    if (!menuOpen) {
        navlink.classList.add('menu-tel');
        menuOpen = true;
    } else {
        navlink.classList.remove('menu-tel');
        menuOpen = false;
    }
});
