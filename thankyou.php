<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You Page</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>compliance-tools</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/style.css">

    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <style>
    body {
        background-color: #f8f9fa;
    }

    .thankyou-container {
        max-width: 900px;
        background: white;
        border-radius: 20px;
        box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.1);
        padding: 0;
        display: flex;
        overflow: hidden;
        flex-wrap: wrap;
    }

    .matter {
        letter-spacing: 2px;
        font-size: 18px;
    }

    .icon-container-thanks {
        width: 30%;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 4px;
    }

    .icon-container-thanks img {
        width: 100%;
        height: auto;
        object-fit: cover;
        border-radius: 10px;
    }

    .content-container {
        width: 70%;
        padding: 35px;
    }

    .btn-custom {
        background-color: #3b82f6;
        color: white;
        border-radius: 20px;
        padding: 10px 20px;
    }

    .social-media a {
        margin-right: 10px;
    }

    .small {
        width: 270px !important;
    }

    /* Responsive Adjustments */
    @media (max-width: 768px) {
        .thankyou-container {
            flex-direction: column;
            text-align: center;
        }

        .icon-container-thanks {
            width: 100%;
            height: auto;
            padding: 20px;
        }

        .icon-container-thanks img {
            max-width: 60%;
        }

        .content-container {
            width: 100%;
            padding: 20px;
        }

        .d-flex.justify-content-between {
            flex-direction: column;
            align-items: center;
        }

        .social-media,
        .privacy {
            text-align: center;
            margin-bottom: 20px;
        }

        .social-media a {
            display: inline-block;
        }
    }
    </style>
</head>

<body>
    <?php include('nav.php'); ?>
    <div class="container d-flex justify-content-center align-items-center mt-5">
        <div class="thankyou-container">
            <div class="icon-container-thanks">
                <img src="./assets/images/thanks-img.png" alt="Lock Icon">
            </div>
            <div class="content-container">
                <h5 class="fw-bold matter">You matter. We matter.</h5>
                <h2 class="text-primary fw-bold">Data Privacy Matters.</h2>
                <p>Thank you for contacting DPDP Consultants; Our Privacy Expert will reach out to you shortly.</p>
                <div class="d-flex justify-content-between align-items-center mt-3">
                    <div class="social-media">
                        <p class="fw-bold mb-1">Follow us:</p>
                        <a class="text-black" href="#"><i class="bi bi-linkedin fs-2"></i></a>
                        <a class="text-black" href="#"><i class="bi bi-youtube fs-2"></i></a>
                        <a class="text-black" href="#"><i class="bi bi-twitter-x fs-2"></i></a>
                        <p class="small text-muted">Get regular updates and insights</p>
                    </div>
                    <div class="privacy">
                        <p class="fw-bold mb-1">Join privacy community:</p>
                        <img src="./assets/images/privacy-tnanks.png" alt="Privacy Circle" width="100">
                        <p class="small text-muted">~ Data protection officers community</p>
                    </div>
                </div>
                <div class="text-center mt-3">
                    <a href="index.php" class="btn btn-custom">Home Page</a>
                </div>
            </div>
        </div>
    </div>
    <?php include('footer.php'); ?>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.bundle.min.js"></script>

</html>