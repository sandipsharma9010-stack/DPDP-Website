





<?php $act = $_REQUEST["act"] = 'course'; ?>
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

$act = $_REQUEST["act"];
$job = $_REQUEST['job'];
$show = $_REQUEST["show"];

$userAgent = $_SERVER['HTTP_USER_AGENT'];
$ipAddress = $_SERVER['REMOTE_ADDR'];
$httpReferer = $_SERVER['HTTP_REFERER'];

$email_from = $emailadd;

/* * */

/* * */

/* * */

$act = $_REQUEST["act"] = 'course';

$gst_number = @trim(stripslashes($_POST['gst_number']));
$gst_address = @trim(stripslashes($_POST['gst_address']));

$referer = @trim(stripslashes($_POST['referer']));
$coupon = @trim(stripslashes($_POST['coupon']));

/* * */

/* * */

/* * */

if($_POST) {

    //print_r($_POST);
    //exit(0);

    if($show !== 'thanks') {

        include_once('contact-api-3.php');

    }

    if($otp) {

        include_once('contact-db.php');

        include_once('contact-mail.php');

        //echo"<script>document.location.href=\"?act=$act&show=thanks&#divotp\";</script>";

    }

}

/* * */

ini_set('display_errors', 0);

define('RAZOR_KEY', 'rzp_live_tWy3KxRsnOxW5I');
define('RAZOR_SECRET', 'bJVMkvoloykQqS68iXvHf1rj');

require 'vendor/autoload.php';
use Razorpay\Api\Api;


$hostname = 'ls-2afec7242274ab00d3a094e8e0d24d7301187cb4.cnvivecdrcxm.ap-south-1.rds.amazonaws.com';
$dbname = 'dbcontactforms';
$username = 'dbdpdp1username';
$password = 'az-MhDGgs[?.cZ5O!CDsNkxJ9Oxn*4B(';

$dsn = "pgsql:host=$hostname;port=5432;dbname=$dbname";

try {
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    error_log('Database connection failed: ' . $e->getMessage(), 3, '/path/to/error.log');
    die('Database connection failed: ' . $e->getMessage());
}

/* * */

if( ($_POST) && ($otp) ) {

    $pay_amount = 188682; // Course Price

    $coupons = [ 'DPDPAFCPXZFYAK', 'DPDPAMYLAWQPSD' ];

    if(in_array($coupon, $coupons)) { $pay_amount = 99900; }

    if($coupon=='DFCLASSCXZFYAK') { $pay_amount = 10000; $referer = 'DPDP'; }

    if($coupon=='PRIVAMYLAWQPSD') { $pay_amount = 50000; $referer = 'PRIV'; }

    if(str_contains($emailadd,"@dpdpconsultants.com")) { $pay_amount = 100; }

    if(str_contains($emailadd,"_dpdp@yopmail.com")) { $pay_amount = 100; }


    $pay_api = new Api(RAZOR_KEY, RAZOR_SECRET);
    $order = $pay_api->order->create([
        'receipt' => 'rcpt_' . rand(1000, 9999),
        'amount' => $pay_amount,
        'currency' => 'INR',
        'payment_capture' => 1
    ]);


    
    $stmt = $pdo->prepare("INSERT INTO payments_dpdp (usr_name, usr_email, usr_contact, ord_id, pay_amount, pay_status, gst_number, gst_address, coupon)
        VALUES (:usr_name, :usr_email, :usr_contact, :ord_id, :pay_amount, 'created', :gst_number, :gst_address, :coupon)");
    $stmt->execute([
        ':usr_name' => $fullname,
        ':usr_email' => $emailadd,
        ':usr_contact' => $phoneno,
        ':ord_id' => $order['id'],
        ':pay_amount' => $pay_amount,
        ':gst_number' => $gst_number,
        ':gst_address' => $gst_address,
        ':coupon' => $coupon
    ]);


}

?>





    <!-- contact form start here -->
    <section class="" id="paynow">
        <div class="container text-center">
            <p class="text-uppercase">Register Now</p>
            <h5 class="header-contact">Secure your spot! </h5>
            <h5 class="header-contact">
                <span class="highlight-blue">Shape your privacy career!</span>
            </h5>
        </div>

        <div class="container enroll-container mt-4">
            <div class="row g-4">
                <!-- Left: Image -->
                <div class="col-md-5 text-center">
                    <img src="assets/images/education-pro/contact-img.png" alt="The Time is Now" class="img-fluid contact-img">
                </div>

                <!-- Right: Form -->
                <div class="col-md-7">



<?php if( ($_POST) && ($otp) && ($show !== 'thanks') ) { ?>

<?php

$response = '';

include_once('contact-dpap-check.php');

// echo $response;

$resobj = json_decode($response);

?>

<?php if( ($resobj->status == 'Not Started') || ($resobj->status == 'In Progress') ) { ?>

<h4 class="fw-bold mb-2 thanks-heading">Thanks for registering!</h4>
<p class="">You have already enrolled with this email id and you have not completed the course.</p>

<?php } // end of Not Started ?>

<?php if($resobj->status == 'Completed') { ?>

<h4 class="fw-bold mb-2 thanks-heading">Thanks for registering!</h4>
<p class="">You have already enrolled with this email id and you have completed the course.</p>

<?php } // end of Completed ?>

<?php if( ($resobj->status == 'New User') || ($resobj->status == 'Failed') ) { ?>

<h4 class="fw-bold mb-2 thanks-heading">Thanks for registering!</h4>
<p class="">Your spot is reserved — just hit Pay Now to access everything we've prepared for you.</p>

<div class="price-info-edu mb-3">
    <p class="price-label-edu">Course Price Breakup</p>
    <p>Course Price: <span>₹1599</span></p>
    <p>Gst @ 18%: <span>₹287.82</span></p>
    <p>Final Price: <span>₹1886.82</span></p>
</div>

<form id="payForm" name="payForm" action="?act=course&show=thanks#divotp" method="POST">
<script src="https://checkout.razorpay.com/v1/checkout.js"
    data-key="<?= RAZOR_KEY ?>"
    data-currency="INR"
    data-amount="<?= $pay_amount ?>"
    data-order_id="<?= $order['id'] ?>"
    data-name="DPDP Act Foundation Course"
    data-description="One time purchase"
    data-prefill.name="<?= htmlspecialchars($fullname) ?>"
    data-prefill.email="<?= htmlspecialchars($emailadd) ?>"
    data-prefill.contact="<?= htmlspecialchars($phoneno) ?>"
    data-buttontext="Pay Now">
</script>
<input type="hidden" name="fullname" value="<?php echo $fullname; ?>" />
<input type="hidden" name="emailadd" value="<?php echo $emailadd; ?>" />
<input type="hidden" name="phoneno" value="<?php echo $phoneno; ?>" />
<input type="hidden" name="gst_number" value="<?php echo $gst_number; ?>" />
<input type="hidden" name="gst_address" value="<?php echo $gst_address; ?>" />
</form>

<script>

$(document).ready(function() {

    // document.getElementById("payForm").submit();

    // $('#payForm').submit();

});

</script>

<?php } // end of New User / Failed ?>

<?php } // end of show thanks  ?>




<?php if( ($show == 'thanks') ) { ?>

<?php

// print_r($_REQUEST);

$stmt = $pdo->prepare("UPDATE payments_dpdp SET pay_id = :pay_id, pay_status = 'paid' WHERE ord_id = :ord_id");
$stmt->execute([
    ':pay_id' => $_POST['razorpay_payment_id'],
    ':ord_id' => $_POST['razorpay_order_id']
]);


$payment_id = $_POST['razorpay_payment_id'];

$act = $_REQUEST["act"] = 'course';
include_once('contact-dpap-create.php');


?>


<div class="w-100 h-100 d-flex flex-column justify-content-center align-items-center text-center">
                    <div class="thanks-heading1">
                    <h4 class="fw-bold mb-2 ">You’re in! Your privacy-powered journey just got real</h4>
                    </div>
                    <p>Your credentials have been shared on the registered mail.</p>
                    
                </div>



<?php } ?>




<?php if( (!$otp) && ($show !== 'thanks') ) { ?>


                <form xclass="needs-validation" action="#divotp" method="post" id="mainForm" xnovalidate>
                        <input type="text" name="hiddenLanguage" id="hiddenLanguage" value="<?php echo $language; ?>" style="display:none" />
                        <input type="text" name="reqsrc" id="reqsrc" value="course" style="display:none" />
                        <input type="text" name="reqtitle" id="reqtitle" style="display:none" />
                        <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>" />
                        <input type="hidden" name="_token" value="kWtDwQjq9Zf1BpylY4ckP9J8d7Pv8y8yXrynuMlh" />
                        <input type="text" name="act" value="<?=$act;?>" style="display:none" />





                    <form >
                    <h5 class="fw-bold mb-4">Get Enrolled</h5>
                        <div class="row g-3">

                            <div class="col-md-12">
                                <label class="form-label">Full Name</label>
                                <input type="text" class="form-control input-shadow" placeholder="Full Name" name="fullname" value="<?php echo $fullname; ?>" required />
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Email</label>
                                <input type="email" class="form-control input-shadow" placeholder="Email" name="emailadd" value="<?php echo strtolower($emailadd); ?>"
                                    oninput="this.value = this.value.toLowerCase()" required>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Mobile Number</label>
                                <input type="text" class="form-control input-shadow" placeholder="Mobile Number" name="phoneno" value="<?php echo $phoneno; ?>" required />
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">College/Institution/Organisation name</label>
                                <input type="text" class="form-control input-shadow" placeholder="Enter text" name="referer" value="<?php echo $referer; ?>" />
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Coupon/Referral code</label>
                                <input type="text" class="form-control input-shadow" placeholder="Coupon" name="coupon" value="<?php echo $coupon; ?>" />
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">GST number</label>
                                <input type="text" class="form-control input-shadow" placeholder="GST number" name="gst_number" value="<?php echo $gst_number;?>" />
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Address</label>
                                <input type="text" class="form-control input-shadow" placeholder="GST address" name="gst_address" value="<?php echo $gst_address;?>" />
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


<?php } ?>


                </div>
            </div>
        </div>
    </section>






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

    });

    // document.getElementById('btnproceed').disabled = false;
    // $('#btnproceed').prop('disabled', false);
    // $('#btnproceed').removeAttr('disabled');

    // $('#btnproceed').prop('display', true);

    // document.getElementById("datetime").value = new Date();
    </script>




