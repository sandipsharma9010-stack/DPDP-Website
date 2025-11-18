
<?php session_start();
date_default_timezone_set('Asia/Kolkata');
include('contact-referer.php');
/* * */

ini_set('display_errors', 0);

//print_r($_POST);

if ( isset($_POST['submit']) && isset($_POST['emailadd']) && isset($_POST['reqsrc']) ) 
{
    //echo 'mail';

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
    $currsalary = @trim(stripslashes($_POST['currsalary']));
    $expsalary = @trim(stripslashes($_POST['expsalary']));
    $experience = @trim(stripslashes($_POST['experience']));

    $contact_topic = @trim(stripslashes($_POST['contact_topic']));

    $otp = @trim(stripslashes($_POST['otp']));

    $job = $_REQUEST['job'];
    $act = $_REQUEST["act"];
    $show = $_REQUEST["show"];

    $userAgent = $_SERVER['HTTP_USER_AGENT'];
    $ipAddress = $_SERVER['REMOTE_ADDR'];
    $httpReferer = $_SERVER['HTTP_REFERER'];
    $sessReferer = $_SESSION['SESS_REFERER'];
    $sessUtm = $_SESSION['SESS_UTM'];

    $email_from = $emailadd;

    /* * */

    /* * */

    /* * */

    require_once "Mail.php";
    require_once "Mail/mime.php";

    $host = "smtp-mail.outlook.com";
    $port = "587";
    $username = 'connect@dpdpconsultants.com';
    $password = 'Dpdp@14204';

    $from = "connect@dpdpconsultants.com";

    //$to = 'info@dpdpconsultants.com';
    //$to = 'jaspal.singh@dpdpconsultants.com';
    $to = 'jaspal.dpdp@gmail.com';

    $req_url = $_SERVER['REQUEST_URI'];
    if(strpos($req_url, 'course')) { $act = $contact_topic = 'course'; }

    if($calldt) { $calldt = date('d-m-Y h:i A', strtotime($calldt)); }

    if( ($act=='') || ($act=='schedule') || ($act=='contact') ) { $to='info@dpdpconsultants.com'; }

    if(str_contains($emailadd,"yopmail") || str_contains($emailadd,"dpdpconsultants")) {
        $to = 'jaspal.dpdp@gmail.com';
    }

    $subject = "Email from dpdpconsultants.com - $contact_topic - $calldt - $currsalary - $expsalary - $experience - $job";

    $body = "Email from dpdpconsultants.com - \r\n  \r\n $fullname - $phoneno - $emailadd - $language \r\n - \r\n $contact_topic - $calldt - $currsalary - $expsalary - $experience - $job \r\n - \r\n $message \r\n - \r\n ";

    $body .= " - \r\n $devicetype - $ipAddress -  $reqsrc - \r\n $sessUtm - $sessReferer - \r\n $httpReferer - \r\n ";

    $bcc='jaspal.dpdp@gmail.com';

    $mime = new Mail_mime([
        'eol' => "\r\n"
    ]);

    $mime->setHTMLBody($body);
    $mime->setContentType('multipart/alternative');

    //print_r($_FILES);
    if (!empty($_FILES['resumefile']['tmp_name'])) {
        $file = $_FILES['resumefile']['tmp_name'];
        $filename = $_FILES['resumefile']['name'];
        $mime->addAttachment($file, mime_content_type($file), $filename, true);
    }

    $headers = array ('From' => $from, 'To' => $to,'Subject' => $subject);

    if($bcc) {
        $headers['Bcc'] = $bcc;
    }

    $body = $mime->get();
    $headers = $mime->headers($headers);

    $smtp = Mail::factory('smtp',
        array ('host' => $host,
        'port' => $port,
        'auth' => true,
        'username' => $username,
        'password' => $password));

    $mail = $smtp->send($to, $headers, $body);



    if (PEAR::isError($mail)) {

        // echo($mail->getMessage());

        $messagerror ="<span style='max-width:100%;    color: #a94442;
                    background-color: #f2dede;
                    border-color: #ebccd1;padding:10px 8px;text-align:center;margin:5px 0px; display:block;'>Ooops! Something goes wrong, Please try again.</span>";

    } else {

        // echo("Message successfully sent!\n");
        // echo"<script>document.location.href=\"thanks.php?act=\";</script>";
    }


}

?>
