(function () {
  const acceptCookie = localStorage.getItem('accept-cookie');
  if (!acceptCookie) {
    displayCookieBanner();
  } else {
    hideCookieBanner();
  }
})();

/**
 * AFFICHER BANIERE
 */
function displayCookieBanner() {
  const cookieBanner = document.getElementById('cookie-banner');
  cookieBanner.style.display = 'block';
  cookieBanner.classList.toggle('show');
}

/**
 * CACHER BANNIERE
 */
function hideCookieBanner() {
  localStorage.setItem('accept-cookie', true);
  const cookieBanner = document.getElementById('cookie-banner');
  cookieBanner.style.display = 'none';
  cookieBanner.classList.toggle('show');
}

