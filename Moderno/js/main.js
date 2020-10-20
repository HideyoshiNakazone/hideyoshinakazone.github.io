const mnBtn = document.querySelector('.menu');
const nav = document.querySelector('.nav-links');
const navLinks = document.querySelectorAll('.nav-links li')
let menuOpen = false;

nav.classList.remove('nav-deactive')

mnBtn.addEventListener('click', () => {
    //Toggle Nav
    if(!menuOpen) {
        mnBtn.classList.add('open');
        nav.classList.remove('nav-deactive')
        nav.classList.add('nav-active')
        menuOpen = true;

    } else {
        mnBtn.classList.remove('open');
        nav.classList.remove('nav-active')
        nav.classList.add('nav-deactive')
        menuOpen = false;
    }
    //Animate Links
    navLinks.forEach((link, index) => {
        if(link.style.animation) {
            link.style.animation = '';
        } else {
            link.style.animation = `navLinkFade 0.5s ease forwards ${index / 7 + 0.5}s`
        }
    });
});