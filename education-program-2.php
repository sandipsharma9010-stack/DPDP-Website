<?php session_start();
date_default_timezone_set('Asia/Kolkata');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Digital Personal Data Protection consultants | Privacy Compliance Tools</title>
    <meta name="description"
        content="Get compliant with top data privacy consulting and best Privacy Compliance Tools. Explore Compliance Management Tools for Data Protection as per Data Privacy Act India">
    <meta name="keywords"
        content="Digital Personal Data Protection consultants, DPDP Act compliance, online privacy compliance tools, consent management platform, data privacy consulting, risk assessment tools, compliance management solutions">

    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css"
        integrity="sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" /> -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/style.css">

    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <style>
    .hero-section {
        padding: 67px 36px 160px;
    }

    .servies {
        line-height: 45px;
        letter-spacing: 2px;
    }

    .btns-primary {
        padding: 8px 54px;
    }

    .cal-number-img {
        width: 50%;
        max-width: 500px;
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
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 10px 15px;
    }

    .benefit-icon {
        width: 50px;
        height: 50px;
        margin-bottom: 15px;
    }

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
        max-width: 67%;
        height: auto;
        margin-bottom: 1rem;
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
        left: 28%;
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
    }

    .sticky-img {
        position: fixed;
        top: 50%;
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
        top: 5px;
        left: 5px;
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
        margin-bottom: 3rem;
    }

    .section-subtitle {
        font-size: 0.9rem;
        color: #c0c0c0;
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
        margin-top: 2rem;
    }

    .section-card {
        background-color: #060f3b;
        border: none;
        padding: 2rem 1rem;
        border-radius: 1rem;
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.4);
        color: white;
        font-weight: 600;
        min-height: 200px;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
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
            font-size: 1rem;
            padding: 1rem;
        }

        .section-card {
            padding: 1.5rem 1rem;
        }
    }


    @media (max-width: 768px) {
        .header h2 {
            font-size: 1.5rem;
        }

        .card-box {
            padding: 1.5rem 1rem;
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
            padding: 3px 13px 148px;
        }

        .cal-number-img {
            margin-top: 20px;
            width: 100%;

        }

        .number-overlay {
            gap: 14px;
            top: 51%;
            left: 8%;
        }

        .online-cerifi {
            text-align: center;
            font-size: 2rem !important;
            font-weight: 600;
            line-height: 35px;
            letter-spacing: 3px;
        }

        .smalls {
            text-align: center !important;
        }
    }

    @media (min-width: 300px) {
        .number-overlay {
            top: 50%;
            left: 8%;
            gap: 10px;

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
    </style>

</head>

<body>

    <?php include_once('cookie_consent.php'); ?>
    <section class="blog" style="background-color: #02092c;">
        <?php include_once('nav.php'); ?>
        <div class="container hero-section text-white">
            <div class="row">
                <div class="col-md-6 order-md-1 text-center text-md-start">
                    <h1 class="servies empowering">Get DPDP Act-Ready with the Experts Behind <span
                            class="data-pr">India’s Biggest Brands</span>
                    </h1>
                    <p class="m-data-home">Join a career-defining compliance program built by the consultants who’ve
                        implemented DPDP for industry giants like Tata Motors, Bajaj Finserv, Carl Zeiss, and Ashok
                        Leyland. Get certified, gain real-world insights, and access live project opportunities — all
                        while staying ahead in India’s data privacy landscape.
                    </p>
                    <div class="mt-4 d-flex flex-column flex-sm-row justify-content-center justify-content-md-start">
                        <a href="#paynow" class="btn btn-primary Get-btn btns-primary">Enroll Now</a>
                    </div>
                </div>
                <div class="col-md-6 order-md-2 text-center position-relative">
                    <img class="cal-number-img" src="./assets/images/education-pro/cal-number.png" alt="DPDPA Banking">

                    <div class="number-overlay">
                        <span class="number-box">10000</span>
                        <!-- <span class="number-box">2</span>
                        <span class="number-box">3</span>
                        <span class="number-box">4</span>
                        <span class="number-box">5</span> -->
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container benefits-box">
            <div class="benefits-title">Enrollment Benefits:</div>
            <div class="row text-center justify-content-center gap-5">
                <div class="col-6 col-sm-4 col-md-2 benefit-item">
                    <img src="assets/images/education-pro/245.png" alt="Boost Icon" class="benefit-icon">
                    <div class="benefit-text">Boost Your<br> Career Profile</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2 benefit-item">
                    <img src="assets/images/education-pro/246.png" alt="Certified Icon" class="benefit-icon">
                    <div class="benefit-text">Certified by Industry Experts</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2 benefit-item">
                    <img src="assets/images/education-pro/247.png" alt="Case Studies Icon" class="benefit-icon">
                    <div class="benefit-text">Case studies on real-world execution</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2 benefit-item">
                    <img src="assets/images/education-pro/248.png" alt="Network Icon" class="benefit-icon">
                    <div class="benefit-text">Network with a Thriving Community</div>
                </div>
                <div class="col-6 col-sm-4 col-md-2 benefit-item">
                    <img src="assets/images/education-pro/249.png" alt="Guidance Icon" class="benefit-icon">
                    <div class="benefit-text">Guidance on Implementation</div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container course-container mt-5">
            <div class="row">
                <!-- Text Content -->
                <div class="col-lg-7 col-md-12 mt-5">
                    <div class="smalls">
                        <p class="text-muted ">About the course</p>
                    </div>
                    <h4 class="online-cerifi">Online Certification Course on DPDP Act, 2023:<br>
                        <span class="data-pr">Understanding the Law and its Techno-Legal<br> Implementation in
                            Organisations’</span>
                    </h4>
                    <p class="mb-1">
                        Designed for law students, business students, and young
                        professionals,<br>
                        this course is your gateway to a career in Data Privacy. Created by<br> experienced
                        <span class="fw-bold">Techno-legal consultants</span> at DPDP Consultants, it covers<br> the
                        fundamentals of the DPDP Act 2023 and practical steps for<br> achieving compliance.
                    </p>
                </div>

                <!-- Image and Price -->
                <div class="col-lg-5 col-md-12">
                    <a href="#"><img src="./assets/images/education-pro/238.png" alt="Course Visual"
                            class="course-img mb-3"></a>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 text-end">
                    <div class="price-tag ">
                        <a href="#paynow"><img src="./assets/images/education-pro/price.png" alt=""
                                class="price-img sticky-img"></a>
                    </div>
                </div>

            </div>


    </section>

    <section class="home-bg">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-md-6 left-content-one-step">
                    <p>How will the Course help you?</p>
                    <h2 class="future-proof-m">Empowering them to<br> confidently pursue careers<br> in the <span
                            class="highlight-one-steps">fast-growing field of
                            <br>Data Privacy</span></h2>
                    <p>This course gives students practical DPDP Act<br> skills and expert insights to launch a career
                        in<br>
                        Data Privacy
                    </p>
                    <a href="contact.php?act=schedule" class="btn btn-custom-one-step">Schedule a call</a>
                </div>
                <div class="col-md-6">
                    <div class="section-box-one-step">
                        <img src="assets/images/education-pro/250.png" class="icon-one-step"
                            alt="Key benefits of gap assessment review services icon: Comprehensive Data Processing Evaluation">
                        <div>
                            <h5 class="fw-bold">Master the Fundamentals</h5>
                            <p>You will learn the essential skills of understanding and interpreting data privacy
                                regulations, which are the foundation of data protection practices.
                            </p>
                        </div>
                    </div>
                    <div class="section-box-one-step">
                        <img src="assets/images/education-pro/251.png" class="icon-one-step"
                            alt="Key benefits of gap assessment review services icon: Gap Analysis and Risk Assessment">
                        <div>
                            <h5 class="fw-bold">Gather Industry Insights</h5>
                            <p>Stay ahead of your peers and know the latest happenings on DPDP Act 2023 and its
                                execution
                            </p>
                        </div>
                    </div>
                    <div class="section-box-one-step">
                        <img src="assets/images/education-pro/252.png" class="icon-one-step"
                            alt="Key benefits of gap assessment review services icon: Strategic Implementation Roadmap">
                        <div>
                            <h5 class="fw-bold">Impress Your Supervisors</h5>
                            <p>Become your senior consultant's favourite intern/junior by delivering well-prepared and
                                insightful documentation</p>
                        </div>
                    </div>
                    <div class="section-box-one-step">
                        <img src="assets/images/education-pro/253.png" class="icon-one-step"
                            alt="Key benefits of gap assessment review services icon: Expert Regulatory Guidance">
                        <div class="one-step-h-p">
                            <h5 class="fw-bold">Understand Compliance Processes</h5>
                            <p>Gain a thorough understanding of data protection compliance procedures and best practices
                            </p>
                        </div>
                    </div>
                    <div class="section-box-one-step">
                        <img src="assets/images/education-pro/254.png" class="icon-one-step"
                            alt="Key benefits of gap assessment review services icon: Proactive Risk Mitigation ">
                        <div>
                            <h5 class="fw-bold">Support Organizations in DPDPA Compliance</h5>
                            <p> Become extremely useful to clients (organisations) by ensuring your client meets all
                                requirements of DPDP Act, 2023
                            </p>
                        </div>
                    </div>

                    <div class="section-box-one-step">
                        <img src="assets/images/education-pro/255.png" class="icon-one-step"
                            alt="Key benefits of gap assessment review services icon: Ongoing Support ">
                        <div>
                            <h5 class="fw-bold">Earn Trust Quickly</h5>
                            <p> Be deemed fit as a team player, quickly gaining the trust of your seniors and getting
                                assigned meaningful work
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>

        <div class="container py-4">
            <div class="header">
                <p>Course Offerings</p>
                <h2>Everything You Need to Launch Your<br> Career in <span style="color:#3294CD;">Data Privacy
                        Law</span></h2>
            </div>

            <!-- Section 1 -->
            <div class="card-box">
                <div class="icon-number">1</div>
                <!-- <div class="share">🔗</div> -->
                <div class="row align-items-center">
                    <div class="col-md-5 mb-3 mb-md-0 text-center">
                        <img src="assets/images/education-pro/online-learning.png" alt="Online Learning Module"
                            class="card-img">
                    </div>
                    <div class="col-md-7">
                        <h4>Online Learning Module</h4>
                        <ul>
                            <li><strong>Comprehensive Video Material:</strong> Step-by-step breakdown of the DPDPA 2023
                                and its applicability.</li>
                            <li><strong>Self-Paced Learning:</strong> Access anytime, anywhere—learn at your own
                                convenience.
                            </li>
                            <li><strong>Assessment & Quizzes:</strong> Test your knowledge after the module.</li>
                            <li><strong>Completion Certificate:</strong> Proof of your learning and skill development.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Section 2 -->
            <div class="card-box">
                <div class="icon-number">2</div>
                <!-- <div class="share">🔗</div> -->
                <div class="row align-items-center">
                    <div class="col-md-5 mb-3 mb-md-0 text-center">
                        <img src="assets/images/education-pro/internship-program.png" alt="Internship Program"
                            class="card-img">
                    </div>
                    <div class="col-md-7">
                        <h4>Internship Program</h4>
                        <ul>
                            <li><strong>Hands-on Projects:</strong> Work on real-world DPDP Act compliance assignments.
                            </li>
                            <li><strong>Mentorship:</strong> Guided by experienced legal and data protection
                                consultants.</li>
                            <li><strong>Policy Drafting:</strong> Learn to create privacy policies, consent forms, and
                                data processing agreements.</li>
                            <li><strong>Tool Training:</strong> Get exposure to privacy automation tools and frameworks.
                            </li>
                            <li><strong>Career Support:</strong> Resume reviews, LinkedIn optimization, and mock
                                interviews.
                            </li>
                            <li><strong>Certificate of Completion:</strong> Recognized by industry experts.</li>
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
                        <h4>Course Material</h4>
                        <ul>
                            <li><strong>In-Depth Guide:</strong> A comprehensive, easy-to-understand breakdown of the
                                DPDP Act 2023.</li>
                            <li><strong>Clause-by-Clause Analysis:</strong> Simplified explanations of key provisions
                                and compliance requirements.</li>
                            <li><strong>Practical Insights:</strong> Real-world interpretations and industry-relevant
                                applications.</li>
                            <li><strong>Reference Templates:</strong> Includes sample policies, notices, and compliance
                                checklists.</li>
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
                        <h4>Exclusive Webinar Invitations</h4>
                        <ul>
                            <li><strong>Live Sessions with Experts:</strong> Interact directly with leading data privacy
                                professionals and legal advisors.</li>
                            <li><strong>Deep Dives into Hot Topics:</strong> Explore key issues like cross-border data
                                flow, consent management, and compliance tech.</li>
                            <li><strong>Real-Time Q&A:</strong> Get your questions answered live by practitioners
                                working in the field.</li>
                            <li><strong>Career Guidance:</strong> Insights on roles, skills, and opportunities in the
                                data privacy landscape.</li>
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
                <p class="section-subtitle">Who is this course for?</p>
                <div class="section-highlight text-white">
                    Your trusted partner in <span>Navigating Data<br> Privacy</span> with expertise and precision
                </div>
            </div>

            <div class="row section-cards g-4 justify-content-center">
                <div class="col-12 col-sm-6 col-md-4 col-lg-2">
                    <div class="section-card">
                        <img src="assets/images/education-pro/256.png" alt="Icon">
                        <p class="text-center">Compliance Professionals</p>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-2">
                    <div class="section-card">
                        <img src="assets/images/education-pro/257.png" alt="Icon">
                        <p class="text-center">Legal and Risk Teams</p>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-2">
                    <div class="section-card">
                        <img src="assets/images/education-pro/258.png" alt="Icon">
                        <p class="text-center"> Cybersecurity Professionals</p>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-2">
                    <div class="section-card">
                        <img src="assets/images/education-pro/259.png" alt="Icon">
                        <p class="text-center">Privacy Enthusiasts & Students</p>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-2">
                    <div class="section-card">
                        <img src="assets/images/education-pro/260.png" alt="Icon">
                        <p class="text-center">Startups and SMEs prepping for DPDPA</p>
                    </div>
                </div>
            </div>
        </div>
    </section>





    <?php include_once('device-type.php'); ?>
    <?php include_once('contact-getapi.php'); ?>



    <!-- Modal -->
    <div class="modal fade" id="consentModal" tabindex="-1" aria-labelledby="consentModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered">
            <!-- Made modal extra large and centered -->
            <div class="modal-content">
                <div class="modal-header d-flex justify-content-between align-items-center w-100">
                    <h5 class="modal-title" id="consentModalLabel">
                        <!-- Consent Notice -->
                    </h5>
                    <div class="d-flex align-items-center">
                        <span class="me-2">Language:</span>
                        <select id="languageSelect" name="languageSelect"
                            class="form-select form-select-sm w-auto btn-primary text-white language-dropdown">
                            <?php foreach($decoded_response['data'] as $key => $value) {
                                echo '<option value="' . $key . '">' . $key . '</option>'; } ?>

                        </select>
                    </div>
                </div>
                <div class="modal-body">
                    <p>
                        <?php foreach($decoded_response['data'] as $key => $value) {
                            echo '<div id="' . $key . '" class="language-content"><p>' . $value . '</p></div>'; } ?>
                    </p>
                </div>
                <div class="modal-footer d-flex justify-content-end">
                    <button type="submit" class="btn btn-agree" id="submitFormBtn">Agree</button>
                    <button type="button" class="btn btn-close-custom" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>



    <script>
    $(document).ready(function() {
        $("#languageSelect").change(function() {
            var selectedLang = $(this).val();
            $(".language-content").hide(); // Hide all divs
            $("#" + selectedLang).show(); // Show selected language div
        });

        // Set default language to English
        $("#languageSelect").val("English").change();
    });
    </script>



    <div name="divotp" id="divotp" href="divotp">
        <a id="#ahrefotp" name="#ahrefotp" href="#ahrefotp"> &nbsp; </a>
    </div>


<?php

/* * */

// print_r($_POST);

$messagerror = "";
$language = @trim(stripslashes($_POST['language']));

$fname = @trim(stripslashes($_POST['fname']));
$lname = @trim(stripslashes($_POST['lname']));
$name = $fname . ' ' . $lname;

$email = @trim(stripslashes($_POST['email']));
$phone = @trim(stripslashes($_POST['phone']));
$subject = @trim(stripslashes($_POST['subject']));
$message = @trim(stripslashes($_POST['message']));
$reqsrc = @trim(stripslashes($_POST['reqsrc']));

$otp = @trim(stripslashes($_POST['otp']));

$userAgent = $_SERVER['HTTP_USER_AGENT'];
$ipAddress = $_SERVER['REMOTE_ADDR'];
$httpReferer = $_SERVER['HTTP_REFERER'];

if($POST['schedulecall']=='TRUE') { $date = @trim(stripslashes($_POST['date'])); }
$email_from = $email;

/* * */


if($_POST) {

    //print_r($_POST);
    //exit(0);

    include_once('contact-api-3.php');

    if($otp) {

        include_once('contact-db.php');

        include_once('contact-mail.php');

        echo"<script>document.location.href=\"thanks.php?act=$act\";</script>";

    }

}

/* * */

?>


    <!-- contact form start here -->
    <section id="paynow">
        <div class="container text-center mt-4">
            <p class="text-uppercase ">OLOP</p>
            <h5 class="header-contact">
                <span class="highlight-blue">ONE license ONE data principal</span>, unlike
                <br>
                <span class="">other providers that charge per consent!</span>
            </h5>
        </div>

        <div class="container enroll-container mt-4">
            <div class="row g-4 align-items-center">
                <!-- Left: Image -->
                <div class="col-md-5 text-center">
                    <img src="assets/images/education-pro/contact-img.png" alt="The Time is Now" class="img-fluid">
                </div>



                <!-- Right: Form -->
                <div class="col-md-7">




                    <form xclass="needs-validation" action="#divotp" method="post" id="mainForm" xnovalidate>
                        <input type="text" name="hiddenLanguage" id="hiddenLanguage" value="<?php echo $language; ?>"
                            style="display:none" />
                        <input type="text" name="reqsrc" id="reqsrc" value="contact" style="display:none" />
                        <input type="text" name="reqtitle" id="reqtitle" style="display:none" />
                        <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>" />
                        <input type="hidden" name="_token" value="kWtDwQjq9Zf1BpylY4ckP9J8d7Pv8y8yXrynuMlh" />
                        <input type="text" name="act" value="<?=$act;?>" style="display:none" />




                        <h5 class="fw-bold mb-4">Get Enrolled</h5>

                        <div class="row g-3">

                            <div class="col-md-12">
                                <label class="form-label">Full Name</label>
                                <input type="text" class="form-control" placeholder="Full Name" name="name"
                                    value="<?php echo $name; ?>" required />
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Email</label>
                                <input type="email" class="form-control" placeholder="Email" name="email"
                                    value="<?php echo strtolower($email); ?>"
                                    oninput="this.value = this.value.toLowerCase()" required>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Contact</label>
                                <input type="text" class="form-control" placeholder="Contact" name="phone"
                                    value="<?php echo $phone; ?>" required />
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">>Sponsor/Referer/College Name</label>
                                <input type="text" class="form-control" placeholder="referer" name="referer"
                                    value="<?php echo $referer; ?>" />
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Coupon/Referel code</label>
                                <input type="text" class="form-control" placeholder="coupon" name="coupon"
                                    value="<?php echo $coupon; ?>" />
                            </div>









                            <?php if($_POST) { ?>

                            <div class="mt-4">
                                <label for="totp" class="form-label" id="lotp">Enter your OTP shared over Email </label>
                                <input type="text" class="form-control" placeholder="OTP" name="otp" id="totp"
                                    style="border: 2px solid #2196F3;background-color: #E3F2FD;transition: 0.3s;"
                                    value="<?php echo $totp; ?>" required />
                            </div>

                            <div class="mt-4">
                                <input type="button" name="proceed" id="btnproceed" value="PROCEED"
                                    class="btn btn-submit" xdata-bs-toggle="modal" xdata-bs-target="#consentModal" />
                            </div>

                            <input type="submit" name="submit" value="Submit" style="display:none" id="submitbtn" />

                            <?php } else { ?>

                            <div class="mt-4">
                                <input type="submit" name="submit" id="submitbtn" value="Register Now"
                                    class="btn btn-submit" />
                            </div>

                            <?php } ?>







                        </div>

                    </form>

                </div>

            </div>
        </div>
    </section>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="./assets/js/script.js"></script>

    <?php include_once('footer.php'); ?>

</body>

</html>