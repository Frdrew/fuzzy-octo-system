document.addEventListener("DOMContentLoaded", function () {

  const content = document.getElementById("app-content");

  function loadPage(url) {
    fetch(url)
      .then(res => res.text())
      .then(html => {
        const parser = new DOMParser();
        const doc = parser.parseFromString(html, "text/html");
        const newContent = doc.getElementById("app-content");

        if (newContent) {
          content.innerHTML = newContent.innerHTML;

          window.scrollTo(0, 0);

          history.pushState(null, "", url);
        }
      });
  }

  document.body.addEventListener("click", function (e) {
    const link = e.target.closest("a");

    if (!link) return;

    const href = link.getAttribute("href");

    if (
      href &&
      link.hostname === window.location.hostname &&
      !href.startsWith("#") &&
      !href.includes("wp-admin")
    ) {
      e.preventDefault();
      loadPage(href);
    }
  });

  window.addEventListener("popstate", () => {
    loadPage(location.pathname);
  });

});