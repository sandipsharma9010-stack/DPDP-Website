<style>
.carousel .card {
      padding: 10px;
      background: #fff;
      border-radius: 10px;
      text-align: center;
      box-shadow: 0 2px 10px rgba(0,0,0,0.1);
      height: 100%;
    }

    .carousel .card img {
      width: 100%;
      border-radius: 8px;
      margin-bottom: 10px;
    }

    .slick-slide {
      margin: 0 10px;
    }

    .slick-prev-custom,
    .slick-next-custom {
      position: absolute;
      top: 50%;
      transform: translateY(-50%);
      background: transparent;
      border: none;
      z-index: 10;
      cursor: pointer;
    }

    .slick-prev-custom {
      left: -40px;
    }

    .slick-next-custom {
      right: -40px;
    }

    .slick-prev-custom img,
    .slick-next-custom img {
      width: 40px;
      height: 40px;
      filter: drop-shadow(0 2px 5px rgba(0,0,0,0.3));
    }

    @media (max-width: 768px) {
      .slick-prev-custom {
        left: -25px;
      }

      .slick-next-custom {
        right: -25px;
      }

      .modal-body iframe {
        height: 250px;
      }
    }

    .modal-header .btn-close {
      position: absolute;
      right: 15px;
      top: 10px;
      z-index: 5;
    }

    .modal-body iframe {
      width: 100%;
      height: 500px;
    }

    .carousel-container {
      position: relative;
      padding: 30px 40px;
    }
</style>


<div class="container carousel-container">
  <div class="carousel row">
    <!-- Card 1 -->
    <div class="card">
      <img src="https://img.youtube.com/vi/WfNxzyU2jJ0/hqdefault.jpg" alt="Video 1 Thumbnail">
      <h5>Video 1</h5>
      <button class="btn btn-primary open-modal" data-video="https://www.youtube.com/embed/WfNxzyU2jJ0">Watch Video</button>
    </div>

    <!-- Card 2 -->
    <div class="card">
      <img src="https://img.youtube.com/vi/uFcbLftq-Wo/hqdefault.jpg" alt="Video 2 Thumbnail">
      <h5>Video 2</h5>
      <button class="btn btn-primary open-modal" data-video="https://www.youtube.com/embed/uFcbLftq-Wo">Watch Video</button>
    </div>

    <!-- Card 3 -->
    <div class="card">
      <img src="https://img.youtube.com/vi/sVdMAhh2pt8/hqdefault.jpg" alt="Video 3 Thumbnail">
      <h5>Video 3</h5>
      <button class="btn btn-primary open-modal" data-video="https://www.youtube.com/embed/sVdMAhh2pt8">Watch Video</button>
    </div>

    <!-- Card 4 -->
    <div class="card">
      <img src="https://img.youtube.com/vi/IFt6Y133b4U/hqdefault.jpg" alt="Video 4 Thumbnail">
      <h5>Video 4</h5>
      <button class="btn btn-primary open-modal" data-video="https://www.youtube.com/embed/IFt6Y133b4U">Watch Video</button>
    </div>

    <!-- Card 5 -->
    <div class="card">
      <img src="https://img.youtube.com/vi/rnu0vqtQxeA/hqdefault.jpg" alt="Video 5 Thumbnail">
      <h5>Video 5</h5>
      <button class="btn btn-primary open-modal" data-video="https://www.youtube.com/embed/rnu0vqtQxeA">Watch Video</button>
    </div>

    <!-- Card 6 -->
    <div class="card">
      <img src="https://img.youtube.com/vi/CE-SUNgKnqY/hqdefault.jpg" alt="Video 6 Thumbnail">
      <h5>Video 6</h5>
      <button class="btn btn-primary open-modal" data-video="https://www.youtube.com/embed/CE-SUNgKnqY">Watch Video</button>
    </div>
  </div>
</div>

<!-- Video Modal -->
<div class="modal fade" id="videoModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content position-relative">
      <div class="modal-header border-0">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body p-0">
        <iframe id="videoFrame" frameborder="0" allowfullscreen allow="autoplay"></iframe>
      </div>
    </div>
  </div>
</div>

<script>
  $(document).ready(function () {
    // Initialize slick
    $('.carousel').slick({
      slidesToShow: 3,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 3000,
      arrows: true,
      prevArrow: `<button type="button" class="slick-prev-custom">
                    <img src="arrow.png" alt="Prev">
                  </button>`,
      nextArrow: `<button type="button" class="slick-next-custom">
                    <img src="arrow.png" alt="Next" style="transform: rotate(180deg);">
                  </button>`,
      responsive: [
        { breakpoint: 992, settings: { slidesToShow: 2 }},
        { breakpoint: 576, settings: { slidesToShow: 1 }}
      ]
    });

    // Open modal
    $(document).on('click', '.open-modal', function () {
      const videoSrc = $(this).data('video');
      $('#videoFrame').attr('src', videoSrc + "?autoplay=1");
      $('#videoModal').modal('show');
    });

    // Close modal
    $('#videoModal').on('hidden.bs.modal', function () {
      $('#videoFrame').attr('src', '');
    });
  });
</script>


</script>