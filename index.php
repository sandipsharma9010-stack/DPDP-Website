<?php session_start();
setcookie("_dp_just_", "just", time() + (60 * 60));
setcookie("_dp_user_", "user", time() + (60 * 60 * 24));
setcookie("_dp_thum_", "thum", time() + (60 * 60 * 24 * 10));
setcookie("_dp_gang_", "gang", time() + (60 * 60 * 24 * 30));
setcookie("_dp_curr_", "curr", time() + (60 * 60 * 24 * 90));
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>India's Best DPDP Act Compliance Management Software</title>
    <meta name="description"
        content="Achieve DPDP Act compliance with India’s top data protection consultants using automated compliance management software.">
    <meta name="keywords"
        content="Digital Personal Data Protection consultants, DPDP Act compliance, online privacy compliance tools, consent management platform, data privacy consulting, risk assessment tools, compliance management solutions">

    <meta name="google-site-verification" content="ZAgBDVQa20oYWErpuKYK79QXq7auh8we0eRUyuLxV8E" />
    <link rel="icon" href="assets/images/fav-icon-logo.png" type="image/webp">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/style.css">

    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="canonical" href="https://www.dpdpconsultants.com/">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>


    <?php include_once('google-tag-manager.php'); ?>
    <style>
        .hero-section {
            padding: 162px 36px 160px;
        }


        .compliance-home {
            background-color: white;
            padding: 18px;
            border-radius: 10px;
            margin-top: -205px;
            position: relative;
            z-index: 10;
            display: flex;
            justify-content: space-between;
            max-width: 88%;
        }

        .compliance-item {
            text-align: center;
            flex: 1;
            padding: 10px;
            min-width: 105px;
        }

        .compliance-item img {
            width: 65px;
            height: auto;
            margin-bottom: 10px;
        }

        .compliance-item p {
            font-size: 14px;
            color: #02092C;
            margin: 0;
        }

        .we-font {
            font-size: 24px;
            font-weight: bold;
            display: block;
            color: #000;
        }


        @media (max-width: 992px) {
            .compliance-home {
                flex-direction: column;
                align-items: center;
                padding: 0px;
                text-align: center;
            }

            .compliance-item {
                width: 100%;
                padding: 15px 0;
            }

            .compliance-item:last-child {
                border-bottom: none;
            }
        }

        @media (max-width: 768px) {
            br {
                display: none;
            }

            .hero-section {
                padding: 33px 9px 160px;
            }

            .empowering {
                font-size: 1.3rem;
                letter-spacing: 1px;
                line-height: 31px;
            }

            .modal-dialog {
                max-width: 100%;
                margin: auto;
            }

            .modal-body img {
                max-width: 100%;
                height: auto;
            }

            .compliance-item p {
                font-size: 12px;
            }
        }

        .compliance-item img {
            width: 60px;
            height: auto;
            margin-bottom: 10px;
        }

        .we-para {
            font-size: 1rem;
            font-weight: 600;
        }

        @media (max-width: 768px) {
            .compliance-item {
                padding: 10px 0;
            }

            .we-para {
                font-size: 1rem;
                text-align: center;
            }
        }

        /* Real Success. Real Impact. */
        .custom-carousel-wrapper {
            width: 100%;
            max-width: 100%;
            overflow: hidden;
            position: relative;
        }

        .custom-carousel {
            display: flex;
            gap: 15px;
            transition: transform 0.5s ease;
        }

        /* Ensure each card is flex item */
        .custom-carousel .col-md-4 {
            flex: 0 0 calc(100% / 3);
            max-width: calc(100% / 3);
        }

        .carousel-img {
            width: 100%;
            height: 100%;
        }

        .arrow-cls {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background: black;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            border: none;
            z-index: 2;
        }

        .carousel-control-prev {
            left: 0;
        }

        .carousel-control-next {
            right: 0;
        }

        /* 📱 Mobile view: 1 card per view */
        @media (max-width: 768px) {
            .custom-carousel .col-md-4 {
                flex: 0 0 100%;
                max-width: 100%;
            }

            .carousel-img {
                height: auto;
            }

            .arrow-cls {
                width: 30px;
                height: 30px;
            }
        }

        /* 🖥️ Medium view: 2 cards per view */
        @media (min-width: 769px) and (max-width: 991px) {
            .custom-carousel .col-md-4 {
                flex: 0 0 50%;
                max-width: 50%;
            }
        }

        /* Hide enroll now on large devices */
        @media (min-width: 992px) {
            .enrollnow1 {
                display: none;
            }
        }

        .client-card {
            background: #ffffff;
            border-radius: 18px;
            padding: 20px;
            height: 130px;
            display: flex;
            align-items: center;
            justify-content: center;
            border: 1px solid #f1f1f1;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.06);
            transition: all 0.35s ease;
            overflow: hidden;
        }

        .client-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.12);
        }

        .client-card img {
            width: 100%;
            max-width: 120px;
            max-height: 101px;
            object-fit: contain;
            transition: all 0.3s ease;

            /* Remove grayscale */
            filter: none;
            opacity: 1;
        }

        .client-card:hover img {
            transform: scale(1.08);
        }

        /* Mobile Responsive */
        @media (max-width: 576px) {
            .client-card {
                height: 110px;
                padding: 15px;
            }

            .client-card img {
                max-width: 90px;
                max-height: 50px;
            }
        }
    </style>
</head>

<body>
    <?php // include_once('cookie_consent.php'); ?>
    <section class="blog" style="background-color: #02092c;">
        <?php include_once('new-nav.php'); ?>
        <div class="container hero-section text-white">
            <div class="row">
                <div class="col-md-6 order-md-1 text-center text-md-start">
                    <h1 class="servies empowering">Empowering organisations with <span class="data-pr">DPDPA compliance
                            solutions</span>
                    </h1>
                    <p class="m-data-home">End-to-end data protection consulting with automated compliance tools for
                        proactive risk management
                    </p>
                    <div class="mt-4 d-flex flex-column flex-sm-row justify-content-center justify-content-md-start">
                        <a href="contact.php?act=newsletter"
                            class="btn btn-outline-light Sign-btn mb-2 mb-sm-0 me-sm-2">Sign up for
                            Newsletter</a>
                        <a href="contact.php" class="btn btn-primary Get-btn btns-primary">Get in touch</a>
                    </div>
                </div>
                <div class="col-md-6 order-md-2 text-center">
                    <img class="img-fluid" src="./assets/images/home-page3.gif" alt="DPDPA Banking">

                </div>
            </div>
        </div>
    </section>

    <section class="compliance-section py-4">
        <div class="container compliance-home">
            <div class="row w-100 align-items-center">
                <div class="col-lg-3 col-md-12 text-center text-lg-start mb-3 mb-lg-0">
                    <p class="we-para">Turning Compliance into Competitive Advantage</p>
                </div>
                <div class="col-lg-9 col-md-12">
                    <div class="row text-center">
                        <div class="col-lg-3 col-md-6 col-sm-6 col-6 compliance-item">
                            <img src="assets/images/svg_381153.png"
                                alt="100+ Privacy Compliance Globally - DPDP Consultants global data protection projects">
                            <span class="we-font d-block">100+</span>
                            <p>Privacy Compliance Globally</p>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-6 compliance-item">
                            <img src="assets/images/svg_453458.png"
                                alt="Icon representing 100 plus global privacy compliance projects by DPDP Consultants, featuring a bar graph">
                            <span class="we-font d-block">500+</span>
                            <p>Total Assessments</p>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-6 compliance-item">
                            <img src="assets/images/svg_391889.png"
                                alt="50+ Expert Privacy Advisors - Trusted expertise for practical data protection">
                            <span class="we-font d-block">50+</span>
                            <p>Expert Privacy Advisors</p>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-6 compliance-item">
                            <img src="assets/images/svg_372123.png"
                                alt="100% Automated Privacy Tools - Efficient digital compliance and data management solutions">
                            <span class="we-font d-block">100%</span>
                            <p>Automated Privacy Tools</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="our-services">
        <div class="container">
            <div class="row">
                <div class="col-sm-5 align-self-center">
                    <h3 class="service-h">Our Services</h3>
                    <h2 class="service-para">Helping businesses to<br> navigate <span class="data-pr">Data Privacy
                            and Compliance
                            with</span> ease </h2>
                    <a class="learn-a" href="services.php">Learn more<img class="learn-img"
                            src="./assets/images/our-service-arrow.png"
                            alt="Dark blue right-facing arrow icon inside a white circle for navigation or next steps."></a>
                </div>
                <div class="col-sm-7">

                    <div class="our-service-card">
                        <div class="left-contents">
                            <span class="our-service-icon"><img src="assets/images/dpdpa-act.png"
                                    alt="Gap Assessment Review - Identifying privacy compliance gaps for DPDP Act readiness."></span>
                            <div class="content-wrapper">
                                <span class="card-head"><a href="readiness-review.php">Gap Assessment Review</a></span>
                                <p class="our-service-content">The Digital Personal Data Protection Act (DPDPA) requires
                                    organizations to be well-prepared. Our Gap Assessment Review offers a detailed
                                    evaluation and expert guidance to help your business meet compliance requirements
                                    with minimal disruption. Led by experienced professionals, we provide tailored
                                    recommendations to help you navigate DPDPA compliance and stay ready for evolving
                                    regulations. </p>
                            </div>
                        </div>
                        <button class="our-btn-arrow mx-2"><img src="./assets/SVG-Icons/svg_315634.svg"
                                alt="Black downward arrow icon inside a square frame for dropdown menus or scrolling."></button>
                    </div>

                    <div class="our-service-card">
                        <!-- Default Open -->
                        <div class="left-contents">
                            <span class="our-service-icon"><img src="./assets/images/compliance-assistance.png"
                                    alt="Consulting, Advisory and Audit - Specialized privacy legal and technical audit services."></span>
                            <div class="content-wrapper">
                                <span class="card-head"><a href="consulting-advisory-and-audit.php">Consulting, Advisory
                                        and Audit</a></span>
                                <p class="our-service-content">We provide complete support to help your business meet
                                    DPDPA requirements. Our expertise includes building strong privacy frameworks and
                                    creating customized policies to ensure legal compliance. Regular audits are key to
                                    demonstrating compliance and maintaining trust, while proactive organizational and
                                    IT controls protect your business from penalties. </p>
                            </div>
                        </div>
                        <button class="our-btn-arrow mx-2"><img src="./assets/SVG-Icons/svg_315634.svg"
                                alt="Black downward arrow icon inside a square frame for dropdown menus or scrolling."></button>
                    </div>

                    <div class="our-service-card">
                        <div class="left-contents">
                            <span class="our-service-icon"><img src="./assets/images/data-protection-officer.png"
                                    alt="Data Protection Officer as a Service - External DPO for ongoing DPDP Act compliance."></span>
                            <div class="content-wrapper">
                                <span class="card-head"><a href="data-protection-officer-as-a-service.php">Data
                                        Protection Officer as a Service</a></span>
                                <p class="our-service-content">In today’s data-driven world, organizations face growing
                                    pressure to protect personal data. The Digital Personal Data Protection Act (DPDPA)
                                    requires appointing a Data Protection Officer (DPO), which goes beyond compliance—it
                                    strengthens corporate governance. Our DPO as a Service turns this requirement into a
                                    strategic advantage, enhancing your data protection framework and building
                                    stakeholder trust.
                                </p>
                            </div>
                        </div>
                        <button class="our-btn-arrow mx-2"><img src="./assets/SVG-Icons/svg_315634.svg"
                                alt="Black downward arrow icon inside a square frame for dropdown menus or scrolling."></button>
                    </div>

                    <div class="our-service-card">
                        <div class="left-contents">
                            <span class="our-service-icon"><img src="./assets/images/dpdpa-act-training.png"
                                    alt="Training Programs for DPDPA Compliance - Privacy education services by DPDP Consultants."></span>
                            <div class="content-wrapper">
                                <span class="card-head"><a href="training-programs-for-DPDPA-compliance.php">Training
                                        Programs for DPDPA Compliance</a></span>
                                <p class="our-service-content">Our training program is customized to your organization’s
                                    needs, focusing on practical aspects of DPDP Act compliance. Key topics include
                                    personal data policies, grounds of processing, data principal rights, risk
                                    assessments, cross-border data transfer, third party compliance, security policies,
                                    and Data breach notifications, Do's and dont's for employees, assessment and
                                    Employee Compliance agreement. </p>
                            </div>
                        </div>
                        <button class="our-btn-arrow mx-2"><img src="./assets/SVG-Icons/svg_315634.svg"
                                alt="Black downward arrow icon inside a square frame for dropdown menus or scrolling."></button>
                    </div>

                    <div class="our-service-card">
                        <div class="left-contents">
                            <span class="our-service-icon"><img src="./assets/images/contract-review-dpdp.png"
                                    alt="Contract Review & Data Processing Agreements - Legal privacy compliance."></span>
                            <div class="content-wrapper">
                                <span class="card-head"><a
                                        href="contract-review-data-processing-agreements.php">Contract Review & Data
                                        Processing Agreements</a></span>
                                <p class="our-service-content">Our Contract Review and Data Processing Agreement
                                    services ensure your organization complies with the Digital Personal Data Protection
                                    Act (DPDP Act) when sharing personal data with third parties. We help draft and
                                    review agreements that include all required provisions to protect personal data and
                                    uphold the rights of Data Principals. </p>
                            </div>
                        </div>
                        <button class="our-btn-arrow mx-2"><img src="./assets/SVG-Icons/svg_315634.svg"
                                alt="Black downward arrow icon inside a square frame for dropdown menus or scrolling."></button>
                    </div>

                </div>

            </div>
        </div>
        </div>
    </section>

    <section class="home-bg">
        <div class="container py-5 my-5">
            <h6 class="text-center our-tools">Our Tools</h6>
            <h2 class="text-center Unleash">Elevate Your Data Privacy Stance<br><span class="data-pr"> with Intelligent
                    Automation</span>
            </h2>
            <div class="row mt-4">
                <div class="col-md-4">
                    <ol class="list-unstyled">
                        <li><button class="tab-button active" onclick="showContent(0)"><span class="number">1</span><i
                                    class="fas fa-shield-alt"></i> Data Principal Consent Management</button></li>
                        <li><button class="tab-button" onclick="showContent(1)"><span class="number">2</span><i
                                    class="fas fa-balance-scale"></i> Data Principal Grievance Redressal</button></li>
                        <li><button class="tab-button" onclick="showContent(2)"><span class="number">3</span><i
                                    class="fas fa-lightbulb"></i> Data Protection Awareness Program</button></li>
                        <li><button class="tab-button" onclick="showContent(3)"><span class="number">4</span><i
                                    class="fas fa-exclamation-triangle"></i> Data Protection Impact Assessment</button>
                        </li>
                        <li><button class="tab-button" onclick="showContent(4)"><span style="width: 40px; height: 30px;"
                                    class="number">5</span><i class="fas fa-exclamation-triangle"></i> Data Protection
                                Third
                                Party Assessment and
                                Compliance</button>
                        </li>
                    </ol>
                </div>
                <div class="col-md-8">
                    <div id="content" class="tab-content tab-tools">
                        <div class="card-custom-tools">
                            <div class="row">
                                <div class="col-md-3 text-center">
                                    <video width="150" height="150" autoplay muted loop>
                                        <source src="./assets/images/video/DPCM.mp4" type="video/mp4">

                                        Your browser does not support the video tag.
                                    </video>
                                </div>
                                <div class="col-md-9">
                                    <h5 class="tools"><strong><a href="dpcm.php" class="learn-more">Data Principal
                                                Consent Management</a></strong></h5>
                                    <p class="tools-para">DPCM is our solution to completely automate the management of
                                        Data Principals' consents. It is capable of handling legacy data, paper consent
                                        as well as live consents with equal ease.
                                    </p>

                                </div>

                                <h6 class="mt-3 tools"><strong>Key Features:</strong></h6>
                                <div class="benefits-container mt-3">
                                    <div class="benefit">
                                        <img src="./assets/images/tools-icon/147.png"
                                            alt="Live Consent Acquisition Across Channels - Visual for Multi-channel DPDPA consent management.">
                                        <p>Live Consent Acquisition Across Channels</p>
                                    </div>
                                    <div class="benefit">
                                        <img src="./assets/images/tools-icon/148.png"
                                            alt="Advanced Consent Tracking & Management - Visual for Real-time DPDPA compliance monitoring.">
                                        <p>Advanced Consent Tracking & Management</p>
                                    </div>
                                    <div class="benefit">
                                        <img src="./assets/images/tools-icon/149.png"
                                            alt="Seamless Compliance for Historical Data - Visual for DPDPA legacy data management.">
                                        <p>Seamless Compliance for Historical Data</p>
                                    </div>
                                    <div class="benefit">
                                        <img src="./assets/images/tools-icon/150.png"
                                            alt="Customizable DPDPA Solutions - Visual for Privacy tools tailored to business requirements.">
                                        <p>Customizable to Fit Business Requirements</p>
                                    </div>
                                    <div class="benefit">
                                        <img src="./assets/images/tools-icon/151.png"
                                            alt="Integrated Data Management Across Departments - Visual for Centralized DPDPA compliance.">
                                        <p>Integrated Data Management Across Departments</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        </div>
        </div>
        </div>
    </section>

    <section class="news-section sec-pad py-5">
        <div class="container">

            <div class="sec-title section-title-two2 mb-5">
                <h5 class="section-title-two1 text-center">
                    Some of <span class="text-trust">Our</span> Clients 
                </h5>
            </div>

            <div class="row g-4">

             <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                    <div class="client-card">
                        <img src="./assets/images/client-logo/National_Health_Authority_of_India.svg" alt="National Health Authority of India Logo">
                    </div>
                </div>

                 <!-- Tata Motors -->
                <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                    <div class="client-card">
                        <img src="./assets/images/client-logo/tata-motos.svg" alt="Tata Motors Logo">
                    </div>
                </div>


                  <!-- Bajaj Finserv -->
                <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                    <div class="client-card">
                        <img src="./assets/images/client-logo/bajaj-finserv.jpg" alt="Bajaj Finserv Logo">
                    </div>
                </div>


             <!-- Ashok Leyland -->
                <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                    <div class="client-card">
                        <img src="./assets/images/client-logo/ashok-leyland-vector-logo1.png" alt="Ashok Leyland Logo">
                    </div>
                </div>



                
                <!-- Relaxo -->
                <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                    <div class="client-card">
                        <img src="./assets/images/client-logo/Relaxo_Logo.svg" alt="Relaxo Logo">
                    </div>
                </div>


                 <!-- Apollo -->
                <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                    <div class="client-card">
                        <img src="./assets/images/client-logo/applo.svg" alt="Apollo Logo">
                    </div>
                </div>



                  <!-- Trident -->
                <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                    <div class="client-card">
                        <img src="./assets/images/client-logo/trident-group.png" alt="Trident Group Logo">
                    </div>
                </div>


                  <!-- Emaar -->
                <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                    <div class="client-card">
                        <img src="./assets/images/client-logo/Emaar-Logo.png" alt="Emaar India Logo">
                    </div>
                </div>



                
                <!-- ZEISS -->
                <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                    <div class="client-card">
                        <img src="./assets/images/client-logo/zeiss_logo.png" alt="ZEISS Logo">
                    </div>
                </div>


















               



            

                <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                    <div class="client-card">
                        <img src="./assets/images/client-logo/Health_Glow.svg" alt="Health Glow Logo">
                    </div>
                </div>



                 <!-- Signature Global -->
                <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                    <div class="client-card">
                        <img src="./assets/images/client-logo/Signature_Global_Logo.svg" alt="Signature Global Logo">
                    </div>
                </div>
                
                <!-- TBSI -->
                <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                    <div class="client-card">
                        <img src="./assets/images/client-logo/TBSI.png" alt="JLR TBSI Logo">
                    </div>
                </div>

                 <!-- Ajanta Pharma -->
                <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                    <div class="client-card">
                        <img src="./assets/images/client-logo/Ajanta_Pharma_Logo.svg" alt="Ajanta Pharma Logo">
                    </div>
                </div>



                 <!-- SK Finance -->
                <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                    <div class="client-card">
                        <img src="./assets/images/client-logo/sk-finance1.png" alt="SK Finance Logo">
                    </div>
                </div>


                 <!-- KEI -->
                <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                    <div class="client-card">
                        <img src="./assets/images/client-logo/KEI_Cables_Logo.svg" alt="KEI Cables Logo">
                    </div>
                </div>

                 <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                    <div class="client-card">
                        <img src="./assets/images/client-logo/Jaguar_landrover.svg" alt="Jaguar Land Rover Logo">
                    </div>
                </div>

                 <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                    <div class="client-card">
                        <img src="./assets/images/client-logo/Cumi_Murgappa.svg" alt="Cumi Murgappa Logo">
                    </div>
                </div>

               



                <!-- Hindalco -->
                <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                    <div class="client-card">
                        <img src="./assets/images/client-logo/hindalco.jpg" alt="Aditya Birla Hindalco Logo">
                    </div>
                </div>

               
              
 

              

                <!-- ART Housing -->
                <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                    <div class="client-card">
                        <img src="./assets/images/client-logo/Art-House-Finance.svg" alt="ART Housing Finance Logo">
                    </div>
                </div>

                <!-- Apraava -->
                <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                    <div class="client-card">
                        <img src="./assets/images/client-logo/apraava.png" alt="Apraava Energy Logo">
                    </div>
                </div>


                <!-- Xcelion -->
                <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                    <div class="client-card">
                        <img src="./assets/images/client-logo/motors_xcelion.png" alt="Tata Motors Xcelion Logo">
                    </div>
                </div>

                <!-- TICM -->
                <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                    <div class="client-card">
                        <img src="./assets/images/client-logo/TI-Clean-Mobility.svg" alt="TICM Logo">
                    </div>
                </div>



               

                <!-- Nuziveedu -->
                <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                    <div class="client-card">
                        <img src="./assets/images/client-logo/Nuziveedu_Seeds_Logo.svg" alt="Nuziveedu Seeds Logo">
                    </div>
                </div>

                <!-- Tata Autocomp -->
                <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                    <div class="client-card">
                        <img src="./assets/images/client-logo/tat_motors_the.png" alt="Tata Autocomp Logo">
                    </div>
                </div>


                <!-- Griham -->
                <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                    <div class="client-card">
                        <img src="./assets/images/client-logo/Griham.jpeg" alt="Grihum Housing Finance Logo">
                    </div>
                </div>

                <!-- Kanpur Plastic -->
                <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                    <div class="client-card">
                        <img src="./assets/images/client-logo/Kanpur_Plastic_Pack_Limited.svg"
                            alt="Kanpur Plastic Pack Limited Logo">
                    </div>
                </div>

               


                <!-- eZee -->
                <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                    <div class="client-card">
                        <img src="./assets/images/client-logo/eZee.png" alt="eZee Logo">
                    </div>
                </div>

                <!-- Infinite -->
                <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                    <div class="client-card">
                        <img src="./assets/images/client-logo/infinite.png" alt="Infinite Logo">
                    </div>
                </div>

                <!-- Mamenta -->
                <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                    <div class="client-card">
                        <img src="./assets/images/client-logo/mamenta-logo.png" alt="Mamenta Logo">
                    </div>
                </div>

                <!-- Netradyne -->
                <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                    <div class="client-card">
                        <img src="./assets/images/client-logo/netradyne.png" alt="Netradyne Logo">
                    </div>
                </div>

                <!-- Quinnox -->
                <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                    <div class="client-card">
                        <img src="./assets/images/client-logo/quinnox-logo.jpg" alt="Quinnox Logo">
                    </div>
                </div>

                <!-- Retarget -->
                <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                    <div class="client-card">
                        <img src="./assets/images/client-logo/retarget-logo.png" alt="Retarget Spark Logo">
                    </div>
                </div>

                <!-- TrackWizz -->
                <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                    <div class="client-card">
                        <img src="./assets/images/client-logo/trackwizz.png" alt="TrackWizz Logo">
                    </div>
                </div>

                <!-- Zebpay -->
                <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                    <div class="client-card">
                        <img src="./assets/images/client-logo/zebpay.jpg" alt="Zebpay Logo">
                    </div>
                </div>

                <!-- Zyter -->
                <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                    <div class="client-card">
                        <img src="./assets/images/client-logo/zyter-care.jpg" alt="Zyter TruCare Logo">
                    </div>
                </div>



                <!-- Zyter -->
                <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                    <div class="client-card">
                        <img src="./assets/images/client-logo/WWStay-Logo.svg" alt="Zyter TruCare Logo">
                    </div>
                </div>

                <!-- Zyter -->
                <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                    <div class="client-card">
                        <img src="./assets/images/client-logo/Magic-EdTech-Logo.svg" alt="Zyter TruCare Logo">
                    </div>
                </div>


                <!-- Zyter -->
                <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                    <div class="client-card">
                        <img src="./assets/images/client-logo/Mindforce-research-logo.svg" alt="Zyter TruCare Logo">
                    </div>
                </div>


                <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                    <div class="client-card">
                        <img src="./assets/images/client-logo/Digilytics.svg" alt="Digilytics Logo">
                    </div>
                </div>

                 <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                    <div class="client-card">
                        <img src="./assets/images/client-logo/EG_Software.svg" alt="EG Software Logo">
                    </div>
                </div>


                 <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                    <div class="client-card">
                        <img src="./assets/images/client-logo/avaso.svg" alt="Avaso Logo">
                    </div>
                </div>

                 <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                    <div class="client-card">
                        <img src="./assets/images/client-logo/droom.svg" alt="Droom Logo">
                    </div>
                </div>

                 <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                    <div class="client-card">
                        <img src="./assets/images/client-logo/netsub.svg" alt="Netsub Logo">
                    </div>
                </div>

                <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                    <div class="client-card">
                        <img src="./assets/images/client-logo/samplejunction.svg" alt="Samplejunction Logo">
                    </div>
                </div>


                <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                    <div class="client-card">
                        <img src="./assets/images/client-logo/Insight_Assist.svg" alt="Samplejunction Logo">
                    </div>
                </div>

                 <!-- <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                    <div class="client-card">
                        <img src="./assets/images/client-logo/Jaguar_landrover.svg" alt="Jaguar Land Rover Logo">
                    </div>
                </div> -->

            </div>
        </div>
    </section>

    <!-- All-in-One, Stress-Free 360°  -->

    <?php include_once('circle.php'); ?>



    <section class="home-bg">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-md-6 left-content-one-step">
                    <h3>One-stop solution</h3>
                    <h2 class="m-threesixty">A 360° approach transforms <span class="highlight-one-step">complexity into
                            simplicity,<br>
                            driving
                            efficiency,<br> compliance, and innovation</span></h2>
                    <p class="m-threesixty-p">Cost savings, streamlined governance, faster execution,<br> enhanced
                        visibility, and flexible
                        scalability, ensuring<br> businesses stay efficient, compliant, and future-ready—<br>all without
                        the
                        hassle of managing multiple vendors.</p>
                    <a href="contact.php?act=schedule" class="btn btn-custom-one-step">Schedule a call</a>
                </div>
                <div class="col-md-6">
                    <div class="section-box-one-step">
                        <img src="./assets/images/one-step1.png" class="icon-one-step"
                            alt="Cost-effective DPDP compliance - High ROI data privacy consulting.">
                        <div>
                            <h5 class="fw-bold">Cost-Effectiveness</h5>
                            <p class="section-box-p">Reduce operational costs by eliminating multiple disjointed systems
                                and inefficiencies. A
                                unified solution means <strong>lower maintenance, fewer redundancies, and better
                                    resource utilization.</strong></p>
                        </div>
                    </div>
                    <div class="section-box-one-step">
                        <img src="./assets/images/one-step2.png" class="icon-one-step"
                            alt="Continuous Compliance Monitoring - Icon for ongoing DPDPA performance tracking.">
                        <div>
                            <h5 class="fw-bold">Optimized Governance</h5>
                            <p class="section-box-p">Streamline <strong>compliance, security, and risk
                                    management</strong> with an integrated
                                governance framework that ensures <strong>transparency, accountability, and regulatory
                                    adherence.</strong></p>
                        </div>
                    </div>
                    <div class="section-box-one-step">
                        <img src="./assets/images/one-step3.png" class="icon-one-step"
                            alt="Fast & Efficient DPDPA Compliance - Stopwatch icon for rapid implementation.">
                        <div>
                            <h5 class="fw-bold">Faster Delivery</h5>
                            <p class="section-box-p">Accelerate implementation and execution with <strong>pre-configured
                                    workflows,
                                    automation, and real-time insights</strong>, reducing delays and boosting
                                productivity.</p>
                        </div>
                    </div>
                    <div class="section-box-one-step">
                        <img src="./assets/images/one-step4.png" class="icon-one-step"
                            alt="Data Privacy Analytics & Reporting - Dashboard for tracking DPDPA compliance metrics.">
                        <div class="one-step-h-p">
                            <h5 class="fw-bold">Greater Visibility & Coverage</h5>
                            <p class="section-box-p">Gain <strong>end-to-end monitoring and control</strong> over
                                processes, ensuring complete
                                visibility across all functions and minimizing blind spots.</p>
                        </div>
                    </div>
                    <div class="section-box-one-step">
                        <img src="./assets/images/one-step5.png" class="icon-one-step"
                            alt="Scalable DPDPA Compliance - Growth-focused data privacy strategy and reporting.">
                        <div>
                            <h5 class="fw-bold">Scalability & Flexibility</h5>
                            <p class="section-box-p">Adapt and grow effortlessly with a <strong>future-proof
                                    solution</strong> that evolves
                                with your business needs, integrating seamlessly with new technologies and frameworks.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- How it works start here -->

    <section>
        <div class="container mt-5">
            <h3 class="text-center how-it-works">How it works</h3>
            <h2 class="section-title-work">Ensure compliance and enhance user<br> trust with our <span
                    class="highlight-work">expert consulting and<br> advisory solutions</span></h2>

            <div class="row g-4 work-row.g-4">
                <div class="col-md-4 work-col">
                    <div class="card-work">
                        <div class="card-number-work">1</div>
                        <h5 class="fw-bold card-number-work-h">Risk Assessment</h5>
                        <p class="card-number-work-p">We evaluate privacy practices across your organization,
                            documenting processes, data flows,
                            and requirements. Our assessment provides actionable strategies with clear stakeholder
                            responsibilities.</p>
                    </div>
                </div>
                <div class="col-md-4 work-col">
                    <div class="card-work">
                        <div class="card-number-work">2</div>
                        <h5 class="fw-bold card-number-work-h">Policy Development</h5>
                        <p class="card-number-work-p">We develop comprehensive privacy policies and procedures tailored
                            to organization’s specific
                            needs and compliance requirements under the DPDP Act, ensuring all documentation meets
                            regulatory standards.</p>
                    </div>
                </div>
                <div class="col-md-4 work-col">
                    <div class="card-work">
                        <div class="card-number-work">3</div>
                        <h5 class="fw-bold card-number-work-h">Compliance Tools Implementation</h5>
                        <p class="card-number-work-p">We address organizational obligations including data governance
                            and compliance verification
                            before deploying automation solutions for consent management, privacy notices, and incident
                            response.</p>
                    </div>
                </div>
                <div class="col-md-4 work-col">
                    <div class="card-work">
                        <div class="card-number-work">4</div>
                        <h5 class="fw-bold card-number-work-h">Monitoring and Auditing</h5>
                        <p class="card-number-work-p">We establish monitoring protocols, track remediation progress, and
                            conduct comprehensive
                            compliance audits covering all essential privacy functions.</p>
                    </div>
                </div>
                <div class="col-md-4 work-col">
                    <div class="card-work">
                        <div class="card-number-work">5</div>
                        <h5 class="fw-bold card-number-work-h">Reporting and Documentation</h5>
                        <p class="card-number-work-p">We maintain detailed documentation of all compliance activities,
                            providing regular reports on
                            compliance status, risk management progress, and emerging privacy concerns.</p>
                    </div>
                </div>
                <div class="col-md-4 work-col">
                    <div class="card-work">
                        <div class="card-number-work">6</div>
                        <h5 class="fw-bold card-number-work-h">Ongoing Support and Updates</h5>
                        <p class="card-number-work-p">We provide continuous support to ensure your organization remains
                            compliant with evolving
                            regulatory requirements and privacy best practices.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="home-why mt-5">
        <div class="container why-spa">
            <div class="text-Why text-center">
                <h3 class="how-it-works">Why Us?</h3>
                <h2>Your trusted partner in <span class="text-Navigating">Navigating Data<br> Privacy</span> with
                    expertise and precision</h2>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="card-custom">
                        <div class="icon-box">
                            <img src="./assets/images/expertise.png"
                                alt="Privacy Knowledge & Innovation - DPDPA strategic insight and intellectual compliance.">
                        </div>
                        <div class="contents">
                            <h5 class="fw-bold">Expertise</h5>
                            <p>In-depth knowledge of DPDPA compliance regulations and industry best practices</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card-custom">
                        <div class="icon-box">
                            <img src="./assets/images/proprietary.png"
                                alt="Automated Privacy Infrastructure - Digital DPDPA compliance systems visual.">
                        </div>
                        <div class="contents">
                            <h5 class="fw-bold">Proprietary Tools</h5>
                            <p>Access to innovative, tailored tools that streamline compliance management and reduce
                                risks</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card-custom">
                        <div class="icon-box">
                            <img src="./assets/images/customized.png"
                                alt="Integrated Privacy Technology - Gear and circuit graphic for DPDPA data protection.">
                        </div>
                        <div class="contents">
                            <h5 class="fw-bold">Customized Solutions</h5>
                            <p>Personalized consulting services to address your unique business needs</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card-custom">
                        <div class="icon-box">
                            <img src="./assets/images/efficient.png"
                                alt="Automated Data Governance - DPDPA structured technical compliance management graphic.">
                        </div>
                        <div class="contents">
                            <h5 class="fw-bold">Efficient Process</h5>
                            <p>Fast, reliable compliance solutions that save you time and resources</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card-custom">
                        <div class="icon-box">
                            <img src="./assets/images/end-to-end.png"
                                alt="Cost-Efficiency & Time Management - Automated DPDPA financial and resource tracking.">
                        </div>
                        <div class="contents">
                            <h5 class="fw-bold">End-to-End Support</h5>
                            <p>Ongoing assistance to ensure continuous compliance and privacy protection</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card-custom">
                        <div class="icon-box">
                            <img src="./assets/images/proven.png"
                                alt="Automated DPDPA Compliance - Scalable data protection and privacy management workflow.">
                        </div>
                        <div class="contents">
                            <h5 class="fw-bold">Proven Track Record</h5>
                            <p>Successful partnerships with businesses across industries, ensuring optimal outcomes</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="nationwide">
        <div class="container text-center">
            <div class="row align-items-center">
                <div class="col-md-8 map-container">
                    <img src="./assets/images/Map.jpg" alt="India Map" class="India Map Image showcasing pan India presence with 100% Automated Privacy
                         Tools, 500 + Privacy Assessments, 10+ Partners, 100+ Privacy Compliance, 15+ Expert
                          Advsiors, 24x7 Expert Advice ">

                </div>
                <!-- <div class="text-block"> -->
                <div class="col-md-4">
                    <div class="make-india">
                        <img src="./assets/images/make-in-india.png"
                            alt="“Make in India” image showcasing compliance privacy tools made in India " class="">

                    </div>
                    <div class="contents-pan text-end ">
                        <h6 class="text-end mr-end">Pan India Presence</h6>
                        <h4 class="seamless-compliance"><strong>Seamless Compliance with</strong> <span
                                class="text-primary"><strong class="local-mr1">Automated Privacy Tools
                                </strong></span></h4>
                        <p class="contents-pan-p">Your trusted partner in data protection, ensuring<br> privacy &
                            security across every corner.
                        </p>
                        <div class="text-end get-touch-btn">
                            <a href="contact.php" class="btn btn-primary btn-nation">Get in touch</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- </div> -->
    </section>

    <section class="home-bg-blogs">
        <div class="container">
            <div class="row">
                <div class="text-center">
                    <h6 class="text-updates text-center text-white">Our Blogs</h6>
                    <h4 class="text-blog"><span class="text-our">Insights, updates, and expert advice</span> <span
                            class="text-white">on<br>
                            navigating the ever-evolving world of data<br> privacy and compliance</span></h4>
                </div>
                <div class="custom-carousel-wrapper position-relative overflow-hidden">
                    <div class="custom-carousel d-flex transition" id="customCarousel">
                        <div class="col-md-4">
                            <div class="custom-card carousel-img">
                                <div class="card-header c-header">
                                    <img src="./assets/images/blogs_76_thumbnail.jpg"
                                        alt="Data Impact of DPDP Act on Healthcare Sector">

                                </div>
                                <div class="card-body c-body">
                                    <h6><a
                                            href="https://www.dpdpconsultants.com/blog.php?id=76&title=impact-of-dpdp-act-on-healthcare-sector">Data
                                            Impact of DPDP Act on Healthcare Sector</a>
                                    </h6>
                                    <p>How India's landmark data protection law is rewriting the rules of patient
                                        privacy, hospital compliance, and digital health.</p>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="custom-card carousel-img">
                                <div class="card-header c-header">
                                    <img src="./assets/images/blogs_75_thumbnail.jpg"
                                        alt="Best DPDP Act for EdTech: What Happens to Student Data Organizations Have Been Collecting">

                                </div>
                                <div class="card-body c-body">
                                    <h6><a
                                            href="https://www.dpdpconsultants.com/blog.php?id=75&title=dpdp-act-for-edtech-what-happens-to-all-that-student-data-organizations-have-been-collecting">
                                            Best
                                            DPDP Act for EdTech: What Happens to All That Student Data Organizations
                                            Have Been Collecting?
                                        </a>
                                    </h6>
                                    <p>DPDP Act & EdTech: What Happens to Student Data Now?...</p>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="custom-card carousel-img">
                                <div class="card-header c-header">
                                    <img src="./assets/images/blogs_74_thumbnail.png"
                                        alt="DPDP Compliance for HR: Enabling Employee Data Protection in India">

                                </div>
                                <div class="card-body c-body">
                                    <h6><a href="https://www.dpdpconsultants.com/blog.php?id=35&title=DPDP">DPDP
                                            Compliance for HR: Enabling Employee Data Protection in India</a>
                                    </h6>
                                    <p>DPDP Compliance for HR: Protecting Employee Data in India...</p>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="custom-card carousel-img">
                                <div class="card-header c-header">
                                    <img src="./assets/images/blogs_73_thumbnail.jpg"
                                        alt="Does the DPDPA Take Over the RTI Act">

                                </div>
                                <div class="card-body c-body">
                                    <h6><a href="https://www.dpdpconsultants.com/blog.php?id=34&title=Data"> Does the
                                            DPDPA Take Over the RTI Act?</a>
                                    </h6>
                                    <p>DPDPA vs RTI Act: Privacy and Transparency Debate...</p>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="custom-card carousel-img">
                                <div class="card-header c-header">
                                    <img src="./assets/images/blogs_72_thumbnail.jpg"
                                        alt="Implications of the DPDP Act, 2023 on Corporate Social Responsibility (CSR) Activities">

                                </div>
                                <div class="card-body c-body">
                                    <h6><a href="https://www.dpdpconsultants.com/blog.php?id=33&title=Valid">
                                            Implications of the DPDP Act, 2023 on Corporate Social Responsibility (CSR)
                                            Activities</a>
                                    </h6>
                                    <p>DPDP Act & CSR Photography Compliance Guide...</p>

                                </div>
                            </div>
                        </div>
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
        </div>
    </section>
    <section>
        <div class="container my-5 testimon">
            <div class="row">
                <div class="text-Testim text-center">
                    <h6 class="text-monials">Testimonials</h6>
                    <h4 class="testimonials-head">Voices of <span class="text-Success">Success,
                            Stories</span><br> that Inspire</h4>
                </div>

                <div class="col-md-4 col-lg-4 g-3">
                    <div class="testimonial-card d-flex flex-column flex-md-row align-items-center align-items-md-start text-center text-md-start p-3"
                        data-bs-toggle="modal" data-bs-target="#testimonialModal" data-bs-toggle="modal"
                        data-bs-target="#testimonialModal">
                        <div class="ms-3">
                            <h5>Mahalakshmi.PG, Anil A</h5>
                            <span class="company">Carl Zeiss India Pvt. Ltd.</span>
                            <p class="text-muted">General Counsel</p>
                            <span class="stars">★★★★★</span>
                            <p class="mt-2 test-para">"We engaged DPDP Consultants to assist us in implementing
                                compliance with
                                the Digital Personal Data Protection (DPDP) Act for our Indian entity, and the

                            </p>
                        </div>
                    </div>
                </div>

                <!-- Bootstrap Modal -->
                <div class="modal fade" id="testimonialModal" tabindex="-1" aria-labelledby="testimonialModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body text-center">
                                <img style="width:30%; height: 30%;" src="./assets/images/client-logo/zeiss_logo.png"
                                    alt="User" class="img-fluid mb-3">
                                <h5>Mahalakshmi.PG, Anil A</h5>
                                <span class="company">Carl Zeiss India Pvt. Ltd.</span>
                                <p class="text-muted">General Counsel</p>
                                <span class="stars">★★★★★</span>
                                <p class="mt-2">"We engaged DPDP Consultants to assist us in implementing compliance
                                    with the Digital Personal Data Protection (DPDP) Act for our Indian entity, and the
                                    experience has been exceptional. The team at DPDP Consultants has been highly
                                    professional, responsible, and proactive throughout the engagement. Their deep
                                    understanding of the regulatory landscape, coupled with their responsiveness and
                                    structured approach, ensured a seamless compliance process. They provided valuable
                                    insights, practical solutions, and end-to-end support, making the transition smooth
                                    and efficient. We truly appreciate their commitment to excellence and would highly
                                    recommend DPDP Consultants to any organization looking for a trusted partner in data
                                    protection compliance."</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 my-3">
                    <div class="testimonial-card d-flex flex-column flex-md-row align-items-center align-items-md-start text-center text-md-start p-3"
                        data-bs-toggle="modal" data-bs-target="#testimonialModal2">
                        <div class="ms-3">
                            <h5>Anupam Srivastav</h5>
                            <span class="company">Mindforce Research</span>
                            <p class="text-muted">Director – Research and Client Services</p>
                            <span class="stars">★★★★★</span>
                            <p class="mt-2 test-para">"Working with DPDP Consultants has significantly improved our
                                digital
                                privacy compliance. Their deep expertise in data privacy laws like DPDP, GDPR, and CCPA
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Bootstrap Modal -->
                <div class="modal fade" id="testimonialModal2" tabindex="-1" aria-labelledby="testimonialModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body text-center">
                                <img src="./assets/images/client-logo/mindforce.png" alt="User" class="img-fluid mb-3">
                                <h5>Anupam Srivastav</h5>
                                <span class="company">Mindforce Research</span>
                                <p class="text-muted">Director – Research and Client Services</p>
                                <span class="stars">★★★★★</span>
                                <p class="mt-2">"Working with DPDP Consultants has significantly improved our digital
                                    privacy compliance. Their deep expertise in data privacy laws like DPDP, GDPR, and
                                    CCPA provided us with clear, actionable steps to meet regulatory requirements, from
                                    data collection to consent management.
                                    What stood out was their personalized approach—tailoring solutions to our business
                                    needs, making compliance seamless and stress-free. Thanks to their guidance, we’ve
                                    not only ensured compliance but also built trust with our customers by demonstrating
                                    our commitment to protecting personal information. Their service has been
                                    invaluable, and we highly recommend them for establishing a strong data privacy
                                    framework."</p>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- <div class="col-md-4 col-lg-4 my-3"></div> -->


                <div class="col-md-4 col-lg-4 my-3">
                    <div class="testimonial-card d-flex flex-column flex-md-row align-items-center align-items-md-start text-center text-md-start p-3"
                        data-bs-toggle="modal" data-bs-target="#testimonialModal3">
                        <div class="ms-3">
                            <h5>Rama Rao Salidi</h5>
                            <span class="company">Retarget Spark</span>
                            <p class="text-muted">Director</p>
                            <span class="stars">★★★★★</span>
                            <p class="mt-2 test-para">"Our engagement with DPDP Consultants has been instrumental in
                                achieving
                                data protection compliance for our organization. Their team exhibited an exceptional

                            </p>
                        </div>
                    </div>
                </div>

                <!-- Bootstrap Modal -->
                <div class="modal fade" id="testimonialModal3" tabindex="-1" aria-labelledby="testimonialModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body text-center">
                                <img src="./assets/images/client-logo/retarget-logo.png" alt="User"
                                    class="img-fluid mb-3">
                                <h5>Rama Rao Salidi</h5>
                                <span class="company">Retarget Spark</span>
                                <p class="text-muted">Director</p>
                                <span class="stars">★★★★★</span>
                                <p class="mt-2">"Our engagement with DPDP Consultants has been instrumental in achieving
                                    data protection compliance for our organization. Their team exhibited an exceptional
                                    understanding of global privacy laws, including the DPDPA and GDPR, and their
                                    ability to translate complex legal requirements into straightforward,
                                    business-friendly solutions made the process efficient and manageable. DPDP
                                    Consultants took the time to deeply understand our business objectives and
                                    customized their approach, accordingly, providing us with the deliverables and
                                    knowledge to ensure ongoing compliance. Their proactive support instilled confidence
                                    in our team and has significantly enhanced our data privacy practices. We highly
                                    recommend DPDP Consultants for any organization seeking expert guidance in building
                                    a comprehensive data protection strategy. "</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-lg-4 my-3">
                    <div class="testimonial-card d-flex flex-column flex-md-row align-items-center align-items-md-start text-center text-md-start p-3"
                        data-bs-toggle="modal" data-bs-target="#testimonialModal4">
                        <div class="ms-3">
                            <h5>Shabbir Badra</h5>
                            <span class="company">Apraava Energy Pvt Ltd.</span>
                            <p class="text-muted">Vice President – IT & CyberSecurity</p>
                            <span class="stars">★★★★★</span>
                            <p class="mt-2 test-para">"We had the opportunity to partner with DPDP Consultants for our
                                compliance journey under the Digital Personal Data Protection (DPDP) Act. From the very
                            </p>
                        </div>
                    </div>
                </div>



                <div class="col-md-4 col-lg-4 my-3">
                    <div class="testimonial-card d-flex flex-column flex-md-row align-items-center align-items-md-start text-center text-md-start p-3"
                        data-bs-toggle="modal" data-bs-target="#testimonialModal5">
                        <div class="ms-3">
                            <h5>Ajay Wadhwa</h5>
                            <span class="company">Tata Motors Xcelion</span>
                            <p class="text-muted">Chief Executive Officer</p>
                            <span class="stars">★★★★★</span>
                            <p class="mt-2 test-para">“We are pleased to acknowledge the valuable support provided by
                                <strong>PRIVACYIUM TECH PRIVATE LIMITED – DPDP Consultants</strong> during Tata Motors
                                Xcelion’s Digital
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Bootstrap Modal -->
                <div class="modal fade" id="testimonialModal4" tabindex="-1" aria-labelledby="testimonialModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body text-center">
                                <img src="./assets/images/client-logo/apraava.png" alt="User" class="img-fluid mb-3">
                                <h5>Shabbir Badra</h5>
                                <span class="company">Apraava Energy Pvt Ltd.</span>
                                <p class="text-muted">Vice President – IT & CyberSecurity</p>
                                <span class="stars">★★★★★</span>
                                <p class="mt-2">"We had the opportunity to partner with DPDP Consultants for our
                                    compliance journey under the Digital Personal Data Protection (DPDP) Act. From the
                                    very beginning, their team showcased exceptional professionalism and a deep
                                    understanding of both regulatory requirements and the nuances of our business
                                    operations. They provided actionable, business-aligned recommendations that
                                    seamlessly integrated into our existing workflows. What truly stood out was their
                                    structured approach and unwavering support throughout the engagement, including the
                                    timely submission of Privacy Impact Assessments for both our applications, along
                                    with all other critical deliverables. Their diligence ensured that we achieved full
                                    compliance without any disruption. We have full confidence in DPDP Consultants’
                                    expertise and highly recommend them to any organization seeking a trusted partner in
                                    data privacy and regulatory compliance"</p>
                            </div>
                        </div>
                    </div>
                </div>




                <!-- Bootstrap Modal -->
                <div class="modal fade" id="testimonialModal5" tabindex="-1" aria-labelledby="testimonialModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body text-center">
                                <img src="./assets/images/client-logo/motors_xcelion.png" alt="tata motors xcelion"
                                    class="img-fluid mb-3">
                                <h5>Ajay Wadhwa</h5>
                                <span class="company">Tata Motors Xcelion</span>
                                <p class="text-muted">Chief Executive Officer</p>
                                <span class="stars">★★★★★</span>
                                <p class="mt-2">“We are pleased to acknowledge the valuable support provided by
                                    <strong>PRIVACYIUM TECH PRIVATE LIMITED – DPDP Consultants</strong> during Tata
                                    Motors Xcelion’s
                                    <strong>Digital Personal Data Protection Act (DPDPA) assessment.</strong> Their
                                    structured approach
                                    and practical inputs supported an effective review and alignment with DPDPA
                                    requirements. We appreciate their professionalism, responsiveness, and commitment
                                    throughout the engagement.”
                                </p>
                            </div>
                        </div>
                    </div>
                </div>










                <!-- <div class="col-md-4 col-lg-4 my-3">
                    <div class="testimonial-card d-flex flex-column flex-md-row align-items-center align-items-md-start text-center text-md-start p-3"
                        data-bs-toggle="modal" data-bs-target="#testimonialModal5">
                        <div class="ms-3">
                            <h5>Divyansh Sharma</h5>
                            <span class="company">Bajaj Housing Finance Ltd.</span>
                            <p class="text-muted">Senior Lead Data Protection</p>
                            <span class="stars">★★★★★</span>
                            <p class="mt-2 test-para">Want to take a moment to appreciate the DPDP consultant team for
                                their extraordinary work at Bajaj Housing finance limited. Special mention to Kumar and

                            </p>
                        </div>
                    </div>
                </div> -->

                <!-- Bootstrap Modal -->
                <!-- <div class="modal fade" id="testimonialModal5" tabindex="-1" aria-labelledby="testimonialModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body text-center">
                                <img src="./assets/images/client-logo/Bajaj-Housing-Finance.svg" alt="User" class="img-fluid mb-3">
                                <h5>Divyansh Sharma</h5>
                                <span class="company">Bajaj Housing Finance Ltd.</span>
                                <p class="text-muted">Senior Lead Data Protection</p>
                                <span class="stars">★★★★★</span>
                                <p class="mt-2">"Want to take a moment to appreciate the DPDP consultant team for their
                                    extraordinary work at Bajaj Housing finance limited. Special mention to Kumar and
                                    his team for the dedication and commitment. DPDP Consultants supported us in our
                                    compliance initiative under the Digital Personal Data Protection (DPDP) Act with a
                                    high level of professionalism and expertise. Their team demonstrated a strong
                                    understanding of data protection requirements within highly regulated environments
                                    and provided guidance that was practical, risk-aware, and aligned with our
                                    governance framework. The engagement was executed in a structured and disciplined
                                    manner, with clear planning, timely delivery of key milestones, and close
                                    collaboration with our internal stakeholders. DPDP Consultants ensured that data
                                    protection requirements were effectively integrated into our existing compliance and
                                    operational processes without disruption. We have strong confidence in DPDP
                                    Consultants’ expertise and approach and regard them as a trusted partner for data
                                    privacy initiatives. We would recommend DPDP Consultants to any organization seeking
                                    dependable and knowledgeable support in this domain. Looking forward for the same
                                    delivery and commitment in the coming future."</p>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </section>
    <section class="newsletters-bg">

        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-5">

                    <div class="my-4">
                        <h6>Newsletters</h6>
                        <h4 class="newsletter-title">Stay informed and ahead of the curve with
                            <span>latest
                                insights, updates, and expert advice</span> on data privacy and compliance
                        </h4>
                    </div>
                    <a href="contact.php?act=newsletter" class="subscribe-btn my-4">Subscribe</a>

                </div>
                <div class="col-sm-7 text-center">
                    <div id="newsletterCarousel" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <a
                                    href="https://www.dpdpconsultants.com/newsletter.php?id=60&title=india-s-gccs-lag-behind-on-dpdp-compliance-as-deadline-looms"><img
                                        src="./assets/images/newsletters_60_thumbnail.jpg" class="d-block"
                                        alt="India's GCCs Lag Behind on DPDP Compliance as Deadline Looms"></a>
                            </div>
                            <div class="carousel-item">
                                <a
                                    href="https://www.dpdpconsultants.com/newsletter.php?id=59&title=supreme-court-sends-strong-message-to-tech-giants-privacy-is-not-negotiable"><img
                                        src="./assets/images/newsletters_59_thumbnail.jpg" class="d-block"
                                        alt="Supreme Court Sends Strong Message to Tech Giants: Privacy Is Not Negotiable"></a>
                            </div>
                            <div class="carousel-item">
                                <a
                                    href="https://www.dpdpconsultants.com/newsletter.php?id=58&title=who-is-actually-exempt-from-dpdp-compliance-the-question-every-indian-business-asks"><img
                                        src="./assets/images/newsletters_58_thumbnail.jpg" class="d-block"
                                        alt="Who Is Actually Exempt from DPDP Compliance? The Question Every Indian Business Asks"></a>
                            </div>

                            <div class="carousel-item">
                                <a
                                    href="https://www.dpdpconsultants.com/newsletter.php?id=57&title=uidai-to-ban-aadhaar-photocopies-and-require-registration-for-verifiers"><img
                                        src="./assets/images/newsletters_57_thumbnail.jpg" class="d-block"
                                        alt="UIDAI to Ban Aadhaar Photocopies and Require Registration for Verifiers"></a>

                            </div>

                            <div class="carousel-item">
                                <a
                                    href="https://www.dpdpconsultants.com/newsletter.php?id=56&title=india-mandates-preinstallation-of-state-cybersecurity-app-on-all-mobile-phones"><img
                                        src="./assets/images/newsletters_56_thumbnail.jpg" class="d-block"
                                        alt="India Mandates Preinstallation of State Cybersecurity App on All Mobile Phones"></a>
                            </div>
                        </div>

                        <button class="carousel-control-prev arrow-cls" type="button"
                            data-bs-target="#newsletterCarousel" data-bs-slide="prev">
                            <img src="./assets/images/news-letter-arrow-left.png" alt="Previous" class="custom-icon">
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next arrow-cls" type="button"
                            data-bs-target="#newsletterCarousel" data-bs-slide="next">
                            <img src="./assets/images/news-letter-arrow-right.png" alt="Next" class="custom-icon">
                            <span class="visually-hidden">Next</span>
                        </button>

                    </div>
                    <div class="mt-3">
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section class="faq-section">
        <div class="container container-bg">
            <div class="row align-items-center">
                <div class="col-sm-5">
                    <div class="FAQ-img">
                        <img src="./assets/images/faq-img1.png" alt="FAQ Image" class="img-fluid">
                    </div>
                </div>
                <div class="col-md-7">
                    <h2 class="faq-title">Frequently Asked <span>Questions</span></h2>
                    <div class="accordion" id="faqAccordion">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq1" aria-expanded="true">
                                    What services does DPDP Consultants offer for data privacy and compliance?
                                </button>
                            </h2>
                            <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    DPDP Consultants specializes in providing comprehensive services tailored to data
                                    privacy and compliance needs. Our offerings include DPDP Act Readiness Review, Data
                                    Privacy Policy Drafting, Privacy Impact Assessments, Contract Review for Data
                                    Protection Compliance, DPDP Act Compliance Assistance, and Employee Training on Data
                                    Protection Regulations. We aim to simplify the compliance journey for businesses by
                                    offering end-to-end data protection solutions.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq8">
                                    How can DPDP Consultants assist businesses in achieving DPDP Act compliance?
                                </button>
                            </h2>
                            <div id="faq8" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    DPDP Consultants offers expert assistance in aligning your business processes with
                                    the requirements of the Digital Personal Data Protection Act (DPDP Act) 2023. Our
                                    team conducts a thorough gap analysis, provides compliance roadmaps, and supports
                                    the implementation of privacy frameworks. With our guidance, organizations can
                                    confidently navigate complex regulatory requirements, reduce risks, and ensure
                                    seamless compliance with the DPDP Act 2023.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq9">
                                    What is the DPDP Act 2023, and why is it essential for businesses?
                                </button>
                            </h2>
                            <div id="faq9" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    The Digital Personal Data Protection Act 2023 is a transformative law in India
                                    focused on protecting individuals' personal data. It mandates that businesses comply
                                    with data privacy regulations, implement robust data management practices, and
                                    ensure the security of customer information. Failure to comply can result in
                                    significant penalties and reputational damage. Businesses must prioritize data
                                    privacy and adopt compliance measures to stay competitive and trustworthy.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq10">
                                    Why is data protection crucial for modern businesses?
                                </button>
                            </h2>
                            <div id="faq10" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    In today's digital age, data protection is a cornerstone of building customer trust
                                    and ensuring business sustainability. It helps organizations safeguard sensitive
                                    information, comply with laws like the DPDP Act 2023, and mitigate the risk of data
                                    breaches. Effective data protection enhances brand reputation, fosters customer
                                    loyalty, and ensures smooth operations in a data-driven economy.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq11">
                                    How can I contact DPDP Consultants for expert guidance on data privacy?
                                </button>
                            </h2>
                            <div id="faq11" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    You can connect with DPDP Consultants through multiple channels. Visit our office in
                                    Noida, Uttar Pradesh, call us at 0120-6930999, or email us at
                                    info@dpdpconsultants.com. Our team of experts is ready to assist you with your data
                                    privacy and compliance needs.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="view-more">
                        View more <a href="faq.php"><img class="mx-2" src="./assets/images/svg-faq-arrow.png"
                                alt="View More"></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- newsletter start -->

    <?php include_once('footer.php'); ?>

    <script>
        const contents = [
            `<div class="card-custom-tools">
                            <div class="row">
                                <div class="col-md-3 text-center">
                                   <video width="150" height="150" autoplay muted loop aria-label="Compliance Management Tool Icon: Data Principal Consent Manager Tool ">
                                        <source src="./assets/images/video/DPCM.mp4" type="video/mp4">

                                        Your browser does not support the video tag.
                                    </video>
                                </div>
                                <div class="col-md-9">
                                    <h5 class="tools"><strong><a href="dpcm.php" class="learn-more">Data Principal Consent Management</a></strong></h5>
                                    <p class="tools-para">DPCM is our solution to completely automate the
                                     management of Data Principals' consents. It is capable of handling legacy data,
                                      paper consent as well as live consents with equal ease.</p>
    
                                </div>

                                <h6 class="mt-3 tools"><strong>Key Features:</strong></h6>
                                <div class="benefits-container mt-3">
                                    <div class="benefit">
                                        <img src="./assets/images/tools-icon/147.png" alt="Live Consent Acquisition Across Channels - Visual for Multi-channel DPDPA consent management.">
                                        <p>Live Consent Acquisition Across Channels</p>
                                    </div>
                                    <div class="benefit">
                                        <img src="./assets/images/tools-icon/148.png" alt="Advanced Consent Tracking & Management - Visual for Real-time DPDPA compliance monitoring.">
                                        <p>Advanced Consent Tracking & Management</p>
                                    </div>
                                    <div class="benefit">
                                        <img src="./assets/images/tools-icon/149.png" alt="Seamless Compliance for Historical Data - Visual for DPDPA legacy data management.">
                                        <p>Seamless Compliance for Historical Data</p>
                                    </div>
                                    <div class="benefit">
                                        <img src="./assets/images/tools-icon/150.png" alt="Customizable DPDPA Solutions - Visual for Privacy tools tailored to business requirements.">
                                        <p>Customizable to Fit Business Requirements</p>
                                    </div>
                                    <div class="benefit">
                                        <img src="./assets/images/tools-icon/151.png" alt="Integrated Data Management Across Departments - Visual for Centralized DPDPA compliance.">
                                        <p>Integrated Data Management Across Departments</p>
                                    </div>
                                </div>
                            </div>
                        </div>`,
            `<div class="card-custom-tools">
                            <div class="row">
                                <div class="col-md-3 text-center">
                                    <video width="150" height="150" autoplay muted loop aria-label="Compliance Management Tool Icon: Data Principal Grievance Redressal Tool ">
                    <source src="./assets/images/video/DPGR.mp4" type="video/mp4">

                    Your browser does not support the video tag.
                </video>
                                </div>
                                <div class="col-md-9">
                                    <h5 class="tools"><strong><a href="dpgr.php" class="learn-more">Data Principal Grievance Redressal</a></strong></h5>
                                    <p class="tools-para">DPGR process is an essential part of any comprehensive
                                     data protection strategy. Our tool ensures that Data Principal’s rights are duly
                                      honored and providing a clear mechanism for addressing complaints.</p>
                                    
                                </div>

                                <h6 class="mt-3 tools"><strong>Key Features:</strong></h6>
                                <div class="benefits-container mt-3">
                                    <div class="benefit">
                                        <img src="./assets/images/tools-icon/159.png" alt="Automated Privacy Lifecycle - Graphic for continuous DPDPA compliance and data processing workflows.">
                                        <p>Effortless Grievance Management for Data Fiduciaries</p>
                                    </div>
                                    <div class="benefit">
                                        <img src="./assets/images/tools-icon/160.png" alt="Risk & Incident Management - Visual for DPDPA data breach alerts and technical issue resolution.">
                                        <p>Seamless Grievance Redressal Mechanism</p>
                                    </div>
                                    <div class="benefit">
                                        <img src="./assets/images/tools-icon/161.png" alt="Privacy Risk Monitoring - Visual for DPDPA data breach detection and security threat observation.">
                                        <p>Timely Response with Automated Acknowledgement</p>
                                    </div>
                                    <div class="benefit">
                                        <img src="./assets/images/tools-icon/162.png" alt="Automated Data Categorization - Visual for DPDPA structured technical compliance management.">
                                        <p>Advanced Rights and Grievance Tracking & Management</p>
                                    </div>
                                    <div class="benefit">
                                        <img src="./assets/images/tools-icon/163.png" alt="User Data Audit Analytics - Visual for DPDPA individual data processing and compliance auditing.">
                                        <p>Seamless Integration with Your Digital Ecosystem</p>
                                    </div>
                                </div>
                            </div>
                        </div>`,
            `<div class="card-custom-tools">
                            <div class="row">
                                <div class="col-md-3 text-center">
                                    <video width="150" height="150" autoplay muted loop aria-label="Compliance Management Tool Icon: Employees Compliance Training and Awareness Tool ">
                    <source src="./assets/images/video/DPAP.mp4" type="video/mp4">

                    Your browser does not support the video tag.
                </video>
                                </div>
                                <div class="col-md-9">
                                    <h5 class="tools"><strong><a href="dpap.php" class="learn-more">Data Principal Awareness Program</a></strong></h5>
                                    <p class="tools-para">DPAP tool educates employees, stakeholders, and partners about 
                                    the importance of safeguarding personal and sensitive data, adhering to privacy laws,
                                     and implementing best practices.</p>
                                   
                                </div>

                                <h6 class="mt-3 tools"><strong>Key Features:</strong></h6>
                                <div class="benefits-container mt-3">
                                    <div class="benefit">
                                        <img src="./assets/images/DPAP-Icons/191.png" alt="Privacy Training & Resources - Visual for DPDPA educational videos and compliance documentation.">
                                        <p>Self-Paced Learning</p>
                                    </div>
                                    <div class="benefit">
                                        <img src="./assets/images/DPAP-Icons/192.png" alt="Privacy Knowledge & Innovation - Visual for DPDPA compliance learning and strategic idea generation.">
                                        <p>End-of-Module Assessments</p>
                                    </div>
                                    <div class="benefit">
                                        <img src="./assets/images/DPAP-Icons/193.png" alt="User Compliance Audit - Visual for DPDPA performance tracking and regulatory checklist monitoring.">
                                        <p>Scoring and Pass/Fail Criteria</p>
                                    </div>
                                    <div class="benefit">
                                        <img src="./assets/images/DPAP-Icons/194.png" alt="Compliance Report Verified - Visual for DPDPA data audit completion and validated bar chart results.">
                                        <p>Compliance Tracking and Reporting</p>
                                    </div>
                                    <div class="benefit">
                                        <img src="./assets/images/DPAP-Icons/195.png" alt="Privacy Data Analysis - Document editing with bar and pie charts for DPDPA compliance reporting.">
                                        <p>Employee Certificate Generation</p>
                                    </div>
                                </div>
                            </div>
                        </div>`,
            `<div class="card-custom-tools">
                            <div class="row">
                                <div class="col-md-3 text-center">
                                   <video width="150" height="150" autoplay muted loop aria-label="Compliance Management Tool Icon: Data Protection Impact Assessment Tool ">
                    <source src="./assets/images/video/DPIA.mp4" type="video/mp4">

                    Your browser does not support the video tag.
                </video>
                                </div>
                                <div class="col-md-9">
                                    <h5 class="tools"><strong><a href="dpia.php" class="learn-more">Data Protection Impact Assessment</a></strong></h5>
                                    <p class="tools-para">DPIA tool helps build compliance with the DPDP Act 2023 whereby
                                     companies need to hold periodic DPIAs. DPIA tool infuses automation to the entire DPIA
                                      process.</p>
                                   
                                </div>

                                <h6 class="mt-3 tools"><strong>Key Features:</strong></h6>
                                <div class="benefits-container mt-3">
                                    <div class="benefit">
                                        <img src="./assets/images/tools-icon/169.png" alt="Multimedia Privacy Engineering - Visual for DPDPA technical compliance across diverse file types.">
                                        <p>Streamlined Workflow and Efficiency</p>
                                    </div>
                                    <div class="benefit">
                                        <img src="./assets/images/tools-icon/170.png" alt="Automated Data Processing - Gear connected to databases for DPDPA technical systems integration.">
                                        <p>Risk Assessment & Mitigation</p>
                                    </div>
                                    <div class="benefit">
                                        <img src="./assets/images/tools-icon/171.png" alt="Verified Risk Audit - Magnifying glass with checkmark and warning triangle for DPDPA compliance.">
                                        <p>Risks tracking and management</p>
                                    </div>
                                    <div class="benefit">
                                        <img src="./assets/images/tools-icon/172.png" alt="Legal Compliance Checklist - Visual for DPDPA regulatory standards and verified data protocols.">
                                        <p>Comprehensive Reporting & Audit Trail</p>
                                    </div>
                                    <div class="benefit">
                                        <img src="./assets/images/tools-icon/173.png" alt="Compliance Monitoring - Monitor with bar charts, clock, and calendar for DPDPA audit scheduling.">
                                        <p>Collaboration and Version Control</p>
                                    </div>
                                </div>
                            </div>
                        </div>`,
            `<div class="card-custom-tools">
                            <div class="row">
                                <div class="col-md-3 text-center">
                                    <video width="150" height="150" autoplay muted loop aria-label="Compliance Management Tool Icon: Data Protection Third Party Assessment and Compliance Tool ">
                    <source src="./assets/images/video/DPTPA.mp4" type="video/mp4">

                    Your browser does not support the video tag.
                </video>
                                </div>
                                <div class="col-md-9">
                                    <h5 class="tools"><strong><a href="dptpa.php" class="learn-more">Data Protection Third Party Assessment and Compliance </a></strong></h5>
                                    <p class="tools-para">DPTAP tool ensures that the data fiduciary is regularly reviewing the compliance of third 
                                    parties or sub-processors and assessing risks in selecting a third party.</p>
                                   
                                </div>

                                <h6 class="mt-3 tools"><strong>Key Features:</strong></h6>
                                <div class="benefits-container mt-3">
                                    <div class="benefit">
                                        <img src="./assets/images/tools-icon/179.png" alt="Verified Compliance Document - Visual for Shield and document checkmarks for DPDPA security validation.">
                                        <p>Third Party Due Diligence</p>
                                    </div>
                                    <div class="benefit">
                                        <img src="./assets/images/tools-icon/180.png" alt="Regulatory Compliance Review - Visual for Magnifying glass auditing documents for DPDPA data verification.">
                                        <p>Configurable Assessments</p>
                                    </div>
                                    <div class="benefit">
                                        <img src="./assets/images/tools-icon/181.png" alt="Risk Mitigation - Visual for Warning triangle with downward arrows for DPDPA threat reduction visualization.">
                                        <p>Third Party Risk Evaluation</p>
                                    </div>
                                    <div class="benefit">
                                        <img src="./assets/images/tools-icon/182.png" alt="User Privacy Rating - Visual for Person with five stars for DPDPA data principal trust and satisfaction.">
                                        <p>Integrated Data Management Across Third parties</p>
                                    </div>
                                    <div class="benefit">
                                        <img src="./assets/images/tools-icon/183.png" alt="User Compliance Verification - Visual for Person with checklist for DPDPA individual data audit completion.">
                                        <p>Third Party Consent Verification</p>
                                    </div>
                                </div>
                            </div>
                        </div>`
        ];

        function showContent(index) {
            document.getElementById('content').innerHTML = contents[index];
            document.querySelectorAll('.tab-button').forEach((btn, i) => {
                btn.classList.toggle('active', i === index);
            });
        }

    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.bundle.min.js"></script>
    <script src="./assets/js/Edu.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="./assets/js/script.js"></script>
    <!-- <script src="https://analytics.ahrefs.com/analytics.js" data-key="OYwY+ufg23+xpZwlJFuKdA" async></script> -->
</body>

</html>