<?php
session_start();
require 'db.pgsql.php';

if (!isset($_SESSION['user'])) {
    header('Location: logout.php');
    exit;
}



$section = 'blogs';

$tbl = $_GET['tbl']; // dpdp / pdpl / gdpr / priv

$tblname = $section . '_' . $tbl;



$limit = 10;

$page = isset($_GET['page']) && is_numeric($_GET['page']) ? (int)$_GET['page'] : 1;

$offset = ($page - 1) * $limit;

$totalQuery = $pdo->query("SELECT COUNT(*) FROM $tblname");
$totalRecords = $totalQuery->fetchColumn();

$stmt = $pdo->prepare("SELECT * FROM $tblname ORDER BY recdate DESC LIMIT :limit OFFSET :offset");
$stmt->bindValue(':limit', $limit, PDO::PARAM_INT);
$stmt->bindValue(':offset', $offset, PDO::PARAM_INT);
$stmt->execute();
$dbrecords = $stmt->fetchAll(PDO::FETCH_ASSOC);

$totalPages = ceil($totalRecords / $limit);

$head_title = 'Manage Blogs - ' . $tbl;

?>

<?php include 'header.inc.php'; ?>

<a href="blogs_manage.php?tbl=<?=$tbl;?>&act=add" class="btn btn-primary">Add New blog</a>

<hr />

<table class="table table-bordered table-hover table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Blog Date</th>
            <th>Blog Title</th>
            <th>Blog Content</th>
            <th>Meta Description</th>
            <th>Meta Keywords</th>
            <th>Status</th>
            <th>Publisher</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($dbrecords as $dbrec): ?>
            <tr>
                <td><?= $dbrec['id']; ?></td>
                <td><?= $dbrec['recdate']; ?></td>
                <td><a href="blogs_manage.php?tbl=dpdp&id=<?= $dbrec['id']; ?>"><?= htmlspecialchars($dbrec['rectitle']); ?></a></td>
                <td><?= htmlspecialchars(substr($dbrec['recdesc'], 0, 50)); ?></td>
                <td><?= htmlspecialchars(substr($dbrec['metadesc'], 0, 50)); ?></td>
                <td><?= htmlspecialchars(substr($dbrec['metakeyw'], 0, 50)); ?></td>
                <td><?php if($dbrec['status']) { echo 'Active'; } else { echo 'Inactive'; } ?></td>
                <td><?= $dbrec['recpub']; ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?php include 'navpaging.inc.php'; ?>

<a href="dashboard.php" class="btn btn-secondary">Back to Dashboard</a>

<?php include 'footer.inc.php'; ?>
