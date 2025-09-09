<?php

//print_r($_POST);

if ( isset($_POST['submit']) && isset($_POST['email']) && isset($_POST['reqsrc']) ) 
{
    //echo 'mail';

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

    if($act !== 'contact') { $to = 'jaspal.dpdp@gmail.com'; }



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



    if (PEAR::isError($mail)) {

        // echo($mail->getMessage());

        $messagerror ="<span style='max-width:100%;    color: #a94442;
                    background-color: #f2dede;
                    border-color: #ebccd1;padding:10px 8px;text-align:center;margin:5px 0px; display:block;'>Ooops! Something goes wrong, Please try again.</span>";

    } else {

        echo("Message successfully sent!\n");
        // echo"<script>document.location.href=\"thanks.php?act=\";</script>";
    }


}

?>
