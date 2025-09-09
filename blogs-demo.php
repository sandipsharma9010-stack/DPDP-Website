<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>DPDP Website</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css"
        integrity="sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./assets/css/style.css">

    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
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

    .btn-primary {
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





    .nav-tabs .nav-link {
        background-color: none;
        color: white !important;
    }
    .nav-tabs .nav-link.active {
        background-color:#02092c;
        color: white!important;
    }

    .card {
        background-color: #111827;
        color: white;
        border-radius: 10px;
    }

    .pagination .page-item .page-link {
        background-color: #111827;
        color: white;
        border: none;
    }

    .search-container {
        display: flex;
        gap: 10px;
    }

    @media (max-width: 768px) {
        .d-flex {
            flex-direction: column;
            gap: 10px;
        }

        .search-container {
            flex-direction: column;
        }

        .form-select,
        .form-control,
        .btn {
            width: 100%;
        }

        .col-md-4 {
            width: 100%;
        }
    }

    @media (max-width: 1024px) {
        .col-md-4 {
            width: 50%;
        }
    }
    </style>
</head>

<body style="background-color:#02092c;">
    <?php include_once('navbar.php');?>
    <section class="blog">
        <div class="container hero-section">
            <h1>Your go-to hub for <span>expert insights,<br> Publications, and Information materials</span> on
                <br><b>data privacy and compliance</b></h1>
            <p>Our resources provide the essential tools, guides, and insights to help your business stay ahead of data
                privacy regulations. From practical templates to expert articles, we ensure you have everything you need
                to navigate compliance with confidence.</p>
            <div class="mt-4">
                <button class="btn btn-outline-light me-2">Sign up for Newsletter</button>
                <button class="btn btn-primary">Get in touch</button>
            </div>
        </div>
    </section>
    <section>
        <div class="container mt-4">
            <ul class="nav nav-tabs" id="contentTabs">
                <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#blogs">Blogs</a></li>
                <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#vlogs">Vlogs</a></li>
                <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#newsletter">Newsletter</a></li>
            </ul>
            <div class="d-flex justify-content-between mt-3">
                <select class="form-select w-25" id="industryFilter">
                    <option value="all">All Industries</option>
                    <option value="manufacturing">Manufacturing</option>
                    <option value="tech">Tech</option>
                </select>
                <select class="form-select w-25" id="sortFilter">
                    <option value="newest">Newest</option>
                    <option value="oldest">Oldest</option>
                </select>
                <div class="search-container">
                    <input type="text" id="search" class="form-control" placeholder="Search...">
                    <button class="btn btn-primary" id="searchBtn">Search</button>
                </div>
            </div>
            <div class="tab-content mt-3">
                <div class="tab-pane fade show active" id="blogs">
                    <div class="row" id="blogCards"></div>
                </div>
                <div class="tab-pane fade" id="vlogs">
                    <div class="row" id="vlogCards"></div>
                </div>
                <div class="tab-pane fade" id="newsletter">
                    <div class="row" id="newsletterCards"></div>
                </div>
            </div>
        </div>
        <script>
        const contentData = {
            blogs: [{
                    title: "The DPDP Act 2023, and the draft DPDP Rules, 2025",
                    date: "15th July 2025"
                },
                {
                    title: "Understanding AI Startups and Data Protection",
                    date: "20th August 2025"
                },
                {
                    title: "Data Security Challenges in 2025",
                    date: "5th September 2025"
                }
            ],
            vlogs: [{
                    title: "How AI is Transforming Industries",
                    date: "10th June 2025"
                },
                {
                    title: "Cybersecurity in the Modern World",
                    date: "22nd July 2025"
                }
            ],
            newsletter: [{
                    title: "Monthly Tech Insights - August 2025",
                    date: "1st August 2025"
                },
                {
                    title: "The Future of Data Privacy",
                    date: "15th September 2025"
                }
            ]
        };

        function renderCards(type) {
            let container = document.getElementById(`${type}Cards`);
            container.innerHTML = "";
            contentData[type].forEach(item => {
                let card =
                    `<div class='col-md-4 col-sm-6'><div class='card p-3 mb-3'><h5>${item.title}</h5><p>${item.date}</p></div></div>`;
                container.innerHTML += card;
            });
        }
        document.getElementById("searchBtn").addEventListener("click", function() {
            let value = document.getElementById("search").value.toLowerCase();
            document.querySelectorAll(".card").forEach(card => {
                card.style.display = card.innerText.toLowerCase().includes(value) ? "block" : "none";
            });
        });
        document.querySelectorAll(".nav-link").forEach(tab => {
            tab.addEventListener("click", function() {
                renderCards(this.getAttribute("href").substring(1));
            });
        });
        renderCards("blogs");
        </script>
    </section>



    <!-- jquery start -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.min.js"
        integrity="sha512-ykZ1QQr0Jy/4ZkvKuqWn4iF3lqPZyij9iRv6sGqLRdTPkY69YX6+7wvVGmsdBbiIfN/8OdsI7HABjvEok6ZopQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="./assets/js/script.js"></script>

</body>

</html>