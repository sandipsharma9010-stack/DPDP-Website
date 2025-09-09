<?php
header("HTTP/1.1 301 Moved Permanently");
header("Location: about-us.php#ourteam");
exit();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <title>Our Team - DPDP Consultants</title>
    <meta name="description"
        content="Meet the dedicated professionals at DPDP Consultants. Our experienced team specializes in Digital Personal Data Protection (DPDP) compliance, bringing expertise in privacy management, technology, and consulting to safeguard your data" />
    <!-- Fav Icon -->
    <link rel="icon" href="assets/images/cropped-DPDPConsultants-1-1-32x32.webp" type="image/webp">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css"
        integrity="sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.11.3/font/bootstrap-icons.min.css"
        integrity="sha512-dPXYcDub/aeb08c63jRq/k6GaKccl256JQy/AnOq7CAnEZ9FzSL9wSbcZkMp4R26vBsMLFYH4kQ67/bbV8XaCQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Stylesheets -->
    <link href="assets/css/font-awesome-all.css" rel="stylesheet">
    <link href="assets/css/newStyle.css" rel="stylesheet">
    <link href="assets/css/flaticon.css" rel="stylesheet">
    <link href="assets/css/owl.css" rel="stylesheet">
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/jquery.fancybox.min.css" rel="stylesheet">
    <link href="assets/css/animate.css" rel="stylesheet">
    <link href="assets/css/nice-select.css" rel="stylesheet">
    <link href="assets/css/color.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/responsive.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/notifications/css/lobibox.min.css" />
    <script src="assets/js/jquery.js"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"
        integrity="sha512-jGsMH83oKe9asCpkOVkBnUrDDTp8wl+adkB2D+//JtlxO4SrLoJdhbOysIFQJloQFD+C4Fl1rMsQZF76JjV0eQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
    var base = "index.php";
    var asset_path = "index.php";
    var token = "kWtDwQjq9Zf1BpylY4ckP9J8d7Pv8y8yXrynuMlh";
    </script>
    <style>
    .overlay-page {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(255, 255, 255, 0.8);
        z-index: 999999999999;
        display: none;
        justify-content: center;
        align-items: center;
    }

    .overlay-page .spinner {
        left: 50%;
        position: absolute;
        top: 50%;
    }

    .blur {
        filter: blur(5px);
    }

    .about__four-right-title h1 {
        margin-bottom: 14px !important;
        /* font-size: 50px; */
        /* line-height: 60px; */
        padding: 0;
        margin: 0;
        /* font-weight: 600; */
        color: #121212;
        margin-top: 50px;
    }


    .team-card {
        display: flex;
        flex-direction: column;
        height: 100%;
        border: none;
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease;
    }

    .team-card:hover {
        transform: translateY(-5px);
        cursor: pointer;
    }

    .card-img-container {
        height: 250px;
        /* Adjust this value to set a consistent height for all images */
        overflow: hidden;
    }

    .card-img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.3s ease;
    }

    .team-card:hover .card-img {
        transform: scale(1.05);
    }

    .card-body {
        flex-grow: 1;
        display: flex;
        flex-direction: column;
        justify-content: center;
        padding: 1rem;
        text-align: center;
    }

    .card-title {
        font-size: 1.1rem;
        font-weight: bold;
        margin-bottom: 0.5rem;
        color: #333;
    }

    .card-text {
        font-size: 0.9rem;
        color: #666;
        margin-bottom: 0;
        font-weight: bold;
    }
    </style>
</head>
<!-- page wrapper -->

<body>
    <?php include_once('header.php');?>
    <!-- The Modal start Get In Touch-->

    <section class="latest-new">
        <img src="assets/newImages/our_team.jpg" alt="Nature" class="img-responsive pt3">
        <div class="container">
            <div class="row mr0">
                <div class="col-lg-9 mt00">
                    <h1 class="hdtext"> Our Team</h1>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12 col-xl-12">
                    <div class="about__four-right">
                        <div class="mt-5">
                            <h5 class="section-title-two1">Our Team</h5>
                            <h1 class="">Meet Our Team of Data Protection Experts
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-lg-12 col-md-12">
                    <p class="">With decades of combined experience, our experts specialize in helping
                        businesses
                        navigate complex privacy regulations, ensuring compliance and security across all
                        digital platforms.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- news-section -->


    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header pop_header text-center">
                    <div class="w-100">
                        <h3 class="">Shilendra Sharma</h3>
                        <b>Founder/Principal</b>
                    </div>
                </div>
                <div class="modal-body">
                    <p>A seasoned data privacy expert with over a decade of experience in the digital data privacy
                        domain. Shilendra has successfully guided over 2000+ companies in the UK and Ireland to
                        understand, implement, and maintain privacy and financial compliance.</p>
                    <p>At the core, he specialises in GDPR Implementations and has certifications from BSI. An expert in
                        DPIA, LIA, DSAR Management, L&D, Training, Privacy Audit, CCPA, and the DPDP Act. He has
                        designed and implemented GDPR compliance-based systems, frameworks, products, and solutions
                        globally.</p>
                </div>
                <div class="modal-footer justify-content-center">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="staticBackdrop1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header pop_header text-center">
                    <div class="w-100">
                        <h3 class="">Kumar Priyank</h3>
                        <b>C.E.O & Chief Privacy Officer</b>
                    </div>
                </div>
                <div class="modal-body">
                    <p>Kumar Priyank has 15+ years of experience in Information Technology Service Delivery, Data
                        Privacy and Security consulting. His core specialization lies in Privacy advisory, GDPR & DPDP
                        Compliance. Over the years, he has led numerous successful digital service delivery, GDPR
                        implementations, managed DSARs, DPIA, LIA and negotiated complex contracts. His area of
                        expertise extends to Information Technology, Information Security, Agile Scrum, Dev-ops, Digital
                        transformation, Cloud Computing, IT governance, and CCPA.</p>
                    <p> Kumar has a successful record of designing, developing, and implementing GDPR and DPDP
                        compliance-based management systems, products, solutions, and operations worldwide. With a
                        strong foundation in technical and privacy domains, he has driven organizational compliance in
                        the rapidly evolving data privacy and security domain. </p>
                </div>
                <div class="modal-footer justify-content-center">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="staticBackdrop2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header pop_header text-center">
                    <div class="w-100">
                        <h3 class="">Abhishek Vinod Singh</h3>
                        <b> Advisor – Technology</b>
                    </div>
                </div>
                <div class="modal-body">
                    <p>Abhishek Vinod Singh is the CEO and co-founder of AiDash. An alumnus of IIT Kanpur, Abhishek
                        worked with many IT companies prior to starting and growing a series of successful tech
                        businesses, including DbyDx Software and Edureka. He is based in Santa Clara, California.</p>
                </div>
                <div class="modal-footer justify-content-center">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="staticBackdrop3" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header pop_header text-center">
                    <div class="w-100">
                        <h3 class="">Bhavna Narula</h3>
                        <b>VP Product</b>
                    </div>
                </div>
                <div class="modal-body">
                    <p>Bhavna has over 19 years of diverse experience, focused on solving industry problems by
                        productising
                        linked processes with the help of technology, people, and governance.</p>
                    <p>She has a strong background in software product management and development. She is well versed in
                        all
                        stages of the Software Development Life Cycle (SDLC) and has a knack for devising strategies
                        aimed at
                        organizational growth, profitability, and improved business performance.</p>
                    <p>She is a SAFe 5 Certified Product Owner/Product Manager and a Certified Scrum Master.
                        Additionally,
                        she holds certifications as a Certified CISM, Certified Lead Auditor by IRCA for ISO 27001 and
                        ISO 22301.</p>
                    <p>In her previous role, she served as a CISO and Data privacy expert, helping the organization to
                        comply with
                        GDPR and CCPA privacy laws.</p>
                    <p>She loves to listen to music, cook, and spend time with her family and friends</p>
                </div>
                <div class="modal-footer justify-content-center">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="staticBackdrop15" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabe" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header pop_header text-center">
                    <div class="w-100">
                        <h3 class="">Jaspal Singh</h3>
                        <b>Senior Manager - Products</b>
                    </div>
                </div>
                <div class="modal-body">
                    <p>Jaspal has over 20+ years of experience in software engineering and his career reflects a passion
                        for solving complex problems, building high-performing teams, and delivering impactful solutions
                        aligned with business goals.</p>
                    <p>Jaspal’s extensive experience spans Cyber Security, DevOps, CI/CD, AWS, and Microservices.
                        Combined with Agile, Scrum and DevOps practices, this expertise enables him to lead projects
                        with cutting-edge technologies.</p>
                    <p>Jaspal is open to connecting with professionals, experts, and innovators. For collaboration,
                        insights, or new opportunities, feel free to reach out.</p>
                </div>
                <div class="modal-footer justify-content-center">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="staticBackdrop4" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabe" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header pop_header text-center">
                    <div class="w-100">
                        <h3 class="">Akansha Bhatt</h3>
                        <b>Senior Manager- Consulting & Growth</b>
                    </div>
                </div>
                <div class="modal-body">
                    <p>Akansha is a seasoned data privacy, techno-legal consultant, and a corporate lawyer. She has
                        successfully handled various compliance activities and contract negotiations across industries
                        globally. Akansha has advised clients on data protection regulations such as GDPR, CCPA, and
                        DPDP, and has been instrumental in drafting policies and procedures. Her expertise extends to
                        performing and negotiating Data Processing Agreements, Non-disclosure agreements, MSAs, DPIAs,
                        DSARs, PIAs, DPIAs SCCs, and DPAs for organisations such as Wipro, software, and Maersk. She has
                        also conducted stakeholder training on privacy subject matter. Her proficiency in handling
                        Privacy compliances and risk management Compliances with global companies set her apart.
                    <p>
                </div>
                <div class="modal-footer justify-content-center">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="staticBackdrop5" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabe" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header pop_header text-center">
                    <div class="w-100">
                        <h3 class="">Audrey Saralin</h3>
                        <b>Senior Director – Sales</b>
                    </div>
                </div>
                <div class="modal-body">
                    <p>Audrey is a seasoned professional with over 15 years of experience in the IT research industry
                        have developed a deep understanding of the ever-evolving landscape of technology products and
                        services. Worked with Forrester and Replicon services and have had the privilege of
                        collaborating with diverse clients, ranging from small startups to multinational corporations
                        across all industries from BFSI, Manufacturing, IT Services and MARTECH.</p>
                </div>
                <div class="modal-footer justify-content-center">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="staticBackdrop6" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabe" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header pop_header text-center">
                    <div class="w-100">
                        <h3 class="">Manoj Kumar</h3>
                        <b>Senior Consultant – Implementation</b>
                    </div>
                </div>
                <div class="modal-body">
                    <p>Manoj has a master’s degree in Computer Applications from JNU. He has extensive work experience
                        spanning over three decades in various business domains, including but not limited to software
                        design and development, publication, training, and education. He is also the author of a few
                        computer science textbooks and has worked closely with notable publishers like the Oxford
                        University Press.</p>
                </div>
                <div class="modal-footer justify-content-center">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>



    <div class="modal fade" id="staticBackdrop7" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabe" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header pop_header text-center">
                    <div class="w-100">
                        <h3 class="mb-1">Gargi Rawat</h3>
                        <b>Director – Human Resources</b>
                    </div>
                </div>
                <div class="modal-body text-center">
                    <p>
                        With more than a decade of experience, Gargi has been a seasoned Pre-Sales professional. She has
                        worked with some of the fortune 500 organizations like W.R Grace. For the last few years, as a
                        successful entrepreneur, she has helped organizations in IT, Telecom, and Services space with
                        their human resource requirements. Gargi is also a certified interior designer.
                    </p>
                </div>
                <div class="modal-footer justify-content-center">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="staticBackdrop19" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabe" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header pop_header text-center">
                    <div class="w-100">
                        <h3 class="mb-1">Dr. Sanyam Agarwal </h3>
                        <b>Principal Advisor </b>
                    </div>
                </div>
                <div class="modal-body text-center">
                    <p>
                        Dr. Sanyam Agarwal has more than 32 Years of experience in diversified fields of Marketing,
                        Technology , Research and Administration. He is author of many international books and consulted
                        many industries in different origins.
                    </p>
                </div>
                <div class="modal-footer justify-content-center">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <section class="my-5">
        <div class="container">
            <div class="MySlider1">
                <div class="slider-container">
                    <div class="slider-wrapper1">
                        <div class="slider-item1">

                            <div class="card team-card">
                                <img class="img-full" src="assets/images/shilendra-sharma.webp" alt=""
                                    style="width:100%; height:auto; object-fit: cover;">
                                <div class="card-body">
                                    <h5 class="card-title" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                        Shilendra
                                        Sharma</h5>
                                    <p class="card-text">FOUNDER/PRINCIPAL</p>
                                </div>
                            </div>


                        </div>
                        <div class="slider-item1">
                            <div class="card team-card">
                                <img class="img-full" src="assets/images/kumarpriyank.webp" alt=""
                                    style="width:100%; height:auto; object-fit: cover;">
                                <div class="card-body">
                                    <h5 class="card-title" data-bs-toggle="modal" data-bs-target="#staticBackdrop1">
                                        Kumar
                                        Priyank</h5>
                                    <p class="card-text">C.E.O & CHIEF PRIVACY OFFICER</p>
                                </div>
                            </div>

                        </div>
                        <div class="slider-item1">

                            <div class="card team-card">
                                <img class="img-full" src="assets/images/abhishek-vinod.webp" alt=""
                                    style="width:100%; height:auto; object-fit: cover;">
                                <div class="card-body">
                                    <h5 class="card-title" data-bs-toggle="modal" data-bs-target="#staticBackdrop2">
                                        Abhishek
                                        Vinod Singh</h5>
                                    <p class="card-text">ADVISOR – TECHNOLOGY</p>
                                </div>
                            </div>

                        </div>
                        <div class="slider-item1">
                            <div class="card team-card">
                                <img class="img-full" src="assets/images/bhavna.png" alt=""
                                    style="width:100%; height:auto; object-fit: cover;">
                                <div class="card-body">
                                    <h5 class="card-title" data-bs-toggle="modal" data-bs-target="#staticBackdrop3">
                                        Bhavna
                                        Narula</h5>
                                    <p class="card-text">VP PRODUCTS</p>
                                </div>
                            </div>
                        </div>
                        <div class="slider-item1">
                            <div class="card team-card">
                                <img class="img-full" src="assets/images/jaspal.png" alt=""
                                    style="width:100%; height:auto; object-fit: cover;">
                                <div class="card-body">
                                    <h5 class="card-title" data-bs-toggle="modal" data-bs-target="#staticBackdrop15">
                                        Jaspal
                                        Singh
                                    </h5>
                                    <p class="card-text" data-bs-toggle="modal" data-bs-target="#staticBackdrop15">
                                        SENIOR
                                        MANAGER - PRODUCTS</p>
                                </div>
                            </div>
                        </div>
                        <div class="slider-item1">
                            <div class="card team-card">
                                <img class="img-full" src="assets/images/akanksha.webp" alt=""
                                    style="width:100%; height:auto; object-fit: cover;">
                                <div class="card-body">
                                    <h5 class="card-title" data-bs-toggle="modal" data-bs-target="#staticBackdrop4">
                                        Akansha
                                        Bhatt</h5>
                                    <p class="card-text">SENIOR MANAGER- CONSULTING & GROWTH</p>
                                </div>
                            </div>
                        </div>
                        <div class="slider-item1">
                            <div class="card team-card">
                                <img class="img-full" src="assets/images/audrey-saralin.webp" alt=""
                                    style="width:100%; height:auto; object-fit: cover;">
                                <div class="card-body">
                                    <h5 class="card-title" data-bs-toggle="modal" data-bs-target="#staticBackdrop5">
                                        Audrey
                                        Saralin</h5>
                                    <p class="card-text">SENIOR DIRECTOR – SALES</p>
                                </div>
                            </div>
                        </div>
                        <div class="slider-item1">
                            <div class="card team-card">
                                <img class="img-full" src="assets/images/Manoj.webp" alt=""
                                    style="width:100%; height:auto; object-fit: cover;">
                                <div class="card-body">
                                    <h5 class="card-title" data-bs-toggle="modal" data-bs-target="#staticBackdrop6">
                                        Manoj Kumar
                                    </h5>
                                    <p class="card-text">SENIOR CONSULTANT – IMPLEMENTATION</p>
                                </div>
                            </div>
                        </div>
                        <div class="slider-item1">
                            <div class="card team-card">
                                <img class="img-full" src="assets/images/Gargi-Rawat.webp" alt=""
                                    style="width:100%; height:auto; object-fit: cover;">
                                <div class="card-body">
                                    <h5 class="card-title" data-bs-toggle="modal" data-bs-target="#staticBackdrop7">
                                        Gargi Rawat
                                    </h5>
                                    <p class="card-text">DIRECTOR – HUMAN RESOURCES</p>
                                </div>
                            </div>
                        </div>


                        <div class="slider-item1">
                            <div class="card team-card">
                                <img class="img-full" src="assets/images/dr-sanyam-agarwal.jpg" alt=""
                                    style="width:100%; height:auto; object-fit: cover;">
                                <div class="card-body">
                                    <h5 class="card-title" data-bs-toggle="modal" data-bs-target="#staticBackdrop19">
                                        Dr. Sanyam Agarwal
                                    </h5>
                                    <p class="card-text">Principal Advisor </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="slider-control1 prev"><b class="bi bi-chevron-left"></b></button>
                    <button class="slider-control1 next"><b class="bi bi-chevron-right"></b></button>
                </div>
            </div>
        </div>
    </section>


    <script>
    $(document).ready(function() {
        const sliderWrapper = $('.MySlider1 .slider-wrapper1');
        const sliderItem = $('.MySlider1 .slider-item1');
        const visibleItems = 3; // Default visible items for desktop
        const totalItems = sliderItem.length;
        let currentIndex = 0;

        const isMobileView = () => $(window).width() <= 768;

        const getVisibleItems = () => (isMobileView() ? 1 : visibleItems);

        // Clone items for seamless continuous scrolling
        const clonedItems = sliderWrapper.html();
        sliderWrapper.append(clonedItems);

        // Dynamic move to position
        const moveToPosition2 = () => {
            const visibleItemsNow = getVisibleItems();
            const offset = -(currentIndex * 100) / visibleItemsNow;
            sliderWrapper.css('transform', `translateX(${offset}%)`);
        };

        // Handle Next Button
        $('.MySlider1 .slider-control1.next').click(function() {
            const visibleItemsNow = getVisibleItems();
            if (currentIndex >= totalItems) {
                currentIndex = 0;
                sliderWrapper.css('transition', 'none');
                moveToPosition2();
                setTimeout(() => {
                    sliderWrapper.css('transition', 'transform 0.5s ease-in-out');
                    currentIndex++;
                    moveToPosition2();
                }, 0);
            } else {
                currentIndex++;
                moveToPosition2();
            }
        });

        // Handle Prev Button
        $('.MySlider1 .slider-control1.prev').click(function() {
            const visibleItemsNow = getVisibleItems();
            if (currentIndex <= 0) {
                currentIndex = totalItems;
                sliderWrapper.css('transition', 'none');
                moveToPosition2();
                setTimeout(() => {
                    sliderWrapper.css('transition', 'transform 0.5s ease-in-out');
                    currentIndex--;
                    moveToPosition2();
                }, 0);
            } else {
                currentIndex--;
                moveToPosition2();
            }
        });

        // Auto-scroll for continuous scrolling
        const autoScroll2 = () => {
            setInterval(() => {
                $('.MySlider1 .slider-control1.next').trigger('click');
            }, 10000); // Adjust interval as needed
        };

        // Recalculate position on window resize
        $(window).resize(function() {
            currentIndex = 0;
            moveToPosition2();
        });

        autoScroll2();
    });
    </script>


    <!-- news-section end -->
    <?php include_once('footer.php') ?>

</body>
<!-- End of .page_wrapper -->

</html>