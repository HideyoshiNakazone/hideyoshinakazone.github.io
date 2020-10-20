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

let deferredPrompt;
const addBtn = document.querySelector('.add-button');
addBtn.style.display = 'none';

window.addEventListener('beforeinstallprompt', (e) => {
    // Prevent Chrome 67 and earlier from automatically showing the prompt
    e.preventDefault();
    // Stash the event so it can be triggered later.
    deferredPrompt = e;
    // Update UI to notify the user they can add to home screen
    addBtn.style.display = 'block';
  
    addBtn.addEventListener('click', (e) => {
      // hide our user interface that shows our A2HS button
      addBtn.style.display = 'none';
      // Show the prompt
      deferredPrompt.prompt();
      // Wait for the user to respond to the prompt
      deferredPrompt.userChoice.then((choiceResult) => {
          if (choiceResult.outcome === 'accepted') {
            console.log('User accepted the A2HS prompt');
          } else {
            console.log('User dismissed the A2HS prompt');
          }
          deferredPrompt = null;
        });
    });
  });