<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tabs with Cards</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <style>

.search-box {
            width: 250px;
            border-radius: 5px;
            padding: 5px;
            border: 1px solid #ccc;
        }
        .pagination .page-item.active .page-link {
            background-color: #02092C;
            border-color: #02092C;
            color: white;
        }
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
    </style>
</head>

<body style="background-color: #02092c;">
    <?php include_once('nav.php');?>

    <section class="blog">
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
    </section>
    <div class="container mt-5">
        <!-- Navigation Tabs -->
        <ul class="nav navs nav-tabs" id="myTabs">
            <li class="nav-item">
                <a class="nav-link nav-links active" data-bs-toggle="tab" href="#blogs">Blogs</a>
            </li>
            <li class="nav-item">
                <a class="nav-link nav-links" data-bs-toggle="tab" href="#newsletter">Newsletter</a>
            </li>
            <li class="nav-item">
                <a class="nav-link nav-links" data-bs-toggle="tab" href="#whitepaper">Whitepaper</a>
            </li>
            <li class="nav-item">
                <a class="nav-link nav-links" data-bs-toggle="tab" href="#research">Research Reports</a>
            </li>
            <li class="nav-item">
                <a class="nav-link nav-links" data-bs-toggle="tab" href="#inthenews">In the News</a>
            </li>
            <li class="nav-item">
                <a class="nav-link nav-links" data-bs-toggle="tab" href="#webinars">Webinars</a>
            </li>
            <!-- <li class="nav-item">
                <a class="nav-link nav-links" data-bs-toggle="tab" href="#events">Events</a>
            </li> -->
            <li class="nav-item">
                <a class="nav-link nav-links" data-bs-toggle="tab" href="#events">Upcoming Events</a>
            </li>
        </ul>

        <!-- Tab Content -->
        <div class="tab-content mt-4">
            <div id="blogs" class="tab-pane fade show active">
            <div class="container mt-4">
    <!-- Sort & Search -->
    <div class="d-flex justify-content-between align-items-center mb-3">
        <div>
            <strong>Sort By :</strong>
            <select id="sort" class="form-select d-inline-block w-auto">
                <option value="newest">Newest</option>
                <option value="oldest">Oldest</option>
            </select>
        </div>
        <div class="d-flex align-items-center">
            <input type="text" id="search" class="form-control search-box me-2" placeholder="Search">
            <button class="btn btn-primary">Search</button>
        </div>
    </div>
    <nav class="mt-4">
        <ul class="pagination justify-content-center">
            <li class="page-item"><a class="page-link" href="#" id="prev">Previous</a></li>
            <li class="page-item active"><a class="page-link" href="#" id="page1">1</a></li>
            <li class="page-item"><a class="page-link" href="#" id="page2">2</a></li>
            <li class="page-item"><a class="page-link" href="#" id="page3">3</a></li>
            <li class="page-item"><a class="page-link" href="#" id="page4">4</a></li>
            <li class="page-item"><a class="page-link" href="#" id="page5">5</a></li>
            <li class="page-item"><a class="page-link" href="#" id="next">Next</a></li>
        </ul>
    </nav>

    <!-- Cards List -->
    <div id="cardContainer" class="row g-4">
        <!-- Cards will be dynamically generated -->
    </div>

    <!-- Pagination -->
    
</div>

            </div>


            <div id="vlogs" class="tab-pane fade">
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
                </div>
            </div>

            <div id="newsletter" class="tab-pane fade">
                <div class="row">
                    <div class="col-md-4">
                        <img src="./assets/images/newletter1.png" class="card-img-top" alt="Newsletter">
                    </div>
                    <div class="col-md-4">
                        <img src="./assets/images/newletter1.png" class="card-img-top" alt="Newsletter">
                    </div>
                    <div class="col-md-4">
                        <img src="./assets/images/newletter1.png" class="card-img-top" alt="Newsletter">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <img src="./assets/images/newletter1.png" class="card-img-top" alt="Newsletter">
                    </div>
                    <div class="col-md-4">
                        <img src="./assets/images/newletter1.png" class="card-img-top" alt="Newsletter">
                    </div>
                    <div class="col-md-4">
                        <img src="./assets/images/newletter1.png" class="card-img-top" alt="Newsletter">
                    </div>
                </div>
                <!-- </div> -->
            </div>

            <div id="whitepaper" class="tab-pane fade">
                <div class="row">
                    <div class="col-md-4">
                        <img src="./assets/images/white-paper.png" class="card-img-top" alt="Whitepaper">
                        <div class="text-center">
                        <a href="files/sample.pdf" download="MyPDF">
                            <button class="btn btn-primary btns-primary px-5">Download</button>
                        </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <img src="./assets/images/white-paper.png" class="card-img-top" alt="Whitepaper">
                        <div class="text-center">
                        <a href="files/sample.pdf" download="MyPDF">
                            <button class="btn btn-primary btns-primary px-5">Download</button>
                        </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <img src="./assets/images/white-paper.png" class="card-img-top" alt="Whitepaper">
                        <div class="text-center">
                        <a href="files/sample.pdf" download="MyPDF">
                            <button class="btn btn-primary btns-primary px-5">Download</button>
                        </a>
                        </div>
                    </div>
                </div>
            </div>

            <div id="research" class="tab-pane fade">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card">
                            <img src="./assets/images/newsletter1.png" class="card-img-top" alt="Research Report">
                            <div class="card-body">
                                <h5 class="card-title">Research Report 1</h5>
                                <p class="card-text">In-depth research analysis.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="inthenews" class="tab-pane fade">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card">
                            <img src="https://via.placeholder.com/300" class="card-img-top" alt="Research Report">
                            <div class="card-body">
                                <h5 class="card-title">In the News</h5>
                                <p class="card-text">In-depth research analysis.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="webinars" class="tab-pane fade">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card">
                            <img src="https://via.placeholder.com/300" class="card-img-top" alt="Webinar">
                            <div class="card-body">
                                <h5 class="card-title">Webinar 1</h5>
                                <p class="card-text">Join our live sessions.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="events" class="tab-pane fade">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card">
                            <img src="https://via.placeholder.com/300" class="card-img-top" alt="Event">
                            <div class="card-body">
                                <h5 class="card-title">Event 1</h5>
                                <p class="card-text">Upcoming industry events.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include_once('footer.php');?>

    <script>
    let data = [
        { id: 1, title: "Card 1", img: "https://via.placeholder.com/300", date: "2025-02-27" },
        { id: 2, title: "Card 2", img: "https://via.placeholder.com/300", date: "2025-02-26" },
        { id: 3, title: "Card 3", img: "https://via.placeholder.com/300", date: "2025-02-25" },
        { id: 4, title: "Card 4", img: "https://via.placeholder.com/300", date: "2025-02-24" },
        { id: 5, title: "Card 5", img: "https://via.placeholder.com/300", date: "2025-02-23" },
        { id: 6, title: "Card 6", img: "https://via.placeholder.com/300", date: "2025-02-22" },
        { id: 7, title: "Card 7", img: "https://via.placeholder.com/300", date: "2025-02-21" },
        { id: 8, title: "Card 8", img: "https://via.placeholder.com/300", date: "2025-02-20" }
    ];

    let currentPage = 1;
    let itemsPerPage = 4;

    function displayData() {
        let sortedData = [...data];
        if ($("#sort").val() === "oldest") {
            sortedData.sort((a, b) => new Date(a.date) - new Date(b.date));
        } else {
            sortedData.sort((a, b) => new Date(b.date) - new Date(a.date));
        }

        let searchTerm = $("#search").val().toLowerCase();
        let filteredData = sortedData.filter(item => item.title.toLowerCase().includes(searchTerm));

        let startIndex = (currentPage - 1) * itemsPerPage;
        let endIndex = startIndex + itemsPerPage;
        let pageData = filteredData.slice(startIndex, endIndex);

        $("#cardContainer").html("");
        pageData.forEach(item => {
            $("#cardContainer").append(`
                <div class="col-md-6 col-lg-3">
                    <div class="card">
                        <img src="${item.img}" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">${item.title}</h5>
                            <p class="card-text">Date: ${item.date}</p>
                            <a href="#" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
            `);
        });
    }

    function updatePagination() {
        $(".pagination .page-item").removeClass("active");
        $(`#page${currentPage}`).parent().addClass("active");
    }

    $(document).ready(() => {
        displayData();

        $("#sort").change(() => {
            displayData();
        });

        $("#search").on("input", () => {
            currentPage = 1;
            displayData();
        });

        $(".pagination .page-link").click(function (e) {
            e.preventDefault();
            let id = $(this).attr("id");

            if (id === "prev" && currentPage > 1) {
                currentPage--;
            } else if (id === "next" && currentPage < 5) {
                currentPage++;
            } else if (id.startsWith("page")) {
                currentPage = parseInt(id.replace("page", ""));
            }

            displayData();
            updatePagination();
        });
    });
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</body>

</html>