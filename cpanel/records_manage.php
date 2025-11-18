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

if(isset($_GET['site'])) {
    $site = $_GET['site'];
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

    $recfile1 = $dbrec['recfile1'];
    $recfile2 = $dbrec['recfile2'];
    $recfile3 = $dbrec['recfile3'];
    $recfile4 = $dbrec['recfile4'];
    $recfile5 = $dbrec['recfile5'];
    $recfile6 = $dbrec['recfile6'];
    $recfile7 = $dbrec['recfile7'];
    $recfile8 = $dbrec['recfile8'];
    $recfile9 = $dbrec['recfile9'];
    $recfile10 = $dbrec['recfile10'];
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
    $recfile1 = $mod . '/' . $mod . '_' . $recid . '_attachfile1';
    $recfile2 = $mod . '/' . $mod . '_' . $recid . '_attachfile2';
    $recfile3 = $mod . '/' . $mod . '_' . $recid . '_attachfile3';
    $recfile4 = $mod . '/' . $mod . '_' . $recid . '_attachfile4';
    $recfile5 = $mod . '/' . $mod . '_' . $recid . '_attachfile5';
    $recfile6 = $mod . '/' . $mod . '_' . $recid . '_attachfile6';
    $recfile7 = $mod . '/' . $mod . '_' . $recid . '_attachfile7';
    $recfile8 = $mod . '/' . $mod . '_' . $recid . '_attachfile8';
    $recfile9 = $mod . '/' . $mod . '_' . $recid . '_attachfile9';
    $recfile10 = $mod . '/' . $mod . '_' . $recid . '_attachfile10';

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

        $fileuploadResult = uploadFile($_FILES['recfile'], $dirfile, $recfile, ['jpg', 'png', 'jpeg'], 4 * 1024 * 1024);
        // echo 'file: '; print_r($fileuploadResult);
        if ($fileuploadResult['success']) {
            $recfile = $fileuploadResult['file_path'];

            $stmt = $pdo->prepare("UPDATE $tblname SET recfile = :recfile WHERE id = :recid");
            $stmt->execute(['recfile' => $recfile, 'recid' => $recid]);
        }
    }

    if($_FILES['recfile1']['size'] > 0) {

        $fileuploadResult = uploadFile($_FILES['recfile1'], $dirfile, $recfile1, ['jpg', 'png', 'jpeg'], 4 * 1024 * 1024);
        // echo 'file: '; print_r($fileuploadResult);
        if ($fileuploadResult['success']) {
            $recfile1 = $fileuploadResult['file_path'];

            $stmt = $pdo->prepare("UPDATE $tblname SET recfile1 = :recfile1 WHERE id = :recid");
            $stmt->execute(['recfile1' => $recfile1, 'recid' => $recid]);
        }
    }

    if($_FILES['recfile2']['size'] > 0) {

        $fileuploadResult = uploadFile($_FILES['recfile2'], $dirfile, $recfile2, ['jpg', 'png', 'jpeg'], 4 * 1024 * 1024);
        // echo 'file: '; print_r($fileuploadResult);
        if ($fileuploadResult['success']) {
            $recfile2 = $fileuploadResult['file_path'];

            $stmt = $pdo->prepare("UPDATE $tblname SET recfile2 = :recfile2 WHERE id = :recid");
            $stmt->execute(['recfile2' => $recfile2, 'recid' => $recid]);
        }
    }

    if($_FILES['recfile3']['size'] > 0) {

        $fileuploadResult = uploadFile($_FILES['recfile3'], $dirfile, $recfile3, ['jpg', 'png', 'jpeg'], 4 * 1024 * 1024);
        // echo 'file: '; print_r($fileuploadResult);
        if ($fileuploadResult['success']) {
            $recfile3 = $fileuploadResult['file_path'];

            $stmt = $pdo->prepare("UPDATE $tblname SET recfile3 = :recfile3 WHERE id = :recid");
            $stmt->execute(['recfile3' => $recfile3, 'recid' => $recid]);
        }
    }

    if($_FILES['recfile4']['size'] > 0) {

        $fileuploadResult = uploadFile($_FILES['recfile4'], $dirfile, $recfile4, ['jpg', 'png', 'jpeg'], 4 * 1024 * 1024);
        // echo 'file: '; print_r($fileuploadResult);
        if ($fileuploadResult['success']) {
            $recfile4 = $fileuploadResult['file_path'];

            $stmt = $pdo->prepare("UPDATE $tblname SET recfile4 = :recfile4 WHERE id = :recid");
            $stmt->execute(['recfile4' => $recfile4, 'recid' => $recid]);
        }
    }

    if($_FILES['recfile5']['size'] > 0) {

        $fileuploadResult = uploadFile($_FILES['recfile5'], $dirfile, $recfile5, ['jpg', 'png', 'jpeg'], 4 * 1024 * 1024);
        // echo 'file: '; print_r($fileuploadResult);
        if ($fileuploadResult['success']) {
            $recfile5 = $fileuploadResult['file_path'];

            $stmt = $pdo->prepare("UPDATE $tblname SET recfile5 = :recfile5 WHERE id = :recid");
            $stmt->execute(['recfile5' => $recfile5, 'recid' => $recid]);
        }
    }

    if($_FILES['recfile6']['size'] > 0) {

        $fileuploadResult = uploadFile($_FILES['recfile6'], $dirfile, $recfile6, ['jpg', 'png', 'jpeg'], 4 * 1024 * 1024);
        // echo 'file: '; print_r($fileuploadResult);
        if ($fileuploadResult['success']) {
            $recfile6 = $fileuploadResult['file_path'];

            $stmt = $pdo->prepare("UPDATE $tblname SET recfile6 = :recfile6 WHERE id = :recid");
            $stmt->execute(['recfile6' => $recfile6, 'recid' => $recid]);
        }
    }

    if($_FILES['recfile7']['size'] > 0) {

        $fileuploadResult = uploadFile($_FILES['recfile7'], $dirfile, $recfile7, ['jpg', 'png', 'jpeg'], 4 * 1024 * 1024);
        // echo 'file: '; print_r($fileuploadResult);
        if ($fileuploadResult['success']) {
            $recfile7 = $fileuploadResult['file_path'];

            $stmt = $pdo->prepare("UPDATE $tblname SET recfile7 = :recfile7 WHERE id = :recid");
            $stmt->execute(['recfile7' => $recfile7, 'recid' => $recid]);
        }
    }
    if($_FILES['recfile8']['size'] > 0) {

        $fileuploadResult = uploadFile($_FILES['recfile8'], $dirfile, $recfile8, ['jpg', 'png', 'jpeg'], 4 * 1024 * 1024);
        // echo 'file: '; print_r($fileuploadResult);
        if ($fileuploadResult['success']) {
            $recfile8 = $fileuploadResult['file_path'];

            $stmt = $pdo->prepare("UPDATE $tblname SET recfile8 = :recfile8 WHERE id = :recid");
            $stmt->execute(['recfile8' => $recfile8, 'recid' => $recid]);
        }
    }
    if($_FILES['recfile9']['size'] > 0) {

        $fileuploadResult = uploadFile($_FILES['recfile9'], $dirfile, $recfile9, ['jpg', 'png', 'jpeg'], 4 * 1024 * 1024);
        // echo 'file: '; print_r($fileuploadResult);
        if ($fileuploadResult['success']) {
            $recfile9 = $fileuploadResult['file_path'];

            $stmt = $pdo->prepare("UPDATE $tblname SET recfile9 = :recfile9 WHERE id = :recid");
            $stmt->execute(['recfile9' => $recfile9, 'recid' => $recid]);
        }
    }
    if($_FILES['recfile10']['size'] > 0) {

        $fileuploadResult = uploadFile($_FILES['recfile10'], $dirfile, $recfile10, ['jpg', 'png', 'jpeg'], 4 * 1024 * 1024);
        // echo 'file: '; print_r($fileuploadResult);
        if ($fileuploadResult['success']) {
            $recfile10 = $fileuploadResult['file_path'];

            $stmt = $pdo->prepare("UPDATE $tblname SET recfile10 = :recfile10 WHERE id = :recid");
            $stmt->execute(['recfile10' => $recfile10, 'recid' => $recid]);
        }
    }

    // $stmt = $pdo->prepare("UPDATE $tblname SET recimg = :recimg, recfile = :recfile WHERE id = :recid");
    // $stmt->execute(['recimg' => $recimg, 'recfile' => $recfile, 'recid' => $recid]);

    redirect('records_list.php?mod=' . $mod . '&site=' . $site);

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

                        <br />
                        <div class="form-group">
                            <label for="recfile1" class="form-label">File 1</label>
                            <input type="file" id="recfile1" name="recfile1" class="form-control" value="<?php echo $recfile1; ?>" />
                            <a href="<?php echo $recfile1; ?>" target="_blank"><?php echo $recfile1; ?></a>
                        </div>

                        <br />
                        <div class="form-group">
                            <label for="recfile2" class="form-label">File 2</label>
                            <input type="file" id="recfile2" name="recfile2" class="form-control" value="<?php echo $recfile2; ?>" />
                            <a href="<?php echo $recfile2; ?>" target="_blank"><?php echo $recfile2; ?></a>
                        </div>

                        <br />
                        <div class="form-group">
                            <label for="recfile3" class="form-label">File 3</label>
                            <input type="file" id="recfile3" name="recfile3" class="form-control" value="<?php echo $recfile3; ?>" />
                            <a href="<?php echo $recfile3; ?>" target="_blank"><?php echo $recfile3; ?></a>
                        </div>

                        <br />
                        <div class="form-group">
                            <label for="recfile4" class="form-label">File 4</label>
                            <input type="file" id="recfile4" name="recfile4" class="form-control" value="<?php echo $recfile4; ?>" />
                            <a href="<?php echo $recfile4; ?>" target="_blank"><?php echo $recfile4; ?></a>
                        </div>

                        <br />
                        <div class="form-group">
                            <label for="recfile5" class="form-label">File 5</label>
                            <input type="file" id="recfile5" name="recfile5" class="form-control" value="<?php echo $recfile5; ?>" />
                            <a href="<?php echo $recfile5; ?>" target="_blank"><?php echo $recfile5; ?></a>
                        </div>

                        <br />
                        <div class="form-group">
                            <label for="recfile6" class="form-label">File 6</label>
                            <input type="file" id="recfile6" name="recfile6" class="form-control" value="<?php echo $recfile6; ?>" />
                            <a href="<?php echo $recfile6; ?>" target="_blank"><?php echo $recfile6; ?></a>
                        </div>

                        <br />
                        <div class="form-group">
                            <label for="recfile7" class="form-label">File 7</label>
                            <input type="file" id="recfile7" name="recfile7" class="form-control" value="<?php echo $recfile7; ?>" />
                            <a href="<?php echo $recfile7; ?>" target="_blank"><?php echo $recfile7; ?></a>
                        </div>

                        <br />
                        <div class="form-group">
                            <label for="recfile8" class="form-label">File 8</label>
                            <input type="file" id="recfile8" name="recfile8" class="form-control" value="<?php echo $recfile8; ?>" />
                            <a href="<?php echo $recfile8; ?>" target="_blank"><?php echo $recfile8; ?></a>
                        </div>

                        <br />
                        <div class="form-group">
                            <label for="recfile9" class="form-label">File 9</label>
                            <input type="file" id="recfile9" name="recfile9" class="form-control" value="<?php echo $recfile9; ?>" />
                            <a href="<?php echo $recfile9; ?>" target="_blank"><?php echo $recfile9; ?></a>
                        </div>

                        <br />
                        <div class="form-group">
                            <label for="recfile10" class="form-label">File 10</label>
                            <input type="file" id="recfile10" name="recfile10" class="form-control" value="<?php echo $recfile10; ?>" />
                            <a href="<?php echo $recfile10; ?>" target="_blank"><?php echo $recfile10; ?></a>
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
