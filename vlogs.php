<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Tabs with Cards</title>
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
        padding: 60px 20px;
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
        color: #B0B3C3;
    }

    .btns-primary {
        background-color: #3CA6E0;
        border: none;
        padding: 10px 20px;
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

    @media (max-width: 768px) {
        .news-card {
            flex-direction: column;
            align-items: flex-start;
        }

        .news-card img {
            width: 100%;
        }

        .in-the-news {
            flex-direction: column;
        }
    }
    </style>
</head>

<body>

    <section class="blog" style="background-color: #02092c;">
        <?php include_once('nav.php');?>
        <div class="container hero-section">
            <h1>Your go-to hub for <span>expert insights,<br> Publications, and Information materials</span> on
                <br><b>data privacy and compliance</b>
            </h1>
            <p>Our resources provide the essential tools, guides, and insights to help your business stay ahead of data
                privacy regulations. From practical templates to expert articles, we ensure you have everything you need
                to navigate compliance with confidence.</p>
            <div class="mt-4">
                <button class="btn btn-outline-light me-2">Sign up for Newsletter</button>
                <button class="btn btn-primary btns-primary">Get in touch</button>
            </div>
        </div>
        <?php include_once('navtab.php');?>
    </section>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-4">
                <div class="custom-card">
                    <div class="card-header c-header">
                        <img src="./assets/images/People-Man.png" alt="Card Image">
                    </div>
                    <div class="card-body c-body">
                        <h6>The DPDP Act 2025, and the draft DPDP Rules, 2025: What do they mean for AI
                            Startups?
                        </h6>
                        <p>DPDP 2025 (Data Protection and Digital Privacy 2025) is a forward-looking framework
                            aimed
                            at strengthening data privacy regulations in an increasingly digital world...</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="custom-card">
                    <div class="card-header c-header">
                        <img src="./assets/images/People-Man.png" alt="Card Image">
                    </div>
                    <div class="card-body c-body">
                        <h6>The DPDP Act 2025, and the draft DPDP Rules, 2025: What do they mean for AI
                            Startups?
                        </h6>
                        <p>DPDP 2025 (Data Protection and Digital Privacy 2025) is a forward-looking framework
                            aimed
                            at strengthening data privacy regulations in an increasingly digital world...</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="custom-card">
                    <div class="card-header c-header">
                        <img src="./assets/images/People-Man.png" alt="Card Image">
                    </div>
                    <div class="card-body c-body">
                        <h6>The DPDP Act 2025, and the draft DPDP Rules, 2025: What do they mean for AI
                            Startups?
                        </h6>
                        <p>DPDP 2025 (Data Protection and Digital Privacy 2025) is a forward-looking framework
                            aimed
                            at strengthening data privacy regulations in an increasingly digital world...</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="custom-card">
                    <div class="card-header c-header">
                        <img src="./assets/images/People-Man.png" alt="Card Image">
                    </div>
                    <div class="card-body c-body">
                        <h6>The DPDP Act 2025, and the draft DPDP Rules, 2025: What do they mean for AI
                            Startups?
                        </h6>
                        <p>DPDP 2025 (Data Protection and Digital Privacy 2025) is a forward-looking framework
                            aimed
                            at strengthening data privacy regulations in an increasingly digital world...</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="custom-card">
                    <div class="card-header c-header">
                        <img src="./assets/images/People-Man.png" alt="Card Image">
                    </div>
                    <div class="card-body c-body">
                        <h6>The DPDP Act 2025, and the draft DPDP Rules, 2025: What do they mean for AI
                            Startups?
                        </h6>
                        <p>DPDP 2025 (Data Protection and Digital Privacy 2025) is a forward-looking framework
                            aimed
                            at strengthening data privacy regulations in an increasingly digital world...</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="custom-card">
                    <div class="card-header c-header">
                        <img src="./assets/images/People-Man.png" alt="Card Image">
                    </div>
                    <div class="card-body c-body">
                        <h6>The DPDP Act 2025, and the draft DPDP Rules, 2025: What do they mean for AI
                            Startups?
                        </h6>
                        <p>DPDP 2025 (Data Protection and Digital Privacy 2025) is a forward-looking framework
                            aimed
                            at strengthening data privacy regulations in an increasingly digital world...</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include_once('footer.php');?>
</body>

</html>