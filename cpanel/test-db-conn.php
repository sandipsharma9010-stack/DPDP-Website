<?php
include 'db.pgsql.php';

try {
    $stmt = $pdo->query('SELECT version()');
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    echo "PostgreSQL version: " . $row['version'] . "<br>";

    $stmt = $pdo->query("SELECT * FROM contacts_dpdp");

    $contacts = $stmt->fetchAll();

    print_r($contacts);

} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

?>
