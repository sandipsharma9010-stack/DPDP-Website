<?php

$act = $_GET['act'];

if(str_contains($email,"test") || str_contains($email,"dpdp") || str_contains($email,"yopmail") || str_contains($email,"dpdpconsultants")) {

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

        $messagerror = "";
        $fullname = @trim(stripslashes($_POST['name']));
        $emailadd = @trim(stripslashes($_POST['email']));
        $phoneno = @trim(stripslashes($_POST['phone']));
        $subject = @trim(stripslashes($_POST['subject']));
        $subject .= ' \n Topic: ' . @trim(stripslashes($_POST['contact_topic']));
        $message = @trim(stripslashes($_POST['message']));
        $reqsrc = @trim(stripslashes($_POST['reqsrc']));
        
        $otp = @trim(stripslashes($_POST['otp']));
        
        $userAgent = $_SERVER['HTTP_USER_AGENT'];
        $ipAddress = $_SERVER['REMOTE_ADDR'];
        $httpReferer = $_SERVER['HTTP_REFERER'];
        
        $message .= " \n IP Address: $ipAddress \n $userAgent \n $reqsrc - $httpReferer \n ";

        if($POST['schedulecall']=='TRUE') { $date = @trim(stripslashes($_POST['date'])); }
        $email_from = $emailadd;

        /* * */    

        $sql = "INSERT INTO contacts_dpdp (fullname, emailadd, phoneno, ipaddress, message_title, message_body) VALUES (:fullname, :emailadd, :phoneno, :ipaddress, :message_title, :message_body)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            ":fullname" => $fullname,
            ":emailadd" => $emailadd,
            ":phoneno" => $phoneno,
            ":ipaddress" => $ipAddress,
            ":message_title" => $subject,
            ":message_body" => $message
        ]);
    } catch (PDOException $e) {
        die('Database connection failed: ' . $e->getMessage());
    }

}

?>