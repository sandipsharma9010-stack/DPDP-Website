
<?php session_start();
date_default_timezone_set('Asia/Kolkata');
include('contact-referer.php');
/* * */

ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
error_reporting(E_ALL);
//error_reporting(0);

//print_r($_POST);

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

$userAgent = $_SERVER['HTTP_USER_AGENT'];
$ipAddress = $_SERVER['REMOTE_ADDR'];
$httpReferer = $_SERVER['HTTP_REFERER'];

$email_from = $emailadd;

/* * */

/* * */

/* * */

//$name = 'Jaspal';
//$email = 'jaspal@xyz.com';
//$phone = '9876543210';
//$otp = '';

/* * */

require 'vendor/autoload.php';
 
use \Firebase\JWT\JWT;


$req_url = $_SERVER['REQUEST_URI'];
if(strpos($req_url, 'education-program')) { $department = 'Training'; }
if(strpos($req_url, 'dpdp-act-foundation-course')) { $department = 'Training'; }


$secret_key = '031950e5-cc58-4e34-b442-70136a791c80'; // tech
//$secret_key = '0689009f-8eeb-45fc-8694-700256da5f23'; // dpdp

if($department==='Training') { $secret_key = '1f6d7001-7205-40b2-b3a1-92ae30307d7e'; }

$now = time();
$expiry = 1767205799;
$expiry = $now + 3600;

$jwt_payload = array(
      'iss' => 'https://portal-uat.dpdpconsultants.com', // tech
    //  'iss' => 'http://portal.dpdp-uat.dpdpconsultants.com', // dpdp
      'aud' => 'https://tech.portal-uat.dpdpconsultants.com', //tech
    //  'aud' => 'http://dpdp.portal.dpdp-uat.dpdpconsultants.com', // dpdp
      'email' => 'jaspal.singh@dpdpconsultants.com', // tech
    //  'email' => 'jessicadjones@yopmail.com', // dpdp
      'expiry' => $expiry
);

$API_URL = 'https://tech.portal-uat.dpdpconsultants.com/api/v2/create_consent';

if($department==='Training') {

    $jwt_payload = array(
        'iss' => 'https://lmsportal.dpdpconsultants.com', // tech
        'aud' => 'https://learn.lmsportal.dpdpconsultants.com', //tech
        'email' => 'jaspal.singh@dpdpconsultants.com', // tech
        'expiry' => $expiry
    );

    $API_URL = 'https://learn.lmsportal.dpdpconsultants.com/api/v2/create_consent';

}


$token = JWT::encode($jwt_payload, $secret_key, 'HS256');

// print_r($jwt_payload);
// echo "<br>" . $token . "<br>";

/* * */

$ipAddress = $_SERVER['REMOTE_ADDR'];


$department = 'Contact Us';
if($_REQUEST["act"]==='schedule') {
    $department = 'Sales Enquiry';
} elseif( ($_REQUEST["act"]==='blog') || ($_REQUEST["act"]==='blogs') ) {
    $department = 'Blogs';
} elseif( ($_REQUEST["act"]==='career') || ($_REQUEST["act"]==='careers') ) {
    $department = 'Careers';
} elseif( ($_REQUEST["act"]==='newsletter') || ($_REQUEST["act"]==='newsletters') ) {
    $department = 'Newsletters';
} elseif( ($_REQUEST["act"]==='whitepaper') || ($_REQUEST["act"]==='whitepapers') ) {
  $department = 'Whitepapers';
} elseif($_REQUEST["act"]==='research') {
  $department = 'Research';
} elseif( ($_REQUEST["act"]==='webinar') || ($_REQUEST["act"]==='webinars') ) {
  $department = 'Webinars';
} elseif( ($_REQUEST["act"]==='event') || ($_REQUEST["act"]==='events') ) {
  $department = 'Events';
} elseif( ($_REQUEST["act"]==='course') || ($_REQUEST["act"]==='courses') ) {
  $department = 'Training';
}


$postData = [
    'name' => $fullname,
    'email' => $emailadd,
    'phone' => $phoneno,
    'ipaddress' => "$ipAddress",
    'department' => $department,
    'devicetype' => $devicetype,
    
];

if($department==='Careers') {
    $postData['processing_type'] = "mandatory";
}

if(!empty($otp)) {
    $postData['otp'] = $otp;
} 

if(!empty($language)) {
    $postData['language'] = $language;
}


/* * */

$digi_type = 'parent';
$digi_id = @trim(stripslashes($_POST['digi_id']));;
$digi_locker_id = @trim(stripslashes($_POST['digi_locker_id']));;
$digi_name = @trim(stripslashes($_POST['digi_name']));
$digi_gender = @trim(stripslashes($_POST['digi_gender']));
$digi_dob = @trim(stripslashes($_POST['digi_dob']));
$digi_email = @trim(stripslashes($_POST['digi_email']));
$digi_mobile = @trim(stripslashes($_POST['digi_mobile']));
$digi_eaadhaar = @trim(stripslashes($_POST['digi_eaadhaar']));

$postData['digi_type'] = $digi_type;
$postData['digi_id'] = $digi_id;
$postData['digi_locker_id'] = $digi_locker_id;
$postData['digi_name'] = $digi_name;
$postData['digi_gender'] = $digi_gender;
$postData['digi_dob'] = $digi_dob;
$postData['digi_email'] = $digi_email;
$postData['digi_mobile'] = $digi_mobile;
$postData['digi_eaadhaar'] = $digi_eaadhaar;


/* * */


$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => $API_URL,
  //CURLOPT_URL => 'http://dpdp.portal.dpdp-uat.dpdpconsultants.com/api/v2/create_consent',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS => http_build_query($postData),
  CURLOPT_HTTPHEADER => array('Authorization: Bearer '.$token),
));

$response = curl_exec($curl);

curl_close($curl);



//print_r($postData );
//echo "<br>" . $response . "<br>";
//die();

if( ($_SERVER['SCRIPT_NAME']==='/contact-us2.php') && (!empty($otp)) ) {
    print_r($postData );
    echo "<br>" . $response . "<br>";
    //die();
}


?>
