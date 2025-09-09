<!-- Slick CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />

<style>
.video-carousel-container {
    position: relative;
    max-width: 1200px;
    margin: auto;
    padding: 20px;
}

.video-carousel-card {
    padding: 15px;
    text-align: center;
}

.video-carousel-card video {
    width: 100%;
    border-radius: 10px;
}

.video-carousel-card h4 {
    font-size: 18px;
    margin: 10px 0 5px;
}

.video-carousel-card p {
    font-size: 14px;
    margin: 2px 0;
}

.video-carousel-nav {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    z-index: 5;
    background-color: rgba(0, 0, 0, 0.6);
    color: #fff;
    border: none;
    padding: 10px 14px;
    font-size: 20px;
    cursor: pointer;
    border-radius: 50%;
}

.video-carousel-nav.left {
    left: -10px;
}

.video-carousel-nav.right {
    right: -10px;
}

/* Responsive Styles */
@media (max-width: 992px) {
    .video-carousel-card h4 {
        font-size: 16px;
    }

    .video-carousel-card p {
        font-size: 13px;
    }
}

@media (max-width: 768px) {
    .video-carousel-nav {
        font-size: 16px;
        padding: 8px 12px;
    }
}

@media (max-width: 480px) {
    .video-carousel-card {
        padding: 10px;
    }

    .video-carousel-card h4 {
        font-size: 15px;
    }

    .video-carousel-card p {
        font-size: 12px;
    }
}

.Testimonials-head {
    font-size: 1.8rem;
    font-weight: 600;
}
</style>
</head>

<body>
    <div class="text-center mt-5">

        <p>Testimonials</p>
        <h3 class="Testimonials-head newsletter-title">Trusted Excellence: Documented Professional<br> <span>Growth and
                Achievement Stories
                from Our Learning Community</span></h3>
    </div>
    <div class="video-carousel-container">
        <button class="video-carousel-nav left">&#10094;</button>
        <div class="slick-carousel">

            <div class="video-carousel-card">

                <iframe src="https://www.youtube.com/embed/CE-SUNgKnqY" height="400" width="280"
                    title="Iframe Example"></iframe>


                <h4>Aditya Giri</h4>
                <p class="fw-bold">Advocate on record Supreme Court</p>
            </div>

            <div class="video-carousel-card">
                <iframe src="https://www.youtube.com/embed/rnu0vqtQxeA" height="400" width="280"
                    title="Iframe Example"></iframe>
                <h4>Anupam Srivastav</h4>
                <p class="fw-bold">Director - Research & Client Services</p>
                <p>Mindforce Research</p>
            </div>

            <div class="video-carousel-card">
                <iframe src="https://www.youtube.com/embed/sVdMAhh2pt8" height="400" width="280"
                    title="Iframe Example"></iframe>
                <h4>Riju Ghosh</h4>
                <p class="fw-bold">Senior Data Protection Consultant</p>
                <p>DPDP Consultants</p>
            </div>

            <div class="video-carousel-card">
                <iframe src="https://www.youtube.com/embed/WfNxzyU2jJ0" height="400" width="280"
                    title="Iframe Example"></iframe>
                <h4>Bhavesh Kumar</h4>
                <p class="fw-bold">Chief Information Security Officer & DPO</p>
                <p>SK Finance</p>
            </div>

            <div class="video-carousel-card">
                <iframe src="https://www.youtube.com/embed/uFcbLftq-Wo" height="400" width="280"
                    title="Iframe Example"></iframe>
                <h4>Mohini Singla</h4>
                <p class="fw-bold">Data Protection Consultant</p>
                <p>DPDP Consultants</p>
            </div>

            <div class="video-carousel-card">
                <iframe src="https://www.youtube.com/embed/IFt6Y133b4U" height="400" width="280"
                    title="Iframe Example"></iframe>
                <h4>Vrinda Khemariya</h4>
                <p class="fw-bold">Data Protection Consultant</p>
                <p>DPDP Consultants</p>
            </div>

        </div>
        <button class="video-carousel-nav right">&#10095;</button>
    </div>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Slick JS -->
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    



    <script>
    $(document).ready(function() {
        $('.slick-carousel').slick({
            slidesToShow: 4,
            slidesToScroll: 1,
            arrows: true,
            dots: false,
            infinite: true,
            autoplay: true, // Keep it true initially
            autoplaySpeed: 3000,
            prevArrow: $('.video-carousel-nav.left'),
            nextArrow: $('.video-carousel-nav.right'),
            responsive: [{
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 2
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 1
                    }
                }
            ]
        });

        // Force stop autoplay on mobile after Slick initializes
        if (window.innerWidth <= 768) {
            $('.slick-carousel').slick('slickPause');
        }
    });
    </script>