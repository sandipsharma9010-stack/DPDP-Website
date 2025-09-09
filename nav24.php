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

/* Mobile Collapsible Menu */
@media (max-width: 992px) {
    .mobile-collapsible {
        background: #f7f9fc;
        border-radius: 8px;
        margin-bottom: 8px;
        padding: 12px 16px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        font-weight: bold;
        cursor: pointer;
    }

    .mobile-collapsible.active {
        background: white;
        border: 1px solid #e0e0e0;
    }

    .mobile-submenu {
        display: none;
        padding: 0 16px 12px 16px;
        font-weight: normal;
        background: #fff;
    }

    .mobile-submenu a {
        display: block;
        padding: 6px 0;
        text-decoration: none;
        color: black;
    }

    .plus-icon {
        font-weight: bold;
        font-size: 18px;
        color: #1a56db;
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
                <a href="#"><i class="bi bi-linkedin fs-4"></i></a>
                <a href="#"><i class="bi bi-youtube fs-4"></i></a>
                <a href="#"><i class="bi bi-twitter-x fs-4"></i></a>
                <a href="#">📜 Principal Rights</a>
            </div>

            <!-- Mobile Collapsible Menu -->
            <div class="d-lg-none w-100 mt-2">
                <div class="mobile-collapsible">
                    Why Leegality
                    <span class="plus-icon">+</span>
                </div>
                <div class="mobile-submenu">
                    <a href="#">Overview</a>
                    <a href="#">Benefits</a>
                    <a href="#">Case Studies</a>
                </div>

                <div class="mobile-collapsible">
                    Solutions
                    <span class="plus-icon">+</span>
                </div>
                <div class="mobile-submenu">
                    <a href="#">eSign</a>
                    <a href="#">Workflow Automation</a>
                    <a href="#">Integrations</a>
                </div>
            </div>

            <!-- Desktop Menu -->
            <ul class="navbar-nav mx-auto d-none d-lg-flex">
                <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">About us</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Who we are</a></li>
                        <li><a class="dropdown-item" href="#">Mission and Vision</a></li>
                        <li><a class="dropdown-item" href="#">Our Team</a></li>
                        <li><a class="dropdown-item" href="#">What we do</a></li>
                    </ul>
                </li>
                <li class="nav-item"><a class="nav-link" href="#">Services</a></li>
            </ul>

            <a href="#" class="contact-btn contact-btnd">Contact Us</a>
        </div>
    </div>
</nav>

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
document.querySelectorAll('.mobile-collapsible').forEach((item) => {
    item.addEventListener('click', () => {
        const submenu = item.nextElementSibling;
        const icon = item.querySelector('.plus-icon');
        const isOpen = submenu.style.display === 'block';

        // Close all submenus
        document.querySelectorAll('.mobile-submenu').forEach(el => el.style.display = 'none');
        document.querySelectorAll('.mobile-collapsible').forEach(el => {
            el.classList.remove('active');
            el.querySelector('.plus-icon').textContent = '+';
        });

        if (!isOpen) {
            submenu.style.display = 'block';
            item.classList.add('active');
            icon.textContent = '-';
        }
    });
});
</script>