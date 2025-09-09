<div id="blogs" class="tab-pane fade show active">
            <div class="row">
            <div class="col-md-4">
                    <div class="custom-card">
                        <div class="card-header c-header">
                            <img src="./assets/images/People-Man.png" alt="Card Image">
                            <!-- <div class="overlay">
                            <h5>The DPDP Act 2023, and the draft DPDP Rules, 2025: What do they mean for AI startups?</h5>
                                <span class="date">15th July 2025</span>
                            </div> -->
                        </div>
                        <div class="card-body c-body">
                            <h6>The DPDP Act 2025, and the draft DPDP Rules, 2025: What do they mean for AI Startups?
                            </h6>
                            <p>DPDP 2025 (Data Protection and Digital Privacy 2025) is a forward-looking framework aimed
                                at strengthening data privacy regulations in an increasingly digital world...</p>
                            <!-- <a href="#" class="read-more">Read more →</a>
                            <p class="text-muted mt-2">~ Artificial Intelligence</p> -->
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="custom-card">
                        <div class="card-header c-header">
                            <img src="./assets/images/People-Man.png" alt="Card Image">
                            <!-- <div class="overlay">
                            <h5>The DPDP Act 2023, and the draft DPDP Rules, 2025: What do they mean for AI startups?</h5>
                                <span class="date">15th July 2025</span>
                            </div> -->
                        </div>
                        <div class="card-body c-body">
                            <h6>The DPDP Act 2025, and the draft DPDP Rules, 2025: What do they mean for AI Startups?
                            </h6>
                            <p>DPDP 2025 (Data Protection and Digital Privacy 2025) is a forward-looking framework aimed
                                at strengthening data privacy regulations in an increasingly digital world...</p>
                            <!-- <a href="#" class="read-more">Read more →</a>
                            <p class="text-muted mt-2">~ Artificial Intelligence</p> -->
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="custom-card">
                        <div class="card-header c-header">
                            <img src="./assets/images/People-Man.png" alt="Card Image">
                            <!-- <div class="overlay">
                            <h5>The DPDP Act 2023, and the draft DPDP Rules, 2025: What do they mean for AI startups?</h5>
                                <span class="date">15th July 2025</span>
                            </div> -->
                        </div>
                        <div class="card-body c-body">
                            <h6>The DPDP Act 2025, and the draft DPDP Rules, 2025: What do they mean for AI Startups?
                            </h6>
                            <p>DPDP 2025 (Data Protection and Digital Privacy 2025) is a forward-looking framework aimed
                                at strengthening data privacy regulations in an increasingly digital world...</p>
                            <!-- <a href="#" class="read-more">Read more →</a>
                            <p class="text-muted mt-2">~ Artificial Intelligence</p> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sort, Search & Pagination</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
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
    </style>
</head>
<body>

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

    <!-- Cards List -->
    <div id="cardContainer" class="row g-4">
        <!-- Cards will be dynamically generated -->
    </div>

    <!-- Pagination -->
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
</div>

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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
