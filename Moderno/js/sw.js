self.addEventListener('fetch', function (event) {});
console.log('I am a Service Worker!');

let deferredPrompt;
window.addEventListener('beforeinstallprompt', (e) => {
    e.preventDefault()
    deferredPrompt = e
});