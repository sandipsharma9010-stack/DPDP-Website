<?php

if ( isset($_POST['submit']) && isset($_POST['email']) && isset($_POST['reqsrc']) ) 
{


    $messagerror = "";
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

    require_once "Mail.php";

    $host = "smtp-mail.outlook.com";
    $port = "587";
    $username = 'connect@dpdpconsultants.com';
    $password = 'Dpdp@14204';

    $from = "connect@dpdpconsultants.com";

    $to = 'info@dpdpconsultants.com';
    // $to = 'jaspal.singh@dpdpconsultants.com';

    if(str_contains($email,"yopmail") || str_contains($email,"dpdpconsultants")) {
        $to = 'jaspal.dpdp@gmail.com';
    }

    $too = 'info2.querys@gmail.com';

    $subject = "An Enquiry from dpdpconsultants.com";
    $body = "We have received an enquiry from dpdpconsultants.com \n User Name : $name \n User Email : $email \n User Phone : $phone \n Subject : $subject \n Comment Or Message : \n $message \n ";
    if($POST['schedulecall']=='TRUE') { $body .= " \n Schedule Date: $date \n "; }
    $body .= " \n IP Address: $ipAddress \n $userAgent \n $reqsrc - $httpReferer \n ";

    $headers = array ('From' => $from, 'To' => $to,'Subject' => $subject);
    $smtp = Mail::factory('smtp',
        array ('host' => $host,
        'port' => $port,
        'auth' => true,
        'username' => $username,
        'password' => $password));

    $mail = $smtp->send($to, $headers, $body);

/*

    $subject2 = "Enquiry Submission on dpdpconsultants.com";
    $body2 = "Dear User, \n \n Privacyium Tech, taking cognizance of data fiduciary obligation under Chapter 2 Section 5 of the DIGITAL PERSONAL DATA PROTECTION ACT, 2023, hereby serves you with our Privacy Notice. \n \n Please go through our privacy notice to understand how Privacyium Tech processes your personal data, manner in which you can exercise your data principal rights and duties, the channel for grievance redressals and contact points of our data protection team. \n \n Privacy Notice: https://www.dpdpconsultants.com/privacyium-privacy-policy.php \n \n Sincerely Yours, \n Privacyium Tech <br> ";

    $headers2 = array ('From' => $from, 'To' => $email,'Subject' => $subject2);
    $smtp2 = Mail::factory('smtp',
        array ('host' => $host,
        'port' => $port,
        'auth' => true,
        'username' => $username,
        'password' => $password));

    $mail = $smtp2->send($email, $headers2, $body2);

*/

    if (PEAR::isError($mail)) {

        // echo($mail->getMessage());

        $messagerror ="<span style='max-width:100%;    color: #a94442;
                    background-color: #f2dede;
                    border-color: #ebccd1;padding:10px 8px;text-align:center;margin:5px 0px; display:block;'>Ooops! Something goes wrong, Please try again.</span>";

    } else {
        $act = $_REQUEST['act'];
        echo("Message successfully sent!\n");
        echo"<script>document.location.href=\"index.php?act=$act&msg=thanks\";</script>";
    }


}

?>
