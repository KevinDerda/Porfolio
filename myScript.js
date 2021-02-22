(function () {
  const acceptCookie = localStorage.getItem('accept-cookie');
  if (!acceptCookie) {
    displayCookieBanner();
  }
})();

/**
 * AFFICHER BANIERE
 */
function displayCookieBanner() {
  const cookieBanner = document.getElementById('cookie-banner')
  cookieBanner.classList.check('show')
}

/**
 * CACHER BANNIERE
 */
function hideCookieBanner() {
  localStorage.setItem('accept-cookie', true);
  const cookieBanner = document.getElementById('cookie-banner')
  cookieBanner.classList.toggle('show')
}