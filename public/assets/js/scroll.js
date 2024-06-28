document.addEventListener("DOMContentLoaded", () => {
  const scrollToTopBtn = document.getElementById("scrollToTopBtn");

  window.addEventListener("scroll", () => {
    if (window.scrollY > 200) {
      // Tampilkan tombol setelah scroll 200px ke bawah
      scrollToTopBtn.classList.remove("hidden");
    } else {
      scrollToTopBtn.classList.add("hidden");
    }
  });

  scrollToTopBtn.addEventListener("click", () => {
    window.scrollTo({
      top: 0,
      behavior: "smooth",
    });
  });

  document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
    anchor.addEventListener("click", (event) => {
      event.preventDefault();
      const targetId = anchor.getAttribute("href");
      document.querySelector(targetId).scrollIntoView({
        behavior: "smooth",
      });
    });
  });
});
