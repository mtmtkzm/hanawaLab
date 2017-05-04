/* headerのパスを書き換える */

var headerPath = document.querySelector('.js-directory');
headerPath.innerHTML = formatPathname();
headerPath.setAttribute('href', '/' + formatPathname());

function formatPathname() {
  var currentPath = window.location.pathname;
  currentPath = currentPath.substr(1); // 先頭の/を削除

  var startPoint = currentPath.indexOf('/');
  if (startPoint !== -1) {
    currentPath = currentPath.substr(0, startPoint);
  }
  return currentPath;
}


/* menu trigger (sp) */
var menuTrigger = document.querySelector('.js-menu-trigger');
var headerMenu = document.querySelector('.js-header-menu');

menuTrigger.addEventListener('click', function () {

  if ( menuTrigger.classList.contains('is-open') ) {
    menuTrigger.classList.remove('is-open');
    headerMenu.classList.remove('is-open');
    return;
  }

  menuTrigger.classList.add('is-open');
  headerMenu.classList.add('is-open');
});


