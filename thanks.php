<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You Page</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/style.css">

    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <?php include_once('google-tag-manager.php'); ?>
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
    <?php include('new-nav.php'); ?>
    <?php
    //
    $act = $_GET['act'];
    $proceed = ltrim(base64_decode($_GET['proceed']));
    //
    if ($proceed) {
        ?>
        <script>
            window.location.href = "<?php echo $proceed; ?>";
        </script>
        <?php
    }
    //
    ?>
    <div class="container d-flex justify-content-center align-items-center mt-5">
        <div class="thankyou-container">
            <div class="icon-container-thanks">
                <img src="./assets/images/thanks-img.png" alt="Lock Icon">
            </div>
            <div class="content-container">

                <h5 class="fw-bold matter">You matter. We matter.</h5>

                <?php if (($act == '') || ($act == 'contact')) { ?>
                    <h2 class="text-primary fw-bold">Data Privacy Matters.</h2>
                    <p>Thank you for contacting DPDP Consultants; Our Privacy Expert will reach out to you shortly.</p>
                <?php } ?>

                <?php if ($act == 'schedule') { ?>
                    <h2 class="text-primary fw-bold">Protecting Data Privacy Matters.</h2>
                    <p>Thank you for scheduling a call with us! Our privacy expert will connect with you at your chosen time
                        to discuss your needs and explore how we can help.</p>
                <?php } ?>

                <?php if ($act == 'newsletter') { ?>
                    <h2 class="text-primary fw-bold">Staying Informed Matters.</h2>
                    <p>Thank you for subscribing to our newsletter! Get ready for the latest updates, expert tips, and
                        insights on data privacy delivered straight to your inbox.</p>
                <?php } ?>

                <?php if ($act == 'careers') { ?>
                    <h2 class="text-primary fw-bold">Building A Privacy-First Future Matters.</h2>
                    <p>Thank you for applying! Our team is reviewing your application, and we’ll be in touch if your skills
                        and passion align with our mission.</p>
                <?php } ?>

                <div class="d-flex justify-content-between align-items-center mt-3">
                    <div class="social-media">
                        <p class="fw-bold mb-1">Follow us:</p>
                        <a target="_blank" class="text-black"
                            href="https://www.linkedin.com/company/dpdpconsultants/"><i class="bi bi-linkedin fs-2"
                                aria-label="Visit our LinkedIn profile" title="Follow us on LinkedIn"></i></a>
                        <a target="_blank" class="text-black" aria-label="Visit our YouTube channel"
                            title="Follow us on YouTube" href="https://www.youtube.com/@DPDPConsultants"><i
                                class="bi bi-youtube fs-2"></i></a>
                        <a target="_blank" class="text-black" title="Follow us on YouTube"
                            title="Follow us on Twitter (X)" href="https://x.com/socialdpdp43979"><i
                                class="bi bi-twitter-x fs-2"></i></a>
                        <p class="small text-muted">Get regular updates and insights</p>
                    </div>
                    <div class="privacy">
                        <p class="fw-bold mb-1">Join privacy community:</p>
                        <a target="_blank" href="https://www.linkedin.com/groups/14602504/"><img
                                src="./assets/images/privacy-tnanks.png" alt="The Privacy Circle Image" width="100"></a>
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

    <!-- Event snippet for Submit Lead Form conversion page -->
    <!-- <script>
  gtag('event', 'conversion', {'send_to': 'AW-16540124026/XOSvCLjTsasZEPqG-c49'});
</script> -->

    <!-- Event snippet for Sign-up conversion page -->
    <script>
        gtag('event', 'conversion', {
            'send_to': 'AW-16540124026/km7rCPaZ1KobEPqG-c49',
            'value': 1.0,
            'currency': 'INR'
        });
    </script>

</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.bundle.min.js"></script>

</html>