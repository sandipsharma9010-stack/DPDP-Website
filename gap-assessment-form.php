<?php session_start();
date_default_timezone_set('Asia/Kolkata');
include('contact-referer.php');
include('cpanel/admin.functions.php');
?>



<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

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


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"
        integrity="sha512-jGsMH83oKe9asCpkOVkBnUrDDTp8wl+adkB2D+//JtlxO4SrLoJdhbOysIFQJloQFD+C4Fl1rMsQZF76JjV0eQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>


     
    
    <style>
        .blog {
            text-align: center;
            color: white;
            position: relative;
        }

        .hero-contact {
            padding: 120px 20px;
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
            align-items: stretch;
            justify-content: center;
            flex-wrap: wrap;
            margin-top: 50px;
            gap: 40px;
            /* 👈 pehle 196px tha */
            box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.2);
            padding: 20px;
            border-radius: 20px;
            background: white;
        }

        .contact-box {
            background-color: #02092c;
            color: white;
            padding: 30px;
            border-radius: 20px;
            width: 45%;
            /* 👈 50% → 45% */
            max-width: 548px;
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
            padding: 30px;
            border-radius: 20px;
            width: 55%;
            /* 👈 balance */
            max-width: 686px;
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
                br {
                    display: none;
                }

                font-size: 1.2rem;
            }

            .hero-contact p {
                font-size: 12px;
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
</head>

<body>
    <section class="blog" style="background-color: #02092c;">
        <?php include_once('new-nav.php'); ?>


        <div class="container hero-contact">

            <h1>Check Your Organisation’s <br><span class="highlight-acc">DPDPA Compliance Readiness</span></h1>

            <p>Assess how prepared your organisation is for India’s Digital Personal Data Protection Act (DPDPA). This
                quick gap assessment evaluates your current privacy practices across key compliance areas and generates
                a readiness score highlighting gaps, risks, and priority actions.
            </p>
        </div>
    </section>

<!-- Button to trigger modal -->

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
                            echo '<div id="' . $key . '" class="language-content"><p>' . $value['content'] . '</p></div>'; } ?>
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



<?php

/* * */

// print_r($_POST);

/* * */

/* * */

unset($_SESSION['answers']);
$_SESSION['answers'] = [];
$_SESSION['answers'] = '';

/* * */

/* * */

$messagerror = "";
$_SESSION['language'] = $language = @trim(stripslashes($_POST['hiddenLanguage']));
$_SESSION['fullname'] = $fullname = @trim(stripslashes($_POST['fullname']));
$_SESSION['emailadd'] = $emailadd = @trim(stripslashes($_POST['emailadd']));
$_SESSION['phoneno'] = $phoneno = @trim(stripslashes($_POST['phoneno']));
$_SESSION['subject'] = $subject = @trim(stripslashes($_POST['subject']));
$_SESSION['message'] = $message = @trim(stripslashes($_POST['message']));
$_SESSION['reqsrc'] = $reqsrc = @trim(stripslashes($_POST['reqsrc']));
$_SESSION['calldt'] = $calldt = @trim(stripslashes($_POST['calldt']));

$_SESSION['designation'] = $designation = @trim(stripslashes($_POST['designation']));

$_SESSION['contact_topic'] = $contact_topic = @trim(stripslashes($_POST['contact_topic']));

$otp = @trim(stripslashes($_POST['otp']));

$job = $_REQUEST['job'];
$act = $_REQUEST["act"];
$show = $_REQUEST["show"];

$userAgent = $_SERVER['HTTP_USER_AGENT'];
$ipAddress = $_SERVER['REMOTE_ADDR'];
$httpReferer = $_SERVER['HTTP_REFERER'];

$email_from = $emailadd;

/* * */

$proceed = $_REQUEST["proceed"];

/* * */

/* * */


if($_POST) {

    //print_r($_POST);
    //exit(0);

    $response = '';
    include_once('contact-api-3.php');
    //print_r($response);

    $decodedArray = json_decode($response, true);
    //print_r($decodedArray);
    //exit(0);

    $taken = $decodedArray['otp'];
    //echo " --- $taken --- ";

    //die();

    if($otp) {

        include_once('contact-db.php');

        include_once('contact-mail.php');

        // echo"<script>document.location.href=\"thanks.php?act=$act&proceed=$proceed\";</script>";
        echo"<script>document.location.href=\"gap-assessment-questions.php?act=$act&proceed=$proceed\";</script>";

    }

}

/* * */

?>



<script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <div name="divotp" id="divotp" href="divotp">
        <a id="#ahrefotp" name="#ahrefotp" href="#ahrefotp"> &nbsp; </a>
    </div>




<form xclass="needs-validation" action="#divotp" method="post" id="mainForm" xnovalidate  enctype="multipart/form-data">

        <input type="text" name="hiddenLanguage" id="hiddenLanguage" value="<?php echo $language; ?>" style="display:none" />
        <input type="text" name="reqsrc" id="reqsrc" value="contact" style="display:none" />
        <input type="text" name="reqtitle" id="reqtitle" style="display:none" />
        <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>" />
        <input type="hidden" name="_token" value="kWtDwQjq9Zf1BpylY4ckP9J8d7Pv8y8yXrynuMlh" />
        <input type="hidden" name="contact_topic" value="<?=$act;?>" /> 
        <input type="text" name="act" value="<?=$act;?>" style="display:none" />
        <input type="text" name="job" value="<?=$job;?>" style="display:none" />


        <div class="container contact-container my-5">

            <?php if( (!$act) || ($act=='contact') ) { ?>

            <div class="contact-box">
                <!-- <h4>Contacts us</h4>
                <p>DPDP Consultants (Privacyium Tech Pvt. Ltd.)</p>
                <p>Have a query? Feel free to contact our privacy experts</p>
                <p>
                    <img src="./assets/images/call-contact.png" alt="Phone" width="30" class="my-2"> 1800-5711-333<br>
                    <img src="./assets/images/email.png" alt="Email" width="20"> <a class="text-decoration-none"
                        href="mailto:info@dpdpconsultants.com">info@dpdpconsultants.com</a>
                </p>
                <p>For consultations and product demo<br>
                <h6>Fill out your details to be contacted</h6>
                </p>
                <p class="mt-5"><strong>Follow us:</strong></p>
                <p>
                    <a href="https://www.linkedin.com/company/dpdpconsultants/" target="_blank"><i
                            class="bi bi-linkedin fs-4"></i></a>
                    <a href="https://www.youtube.com/@DPDPConsultants" target="_blank"><i
                            class="bi bi-youtube fs-4"></i></a>
                    <a href="https://x.com/socialdpdp43979" target="_blank"><i class="bi bi-twitter-x fs-4"></i></a>
                </p> -->
            </div>

            <?php } ?>


            <div class="form-box p-3">
                <h4><strong>DPDPA Gap Assessment Form</strong></h4>
                <div class="row mt-3">
                    <div class="col-12 col-md-12 mb-3">
                        <label for="name" class="form-label">Enter Your Name</label>
                        <input type="text" class="form-control" placeholder="Enter Your Name" name="fullname" value="<?php echo $fullname; ?>" required />
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="phone" class="form-label">Enter your phone number</label>
                        <input type="text" maxlength="10" class="form-control" placeholder="Enter your phone number" oninput="this.value=this.value.replace(/\D/g,'').slice(0,10)" name="phoneno" value="<?php echo $phoneno; ?>" required />
                    </div>
                
                    <div class="col-md-6 mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" placeholder="Email" name="emailadd"
                            value="<?php echo strtolower($emailadd); ?>" oninput="this.value = this.value.toLowerCase()"
                            required>
                    </div>



                    <div class="col-12 mb-3">
                        <label for="email" class="form-label">Designation</label>
                        <input type="text" class="form-control" placeholder="Designation" name="designation"
                            value="<?php echo strtolower($designation); ?>" oninput="this.value = this.value.toLowerCase()"
                            required>
                    </div>
    


                    <input type="hidden" name="message" value="<?php echo $message; ?>" />
                    

                    <?php if($_POST) { ?>

<input type="hidden" id="taken" name="taken" value="<?php echo $taken; ?>" />
<style>
.invalid-border { border: 2px solid red !important; background-color: #ffe6e6; }
</style>

                    <div class="col-12">
                        <div class="col-md-6 mb-3">
                            <label for="totp" class="form-label" id="lotp">Enter your OTP shared over Email </label>
                            <input type="text" class="form-control" placeholder="OTP" name="otp" id="totp"
                                style="border: 2px solid #2196F3;background-color: #E3F2FD;transition: 0.3s;"
                                value="<?php echo $totp; ?>" maxlength="6" required />
                                <span id="otperror" style="color: red; display: none;">Invalid OTP</span>
                        </div>

                        <div class="captcha-wrapper my-3">
                            <div class="g-recaptcha" data-sitekey="6LdwSFUqAAAAAA-lavndh9eKrhb_1XHlobRH0qKT"
                                data-callback="Recaptcha_Callback" data-expired-callback="Recaptcha_Expired">
                            </div>
                        </div>


                        <div class="col-12 text-center">
                            <input type="button" name="submit" id="btnproceed" value="PROCEED" class="btn btn-submit"
                                xdata-bs-toggle="modal" xdata-bs-target="#consentModal" style="display:none;" />
                        </div>

                        <input type="submit" name="submit" value="Submit" style="display:none" id="submitbtn" />

                        <?php } else { ?>

                        <div class="col-12 text-center">
                            <input type="submit" name="submit" id="submitbtn" value="Start Assessment" class="btn btn-submit" />
                        </div>

                        <?php } ?>



                    </div>
                </div>
            </div>


        </div>

    </form>


    <?php include 'footer.php'; ?>



    <script>
    let recaptchaValid = false;

    function Recaptcha_Callback() {
        recaptchaValid = true;
        document.getElementById('submitFormBtn').style.display = "block";
        document.getElementById('btnproceed').style.display = "block";
    }

    function Recaptcha_Expired() {
        recaptchaValid = false;
        //alert("reCAPTCHA expired, please complete it again.");
        grecaptcha.reset();

        document.getElementById('submitFormBtn').style.display = "none";
        document.getElementById('btnproceed').style.display = "none";
    }

    $('#submitFormBtn').click(function() {

        $('#submitbtn').click();
        $('#submitFormBtn').prop("disabled", true);

        if (!recaptchaValid) {
            //alert("Please complete the reCAPTCHA verification.");
            return false;
        }

    });

/* 
    $(document).ready(function() {
        var selectedLanguage = $("#languageSelect").val();
        $('#hiddenLanguage').val(selectedLanguage);

        $('#languageSelect').on('change', function() {
            var selectedLanguage = $(this).val();
            $('#hiddenLanguage').val(selectedLanguage);
        });

        $('#btnproceed').click(function() {

            $("#lotp").css("color", "red");
            $("#totp").css("border", "2px solid red");

            if ($("#totp").val().trim() !== "") {

                $("#consentModal").modal("show");

            }

        });

    });
 */

    $(document).ready(function() {
        var selectedLanguage = $("#languageSelect").val();
        $('#hiddenLanguage').val(selectedLanguage);

        $('#languageSelect').on('change', function() {
            var selectedLanguage = $(this).val();
            $('#hiddenLanguage').val(selectedLanguage);
        });

        $('#btnproceed').click(function() {

            // document.getElementById('mainForm').checkValidity();

            let form = document.getElementById("mainForm");
            let isValid = true;

            const requiredFields = form.querySelectorAll("[required]");

            requiredFields.forEach(field => {

                field.classList.remove("invalid-border");

                if (!field.value.trim()) {
                field.classList.add("invalid-border");
                isValid = false;
                }
            });

            if ($("#totp").val().trim() == "") {
                //$("#lotp").css("color", "red");
                //$("#totp").css("border", "2px solid red");
            }

            if ($("#totp").val().trim() == $("#taken").val().trim()) {
                //console.log("OTP matched");
                $("#otperror").css("display", "none");
                $("#lotp").css("color", "green");
                $("#totp").css("border", "2px solid green");
                isValid = true;
            } else {
                // console.log("OTP not matched");
                $("#otperror").css("display", "block");
                $("#lotp").css("color", "red");
                $("#totp").css("border", "2px solid red");
                isValid = false;
            }

            if(isValid) {
                if ($("#totp").val().trim() !== "") {
                    $("#consentModal").modal("show");
                }
            }

        });

    });

    // document.getElementById('btnproceed').disabled = false;
    // $('#btnproceed').prop('disabled', false);
    // $('#btnproceed').removeAttr('disabled');

    // $('#btnproceed').prop('display', true);

    // document.getElementById("datetime").value = new Date();
    </script>



 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>


</body>


</html>