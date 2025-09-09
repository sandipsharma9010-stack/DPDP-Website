let currentIndex = 0;
  const carousel = document.getElementById("customCarousel");
  const totalItems = carousel.children.length;
  const visibleItems = 3;

  function moveSlide(direction) {
    const itemWidth = carousel.querySelector(".carousel-img").offsetWidth + 15; // including gap
    const maxIndex = totalItems - visibleItems;

    currentIndex += direction;
    if (currentIndex < 0) currentIndex = 0;
    if (currentIndex > maxIndex) currentIndex = 0; // loop back to start

    carousel.style.transform = `translateX(-${currentIndex * itemWidth}px)`;
  }

  // 👇 Auto-slide every 3 seconds
  setInterval(() => {
    moveSlide(1);
  }, 3000);