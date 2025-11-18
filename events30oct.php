<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <title>DPDP Act Events & Workshops</title>
    <meta name="description"
        content="Register for workshops & training on DPDP Act compliance, audits, DPIA, consent & vendor risk management.">
    <meta name="keywords"
        content="DPDP Act workshops, data privacy events, DPDP Act compliance training, data governance seminars, privacy awareness sessions, regulatory compliance events, data protection updates">

    <link rel="icon" href="assets/images/fav-icon-logo.png" type="image/webp">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
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

    .news-card {
        background: white;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 14px 8px rgba(0, 0, 0, 0.1);
        margin-bottom: 20px;
        display: flex;
        align-items: center;
    }

    .news-card img {
        width: 120px;
        margin-right: 15px;
        border-radius: 10px;
    }

    .news-card h5 {
        font-weight: bold;
    }

    .news-card .summary {
        background-color: #e9ecef;
        padding: 10px;
        border-radius: 5px;
    }

    .sidebar {
        background-color: #004085;
        color: white;
        padding: 15px;
        border-radius: 10px;
    }

    .similar-topic {
        background: white;
        padding: 15px;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        margin-bottom: 10px;
    }

    .in-the-news {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .header-news {
        background-color: #2196F3;
        color: white;
        text-align: center;
        padding: 10px;
        border-radius: 8px;
        font-weight: bold;
        font-size: 18px;
        margin-bottom: 15px;
    }

    .card-news {
        background-color: #2151B9;
        /* Dark Blue */
        color: white;
        border-radius: 12px;
        padding: 15px;
        margin-bottom: 15px;
        box-shadow: 3px 3px 10px rgba(0, 0, 0, 0.2);
    }

    .card-title-news {
        font-size: 15px;
        line-height: 20px;
    }

    .card-text-news {
        font-size: 14px;
    }

    .publisher-news {
        font-size: 12px;
        font-weight: bold;
        margin-top: 10px;
    }

    .coming-img {
        width: 100%;
    }

    .coming-img img {
        width: 100%;
    }

    @media (max-width: 768px) {
        .news-card {
            flex-direction: column;
            align-items: flex-start;
        }

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

        .btns-primary {
            margin-top: 20px;
        }

        .news-card img {
            width: 100%;
        }

        .in-the-news {
            flex-direction: column;
        }
    }
    </style>



    <?php require 'db.pgsql.php'; ?>
    <?php

$section = 'events';

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

    <title>Data Privacy Events & DPDP Act Workshops | Stay Informed & Updated</title>
    <meta name="description"
        content="Explore upcoming events and workshops on DPDPA compliance, data privacy, and governance to enhance your organization's knowledge and readiness.">
    <meta name="keywords"
        content="DPDP Act workshops, data privacy events, DPDP Act compliance training, data governance seminars, privacy awareness sessions, regulatory compliance events, data protection updates">

<?php } ?>

</head>

<body>

    <section class="blog" style="background-color: #02092c;">
        <?php include_once('new-nav.php');?>
        <div class="container hero-section">
            <h1>Your go-to hub for <span>Expert Insights,<br> Publications, and Information materials</span> on
                <br><b>data privacy and compliance</b>
            </h1>
            <p>Our resources provide the essential tools, guides, and insights to help your business stay ahead of data
                privacy regulations. From practical templates to expert articles, we ensure you have everything you need
                to navigate compliance with confidence.</p>
            <div class="mt-4">
                <a href="contact.php?act=newsletter" class="btn btn-outline-light me-2">Sign up for Newsletter</a>
                <a href="contact.php" class="btn btn-primary btns-primary">Get in touch</a>
            </div>
        </div>
        <?php include_once('navtab.php');?>
    </section>
    <section class="">
        <div class="container my-5 events p-5">
            <div class="row">
                <div class="col-sm-9">

                    <h4><?php echo $rectitle; ?></h4>

                    <div class="coming-img">
                        <img src="<?php echo $recimg; ?>" alt="<?php echo $rectitle; ?>"
                            title="<?php echo $rectitle; ?>" class="">
                    </div>

                    <h5 class="mt-2">About the Event</h5>

                </div>

                <div class="col-sm-3">
                    <div class="">
                        <div class="event-card">
                            <h5>Date</h5>
                            <p><?php echo $recdate; ?></p>
                            <!--
                            <h5>Time</h5>
                            <p>05:30 PM - 06:30 PM IST</p>
                            -->
                            <h5>Venue</h5>
                            <p>Online</p>
                        </div>

                        <form action="contact.php?act=events" method="post">
                            <input type="hidden" name="act" value="events">
                            <input type="hidden" name="message" value="<?php echo $recid; ?> - <?php echo $rectitle; ?>" />
                            <div class="mb-3">
                                <label for="fullName" class="form-label">Full Name</label>
                                <input type="text" name="fullname" class="form-control" id="fullName" placeholder="Full Name">
                            </div>
                            <div class="mb-3">
                                <label for="contact" class="form-label">Contact</label>
                                <input type="text" name="phoneno" class="form-control" id="contact" placeholder="Contact">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" name="emailadd" class="form-control" id="email" placeholder="Email">
                            </div>
                            <input name="submit" type="submit" class="btn btn-book" value="Book a Slot" />
                        </form>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <p><?php echo $recdesc; ?></p>
                </div>
            </div>
        </div>
    </section>
    <section style="background-color: #02092c;">
        <div class="container py-5">
            <h2 class="text-white my-4">Upcoming Events</h2>

<?php

/* * */

$stmt = $pdo->prepare("SELECT id, rectitle, recimg, recdate FROM $tblname WHERE status = true AND id NOT IN (:recid) ORDER BY recdate DESC LIMIT 4");
$stmt->bindValue(':recid', $recid, PDO::PARAM_INT);
$stmt->execute();
$dbrecs = $stmt->fetchAll(PDO::FETCH_ASSOC);

/* * */

?>

            <?php foreach ($dbrecs as $dbreci) { ?>

            <div class="row">
                <div class="col-md-6">
                    <div class="event-card">
                        <a href="events.php?id=<?php echo $dbreci['id']; ?>&title=<?php echo $dbreci['rectitle']; ?>">
                            <p class="text-start"><?php echo $dbreci['rectitle']; ?></p>
                            <img class="img-fluid" src="<?php echo $dbreci['recimg']; ?>" alt="<?php echo $dbreci['rectitle']; ?>">
                        </a>
                        <p><strong>Date:</strong> <?php echo $dbreci['recdate']; ?>
                            <!-- &nbsp; | &nbsp; <strong>Time:</strong> 05:30 PM - 06:30 PM IST --> &nbsp; | &nbsp;
                            <strong>Venue:</strong> Online
                        </p>
                    </div>
                </div>
            </div>

            <?php } ?>

        </div>

    </section>
    <?php include_once('footer.php');?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.bundle.min.js"></script>
</body>

</html>