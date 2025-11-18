<?php
session_start();
date_default_timezone_set('Asia/Kolkata');

if (!isset($_SESSION['user'])) {
    header('Location: index.php');
    exit;
}

require 'db.pgsql.php';

$tblname = 'contacts_dpdp';

$tbl = $_GET['tbl'];

if($tbl=='dpdp'){
    $tblname = 'contacts_dpdp';
} elseif($tbl=='gdpr'){
    $tblname = 'contacts_gdpr';
} elseif($tbl=='priv'){
    $tblname = 'contacts_priv';
} elseif($tbl=='pdpl'){
    $tblname = 'contacts_pdpl';
}

// $stmt = $pdo->query("SELECT * FROM $tblname ORDER BY created_at DESC");

// $contacts = $stmt->fetchAll();

$limit = 50;

$page = isset($_GET['page']) && is_numeric($_GET['page']) ? (int)$_GET['page'] : 1;

$offset = ($page - 1) * $limit;

$where = '';
$params = [];

$show = $_GET['show'];

if ($show === 'contact') {
    $where = "WHERE (recact = :recact OR recact = '')";
    $params[':recact'] = 'contact';
} elseif ($show === 'newsletter') {
    $where = "WHERE recact = :recact";
    $params[':recact'] = 'newsletter';
} elseif ($show === 'schedule') {
    $where = "WHERE recact = :recact";
    $params[':recact'] = 'schedule';
} elseif ($show === 'careers') {
    $where = "WHERE recact = :recact";
    $params[':recact'] = 'careers';
} elseif ($show === 'course') {
    $where = "WHERE recact = :recact";
    $params[':recact'] = 'course';
} elseif ($show === 'whitepapers') {
    $where = "WHERE recact = :recact";
    $params[':recact'] = 'whitepapers';
} elseif ($show === 'research') {
    $where = "WHERE recact = :recact";
    $params[':recact'] = 'research';
} elseif ($show === 'webinars') {
    $where = "WHERE recact = :recact";
    $params[':recact'] = 'webinars';
} elseif ($show === 'events') {
    $where = "WHERE recact = :recact";
    $params[':recact'] = 'events';
}

/*
$totalQuery = $pdo->query("SELECT COUNT(*) FROM contacts_dpdp $sql_show $where ");
$totalRecords = $totalQuery->fetchColumn();
*/

$sqlCount = "SELECT COUNT(*) FROM contacts_dpdp $where";
$stmtCount = $pdo->prepare($sqlCount);
$stmtCount->execute($params);
$totalRecords = $stmtCount->fetchColumn();

/*
$stmt = $pdo->prepare("SELECT * FROM $tblname ORDER BY recdate DESC LIMIT :limit OFFSET :offset");
$stmt->bindValue(':limit', $limit, PDO::PARAM_INT);
$stmt->bindValue(':offset', $offset, PDO::PARAM_INT);
$stmt->execute();
$contacts = $stmt->fetchAll(PDO::FETCH_ASSOC);
*/

$sqlSelect = "SELECT * FROM $tblname $where ORDER BY recdate DESC LIMIT :limit OFFSET :offset";
$stmt = $pdo->prepare($sqlSelect);

foreach ($params as $key => $value) {
    $stmt->bindValue($key, $value, PDO::PARAM_STR);
}

$stmt->bindValue(':limit', $limit, PDO::PARAM_INT);
$stmt->bindValue(':offset', $offset, PDO::PARAM_INT);

$stmt->execute();
$contacts = $stmt->fetchAll(PDO::FETCH_ASSOC);

/* * */

$totalPages = ceil($totalRecords / $limit);


$head_title = 'Contacts List - ' . $tblname;

if($show) {
    $head_title = $show . ' Submissions';
}

?>

<?php include 'header.inc.php'; ?>

<table class="table table-bordered table-hover table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Message Title</th>
            <th>Message</th>
            <th>Created At</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($contacts as $contact): ?>
            <tr>
                <td><?= $contact['id']; ?></td>
                <td><?= $contact['fullname']; ?></td>
                <td><?= $contact['emailadd']; ?></td>
                <td><?= $contact['phoneno']; ?></td>
                <td><?= $contact['message_title']; ?></td>
                <td><?= $contact['message_body']; ?></td>
                <td><?= date('d-m-Y h:i:s A', strtotime($contact['recdate'])); ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?php include 'navpaging.inc.php'; ?>

<a href="dashboard.php" class="btn btn-secondary">Back to Dashboard</a>

<?php include 'footer.inc.php'; ?>
