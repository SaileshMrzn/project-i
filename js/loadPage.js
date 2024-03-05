function loadPage(pageName) {
  const pageContent = document.getElementById("page-content");
  const xhr = new XMLHttpRequest();

  xhr.onreadystatechange = function () {
    if (xhr.readyState === 4 && xhr.status === 200) {
      pageContent.innerHTML = xhr.responseText;
    }
  };

  xhr.open("GET", pageName, true);
  xhr.send();
}
