document.addEventListener("DOMContentLoaded", function () {
  const slides = document.querySelectorAll(".hero-slider .slide");
  const prev = document.querySelector(".hero-slider .prev");
  const next = document.querySelector(".hero-slider .next");
  const indicatorsContainer = document.querySelector(".hero-slider .indicators");

  let current = 0;
  let slideInterval;

  // Create indicators
  slides.forEach((_, i) => {
    const dot = document.createElement("span");
    if (i === 0) dot.classList.add("active");
    indicatorsContainer.appendChild(dot);
  });
  const indicators = indicatorsContainer.querySelectorAll("span");

  function goToSlide(n) {
    slides[current].classList.remove("active");
    indicators[current].classList.remove("active");

    current = (n + slides.length) % slides.length;

    slides[current].classList.add("active");
    indicators[current].classList.add("active");

    // 🔹 Reset animations so they replay each slide
    const overlay = slides[current].querySelector(".overlay");
    if (overlay) {
      overlay.style.animation = "none";
      overlay.offsetHeight; // trigger reflow
      overlay.style.animation = null;
    }

    const animatedEls = slides[current].querySelectorAll("h1, p, .btn");
    animatedEls.forEach(el => {
      el.style.animation = "none";
      el.offsetHeight; // force reflow
      el.style.animation = null;
    });
  }

  function nextSlide() {
    goToSlide(current + 1);
  }

  function prevSlide() {
    goToSlide(current - 1);
  }

  function startSlideShow() {
    slideInterval = setInterval(nextSlide, 5000); // auto every 5s
  }

  function stopSlideShow() {
    clearInterval(slideInterval);
  }

  // Events
  next.addEventListener("click", () => {
    stopSlideShow();
    nextSlide();
    startSlideShow();
  });

  prev.addEventListener("click", () => {
    stopSlideShow();
    prevSlide();
    startSlideShow();
  });

  indicators.forEach((dot, i) =>
    dot.addEventListener("click", () => {
      stopSlideShow();
      goToSlide(i);
      startSlideShow();
    })
  );

  // Start auto play
  startSlideShow();
});
