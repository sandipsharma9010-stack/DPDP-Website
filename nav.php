<style>
.top-menu {
    display: flex;
    justify-content: flex-end;
    align-items: center;
    gap: 15px;
    padding: 10px 20px;
    color: white;
    font-size: 14px;
    background-color: #02092C;
}

.top-menu a {
    color: white;
    text-decoration: none;
    font-weight: 500;
}

.top-menu a:hover {
    text-decoration: underline;
}

.custom-navbar {
    background-color: white;
    border-radius: 50px;
    padding: 10px 20px;
    margin: 0px auto;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
}

.navbar-brand img {
    /* height: 40px; */
}

.nav-link {
    color: black;
    /* font-weight: 700; */
    font-size: 18px;
}

.nav-link:hover {
    color: #000;
}

.contact-btn {
    background-color: #02092C;
    color: white;
    border-radius: 50px;
    padding: 8px 20px;
    border: none;
}

.contact-btn:hover {
    background-color: #000;
}

.lindedin {
    width: 20px;
    height: 20px;
    margin: 0px 5px;
}

.dpdp-logo {
    width: 101px;
    height: 45px;
    object-fit: contain;
}

ul,
li {
    /* font-size: 15px; */
}

/* Mobile Responsive */
@media (max-width: 992px) {
    .top-menu {
        display: none;
    }

    .mobile-extra {
        display: block !important;
        /* text-align: center; */
        padding: 10px;
        color:black;
        gap:10px;
    }

    .custom-navbar {
        border-radius: 0;
        margin: 24px 0px;
        padding: 14px 7px;
    }
}


.navbar-nav {
    gap: 20px;
}

.navbar-nav .dropdown:hover .dropdown-menu {
    display: block;
}

@media (min-width: 993px) {
    .mobile-extra {
        display: none;
    }
}
</style>
<div class="container-fluid top-menu">
    <a target="_blank" href="http://tech.portal-uat.dpdpconsultants.com/dpgr_form?_gl=1"><i class="bi bi-box-arrow-up-right"></i>
        Principal Rights</a>
    <span>Follow us:</span>
    <a href="https://www.linkedin.com/company/dpdpconsultants/" target="_blank"><i class="bi bi-linkedin fs-4"></i></a>
    <a href="https://www.youtube.com/@DPDPConsultants" target="_blank"><i class="bi bi-youtube fs-4"></i></a>
    <a href="https://x.com/socialdpdp43979" target="_blank"><i class="bi bi-twitter-x fs-4"></i></a>
</div>

<!-- Navbar Section -->
<nav class="navbar navbar-expand-lg custom-navbar container mt-2 ">
    <a class="navbar-brand" href="#">
        <a href="index.php"><img class="dpdp-logo" src="./assets/images/dpdp-logo1.jpg" alt="DPDP Consultants Company Logo"></a>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
        <ul class="navbar-nav mx-auto">
            <li class="nav-item">
                <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="about-us.php" role="button">About
                    us</a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="about-us.php#whoweare">Who we are</a></li>
                    <li><a class="dropdown-item" href="about-us.php#missionandvision">Mission and Vision</a></li>
                    <li><a class="dropdown-item" href="about-us.php#ourteam">Our Team</a></li>
                    <li><a class="dropdown-item" href="about-us.php#whatwedo">What we do</a></li>
                    <li><a class="dropdown-item" href="about-us.php#awardsandcertifications">Awards & Certifications</a>
                    </li>
                </ul>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="what-is-dpdpa.php" role="button">DPDP Act 2023</a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="draft-dpdp-rules-2025.php">Draft DPDP Rules 2025</a></li>
                    <li><a class="dropdown-item" href="administrative-fines-and-penalties.php">Administrative Fines And Penalties</a></li>
                    <li><a class="dropdown-item" href="subcontractor-and-thrid-party-issues.php">Subcontractor And Third Party Issues</a></li>
                    <li><a class="dropdown-item" href="dpdpa-and-business-discontiniuity.php">DPDPA And Business Discontiniuity</a></li>
                    <li><a class="dropdown-item" href="case-study.php">Case Study</a>
                    </li>
                </ul>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="compliance-tools.php" role="button">
                    Compliance Tools
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="dpcm.php">Data Principal Consent Management</a></li>
                    <li><a class="dropdown-item" href="dpgr.php">Data Principal Grievance Redressal</a></li>
                    <li><a class="dropdown-item" href="dpap.php">Data Protection Awareness Program</a></li>
                    <li><a class="dropdown-item" href="dpia.php">Data Protection Impact Assessment</a></li>
                    <li><a class="dropdown-item" href="dptpa.php">Data Protection Third Party Assessment</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="services.php" role="button">Services</a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="readiness-review.php">Gap assessment review</a></li>
                    <li><a class="dropdown-item" href="data-protection-officer-as-a-service.php">Data Protection Officer
                            as a Service</a></li>
                    <li><a class="dropdown-item" href="contract-review-data-processing-agreements.php">Contract Review &
                            Data Processing Agreements</a></li>
                    <li><a class="dropdown-item" href="consulting-advisory-and-audit.php">Consulting, Advisory and
                            Audit</a></li>
                    <li><a class="dropdown-item" href="training-programs-for-DPDPA-compliance.php">Training Programs for
                            DPDPA Compliance</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Resources</a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="blogs.php">Blogs</a></li>
                    <li><a class="dropdown-item" href="whitepapers.php">Whitepapers</a></li>
                    <li><a class="dropdown-item" href="newsletters.php">Newsletters</a></li>
                    <li><a class="dropdown-item" href="research.php">Research Reports</a></li>
                    <li><a class="dropdown-item" href="inthenews.php">In the News</a></li>
                    <li><a class="dropdown-item" href="webinars.php">Webinars</a></li>
                    <li><a class="dropdown-item" href="events.php">Upcoming Events</a></li>

                </ul>
            </li>
            <!-- <li class="nav-item">
                <a class="nav-link" href="career.php">Career</a>
            </li> -->

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Career</a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="career.php">Join our Team</a></li>
                    <li><a class="dropdown-item" href="dpdp-act-foundation-course.php">DPDP Act Foundation Course</a></li>
                    

                </ul>
            </li>
        </ul>
        <a href="contact.php"> <button class="btn contact-btn">Contact us</button></a>

        <!-- Mobile View Extra Menu -->
        <div class="mobile-extra">
            <a href="http://tech.portal-uat.dpdpconsultants.com/dpgr_form?_gl=1"><i
                    class="bi bi-box-arrow-up-right"></i> Principal Rights</a> |
            <span>Follow us:</span> <a href="https://www.linkedin.com/company/dpdpconsultants/"><i class="bi bi-linkedin"></i></a>
            <a href="https://www.youtube.com/@DPDPConsultants" target="_blank"><i class="bi bi-youtube fs-4"></i></a>
            <a href="https://x.com/socialdpdp43979" target="_blank"><i class="bi bi-twitter-x fs-4"></i></a>
        </div>
    </div>
</nav>