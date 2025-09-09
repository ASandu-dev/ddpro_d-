document.addEventListener('DOMContentLoaded', function() {
  const mobileMenuButton = document.getElementById('mobile-menu-button');
  const mobileMenu = document.getElementById('mobile-menu');
  const backToTop = document.getElementById('scroll-top');
  const header = document.querySelector("header");

  // --- Mobile menu toggle ---
  if (mobileMenuButton && mobileMenu) {
    mobileMenuButton.addEventListener("click", function(e) {
      e.stopPropagation();
      mobileMenu.classList.toggle("hidden");
    });

    // Close menu when clicking outside
    document.addEventListener("click", function(e) {
      if (!mobileMenu.contains(e.target) && !mobileMenuButton.contains(e.target)) {
        mobileMenu.classList.add("hidden");
      }
    });
  }

  // --- Back to top button ---
  if (backToTop) {
    const toggleBackToTop = () => {
      if (window.scrollY > 100) {
        backToTop.classList.remove("hidden");
      } else {
        backToTop.classList.add("hidden");
      }
    };

    toggleBackToTop();
    window.addEventListener("scroll", toggleBackToTop);

    backToTop.addEventListener("click", () => {
      window.scrollTo({ top: 0, behavior: "smooth" });
    });
  }

});
