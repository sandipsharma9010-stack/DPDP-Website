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

require '../../vendor/autoload.php';
 
use \Firebase\JWT\JWT;

$site = 'tatafleet';

$api_email = 'jaspal.singh@dpdpconsultants.com';

$secret_key = '031950e5-cc58-4e34-b442-70136a791c80'; // tech

$api_iss = 'https://portal-uat.dpdpconsultants.com';
$api_aud = 'https://tech.portal-uat.dpdpconsultants.com';

$api_url = 'https://tech.portal-uat.dpdpconsultants.com/api/v2/create_consent';

$now = time();
$expiry = 1767205799;
$expiry = $now + 3600;

$jwt_payload = array(
    'iss' => $api_iss,
    'aud' => $api_aud,
    'email' => $api_email,
    'expiry' => $expiry
);

$token = JWT::encode($jwt_payload, $secret_key, 'HS256');

// print_r($jwt_payload);
// echo "<br>" . $token . "<br>";

/* * */

$ipAddress = $_SERVER['REMOTE_ADDR'];

$department = 'TataFleet';
if($_REQUEST["act"]==='accounts') {
    $department = 'Accounts';
} elseif($_REQUEST["act"]==='marketing') {
    $department = 'Marketing';
}

$postData = [
    'name' => $name,
    'email' => $email,
    'phone' => $phone,
    'ipaddress' => "$ipAddress",
    'department' => $department,
    'devicetype' => $devicetype,
    
];

if(!empty($otp)) {
    $postData['otp'] = $otp;
} 

if(!empty($language)) {
    $postData['language'] = $language;
}

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => $api_url,
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