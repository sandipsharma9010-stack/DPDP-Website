<?php

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Check if user is logged in (if required for certain pages)
if (!isset($_SESSION['user']) && basename($_SERVER['PHP_SELF']) !== 'index.php') {
    header('Location: index.php');
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="bootstrap.min.css" />
    <link rel="stylesheet" href="styles.css" />

    
</head>
<body>


<?php

$mod = $_GET['mod'];

if($mod == 'blogs') { $actblog = 'active'; }
if($mod == 'newsletters') { $actnews = 'active'; }
if($mod == 'whitepapers') { $actwhite = 'active'; }
if($mod == 'research') { $actresearch = 'active'; }
if($mod == 'inthenews') { $actinnew = 'active'; }
if($mod == 'webinars') { $actwebinar = 'active'; }
if($mod == 'events') { $actevent = 'active'; }

?>


    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="dashboard.php">Admin Panel</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="dashboard.php">Dashboard</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="contactDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Submissions
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="contactDropdown">
                            <li><a class="dropdown-item" href="contacts_list.php?show=contact">Contacts</a></li>
                            <li><a class="dropdown-item" href="contacts_list.php?show=newsletter">Newsletter</a></li>
                            <li><a class="dropdown-item" href="contacts_list.php?show=schedule">Schedule</a></li>
                            <li><a class="dropdown-item" href="contacts_list.php?show=careers">Careers</a></li>
                            <li><a class="dropdown-item" href="contacts_list.php?show=course">Course</a></li>
                            <li><a class="dropdown-item" href="contacts_list.php?show=whitepapers">Whitepapers</a></li>
                            <li><a class="dropdown-item" href="contacts_list.php?show=research">Research Reports</a></li>
                            <li><a class="dropdown-item" href="contacts_list.php?show=webinars">Webinars</a></li>
                            <li><a class="dropdown-item" href="contacts_list.php?show=events">Events</a></li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="contacts_list.php?site=<?php echo $site; ?>">Contacts</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="payments_list.php?site=<?php echo $site; ?>">Payments</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?=$actblog?>" href="records_list.php?mod=blogs">Blogs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?=$actnews?>" href="records_list.php?mod=newsletters">Newsletters</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?=$actwhite?>" href="records_list.php?mod=whitepapers">Whitepapers</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?=$actresearch?>" href="records_list.php?mod=research">Research Reports</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?=$actinnew?>" href="records_list.php?mod=inthenews">In The News</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?=$actwebinar?>" href="records_list.php?mod=webinars">Webinars</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?=$actevent?>" href="records_list.php?mod=events">Events</a>
                    </li>

<!--

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="contactDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Contacts
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="contactDropdown">
                            <li><a class="dropdown-item" href="contacts_list.php?tbl=dpdp">DPDPconsultants.com</a></li>
                            <li><a class="dropdown-item" href="contacts_list.php?tbl=gdpr">GDPRconsultants.com</a></li>
                            <li><a class="dropdown-item" href="contacts_list.php?tbl=pdpl">PDPLconsultants.com</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="blogDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Blogs
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="blogDropdown">
                            <li><a class="dropdown-item" href="blogs_list.php?tbl=dpdp">DPDPconsultants.com</a></li>
                            <li><a class="dropdown-item" href="blogs_list.php?tbl=gdpr">GDPRconsultants.com</a></li>
                            <li><a class="dropdown-item" href="blogs_list.php?tbl=pdpl">PDPLconsultants.com</a></li>
                        </ul>
                    </li>

-->

                    <li class="nav-item">
                        <a class="nav-link text-warning" href="logout.php">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navigation -->

    <div class="container-fluid p-5">

    <h4><?php echo $head_title; ?></h4>
