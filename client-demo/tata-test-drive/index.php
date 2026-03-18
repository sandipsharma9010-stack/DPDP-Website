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


    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

   

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

    




  /* ===============================
   EXACT MATCH TO FIRST SCREENSHOT
   =============================== */

   body{
   font-family: "Poppins", sans-serif;
   }

/* Container spacing */
.ss-container {
  max-width: 1200px;
  margin: 0 auto;
  /* display: grid; */
  /* grid-template-columns: 1.35fr 1fr; */
  /* column-gap: 110px; */
  /* align-items: flex-start; */
  gap:100px;
  
}

/* Headings */
.ss-left h1,
.ss-right h1 {
  font-size: 39px;
  font-weight: 700;
  margin-bottom: 10px;
}

.ss-subtitle,
.ss-right p {
  font-size: 20px;
  color: #6b7280;
  line-height: 1.6;
}

/* Rows */
.ss-row {
  display: flex;
  gap: 36px;
  margin-bottom: 34px;
}

/* Field wrapper */
.ss-field {
  flex: 1;
  position: relative;
}


.ss-field input {
  font-size: 17px;
  font-weight: 500;
  padding: 6px 0 5px 0;
  background: transparent;
  border: 0;
  border-bottom: 2px solid #383737;
  display: block;
  outline: none;
  color: #383737;
  width: 100%;
  height: 100%;
}


/* INPUT & SELECT */

.ss-field select {
  width: 100%;
  border: none;
  border-bottom: 1.5px solid #1f2937;
  background: transparent;
  padding: 22px 0 6px;
  font-size: 17px;
  font-weight: 500;
  color: #111827;
  padding: 15px  !important;
}
.ss-field select option {
   padding: 10px 12px !important;
  font-size: 17px;
  font-weight: 500;
  color: #111827;
  padding: auto;
}

/* LABEL LOOK (placeholder as label) */
/* .ss-field input::placeholder {
  position: absolute;
  top: 0;
  left: 0;
  font-size: 15px;
  font-weight: 500;
  color: #6b7280;
  opacity: 1;
} */

/* Full width contact number */
.ss-row > .ss-field:only-child {
  width: 100%;
}

/* Model dropdown */
.ss-field select {
  appearance: none;
  background-image: url("data:image/svg+xml,%3Csvg width='14' height='8' viewBox='0 0 14 8' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1 1L7 7L13 1' stroke='%231f2937' stroke-width='1.5'/%3E%3C/svg%3E");
  background-repeat: no-repeat;
  background-position: right 2px top 30px;
  cursor: pointer;
  color: #6b7280;
  font-weight: 500;
}

/* Checkbox rows */
.ss-check,
.ss-left > div:has(#agreebox1) {
  display: flex;
  align-items: center;
  gap: 14px;
  margin-top: 28px;
  font-size: 15px;
  color: #111827;
}

/* Checkbox size */
.ss-check input,
#agreebox1 {
  width: 18px;
  height: 18px;
  accent-color: #2563eb;
}


.ss-check,
.ss-left > div:has(#agreebox2) {
  display: flex;
  align-items: center;
  gap: 14px;
  margin-top: 28px;
  font-size: 15px;
  color: #111827;
}

/* Checkbox size */
.ss-check input,
#agreebox2 {
  width: 18px;
  height: 18px;
  accent-color: #2563eb;
  padding:10px;
}

/* Terms text */
.ss-terms {
  margin-top: 14px;
  font-size: 17px;
  color: #6b7280;
  line-height: 1.6;
  max-width: 520px;
}

.ss-terms a {
  color: #2563eb;
  font-weight: 500;
  text-decoration: none;
}

.arrow-link {
  display: inline-block;
  margin-top: 6px;
}

/* Submit button */
#submitbtn {
  margin-top: 28px;
  padding: 10px 40px;
  font-size: 15px;
  font-weight: 500;
  background: #ffffff;
  border: 1.5px solid #2563eb;
  color: #2563eb;
  border-radius: 4px;
}

/* Right info blocks */
.ss-info {
  margin-bottom: 36px;
}

.ss-info span {
  font-size: 15px;
  color: #6b7280;
}

.ss-info strong {
  display: block;
  font-size: 18px;
  font-weight: 600;
  margin: 6px 0;
  color: #111827;
}

.ss-info small {
  font-size: 14px;
  color: #6b7280;
}


.row > .col-sm-6:first-child {
  padding-right: 40px;
}

.row > .col-sm-6:last-child {
  padding-left: 40px;
}


/* Mobile */
@media (max-width: 768px) {
  .ss-container {
    grid-template-columns: 1fr;
    row-gap: 50px;
  }
}





 /* Collapse start  */

/* Collapse card */
.ga-in {
 display: flex  !important;
 /* padding:10px; */

}
.ga-collapse {
  border: 1px solid #d6d6d6;
  border-radius: 12px;
  background: #ffffff;
  margin-bottom: 20px;
  /* display: flex;
  padding:3px; */
}

/* Header */
.ga-header {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 6px 9px;
  cursor: pointer;
}

/* Left header */
.ga-left {
  display: flex;
  align-items: center;
  gap: 14px;
}

.ga-icon {
  /* width: 44px; */
  /* height: 44px; */
  /* background: #0b1b3f; */
  border-radius: 6px;
  color: #fff;
  display: flex;
  align-items: center;
  justify-content: center;
}

.ga-title {
  font-size: 18px;
  font-weight: 600;
  color: #0b1b3f;
}

.ga-arrow {
  font-size: 30px;
  transition: transform 0.3s ease;
}

/* Body */
.ga-body {
  display: none;
  padding: 22px;
  border-top: 1px solid #e5e7eb;
}

/* Active */
.ga-collapse.active .ga-body {
  display: block;
}

.ga-collapse.active .ga-arrow {
  transform: rotate(180deg);
}

/* Consent content */
.consent-content {
  font-family: "Poppins", sans-serif;
}

.consent-text {
  font-size: 14.5px;
  line-height: 1.7;
  color: #374151;
  margin-bottom: 16px;
}

.consent-text a {
  color: #2563eb;
  font-weight: 500;
  text-decoration: none;
}

.fw-500 {
  font-weight: 500;
}

/* Table */
.consent-table-wrapper {
  margin: 18px 0 24px;
  border: 1px solid #0b2a45;
}

.consent-table {
  width: 100%;
  border-collapse: collapse;
}

.consent-table thead th {
  background: #0b2a45;
  color: #ffffff;
  font-size: 14px;
  font-weight: 600;
  padding: 14px;
}

.consent-table tbody td {
  font-size: 14px;
  padding: 16px;
  border: 1px solid #0b2a45;
  vertical-align: top;
}

/* Mobile */
@media (max-width: 768px) {
  .consent-table thead {
    display: none;
  }

  .consent-table,
  .consent-table tbody,
  .consent-table tr,
  .consent-table td {
    display: block;
    width: 100%;
  }
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



    <section style="background-color: #f8f8f8 !important;" class="">

        <div class="container ">
<!--
                <div class="d-flex justify-content-end my-3">
                    <a href="index.php?act=accounts" class="btn btn-primary mx-3">Accounts</a>
                    <a href="index.php?act=marketing" class="btn btn-primary mx-3">Marketing</a>
                    <a target="_blank" href="https://abcd.portal-uat.dpdpconsultants.com/dpgr_form?"
                        class="btn btn-primary">Principal Rights</a>
                </div>
-->
                <div class="col-lg-12 col-xl-11 ">

                    <div class=" text-black" >
                        <div class="card-bodwy">
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
                                            $lastname = @trim(stripslashes($_POST['lastname']));
                                            $email = @trim(stripslashes($_POST['email']));
                                            $phone = @trim(stripslashes($_POST['phone']));
                                            $subject = @trim(stripslashes($_POST['subject']));
                                            $message = @trim(stripslashes($_POST['message']));
                                            $reqsrc = @trim(stripslashes($_POST['reqsrc']));

                                            $pincode = @trim(stripslashes($_POST['pincode']));
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

<div class="row gx-5">

<div style="background-color: white !important; padding: 20px 20px;" class="maindiv col-sm-6">
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
                                            <input type="text" placeholder="First Name" name="name" required
                                                value="<?php echo $name; ?>">
                                            <p class="invalid-feedback m-0">Please provide First Name</p>
                                        </div>
                                        


                                        <div class="ss-field">
                                            <input type="text" placeholder="Last Name" name="lastname" required
                                                value="<?php echo $lastname; ?>">
                                            <p class="invalid-feedback m-0">Please provide Last Name.</p>
                                        </div>
                                        </div>

                                            <div class="ss-row">
                                        <div class="ss-field">
                                            
                                            <input type="text" placeholder="Mobile Number" required name="phone"
                                                value="<?php echo $phone; ?>">
                                            <p class="invalid-feedback m-0">Please provide Mobile Number.</p>
                                        </div>
                                        </div>

                                          <div class="ss-row">
                                        <div class="ss-field">
                                            <input type="email" placeholder="Email" required name="email"
                                                value="<?php echo strtolower($email); ?>"
                                                style="text-transform: lowercase;"
                                                oninput="this.value = this.value.toLowerCase()">
                                            <p class="invalid-feedback m-0">Please provide an Email.</p>
                                        </div>


                                        <div class="ss-field">
                                           <input type="text" placeholder="Pincode" required name="pincode"
                                                value="<?php echo $pincode; ?>">
                                            <p class="invalid-feedback m-0">Please provide Pin Code.</p> 
                                        </div>
                                        </div>


                                        <div class="ss-field">
        <label>Model</label>
        <select name="contact_topic">
          <option> Select Option </option>
          <option> Punch </option>
           <option> Sierra </option>
            <option> Harrier </option>
             <option> Altroz </option>
              <option> Tiago </option>
               <option>  CURVV  </option>
               <option>  Safari  </option>
               <option>  Nexon  </option>
              
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

<div class="ss-field mt-2"> Enter your OTP shared over Email 
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

<div class="mt-3">
<input type="checkbox" name="agreebox1" id="agreebox1" required />
 &nbsp; <span style="font-size:17px">I agree to the Terms and Conditions </span>
</div>
 <p class="ss-terms">
        By clicking on Apply, I acknowledge that I have read and accept the
        Terms and Conditions and Privacy Policy.
        <br>
        <a href="https://cars.tatamotors.com/terms-conditions.html" class="arrow-link">Terms and Conditions →</a>
      </p>

      <!-- Collapse start -->
<div class="ga-in">
      <!-- <input type="checkbox" name="agreebox2" id="agreebox2" required /> -->
      <div class="ga-collapse">

  <!-- COLLAPSE HEADER -->
  
  <div class="ga-header" >
    <div class="ga-left">
      <div class="ga-icon"><input type="checkbox" name="agreebox2" id="agreebox2" required /></div>
        <!-- <div class="ga-icon">📄<input type="checkbox" name="agreebox2" id="agreebox2" required /></div> -->

        <div class="" onclick="toggleGA(this)">
      <span class="ga-title" >Consent to Process Personal Data </span>
    </div>
    <span class="ga-arrow" onclick="toggleGA(this)">▾</span>
  </div>
  </div>

  <!-- COLLAPSE BODY -->
  <div class="ga-body">

    <!-- CONSENT CONTENT START -->
    <div class="consent-content">

      <p class="consent-text">
        To proceed, we request your explicit consent to process your personal data
        in accordance with DPDP Act, 2023 by clicking on the Checkbox above.
        Kindly read and understand our Privacy Notice at
        <a href="#">[full link of Website Privacy Notice]</a> for further details.
        Subsequently, a copy of your Consent to this Notice shall be sent to you over
        <a href="#">[Email/WhatsApp/SMS]</a>.
      </p>

      <p class="consent-text fw-500">
        Itemized description of personal data and its purpose of processing:
      </p>

      <div class="consent-table-wrapper">
        <table class="consent-table">
          <thead>
            <tr>
              <th>Specific Data Element</th>
              <th>Purpose</th>
              <th>Grounds of Processing</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>
                First Name<br>
                Last Name<br>
                Phone Number<br>
                Email<br>
                Pin Code
              </td>
              <td>
                For communications related to facilitating test drive of a
                TML Passenger Vehicle and subsequent support for purchase
                related queries
              </td>
              <td>
                Consent, as required under Section 6 of the DPDP Act, 2023
              </td>
            </tr>
          </tbody>
        </table>
      </div>

      <p class="consent-text">
        You can withdraw your consent and exercise your principal rights by raising
        requests on the Principal Rights Page
        <a href="#">[full link of Principal Rights Request Page]</a>
      </p>

      <p class="consent-text">
        Kindly contact our DPO at
        <a href="#">[DPO official email id]</a> for any personal data related queries.
        In case you are not satisfied with our redressal efforts for digital personal
        data protection, you may approach the
        <a href="#">Data Protection Board of India</a>.
      </p>

    </div>
    <!-- CONSENT CONTENT END -->

  </div>
</div>
</div>



      <!-- Collapse end-->

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

                                        const agreebox1 = document.getElementById('agreebox1');
                                        const agreebox2 = document.getElementById('agreebox2');


                                        if (agreebox1.checked && agreebox2.checked) {

                                            const btnProceed = document.getElementById('btnproceed');
                                            //btnProceed.disabled = true;
                                            btnProceed.innerText = 'Submitting...';

                                            $('#submitbtn').click();

                                        } else {
                                            if (!agreebox1.checked) {
                                                alert("Please accept the terms and conditions before submitting.");
                                            } else if (!agreebox2.checked) {
                                                alert("Please consent to the processing of personal data.");
                                            } 
                                            
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




<script>
function toggleGA(header) {
  header.closest('.ga-collapse').classList.toggle('active');
}
</script>

                                    </div>
                                    </div>

<div class="maindiv col-sm-1">
  </div>
       <div style="background-color: white !important; padding: 20px; 20px" class="col-sm-5">                             <!-- RIGHT INFO -->
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
</div>
</div>



                                    <!-- code  -->



                                  
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