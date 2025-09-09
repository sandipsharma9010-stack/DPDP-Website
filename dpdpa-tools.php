<?php
header("HTTP/1.1 301 Moved Permanently");
header("Location: compliance-tools.php");
exit();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <title>DPDPA Tools – Data Protection Consent, Grievance Redressal & Compliance Solutions</title>
    <meta name="description"
        content="Explore DPDP Consultants' tools for data protection compliance, from consent management to impact assessments. Align with DPDP Act 2023 for lawful data processing." />
    <!-- Fav Icon -->
    <link rel="icon" href="assets/images/cropped-DPDPConsultants-1-1-32x32.webp" type="image/webp">
    <!-- Google Fonts -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css"
        integrity="sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.11.3/font/bootstrap-icons.min.css"
        integrity="sha512-dPXYcDub/aeb08c63jRq/k6GaKccl256JQy/AnOq7CAnEZ9FzSL9wSbcZkMp4R26vBsMLFYH4kQ67/bbV8XaCQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="assets/css/style.css" rel="stylesheet">

    <link href="assets/css/flaticon.css" rel="stylesheet">

    <!-- <link href="assets/css/jquery.fancybox.min.css" rel="stylesheet"> -->
    <link href="assets/css/color.css" rel="stylesheet">

    <link href="assets/css/newStyle.css" rel="stylesheet">

    <link href="assets/css/responsive.css" rel="stylesheet">

    <!-- <link rel="canonical" href="https://www.dpdpconsultants.com/dpap.php" /> -->

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
        font-size: 40px;
        /* line-height: 60px; */
        padding: 0;
        margin: 0;
        /* font-weight: 600; */
        color: #121212;
    }

    .blog__one-item {
        /* height: 400px; */
    }

    .card {
        border: none;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease-in-out;
        height: 550px;
        margin: 20px 0px;
        /* Set the height of the card */
    }

    .card-body {
        padding: 20px;
    }

    .card-title {
        font-weight: bold;
        font-size: 18px;
    }

    .card-text {
        font-size: 14px;
        color: #666;
    }

    .btn-primary {
        background-color: #337ab7;
        border-color: #337ab7;
        color: #fff;
        padding: 10px 20px;
        border-radius: 5px;
        transition: all 0.3s ease-in-out;
    }

    .card-img-top {
        width: 100%;
        height: 350px;
        object-fit: cover;
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;
    }

    .card:hover {
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
        transform: translateY(-5px);
    }

    .card:hover .card-title {
        color: #337ab7;
    }

    .card:hover .card-text {
        color: #333;
    }

    .card:hover .btn-primary {
        background-color: #23527c;
        border-color: #23527c;
    }

    @media (max-width: 768px) {
        .about__four-right {
            margin-top: 20px;
        }
    }
    </style>
</head>
<!-- page wrapper -->

<body>
    <?php include_once('header.php');?>
    <section class="latest-new">
        <img src="assets/newImages/Our_Tools.jpg" alt="Nature" class="img-responsive pt3">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <h1 class="hdtext"> DPDPA Tools </h1>
                </div>
            </div>
        </div>
    </section>
    <div class="container mt-5">
        <div class="section-title-two2">
            <h5 class="section-title-two1">DPDPA Tools</h5>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <img src="assets/images/3.webp" alt="Service 1" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Data Principal Consent Management</h5>
                        <p class="card-text">Pursuant to section 4(1) of the DPDP Act 23, every business needs to ensure
                            that they have a proper legal basis to process personal data. Consent is the primary legal
                            basis lying at the core of any lawful data processing 1(1a)</p>
                        <a href="dpcm.php" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="assets/images/2.webp" alt="Service 2" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Data Principal Grievance Redressal</h5>
                        <p class="card-text">DPGR allows data principal to raise their rights through a user-friendly
                            platform and allows requests to be accessed by the Data Protection Officers/concerned
                            persons manually or in an automated way.</p>
                        <a href="dpgr.php" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="assets/images/1.webp" alt="Service 3" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Data Protection Awareness Program</h5>
                        <p class="card-text">Consider yourself non-compliant if your employees are unaware of
                            compliance, even though your systems are fully compliant. Every unaware employee is a
                            potential source of accidental data breaches. Data Protection Awareness Program (DPAP)
                            offers meticulously</p>
                        <a href="dpap.php" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <img src="assets/images/4.webp" alt="Service 1" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Data Protection Impact Assessment</h5>
                        <p class="card-text">DPDP Compliance is not just a one-time compliance; organisations must
                            remain compliant throughout their business life. This is especially true for organisations
                            (a.k.a significant data fiduciaries) where</p>
                        <a href="dpia.php" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="news-section sec-pad">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6">
                    <div class="faq_img">
                        <img src="assets/images/Business-devlepment-1536x1086.webp" alt="faq" class="img-fluid w-100">
                    </div>
                </div>

                <div class="col-xl-6 col-lg-6">
                    <div class="about__four-right">
                        <div class="about__four-right-title">

                            <p>DPDP Act 2023 mandates organisations to process personal data in accordance with
                                specified provisions of the Act. Organisations must rely on prescribed grounds for
                                processing personal data and should only process data for lawful purposes. Organisations
                                need to process personal data based on valid consent or as per stated legitimate uses;
                                furthermore, organisations are required to address data principal rights and grievances
                                in a timely manner, conduct periodic data protection impact assessment (DPIA) and
                                audits, ensure data protection agreements are executed with data processors and
                                awareness programs and assessments are conducted.
                            </p>
                            <p>Under the DPDP Act, businesses in India are restricted from contacting Indian data
                                principals without a proper legal basis and lawful purpose. Common communication methods
                                used by businesses in India, such as email or phone calls, need to align with the DPDP
                                framework. Failure to do so can result in penalties from the Data Protection Board, even
                                if a business is in the process of DPDP compliance.

                            </p>

                        </div>
                        <div class="about__four-right-bottom">
                            <div class="skill__area-item">
                                <div class="skill__area-item-content">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>





    <?php include_once('footer.php') ?>
</body>
<!-- End of .page_wrapper -->


</html>