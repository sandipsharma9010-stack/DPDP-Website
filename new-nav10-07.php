<style>
/* Top Bar (Desktop Only) */
.top-bar {
    background-color: #02092C;
    color: white;
    display: flex;
    justify-content: flex-end;
    align-items: center;
    padding: 8px 20px;
    font-size: 14px;
    gap: 15px;
}

.top-bar a {
    color: white;
    text-decoration: none;
    font-weight: 500;
}

.top-bar a:hover {
    text-decoration: underline;
}

.right-top {
    display: flex;
    align-items: center;
    gap: 15px;
}

/* Navbar */
.custom-navbar {
    background-color: white;
    border-radius: 50px;
    padding: 0px 20px;
    margin: 10px auto;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
    position: fixed;
    top: 40px;
    left: 50%;
    transform: translateX(-50%);
    width: 84%;
    z-index: 1000;
}

.nav-link {
    color: black;
    font-size: 16px;
}

.nav-link:hover {
    color: #000;
}

.contact-btn {
    background-color: #02092C;
    color: white;
    padding: 8px 16px;
    border-radius: 20px;
    text-decoration: none;
    font-weight: bold;
}

.contact-btn:hover {
    background-color: #030c45;
}

.dropdown:hover .dropdown-menu {
    display: block;
    margin-top: 0;
}

/* Mobile View */
@media (max-width: 992px) {
    .top-bar {
        /* display: none; */
    }

    .custom-navbar {
        width: 100%;
        top: -11px;
        left: 0;
        transform: none;
        border-radius: 0;
        box-shadow: none;
        padding: 0;
    }

    .mobile-header {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 12px 16px;
        background-color: #fff;
    }

    .mobile-header img {
        height: 36px;
    }

    .mobile-header .close-btn {
        font-size: 24px;
        font-weight: bold;
        color: #000;
        background: none;
        border: none;
    }

    .mobile-menu-item {
        background: #f8f9fc;
        width: 100%;
        text-align: left;
        padding: 14px 20px;
        font-weight: bold;
        display: flex;
        justify-content: space-between;
        align-items: center;
        font-size: 16px;
        border-top: 1px solid #e3e3e3;
    }
    .mobile-menu-item a{
        color:black;
    }

    .mobile-submenu {
        display: none;
        padding: 0 20px 10px;
        background-color: white;
        text-align: left;
    }

    .mobile-submenu a {
        display: block;
        padding: 6px 0;
        color: #333;
        text-decoration: none;
    }

    .mobile-submenu a:hover {
        text-decoration: underline;
    }

    .toggle-icon {
        font-size: 20px;
        color: #0043d0;
        font-weight: bold;
    }

    .mobile-follow-bar {
        background-color: #02092C;
        padding: 10px 20px;
        width: 100%;
        position: relative;
        margin-top: 20px;
    }

    .mobile-bottom-bar {
        justify-content: center;
        font-size: 13px;
    }

    .mobile-bottom-bar .right-top {
        gap: 10px;
        flex-wrap: wrap;
    }
}

@media (min-width: 768px) {
    .cnt-btn {
        display: none;
    }
    .mobile-bottom-bar{
        display: none;
    }
}

@media (max-width: 768px) {
    .contact-btnd {
        display: none;
    }
    .contact-btn{
        padding:5px 7px;
        font-size: 12px;
        margin-left: 109px;
    }
}
</style>


<!-- Top Bar (Desktop) -->
<div tabindex="-1" aria-hidden="true" class="top-bar">
    <div class="right-top">
        <a target="_blank" href="http://tech.portal-uat.dpdpconsultants.com/dpgr_form?_gl=1"><i
                class="bi bi-box-arrow-up-right"></i>
            Principal Rights</a>
        <span>Follow us:</span>
        <a href="https://www.linkedin.com/company/dpdpconsultants/" target="_blank"><i
                class="bi bi-linkedin fs-4"></i></a>
        <a href="https://www.youtube.com/@DPDPConsultants" target="_blank"><i class="bi bi-youtube fs-4"></i></a>
        <a href="https://x.com/socialdpdp43979" target="_blank"><i class="bi bi-twitter-x fs-4"></i></a>
    </div>
</div>

<!-- Navbar -->
<nav tabindex="-1" aria-hidden="true" class="navbar navbar-expand-lg custom-navbar">
    <div class="container-fluid">
        <!-- Mobile Header -->
        <div class="mobile-header d-lg-none">
            <a href="index.php">
            <img src="./assets/images/dpdp-logo1.jpg" alt="Logo">
            </a>
            <!-- <button class="close-btn">&times;</button> -->
        </div>

        <!-- Desktop Brand + Toggler -->
        <a class="navbar-brand d-none d-lg-block" href="index.php">
            <img src="./assets/images/dpdp-logo1.jpg" alt="Logo" width="100">
        </a>
        <a href="contact.php" class="contact-btn cnt-btn">Contact Us</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">

            <!-- Desktop Nav -->
            <ul class="navbar-nav mx-auto d-none d-lg-flex">
                <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="about-us.php" role="button" >About us
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="about-us.php#whoweare">Who we are</a></li>
                        <li><a class="dropdown-item" href="about-us.php#missionandvision">Mission and Vision</a></li>
                        <li><a class="dropdown-item" href="about-us.php#ourteam">Our Team</a></li>
                        <li><a class="dropdown-item" href="about-us.php#whatwedo">What we do</a></li>
                        <li><a class="dropdown-item" href="about-us.php#awardsandcertifications">Awards & Certifications</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="what-is-dpdpa.php" role="button">DPDP Act
                        2023</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="draft-dpdp-rules-2025.php">Draft DPDP Rules 2025</a></li>
                        <li><a class="dropdown-item" href="administrative-fines-and-penalties.php">Administrative Fines
                                And Penalties</a></li>
                        <li><a class="dropdown-item" href="subcontractor-and-thrid-party-issues.php">Subcontractor And
                                Third Party Issues</a></li>
                        <li><a class="dropdown-item" href="dpdpa-and-business-discontiniuity.php">DPDPA And Business
                                Discontiniuity</a></li>
                        <li><a class="dropdown-item" href="case-study.php">Case Study</a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="compliance-tools.php" role="button"
                        >Compliance-Tools </a>
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
                        <li><a class="dropdown-item" href="data-protection-officer-as-a-service.php">Data Protection
                                Officer
                                as a Service</a></li>
                        <li><a class="dropdown-item" href="contract-review-data-processing-agreements.php">Contract
                                Review &
                                Data Processing Agreements</a></li>
                        <li><a class="dropdown-item" href="consulting-advisory-and-audit.php">Consulting, Advisory and
                                Audit</a></li>
                        <li><a class="dropdown-item" href="training-programs-for-DPDPA-compliance.php">Training Programs
                                for
                                DPDPA Compliance</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Resources</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="blogs.php">Blogs</a></li>
                        <li><a class="dropdown-item" href="whitepapers.php">Whitepapers</a></li>
                        <li><a class="dropdown-item" href="newsletters.php">Newsletters</a></li>
                        <li><a class="dropdown-item" href="research.php">Reasearch Reports</a></li>
                        <li><a class="dropdown-item" href="inthenews.php">In the News</a></li>
                        <li><a class="dropdown-item" href="webinars.php">Webinars</a></li>
                        <li><a class="dropdown-item" href="events.php">Upcoming Events</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Career</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="career.php">Join our Team</a></li>
                        <li><a class="dropdown-item" href="dpdp-act-foundation-course.php">DPDP Act Foundation
                                Course</a></li>
                </li>
            </ul>
            </li>
            </ul>
            <!-- Mobile Bottom Follow Us -->
            <div class="mobile-follow-bar">
                    <div class="top-bar mobile-bottom-bar">
                        <div class="right-top">
                            <a target="_blank" href="http://tech.portal-uat.dpdpconsultants.com/dpgr_form?_gl=1"><i
                                    class="bi bi-box-arrow-up-right"></i>
                                Principal Rights</a>
                            <span>Follow us:</span>
                            <a href="https://www.linkedin.com/company/dpdpconsultants/" target="_blank"><i
                                    class="bi bi-linkedin fs-4"></i></a>
                            <a href="https://www.youtube.com/@DPDPConsultants" target="_blank"><i
                                    class="bi bi-youtube fs-4"></i></a>
                            <a href="https://x.com/socialdpdp43979" target="_blank"><i
                                    class="bi bi-twitter-x fs-4"></i></a>
                        </div>
                    </div>
                </div>

            <!-- Mobile Accordion Nav -->
            <div class="d-lg-none w-100">
                <button class="mobile-menu-item" type="button">
                    <a href="index.php">Home</a> <span class="toggle-icon">+</span>
                </button>
                <div class="mobile-submenu">
                    <!-- <a href="#">Overview</a>
                    <a href="#">Features</a> -->
                </div>

                <button class="mobile-menu-item" type="button">
                    <a href="about-us.php">About us</a> <span class="toggle-icon">+</span>
                </button>
                <div class="mobile-submenu">
                    <a href="about-us.php#whoweare">Who we are</a>
                    <a href="#">Mission and Vision</a>
                    <a href="#">Our Team</a>
                    <a href="#">What we do</a>
                    <a href="#">Awards & Certifications</a>
                </div>

                <button class="mobile-menu-item" type="button">
                    <a href="what-is-dpdpa.php">DPDP Act 2023</a> <span class="toggle-icon">+</span>
                </button>
                <div class="mobile-submenu">
                   
                    <a href="draft-dpdp-rules-2025.php">Draft DPDP Rules 2025</a>
                    <a href="administrative-fines-and-penalties.php">Administrative Fines And Penalties</a>
                    <a href="subcontractor-and-thrid-party-issues.php">Subcontractor And Third Party Issues</a>
                    <a href="dpdpa-and-business-discontiniuity.php">DPDPA And Business Discontiniuity</a>
                    <a href="case-study.php">Case Study</a>

                </div>

                <button class="mobile-menu-item" type="button">
                   <a href="compliance-tools.php"> Compliance-Tools </a> <span class="toggle-icon">+</span>
                </button>
                <div class="mobile-submenu">
                    <a href="dpcm.php">Data Principal Consent Management</a>
                    <a href="dpgr.php">Data Principal Grievance Redressal</a>
                    <a href="dpap.php">Data Protection Awareness Program</a>
                    <a href="dpia.php">Data Protection Impact Assessment</a>
                    <a href="dptpa.php">Data Protection Third Party Assessment</a>
                </div>
                <button class="mobile-menu-item" type="button">
                    <a href="services.php">Services</a> <span class="toggle-icon">+</span>
                </button>
                <div class="mobile-submenu">
                    <a href="readiness-review.php">Gap assessment review</a>
                    <a href="data-protection-officer-as-a-service.php">Data Protection Officer
                        as a Service</a>
                    <a href="contract-review-data-processing-agreements.php">Contract Review &
                        Data Processing Agreements</a>
                    <a href="consulting-advisory-and-audit.php">Consulting, Advisory and
                        Audit</a>
                    <a href="training-programs-for-DPDPA-compliance.php">Training Programs for
                        DPDPA Compliance</a>

                </div>
                <button class="mobile-menu-item" type="button">
                    Resources <span class="toggle-icon">+</span>
                </button>
                <div class="mobile-submenu">
                    <a href="blogs.php">Blogs</a>
                    <a href="whitepapers.php">Whitepapers</a>
                    <a href="newsletters.php">Newsletters</a>
                    <a href="research.php">Reasearch Reports</a>
                    <a href="inthenews.php">In the News</a>
                    <a href="webinars.php">Webinars</a>
                    <a href="events.php">Upcoming Events</a>
                </div>
                <button class="mobile-menu-item" type="button">
                    Career <span class="toggle-icon">+</span>
                </button>
                <div class="mobile-submenu">
                    <a href="career.php">Join our Team</a>
                    <a href="dpdp-act-foundation-course.php">DPDP Act Foundation Course</a></a>
                </div>

                
            </div>

            <a href="contact.php" class="contact-btn contact-btnd">Contact Us</a>
        </div>
    </div>
</nav>

<script>
// Accordion-like toggle for mobile submenu
document.querySelectorAll('.mobile-menu-item').forEach((btn) => {
    btn.addEventListener('click', () => {
        const submenu = btn.nextElementSibling;
        const icon = btn.querySelector('.toggle-icon');
        const isOpen = submenu.style.display === 'block';

        // Close all others
        document.querySelectorAll('.mobile-submenu').forEach(sm => sm.style.display = 'none');
        document.querySelectorAll('.toggle-icon').forEach(ic => ic.textContent = '+');

        // Toggle current
        submenu.style.display = isOpen ? 'none' : 'block';
        icon.textContent = isOpen ? '+' : '−';
    });
});
</script>