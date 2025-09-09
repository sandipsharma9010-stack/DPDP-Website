<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DPDP Website</title>

    <!-- Bootstrap 5.3.3 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css"
        crossorigin="anonymous">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="./assets/css/style.css">

    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

    <style>
    .news-section {
        padding: 40px 0;
        background-color: #f8f9fa;
    }

    .section-title {
        text-align: center;
        margin-bottom: 20px;
    }

    .owl-carousel .item img {
        max-width: 100%;
        max-height: 200px;
        object-fit: contain;
        border-radius: 10px;
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
    }

    .owl-prev,
    .owl-next {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        background: rgba(0, 0, 0, 0.3);
        color: white;
        border: none;
        padding: 10px 15px;
        font-size: 20px;
        cursor: pointer;
        border-radius: 50%;
    }

    .owl-prev {
        left: -30px;
    }

    .owl-next {
        right: -30px;
    }

    .owl-prev:hover,
    .owl-next:hover {
        background: rgba(0, 0, 0, 0.7);
    }


    .text-trust {
        color: #3294CD;
        letter-spacing: 2px;
    }

    .text-Success {
        color: #3294CD;
    }

    .text-Testim {
        margin-top: 100px;
        /* display: flex;
        justify-content: center;
        align-items: center; */
    }

    .text-monials {
        letter-spacing: 2px;
    }


    .testimonial-card {
        background: #fff;
        border-radius: 10px;
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        padding: 20px;
        max-width: 400px;
    }

    .testimonial-card img {
        width: 60px;
        height: 60px;
        border-radius: 50%;
    }

    .testimonial-card h5 {
        font-weight: bold;
    }

    .testimonial-card .company {
        font-weight: bold;
        color: #007bff;
    }

    .stars {
        color: gold;
    }

    .text-Why {
        margin-top: 80px;
        letter-spacing: 2px;

    }

    .text-Why h3 {
        line-height: 40px;
    }

    .text-Navigating {
        color: #3294CD;
    }

    .card-custom {
        border: none;
        color: white;
        border-radius: 10px;
        /* overflow: hidden; */
        display: flex;
        align-items: center;
    }

    .icon-box {
        flex: 0 0 40%;
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100%;
    }

    .icon-box img {
        width: 70%;
        height: 100%;
        object-fit: cover;
        background-color: #3294CD;
        padding: 15px;
        border-radius: 15px;
    }


    .content {
        flex: 1;
        padding: 15px;
    }


    /* out team section start here */

    .team-container {
        background-color: white;
        border-radius: 10px;
        padding: 40px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .team-member {
        position: relative;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
    }

    .team-member img {
        width: 100%;
        min-height: 50vh;
        object-fit: cover;
        text-align: center;
    }

    .team-member .info {
        position: absolute;
        bottom: 0;
        background: rgba(0, 0, 0, 0.6);
        color: white;
        width: 100%;
        text-align: center;
        padding: 5px;
        font-size: 14px;
    }

    .text-section {
        text-align: right;
    }

    .text-section h2 {
        font-size: 28px;
        font-weight: bold;
    }

    .text-section h2 span {
        color: #007bff;
    }

    .text-section p {
        color: #555;
    }
    </style>
</head>

<body>


    <section class="home-bg">
        <?php include_once('navbar.php');?>
        <div class="container home-pos">
            <div class="row">
                <div class="col-sm-6">
                    <div class="home-h">
                        <h1 class="fw-bold">Customized compliance<br> and <span class="home-h1">technology
                                consulting</span><br> centered for you</h1>
                        <p class="home-pa">Tailored digital personal data compliance strategies to empower your<br>
                            organization in
                            understanding, managing, and mitigating data protection risks.</p>
                        <button class="Sign-btn btn btn-outline-primary">Sign up for Newsletter</button>
                        <button class="Get-btn btn btn-primary mx-4">Get in touch</button>

                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="home-img">
                        <img class="" src="./assets/images/DPDPA-Banking.gif" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="we-help">
            <div class="container">
                <div class="row">
                    <div class="we-pos">
                        <div class="col-sm-4 hlp-para">
                            <p class="we-para">We help real people to do more business</p>
                        </div>
                        <div class="col-sm-2 hlp-para">
                            <div class="">
                                <img class="img-fluids" src="./assets/SVG-Icons/svg_381153.svg" alt="">
                                <p>100+</p>
                                <p>Privacy Compliance<br> Globally</p>
                            </div>
                        </div>
                        <div class="col-sm-2 hlp-para">
                            <div class="">
                                <img class="img-fluids" src="./assets/SVG-Icons/svg_453458.svg" alt="">
                                <p>500+</p>
                                <p>Total <br>Assessments</p>
                            </div>
                        </div>
                        <div class="col-sm-2 hlp-para">
                            <div class="">
                                <img class="img-fluids" src="./assets/SVG-Icons/svg_391889.svg" alt="">
                                <p>50+</p>
                                <p>Expert Privacy<br> Advisors</p>
                            </div>
                        </div>
                        <div class="col-sm-2 hlp-para">
                            <div class="">
                                <img class="img-fluids" src="./assets/SVG-Icons/svg_372123.svg" alt="">
                                <p>100%</p>
                                <p>Automated Privacy Tools</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h6 class="service-h">Our Services</h6>
                    <p class="service-para">Empowering businesses to <br> navigate <span class="data-pr">Data Privacy,
                            Protection,<br> and Compliance</span> with ease
                        and<br>
                        confidence</p>
                    <a class="learn-a" href="">Learn more<img class="learn-img"
                            src="./assets/SVG-Icons/svg_304674.svg"></a>
                </div>
                <div class="col-sm-6">
                    <div class="service-card">
                        <span class="service-icon"><img src="./assets/SVG-Icons/21.svg"></span>
                        <span>DPDPA Act Readiness Review</span>
                        <button class="btn-arrow"><img src="./assets/SVG-Icons/svg_315634.svg"></button>
                    </div>

                    <div class="service-card active">
                        <span class="service-icon"><img src="./assets/SVG-Icons/22.svg"></span>
                        <div>
                            <h5>DPDPA Act Compliance Assistance</h5>
                            <p class="mb-0">Compliance with the DPDPA Act, guiding your business through every step to
                                safeguard data privacy and protect your operations.</p>
                        </div>
                        <button class="btn-arrow"><img src="./assets/SVG-Icons/svg_315634.svg"></button>
                    </div>

                    <div class="service-card">
                        <span class="service-icon"><img src="./assets/SVG-Icons/25.svg"></span>
                        <span>DPDPA Act Protection Officer</span>
                        <button class="btn-arrow"><img src="./assets/SVG-Icons/svg_315634.svg"></button>
                    </div>

                    <div class="service-card">
                        <span class="service-icon"><img src="./assets/SVG-Icons/24.svg"></span>
                        <span>DPDPA Act Training</span>
                        <button class="btn-arrow"><img src="./assets/SVG-Icons/svg_315634.svg"></button>
                    </div>

                    <div class="service-card">
                        <span class="service-icon"><img src="./assets/SVG-Icons/23.svg"></span>
                        <span>Contract Review</span>
                        <button class="btn-arrow"><img src="./assets/SVG-Icons/svg_315634.svg"></button>
                    </div>
                </div>

            </div>
        </div>
        </div>
    </section>

    <section class="home-bg">
        <div class="container py-5">
            <h6 class="text-center our-tools">Our Tools</h6>
            <h2 class="text-center Unleash">Unleash your potential with our <span
                    class="text-Innovative">Innovative</span><br> and
                <span class="text-Convenient">Convenient</span> tools
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
                        <li><button class="tab-button" onclick="showContent(4)"><span class="number">5</span><i
                                    class="fas fa-exclamation-triangle"></i> Data Protection Impact Assessment</button>
                        </li>
                    </ol>
                </div>
                <div class="col-md-8">
                    <div id="content" class="tab-content">
                        <h4>DPCM</h4>
                        <p>Pursuant to section 4(1) of the DPDP Act 23, every business needs to ensure that they have a
                            proper legal basis to process personal data.</p>
                        <p>Consent is the primary legal basis lying at the core of any lawful data processing (1a).</p>
                        <h5>Key Benefits:</h5>
                        <ul>
                            <li>Acquire Live Consent</li>
                            <li>Streamlined Consent Collection</li>
                            <li>Compliance for Historic Data</li>
                            <li>Fully Customizable</li>
                            <li>Manage Personal Data Silos</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="news-section">
        <div class="container">
            <div class="section-title">
                <h5>Our Events</h5>
                <h2>Events and Collaboration</h2>
            </div>

            <!-- Owl Carousel -->
            <div class="owl-carousel owl-theme">
                <div class="item"><img
                        src="assets/newImages/ADIF-Alliance-Membership-form-for-Organizations_Startups_page-0001.jpg"
                        alt="Event 1"></div>
                <div class="item"><img src="assets/newImages/MembershipCertificate_page-0001.jpg" alt="Event 2"></div>
                <div class="item"><img src="assets/images/ISO.png" alt="Event 3"></div>
                <div class="item"><img src="assets/newImages/start_certificate.png" alt="Event 4"></div>
                <div class="item"><img src="assets/newImages/ICAI_2024-25-1-1536x1085.jpg" alt="Event 5"></div>
                <div class="item"><img src="assets/newImages/Document-2-400x281-01.jpg" alt="Event 6"></div>
                <div class="item"><img src="assets/newImages/Document-Resize-400x281_page-0001.jpg" alt="Event 7"></div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="text-Testim">
                        <h5 class="text-monials">Testimonials</h5>
                        <h2>Voices of<br> <span class="text-Success">Success, Stories</span><br> that Inspire</h2>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4">
                    <div class="testimonial-card d-flex align-items-start">
                        <img src="https://via.placeholder.com/60" alt="User">
                        <div class="ms-3">
                            <h5>Pawan Mishra</h5>
                            <p class="company">DPDP Consultants</p>
                            <p class="text-muted">Manager - Marketing & Growth</p>
                            <div class="stars">★★★★★</div>
                            <p class="mt-2">"Working with this team has been a game-changer for our business. Their
                                expertise in DPDP compliance, coupled with their powerful tools, made the entire process
                                smooth and stress-free. We feel
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 my-2">
                    <div class="testimonial-card d-flex align-items-start">
                        <img src="https://via.placeholder.com/60" alt="User">
                        <div class="ms-3">
                            <h5>Pawan Mishra</h5>
                            <p class="company">DPDP Consultants</p>
                            <p class="text-muted">Manager - Marketing & Growth</p>
                            <div class="stars">★★★★★</div>
                            <p class="">"Working with this team has been a game-changer for our business. Their
                                expertise in DPDP compliance, coupled with their powerful tools, made the entire process
                                smooth and stress-free.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">

                </div>
                <div class="col-sm-4">
                    <div class="testimonial-card d-flex align-items-start">
                        <img src="https://via.placeholder.com/60" alt="User">
                        <div class="ms-3">
                            <h5>Pawan Mishra</h5>
                            <p class="company">DPDP Consultants</p>
                            <p class="text-muted">Manager - Marketing & Growth</p>
                            <div class="stars">★★★★★</div>
                            <p class="">"Working with this team has been a game-changer for our business. Their
                                expertise in DPDP compliance, coupled with their powerful tools, made the entire process
                                smooth and stress-free.
                            </p>
                        </div>
                    </div>

                </div>
                <div class="col-sm-4">
                    <div class="testimonial-card d-flex align-items-start">
                        <img src="https://via.placeholder.com/60" alt="User">
                        <div class="ms-3">
                            <h5>Pawan Mishra</h5>
                            <p class="company">DPDP Consultants</p>
                            <p class="text-muted">Manager - Marketing & Growth</p>
                            <div class="stars">★★★★★</div>
                            <p class="">"Working with this team has been a game-changer for our business. Their
                                expertise in DPDP compliance, coupled with their powerful tools, made the entire process
                                smooth and stress-free.
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="home-bg mt-5">
        <div class="container">
            <div class="row">
                <div class="text-Why text-center">
                    <h6>Why Us?</h6>
                    <h3>Your trusted partner in <span class="text-Navigating">Navigating Data<br> Privacy</span> with
                        expertise and precision</h3>
                </div>
                <div class="col-sm-4">
                    <div class="card-custom">
                        <div class="icon-box">
                            <img src="./assets/images/Clip-path-group.png" alt="Expertise">
                        </div>
                        <div class="content">
                            <h5>Expertise</h5>
                            <p>In-depth knowledge of DPDP compliance regulations and industry best practices</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card-custom">
                        <div class="icon-box">
                            <img src="./assets/SVG-Icons/15.svg" alt="Proprietary Tools">
                        </div>
                        <div class="content">
                            <h5>Proprietary Tools</h5>
                            <p>Access to innovative, tailored tools that streamline compliance management and reduce
                                risks</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card-custom">
                        <div class="icon-box">
                            <img src="./assets/SVG-Icons/15.svg" alt="Customized Solutions">
                        </div>
                        <div class="content">
                            <h5>Customized Solutions</h5>
                            <p>Personalized consulting services to address your unique business needs</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card-custom">
                        <div class="icon-box">
                            <img src="./assets/SVG-Icons/15.svg" alt="Efficient Process">
                        </div>
                        <div class="content">
                            <h5>Efficient Process</h5>
                            <p>Fast, reliable compliance solutions that save you time and resources</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card-custom">
                        <div class="icon-box">
                            <img src="./assets/SVG-Icons/15.svg" alt="End-to-End Support">
                        </div>
                        <div class="content">
                            <h5>End-to-End Support</h5>
                            <p>Ongoing assistance to ensure continuous compliance and privacy protection</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card-custom">
                        <div class="icon-box">
                            <img src="./assets/SVG-Icons/15.svg" alt="Proven Track Record">
                        </div>
                        <div class="content">
                            <h5>Proven Track Record</h5>
                            <p>Successful partnerships with businesses across industries, ensuring optimal outcomes</p>
                        </div>
                    </div>
                </div>
            </div>


            <div class="container team-container my-5 p-5">
            <div class="row align-items-center">
                <div class="col-sm-3">
                    <div class="team-member">
                        <img src="./assets/Team-Images/Kumar-Priyank.png" alt="Kumar Priyank" class="">
                        <div class="info">
                            <strong>Kumar Priyank</strong><br>
                            CEO & Chief Privacy Officer
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="team-member2">
                        <img src="./assets/Team-Images/Kumar-Priyank.png" alt="Gargi Rawat" class="img-fluid">
                        <div class="info">
                            <strong>Gargi Rawat</strong><br>
                            Director of HR
                        </div>
                    </div>
                </div>
                <div class="col-md-6 text-section">
                    <p class="text-uppercase text-muted">Our Team</p>
                    <h2>Driven <span>by expertise</span>, powered <span>by innovation</span></h2>
                    <p class="text-muted">Our team ensures your data privacy journey is seamless and secure.</p>
                </div>
            </div>
        </div>



    </section>



    <script>
    $(document).ready(function() {
        console.log("jQuery and Owl Carousel loaded!");

        $(".owl-carousel").owlCarousel({
            loop: true,
            margin: 20,
            nav: true,
            autoplay: true,
            autoplayTimeout: 2000,
            autoplayHoverPause: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 5
                }
            },
            navText: ["<", ">"]
        });

        console.log("Owl Carousel initialized!");
    });






    const contents = [
        `<h4>DPCM</h4><p>Pursuant to section 4(1) of the DPDP Act 23...</p><ul><li>Acquire Live Consent</li><li>Streamlined Consent Collection</li></ul>`,
        `<h4>Grievance Redressal</h4><p>Handling complaints efficiently...</p>`,
        `<h4>Awareness Program</h4><p>Educating on data protection...</p>`,
        `<h4>Impact Assessment</h4><p>Evaluating risks in data processing...</p>`,
        `<h4>Repeated Assessment</h4><p>Ensuring ongoing compliance...</p>`
    ];

    function showContent(index) {
        document.getElementById('content').innerHTML = contents[index];
        document.querySelectorAll('.tab-button').forEach((btn, i) => {
            btn.classList.toggle('active', i === index);
        });
    }

    // swiper js start here
    </script>


    <!-- jQuery 3.7.1 -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.bundle.min.js"
        crossorigin="anonymous"></script>

    <!-- Owl Carousel JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <section>
        <div class="we-help">
            <div class="container">
                <div class="row">
                    <div class="we-pos">
                        <div class="col-sm-4 hlp-para">
                            <p class="we-para">We help real people to do more business</p>
                        </div>
                        <div class="col-sm-2 hlp-para">
                            <div class="">
                                <img class="img-fluids" src="./assets/SVG-Icons/svg_381153.svg" alt="">
                                <p>100+</p>
                                <p>Privacy Compliance<br> Globally</p>
                            </div>
                        </div>
                        <div class="col-sm-2 hlp-para">
                            <div class="">
                                <img class="img-fluids" src="./assets/SVG-Icons/svg_453458.svg" alt="">
                                <p>500+</p>
                                <p>Total <br>Assessments</p>
                            </div>
                        </div>
                        <div class="col-sm-2 hlp-para">
                            <div class="">
                                <img class="img-fluids" src="./assets/SVG-Icons/svg_391889.svg" alt="">
                                <p>50+</p>
                                <p>Expert Privacy<br> Advisors</p>
                            </div>
                        </div>
                        <div class="col-sm-2 hlp-para">
                            <div class="">
                                <img class="img-fluids" src="./assets/SVG-Icons/svg_372123.svg" alt="">
                                <p>100%</p>
                                <p>Automated Privacy Tools</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h6 class="service-h">Our Services</h6>
                    <p class="service-para">Empowering businesses to <br> navigate <span class="data-pr">Data Privacy,
                            Protection,<br> and Compliance</span> with ease
                        and<br>
                        confidence</p>
                    <a class="learn-a" href="">Learn more<img class="learn-img"
                            src="./assets/SVG-Icons/svg_304674.svg"></a>
                </div>
                <div class="col-sm-6">
                    <div class="service-card">
                        <span class="service-icon"><img src="./assets/SVG-Icons/21.svg"></span>
                        <span>DPDPA Act Readiness Review</span>
                        <button class="btn-arrow"><img src="./assets/SVG-Icons/svg_315634.svg"></button>
                    </div>

                    <div class="service-card active">
                        <span class="service-icon"><img src="./assets/SVG-Icons/22.svg"></span>
                        <div>
                            <h5>DPDPA Act Compliance Assistance</h5>
                            <p class="mb-0">Compliance with the DPDPA Act, guiding your business through every step to
                                safeguard data privacy and protect your operations.</p>
                        </div>
                        <button class="btn-arrow"><img src="./assets/SVG-Icons/svg_315634.svg"></button>
                    </div>

                    <div class="service-card">
                        <span class="service-icon"><img src="./assets/SVG-Icons/25.svg"></span>
                        <span>DPDPA Act Protection Officer</span>
                        <button class="btn-arrow"><img src="./assets/SVG-Icons/svg_315634.svg"></button>
                    </div>

                    <div class="service-card">
                        <span class="service-icon"><img src="./assets/SVG-Icons/24.svg"></span>
                        <span>DPDPA Act Training</span>
                        <button class="btn-arrow"><img src="./assets/SVG-Icons/svg_315634.svg"></button>
                    </div>

                    <div class="service-card">
                        <span class="service-icon"><img src="./assets/SVG-Icons/23.svg"></span>
                        <span>Contract Review</span>
                        <button class="btn-arrow"><img src="./assets/SVG-Icons/svg_315634.svg"></button>
                    </div>
                </div>

            </div>
        </div>
        </div>
    </section>





</body>

</html>