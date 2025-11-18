<?php
session_start();
require 'db.pgsql.php';
require 'admin.functions.php';

if (!isset($_SESSION['user'])) {
    header('Location: logout.php');
    exit;
}

$section = 'blogs';

$tbl = $_GET['tbl']; // dpdp / pdpl / gdpr / priv

$tblname = $section . '_' . $tbl;

/* * */

$mod = 'blogs';

if(isset($_GET['mod'])) {
    $mod = $_GET['mod'];
}

$tblname = $mod . '_' . $site;

/* * */

// print_r($_GET);
// print_r($_POST);
// print_r($_FILES);
// echo '<br />';


if (isset($_GET['id'])) {

    $recid = $_GET['id'];

    $stmt = $pdo->prepare("SELECT * FROM $tblname WHERE id = :recid");
    $stmt->execute(['recid' => $recid]);
    $dbrec = $stmt->fetch();
    if (!$dbrec) {
        redirect('records_list.php?mod=' . $mod);
    }

    $recid = $dbrec['id'];
    $recstatus = $dbrec['status'];
    $recdate = $dbrec['recdate'];
    $recpub = $dbrec['recpub'];
    $rectitle = $dbrec['rectitle'];
    $summary = $dbrec['summary'];
    $recdesc = $dbrec['recdesc']; // htmlspecialchars_decode($dbrec['recdesc'], ENT_QUOTES);
    $metadesc = $dbrec['metadesc'];
    $metakeyw = $dbrec['metakeyw'];
    $imgalt = $dbrec['imgalt'];
    $recimg = $dbrec['recimg'];
    $recfile = $dbrec['recfile'];
    $linkurl = $dbrec['linkurl'];

}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $recid = $_POST['recid'];
    $recstatus = $_POST['recstatus'];
    $recdate = $_POST['recdate'];
    $recpub = $_POST['recpub'];
    $rectitle = $_POST['rectitle'];
    $summary = $_POST['summary'];
    $recdesc = $_POST['recdesc'];
    $metadesc = $_POST['metadesc'];
    $metakeyw = $_POST['metakeyw'];
    $imgalt = $_POST['imgalt'];
    $linkurl = $_POST['linkurl'];

    if ( (isset($_POST['recid'])) && ($_POST['recid'] > 0) ) {

        $recid = $_POST['recid'];

        $stmt = $pdo->prepare("UPDATE $tblname SET rectitle = :rectitle, summary = :summary, recdesc = :recdesc, metadesc = :metadesc, metakeyw = :metakeyw, recdate = :recdate, recpub = :recpub, imgalt = :imgalt, linkurl = :linkurl, status = :recstatus WHERE id = :recid");
        $stmt->execute(['rectitle' => $rectitle, 'summary' => $summary, 'recdesc' => $recdesc, 'metadesc' => $metadesc, 'metakeyw' => $metakeyw, 'recdate' => $recdate, 'recpub' => $recpub, 'imgalt' => $imgalt, 'linkurl' => $linkurl, 'recstatus' => $recstatus, 'recid' => $recid]);

    } else {

        $stmt = $pdo->prepare("INSERT INTO $tblname (rectitle, summary, recdesc, metadesc, metakeyw, recdate, recpub, imgalt, linkurl, status) VALUES (:rectitle, :summary, :recdesc, :metadesc, :metakeyw, :recdate, :recpub, :imgalt, :linkurl, :recstatus)");
        $stmt->execute(['rectitle' => $rectitle, 'summary' => $summary, 'recdesc' => $recdesc, 'metadesc' => $metadesc, 'metakeyw' => $metakeyw, 'recdate' => $recdate, 'recpub' => $recpub, 'imgalt' => $imgalt, 'linkurl' => $linkurl, 'recstatus' => $recstatus]);

        $recid = $pdo->lastInsertId();

    }

    $recimg = $mod . '/' . $mod . '_' . $recid . '_thumbnail';
    $recfile = $mod . '/' . $mod . '_' . $recid . '_attachfile';
    
    $dirimg =  '..' . '/' . $mod . '/';
    $dirfile = '..' . '/' . $mod . '/';

    if($_FILES['recimg']['size'] > 0) {

        $imguploadResult = uploadFile($_FILES['recimg'], $dirimg, $recimg, ['jpg', 'png', 'jpeg'], 1 * 1024 * 1024);
        // echo 'img: '; print_r($imguploadResult);
        if ($imguploadResult['success']) {
            $recimg = $imguploadResult['file_path'];

            $stmt = $pdo->prepare("UPDATE $tblname SET recimg = :recimg WHERE id = :recid");
            $stmt->execute(['recimg' => $recimg, 'recid' => $recid]);
        }
    }

    if($_FILES['recfile']['size'] > 0) {

        $fileuploadResult = uploadFile($_FILES['recfile'], $dirfile, $recfile, ['pdf'], 4 * 1024 * 1024);
        // echo 'file: '; print_r($fileuploadResult);
        if ($fileuploadResult['success']) {
            $recfile = $fileuploadResult['file_path'];

            $stmt = $pdo->prepare("UPDATE $tblname SET recfile = :recfile WHERE id = :recid");
            $stmt->execute(['recfile' => $recfile, 'recid' => $recid]);
        }
    }

    // $stmt = $pdo->prepare("UPDATE $tblname SET recimg = :recimg, recfile = :recfile WHERE id = :recid");
    // $stmt->execute(['recimg' => $recimg, 'recfile' => $recfile, 'recid' => $recid]);

    redirect('records_list.php?mod=' . $mod);

}

$head_title = "Manage $site $mod";

?>

<?php include 'header.inc.php'; ?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Trumbowyg/2.25.1/ui/trumbowyg.min.css">

<form method="post" enctype="multipart/form-data">

            <input type="hidden" id="tbl" name="tbl" value="<?php echo $tbl;?>">
            <input type="hidden" id="mod" name="mod" value="<?php echo $mod; ?>">
            <input type="hidden" id="site" name="site" value="<?php echo $site; ?>">
            <input type="hidden" id="recid" name="recid" value="<?php echo $recid; ?>">

            <div class="mb-3">
                <div class="row">
                    <div class="col-sm-4">
                        <label for="recdate" class="form-label">Date</label>
                        <input type="date" id="recdate" name="recdate" class="form-control" value="<?php echo $recdate; ?>" />
                    </div>
                    <div class="col-sm-4">
                        <label for="recpub" class="form-label">Publisher Name</label>
                        <input type="text" id="recpub" name="recpub" class="form-control" value="<?php echo $recpub; ?>" length=50" />
                    </div>
                    <div class="col-sm-4">
                        <label for="recstatus" class="form-label">Status</label>
                        <select id="recstatus" name="recstatus" class="form-select">
                            <option value="1" <?php if($recstatus) { echo 'selected'; } ?>>Active</option>
                            <option value="0" <?php if(!$recstatus) { echo 'selected'; } ?>>Inactive</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="mb-3">
                <label for="rectitle" class="form-label">Title</label>
                <input type="text" id="rectitle" name="rectitle" class="form-control" value="<?php echo htmlspecialchars($rectitle); ?>" length="300" required />
            </div>

            <div class="mb-3">
                <label for="summary" class="form-label">Summary</label>
                <input type="text" id="summary" name="summary" class="form-control" value="<?php echo htmlspecialchars($summary); ?>" length="300" required />
            </div>

            <?php if( ($mod != 'whitepapers') && ($mod != 'research') ) { ?>

                <div class="mb-3">
                <label for="metadesc" class="form-label">SEO Description</label>
                <input type="text" id="metadesc" name="metadesc" class="form-control" value="<?php echo htmlspecialchars($metadesc); ?>" length="300" />
            </div>

            <div class="mb-3">
                <label for="metakeyw" class="form-label">SEO Keywords</label>
                <input type="text" id="metakeyw" name="metakeyw" class="form-control" value="<?php echo htmlspecialchars($metakeyw); ?>" length="300" />
            </div>

            <div class="mb-3">
                <label for="recdesc" class="form-label">Description</label>
                <textarea id="recdesc" name="recdesc" class="form-control" rows="15" required><?php echo htmlspecialchars($recdesc); ?></textarea>
            </div>

            <?php } else { ?>

                <input type="hidden" name="metadesc" value="<?php echo $metadesc; ?>">
                <input type="hidden" name="metakeyw" value="<?php echo $metakeyw; ?>">
                <input type="hidden" name="recdesc" value="<?php echo $recdesc; ?>">

            <?php } ?>

            <div class="mb-3">
                <div class="row">
                    <div class="col-sm-6">
                        <label for="recimg" class="form-label">Image Thumbnail [.jpg, .jpeg, .png]</label>
                        <input type="file" id="recimg" name="recimg" class="form-control" value="<?php echo $recimg; ?>" accept=".jpg, .jpeg, .png"/>
                        <br />
                        <img class="img-thumbnail" src="<?php echo $recimg; ?>" alt="NO IMAGE" />
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="recfile" class="form-label">File Attachment [.pdf]</label>
                            <input type="file" id="recfile" name="recfile" class="form-control" value="<?php echo $recfile; ?>" accept=".pdf" />
                            <a href="<?php echo $recfile; ?>" target="_blank"><?php echo $recfile; ?></a>
                        </div>
                        <br />
                        <div class="form-group">
                            <label for="imgalt" class="form-label">Image Alternate Text</label>
                            <input type="text" id="imgalt" name="imgalt" class="form-control" value="<?php echo $imgalt; ?>" length="200" />
                        </div>
                        <br />
                        <div class="form-group">
                            <label for="linkurl" class="form-label">Link Url</label>
                            <input type="text" id="linkurl" name="linkurl" class="form-control" value="<?php echo $linkurl; ?>" length="150" />
                        </div>

                    </div>
                </div>
            </div>

            <div class="mb-3">
                <button type="submit" class="btn btn-success">Save</button>
                <a href="records_list.php?mod=<?php echo $mod; ?>" class="btn btn-secondary">Cancel</a>
            </div>

        </form>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Trumbowyg/2.25.1/trumbowyg.min.js"></script>

        <script>
        $(document).ready(function () {
            $('#recdesc').trumbowyg();
        });
        </script>

<?php include 'footer.inc.php'; ?>
