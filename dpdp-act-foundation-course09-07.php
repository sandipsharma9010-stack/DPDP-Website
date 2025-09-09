<?php session_start();
date_default_timezone_set('Asia/Kolkata');
include('contact-referer.php');
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>DPDP Act Foundation Course – Online Certification & Internship Program | Learn Data Protection Law of India
    </title>
    <meta name="description"
        content="Join the DPDP Act Foundation Course and gain in-demand skills in data protection law. Get certified, access internship opportunities, and learn at your own pace. Ideal for law professionals, tech students, business & compliance experts.">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/style.css">

    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">

    <style>
    .hero-section {
        padding: 100px 36px 160px;
    }

    .servies {
        line-height: 45px;
        letter-spacing: 2px;
    }

    .btns-primary {
        padding: 8px 54px;
    }

    .cal-number-img {
        width: 100%;
        max-width: 900px;
        height: auto;
        margin: 0 auto;
    }

    .benefits-box {
        background-color: #ffffff;
        border-radius: 16px;
        padding: 30px 20px;
        box-shadow: 0 6px 20px rgba(0, 0, 0, 0.1);
        margin-top: -90px;
        max-width: 1258px;
        position: relative;
        z-index: 1;
        /* bottom: 128px; */
    }

    .benefits-title {
        font-weight: 600;
        font-size: 16px;
        color: #000;
        margin-bottom: 30px;
        text-align: left;
    }

    .benefit-item {
        width: 100%;
        max-width: 100%;
        height: 100%;
        /* background-color: #f5f5f5; */
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 10px 15px;
    }

    .benefit-item img {
        width: 80%;
        height: 80%;
        object-fit: contain;
        /* margin-bottom: 15px; */
    }


    /* .benefit-icon {
        width: 100px;
        height: 100px;
        margin-bottom: 15px;
    } */

    .benefit-text {
        font-weight: 600;
        font-size: 14px;
        text-align: center;
        line-height: 1.4;
        color: #000;
    }


    .course-container {
        /* padding: 3rem 1rem; */
    }

    .highlight {
        color: #0d6efd;
        font-weight: 600;
    }

    .course-img {
        max-width: 100%;
        height: auto;
        /* margin-bottom: 1rem; */
    }

    .price-tag {
        color: white;
        font-weight: bold;
        padding: 0.75rem 1.5rem;
        border-radius: 2rem;
        display: inline-block;
        font-size: 1.2rem;
    }

    .price-label {
        font-size: 0.75rem;
        font-weight: bold;
        text-transform: uppercase;
        margin-bottom: 0.25rem;
    }

    .price-tag {
        width: 20%;
        height: auto;

    }

    .price-img {
        width: 15%;
        height: auto;
        display: flex;
        align-items: flex-end;
        justify-content: flex-end;
    }

    .number-overlay {
        position: absolute;
        top: 46%;
        left: 50%;
        /* transform: translateX(-50%); */
        display: flex;
        gap: 8px;
        justify-content: center;
    }

    .number-box {
        width: 50px;
        height: 50px;
        background: transparent;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: bold;
        font-size: 24px;
        color: #000;
        letter-spacing: 44px;
    }

    .sticky-img {
        position: fixed;
        top: 75%;
        z-index: 10;
    }



    .header {
        text-align: center;
        padding: 2rem 1rem;
    }

    .header h2 {
        font-size: 1.8rem;
        /* color: #0056d2; */
        font-weight: 600;
    }

    .header h2 span {
        color: #2a2a2a;
    }

    .card-box {
        background-color: #000032;
        color: white;
        border-radius: 1rem;
        margin-bottom: 2rem;
        padding: 2rem;
        position: relative;
    }

    .card-box .icon-number {
        position: absolute;
        top: 10px;
        left: 15px;
        background-color: #3294CD;
        width: 45px;
        height: 45px;
        font-size: 1.2rem;
        font-weight: 700;
        color: #000032;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
    }

    .card-box .share {
        position: absolute;
        top: 1rem;
        right: 1rem;
        color: white;
        cursor: pointer;
        font-size: 1.2rem;
    }

    .card-box h4 {
        color: #3294CD;
        font-size: 1.5rem;
        /* font-weight: bold; */
        margin-bottom: 1rem;
        letter-spacing: 2px;
    }

    .card-box ul {
        padding-left: 1.2rem;
    }

    .card-box ul li {
        margin-bottom: 0.5rem;
    }

    .card-img {
        max-width: 52%;
        height: auto;
    }


    .section-header {
        /* margin-bottom: 3rem; */
    }

    .section-subtitle {
        font-size: 0.9rem;
        color: white;
    }

    .section-highlight {
        display: inline-block;
        padding: 1rem 1.5rem;
        border-radius: 8px;
        font-size: 1.8rem;
        font-weight: 600;
    }

    .section-highlight span {
        color: #3294CD;
    }

    .section-cards {
        /* margin-top: 2rem; */
    }

    .section-card {
        background-color: #02093c;
        border: none;
        padding: 2rem 1rem;
        border-radius: 1rem;
        box-shadow: 0 10px 20px rgba(0, 0, 0, 2.6);
        color: white;
        /* font-weight: 600; */
        min-height: 275px;
        /* display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center; */
    }

    .section-card img {
        width: 50px;
        height: 50px;
        margin-bottom: 1rem;
    }

    .online-cerifi {
        font-size: 2rem;
    }

    @media (max-width: 768px) {
        .section-highlight {
            text-align: center;
            font-size: 1.5rem;
            line-height: 30px;
            letter-spacing: 1px;
            padding: 0px 0px;
        }

        .section-card {
            margin-top: 20px;
            padding: 1.5rem 1rem;
            text-align: left;
        }

        .price-img {
            width: 30%;
            height: auto;
        }

        .sticky-img {
            top: 95%;
            right: 5%;
        }

        .number-box {
            letter-spacing: 50px;
        }
    }


    @media (max-width: 768px) {
        .header h2 {
            text-align: center;
            font-size: 1.5rem;
            line-height: 26px;
            letter-spacing: 1px;

        }

        .card-box ul li {
            /* padding: 1.5rem 1rem; */
            text-align: left;
        }
    }

    @media (max-width: 767px) {
        br {
            display: none;
        }

        .benefit-item {
            margin-bottom: 20px;
        }

        .hero-section {
            padding: 30px 13px 148px;
        }

        .hero-section-about {
            font-size: 1.5rem !important;
            letter-spacing: 1px;
            line-height: 30px;
            /* text-align: left; */
        }


        .cal-number-img {
            margin-top: 20px;
            width: 100%;

        }

        .number-overlay {
            gap: 14px;
            top: 51%;
            left: 51%;
        }

        .online-cerifi {
            text-align: center;
            font-size: 1.5rem !important;
            line-height: 30px;
            letter-spacing: 1px;
            /* padding:7px 2px 40px; */
        }

        .future-proof-m {
            text-align: center;
            font-size: 1.5rem !important;
            line-height: 26px;
            /* letter-spacing: 1px; */
            /* padding:7px 2px 40px; */
        }

        .smalls {
            text-align: center !important;
        }

        .form-label {
            text-align
        }
    }


    .highlight-blue {
        color: #3294CD;
    }

    .enroll-container {
        background: white;
        border-radius: 12px;
        box-shadow: 0 2px 12px rgba(0, 0, 0, 1.08);
        padding: 30px;
        margin-top: 30px;
    }

    .form-control {
        border-radius: 10px;
        box-shadow: none;
    }

    .form-label {
        font-size: 12px;
        font-weight: 600;
        color: #666;
    }

    .btn-primary {
        background-color: #3294CD;
        border: none;
        border-radius: 10px;
        padding: 10px 30px;
        font-weight: 600;
    }

    .btn-primary:hover {
        background-color: #2980b9;
    }

    .form-section {
        display: flex;
        align-items: center;
    }

    .form-section img {
        border-radius: 12px;
        width: 100%;
        max-width: 400px;
    }

    .input-shadow {
        box-shadow: 2px 2px 6px rgba(0, 0, 0, 0.15);
        border-radius: 10px;
    }

    .header-contact {
        font-size: 1.8rem;
        font-weight: 600;
        line-height: 40px;
    }

    .highlight-one-steps {
        color: #3294CD;
    }

    .carousel-wrapper {
        width: 100%;
        max-width: 1300px;
        text-align: center;
        margin: 40px auto;
    }

    .carousel-wrapper h2 {
        margin-bottom: 20px;
        color: #333;
    }

    .carousel-container {
        position: relative;
        overflow: hidden;
    }

    .carousel-track-wrapper {
        overflow-x: hidden;
        /* scroll-behavior: smooth; */
    }

    .carousel-track {
        display: flex;
        width: max-content;
    }

    .testimonial-card {
        flex: 0 0 300px;
        margin: 20px;
        padding: 20px;
        background: white;
        /* border-radius: 15px; */
        /* box-shadow: 0 3px 10px rgba(0, 0, 0, 0.1); */
        text-align: center;
        transition: transform 0.3s ease;
    }

    .testimonial-card img {
        border-radius: 50%;
        width: 80px;
        height: 80px;
        margin-bottom: 15px;
    }

    .testimonial-card p {
        font-size: 0.95rem;
        color: #555;
        margin-bottom: 10px;
    }

    .testimonial-card h4 {
        color: #222;
        margin-top: 10px;
    }

    .nav1 {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        background: #fff;
        border: none;
        font-size: 28px;
        padding: 10px;
        border-radius: 50%;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        cursor: pointer;
        z-index: 10;
    }

    .nav1.left {
        left: 10px;
    }

    .nav1.right {
        right: 10px;
    }

    .nav1:hover {
        background: #f0f0f0;
    }

    .section-box-one-step-edu {
        padding: 8px;
        border-radius: 10px;
        margin-bottom: 15px;
        display: flex;
        align-items: center;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 6.4);
    }


    .video-m {

        width: 630px;
        height: 420px;

    }

    /*  Mobile Responsive */
    @media (max-width: 768px) {
        .testimonial-card {
            flex: 0 0 250px;
            margin: 15px 10px;
            padding: 15px;
        }

        .testimonial-card p {
            font-size: 0.9rem;
        }

        .nav1 {
            font-size: 22px;
            padding: 8px;
        }

        .section-box-one-step-edu {
            text-align: left;
            margin-top: 30px;
        }

        .video-m {
            width: 378px;
            height: 250px;
        }

        .enrollnow {
            display: none;
            /* padding:8px 50px; */
        }
    }

    @media (max-width: 500px) {
        .testimonial-card {
            flex: 0 0 220px;
            margin: 10px 5px;
            padding: 10px;
        }

        .testimonial-card img {
            width: 60px;
            height: 60px;
        }

        .nav1 {
            font-size: 20px;
            padding: 6px;
        }

        #videoFrame {
            margin-top: 40px;
            width: 100%;
            height: 100%;
        }
    }

    .tata-motors {
        width: 100%;
        height: auto;
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .tata-motors .logo-box {
        background-color: white;
        padding: 8px;
        border-radius: 50px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .tata-motors .logo-box img {
        width: 32px;
        height: auto;
    }

    .clinets {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-top: 19px;
    }

    .list-master {
        text-align: left;
    }

    .home-bg1 {
        background-color: #02092c;
        color: #fff;
        width: 100%;
        /* min-height: 90vh; */
    }

    .lear-fast h3 {
        font-size: 2rem;
        /* font-weight: 700; */
    }

    .btn-submit {
        background-color: #3294CD;
        color: white;
    }


    .main-heading-edu {
        font-weight: 700;
        font-size: 20px;
    }

    .sub-heading-edu {
        color: #3d90e3;
        font-size: 28px;
        font-weight: 700;
    }

    .card-custom-edu {
        border-radius: 16px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 1.1);
        padding: 20px;
    }

    .price-label-edu {
        font-weight: 700;
        font-size: 16px;
        color: #2e2e2e;
        border-bottom: 3px solid #8b3d3d;
        display: inline-block;
        margin-bottom: 10px;
    }

    .price-info-edu p {
        margin: 0;
        font-weight: 600;
        color: #2e2e2e;
    }

    .price-info-edu span {
        font-weight: 400;
        color: #333;
    }

    input[type=submit] {
        background-color: #3d90e3;
        color: white;
        font-weight: 600;
        padding: 10px 25px;
        font-size: 16px;
        border-radius: 10px;
        border: none;
        transition: 0.3s;
    }

    .btn-pay-edu:hover {
        background-color: #3179c7;
    }


    .thanks-heading {
        color: black;
    }

    .thanks-heading p {
        color: black;
    }

    .thanks-heading1 {
        width: 100%;
        height: auto;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        margin: 0px auto;
    }

    .contact-img {
        border-radius: 20px;
    }


    /* Real Success. Real Impact. */
    .custom-carousel-wrapper {
        width: 100%;
        max-width: 100%;
        overflow: hidden;
    }

    .custom-carousel {
        display: flex;
        gap: 15px;
        transition: transform 0.5s ease;
    }

    .carousel-img {
        flex: 0 0 calc(100% / 3);
        /* 3 images per view */
        max-width: calc(100% / 3);
    }

    .arrow-cls {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        background: none;
        border: none;
        z-index: 2;
    }

    .carousel-control-prev {
        left: 0;
    }

    .carousel-control-next {
        right: 0;
    }

    @media (min-width: 992px) {
        .enrollnow1 {
            display: none;
        }

    }


 .btn-agree{
        background-color: #3CA6E0;
color:white;

    }
    .btn-close-custom{
        background-color: #6c757d;
color:white;

    }
    </style>
</head>
<body>
    <?php include_once('cookie_consent.php'); ?>
    <section class="blog" style="background-color: #02092c;">
        <?php include_once('new-nav.php'); ?>
        <div class="container hero-section text-white">
            <div class="row">
                <div class="col-md-6 order-md-1 text-center text-md-start">
                    <h1 class="servies empowering">Master your Data Protection Career from the Consultants Trusted by
                        <span class="data-pr">India’s Leading Brands</span>
                    </h1>
                    <p class="m-data-home">Join a career changing certification program built by top-tier techno-legal
                        data protection professionals.
                    </p>
                    <ol class="list-master">
                        <li>Internship opportunities for <strong>top scorers</strong></li>
                        <li>Industry <strong>certification</strong></li>
                        <li>DPDP Act Guidebook</li>
                        <li>Webinar Invitation (for Top scorers)</li>
                    </ol>
                    <div class="tata-motors my-4 gap-2 flex-wrap">
                        <p class="clinets">Trusted By</p>
                        <div class="logo-box">
                            <img src="./assets/images/education-pro/2.png" alt="">
                        </div>
                        <div class="logo-box">
                            <img src="./assets/images/education-pro/3.png" alt="">
                        </div>
                        <div class="logo-box">
                            <img src="./assets/images/education-pro/4.png" alt="">
                        </div>
                        <div class="logo-box">
                            <img src="./assets/images/education-pro/5.png" alt="">
                        </div>
                        <div class="logo-box">
                            <img src="./assets/images/education-pro/6.png" alt="">
                        </div>
                        <div class="logo-box">
                            <img src="./assets/images/education-pro/7.png" alt="">
                        </div>
                        <div class="logo-box">
                            <img src="./assets/images/education-pro/8.png" alt="">
                        </div>
                        <p class="clinets">& many more</p>
                    </div>
                    <div class=" mt-4 d-flex flex-column flex-sm-row justify-content-center justify-content-md-start">
                        <a href="#paynow" class="enrollnow btn btn-primary Get-btns btns-primary">Enroll Now</a>
                    </div>

                </div>
                <div class="col-md-6 order-md-2 text-center position-relative">
                    <video class="video-m" controls autoplay>
                        <source src="assets/images/education-pro/Kumar-Priyank.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>

                    <div class=" mt-4 d-flex flex-column flex-sm-row justify-content-center justify-content-md-start">
                        <a href="#paynow" class="enrollnow1 btn btn-primary Get-btns btns-primary">Enroll Now</a>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container benefits-box">
            <!-- <div class="benefits-title mx-5">Enrollment Benefits:</div> -->
            <div class="row text-center justify-content-center gap-5">
                <div class="col-12 col-sm-12 col-md-12 benefit-item">
                    <img src="assets/images/education-pro/269.svg" alt="Boost Icon" class="benefit-icon">
                </div>

            </div>
        </div>
    </section>
    <section>
        <div class="container course-container mt-5">
            <div class="row">
                <div class="text-center lear-fast">
                    <h3 class="hero-section-about">Learn fast. Get certified.
                        Launch your<br><span class="data-pr"> career in data protection.</span></h3>
                </div>
                <!-- Text Content -->
                <div class="col-lg-5 col-md-12 mt-5">
                    <div class="smalls">
                        <p class="text-muted ">About the course</p>
                    </div>
                    <h4 class="online-cerifi">Online Certification Course on DPDP Act, 2023:
                        <span class="data-pr">Understanding the Law and its Techno-Legal Implementation in
                            Organisations’</span>
                    </h4>
                    <p class="mb-1">
                        Get certified in the DPDP Act, 2023 with a course built for law students, business grads, and
                        young professionals. <br>
                        Taught by the DPDP experts behind India’s top brand compliances, this course simplifies the law
                        and shows you how it’s applied in real-world organisations.
                    </p>
                    <a style="font-size:12px;" class="my-2" href="terms-and-conditions.php">*Terms and Conditions</a>
                </div>

                <!-- Image and Price -->
                <div class="col-lg-7 col-md-12">
                    <a href="#"><img src="./assets/images/education-pro/239.png" alt="Course Visual"
                            class="course-img mt-5"></a>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 text-end">
                    <div class="price-tag ">
                        <a href="#paynow"><img src="./assets/images/education-pro/price3.png" alt=""
                                class="price-img sticky-img"></a>
                    </div>
                </div>

            </div>


    </section>

    <section class="home-bg1">
        <div class="container pt-5">
            <div class="row align-items-center">
                <div class="col-md-6 left-content-one-step">
                    <p>How will the Course help you?</p>
                    <h2 class="future-proof-m">Empowering you to<br> confidently pursue career<br> in the <span
                            class="highlight-one-steps">fast-growing field of
                            <br>Data Protection</span></h2>
                    <p>This course gives practical DPDP Law skills and expert insights<br> to launch a career in Data
                        Protection
                    </p>
                    <a href="#paynow" class="btn btn-custom-one-step">Enroll Now</a>
                </div>
                <div class="col-md-6">
                    <div class="section-box-one-step-edu">
                        <img src="assets/images/education-pro/250.png" class="icon-one-step"
                            alt="Key benefits of gap assessment review services icon: Comprehensive Data Processing Evaluation">
                        <div>
                            <h5 class="fw-bold">Master the DPDPA Fundamentals </h5>
                            <p>Learn the essential skills of understanding and interpreting data protection regulations.
                            </p>
                        </div>
                    </div>
                    <div class="section-box-one-step-edu">
                        <img src="assets/images/education-pro/251.png" class="icon-one-step"
                            alt="Key benefits of gap assessment review services icon: Gap Analysis and Risk Assessment">
                        <div>
                            <h5 class="fw-bold">Gather Industry Insights</h5>
                            <p>Stay ahead of your peers and know the latest happenings on DPDP Act 2023 and its
                                execution
                            </p>
                        </div>
                    </div>
                    <!-- <div class="section-box-one-step-edu">
                        <img src="assets/images/education-pro/252.png" class="icon-one-step"
                            alt="Key benefits of gap assessment review services icon: Strategic Implementation Roadmap">
                        <div>
                            <h5 class="fw-bold">Impress Your Supervisors</h5>
                            <p>Become your senior consultant's favourite intern/junior by delivering well-prepared and
                                insightful documentation</p>
                        </div>
                    </div> -->
                    <div class="section-box-one-step-edu">
                        <img src="assets/images/education-pro/253.png" class="icon-one-step"
                            alt="Key benefits of gap assessment review services icon: Expert Regulatory Guidance">
                        <div class="one-step-h-p">
                            <h5 class="fw-bold">Understand Compliance Processes</h5>
                            <p>Gain a thorough understanding of data protection compliance procedures and best practices
                            </p>
                        </div>
                    </div>
                    <div class="section-box-one-step-edu">
                        <img src="assets/images/education-pro/254.png" class="icon-one-step"
                            alt="Key benefits of gap assessment review services icon: Proactive Risk Mitigation ">
                        <div>
                            <h5 class="fw-bold">Data protection career accelerator </h5>
                            <p> Stay ahead of the curve and become top applicant in data protection career opportunities
                            </p>
                        </div>
                    </div>

                    <!-- <div class="section-box-one-step-edu">
                        <img src="assets/images/education-pro/255.png" class="icon-one-step"
                            alt="Key benefits of gap assessment review services icon: Ongoing Support ">
                        <div>
                            <h5 class="fw-bold">Earn Trust Quickly</h5>
                            <p> Be deemed fit as a team player, quickly gaining the trust of your seniors and getting
                                assigned meaningful work
                            </p>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </section>

    <section class="newsletters-bg mt-3">
        <div class="container">
            <div class="my-4 text-center">
                <h6>Real Success. Real Impact.</h6>
                <h3 class="newsletter-title">12,000+ professionals of companies like<br>
                    <span>Tata Motors, Mindforce Research, SK Finance</span> and<br> many more are already certified
                </h3>
            </div>

            <div class="custom-carousel-wrapper position-relative overflow-hidden">
                <div class="custom-carousel d-flex transition" id="customCarousel">
                    <img src="./assets/images/education-pro/T1.jpg" class="carousel-img" alt="T1" />
                    <img src="./assets/images/education-pro/T2.jpg" class="carousel-img" alt="T2" />
                    <img src="./assets/images/education-pro/T3.jpg" class="carousel-img" alt="T3" />
                    <img src="./assets/images/education-pro/T4.jpg" class="carousel-img" alt="T4" />
                    <img src="./assets/images/education-pro/T5.jpg" class="carousel-img" alt="T5" />
                    <img src="./assets/images/education-pro/T6.jpg" class="carousel-img" alt="T6" />
                    <img src="./assets/images/education-pro/T7.jpg" class="carousel-img" alt="T7" />
                    <img src="./assets/images/education-pro/T8.jpg" class="carousel-img" alt="T8" />
                    <img src="./assets/images/education-pro/T9.jpg" class="carousel-img" alt="T9" />
                    <img src="./assets/images/education-pro/T10.jpg" class="carousel-img" alt="T9" />
                    <img src="./assets/images/education-pro/T11.jpg" class="carousel-img" alt="T9" />
                    <!-- <img src="./assets/images/education-pro/T12.jpg" class="carousel-img" alt="T9" /> -->
                </div>

                <!-- Controls -->
                <button class="carousel-control-prev arrow-cls" onclick="moveSlide(-1)">
                    <img src="./assets/images/news-letter-arrow-left.png" alt="Prev" class="custom-icon" />
                </button>
                <button class="carousel-control-next arrow-cls" onclick="moveSlide(1)">
                    <img src="./assets/images/news-letter-arrow-right.png" alt="Next" class="custom-icon" />
                </button>
            </div>
        </div>
    </section>


    <!-- <div class="text-center mt-5">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#videoModal">
            Open Video Modal
        </button>
    </div> -->

    <section>

        <div class="container py-4">
            <div class="header">
                <p>Course Offerings</p>
                <h2>Everything You Need to Launch Your<br> Career in <span style="color:#3294CD;">Data Protection
                    </span></h2>
            </div>

            <!-- Section 1 -->


            <!-- Section 2 -->
            <div class="card-box">
                <div class="icon-number">1</div>
                <!-- <div class="share">🔗</div> -->
                <div class="row align-items-center">
                    <div class="col-md-5 mb-3 mb-md-0 text-center">
                        <img src="assets/images/education-pro/internship-program.png" alt="Internship Program"
                            class="card-img">
                    </div>
                    <div class="col-md-7">
                        <h4>Internship Opportunity </h4>
                        <ul>
                            <li><strong>Hands-on Projects:</strong> Work on real-world DPDP Law compliance assignments.
                            </li>
                            <li><strong>Mentorship:</strong> Guided by experienced legal and data protection
                                consultants.</li>
                            <li><strong>Policy Drafting:</strong> Learn to create data protection policies, consent
                                forms, and
                                data processing agreements.</li>
                            <li><strong>Tool Training:</strong> Get exposure to data protection automation tools and
                                frameworks.
                            </li>
                            <li><strong>Career Support:</strong> Resume reviews, LinkedIn optimization, and mock
                                interviews.
                            </li>
                            <li><strong>Certificate of Completion:</strong> Recognized by industry experts.</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="card-box">
                <div class="icon-number">2</div>
                <!-- <div class="share">🔗</div> -->
                <div class="row align-items-center">
                    <div class="col-md-5 mb-3 mb-md-0 text-center">
                        <img src="assets/images/education-pro/online-learning.svg" alt="Online Learning Module"
                            class="card-img">
                    </div>
                    <div class="col-md-7">
                        <h4>Get Certification</h4>
                        <ul>
                            <li><strong>Comprehensive Course:</strong> Step-by-step breakdown of the DPDPA 2023
                                and its applicability.</li>
                            <li><strong>Self-Paced Learning:</strong> Access anytime, anywhere—learn at your own
                                convenience.
                            </li>
                            <li><strong>Assessment:</strong> Test your knowledge after the module.</li>
                            <li><strong>Completion Certificate:</strong> A credible testament to your learning journey
                                and newly acquired data protection skills — recognized by industry professionals
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Section 3 -->
            <div class="card-box">
                <div class="icon-number">3</div>
                <!-- <div class="share">🔗</div> -->
                <div class="row align-items-center">
                    <div class="col-md-5 mb-3 mb-md-0 text-center">
                        <img src="assets/images/education-pro/course-material.png" alt="Course Material"
                            class="card-img">
                    </div>
                    <div class="col-md-7">
                        <h4>DPDPA Guidebook</h4>
                        <ul>
                            <li><strong>In-Depth Guide:</strong> A comprehensive, easy-to-understand breakdown of the
                                DPDP Act 2023.</li>
                            <li><strong> Section-by-section Analysis:</strong> Simplified explanations of key provisions
                                and compliance requirements</li>
                            <li><strong>Practical Insights:</strong> Real-world interpretations and industry-relevant
                                applications.</li>
                            <!-- <li><strong>Reference Templates:</strong> Includes sample policies, notices, and compliance
                                checklists.</li> -->
                            <li><strong>Updated Content:</strong> Aligned with the latest amendments and government
                                notifications.</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Section 4 -->
            <div class="card-box">
                <div class="icon-number">4</div>
                <!-- <div class="share">🔗</div> -->
                <div class="row align-items-center">
                    <div class="col-md-5 mb-3 mb-md-0 text-center">
                        <img src="assets/images/education-pro/exclusive-webinar.png" alt="Webinars" class="card-img">
                    </div>
                    <div class="col-md-7">
                        <h4>Exclusive Webinar Invitations <span style="font-size: 12px;">(top scorers)</span></h4>
                        <ul>
                            <li><strong>Live Sessions with Experts:</strong> Interact directly with leading data
                                protection professionals, legal advisors and thought leaders </li>
                            <li><strong>Deep Dives into Hot Topics:</strong> Explore key issues like cross-border data
                                flow, consent management, and compliance tech.</li>
                            <li><strong>Real-Time Q&A:</strong> Get your questions answered live by practitioners
                                working in the field.</li>
                            <li><strong>Career Guidance:</strong> Insights on roles, skills, and opportunities in the
                                data protection landscape.</li>
                            <li><strong>Webinar Recordings:</strong> Lifetime access to all sessions for future
                                reference.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="" style="background-color: #02092c; padding:72px 20px;">
        <div class="container">
            <div class="section-header text-center">
                <p class="section-subtitle">Designed for Curious Minds and Ambitious Professionals</p>
                <div class="section-highlight text-white">
                    Your Trusted Guide to <span>Mastering Data <br>Protection</span> with Precision and Insight
                </div>
            </div>

            <div class="row section-cards g-4 justify-content-center">
                <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                    <div class="section-card">
                        <!-- <img src="assets/images/education-pro/256.png" alt="Icon"> -->
                        <h5 class="px-3 fw-bold">Law Professionals</h5>
                        <ul>
                            <li>In-depth modules on the Digital Personal Data Protection (DPDP) Act</li>
                            <li>Hands-on sessions on privacy policy frameworks</li>
                            <li>Case studies on landmark judgments, compliance penalties, and enforcement actions</li>
                            <li>Diversifying portfolio with privacy specialization</li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                    <div class="section-card">
                        <!-- <img src="assets/images/education-pro/257.png" alt="Icon"> -->
                        <h5 class="px-3 fw-bold">Business Management Professionals</h5>
                        <ul>
                            <li>Tools for assessing ROI from compliance programs</li>
                            <li>Equipping business leaders with the knowledge to embed privacy as a business enabler
                            </li>
                            <li>Strengthening strategic decision-making around customer trust and data ethics</li>
                            <li>Insights on risk management, data governance, and vendor compliance</li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                    <div class="section-card">
                        <!-- <img src="assets/images/education-pro/258.png" alt="Icon"> -->
                        <h5 class="px-3 fw-bold">Tech Students</h5>
                        <ul>
                            <li>Making privacy-aware developers and architects since inception</li>
                            <li>Aligns with industry demands for privacy-literate tech talent</li>
                            <li>Edge in product design, software engineering roles</li>
                            <li>Gain hands-on experience to work on privacy tools</li>
                            <li>Learn tools that help automate compliance tasks </li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                    <div class="section-card">
                        <!-- <img src="assets/images/education-pro/259.png" alt="Icon"> -->
                        <h5 class="px-3 fw-bold">Early Professionals</h5>
                        <ul>
                            <li>Foundational understanding of privacy principles</li>
                            <li>Exposure to real-world scenarios</li>
                            <li>Pivoting into the roles of such as privacy analysts, compliance associates, or policy
                                officers</li>
                            <li>Career Opportunities in the growing privacy landscape</li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="section-card">
                        <!-- <img src="assets/images/education-pro/260.png" alt="Icon"> -->
                        <h5 class="px-3 fw-bold">Compliance Experts</h5>
                        <ul>
                            <li>Deep dives into compliance frameworks, audit readiness, and operationalizing DPDPA</li>
                            <li>Insight into tools for conducting Data Protection Impact Assessments (DPIA), risk
                                assessments, and internal audits</li>
                            <li>Design and implement robust privacy compliance programs</li>
                            <li>Keeps them updated with changing regulatory expectations and best practices</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <?php include('slider.php'); ?>

    <?php include('contact-course-form.php'); ?>


    <section class="my-5">

        <div class="container mt-5">
            <h2 class="faq-header">Frequently Asked Questions</h2>
            <div class="accordion" id="faqAccordion">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1"
                            aria-expanded="true" aria-controls="faq1">
                            Who are DPDP Consultants?
                        </button>
                    </h2>
                    <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            DPDP Consultants is a leading techno-legal consulting advisory firm specializing in Digital
                            Personal Data Protection compliance. We offer expert advisory, strategic data Protection
                            consulting, Impact assessments and Privacy Management tools to help organizations align with
                            India’s Digital Personal Data Protection Act (DPDPA), 2023. Our trusted clientele includes
                            prominent names such as Tata Motors, Bajaj Finserv, Ashok Leyland, Carl Zeiss and APRAAVA
                            Energy among many others.


                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#faq2" aria-expanded="false" aria-controls="faq2">
                            What is the DPDP Act Foundation Course?
                        </button>
                    </h2>
                    <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            This is a self-paced, online certification course crafted by DPDP Consultants to build
                            foundational expertise in digital data protection under the DPDPA. It blends theory with
                            practical insights and includes the opportunity to earn a merit-based internship.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#faq3" aria-expanded="false" aria-controls="faq3">
                            Who should take this course?
                        </button>
                    </h2>
                    <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Ideal for students and early-career professionals as well as business experts from these
                            domains:
                            <ul>
                                <li>Law </li>
                                <li>Technology & Engineering </li>
                                <li>Business Administration </li>
                                <li>Sales & Marketing </li>
                                <li>Data Governance and Privacy </li>
                            </ul>


                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#faq4" aria-expanded="false" aria-controls="faq4">
                            What does the course include?
                        </button>
                    </h2>
                    <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            <ul>
                                <li>Comprehensive Breakdown of DPDP Act</li>
                                <li>Internship Opportunity for top 100 Professionals across various fields</li>
                                <li>Structured learning modules with reading materials </li>
                                <li>Case studies and real-world scenarios </li>
                                <li>Assessments</li>
                                <li>Certification on completion </li>
                                <p><strong>Note:</strong> Up to three attempts are allowed to clear the final
                                    assessment.</p>
                            </ul>


                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#faq6" aria-expanded="false" aria-controls="faq6">
                            What will I learn?
                        </button>
                    </h2>
                    <div id="faq6" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            You will:
                            <ul>
                                <li>Grasp the essentials of the DPDPA framework </li>
                                <li>Master core concepts in data privacy and protection</li>
                                <li>Understand how to apply compliance practices </li>
                                <li>Be prepared to lead or support DPDPA implementation initiatives</li>
                            </ul>

                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#faq7" aria-expanded="false" aria-controls="faq7">
                            How do I register?

                        </button>
                    </h2>
                    <div id="faq7" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            <ul>
                                <li>Visit the official registration page </li>
                                <li>Complete the form and pay the course fee</li>
                                <li>Get access to course materials and updates via email</li>
                            </ul>


                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#faq8" aria-expanded="false" aria-controls="faq8">
                            What’s the course fee?

                        </button>
                    </h2>
                    <div id="faq8" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            A one-time fee of ₹1,599 (plus GST as applicable) grants full access to the program. There
                            will be no refund once you subscribe to the course.

                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#faq18" aria-expanded="false" aria-controls="faq18">
                            How many internships will be given?

                        </button>
                    </h2>
                    <div id="faq18" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            A total of 100 internships across various fields, including Law, Marketing, Sales,
                            Technology, etc. will be provided.

                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#faq10" aria-expanded="false" aria-controls="faq10">
                            How does the internship selection process work?
                        </button>
                    </h2>
                    <div id="faq10" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Top 100 performing learners will be shortlisted for internships with DPDP Consultants. The
                            Selection is merit-based and subject to availability.
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#faq11" aria-expanded="false" aria-controls="faq11">
                            Will I get a certificate?
                        </button>
                    </h2>
                    <div id="faq11" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Yes. All who complete the course and pass assessments receive a Certificate of Completion.
                            Selected interns also receive a formal Internship Offer Letter.

                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#faq12" aria-expanded="false" aria-controls="faq12">
                            What tasks are assigned during the internship?
                        </button>
                    </h2>
                    <div id="faq12" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Internships are tailored to your background:
                            <ul>
                                <li><strong>Law:</strong> Legal research, documentation, compliance analysis </li>
                                <li><strong>MBA/Marketing:</strong> Branding, campaign design, digital outreach </li>
                                <li><strong>Marketing Sales:</strong> CRM support, business development, lead generation
                                </li>
                                <li><strong>Tech:</strong> Data security tools, privacy tech, technical audits </li>
                            </ul>

                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#faq14" aria-expanded="false" aria-controls="faq14">
                            Is the internship paid?

                        </button>
                    </h2>
                    <div id="faq14" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Yes. Interns receive a competitive stipend. Travel and accommodation are not covered.

                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#faq15" aria-expanded="false" aria-controls="faq15">
                            Can working professionals or students apply for internships?
                        </button>
                    </h2>
                    <div id="faq15" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Absolutely. The internship is flexible, allowing you to balance it with other commitments.
                            On-site sessions may be encouraged for deeper exposure.
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#faq16" aria-expanded="false" aria-controls="faq16">
                            Is there a time limit for the course?
                        </button>
                    </h2>
                    <div id="faq16" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Yes. While it’s self-paced, access to the platform and final assessment timelines will be
                            shared at the time of registration.

                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#faq17" aria-expanded="false" aria-controls="faq17">
                            What if I need help?
                        </button>
                    </h2>
                    <div id="faq17" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Reach out for technical or academic support at:
                            <img class="footer-icons me-2" src="./assets/images/email-icon.png">

                            <a href="mailto:course-support@dpdpconsultants.com">course-support@dpdpconsultants.com</a>

                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#faq18" aria-expanded="false" aria-controls="faq18">
                            What career benefits can I expect?
                        </button>
                    </h2>
                    <div id="faq18" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            This course gives you a competitive advantage in roles involving:
                            <ul>
                                <li>Data Protection & Privacy </li>
                                <li>Corporate Compliance </li>
                                <li>Governance & Risk </li>
                                <li>Privacy Tech Integration
                                </li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.bundle.min.js"></script>

    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script> -->
    <script src="./assets/js/script.js"></script>
    <script src="./assets/js/Edu.js"></script>


    <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> -->
    <?php include_once('footer.php'); ?>
</body>

</html>