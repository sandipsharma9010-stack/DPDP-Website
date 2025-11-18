<?php session_start();

/* * */

$reqURI = $_SERVER['REQUEST_URI'];

if (stripos($reqURI, 'utm_source') !== false) {

    $utm_source = $_GET['utm_source'];
    $utm_medium = $_GET['utm_medium'];
    $utm_id = $_GET['utm_id'];

    $_SESSION['SESS_UTM'] = $utm_source . ' - ' . $utm_medium . ' - ' . $utm_id;

}

/* * */

$httpReferer = $_SERVER['HTTP_REFERER'];

$sources = ["brevo", "linkedin", "google", "twitter", "facebook", "instagram", "x.com"];

foreach ($sources as $source) {
    //echo " - $source - ";
    if (str_contains($httpReferer, $source)) {
        $_SESSION['SESS_REFERER'] = $source;
        $_SESSION['SESS_REFERER'] = $source . ' - '. $httpReferer;
        break;
    }
}

/* * */

if($utm_source) {
    // $_SESSION['SESS_REFERER'] = $_SERVER['REQUEST_URI'];
}

/* * */

//echo  $_SESSION['SESS_UTM'] . ' - ' . $_SESSION['SESS_REFERER'];

