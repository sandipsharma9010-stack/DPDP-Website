<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>DPDP Website</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/style.css">

    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

</head>
<style>
body {
    background-color: #02092c;
    color: white;
}

.dpdp-header{
    margin-top:100px;
}
/* .what-is-dpdp-icon{
    width:70%;
    height: auto;
} */
.what-is-dpdp-icon img{
    width: 70%;
    height: auto;
    display: flex;
    justify-content: center;
    align-items: center;
}
.w-dpdp{
    /* background-color: #3294CD; */
    color: white;
    border: 1px solid #3294CD; 
    border-radius: 10px;
    padding: 10px 20px;
}
</style>

<body>
    <?php include 'nav.php'; ?>

    <section>
        <div class="container">
            <div class="row dpdp-header">

                <div class="col-sm-4">

                    <div class="what-is-dpdp-icon">
                        <img src="./assets/images/dpdp-act-2023.png" alt="Law Icon" class="img-fluid">
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="">
                        <h1>Understanding the DPDP Act 2023</h1>
                        <h2>Key Regulations and Compliance Requirements</h2>
                        <p>Empowering Privacy, Protecting People Highlights the act's core mission of safeguarding
                            individual data
                            rights.</p>
                        <div class="what-is-dpdp-buttons mt-3">
                            <a href="contact.php" class="btn btn-outline-light w-dpdp">Book a Demo</a>
                            <a href="contact.php?act=schedule" class="btn btn-primary">Schedule a Call</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include 'footer.php'; ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.bundle.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="./assets/js/script.js"></script>

</body>

</html>