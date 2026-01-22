<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="icon" href="assets/images/fav-icon-logo.png" type="image/webp">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">

    <?php include_once('google-tag-manager.php'); ?>
    <style>
    .dpdp-img {
        width: 100%;
        height: auto;
        object-fit: contain;
        object-position: center;

    }

    .lineheight {
        line-height: 28px;
    }

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

    .dpdp-table {
        background-color: #3294CD;
        padding: 5px;
        border-radius: 10px;
        color: white;
        text-align: center;
        font-weight: 14px;
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

        .list-unstyled {
            font-size: 12px;
        }

        .lineheight {
            line-height: 27px;
        }
        .MsoNormal{
            font-size:12px;
            text-align: left;
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

        .blog-text img {
            width: 100%;
            height: auto;
        }


    }


    /* Base table styling */
.MsoTableGrid {
  width: 100%;
  border-collapse: collapse;
  border-spacing: 0;
}

/* Table container for scroll */
.MsoTableGrid {
  display: block;
  overflow-x: auto;
  white-space: nowrap;
  -webkit-overflow-scrolling: touch; /* Smooth scroll on iOS */
}

/* Optional: keep header and cell styling consistent */
.MsoTableGrid th,
.MsoTableGrid td {
  padding: 8px 12px;
  border: 1px solid #ddd;
  text-align: left;
  vertical-align: top;
}

/* Make sure no wrapping happens inside cells */
.MsoTableGrid td,
.MsoTableGrid th {
  white-space: nowrap;
}

/* Optional improvement for better UX on small screens */
@media (max-width: 768px) {
  .MsoTableGrid {
    width: 100%;
    display: block;
    overflow-x: auto;
    overflow-y: hidden;
  }
}
    
    </style>



    <?php require 'db.pgsql.php'; ?>
    <?php

$section = 'blogs';

$tbl = 'dpdp'; // dpdp / pdpl / gdpr / priv

$tblname = $section . '_' . $tbl;

/* * */

if (isset($_GET['id'])) {

    $recid = $_GET['id'];

    $stmt = $pdo->prepare("SELECT * FROM $tblname WHERE id = :recid");
    $stmt->execute(['recid' => $recid]);
    $dbrec = $stmt->fetch();
    if (!$dbrec) {
        header('Location: blogs.php');
        exit;
    }

    $recid = $dbrec['id'];
    $recstatus = $dbrec['status'];
    $recdate = $dbrec['recdate'];
    $recpub = $dbrec['recpub'];
    $rectitle = $dbrec['rectitle'];
    $recsummary = $dbrec['summary'];
    $recdesc = $dbrec['recdesc']; // htmlspecialchars_decode($dbrec['recdesc'], ENT_QUOTES);
    $metadesc = $dbrec['metadesc'];
    $metakeyw = $dbrec['metakeyw'];
    $imgalt = $dbrec['imgalt'];
    $recimg = $dbrec['recimg'];
    $recfile = $dbrec['recfile'];

}

/* * */

?>

    <title><?php echo $recsummary; ?></title>
    <meta name="description" content="<?php echo $metadesc; ?>">
    <meta name="keywords" content="<?php echo $metakeyw; ?>">

</head>

<body>
    <section class="blog" style="background-color: #02092c;">
        <?php include_once('new-nav.php');?>
        <div class="container hero-section">
            <h2>Your go-to hub for <span>Expert Insights,<br> Publications, and Resources</span> on
                <br><b>data privacy and compliance</b>
            </h2>
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

    <?php

$rectext = $recdesc;

$pattern = '/<a\s+href="([^"]+)">([^<]+)<\/a>/i';

$pattern = '/<a\s+[^>]*href="*#([^"]+)"[^>]*>([^<]+)<\/a>/i';

$pattern = '/<a\s+[^>]*href="[^"]*#([^"]+)"[^>]*>(.*?)<\/a>/i';


preg_match_all($pattern, $rectext, $matches, PREG_SET_ORDER);

?>

    <section class="mo-justify" name="blog-content">

        <div class="container-fluid p-4">
            <div class="row">
                <!-- Table of Content -->
                <div class="col-md-3">
                    <div class="p-3 text-black rounded lineheight">
                        <p class="dpdp-table">Table of content</p>
                        <ul class="mt-3 text-start">
                            <?php foreach ($matches as $match) { ?>
                            <li><a
                                    href="#<?php echo htmlspecialchars($match[1]); ?>"><?php echo htmlspecialchars($match[2]); ?></a>
                            </li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>

                <!-- Main Content -->
                <div class="col-md-6">
                    <p class="text-muted">Last Updated: <?php echo $recdate; ?> ~ <b><?php echo $recpub; ?></b></p>
                    <h1 class="text-dark"><?php echo $rectitle; ?></h1>
                    <div class="row g-0">

                        <div class="col-md-12">
                            <!-- blog category -->
                            <!-- <p class="text-end">~ Artificial Intelligence</p> -->
                            <div class="dpdp">
                                <img src="<?php echo $recimg; ?>" alt="<?php echo $imgalt; ?>"
                                    title="<?php echo $rectitle; ?>" class="dpdp-img">
                            </div>
                        </div>
                    </div>
                    <div class="blog-text">
                        <p class="mt-3">
                            <?php echo $recdesc; ?>
                        </p>
                    </div>
                </div>

                <?php

/* * */

$stmt = $pdo->prepare("SELECT id, rectitle, recimg FROM $tblname WHERE status = true AND id NOT IN (:recid) ORDER BY recdate DESC LIMIT 4");
$stmt->bindValue(':recid', $recid, PDO::PARAM_INT);
$stmt->execute();
$dbrecs = $stmt->fetchAll(PDO::FETCH_ASSOC);

/* * */

?>


                <!-- Similar Read -->
                <div class="col-md-3">
                    <div class="p-3 bg-light rounded">
                        <p class="dpdp-table">Similar Read</p>

                        <?php
                            foreach ($dbrecs as $dbreci) {
                                $title = $dbreci['rectitle'];
                                $slug = trim(preg_replace('/[^a-z0-9]+/i', '-', strtolower($title)), '-');
                            ?>

                        <div class="mt-3">
                            <img src="<?php echo $dbreci['recimg']; ?>" alt="<?php echo $dbreci['rectitle']; ?>"
                                title="<?php echo $dbreci['rectitle']; ?>" class="img-fluid">
                            <p class="text-dark fw-bold text-start"><a
                                    href="blog.php?id=<?php echo $dbreci['id']; ?>&title=<?php echo $slug; ?>"><?php echo $dbreci['rectitle']; ?></a>
                            </p>
                        </div>
                        <?php } ?>

                    </div>
                </div>
            </div>
        </div>


    </section>


    <?php include_once('footer.php');?>
</body>

</html>