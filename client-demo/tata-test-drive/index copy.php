<?php session_start();
ini_set('display_errors', 1);
ini_set('error_reporting', 1);
date_default_timezone_set('Asia/Kolkata');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact us</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
   

    <style>

    /* body, html {
      height: 100%;
    } */

    /* body {
      background-image: url('images/bg_tata-fleet.webp');
      height: 100vh;
      background-size: cover;
      background-repeat: no-repeat;
      background-position: center center;
    } */

    




   @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap');

* {
  box-sizing: border-box;
}

body {
  margin: 0;
  font-family: 'Inter', sans-serif;
  background: #ffffff;
  color: #1f2937;
}

/* MAIN CONTAINER */
.ss-container {
  max-width: 1180px;
  margin: 60px auto 40px;
  display: grid;
  grid-template-columns: 1.3fr 1fr;
  gap: 90px;
}

/* LEFT */
.ss-left h1 {
  font-size: 34px;
  font-weight: 600;
  margin-bottom: 8px;
}

.ss-subtitle {
  font-size: 14px;
  color: #6b7280;
  margin-bottom: 36px;
}

/* ROWS */
.ss-row {
  display: flex;
  gap: 28px;
}

/* INPUT FIELD */
.ss-field {
  flex: 1;
  margin-bottom: 28px;
}

.ss-field input,
.ss-field select {
  width: 100%;
  border: none;
  border-bottom: 1px solid #374151;
  background: transparent;
  padding: 8px 0;
  font-size: 16px;
  outline: none;
  color: #111827;
}

/* Placeholder color */
.ss-field input::placeholder {
  color: #6b7280;
  font-size: 14px;
}

/* Model dropdown arrow */
.ss-field select {
  appearance: none;
  background-image: url("data:image/svg+xml,%3Csvg width='14' height='8' viewBox='0 0 14 8' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1 1L7 7L13 1' stroke='%23374151' stroke-width='1.5'/%3E%3C/svg%3E");
  background-repeat: no-repeat;
  background-position: right center;
  cursor: pointer;
}

/* Validation text (hide unless needed) */
.invalid-feedback {
  font-size: 12px;
  color: #dc2626;
  margin-top: 4px;
}

/* CHECKBOX */
.ss-check,
.ss-left > div > input[type="checkbox"] {
  margin-top: 10px;
}

.ss-check {
  display: flex;
  align-items: center;
  gap: 10px;
  font-size: 14px;
  color: #111827;
}

.ss-check input,
#agreebox {
  width: 18px;
  height: 18px;
  accent-color: #2563eb;
}

/* TERMS TEXT */
.ss-terms {
  font-size: 13px;
  color: #6b7280;
  line-height: 1.6;
  margin: 14px 0 18px;
}

.ss-terms a {
  color: #2563eb;
  text-decoration: none;
  font-weight: 500;
}

.arrow-link {
  display: inline-block;
  margin-top: 6px;
}

/* SUBMIT BUTTON */
#submitbtn {
  padding: 10px 38px !important;
  background: #ffffff !important;
  border: 1px solid #2563eb !important;
  color: #2563eb !important;
  font-size: 15px;
  font-weight: 500;
  cursor: pointer;
}

/* RIGHT PANEL */
.ss-right h1 {
  font-size: 32px;
  font-weight: 600;
  margin-bottom: 14px;
}

.ss-right p {
  font-size: 14px;
  color: #6b7280;
  margin-bottom: 36px;
  max-width: 360px;
}

/* INFO BLOCK */
.ss-info {
  margin-bottom: 32px;
}

.ss-info span {
  font-size: 14px;
  color: #6b7280;
}

.ss-info strong {
  display: block;
  font-size: 18px;
  font-weight: 500;
  margin: 6px 0;
  color: #111827;
}

.ss-info small {
  font-size: 14px;
  color: #6b7280;
}

/* FOOTER TEXT */
.footer-text {
  text-align: center;
  font-size: 14px;
  margin-top: 40px;
  color: #111827;
}




    </style>
</head>

<body class="">

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <img src="./images/tata-test.png" alt="Tata Logo" class="" style="max-width: 100%; height: auto; display: block; margin: 0 auto;">
                
            </div>

    <?php include_once('device-type.php'); ?>
    <?php include_once('contact-getapi.php'); ?>

    <div class="modal fade" id="confirmModal" tabindex="-1" aria-labelledby="confirmModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="language-select-container">
                        <label for="languageSelect" class="language-label">Language:</label>

                        <select name="languageSelect" id="languageSelect" class="language-dropdown">
                            <?php foreach($decoded_response['data'] as $key => $value) {
                                echo '<option value="' . $key . '">' . $key . '</option>'; } ?>
                        </select>
                    </div>
                    <h5 class="modal-title" id="confirmModalLabel"> &nbsp; </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <style>
                    ul.disc {
                        padding-left: 20px;
                    }

                    ul.disc li {
                        list-style-type: disc !important;
                    }
                    </style>

                        <?php foreach($decoded_response['data'] as $key => $value) {
                                echo '<div id="' . $key . '" class="language-content"><p>' . $value . '</p></div>'; } ?>

                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" id="submitFormBtn">AGREE</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
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



    <?php $act = $_GET['act']; ?>

<!--

<section class="header">

<div class="center-block">
    <img src="images/abcd_header.png" xclass="img-fluid" alt="Sample image">
</div>

</section>

-->



    <section class="bodycontent">

        <div class="container full-height-container d-flex justify-content-center align-items-center">
<!--
                <div class="d-flex justify-content-end my-3">
                    <a href="index.php?act=accounts" class="btn btn-primary mx-3">Accounts</a>
                    <a href="index.php?act=marketing" class="btn btn-primary mx-3">Marketing</a>
                    <a target="_blank" href="https://abcd.portal-uat.dpdpconsultants.com/dpgr_form?"
                        class="btn btn-primary">Principal Rights</a>
                </div>
-->
                <div class="col-lg-12 col-xl-11 card-background">

                    <div class="card text-black" >
                        <div class="card-bodwy p-md-5">
                            <div class="row justify-content-center">

                                <div class="col-sm-12 order-2 order-lg-1">

                                    <?php if($_REQUEST["msg"]==='thanks') { ?>
                                    <p><h3 style="color:#333; text-transform:uppercase;">Thank you for Providing Us Your Consent</h3></p>
                                    <!-- <p><h4>Thank you for connecting with TataMotors-FleetEdge. Our experts will get back to you ASAP.</h4></p> -->
                                    <br />
                                    <?php } ?>

                                    <!--
                                    <?php if($_REQUEST["act"]==='accounts') { ?>
                                    <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Accounts</p>
                                    <?php } elseif($_REQUEST["act"]==='marketing') { ?>
                                    <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Marketing</p>
                                    <?php } else { ?>
                                    <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Accounts</p>
                                    <?php } ?>
                                    -->
                                </div>

                                <div xclass="col-md-12 col-lg-12 col-xl-8 order-2 order-lg-1">

                                <div class="center-block">

                                <!-- <p>
                                    <img src="images/logo_tata_fleet.svg" class="center text-center" />
                                    <br />
                                </p> -->

                                </div>

                                    <?php

                                            $pan_num = @trim(stripslashes($_POST['pan_num']));

                                            // print_r($_POST);
                                            
                                            $messagerror = "";
                                            $language = @trim(stripslashes($_POST['language']));
                                            $name = @trim(stripslashes($_POST['name']));
                                            $email = @trim(stripslashes($_POST['email']));
                                            $phone = @trim(stripslashes($_POST['phone']));
                                            $subject = @trim(stripslashes($_POST['subject']));
                                            $message = @trim(stripslashes($_POST['message']));
                                            $reqsrc = @trim(stripslashes($_POST['reqsrc']));

                                            $otp = @trim(stripslashes($_POST['otp']));

                                            $userAgent = $_SERVER['HTTP_USER_AGENT'];
                                            $ipAddress = $_SERVER['REMOTE_ADDR'];
                                            $httpReferer = $_SERVER['HTTP_REFERER'];

                                            if ($POST['schedulecall'] == 'TRUE') {
                                                $date = @trim(stripslashes($_POST['date']));
                                            }
                                            $email_from = $email;

/* * */

//print_r($_POST);

if($_POST) {

    include_once('contact-api-3.php');

    if($otp) {
        include_once('contact-db.php');
        include_once('contact-mail.php');
    }

}

/* * */

                                            $grecaptchaSecret = '6LdwSFUqAAAAANpaPZakPiIxFbQ7GEEerbyxB7Jv';
                                            $grecaptchaResponse = $_POST['g-recaptcha-response'];
                                            $gresponse = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret={$grecaptchaSecret}&response={$grecaptchaResponse}");
                                            $gresponseKeys = json_decode($gresponse, true);
                                            // print_r($gresponseKeys);
                                            
                                            if (intval($gresponseKeys["success"]) === 1) {
                                                if (isset($_POST['submit']) && isset($_POST['email']) && empty($_POST['reqtitle'])) {
                                                    if (!isset($_POST['csrf_token']) || $_POST['csrf_token'] !== $_SESSION['csrf_token']) {
                                                        // echo "<br>".$_POST['csrf_token']."<br>".$_SESSION['csrf_token']."<br>";
                                                        // die('Invalid CSRF token');
                                                    }
                                                    // echo " - all OK - ";
                                                    $pattern = '/[^\x00-\x7F]/';
                                                    $msginput = @trim(stripslashes($_POST['message']));
                                                    if (!preg_match($pattern, $msginput)) {
                                                        include_once('contact-api-3.php');

                                                        if ($otp) {
                                                            include_once('contact-db.php');
                                                            include_once('contact-mail.php');
                                                        }
                                                        //die();
                                                    }

                                                }
                                            }

                                            ?>

<!-- <div class="bold center text-center text-center-block">

<p><b>Sign Up</b></p>

<p><b>Enter details to register with TATA Motors</b></p>

</div> -->
                                  <div class="ss-container">

                                    <div class="ss-left">
                                         <h1>Allow us to reach out to you!</h1>
                                           <p class="ss-subtitle">
                                             Fill in your contact details to hear from us at the earliest!
                                         </p>

                                    <form xclass="needs-validation" action="" method="post" id="mainForm" xnovalidate>

                                    
                                    

                                    <input type="hidden" name="hiddenLanguage" id="hiddenLanguage" value="<?php echo $language; ?>" style="display:none">
                                        <input type="text" name="reqsrc" id="reqsrc" value="contact"
                                            style="display:none">
                                        <input type="text" name="reqtitle" id="reqtitle" style="display:none">
                                        <input type="hidden" name="csrf_token"
                                            value="<?php echo $_SESSION['csrf_token']; ?>">
                                        <input type="hidden" name="_token"
                                            value="kWtDwQjq9Zf1BpylY4ckP9J8d7Pv8y8yXrynuMlh" autocomplete="off">

                                             <div class="ss-row">
                                        <div class="ss-field">
                                            <input type="text" placeholder="Your PAN" name="pan_num" required
                                                value="<?php echo $pan_num; ?>">
                                            <p class="invalid-feedback m-0">PAN Number</p>
                                        </div>
                                        


                                        <div class="ss-field">
                                            <input type="text" placeholder="Your Name" name="name" required
                                                value="<?php echo $name; ?>">
                                            <p class="invalid-feedback m-0">Please provide a Name.</p>
                                        </div>
                                        </div>

                                            <div class="ss-row">
                                        <div class="ss-field">
                                            
                                            <input type="text" placeholder="Contact Number" required name="phone"
                                                value="<?php echo $phone; ?>">
                                            <p class="invalid-feedback m-0">Please provide a Contact Number.</p>
                                        </div>
                                        </div>

                                          <div class="ss-row">
                                        <div class="ss-field">
                                            <input type="email" placeholder="Your e-mail" required name="email"
                                                value="<?php echo strtolower($email); ?>"
                                                style="text-transform: lowercase;"
                                                oninput="this.value = this.value.toLowerCase()">
                                            <p class="invalid-feedback m-0">Please provide an Email.</p>
                                        </div>


                                        <div class="ss-field">
                                            <input type="email" placeholder="Pincode" required name="email"
                                                value="<?php echo strtolower($email); ?>"
                                                style="text-transform: lowercase;"
                                                oninput="this.value = this.value.toLowerCase()">
                                            <p class="invalid-feedback m-0">Please provide an Email.</p>
                                        </div>
                                        </div>

                                        <div class="ss-field">
        <label>Model</label>
        <select name="model">
          <option></option>
        </select>
      </div>

                                        

                                        <?php if ($act == 'schedule') { ?>
                                        <div class="single-personal-info">
                                            <input type="date" placeholder="Date" name="date"
                                                value="<?php echo $date; ?>">
                                        </div>
                                        <?php } ?>
                                        <!--
                                        <div class="single-personal-info">
                                            <input type="text" placeholder="Subject" name="subject"
                                                value="<?php echo $subject; ?>">
                                        </div>
                                        -->
                                        <?php if($_REQUEST["act"]==='caareers') { ?>
                                        <div class="single-personal-info">
                                            <input type="file" placeholder="Upload Resume" name="file">
                                        </div>
                                        <?php } ?>
                                        <!--
                                        <div class="single-personal-info">
                                            <textarea placeholder="Your Message" name="message"
                                                novalidate><?php echo $message; ?></textarea>
                                        </div>
                                        -->


<?php if($_POST) { ?>

<div class="single-personal-info"> Enter your OTP shared over Email 
    <input type="text" placeholder="OTP" name="otp" id="totp">
</div>

<!--
<div class="captcha-wrapper my-3">
<div class="g-recaptcha" data-sitekey="6LdwSFUqAAAAAA-lavndh9eKrhb_1XHlobRH0qKT"
    data-callback="Recaptcha_Callback" data-expired-callback="Recaptcha_Expired">
</div>
</div>
-->

<?php } ?>

<div>
<input type="checkbox" name="agreebox" id="agreebox" required />
 &nbsp; I agree to the Terms and Conditions 
</div>
 <p class="ss-terms">
        By clicking on Apply, I acknowledge that I have read and accept the
        <a href="#">Terms and Conditions</a> and
        <a href="#">Privacy Policy</a>.
        <br>
        <a href="#" class="arrow-link">Terms and Conditions →</a>
      </p>

      <div class="ss-check">
        <input type="checkbox">
        <span>Subscribe with WhatsApp</span>
      </div>

<?php if($_POST) { ?>

<br>
<input type="button" class="btn btn-primary open-modal" name="btnproceed" value="PROCEED"
xdata-bs-toggle="modal" xdata-bs-target="#confirmModal" data-form-id="mainForm"
xstyle="display:none;" id="btnproceed" onclick="validateForm()">

<input type="submit" name="submit" value="Submit" style="display:none" id="submitbtn" />

<?php } else { ?>
<br><input style="padding: 10px 36px; background: #fff; border: 1px solid #1a5cff;  color: #1a5cff; font-size: 15px; cursor: pointer;" class="btn btn-primary" type="submit" name="submit" value="Submit" id="submitbtn" onclick="validateForm()" />
<?php } ?>



<!-- <div class="bold center text-center text-center-block">

<p><b>Already Registered? <a href="#fleetedge.home.tatamotors/auth/login">Login</a></b></p>

<p><b>Having Trouble? <a href="tel:1800 209 7979">Talk to our helpdesk</a></b></p>

<p><b><a href="https://tech.portal-uat.dpdpconsultants.com/dpgr_form" target="_blank">Data Principal Rights</a></b></p>

</div> -->
</div>





                                    </form>
                                    </div>



                                    <!-- code  -->



                                    <div class="ss-container">

  <!-- LEFT FORM -->
  <div class="ss-left">

    <h1>Allow us to reach out to you!</h1>
    <p class="ss-subtitle">
      Fill in your contact details to hear from us at the earliest!
    </p>

    <form action="" method="post" id="mainForm">

      <!-- hidden fields (unchanged) -->
      <input type="hidden" name="hiddenLanguage" id="hiddenLanguage">
      <input type="hidden" name="reqsrc" value="contact">
      <input type="hidden" name="reqtitle">
      <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>">

      <!-- First + Last name -->
      <div class="ss-row">
        <div class="ss-field">
          <input type="text" name="first_name" placeholder="First name" required>
        </div>
        <div class="ss-field">
          <input type="text" name="last_name" placeholder="Last name" required>
        </div>
      </div>

      <!-- Mobile -->
      <div class="ss-row">
        <div class="ss-field">
          <input type="text" name="phone" placeholder="+91 Mobile number" required>
        </div>
      </div>

      <!-- Email + Pincode -->
      <div class="ss-row">
        <div class="ss-field">
          <input type="email" name="email" placeholder="Email" required>
        </div>
        <div class="ss-field">
          <input type="text" name="pincode" placeholder="Pincode" required>
        </div>
      </div>

      <!-- Model -->
      <div class="ss-field">
        <select name="model" required>
          <option value="" disabled selected>Model</option>
          <option>Sierra</option>
          <option>Nexon</option>
          <option>Harrier</option>
        </select>
      </div>

      <!-- Terms -->
      <div class="ss-check">
        <input type="checkbox" name="agreebox" id="agreebox" required>
        <span>I agree to the Terms and Conditions</span>
      </div>

      <p class="ss-terms">
        By clicking on Apply, I acknowledge that I have read and accept the
        <a href="#">Terms and Conditions</a> and
        <a href="#">Privacy Policy</a>.
        <br>
        <a href="#" class="arrow-link">Terms and Conditions →</a>
      </p>

      <!-- WhatsApp -->
      <div class="ss-check">
        <input type="checkbox">
        <span>Subscribe with WhatsApp</span>
      </div>

      <!-- Submit -->
      <br>
      <input
        type="submit"
        name="submit"
        id="submitbtn"
        value="Submit"
        class="btn btn-primary"
        onclick="validateForm()"
      >

    </form>
  </div>

  <!-- RIGHT INFO -->
  <div class="ss-right">
    <h1>Give us a call</h1>
    <p>
      If you feel more comfortable calling us, here are our
      numbers and operating hours.
    </p>

    <div class="ss-info">
      <span>Call</span>
      <strong>1800 209 8282</strong>
      <small>Mon – Fri, 8am – 6pm</small>
    </div>

    <div class="ss-info">
      <span>WhatsApp</span>
      <strong>+91 96430 06652</strong>
      <small>Mon – Fri, 8am – 6pm</small>
    </div>
  </div>

</div>






                                    

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

                                    //$('#btnproceed').click(function() {
                                    //});
                                    function checkForm() {
                                       const submitbtn = document.getElementById('submitbtn');
                                       submitbtn.innerText = 'Submitting...'; 
                                    }

                                    function validateForm() {

                                        const agreebox = document.getElementById('agreebox');

                                        if (agreebox.checked) {

                                            const btnProceed = document.getElementById('btnproceed');
                                            //btnProceed.disabled = true;
                                            btnProceed.innerText = 'Submitting...';

                                            $('#submitbtn').click();

                                        } else {

                                            alert("Please accept the terms and conditions before submitting.");
                                            return false;

                                        }

                                    }

                                    $('#submitFormBtn').click(function() {
                                        if (!recaptchaValid) {
                                            //alert("Please complete the reCAPTCHA verification.");
                                            return false;
                                        }

                                        $('#submitbtn').click();
                                    });

                                    $(document).ready(function(){
                                        var selectedLanguage = $("#languageSelect").val();
                                        $('#hiddenLanguage').val(selectedLanguage);

                                        $('#languageSelect').on('change', function(){
                                            var selectedLanguage = $(this).val();
                                            $('#hiddenLanguage').val(selectedLanguage);
                                        });
                                    });

                                    // document.getElementById('btnproceed').disabled = false;
                                    // $('#btnproceed').prop('disabled', false);
                                    // $('#btnproceed').removeAttr('disabled');

                                    // $('#btnproceed').prop('display', true);
                                    </script>



                                </div>
                                <!--
                                <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">
                                    <?php if($_REQUEST["act"]==='careers') { ?>
                                    <img ssrc="./images/careers1.jpg" class="img-fluid" alt="Sample image">
                                    <?php } else {  ?>
                                    <img ssrc="./images/contact-us.avif" class="img-fluid" alt="Sample image">
                                    <?php } ?>
                                </div>
                                -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>


     <div class="col-md-12">
                <img src="./images/tata-footer.png" alt="Tata Logo" class="" style="max-width: 100%; height: auto; display: block; margin: 0 auto;">
                
            </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

</body>

</html>