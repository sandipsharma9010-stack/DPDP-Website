<?php session_start();
date_default_timezone_set('Asia/Kolkata');
include('contact-referer.php');
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>DPDP Act Employee Training & Awareness Program</title>
    <meta name="description"
        content="Empower your workforce with DPDP Act employee training & awareness programs designed to build compliance, accountability, and data protection culture.">
    <meta name="keywords"
        content="Data protection training,data privacy awareness training, compliance security training, DPDP Act training programs, GDPR privacy training, data security awareness, employee compliance training">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="icon" href="assets/images/fav-icon-logo.png" type="image/webp">
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="canonical" href="https://www.dpdpconsultants.com/dpap.php">
    <style>
        .blog {
            text-align: center;
            color: white;
            position: relative;
        }

        .hero-section {
            padding: 155px 36px 135px;
        }

        .hero-section h1 {
            font-size: 2.5rem;
            font-weight: bold;
        }

        .hero-section span {
            color: #3CA6E0;
        }

        .hero-section p {
            max-width: 1245px;
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

        .tools-para {
            font-size: 13px !important;
            color: white;

        }

        .card-custom-data {
            border: none;
            border-radius: 15px;
            box-shadow: 4px 4px 8px rgba(0, 0, 0, 1.1);
            padding: 100px;
            background-color: white;
            height: 100%;
            text-align: center;
        }

        .card-title-data {
            font-weight: bold;
            margin-top: 10px;
            color: #02092c;
        }

        .card-logo-data {
            width: 100px;
            height: 100px;
            object-fit: contain;
            margin-bottom: 10px;
        }

        @media (max-width: 768px) {
            .hero-section br {
                display: none;
            }

            .hero-section {
                padding: 30px 16px 160px;
            }

            .hero-section h1 {
                font-size: 1.2rem;
                overflow: hidden;
                text-overflow: ellipsis;
                line-height: 30px;
            }

            .hero-section p {
                text-align: left;
                font-size: 12px;
                margin-top: -5px;

            }


            .dpcm-para {
                /* font-size: 14px !important; */
            }

            .dpcm-head br {
                display: none;
            }

            .dpcm-head {
                font-size: 1.2rem;
                line-height: 24px;
            }

            .card-img-top {
                margin-top: 15px;
            }

            .card-feature {
                flex-direction: column;
            }

            .feature-box-1,
            .feature-box-2,
            .feature-box-3,
            .feature-box-4,
            .feature-box-5 {
                /* flex-direction: column; */
                text-align: left;
            }

            .feature-icon-dpcm img {
                width: 100px;
            }

            .all-tools-features {
                display: block;
                text-align: left;
            }

            .card-custom-data {
                text-align: center;
                display: flex;
                flex-direction: row;
            }

            .card-custom-data video {
                padding: 20px;
            }

            .card-text {
                font-size: 12px;
            }

            .card-feature {
                flex-direction: row !important;
            }

            .feature-icon-dpap img {
                width: 100px;
            }
        }






        /* Main Wrapper */
.dpdpa-scorecard-wrapper{
    max-width:1300px;
    margin:60px auto;
    padding:0 20px;
}

/* Card */
.dpdpa-scorecard-card{
    background:#ffffff;
    border-radius:20px;
    padding:50px 40px;
    text-align:center;
    box-shadow: 0 0 40px rgba(0,0,0,0.12);
}

/* Title */
.dpdpa-scorecard-title{
    font-size:26px;
    font-weight:600;
    color:#0b1440;
    margin-bottom:40px;
}

/* Score */
.dpdpa-scorecard-percentage{
    font-size:25px;
    /* font-weight:700;
    color:#2f80ed; */
    margin-bottom:30px;
}

/* Result */
.dpdpa-scorecard-result{
    font-size:20px;
    font-weight:600;
    color:#0b1440;
    margin-bottom:10px;
}

/* Footer Note */
.dpdpa-scorecard-note{
    font-size:12px;
    color:#8b8fa8;
    text-align:right;
    margin-top:20px;
}
    </style>
</head>

<body>

    <section class="blog" style="background-color: #02092c;">
        <?php include_once('new-nav.php'); ?>
        <div class="container hero-section">
            <h1>Check Your Organisation’s <br> <span class="highlight-acc">DPDPA Compliance Readiness
            </h1>
            <p class="text-white">Assess how prepared your organisation is for India’s Digital Personal Data Protection
                Act (DPDPA). This quick gap assessment evaluates your current privacy practices across key compliance
                areas and generates a readiness score highlighting gaps, risks, and priority actions.
            </p>
        </div>
    </section>


<?php
session_start();

include_once('gap-assessment-code.php');

/* -----------------------------
   4. Score Calculation
-------------------------------- */
if ($_SESSION['current'] >= $totalQuestions) {
    $score = 0;
    foreach ($_SESSION['answers'] as $qno => $ans) {
        if ($ans === $questions[$qno]['correct']) {
            $score++;
        }
    }

}

// print_r($questions);
// print_r($answers);

?>


    <secttion>

    <div class="dpdpa-scorecard-wrapper">
    <div class="dpdpa-scorecard-card">

        <div class="dpdpa-scorecard-title">
            DPDPA Compliance Gap Assessment Scorecard:
        </div>

        <div class="dpdpa-scorecard-percentage">

            <?php 
$percentage = round(($score / $totalQuestions) * 100);
echo $percentage . "%";
?>

<?php if ($percentage >= 90) { ?>
    <p style="color:green; font-weight:bold;">
         Complaints. You are good to go.
    </p>
<?php } else { ?>
    <p style="color:red; font-weight:bold;">
        Non-Complaints. You are not good to go.
    </p>
<?php } ?>


        </div>

        <div class="dpdpa-scorecard-result">
            Post Assessment Result
        </div>

        <div class="dpdpa-scorecard-note">
            *The result is based on the assessment through the questionnaire only.
        </div>

    </div>
</div>
    </secttion>




    <?php include 'footer.php'; ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.bundle.min.js"></script>
</body>

</html>