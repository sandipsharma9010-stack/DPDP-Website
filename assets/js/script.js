$(document).ready(function () {
  $(".owl-carousel").owlCarousel({
    loop: true,
    margin: 20,
    nav: true,
    autoplay: true,
    autoplayTimeout: 2000,
    autoplayHoverPause: true,
    responsive: {
      0: { items: 1 },
      600: { items: 3 },
      1000: { items: 5 },
    },
    navText: [
      "<img src='./assets/images/svg-left-arrow.png' class='custom-nav'>",
      "<img src='./assets/images/svg-right-arrow1.png' class='custom-nav'>",
    ],
  });
});


$(document).ready(function () {
  $(".owl-carousel1").owlCarousel({
    loop: true,
    margin: 20,
    nav: true,
    autoplay: true,
    autoplayTimeout: 2000,
    autoplayHoverPause: true,
    responsive: {
      0: { items: 1 },
      600: { items: 3 },
      1000: { items: 5 },
    },
    navText: [
      "<img src='./assets/images/svg-left-arrow.png' class='custom-nav'>",
      "<img src='./assets/images/svg-right-arrow1.png' class='custom-nav'>",
    ],
  });
});

// faq js start here
function showMoreFaqs() {
  document.getElementById("moreFaqs").classList.remove("hidden");
  document.querySelector(".view-more").style.display = "none";
}

// newsletter js start here

document.querySelectorAll(".pagination .page-item").forEach((item, index) => {
  item.addEventListener("click", function (event) {
    event.preventDefault();
    if (this.id === "prev") {
      document.getElementById("newsletterCarousel").carousel("prev");
    } else if (this.id === "next") {
      document.getElementById("newsletterCarousel").carousel("next");
    } else {
      let slideIndex = this.getAttribute("data-slide-to");
      var carousel = new bootstrap.Carousel(
        document.getElementById("newsletterCarousel")
      );
      carousel.to(slideIndex);
      document
        .querySelectorAll(".pagination .page-item")
        .forEach((el) => el.classList.remove("active"));
      this.classList.add("active");
    }
  });
});

// our service start here

$(document).ready(function () {
  $(".our-service-card").click(function () {
      $(".our-service-card").removeClass("active").find(".our-service-content").slideUp();
      $(this).addClass("active").find(".our-service-content").slideDown();
  });
});




$(document).ready(function(){
  $(".blog-carousel").owlCarousel({
      loop: true,
      margin: 30,
      nav: true,
      dots: true,
      autoplay: true,
      autoplayTimeout: 3000,
      autoplayHoverPause: true,
      responsive:{
          0:{ items: 1 },
          768:{ items: 2 },
          1024:{ items: 3 }
      }
  });
});





document.querySelectorAll('.our-btn-arrow').forEach(button => {
  button.addEventListener('click', function (e) {
      e.stopPropagation(); // prevent bubbling up to parent
      const currentCard = this.closest('.our-service-card');

      // Close all other cards
      document.querySelectorAll('.our-service-card.active').forEach(card => {
          if (card !== currentCard) {
              card.classList.remove('active');
          }
      });

      // Toggle current card
      currentCard.classList.toggle('active');
  });
});





