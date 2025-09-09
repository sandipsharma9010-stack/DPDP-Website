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

/* Dropdown on Hover */
.dropdown:hover .dropdown-menu {
    display: block;
    margin-top: 0;
}

/* Hide top bar in mobile and show it inside navbar */
@media (max-width: 992px) {
    .top-bar {
        display: none;
    }

    .mobile-top-bar {
        display: block;
        background-color: #f8f9fa;
        padding: 10px;
        text-align: center;
        border-radius: 10px;
    }

    .mobile-top-bar a {
        color: #000;
        text-decoration: none;
        font-weight: 500;
        margin: 0 5px;
    }

    .custom-navbar {
        width: 100%;
        top: -10px;
        left: 0;
        transform: none;
        border-radius: 0;
        box-shadow: none;
        padding: 0px 1px;

    }
}

/* .contact-btn{

    background-color: #02092C;
    color: white;
    padding: 8px 16px;
    border-radius: 20px;
    text-decoration: none;
    font-weight: bold;
} */

/* Desktop View */
@media (min-width: 992px) {
    .mobile-top-bar {
        display: none;
    }

}

@media (min-width: 768px) {
    .cnt-btn {
        display: none;
    }
}

@media (max-width: 768px) {
    .contact-btnd {
        display: none;
    }
}
</style>




<!-- Top Bar (Desktop) -->
<div class="top-bar">
    <div class="right-top">
        <span>Follow us:</span>
        <a href="#">🔗</a>
        <a href="#">🎥</a>
        <a href="#">❌</a>
        <a href="#">📜 Principal Rights</a>
    </div>
</div>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg custom-navbar">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">
            <img src="./assets/images/dpdp-logo1.jpg" alt="Logo" width="100">
        </a>
        <a href="contact.php" class="contact-btn cnt-btn">Contact Us</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">

            <!-- Mobile View: Show Top Bar Inside Navbar -->
            <div class="mobile-top-bar">
                <span>Follow us:</span>
                <a href="https://www.linkedin.com/company/dpdpconsultants/" target="_blank"><i
                        class="bi bi-linkedin fs-4"></i></a>
                <a href="#"><i class="bi bi-youtube fs-4"></i></a>
                <a href="#"><i class="bi bi-twitter-x fs-4"></i></a>
                <a href="http://tech.portal-uat.dpdpconsultants.com/dpgr_form?_gl=1">📜 Principal Rights</a>
            </div>

            <ul class="navbar-nav mx-auto">
                <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="about-us.php" role="button"
                        data-bs-toggle="dropdown">About us</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="about-us.php#whoweare">Who we are</a></li>
                        <li><a class="dropdown-item" href="about-us.php#missionandvision">Mission and Vision</a></li>
                        <li><a class="dropdown-item" href="about-us.php#ourteam">Our Team</a></li>
                        <li><a class="dropdown-item" href="about-us.php#whatwedo">What we do</a></li>
                        <li><a class="dropdown-item" href="about-us.php#awardsandcertifications">Awards &
                                Certifications</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="what-is-dpdpa.php" role="button"
                        data-bs-toggle="dropdown">What’s DPDPA?</a>
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
                <!-- <li class="nav-item"><a class="nav-link" href="#">What’s DPDPA?</a></li> -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="compliance-tools.php" role="button"
                        >Compliance
                        tools</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="dpcm.php">Data Principal Consent Management</a></li>
                        <li><a class="dropdown-item" href="dpia.php">Data Principal Grievance Redressal</a></li>
                        <li><a class="dropdown-item" href="dpia.php">Data Protection Awareness Program</a></li>
                        <li><a class="dropdown-item" href="dpia.php">Data Protection Impact Assessment</a></li>
                        <li><a class="dropdown-item" href="dpia.php">Data Protection Third Party Assessment</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="services.php" role="button"
                        data-bs-toggle="dropdown">Services</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Gap assessment review</a></li>
                        <li><a class="dropdown-item" href="#">Data Protection Officer
                                as a Service</a></li>
                        <li><a class="dropdown-item" href="#">Contract Review &
                                Data Processing Agreements</a></li>
                        <li><a class="dropdown-item" href="#">Consulting, Advisory and
                                Audit</a></li>
                        <li><a class="dropdown-item" href="#">Training Programs for
                                DPDPA Compliance</a></li>
                    </ul>
                </li>
                <li class="nav-item"><a class="nav-link" href="#">Resources</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Carrier</a></li>
            </ul>
            <a href="#" class="contact-btn contact-btnd">Contact Us</a>
        </div>
    </div>
</nav>



<script>
    // Close the dropdown when clicking outside in mobile view
    document.addEventListener('click', function (e) {
        const dropdowns = document.querySelectorAll('.dropdown');
        dropdowns.forEach(dropdown => {
            const menu = dropdown.querySelector('.dropdown-menu');
            const toggle = dropdown.querySelector('.dropdown-toggle');
            
            // If the clicked element is outside the dropdown, close the menu
            if (!dropdown.contains(e.target) && !toggle.contains(e.target)) {
                menu.classList.remove('show');
            }
        });
    });

    // Add a click event to each dropdown item to close the menu after selection
    const dropdownItems = document.querySelectorAll('.dropdown-item');
    dropdownItems.forEach(item => {
        item.addEventListener('click', function () {
            const dropdownMenu = this.closest('.dropdown-menu');
            dropdownMenu.classList.remove('show');
        });
    });

    // Ensure the dropdown menu opens and closes correctly
    document.querySelectorAll('.dropdown-toggle').forEach(toggle => {
        toggle.addEventListener('click', function (e) {
            const menu = this.nextElementSibling; // The .dropdown-menu
            const isOpen = menu.classList.contains('show');
            // If the menu is already open, close it; otherwise, open it
            if (isOpen) {
                menu.classList.remove('show');
            } else {
                menu.classList.add('show');
            }
            // Prevent the dropdown from closing immediately when clicked
            e.stopPropagation();
        });
    });
</script>

