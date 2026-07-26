<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>India’s Leading DPDP Act Compliance Management System</title>
    <meta name="description"
        content="India’s trusted partner for DPDP Act compliance, combining consulting expertise with advanced compliance management software.">
    <meta name="keywords"
        content="Digital Personal Data Protection consultants, DPDP Act compliance, automated privacy compliance tools, consent management platform, data protection solutions, compliance management tools in India">
    <link rel="icon" href="assets/images/fav-icon-logo.png" type="image/webp">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/style.css">

    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="canonical" href="https://www.dpdpconsultants.com/about-us.php">


    <?php include_once('google-tag-manager.php'); ?>
    <style>
        .blog {
            text-align: center;
            color: white;
            position: relative;
        }

        .hero-section {
            padding: 110px 36px 135px;
        }

        .hero-section h1 {
            font-size: 2.5rem;
            font-weight: bold;
        }

        .hero-section span {
            color: #3CA6E0;
        }

        .hero-section p {
            max-width: 700px;
            margin: 20px auto;
            font-size: 1rem;
            color: #B0B3C3;
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


        /* .profile-cards {
            height: 100%;
            border-radius: 15px;
            overflow: hidden;
            background: #fff;
            transition: all 0.3s ease;
        }

        .profile-cards img {
            width: 100%;
            height: 280px;
            object-fit: cover;
        }

        .profile-infos {
            padding: 15px;
            text-align: center;
        }

        .profile-infos h6 {
            margin-bottom: 5px;
            font-weight: 600;
            font-size: 16px;
        }

        .profile-infos p {
            margin: 0;
            font-size: 13px;
            color: #666;
        }

        .profile-cards:hover {
            transform: translateY(-5px);
        } */



        /* Team Section */
        #ourteam {
            padding: 38px 0;
        }

        #ourteam .container {
            margin-bottom: 30px;
        }

        .profile-cards {
            position: relative;
            overflow: hidden;
            border-radius: 20px;
        }

        .profile-cards img {
            width: 100%;
            height: 320px;
            object-fit: cover;
            display: block;
        }

        .profile-infos {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            padding: 20px 15px;
            text-align: center;
            background: linear-gradient(to top,
                    rgba(2, 9, 44, 0.95),
                    rgba(2, 9, 44, 0.75),
                    transparent);
            z-index: 2;
        }

        .profile-infos h6,
        .profile-infos h5 {
            color: #fff !important;
            font-size: 19px;
            font-weight: 700;
            margin-bottom: 6px;
            line-height: 1.3;
        }

        .profile-infos p {
            color: #fff !important;
            font-size: 14px;
            margin: 0;
            opacity: 0.95;
            line-height: 1.4;
        }

        /* Tablet */
        @media (max-width: 991px) {
            #ourteam {
                padding: 40px 0;
            }

            .profile-cards img {
                height: 260px;
            }

            .profile-infos {
                min-height: 90px;
                padding: 15px 10px;
            }

            .profile-infos h6 {
                font-size: 15px;
            }

            .profile-infos p {
                font-size: 12px;
            }
        }

        /* Mobile */
        @media (max-width: 767px) {

            .team-texts {
                display: block !important;
                margin-bottom: 25px;
            }

            .team-texts h2 {
                font-size: 24px;
                line-height: 1.3;
                padding: 0;
            }

            .team-texts p {
                font-size: 14px;
            }

            .profile-cards {
                border-radius: 14px;
            }

            .profile-cards img {
                height: 220px;
            }

            .profile-infos {
                padding: 12px 8px;
                min-height: 85px;
            }

            .profile-infos h6 {
                font-size: 14px;
                margin-bottom: 4px;
            }

            .profile-infos p {
                font-size: 11px;
                line-height: 1.4;
            }

            /* Reduce space between rows */
            .row.g-4 {
                --bs-gutter-y: 1rem;
                --bs-gutter-x: 1rem;
            }
        }

        /* Small Mobile */
        @media (max-width: 480px) {
            .profile-cards img {
                height: 180px;
            }

            .profile-infos h6 {
                font-size: 13px;
            }

            .profile-infos p {
                font-size: 10px;
            }
        }

        .modal-dialog {
            max-width: 800px;
        }

        .modal-content {
            border-radius: 15px;
            padding: 20px;
        }

        .modal-header {
            border-bottom: none;
        }

        .modal-body {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .profile-img {
            width: 253px;
            height: 320px;
            border-radius: 10px;
            object-fit: cover;
        }

        .name-container {
            text-align: center;
            margin-top: 10px;
        }

        .modal-footer {
            border-top: none;
            justify-content: flex-end;
        }

        .close-btn {
            font-size: 20px;
            cursor: pointer;
        }

        /* Mobile Responsive */
        @media (max-width: 768px) {
            .modal-body {
                flex-direction: column;
                text-align: center;
            }

            .profile-img {
                width: 150px;
                height: 150px;
            }
        }

        .info-list {
            width: 50%;
            height: auto;
        }

        .info-list img {
            width: 90px;
            height: auto;
        }

        .we-can-para {
            position: relative;
            top: 0px;
            left: 560px;
        }

        .quote-container {
            position: relative;
            padding-right: 50px;
        }

        .quote-container::after {
            content: "";
            background: url('./assets/images/comma.png') no-repeat;
            background-size: contain;
            width: 100px;
            height: 100px;
            position: absolute;
            top: -30px;
            right: 0;
            opacity: 0.5;
            z-index: -1;
        }

        .we-conduct-pa {
            padding: 8px 18px;
            color: #02092c;
            font-size: 12px;
        }



        @media (max-width: 768px) {
            .quote-container::after {
                display: none;
            }

            .we-can-para {
                display: none;
            }

            .hero-section {
                br {
                    display: none;
                }

                padding: 30px 9px 160px;

            }

            .hero-section p {
                font-size: 12px;
                text-align: left;
                margin: 0px 0px !important;
            }

            .whoarewe-p {
                font-size: 12px;
            }


            .btns-primary {
                padding: 10px 62px;
                margin: 10px;
            }

            .we-canAbout {
                font-size: 1rem;
            }

            .info-section-consumers {
                padding: 4px;
            }

            .info-list {
                flex-wrap: wrap;
                width: 100%;

            }

            .info-list>div {
                width: 48%;
                text-align: center;
            }

            .about-who-ar {
                font-size: 1rem;
                letter-spacing: 1px;
                line-height: 24px;

            }

            .highlights-text {
                font-size: 1rem;
            }

            #whoweare {
                padding: 0px !important;
            }

            .quote-container {
                padding: 24px;
            }

            .text-mission {
                font-size: 1rem;
                letter-spacing: 1px;
                line-height: 24px;

            }

            .text-content-mi p {
                font-size: 12px;
            }

            .card-mission {
                /* flex-direction: column;
            align-items: center; */
                justify-content: center;
                text-align: center;
                width: 100%;
            }

            .text-content-mi {
                text-align: center;
            }

            .icon-boxs img {
                width: 80px;
                height: 80px;
            }

            .team-texts p {
                text-align: center !important;
            }

            .team-texts h2 {
                font-size: 1rem;
                padding: 8px 10px;
                text-align: center !important;
                margin: 0px auto;
                letter-spacing: 1px;
                line-height: 24px;
            }

            .certifications-container {
                padding: 10px 20px;
                width: 100%;
            }


            .m-enabling {
                br {
                    display: none;
                }

                font-size: 1.2rem;
                line-height: 24px;
            }

            .certifications-text h2 {
                br {
                    display: none;
                }

                font-size: 1rem;
                letter-spacing: 1px;
                line-height: 24px;
            }

            .certifications-text p {
                br {
                    display: none;
                }

                font-size: 12px;
            }

            .team-texts {
                display: none;
            }

            .driven-m {
                br {
                    display: none;
                }

                font-size:12px;
            }

            .driven-ms {
                br {
                    display: none;
                }

            }

            .modal-p {
                font-size: 12px !important;

            }

            .about-btn {
                /* text-align: start; */
            }
        }

        @media (min-width: 768px) {
            .team-text-m {
                display: none;
            }
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
            height: 40vh;
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

        @media (max-width: 768px) {
            .carousel-img {
                flex: 0 0 calc(100% / 1);
                /* 2 images per view */
                max-width: calc(100% / 1);
                height: 50vh;
            }

        }

        @media (min-width: 992px) {
            .enrollnow1 {
                display: none;
            }

        }


        .btn-agree {
            background-color: #3CA6E0;
            color: white;
        }

        .btn-close-custom {
            background-color: #6c757d;
            color: white;

        }

        .team-text-certificate h2 {
            font-size: 2rem;
            font-weight: bold;
            line-height: 42px;
        }
    </style>
</head>

<body>

    <section class="blog" style="background-color: #02092c;">
        <?php include_once('new-nav.php'); ?>
        <div class="container hero-section">
            <h1>Where Privacy Expertise Meets Automated <span><br>Compliance Solutions</span>
            </h1>
            <p class="text-white">Trusted partner in data protection, offering tailored compliance solutions to help
                businesses safeguard their data and stay ahead of regulatory challenges.</p>
            <div class="mt-4 about-btn">
                <a href="contact.php?act=newsletter" class="btn btn-outline-light me-2">Sign up for Newsletter</a>
                <a href="contact.php" class="btn btn-primary btns-primary">Get in touch</a>
            </div>
        </div>
    </section>

    <div class="container mt-5">
        <div class="info-section-consumers">
            <div class="info-text">
                <p class="text-start we-can-para">We can help you in:</p>
                <p class="fw-bold we-canAbout"><span class="highlights-text">87%</span> of consumers will take<br>
                    their business elsewhere if<br>
                    they don’t trust a company<br> with their data.</p>
            </div>

            <div class="info-list d-flex justify-content-between">
                <div>
                    <img src="./assets/images/avoid-financial-penalties.png"
                        alt="Icon to demonstrate our services to provide organisations: Avoid Financial Penalties ">
                    <p class="fw-bold">Avoid Financial Penalties</p>
                </div>
                <div>
                    <img src="./assets/images/enhance-customer.png"
                        alt="Icon to demonstrate our services to provide organisations: Enhance Customer Trust and Loyalty ">
                    <p class="fw-bold">Enhance Customer Trust and Loyalty</p>
                </div>
                <div>
                    <img src="./assets/images/improve-rusiness-reputation.png"
                        alt="Icon to demonstrate our services to provide organisations Improve Business Reputation ">
                    <p class="fw-bold">Improve Business Reputation</p>
                </div>
                <div>
                    <img src="./assets/images/mitigate-risks.png"
                        alt="Icon to demonstrate our services to provide organisations: Mitigate Risks of Data Breaches ">
                    <p class="fw-bold">Mitigate Risks of Data Breaches</p>
                </div>
            </div>
        </div>
    </div>


    <div class="container mt-5 p-5" id="whoweare">
        <div class="row align-items-center">
            <div class="col-md-6">
                <h3 class="how-it-works">Who we are</h3>
                <h2 class="about-who-ar">Empowering Businesses to<br> Seamlessly Navigate <span
                        class="highlights-text">Data
                        Protection Compliance</span></h2>
                <p class="whoarewe-p">By prioritizing data protection and privacy, businesses can strengthen compliance
                    and build trust
                    with customers and stakeholders.
                </p>
                <a href="contact.php" class="btn-custom">Get Compliant Today</a>
            </div>
            <div class="col-md-6 quote-container">
                <p class="whoarewe-p">
                    We understand that Data Protection and Data Privacy regulations can be complex and
                    time-consuming for
                    businesses. That’s why we empower our clients with the skills, tools, and knowledge needed to
                    navigate and ensure compliance with these critical regulations successfully. With our dedicated data
                    protection consultants, including certified Privacy Compliance Consultants and Data Protection
                    Officers, businesses can ensure comprehensive data risk mitigation. We navigate you to the evolving
                    landscape of data protection regulations to establish a solid foundation for privacy management
                    within your organization. We have expertise in assisting business in achieving data privacy
                    compliance, managing customer data securely, and enhancing your overall data governance framework.
                </p>
            </div>
        </div>
    </div>
    <section style="background-color: #02092c;" id="missionandvision">
        <div class="container">
            <h3 class="text-center text-white pt-5">Mission and vision</h3>
            <h2 class="text-center text-white text-mission">Transforming the Complex World of Data Protection into a
                Seamless
                Journey for<br> Organizations Privacy and Compliance.</h2>
            <div class="row mt-5">

                <div class="col-12 col-md-6 mb-4">
                    <div class="card-mission">
                        <div class="icon-boxs">
                            <img src="./assets/images/missin-vision.png" alt="DPDP Consultants mission icon ">
                        </div>
                        <div class="text-content-mi">
                            <h4 class="text-start miss-center">Mission</h4>
                            <p class="text-white text-start">
                                Our mission is to empower businesses to navigate the complexities of data protection and
                                privacy with confidence and ease. Through expert consulting and proprietary compliance
                                tools, we help organizations achieve and sustain regulatory compliance while fostering a
                                culture of security and accountability. We are committed to fostering a culture of
                                awareness and responsibility in data security, enabling our clients to safeguard
                                sensitive information, build consumer trust, and thrive in an ever-evolving regulatory
                                landscape.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="card-mission">
                        <div class="icon-boxs">
                            <img src="./assets/images/vision.png" alt="DPDP Consultants vision icon">
                        </div>
                        <div class="text-content-mi">
                            <h4 class="text-start">Vision</h4>
                            <p class="text-white text-start">
                                Our vision is to be the premier consulting and solutioning partner in the realm of data
                                protection and data privacy, recognized globally for our innovative approach and
                                cutting-edge proprietary tools. We envision a future where all organizations prioritize
                                data privacy as a fundamental aspect of their operations, ensuring that personal
                                information is handled with utmost care and respect. By fostering an ecosystem of trust
                                and transparency, we aim to lead the way in shaping best practices and setting standards
                                for data protection compliance that empower businesses to succeed responsibly in the
                                digital age.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        </div>
    </section>

    <!-- Modal -->
    <div class="modal fade" id="profileModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <!-- <h5 class="modal-title">About</h5> -->
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div>
                        <img src="assets/images/out-team/shilendra-sharma.webp"
                            alt="Founder/Principal: “Shilender Sharma”" class="profile-img">
                        <div class="name-container">
                            <h4 class="mt-2">Shilendra Sharma</h4>
                            <p class="text-muted">Founder/Principal</p>
                        </div>
                    </div>
                    <div>
                        <h5 class="modal-title fw-bold">About</h5>
                        <p class="modal-p">
                            A seasoned data privacy expert with over a decade of experience in the digital data privacy
                            domain. Shilendra has successfully guided over 2000+ companies in the UK and Ireland to
                            understand, implement, and maintain privacy and financial compliance.

                            At the core, he specialises in GDPR Implementations and has certifications from BSI. An
                            expert in DPIA, LIA, DSAR Management, L&D, Training, Privacy Audit, CCPA, and the DPDP Act.
                            He has designed and implemented GDPR compliance-based systems, frameworks, products, and
                            solutions globally.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- Modal1 -->
    <div class="modal fade" id="profileModal1" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <!-- <h5 class="modal-title">About</h5> -->
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div>
                        <img src="assets/images/out-team/kumarpriyank.webp" alt="Founder/Principal: “Kumar Priyank”"
                            class="profile-img">
                        <div class="name-container">
                            <h4 class="mt-2">Kumar Priyank</h4>
                            <p class="text-muted">C.E.O & Chief Privacy Officer</p>
                        </div>
                    </div>
                    <div>
                        <h5 class="modal-title fw-bold">About</h5>
                        <p class="modal-p">
                            Kumar Priyank has 15+ years of experience in Information Technology Service Delivery, Data
                            Privacy and Security consulting. His core specialization lies in Privacy advisory, GDPR &
                            DPDP Compliance. Over the years, he has led numerous successful digital service delivery,
                            GDPR implementations, managed DSARs, DPIA, LIA and negotiated complex contracts. His area of
                            expertise extends to Information Technology, Information Security, Agile Scrum, Dev-ops,
                            Digital transformation, Cloud Computing, IT governance, and CCPA.

                            Kumar has a successful record of designing, developing, and implementing GDPR and DPDP
                            compliance-based management systems, products, solutions, and operations worldwide. With a
                            strong foundation in technical and privacy domains, he has driven organizational compliance
                            in the rapidly evolving data privacy and security domain.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal2 -->
    <div class="modal fade" id="profileModal2" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <!-- <h5 class="modal-title">About</h5> -->
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div>
                        <img src="assets/images/out-team/12.png" alt="Founder/Principal: “Abhishek Vinod Singh”"
                            class="profile-img">
                        <div class="name-container">
                            <h4 class="mt-2">Abhishek Vinod Singh</h4>
                            <p class="text-muted">Advisor – Technology</p>
                        </div>
                    </div>
                    <div>
                        <h5 class="modal-title fw-bold">About</h5>
                        <p class="modal-p">
                            Abhishek Vinod Singh is the CEO and co-founder of AiDash. An alumnus of IIT Kanpur, Abhishek
                            worked with many IT companies prior to starting and growing a series of successful tech
                            businesses, including DbyDx Software and Edureka. He is based in Santa Clara, California.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal3 -->
    <div class="modal fade" id="profileModal3" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <!-- <h5 class="modal-title">About</h5> -->
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div>
                        <img src="assets/images/out-team/bhavna.png" alt="Founder/Principal: “Bhavna Narula”"
                            class="profile-img">
                        <div class="name-container">
                            <h4 class="mt-2">Bhavna Narula</h4>
                            <p class="text-muted">Vice President - Technology & Product</p>
                        </div>
                    </div>
                    <div>
                        <h5 class="modal-title fw-bold">About</h5>
                        <p class="modal-p">
                            Bhavna has over 19 years of diverse experience, focused on solving industry problems by
                            productising linked processes with the help of technology, people, and governance.

                            She has a strong background in software product management and development. She is well
                            versed in all stages of the Software Development Life Cycle (SDLC) and has a knack for
                            devising strategies aimed at organizational growth, profitability, and improved business
                            performance.

                            She is a SAFe 5 Certified Product Owner/Product Manager and a Certified Scrum Master.
                            Additionally, she holds certifications as a Certified CISM, Certified Lead Auditor by IRCA
                            for ISO 27001 and ISO 22301.

                            In her previous role, she served as a CISO and Data privacy expert, helping the organization
                            to comply with GDPR and CCPA privacy laws.

                            She loves to listen to music, cook, and spend time with her family and friends
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal4 -->
    <div class="modal fade" id="profileModal4" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <!-- <h5 class="modal-title">About</h5> -->
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div>
                        <img src="assets/images/out-team/jaspal.png" alt="Founder/Principal: “Jaspal Singh”"
                            class="profile-img">
                        <div class="name-container">
                            <h4 class="mt-2">Jaspal Singh</h4>
                            <p class="text-muted">Director - Technology & Product</p>
                        </div>
                    </div>
                    <div>
                        <h5 class="modal-title fw-bold">About</h5>
                        <p class="modal-p">

                        <div class="mb-3 modal-p">
                            Jaspal Singh is a seasoned technology leader with over two decades of experience in software
                            engineering and digital transformation. Throughout his career, he has consistently
                            demonstrated a strong commitment to solving complex technical problems, scaling enterprise
                            applications, and aligning innovative technology solutions with strategic business
                            objectives.
                        </div>
                        <div class="mb-3 modal-p">
                            As Director – Technology & Products, Jaspal specializes in leading
                            cross-functional teams to architect and deliver end-to-end technology platforms. His areas
                            of expertise include Cybersecurity, DevOps automation, CI/CD pipeline implementation, AWS
                            cloud infrastructure, containerized deployments using Docker and Kubernetes, and building
                            resilient Microservices-based architectures.
                        </div>
                        <div class="modal-p">
                            A strong advocate of Agile and Scrum practices, Jaspal ensures rapid and reliable product
                            delivery while fostering a culture of continuous improvement and collaboration. He has
                            played a pivotal role in modernizing legacy systems, enhancing product security, and driving
                            cloud-native development for scalable SaaS platforms.
                        </div>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal41 -->
    <div class="modal fade" id="profileModal41" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <!-- <h5 class="modal-title">About</h5> -->
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div>
                        <img src="assets/images/out-team/piush.png" alt="Founder/Principal: “Piush Kumar”"
                            class="profile-img">
                        <div class="name-container">
                            <h4 class="mt-2">Piush Kumar</h4>
                            <p class="text-muted">Associate Director - Technology & Products</p>
                        </div>
                    </div>
                    <div>
                        <h5 class="modal-title fw-bold">About</h5>
                        <p class="modal-p">

                        <div class="mb-3 modal-p">
                            Technology leader with Over 14 years of experience delivering large-scale projects across
                            technologies and domains (BFSI, Fintech, Retail, E-commerce etc) in distributed engineering
                            organizations.
                        </div>
                        <div class="mb-3 modal-p">
                            Proven expertise in driving cross-functional technical initiatives involving secure
                            microservices architecture, cloud-native systems, enterprise integrations, API ecosystems.
                        </div>
                        <div class="modal-p">
                            Expertise in Engineering/Technical Project management practices, stakeholder management,
                            early risk identification and mitigation, deck prioritization, matrix driven execution,
                            timelines, improving operational excellence, driving architecture discussions, managing
                            dependencies across teams and cloud-native applications. Actively leverage AI-assisted
                            development and tools to accelerate engineering productivity, improve decision-making, and
                            enhance solution design.
                        </div>

                        <div class="modal-p">
                            Engaged in CSR and community development initiatives, while maintaining personal creativity
                            and well-being through music, fitness regimes and sports.
                        </div>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal5 -->
    <div class="modal fade" id="profileModal5" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div>
                        <img src="assets/images/out-team/Osama.png" alt="Founder/Principal: “Akansha Bhatt”"
                            class="profile-img">
                        <div class="name-container">
                            <h4 class="mt-2">Osama</h4>
                            <p class="text-muted">Senior Functional Consultant - Technology & Products</p>
                        </div>
                    </div>
                    <div>
                        <h5 class="modal-title fw-bold">About</h5>
                        <p class="modal-p">
                            Osama brings over 5 years of diverse experience in solving complex business problems and
                            driving organizational growth across multiple domains. At DPDP Consultants, he specializes
                            in understanding intricate customer requirements, translating them into practical, scalable
                            solutions, and ensuring seamless implementation of data privacy and compliance frameworks.

                            With a strong background in product strategy, process optimization, and client engagement,
                            Osama collaborates closely with businesses to design and deploy solutions aligned with
                            India’s evolving regulatory landscape, including the Digital Personal Data Protection Act
                            (DPDPA 2023).
                            Passionate about combining technology, compliance, and business strategy, Osama focuses on
                            empowering organizations to enhance customer trust, achieve operational efficiency, and stay
                            ahead of emerging privacy challenges.
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal6.1 -->
    <!-- <div class="modal fade" id="profileModal6.1" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div>
                        <img src="assets/images/out-team/vrinda-khemariya.png"
                            alt="Founder/Principal: “Vrinda Khemariya”" class="profile-img">
                        <div class="name-container">
                            <h4 class="mt-2">Vrinda Khemariya </h4>
                            <p class="text-muted">Senior Consultant- Data Protection</p>
                        </div>
                    </div>
                    <div>
                        <h5 class="modal-title fw-bold">About</h5>
                        <p class="modal-p">
                            Vrinda Khemariya is a Corporate Lawyer and Global Data Privacy Specialist with over three
                            years of experience at the intersection of data privacy, regulatory compliance, and
                            corporate law. She specialises in GDPR, DPDP Act 2023, and CCPA — having independently led
                            and executed multiple end-to-end privacy programs for organisations across industries,
                            designing robust frameworks, conducting audits, and embedding privacy-by-design principles
                            into the core of business operations. Her practice spans the drafting and negotiation of
                            DPAs, SCCs, NDAs, MSAs, DPIAs, and PIAs, while advising global clients on cross-border data
                            transfers, regulatory strategy, and risk mitigation. Prior to her current practice, she
                            built a strong foundation in litigation and advisory work at Gandhi & Associates, handling
                            complex copyright infringement matters, M&A transactions, and intellectual property
                            disputes. A certified ISO 27701 PIMS Lead Auditor and BBA LL.B. graduate (2023), Vrinda
                            brings a rare techno-legal perspective — bridging law, business, and technology — empowering
                            organisations to achieve rigorous compliance while staying aligned with their strategic
                            ambitions in an ever-evolving privacy landscape.</p>
                    </div>
                </div>
            </div>
        </div>
    </div> -->


    <!-- Modal6.2 -->
    <!-- <div class="modal fade" id="profileModal6.2" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div>
                        <img src="assets/images/out-team/Mohini.png" alt="Founder/Principal: “Vrinda Khemariya”"
                            class="profile-img">
                        <div class="name-container">
                            <h4 class="mt-2">Mohini Singla </h4>
                            <p class="text-muted">Senior Consultant – Data Protection</p>
                        </div>
                    </div>
                    <div>
                        <h5 class="modal-title fw-bold">About</h5>
                        <p class="modal-p">
                            Mohini Singla is a Data Privacy Specialist and Legal Professional with over five years of
                            experience in privacy governance, regulatory compliance, corporate litigation, and risk
                            management. Her career uniquely bridges courtroom advocacy and boardroom advisory. </p>

                        <p class="modal-p">As a Senior Data Protection Consultant, she has independently led multiple
                            end-to-end compliance engagements under GDPR, DPDP Act 2023, and CCPA across healthcare,
                            financial services, automotive, real estate, NBFCs, and FMCG sectors. Her work covers the
                            full compliance lifecycle including DPIAs, ROPAs, DPAs, consent frameworks, vendor risk
                            assessments, privacy documentation, and privacy-by-design implementation, supported by
                            internal audits and monitoring programs. She holds the ISO/IEC 27701 PIMS Lead Auditor
                            certification.</p>

                        <p class="modal-p">Beyond privacy, she drafts and negotiates commercial agreements (MSAs, SOWs)
                            and has represented clients before the Delhi High Court, Punjab & Haryana High Court, NCLT,
                            NCLAT, and NCDRC. Early roles at HDFC ERGO, AZB & Partners, and the Ministry of Railways
                            grounded her in corporate and regulatory law. She holds a BA LLB (with distinction) from
                            Army Institute of Law, Mohali.</p>


                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <!-- Modal6 -->
    <div class="modal fade" id="profileModal6" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <!-- <h5 class="modal-title">About</h5> -->
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div>
                        <img src="assets/images/out-team/audrey1.jpg" alt="Founder/Principal: “Audrey Saralin”"
                            class="profile-img">
                        <div class="name-container">
                            <h4 class="mt-2">Audrey Saralin</h4>
                            <p class="text-muted">Senior Director – Sales</p>
                        </div>
                    </div>
                    <div>
                        <h5 class="modal-title fw-bold">About</h5>
                        <p class="modal-p">
                            Audrey is a seasoned professional with over 15 years of experience in the IT research
                            industry have developed a deep understanding of the ever-evolving landscape of technology
                            products and services. Worked with Forrester and Replicon services and have had the
                            privilege of collaborating with diverse clients, ranging from small startups to
                            multinational corporations across all industries from BFSI, Manufacturing, IT Services and
                            MARTECH.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Modal7 -->
    <div class="modal fade" id="profileModal7" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <!-- <h5 class="modal-title">About</h5> -->
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div>
                        <img src="assets/images/out-team/sunil_khanna.png" alt="Founder/Principal: “Sunil Khanna”"
                            class="profile-img">
                        <div class="name-container">
                            <h4 class="mt-2">Sunil Khanna</h4>
                            <p class="text-muted">Sr. Vice President - Product & Technology</p>
                        </div>
                    </div>
                    <div>
                        <h5 class="modal-title fw-bold">About</h5>
                        <p class="modal-p">
                            “An accomplished IT Service Delivery and Global Leader with over 30 years of experience,
                            Sunil specializes in orchestrating complex IT Application and Infrastructure operations to
                            align with global business objectives. He brings a proven commitment to operational
                            excellence, robust governance, and the leadership of high-performing, cross-functional teams
                            within highly demanding environments.
                        </p>
                        <p class="modal-p">
                            Throughout his distinguished career, Sunil has successfully blended legacy expertise with
                            forward-thinking digital strategy. His tenure includes key leadership roles at premier
                            global multinational corporations, including Standard Chartered Bank, Barclays, Intel,
                            Accenture, IBM, Steria, and HCL. In these roles, he has consistently managed large-scale
                            technology landscapes (across IT Applications and Infrastructure towers), streamlined
                            delivery lifecycles, and elevated service delivery maturity.
                            On a personal note, Sunil is married to Shalini, who is a dedicated educator. Outside of his
                            professional endeavors, he is an avid movie enthusiast and loves traveling and exploring new
                            destinations with his friends and family.”
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal121 -->
    <div class="modal fade" id="profileModal121" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <!-- <h5 class="modal-title">About</h5> -->
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div>
                        <img src="assets/images/out-team/riju_pic.jpg" alt="Riju Ghosh" class="profile-img">
                        <div class="name-container">
                            <h4 class="mt-2">Riju Ghosh</h4>
                            <p class="text-muted">Manager- Consulting and Advisory</p>
                        </div>
                    </div>
                    <div>
                        <h5 class="modal-title fw-bold">About</h5>
                        <p class="modal-p">
                            Riju is a skilled expert in data privacy and protection, with knowledge of privacy
                            governance and data privacy strategies.  He has professional experience of five years in
                            digital transformation, emerging technologies, and tech risk and compliance management. He
                            has successfully implemented data privacy processes for leading Indian companies, ensuring
                            compliance with regulatory standards and industry best practices. Riju has completed
                            multiple industry certifications such as ISO 27701 PIMS Lead Auditor and holds a B.Tech in
                            Electronics and Communications Engineering from Karunya University, Coimbatore, and an MBA
                            from Amity University, Noida. His career includes roles in Quality Assurance at Odessa Inc.,
                            Internet of Robotic Things implementation at Systemantics India, and Internet of Things
                            DevOps at CWD Innovations. He has also interned with EY as a Tech Risk Consultant and has
                            worked in HCLTech’s Business Acquisition Group. Riju's blend of technical expertise and
                            business acumen has helped his clients achieve robust compliance while balancing business
                            needs and ensuring process optimization, particularly in data privacy and digital
                            transformation.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Modal121 -->
    <div class="modal fade" id="profileModal122" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <!-- <h5 class="modal-title">About</h5> -->
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div>
                        <img src="assets/images/out-team/muskan_singhi.jpg" alt="Muskan Singhi" class="profile-img">
                        <div class="name-container">
                            <h4 class="mt-2">Muskan Singhi</h4>
                            <p class="text-muted">Senior Executive HR</p>
                        </div>
                    </div>
                    <div>
                        <h5 class="modal-title fw-bold">About</h5>
                        <p class="modal-p">
                            Muskan serves as the Senior HR Executive at Privacyium Tech Pvt. Ltd., where she
                            single-handedly manages the complete human resources function for an organization of over 80
                            employees. Her role spans the full employee lifecycle, from campus recruitment and
                            onboarding to performance management, employee relations, and policy implementation, all
                            driven through carefully structured manual processes in the absence of an HRMS.

                            She holds an MBA in Human Resources and Marketing, along with a Bachelor's degree (Honours)
                            in Psychology, both from Jamia Millia Islamia. This academic grounding in organizational
                            behavior and human psychology informs her approach to people management, particularly in
                            handling employee grievances, conducting skip-level meetings, and fostering a transparent
                            workplace culture. She brings a thoughtful, people-first approach to HR, balancing
                            operational rigor with genuine care for employee well-being, making her a steady point of
                            contact for the organization's workforce.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal77 -->
    <div class="modal fade" id="profileModal77" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div>
                        <img src="assets/images/out-team/pawan.png" alt="Sushant Aggarwal" class="profile-img">
                        <div class="name-container">
                            <h4 class="mt-2">Pawan Mishra</h4>
                            <p class="text-muted">Head of Marketing</p>
                        </div>
                    </div>
                    <div>
                        <h5 class="modal-title fw-bold">About</h5>
                        <p class="modal-p">Pawan Mishra is an accomplished professional with over 8 years of experience
                            in marketing and research, bringing a strong blend of analytical and strategic expertise to
                            the table. Over the years, he has worked closely with organizations across industries
                            ranging from emerging startups to established enterprises, helping them unlock growth
                            opportunities, strengthen market positioning, and drive data-backed decision-making. His
                            diverse exposure to domains such as IT Services, BFSI, Manufacturing, and Martech has
                            enabled him to develop a well-rounded understanding of business dynamics and evolving market
                            trends.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal8 -->
    <div class="modal fade" id="profileModal8" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <!-- <h5 class="modal-title">About</h5> -->
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div>
                        <img src="assets/images/out-team/Gargi-Rawat.webp" alt="Founder/Principal: “Gargi Rawat”"
                            class="profile-img">
                        <div class="name-container">
                            <h4 class="mt-2">Gargi Rawat</h4>
                            <p class="text-muted">Director – Human Resources</p>
                        </div>
                    </div>
                    <div>
                        <h5 class="modal-title fw-bold">About</h5>
                        <p class="modal-p">
                            With more than a decade of experience, Gargi has been a seasoned Pre-Sales professional. She
                            has worked with some of the fortune 500 organizations like W.R Grace. For the last few
                            years, as a successful entrepreneur, she has helped organizations in IT, Telecom, and
                            Services space with their human resource requirements. Gargi is also a certified interior
                            designer.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal9 -->
    <div class="modal fade" id="profileModal9" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <!-- <h5 class="modal-title">About</h5> -->
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div>
                        <img src="assets/images/out-team/dr-sanyam-agarwal.jpg"
                            alt="Founder/Principal: “Dr. Sanyam Agarwal”" class="profile-img">
                        <div class="name-container">
                            <h4 class="mt-2">Dr. Sanyam Agarwal</h4>
                            <p class="text-muted">Principal Advisor</p>
                        </div>
                    </div>
                    <div>
                        <h5 class="modal-title fw-bold">About</h5>
                        <p class="modal-p">
                            Dr. Sanyam Agarwal has more than 32 Years of experience in diversified fields of Marketing,
                            Technology , Research and Administration. He is author of many international books and
                            consulted many industries in different origins.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- <div class="modal fade" id="profileModal20" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div>
                        <img src="assets/images/out-team/jagveer.jpg"
                            alt="Senior Consultant - Implementation: “Jagveer Singh”" class="profile-img">
                        <div class="name-container">
                            <h4 class="mt-2">Jagveer Singh</h4>
                            <p class="text-muted">Senior Consultant - Implementation</p>
                        </div>
                    </div>
                    <div>
                        <h5 class="modal-title fw-bold">About</h5>
                        <p class="modal-p">
                            Jagveer is a seasoned software implementation expert with over 11 years of experience in the
                            IT industry.
                            hroughout his career, he has played pivotal roles in end-to-end product implementation,
                            delivery management, and post-production application support, ensuring seamless project
                            execution and customer satisfaction. His expertise spans across requirement analysis,
                            solution design, deployment, stakeholder coordination, and user training, enabling
                            successful technology adoption in diverse client environments.
                            In addition to technical and delivery expertise, Jagveer has valuable experience in tender
                            bidding for PSUs and government organizations, including preparation of proposals,
                            compliance documentation, and coordination with cross-functional teams to meet regulatory
                            and client requirements. His strong understanding of government procurement processes,
                            coupled with his technical background, positions him as a valuable contributor in both
                            project delivery and tender management.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div> -->


    <section id="ourteam">
        <div>

            <div class="team-texts text-center">
                <p class="text-center">Our Team</p>
                <h2>Driven by<span class="highlights"><br> expertise, powered by</span>
                    innovation</h2>
                <p>Our team ensures your data privacy journey is<br> seamless and secure.</p>
            </div>
        </div>

        <div class="container">
            <div class="row row-cols-2 row-cols-md-3 row-cols-lg-5 g-4">

                <!-- Shilendra Sharma -->
                <div class="col">
                    <div class="profile-cards">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#profileModal">
                            <img src="assets/images/out-team/shilendra-sharma.webp" alt="Shilendra Sharma"
                                class="img-fluid">
                            <div class="profile-infos">
                                <h6>Shilendra Sharma</h6>
                                <p>Founder/Principal</p>
                            </div>
                        </a>
                    </div>
                </div>

                <!-- Kumar Priyank -->
                <div class="col">
                    <div class="profile-cards">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#profileModal1">
                            <img src="assets/images/out-team/kumarpriyank.webp" alt="Kumar Priyank" class="img-fluid">
                            <div class="profile-infos">
                                <h6>Kumar Priyank</h6>
                                <p>Co-Founder & C.E.O</p>
                            </div>
                        </a>
                    </div>
                </div>

                <!-- Abhishek Vinod Singh -->
                <div class="col">
                    <div class="profile-cards">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#profileModal2">
                            <img src="assets/images/out-team/abhishek-vinod.webp" alt="Abhishek Vinod Singh"
                                class="img-fluid">
                            <div class="profile-infos">
                                <h6>Abhishek Vinod Singh</h6>
                                <p>Advisor – Technology</p>
                            </div>
                        </a>
                    </div>
                </div>

                <!-- Sunil Khanna -->
                <div class="col">
                    <div class="profile-cards">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#profileModal7">
                            <img src="assets/images/out-team/sunil_khanna.png" alt="Sunil Khanna" class="img-fluid">
                            <div class="profile-infos">
                                <h6>Sunil Khanna</h6>
                                <p>Senior Vice President – Technology & Product</p>
                            </div>
                        </a>
                    </div>
                </div>

                <!-- Bhavna Narula-->
                <div class="col">
                    <div class="profile-cards">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#profileModal3">
                            <img src="assets/images/out-team/bhavna.png" alt="Founder/Principal: “Bhavna Narula”">
                            <div class="profile-infos">
                                <h6>Bhavna Narula</h6>
                                <p>Vice President - Technology & Product</p>
                            </div>
                        </a>
                    </div>
                </div>

            </div>
        </div>


        <div class="container">
            <div class="row row-cols-2 row-cols-md-3 row-cols-lg-5 g-4">
                <!-- Jaspal Singh -->
                <div class="col">
                    <div class="profile-cards small-card">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#profileModal4">
                            <img src="assets/images/out-team/jaspal.png"
                                alt="Director and Technology Specialist: “Jaspal Singh”">
                            <div class="profile-infos">
                                <h6>Jaspal Singh</h6>
                                <p>Director - Technology & Product</p>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col">
                    <div class="profile-cards small-card">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#profileModal41">
                            <img src="assets/images/out-team/piush.png" alt="Associate Director: “Piush Kumar”">
                            <div class="profile-infos">
                                <h6>Piush Kumar</h6>
                                <p>Associate Director - Technology & Product</p>
                            </div>
                        </a>
                    </div>
                </div>

                <!-- Audrey Saralin -->
                <div class="col">
                    <div class="profile-cards small-card">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#profileModal6">
                            <img src="assets/images/out-team/audrey1.jpg" alt="Founder/Principal: “Audrey Saralin”">
                            <div class="profile-infos">
                                <h6>Audrey Saralin</h6>
                                <p>Senior Director – Sales</p>
                            </div>
                        </a>
                    </div>
                </div>
                <!-- Dr. Sanyam Agarwal -->
                <div class="col">
                    <div class="profile-cards small-card">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#profileModal9">
                            <img src="assets/images/out-team/dr-sanyam-agarwal.jpg"
                                alt="Founder/Principal: “Dr. Sanyam Agarwal”">
                            <div class="profile-infos">
                                <h6>Dr. Sanyam Agarwal</h6>
                                <p>Principal Advisor</p>
                            </div>
                        </a>
                    </div>
                </div>

                <!-- Gargi Rawat -->
                <div class="col">
                    <div class="profile-cards small-card">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#profileModal8">
                            <img src="assets/images/out-team/Gargi-Rawat.webp" alt="Founder/Principal: “Gargi Rawat”">
                            <div class="profile-infos">
                                <h6>Gargi Rawat</h6>
                                <p>Director – Human Resources</p>
                            </div>
                        </a>
                    </div>
                </div>


                <!-- Muskan Singhi-->
                <div class="col">
                    <div class="profile-cards small-card">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#profileModal122">
                            <img src="assets/images/out-team/muskan_singhi.jpg" alt="Muskan Singhi">
                            <div class="profile-infos">
                                <h6>Muskan Singhi</h6>
                                <p>Senior Executive HR</p>
                            </div>
                        </a>
                    </div>
                </div>



                <!-- Riju Ghosh-->
                <div class="col">
                    <div class="profile-cards small-card">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#profileModal121">
                            <img src="assets/images/out-team/riju_pic.jpg" alt="Riju Ghosh">
                            <div class="profile-infos">
                                <h6>Riju Ghosh</h6>
                                <p>Manager- Consulting and Advisory</p>
                            </div>
                        </a>
                    </div>
                </div>





                <!-- Pawan Mishra-->
                <div class="col">
                    <div class="profile-cards small-card">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#profileModal77">
                            <img src="assets/images/out-team/pawan.png" alt="Pawan Mishra">
                            <div class="profile-infos">
                                <h6>Pawan Mishra</h6>
                                <p>Head of Marketing</p>
                            </div>
                        </a>
                    </div>
                </div>



            </div>
        </div>


        </div>

    </section>

    <section>

    </section>

    <section style=" background-color: #02092C;" id="whatwedo">
        <div class="container py-5">
            <div class="row">
                <div class="col-md-7 text-white d-flex flex-column justify-content-center ">
                    <h3>What we do</h3>
                    <h2 class="text-white m-enabling">Enabling Secure and <br>Compliant Data Practices<br> with <span
                            class="highlight-acc">Innovative
                            Compliance<br>
                            Tools</span> and <span class="highlight-acc">Expertise</span></h2>
                    <p class="driven-m">We provide a comprehensive suite of DPDPA compliance services,<br> tailored to
                        meet the unique
                        needs
                        of your business. Partnering with<br> organizations of all sizes and industries, we take a
                        personalized <br> approach to effectively address data protection and privacy compliance <br>
                        challenges.
                    </p>
                </div>
                <div class="col-md-5">
                    <div class="accordion" id="complianceAccordion">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-number="1" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne">
                                    Compliance Assessment
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse"
                                data-bs-parent="#complianceAccordion">
                                <p class="we-conduct-pa">We conduct in-depth assessments of your data processing
                                    practices to identify potential compliance gaps.

                                </p>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-number="2" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo">
                                    Policy Development
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse"
                                data-bs-parent="#complianceAccordion">
                                <p class="we-conduct-pa">Our team assists in the development of robust data
                                    protection policies, ensuring they align with DPDP Act 2023 regulations.

                                </p>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-number="3" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree">
                                    Training and Education
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse"
                                data-bs-parent="#complianceAccordion">
                                <p class="we-conduct-pa">We offer specialized training programs designed to educate your
                                    staff on the importance of data protection and privacy, equipping them with the
                                    knowledge and skills needed for seamless DPDP Act, 2023 compliance.

                                </p>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-number="4" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFour">
                                    Data Audit
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse"
                                data-bs-parent="#complianceAccordion">
                                <p class="we-conduct-pa">Our experts conduct data audits to help you identify and
                                    manage personal data within your organisation effectively.

                                </p>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-number="5" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFive">
                                    Data Protection Impact Assessments (DPIA)
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse"
                                data-bs-parent="#complianceAccordion">
                                <p class="we-conduct-pa">We guide you in conducting DPIAs to assess and mitigate the
                                    risks associated with your data processing activities.

                                </p>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-number="6" data-bs-toggle="collapse"
                                    data-bs-target="#collapseSix">
                                    Incident Response Planning
                                </button>
                            </h2>
                            <div id="collapseSix" class="accordion-collapse collapse"
                                data-bs-parent="#complianceAccordion">
                                <p class="we-conduct-pa">We help you prepare for and respond to data breaches in
                                    accordance with DPDP Act 2023 requirements.

                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <!-- <section id="awardsandcertifications">
        <div class="container">
            <div class="certifications-container">
                <div class="certifications-text">
                    <h6>Awards & Certifications</h6>
                    <h2 class="m-recognized">Recognized for <span>excellence,</span><br> <span>certified</span> for
                        your<br> trust</h2>
                    <p>Our team is proud to hold a range of industry-<br>recognized awards and certifications that<br>
                        demonstrate our commitment to excellence in<br> data privacy and compliance.</p>
                </div>
                <div class="certificates">
                    <img style="width: 40%; height:10%;" src="./assets/images/RICL.png" alt="DPDP Consultants: Company Certificate " class="large">
                    <img src="./assets/images/image36.png" alt="DPDP Consultants: Company Certificate " class="small36">
                    <img src="./assets/images/image35.png" alt="DPDP Consultants: Company Certificate " class="large">
                    <img src="./assets/images/image42.png" alt="DPDP Consultants: Company Certificate " class="small42">
                    <img src="./assets/images/image40.png" alt="DPDP Consultants: Company Certificate " class="large40">
                    <img src="./assets/images/image37.png" alt="DPDP Consultants: Company Certificate " class="small37">
                </div>
            </div>
        </div>

    </section> -->

    <section class="mt-5">
        <div class="container">
            <div class="my-4 text-center">

                <h6>Awards & Certifications</h6>
                <div class="team-text-certificate">
                    <h4 class="seamless-compliance">Recognized for <span>excellence,</span> <span
                            class="highlights">certified
                            for
                            your<br> trust</span></h4>
                </div>
                <p>Our team is proud to hold a range of industry-recognized awards and certifications that<br>
                    demonstrate our commitment to excellence in<br> data privacy and compliance.</p>
            </div>

            <div class="custom-carousel-wrapper position-relative overflow-hidden">
                <div class="custom-carousel d-flex transition" id="customCarousel">
                    <img src="./assets/images/RICL.png" class="carousel-img"
                        alt="Information Security Management System Certificate image" />
                    <img src="./assets/images/image36.png" class="carousel-img" alt="Startup india certificate image" />
                    <img src="./assets/images/image35.png" class="carousel-img" alt="ICA India Certificate" />
                    <img src="./assets/images/image42.png" class="carousel-img" alt="BFSI Partnership Certificate" />
                    <img src="./assets/images/image40.png" class="carousel-img"
                        alt="ADIF Recogniton Certificate Icon" />
                    <img src="./assets/images/image37.png" class="carousel-img"
                        alt="Startup india recognition certificate image" />


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


    <?php include_once('footer.php'); ?>
    <!-- jquery start -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.min.js"
        integrity="sha512-ykZ1QQr0Jy/4ZkvKuqWn4iF3lqPZyij9iRv6sGqLRdTPkY69YX6+7wvVGmsdBbiIfN/8OdsI7HABjvEok6ZopQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.bundle.min.js"></script> -->
    <script src="./assets/js/Edu.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="./assets/js/script.js"></script>

</body>

</html>