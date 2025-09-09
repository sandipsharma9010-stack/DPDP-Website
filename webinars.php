<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <title>DPDP Act Webinars & Live Sessions</title>
    <meta name="description"
        content="Join expert webinars with demos, case studies & Q&A to learn practical DPDP Act compliance strategies.">
    <meta name="keywords"
        content="DPDP Act webinars, data privacy webinars, compliance insights, expert data protection sessions, DPDPA training events, emerging privacy trends, best practices for compliance">
   
    <link rel="icon" href="assets/images/fav-icon-logo.png" type="image/webp">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="canonical" href="https://www.dpdpconsultants.com/events.php">
    <style>
    .blog {
        text-align: center;
        color: white;
    }

    .hero-section {
        padding: 100px 20px;
    }

    .hero-section h1 {
        font-size: 2.5rem;
        font-weight: bold;
    }

    .hero-section span {
        color: #3CA6E0;
    }

    .hero-section p {
        max-width: 700px;
        margin: 20px auto;
        font-size: 1rem;
    }

    .btns-primary {
        background-color: #3CA6E0;
        border: none;
        padding: 10px 56px;
        font-size: 1rem;
        border-radius: 20px;
    }

    .btn-outline-light {
        border-radius: 20px;
        padding: 10px 20px;
        font-size: 1rem;
    }

    .nav-links {
        color: white !important;
    }

    .nav-tabs .nav-link.active {
        background-color: #02092c;
    }

    .navs {
        justify-content: space-around !important;
    }

    .reasearch {
        width: 100%;
        height: auto;
        display: block;
        box-shadow: 10px 10px 20px rgba(0, 0, 0, 0.3);
        border-radius: 10px;
    }

    .sidebar {
        padding: 20px;
        border-radius: 10px;
    }

    .video-container {
        margin-bottom: 20px;
    }

    .webinar-title {
        font-weight: bold;
        font-size: 24px;
    }

    .key-topics {
        /* list-style-type: none; */
        padding: 0;
    }

    .key-topics li {
        margin-bottom: 10px;
    }

    .more-webinars {
        margin-top: 20px;
    }

    .webinar-card img {
        border-radius: 5px;
        width: 100%;
        cursor: pointer;
    }

    .webinars-text {
        letter-spacing: 2px;
        line-height: 30px;
        font-size: 2rem;
        letter-spacing: 3px;
        line-height: 34px;
    }

    @media (max-width: 768px) {
        br {
            display: none;
        }

        .hero-section {
            padding: 30px 16px 38px;
        }

        .hero-section p {
            font-size: 12px;
            text-align: left;
            margin: 0px 0px;

        }

        .webinars-text {
            font-size: 1rem;
            font-weight: bold;
            letter-spacing: 1px;
            line-height: 26px;
        }
        .webinar-title{
            font-size: 18px;
        }
        .MsoNormal{
            font-size: 12px !important;
        }
       
         .MsoListParagraphCxSpMiddle, .MsoListParagraphCxSpLast, .MsoListParagraphCxSpFirst{
            font-size:12px;
            padding:8px;
             
         }

        .btns-primary {
            margin-top: 20px;
        }
    }
    </style>



    <?php require 'db.pgsql.php'; ?>
    <?php

$section = 'webinars';

$tbl = 'dpdp'; // dpdp / pdpl / gdpr / priv

$tblname = $section . '_' . $tbl;

/* * */

if (!isset($_GET['id'])) {

    $stmt = $pdo->prepare("SELECT * FROM $tblname WHERE status = true ORDER BY recdate DESC LIMIT 1");
    $stmt->execute();
    $dbrec = $stmt->fetch();

}

if (isset($_GET['id'])) {

    $recid = $_GET['id'];

    $stmt = $pdo->prepare("SELECT * FROM $tblname WHERE id = :recid");
    $stmt->execute(['recid' => $recid]);
    $dbrec = $stmt->fetch();
    if (!$dbrec) {
        header('Location: events.php');
        exit;
    }

}

$recid = $dbrec['id'];
$recstatus = $dbrec['status'];
$recdate = $dbrec['recdate'];
$recpub = $dbrec['recpub'];
$rectitle = $dbrec['rectitle'];
$recdesc = $dbrec['recdesc']; // htmlspecialchars_decode($dbrec['recdesc'], ENT_QUOTES);
$metadesc = $dbrec['metadesc'];
$metakeyw = $dbrec['metakeyw'];
$linkurl = $dbrec['linkurl'];
$imgalt = $dbrec['imgalt'];
$recimg = $dbrec['recimg'];
$recfile = $dbrec['recfile'];

/* * */

?>

<?php if($recid) { ?>

    <title><?php echo $rectitle; ?></title>
    <meta name="description" content="<?php echo $metadesc; ?>">
    <meta name="keywords" content="<?php echo $metakeyw; ?>">

<?php } else { ?>

    <title>DPDPA Webinars | Expert Insights on Compliance & Data Privacy</title>
    <meta name="description"
        content="Join our webinars to gain expert insights on DPDP Act compliance, best data privacy practices, and emerging trends in data protection.">
    <meta name="keywords"
        content="DPDP Act webinars, data privacy webinars, compliance insights, expert data protection sessions, DPDPA training events, emerging privacy trends, best practices for compliance">

<?php } ?>

</head>

<body>

    <section class="blog" style="background-color: #02092c;">
        <?php include_once('new-nav.php');?>
        <div class="container hero-section">
            <h1>Your go-to hub for <span>Expert Insights,<br> Publications, and Resources</span> on
                <br><b>data privacy and compliance</b>
            </h1>
            <p class="text-white">Our resources provide the essential tools, guides, and insights to help your business
                stay ahead of data
                privacy regulations. From practical templates to expert articles, we ensure you have everything you need
                to navigate compliance with confidence.</p>
            <div class="mt-4">
                <a href="contact.php?act=newsletter" class="btn btn-outline-light me-2">Sign up for Newsletter</a>
                <a href="contact.php" class="btn btn-primary btns-primary">Get in touch</a>
            </div>
        </div>
        <?php include_once('navtab.php');?>
    </section>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-4 sidebar">
                <h5 style="color:#02092C">Our Webinars</h5>
                <h5 class="webinars-text"><strong>Unlock valuable insights with our expert webinars<br> on <span
                            style="color: #007bff;">data privacy <br> and compliance</span></strong></h5>
                <label>Sign Up For Webinar Updates</label>
                <form action="contact.php?act=webinars" method="post">
                <input type="hidden" name="act" value="webinars">
                <input type="hidden" name="message" value="<?php echo $recid; ?> - <?php echo $rectitle; ?>" />
                <input type="text" class="form-control my-2" placeholder="Full name" name="fullname">
                <input type="tel" class="form-control my-2" placeholder="Phone number" name="phoneno">
                <input type="email" class="form-control my-2" placeholder="Email address" name="emailadd">
                <input type="submit" class="btn btn-primary mt-2 px-5 radius-4" value="Sign up" />
                </form>
            </div>
            <div class="col-md-8">
                <div class="video-container">
                    <iframe id="webinarVideo" width="100%" height="400" src="<?php echo $linkurl; ?>" frameborder="0"
                        allowfullscreen></iframe>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
            </div>
            <div class="col-md-5">
                <h2 class="webinar-title"><?php echo $rectitle; ?></h2>
                <p><?php echo $recdesc; ?></p>
            </div>

            <?php

/* * */

$stmt = $pdo->prepare("SELECT id, rectitle, recimg FROM $tblname WHERE status = true AND id NOT IN (:recid) ORDER BY recdate DESC LIMIT 4");
$stmt->bindValue(':recid', $recid, PDO::PARAM_INT);
$stmt->execute();
$dbrecs = $stmt->fetchAll(PDO::FETCH_ASSOC);

/* * */

?>

            <div class="col-md-3">
                <div class="btn btn-primary more-webinars my-4">More Webinars</div>

                <?php foreach ($dbrecs as $dbreci) { ?>

                <div class="webinar-card">
                    <a href="webinars.php?id=<?php echo $dbreci['id']; ?>&title=<?php echo $dbreci['rectitle']; ?>">
                        <img src="<?php echo $dbreci['recimg']; ?>" alt="<?php echo $dbreci['rectitle']; ?>"
                            title="<?php echo $dbreci['rectitle']; ?>" class="dpdp-img">
                        <p><?php echo $dbreci['rectitle']; ?></p>
                    </a>
                </div>

                <?php } ?>

            </div>
        </div>
    </div>
    </div>
    </div>
    </div>

    <script>
    function changeVideo(videoUrl) {
        document.getElementById('webinarVideo').src = videoUrl;
    }
    </script>
    <?php include_once('footer.php');?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.bundle.min.js"></script>
</body>

</html>