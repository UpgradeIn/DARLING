document.addEventListener("DOMContentLoaded", () => {
  const scrollToTopBtn = document.getElementById("scrollToTopBtn");
  const sections = document.querySelectorAll("section");
  const navLinks = document.querySelectorAll(".nav-link");

  // Function to handle the scroll events
  function onScroll() {
    // Show or hide the scroll-to-top button
    if (scrollToTopBtn) {
      if (window.scrollY > 200) {
        scrollToTopBtn.classList.remove("hidden");
      } else {
        scrollToTopBtn.classList.add("hidden");
      }
    }

    // Highlight the active link
    const scrollPosition = window.scrollY + window.innerHeight / 2;
    let currentSectionId = "";

    sections.forEach((section) => {
      if (
        section.offsetTop <= scrollPosition &&
        section.offsetTop + section.offsetHeight > scrollPosition
      ) {
        currentSectionId = section.id;
      }
    });

    navLinks.forEach((link) => {
      if (link.getAttribute("href").substring(1) === currentSectionId) {
        link.classList.add("active-link");
      } else {
        link.classList.remove("active-link");
      }
    });
  }

  // Event listener for scroll events
  window.addEventListener("scroll", onScroll);

  // Initial call to set the active link on page load
  onScroll();

  // Smooth scroll for internal links
  document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
    anchor.addEventListener("click", (event) => {
      event.preventDefault();
      const targetId = anchor.getAttribute("href");
      document.querySelector(targetId).scrollIntoView({
        behavior: "smooth",
      });
    });
  });

  // Smooth scroll to top button
  if (scrollToTopBtn) {
    scrollToTopBtn.addEventListener("click", () => {
      window.scrollTo({
        top: 0,
        behavior: "smooth",
      });
    });
  }
});
