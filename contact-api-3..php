<?php

ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
//error_reporting(E_ALL);
error_reporting(0);

/* * */
//print_r($_POST);
$messagerror = "";
$language = @trim(stripslashes($_POST['hiddenLanguage']));
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

if($POST['schedulecall']=='TRUE') { $date = @trim(stripslashes($_POST['date'])); }
$email_from = $email;

/* * */

//$name = 'Jaspal';
//$email = 'jaspal@xyz.com';
//$phone = '9876543210';
//$otp = '';

/* * */

require 'vendor/autoload.php';
 
use \Firebase\JWT\JWT;

$secret_key = '031950e5-cc58-4e34-b442-70136a791c80'; // tech
$secret_key = '0689009f-8eeb-45fc-8694-700256da5f23'; // dpdp

$now = time();
$expiry = 1767205799;
$expiry = $now + 3600;

$jwt_payload = array(
    //  'iss' => 'http://portal-uat.dpdpconsultants.com', // tech
      'iss' => 'http://portal.dpdp-uat.dpdpconsultants.com', // dpdp
    //  'aud' => 'http://tech.portal-uat.dpdpconsultants.com', //tech
      'aud' => 'http://dpdp.portal.dpdp-uat.dpdpconsultants.com', // dpdp
    //  'email' => 'jaspal.singh@dpdpconsultants.com', // tech
      'email' => 'jessicadjones@yopmail.com', // dpdp
      'expiry' => $expiry
);

$token = JWT::encode($jwt_payload, $secret_key, 'HS256');

// print_r($jwt_payload);
// echo "<br>" . $token . "<br>";

/* * */

$ipAddress = $_SERVER['REMOTE_ADDR'];

$department = 'Contact Us';
if($_REQUEST["act"]==='schedule') {
    $department = 'Sales Enquiry';
} elseif($_REQUEST["act"]==='careers') {
    $department = 'Careers';
} elseif($_REQUEST["act"]==='visitor') {
    $department = 'Visitor Desk';
}

$postData = [
    'name' => $name,
    'email' => $email,
    'phone' => $phone,
    'ipaddress' => "$ipAddress",
    'department' => $department,
    'device_type' => $devicetype,
    
];

if(!empty($otp)) {
    $postData['otp'] = $otp;
} 

if(!empty($language)) {
    $postData['language'] = $language;
}

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'http://dpdp.portal.dpdp-uat.dpdpconsultants.com/api/v2/create_consent',
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



/*
if( ($_SERVER['SCRIPT_NAME']==='/contact-us2.php') && (!empty($otp)) ) {
    print_r($postData );
    echo "<br>" . $response . "<br>";
    die();
}
*/

?>