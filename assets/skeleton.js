document.addEventListener("DOMContentLoaded", function() {
    document.querySelectorAll(".wp-skeleton-loading").forEach(function(element) {
      element.classList.add("show-skeleton");
      setTimeout(function() {
        element.classList.remove("wp-skeleton-loading");
      }, 50);
    });
    window.addEventListener("load", function() {
      document.querySelectorAll(".show-skeleton").forEach(function(element) {
        element.classList.add("hide-skeleton");
      });
    });
  });