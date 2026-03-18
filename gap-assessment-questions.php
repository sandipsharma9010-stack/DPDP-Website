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
            padding: 104px 36px 45px;
        }

        .hero-section h1 {
            font-size: 2.5rem;
            /*  */
        }

        .hero-section span {
            color: #3CA6E0;
             font-size: 3rem;
             font-weight: bold;
            
        }

        .hero-section p {
            max-width: 724px;
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








       






.dpdp-body{
    /* background:#f3f6fb; */
    padding:40px 10px;
}

/* Card */
.dpdp-question-card{
    max-width:1210px;
    margin:auto;
    background:#fff;
    border-radius:18px;
    padding:21px 50px;
    box-shadow:0 0 40px rgba(0,0,0,0.12);
}

/* Question */
.dpdp-question-text{
    font-size:18px;
    font-weight:600;
    color:#0b1440;
    line-height:1.6;
    margin-bottom:30px;
}

/* Option Box */
.dpdp-option-box{
    display:flex;
    align-items:center;
    gap:18px;
    border:1px solid #e3e3e3;
    border-radius:12px;
    padding:10px 25px;
    margin-bottom:18px;
    cursor:pointer;
    background:#fff;
    box-shadow:0 4px 12px rgba(0,0,0,0.08);
    transition:.25s;
}

.dpdp-option-box:hover{
    border-color:#2f80ed;
}

/* Hide radio */
.dpdp-radio-input{
    display:none;
}

/* Custom radio */
.dpdp-radio-circle{
    width:22px;
    height:22px;
    border-radius:50%;
    border:2px solid #cfd6e4;
    display:flex;
    align-items:center;
    justify-content:center;
}

.dpdp-radio-circle::after{
    content:"";
    width:10px;
    height:10px;
    background:#2f80ed;
    border-radius:50%;
    display:none;
}

/* Checked state */
.dpdp-radio-input:checked + .dpdp-radio-circle::after{
    display:block;
}

.dpdp-radio-input:checked ~ .dpdp-option-text{
    color:#2f80ed;
    font-weight:600;
}

/* Option text */
.dpdp-option-text{
    font-size:16px;
    color:#333;
}

/* Button */
.dpdp-btn-area{
    text-align:center;
    margin-top:30px;
}

.dpdp-next-btn{
    background:#2f8fd8;
    color:#fff;
    padding:12px 50px;
    border:none;
    border-radius:10px;
    font-size:18px;
}
.dpdp-prev-btn{
    background:#e0e0e0;
    color:#333;
    padding:12px 50px;
    border:none;
    border-radius:10px;
    font-size:18px;
    margin-right:20px;
}





/* Please make the mobile resposnive */

@media (max-width:768px){
    .dpdp-question-card{
        padding:20px;
    }
    .dpdp-question-text{
        font-size:16px;
    }

    .dpdp-btn-area{
        flex-direction:column;
        gap:10px;
    }
    .dpdp-prev-btn, .dpdp-next-btn{
        width:100%;
        padding:10px 0;
    }
}




    </style>
</head>

<body>

    <section class="blog" style="background-color: #02092c;">
        <?php include_once('new-nav.php'); ?>
        <div class="container hero-section">
            <h1>DPDPA Compliance <br> <span class="highlight-acc">Riskometer
            </h1>
            <p class="text-white">Instantly measure your organisation’s DPDPA risk level based on existing compliance
                gaps, operational practices, and data protection controls.
            </p>
            <a id="scroll"> </a>
        </div>
    </section>



<?php include_once('gap-assessment-code.php'); ?>

<?php
//print_r($_SESSION);
// print_r($_REQUEST);

if(isset($_REQUEST['finish']) && isset($_REQUEST['next'])) { ?>
    <script> document.location.href = 'gap-assessment-scorecard.php'; </script>
<?php } ?>


    <section class="dpdp-body">

    <div class="dpdp-question-card">

        <div class="dpdp-question-text">
            <strong>Q<?php echo $current; ?>.</strong> <?php echo $q['question']; ?>
        </div>

        <form method="post" action="#scroll">

        <?php foreach ($q['options'] as $key => $option): ?>
        <label class="dpdp-option-box">
            <input type="radio" name="answer" class="dpdp-radio-input" value="<?php echo $key; ?>" <?php echo ($savedAnswer === $key) ? 'checked' : ''; ?> />
            <span class="dpdp-radio-circle"></span>
            <span class="dpdp-option-text"><strong> <!-- <?php echo $key+1; ?>.</strong> --> <?php echo $option['text']; ?> </span>
        </label>
        <?php endforeach; ?>

        <!-- Buttons -->
        <div class="dpdp-btn-area d-flex justify-content-center">

            <?php if ($current > 1): ?>
                <button type="submit" name="prev" class="dpdp-prev-btn">
                    Previous
                </button>
            <?php endif; ?>

            <button type="submit" name="next" class="dpdp-next-btn">
                <?php echo ($current == $totalQuestions) ? 'Finish' : 'Next'; ?>
            </button>

        </div>

        <?php if($current == $totalQuestions) { ?>
            <input type="hidden" name="finish" value="1" />
        <?php } ?>

        </form>

    </div>

</section>

    <?php include 'footer.php'; ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.bundle.min.js"></script>
</body>

</html>