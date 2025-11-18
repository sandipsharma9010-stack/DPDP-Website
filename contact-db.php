
<?php session_start();
date_default_timezone_set('Asia/Kolkata');
include('contact-referer.php');
/* * */

$act = $_REQUEST["act"];
/*
if(str_contains($emailadd,"_test") || str_contains($emailadd,"_dpdp") || str_contains($emailadd,"yopmail") || str_contains($emailadd,"dpdpconsultants")) {
*/
if(false) {

} else {

    try {

    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
    

    try {

        /* * */    

        $hostname = 'ls-2afec7242274ab00d3a094e8e0d24d7301187cb4.cnvivecdrcxm.ap-south-1.rds.amazonaws.com';
        $dbname = 'dbcontactforms';
        $username = 'dbdpdp1username';
        $password = 'az-MhDGgs[?.cZ5O!CDsNkxJ9Oxn*4B(';
    
        $dsn = "pgsql:host=$hostname;port=5432;dbname=$dbname";

        /* * */

        $pdo = new PDO($dsn, $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        /* * */

        // $stmt = $pdo->query('SELECT version()');
        // $row = $stmt->fetch(PDO::FETCH_ASSOC);
        // echo "PostgreSQL version: " . $row['version'] . "<br>";
    
        // $stmt = $pdo->query("SELECT * FROM contacts_dpdp");
    
        // $contacts = $stmt->fetchAll();
    
        // print_r($contacts);
    
        /* * */

    } catch (PDOException $e) {
        var_dump($e);
        die('Database connection failed: ' . $e->getMessage());
    }

    try {

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

        $email_from = $emailadd;

        /* * */

        /* * */

        /* * */

        $req_url = $_SERVER['REQUEST_URI'];
        if(strpos($req_url, 'course')) { $act = $contact_topic = 'course'; }

        if($calldt) { $calldt = date('d-m-Y h:i A', strtotime($calldt)); }

        $message = " \n $contact_topic - $calldt - $currsalary - $expsalary - $experience - $job \n - \n $language \n - \n " . $message . " \n - \n ";
        $message .= " - \n $devicetype - $ipAddress -  $reqsrc - \n $sessReferer - \n $httpReferer - \n ";

        /* * */

        /* * */

        /* * */

        if (str_contains($emailadd, "yopmail") || str_contains($emailadd, "dpdpconsultants")) {
            return;
        }

        /* * */
   
        if($act=='') { $act='contact'; }

        $sql = "INSERT INTO contacts_dpdp (fullname, emailadd, phoneno, ipaddress, message_title, message_body, recact, rectopic, recjob, reclang) VALUES (:fullname, :emailadd, :phoneno, :ipaddress, :message_title, :message_body, :recact, :rectopic, :recjob, :reclang)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            ":fullname" => $fullname,
            ":emailadd" => $emailadd,
            ":phoneno" => $phoneno,
            ":ipaddress" => $ipAddress,
            ":message_title" => $subject,
            ":message_body" => $message,
            ":recact" => $act,
            ":rectopic" => $contact_topic,
            ":recjob" => $job,
            ":reclang" => $language
        ]);
    } catch (PDOException $e) {
        die('Database connection failed: ' . $e->getMessage());
    }

}

?>