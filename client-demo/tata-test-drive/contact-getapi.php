<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);
error_reporting(1);

?>

<?php

/* * */

/* * */

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

$getData = [
    'department_name' => $department
];

// print_r($getData);

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => $api_url.http_build_query($getData),
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

