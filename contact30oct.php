<?php session_start();
date_default_timezone_set('Asia/Kolkata');
include('contact-referer.php');
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Contact DPDP Act Consultants India</title>
    <meta name="description"
        content="Connect with our DPDP Act compliance management techno-legal experts to explore tailored data protection solutions.">
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
    <style>
    .blog {
        text-align: center;
        color: white;
        position: relative;
    }

    .hero-contact {
        padding: 80px 20px;
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
        align-items: center;
        justify-content: center;
        flex-wrap: wrap;
        margin-top: 50px;
        gap: 20px;
        box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.2);
        padding: 5px;
        border-radius: 20px;
        background: white;
    }

    .contact-box {
        background-color: #02092c;
        color: white;
        padding: 30px;
        border-radius: 20px;
        width: 100%;
        max-width: 400px;
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
        padding: 71px border-radius: 20px;
        /* box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.1); */
        width: 100%;
        max-width: 700px;
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
            br{
                display: none;
            }
            font-size: 1.2rem;
        }
        .hero-contact p{
            font-size:12px;
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
    </style>

<?php

$act = $_REQUEST["act"];

$hdtext = "Contact Us for DPDPA Compliance Services | Data Privacy Experts | DPDP Consultants";

if($act=='contact') { $hdtext = "Contact Us"; }
if($act=='schedule') { $hdtext = "Schedule a call"; }
if($act=='newsletter') { $hdtext = "Sign up for Newsletter"; }
if($act=='careers') { $hdtext = "Careers"; $hdtext = $_GET['job']; }
if($act=='visitor') { $hdtext = "Visitor Desk"; }

if($act=='blogs') { $hdtext = "Blogs"; }
if($act=='whitepapers') { $hdtext = "Whitepapers"; }
if($act=='research') { $hdtext = "Research"; }
if($act=='inthenews') { $hdtext = "In The News"; }
if($act=='events') { $hdtext = "Events"; }
if($act=='webinars') { $hdtext = "Webinars"; }



?>

    <title><?=$hdtext; ?></title>

    <meta name="description"
        content="Connect with our DPDPA compliance experts to explore tailored data privacy solutions. Get assistance with audits, consulting, policy development, and training." />


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"
        integrity="sha512-jGsMH83oKe9asCpkOVkBnUrDDTp8wl+adkB2D+//JtlxO4SrLoJdhbOysIFQJloQFD+C4Fl1rMsQZF76JjV0eQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</head>

<body>

    <section class="blog" style="background-color: #02092c;">
        <?php include_once('new-nav.php');?>
        <div class="container hero-contact">
            <h1>Your tech driven <span class="highlight-acc">privacy solution</span><br> is just a conversation away
            </h1>
            <p>Have questions or need expert guidance?<br>Contact us today, and our team will provide you with tailored
                solutions to ensure your data privacy and
                compliance needs are fully met
            </p>
        </div>
    </section>



    <?php include_once('contact-form.php');?>


    <?php include_once('footer.php');?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<!-- Event snippet for Submit Lead Form conversion page -->
<script>
  gtag('event', 'conversion', {'send_to': 'AW-16540124026/XOSvCLjTsasZEPqG-c49'});
</script>

</body>

</html>
