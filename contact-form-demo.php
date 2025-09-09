
<?php session_start();
date_default_timezone_set('Asia/Kolkata');
include('contact-referer.php');
?>

    <!-- Button to trigger modal -->

    <?php include_once('device-type.php'); ?>
    <?php include_once('contact-getapi.php'); ?>

    <!-- Modal -->
    <div class="modal fade" id="consentModal" aria-labelledby="consentModalLabel" tabindex="0">
        <div class="modal-dialog modal-xl modal-dialog-centered">
            <!-- Made modal extra large and centered -->
            <div class="modal-content">
                <div class="modal-header d-flex justify-content-between align-items-center w-100">
                    <h5 class="modal-title" id="consentModalLabel">
                        <!-- Consent Notice -->
                    </h5>
                    <div tabindex="0" class="d-flex align-items-center">
                        <span class="me-2">Language:</span>
                        <select aria-label="Select an option" id="languageSelect" name="languageSelect"
                            class="form-select form-select-sm w-auto btn-primary text-white language-dropdown">
                            <?php foreach($decoded_response['data'] as $key => $value) {
                                echo '<option value="' . $key . '">' . $key . '</option>'; } ?>

                        </select>
                    </div>
                </div>
                <div class="modal-body">
                    <p>
                        <?php foreach($decoded_response['data'] as $key => $value) {
                            if($key == 'English') { $ln = 'En'; } 
                            elseif($key == 'Hindi') { $ln = 'Hi'; }
                            elseif($key == 'Punjabi') { $ln = 'Pa'; }
                            elseif($key == 'Marathi') { $ln = 'Ma'; }
                            echo '<div lang="' . $ln . '" tabindex="0" id="' . $key . '" class="language-content"><p>' . $value['content'] . '</p></div>'; } ?>
                    </p>
                </div>
                <div class="modal-footer d-flex justify-content-end">
                    <button style="background-color: #007b00 !important;" type="submit" aria-label="Click proceed to Accept consent to share your personal data" class="btn btn-agree input-with-icon" id="submitFormBtn">Agree</button>
                    <button style="background-color: #cc0000 !important;" type="button" aria-label="Click close to reject the consent" class="btn btn-close-custom input-cancel-icon" data-bs-dismiss="modal">Close</button>
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

/* * */

/* * */

$messagerror = "";
$language = @trim(stripslashes($_POST['hiddenLanguage']));
$fullname = @trim(stripslashes($_POST['fullname']));
$emailadd = @trim(stripslashes($_POST['emailadd']));
$phoneno = @trim(stripslashes($_POST['phoneno']));
$subject = @trim(stripslashes($_POST['subject']));
$message = @trim(stripslashes($_POST['message']));
$reqsrc = @trim(stripslashes($_POST['reqsrc']));
$calldt = @trim(stripslashes($_POST['calldt']));

$contact_topic = @trim(stripslashes($_POST['contact_topic']));

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

$ti = 1;

if($_POST) {

    $ti = 0;
    //print_r($_POST);
    //exit(0);

    include_once('contact-api-3.php');

    if($otp) {

        include_once('contact-db.php');

        include_once('contact-mail.php');

        echo"<script>document.location.href=\"thanks.php?act=$act&proceed=$proceed\";</script>";

    }

}

/* * */

?>

    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <div inert tabindex="-1" aria-hidden="true" name="divotp" id="divotp" href="divotp">
        <a  id="#ahrefotp" name="#ahrefotp" href="#ahrefotp"> &nbsp; </a>
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


        <div  class="container contact-container my-5">

            <?php if( (!$act) || ($act=='contact') ) { ?>

            <div class="contact-box" aria-label="Contact Information">
                <h2>Contacts us</h2>
                <p>DPDP Consultants (A Privacyium Tech Pvt. Ltd. Company)</p>
                <p>Have a query? Feel free to contact our privacy experts</p>
                <p>
                    <img src="./assets/images/call-contact.png" alt="Phone icon" width="30" class="my-2" />
        <a href="tel:18005311777" aria-label="Call DPDP Consultants at 1 800 5311 777">
            1800-5311-777
        </a><br>
                    <img src="./assets/images/email.png" alt="Email" width="20"> <a class="text-decoration-none"
                        href="mailto:info@dpdpconsultants.com">info@dpdpconsultants.com</a>
                </p>
                <p>For consultations and product demo</p>
                <h3>Fill out your details to be contacted</h3>
               
                <p class="mt-5"><strong>Follow us:</strong></p>
                <p>
                    <a href="https://www.linkedin.com/company/dpdpconsultants/" target="_blank" aria-label="Visit us on LinkedIn"><i
                            class="bi bi-linkedin fs-4" aria-hidden="true"></i></a>
                    <a href="https://www.youtube.com/@DPDPConsultants" target="_blank" aria-label="Visit us on YouTube"><i
                            class="bi bi-youtube fs-4" aria-hidden="true"></i></a>
                    <a href="https://x.com/socialdpdp43979" target="_blank" aria-label="Visit us on Twitter (X)"><i class="bi bi-twitter-x fs-4" aria-hidden="true"></i></a>
                </p>
            </div>

            <?php } ?>

            <?php if($act=='newsletter') { ?>

            <div class="contact-box">
                <img src="./assets/images/contact-newsletter.png" alt="Newsletter" width="220">
            </div>

            <?php } ?>

            <?php if($act=='schedule') { ?>

            <div class="contact-box">
                <img src="./assets/images/contact-schedule.png" alt="Schedule" width="220">
            </div>

            <?php } ?>

            <?php if($act=='careers') { ?>

            <div class="contact-box">
                <img src="./assets/images/contact-career.png" alt="Career" width="220">
            </div>

            <?php } ?>

            <div class="form-box p-3">
                <h1 <?php if($ti){?> tabindex="1" style="font-size:27px;"> <?php }?> <strong><?=$hdtext; ?></strong></h1>
                <div class="row mt-3">
                    <div class="col-12 col-md-12 mb-3">
                        <label for="name" class="form-label">Full Name</label>
                        <input type="text" <?php if($ti){?> tabindex="2" <?php }?> class="form-control" id="name" placeholder="Full Name" name="fullname" value="<?php echo $fullname; ?>" required />
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="phone" class="form-label">Contact</label>
                        <input type="text" id="phone" <?php if($ti){?> tabindex="3" <?php }?> class="form-control" placeholder="Contact" maxlength="10" pattern="[0-9]{10}" name="phoneno" value="<?php echo $phoneno; ?>" required />
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" id="email" <?php if($ti){?> tabindex="4" <?php }?> class="form-control" placeholder="Email" name="emailadd"
                            value="<?php echo strtolower($emailadd); ?>" oninput="this.value = this.value.toLowerCase()"
                            required>
                    </div>

                    <?php if( (!$act) || ($act=='contact') ) { ?>

                    <div class="col-12 mb-3 input-group">
                        <div class="col-12">
                            <label for="contact_topic" class="form-label w-100">Select a Topic:</label>
                            <select <?php if($ti){?> tabindex="5" <?php }?> id="contact_topic" name="contact_topic" class="form-control form-select">
                                <option value="compliance_evaluation">Compliance Evaluation & Risk Assessment</option>
                                <option value="policy_development">Assist in Policy Development</option>
                                <option value="training_education">Training & Education Programs for DPDPA Compliance</option>
                                <option value="data_audit_analysis">Comprehensive Data Audit & Analysis</option>
                                <option value="incident_response">Incident Response Planning</option>
                                <option value="live_demos">Live Demonstrations of Compliance Tools</option>
                                <option value="gap_assessment">Gap Assessment Review & Remediation Planning</option>
                                <option value="dpo_service">Data Protection Officer as a Service</option>
                                <option value="contract_review">Contract Review & Data Processing Agreements</option>
                                <option value="consulting_advisory">Consulting, Advisory, and Audit</option>
                            </select>
                        </div>
                    </div>

                    <?php } ?>

                    <?php if($_POST) { ?>
                    <?php if( (!$act) || ($act=='contact') || ($act=='careers') ) { ?>

                        <div class="col-12 mb-3 input-group">
                        <div class="col-12">
                            <label for="message" class= "form-label w-100">Your Message:</label>
                            <textarea class="form-control" id="message" name="message" aria-label="Enter your Message" aria-describedby="messageDesc" novalidate="" rows="8" style="height: 100px;"> <?php echo $message; ?> </textarea>
                        </div>
                        
                    </div>

                    <?php } else { ?> <input type="hidden" name="message" value="<?php echo $message; ?>" /> <?php } ?>

                    <?php } ?>

                    <?php if($act=='newsletter') { ?> <input type="hidden" name="contact_topic" value="newsletter" /> <?php } ?>
                    <?php if($act=='whitepaper') { ?> <input type="hidden" name="contact_topic" value="whitepaper" /> <?php } ?>
                    <?php if($act=='research') { ?> <input type="hidden" name="contact_topic" value="research" /> <?php } ?>
                    <?php if($act=='webinar') { ?> <input type="hidden" name="contact_topic" value="webinar" /> <?php } ?>
                    <?php if($act=='event') { ?> <input type="hidden" name="contact_topic" value="event" /> <?php } ?>

                    <?php if( ($_POST) && ($act=='careers') ) { ?> <input type="hidden" name="contact_topic" value="careers" />

                    <input type="hidden" name="job" value="<?php echo $job; ?>" />

                    <div class="col-md-12 mb-3 input-group">
                        <div class="col-12">
                            <label for="resume" class="form-label">Upload Resume File</label>
                            <input type="file" class="form-control" name="resumefile" />
                        </div>
                        <div class="col-12 mt-3">
                            <label for="resume" class="form-label">Current CTC</label>
                            <input type="text" class="form-control" name="salary" placeholder="Current CTC" />
                        </div>
                    </div>

                    <?php } ?>

                    <?php if( ($_POST) && ($act=='schedule') ) { ?> <input type="hidden" name="contact_topic" value="schedule" />

                    <div class="col-12 mb-3">

                        <input type="datetime-local" class="form-control" name="calldt" id="calldt"
                            value="<?php echo date('Y-m-d\TH:i', strtotime('1 day')); ?>"
                            min="<?php echo date('Y-m-d\TH:i', strtotime('1 day')); ?>"
                            max="<?php echo date('Y-m-d\TH:i', strtotime('1 month')); ?>" />
                    </div>

                    <?php } ?>

                    <?php if($_POST) { ?>


                    <div class="col-12">
                        <div class="col-md-6 mb-3">
                            <label for="totp" class="form-label" id="lotp">Enter your OTP shared over Email </label>
                            <input type="text" tabindex="2" class="form-control" placeholder="OTP" name="otp" id="totp"
                                style="border: 2px solid #2196F3;background-color: #E3F2FD;transition: 0.3s;"
                                value="<?php echo $totp; ?>" maxlength="6" required aria-required="true" />
                        </div>

                        <div class="captcha-wrapper my-3">
                            <div class="g-recaptcha" tabindex="3" data-sitekey="6LdwSFUqAAAAAA-lavndh9eKrhb_1XHlobRH0qKT"
                                data-callback="Recaptcha_Callback" data-expired-callback="Recaptcha_Expired">
                            </div>
                        </div>


                        <div class="col-12 text-center">
                            <input style="background-color: #007b00 !important;" type="button" aria-label="Click proceed to Accept consent to share your personal data" tabindex="0" name="submit" id="btnproceed" value="PROCEED" class="btn btn-submit input-with-icon"
                                xdata-bs-toggle="modal" xdata-bs-target="#consentModal" style="display:none;" />
                        </div>

                        <input type="submit" name="submit" value="Submit" style="display:none" id="submitbtn" />

                        <?php } else { ?>

                        <div class="col-12 text-center">
                             <input style="background-color: #007b00 !important;" type="submit" aria-label="Click proceed to Accept consent to share your personal data"
                              tabindex="6" name="submit" id="submitbtn" value="Submit" class="btn btn-submit input-with-icon"/>
                        
                        </div>

                        <?php } ?>



                    </div>
                </div>
            </div>


        </div>

    </form>

    <style>
    .input-with-icon {
      /* White Check Icon (Base64 SVG) */
      background: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="white" class="bi bi-check2" viewBox="0 0 16 16"><path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7.5 7.5a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6 10.293l7.146-7.147a.5.5 0 0 1 .708 0z"/></svg>') no-repeat 12px center;
      background-color: #007b00 !important;
      background-size: 18px;
      color: white;
      padding-left: 40px;
      border: none;
      height: 45px;
      border-radius: 12px;
      font-size: 16px;
      cursor: pointer;
    }

    .input-cancel-icon {
      background-color: #cc0000 !important;
      background: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="white" class="bi bi-x-lg" viewBox="0 0 16 16"><path d="M2.146 2.146a.5.5 0 0 1 .708 0L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854a.5.5 0 0 1 0-.708z"/></svg>') no-repeat 12px center;
      background-size: 18px;
      color: white;
      padding-left: 40px;
      border: none;
      height: 45px;
      border-radius: 12px;
      font-size: 16px;
      cursor: pointer;
      margin: 10px;
    }
  </style>

    <script>
    let recaptchaValid = false;

    function Recaptcha_Callback() {
        recaptchaValid = true;
        document.getElementById('submitFormBtn').style.display = "block";
        document.getElementById('btnproceed').style.display = "block";
        document.getElementById("btnproceed").focus();
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

        if (!recaptchaValid) {
            //alert("Please complete the reCAPTCHA verification.");
            return false;
        }

        $('#submitbtn').click();
    });

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

        setTimeout(() => { document.getElementById("message").focus(); }, 200); 

    });

<?php if($_POST) { ?>

    // $(document).ready(function() {

    window.addEventListener("load", function () {
     messageField = document.getElementById("message");
     otpField = document.getElementById("totp");

    
    // document.querySelectorAll("input, select, button").forEach(el => {
    //   el.setAttribute("tabindex", "-1");
    // });

   
    if (messageField && otpField) {
      messageField.setAttribute("tabindex", "1");
      otpField.setAttribute("tabindex", "2");

      
      setTimeout(() => {
        messageField.focus();
      }, 200); 
    }
  });

// });

<?php } ?>


 const myModal = document.getElementById('consentModal');
  myModal.addEventListener('shown.bs.modal', function () {
    // Focus the div to announce message
    document.getElementById('languageSelect').focus();
  });

//     window.addEventListener('DOMContentLoaded', function() {
//     document.getElementById('message').focus();
//   });


    // document.getElementById('btnproceed').disabled = false;
    // $('#btnproceed').prop('disabled', false);
    // $('#btnproceed').removeAttr('disabled');

    // $('#btnproceed').prop('display', true);

    // document.getElementById("datetime").value = new Date();
    </script>

