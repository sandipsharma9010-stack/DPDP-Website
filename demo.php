<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Service Cards</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        body {
            background: #f8f9fa;
        }
        .service-card {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 15px;
            border-radius: 10px;
            cursor: pointer;
            margin-bottom: 10px;
            transition: all 0.3s ease-in-out;
            background: white;
            border: 2px solid #ddd;
            position: relative;
        }
        .service-card.active {
            background: #02092C;
            color: white;
            border-color: #02092C;
        }
        .service-card .left-content {
            display: flex;
            align-items: center;
        }
        .service-card .service-icon {
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .service-card .service-icon img {
            width: 30px;
            height: 30px;
            transition: 0.3s ease-in-out;
        }
        .service-card.active .service-icon img {
            filter: invert(1); /* Icon white when active */
        }
        .service-card .card-head {
            font-weight: bold;
            font-size: 16px;
            margin-left: 10px;
        }
        .service-card .btn-arrow {
            background: none;
            border: none;
            outline: none;
            cursor: pointer;
            transition: transform 0.3s ease-in-out;
        }
        .service-card .btn-arrow img {
            width: 20px;
            height: 20px;
            transition: transform 0.3s ease-in-out;
        }
        .service-card.active .btn-arrow img {
            filter: invert(1);
            transform: rotate(180deg); /* Rotate left */
        }
        
        /* Hover Content */
        .service-content {
            display: none;
            position: absolute;
            bottom: -40px;
            left: 50px;
            background: #fff;
            padding: 5px 10px;
            border-radius: 5px;
            font-size: 14px;
            color: #333;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
            width: calc(100% - 60px);
        }
        .service-card:hover .service-content {
            display: block;
        }

        /* Active content */
        .service-card.active .service-content {
            display: block;
            color: white;
            background: #02092C;
        }

        /* Mobile Responsive */
        @media (max-width: 768px) {
            .service-card {
                flex-direction: row;
                align-items: center;
                padding: 10px;
            }
            .service-card .btn-arrow {
                margin-left: auto;
            }
        }
    </style>
</head>
<body>

<div class="container mt-4">
    <div class="col-md-6 mx-auto">
        
        <div class="service-card">
            <div class="left-content">
                <span class="service-icon"><img src="./assets/SVG-Icons/21.svg"></span>
                <span class="card-head">DPDPA Act Readiness Review</span>
            </div>
            <button class="btn-arrow"><img src="./assets/SVG-Icons/svg_315634.svg"></button>
            <p class="service-content">Check your organization's readiness for DPDPA compliance.</p>
        </div>

        <div class="service-card active"> <!-- Default Open -->
            <div class="left-content">
                <span class="service-icon"><img src="./assets/SVG-Icons/22.svg"></span>
                <span class="card-head">DPDPA Act Compliance Assistance</span>
            </div>
            <button class="btn-arrow"><img src="./assets/SVG-Icons/svg_315634.svg"></button>
            <p class="service-content">Guiding your business through every step of DPDPA compliance.</p>
        </div>

        <div class="service-card">
            <div class="left-content">
                <span class="service-icon"><img src="./assets/SVG-Icons/25.svg"></span>
                <span class="card-head">DPDPA Act Protection Officer</span>
            </div>
            <button class="btn-arrow"><img src="./assets/SVG-Icons/svg_315634.svg"></button>
            <p class="service-content">Ensure compliance with a dedicated Data Protection Officer.</p>
        </div>

        <div class="service-card">
            <div class="left-content">
                <span class="service-icon"><img src="./assets/SVG-Icons/24.svg"></span>
                <span class="card-head">DPDPA Act Training</span>
            </div>
            <button class="btn-arrow"><img src="./assets/SVG-Icons/svg_315634.svg"></button>
            <p class="service-content">Get expert training on data privacy regulations.</p>
        </div>

        <div class="service-card">
            <div class="left-content">
                <span class="service-icon"><img src="./assets/SVG-Icons/23.svg"></span>
                <span class="card-head">Contract Review</span>
            </div>
            <button class="btn-arrow"><img src="./assets/SVG-Icons/svg_315634.svg"></button>
            <p class="service-content">Ensure contracts meet DPDPA compliance standards.</p>
        </div>

    </div>
</div>

















<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Webinar Video Slider</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        .video-section {
            position: relative;
            text-align: center;
        }
        .arrow {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background: rgba(0, 0, 0, 0.5);
            color: white;
            border: none;
            padding: 10px;
            cursor: pointer;
            font-size: 20px;
        }
        .arrow-left {
            left: -50px;
        }
        .arrow-right {
            right: -50px;
        }
        @media (max-width: 768px) {
            .arrow {
                top: 40%;
                padding: 8px;
                font-size: 16px;
            }
            .arrow-left {
                left: -30px;
            }
            .arrow-right {
                right: -30px;
            }
        }
    </style>
</head>
<body>
    <div class="container mt-4 video-section">
        <button class="arrow arrow-left" onclick="prevVideo()">&#9665;</button>
        <video id="video-frame" width="100%" height="400" controls>
            <source src="video1.mp4" type="video/mp4">
        </video>
        <button class="arrow arrow-right" onclick="nextVideo()">&#9655;</button>
    </div>
    
    <div class="container mt-3" id="content-section">
        <h2 id="video-title">Preparing for DPDP Act, 2023: A Checklist for Small and Medium Enterprises SMEs</h2>
        <p id="video-description">The implementation of the Digital Personal Data Protection Act (DPDPA) 2023 in India...</p>
    </div>
    
    <script>
        let videos = [
            {
                url: "video1.mp4",
                title: "Preparing for DPDP Act, 2023: A Checklist for Small and Medium Enterprises SMEs",
                description: "The implementation of the Digital Personal Data Protection Act (DPDPA) 2023 in India..."
            },
            {
                url: "video2.mp4",
                title: "Understanding DPDP Act: Compliance Strategies",
                description: "In this webinar, we will discuss compliance strategies for the DPDP Act..."
            },
            {
                url: "video3.mp4",
                title: "Data Protection Impact Assessments: A Practical Guide",
                description: "Learn about conducting data protection impact assessments under DPDP Act..."
            }
        ];
        let currentVideo = 0;
        
        function updateVideoContent() {
            document.getElementById('video-frame').src = videos[currentVideo].url;
            document.getElementById('video-title').innerText = videos[currentVideo].title;
            document.getElementById('video-description').innerText = videos[currentVideo].description;
        }
        
        function prevVideo() {
            currentVideo = (currentVideo - 1 + videos.length) % videos.length;
            updateVideoContent();
        }
        
        function nextVideo() {
            currentVideo = (currentVideo + 1) % videos.length;
            updateVideoContent();
        }
    </script>
</body>
</html>


<script>
    $(document).ready(function () {
        $(".service-card").click(function () {
            $(".service-card").removeClass("active").find(".service-content").slideUp();
            $(this).addClass("active").find(".service-content").slideDown();
        });
    });
</script>

</body>
</html>
