<?php

ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
// error_reporting(E_ALL);
error_reporting(0);

?>

<?php

/* * */

/* * */

/* * */

require 'vendor/autoload.php';

use \Firebase\JWT\JWT;

$secret_key = '031950e5-cc58-4e34-b442-70136a791c80'; // tech
// $secret_key = '0689009f-8eeb-45fc-8694-700256da5f23'; // dpdp

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

$token = JWT::encode($jwt_payload, $secret_key, 'HS256');

// print_r($jwt_payload);
// echo "<br>" . $token . "<br>";

/* * */

$ipAddress = $_SERVER['REMOTE_ADDR'];

$department = 'Contact Us';
if($_REQUEST["act"]==='schedule') {
    $department = 'Sales Enquiry';
} elseif( ($_REQUEST["act"]==='career') || ($_REQUEST["act"]==='careers') ) {
    $department = 'Careers';
} elseif( ($_REQUEST["act"]==='newsletter') || ($_REQUEST["act"]==='newsletters') ) {
    $department = 'Newsletters';
}

$getData = [
    'department_name' => $department
];

// print_r($getData);

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://tech.portal-uat.dpdpconsultants.com/api/v2/get/template_details?'.http_build_query($getData),
//  CURLOPT_URL => 'http://dpdp.portal.dpdp-uat.dpdpconsultants.com/api/v2/get/template_details?'.http_build_query($getData),
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
  CURLOPT_HTTPHEADER => array('Authorization: Bearer '.$token),
));
 
$response = curl_exec($curl);

// echo "<br>" . $response . "<br>";

$decoded_response = json_decode($response, true, 512, JSON_UNESCAPED_UNICODE);

if($decoded_response['status']==='Success')
{
  //echo " status : success <br> = ";
  //print_r($decoded_response['data']);
  foreach($decoded_response['data'] as $key => $value) {
    //echo $key . " : " . $value . "<br>";
  }
  //echo " = <br>";
}

curl_close($curl);


// echo "<br> - " . $response . " - <br>";

// die();
