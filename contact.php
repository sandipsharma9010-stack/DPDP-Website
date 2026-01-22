<?php session_start();
date_default_timezone_set('Asia/Kolkata');
include('contact-referer.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <meta name="keywords"
        content="DPDP Act compliance services, contact data privacy experts, DPDP Act consulting solutions, compliance audit assistance, policy development support, data privacy training, regulatory help">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="icon" href="assets/images/fav-icon-logo.png" type="image/webp">

    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="canonical" href="https://www.dpdpconsultants.com/contact.php">

    <?php include_once('google-tag-manager.php'); ?>
    <style>
        .blog {
            text-align: center;
            color: white;
            position: relative;
        }

        .hero-contact {
            padding: 120px 20px;
        }

        .hero-contact h1 {
            font-size: 2.5rem;
            font-weight: bold;
        }

        .hero-contact span {
            color: #3CA6E0;
        }

        .hero-contact p {
            max-width: 936px;
            margin: 20px auto;
            font-size: 1rem;
            color: white;
        }

        .btns-primary {
            background-color: #3CA6E0;
            border: none;
            padding: 10px 20px;
            font-size: 1rem;
            border-radius: 20px;
        }

        .btn-outline-light {
            border-radius: 20px;
            padding: 10px 20px;
            font-size: 1rem;
        }



        .servies {
            letter-spacing: 2px;
            line-height: 48px;
        }


        .contact-container {
            display: flex;
            align-items: stretch;
            justify-content: center;
            flex-wrap: wrap;
            margin-top: 50px;
            gap: 40px;
            /* 👈 pehle 196px tha */
            box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.2);
            padding: 20px;
            border-radius: 20px;
            background: white;
        }

        .contact-box {
            background-color: #02092c;
            color: white;
            padding: 30px;
            border-radius: 20px;
            width: 45%;
            /* 👈 50% → 45% */
            max-width: 548px;
            box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.2);
        }

        .contact-box h4 {
            letter-spacing: 2px;
            font-size: 20px;
        }

        .contact-box p {
            letter-spacing: 2px;
            font-size: 12px;
        }

        .contact-box a {
            color: #FFF;
            text-decoration: none;
            /* font-weight: 600; */
            padding: 5px;
        }

        .contact-box a:hover {
            text-decoration: underline;
        }

        .form-box {
            background-color: white;
            padding: 30px;
            border-radius: 20px;
            width: 55%;
            /* 👈 balance */
            max-width: 686px;
        }

        .btn-submit {
            background-color: #3CA6E0;
            border: none;
            padding: 9px 25px;
            border-radius: 10px;
            font-size: 16px;
            font-weight: 600;
            color: white;
            /* width: 100%; */
        }

        .form-label {
            color: #6F6969;
        }

        .btn-submit:hover {
            background-color: #2a89c0;
        }

        .contact-box p,
        .contact-box strong {
            margin-bottom: 12px;
            /* font-size: 16px; */
        }

        .contact-box h6 {
            font-size: 16px;
            letter-spacing: 1px;
        }

        .input-group .form-control,
        .form-control {
            height: 50px;
            border-radius: 10px;
            box-shadow: 5px 5px 8px rgba(0, 0, 0, 0.2);
            border: none;
        }

        .input-group-text {
            background-color: white;
            border-radius: 10px;
            box-shadow: 5px 5px 8px rgba(0, 0, 0, 0.2);
            border: none;
        }

        @media (max-width: 768px) {
            .contact-container {
                flex-direction: column;
                align-items: center;
            }

            .form-box,
            .contact-box {
                width: 90%;
            }

            .hero-contact h1 {
                br {
                    display: none;
                }

                font-size: 1.2rem;
            }

            .hero-contact p {
                font-size: 12px;
            }

            .hero-contact {
                padding: 34px 20px;
            }
        }

        .modal-header {
            background-color: #02092c;
            color: white;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }

        .modal-content {
            border-radius: 10px;
            width: 90%;
            max-width: 1000px;
            /* Desktop: Wider modal */
            height: 80vh;
            max-height: 80vh;
            /* margin-top: 0 !important; */
        }

        .modal-body {
            max-height: 60vh;
            overflow-y: auto;
        }

        .modal-footer {
            justify-content: end;
        }

        .btn-agree {
            background-color: #3CA6E0;
            color: white;
            border-radius: 5px;
            padding: 6px 38px;
        }

        .btn-close-custom {
            background-color: #6c757d;
            color: white;
            border-radius: 5px;
            padding: 6px 38px;
        }

        /* Responsive Adjustments */
        @media (max-width: 768px) {
            .modal-content {
                width: 95%;
                height: auto;
                max-height: 85vh;
            }

            .modal-body {
                max-height: 55vh;
            }

            .modal-footer {
                flex-direction: column;
                align-items: flex-end;
                gap: 10px;
            }
        }


        .language-content {
            display: none;
        }



        .career-img {
    display: block;       
    margin: 0 auto;      
    width: 100%;
    height: auto;
    max-width: 450px;      
}

/*  Mobile */
@media (max-width: 575px) {
    .career-img {
        max-width: 260px;
    }
}

/*  Tablet */
@media (min-width: 576px) and (max-width: 991px) {
    .career-img {
        max-width: 350px;
    }
}

/* Desktop */
@media (min-width: 992px) {
    .career-img {
        max-width: 450px;
    }
}

    </style>

    <?php

    $act = "contact";

    if($_REQUEST["act"]) {
        $act = $_REQUEST["act"];
    }

    $hdtext = "Contact Us for DPDPA Compliance Services | Data Privacy Experts | DPDP Consultants";

    $metatitle = "Contact us for DPDP Compliance Services and CMP Tools";
    $metadesc = "Connect with our DPDPA compliance experts to explore tailored data privacy solutions. Get assistance with audits, consulting, policy development, and training.";
    $metakeyw = "Contact";

    if ($act == 'schedule') {
        $hdtext = "Schedule a call";
        $metatitle = "Schedule a Call with DPDP Consultants - Your Data Privacy Experts";
    }
    if ($act == 'newsletter') {
        $hdtext = "Sign up for Newsletter";
        $metatitle = "Subscribe to our newsletter for DPDP Act News";
        // $metadesc = "description Newsletter";
        // $metakeyw = "keywords Newsletter";
    }
    if ($act == 'careers') {
        $hdtext = $_GET['job'];
        $hdtext = "Apply Now";
        $metatitle = "Careers - Join Our Team - DPDP Consultants";
    }
    if ($act == 'visitor') {
        $hdtext = "Visitor Desk";
        $metatitle = "Visitor Desk - DPDP Consultants";
    }

    if ($act == 'blogs') {
        $hdtext = "Blogs";
        $metatitle = "Blogs on Data Privacy and Compliance - DPDP Consultants";
    }
    if ($act == 'newsletters') {
        $hdtext = "Newsletters";
        $metatitle = "Newsletters on Data Privacy and Compliance - DPDP Consultants";
    }
    if ($act == 'whitepapers') {
        $hdtext = "Whitepapers";
        $metatitle = "Whitepapers on Data Privacy and Compliance - DPDP Consultants";
    }
    if ($act == 'research') {
        $hdtext = "Research";
        $metatitle = "Research on Data Privacy and Compliance - DPDP Consultants";
    }
    if ($act == 'inthenews') {
        $hdtext = "In The News";
        $metatitle = "In The News - Data Privacy and Compliance Updates - DPDP Consultants";
    }
    if ($act == 'events') {
        $hdtext = "Events";
        $metatitle = "Events on Data Privacy and Compliance - DPDP Consultants";
    }
    if ($act == 'webinars') {
        $hdtext = "Webinars";
        $metatitle = "Webinars on Data Privacy and Compliance - DPDP Consultants";
    }

    if ($act == 'Partnerwithus') {
        $hdtext = "Fill to collaborate with us";
        $metatitle = "Partner with DPDP Consultants";
        // $metadesc = "description Partner";
        // $metakeyw = "keywords Partner";
    }


    ?>

    <title><?= $metatitle; ?></title>

    <meta name="description" content="<?= $metadesc; ?>" />

    <meta name="keywords" content="<?= $metakeyw; ?>" />


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"
        integrity="sha512-jGsMH83oKe9asCpkOVkBnUrDDTp8wl+adkB2D+//JtlxO4SrLoJdhbOysIFQJloQFD+C4Fl1rMsQZF76JjV0eQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</head>

<body>

    <section class="blog" style="background-color: #02092c;">
        <?php include_once('new-nav.php'); ?>

        <?php if ($act == 'Partnerwithus') { ?>
            <div class="container hero-contact">

                <h1>Partner With DPDP Consultants <span class="highlight-acc">for Data</span><br> Protection Compliance
                </h1>
                <p>Fill out the form to collaborate with DPDP Consultants on data protection compliance initiatives. Partner with us to help clients meet regulatory requirements, strengthen privacy frameworks, and ensure robust data protection practices.
                </p>
            </div>
        <?php } elseif ($act == 'schedule') { ?>
            <div class="container hero-contact">

                <h1>Schedule a DPDP Compliance <span class="highlight-acc">Consultation</span><br> 
                </h1>
                <p>Schedule a call with DPDP Consultants to discuss your organization’s DPDP compliance needs. Our experts will guide you through requirements, clarify obligations, and help you plan a clear path to achieving and maintaining data protection compliance.
                </p>
            </div>
        <?php } elseif ($act == 'careers') { ?>
            <div class="container hero-contact">

                <h1>Apply for Career Opportunities in <span class="highlight-acc">Data Protection </span><br>& Privacy
                    Compliance
                </h1>
                <p>Submit your application to explore roles in data protection, privacy compliance, and technology-driven
                    governance. Our team reviews every application carefully to identify candidates who align with our
                    expertise, values, and commitment to regulatory excellence.
                </p>
            </div>
        <?php } else { ?>
            <div class="container hero-contact">

                <h1>Your tech driven <span class="highlight-acc">privacy solution</span><br> is just a conversation away
                </h1>
                <p>Have questions or need expert guidance?<br>Contact us today, and our team will provide you with tailored
                    solutions to ensure your data privacy and
                    compliance needs are fully met
                </p>
            </div>
        <?php } ?>
    </section>



    <?php include_once('contact-form.php'); ?>


    <?php include_once('footer.php'); ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Event snippet for Submit Lead Form conversion page -->
    <script>
        gtag('event', 'conversion', { 'send_to': 'AW-16540124026/XOSvCLjTsasZEPqG-c49' });
    </script>

</body>

</html>