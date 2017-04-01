
var headerPath = document.querySelector('.js-directory');
headerPath.innerHTML = formatPathname();
headerPath.setAttribute('href', '/'+formatPathname());

function formatPathname() {
  var currentPath = window.location.pathname;
  // 先頭の/を削除
  currentPath = currentPath.substr(1);

  var startPoint = currentPath.indexOf('/');
  if (startPoint != -1) {
    currentPath = currentPath.substr(0, startPoint);
  }
  return currentPath;
}
