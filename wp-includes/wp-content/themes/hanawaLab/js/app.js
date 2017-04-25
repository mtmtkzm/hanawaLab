var headerPath = document.querySelector('.js-directory');
headerPath.innerHTML = formatPathname();
headerPath.setAttribute('href', '/' + formatPathname());

function formatPathname() {
  var currentPath = window.location.pathname;
  currentPath = currentPath.substr(1); // 先頭の/を削除

  var startPoint = currentPath.indexOf('/');
  if (startPoint != -1) {
    currentPath = currentPath.substr(0, startPoint);
  }
  return currentPath;
}
