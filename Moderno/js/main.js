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

if ('serviceWorker' in navigator) {
    window.addEventListener('load', function() {
        navigator.serviceWorker.register('js/sw.js').then(function(
            registration) {
                //Registration was successful
                console.log('ServiceWorker resgistration succesful with scope: '
                    , registration.scope);
            }, function(err) {
                // registration failed :(
                console.log('ServiceWorker registration failed: ', err);
            });
    });
}

let deferredPrompt;

window.addEventListener('beforeinstallprompt', (e) => {
    // Prevent the mini-infobar from appearing on mobile
    e.preventDefault();
    // Stash the event so it can be triggered later.
    deferredPrompt = e;
    // Update UI notify the user they can install the PWA
    showInstallPromotion();
});