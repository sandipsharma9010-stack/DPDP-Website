<?php
error_reporting(E_ALL);
ini_set('display_errors', 0);


$hostname = 'ls-2afec7242274ab00d3a094e8e0d24d7301187cb4.cnvivecdrcxm.ap-south-1.rds.amazonaws.com';
$dbname = 'dbcontactforms';
$username = 'dbdpdp1username';
$password = 'az-MhDGgs[?.cZ5O!CDsNkxJ9Oxn*4B(';

$dsn = "pgsql:host=$hostname;port=5432;dbname=$dbname";

try {
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    error_log('Database connection failed: ' . $e->getMessage(), 3, '/path/to/error.log');
    die('Database connection failed: ' . $e->getMessage());
}


