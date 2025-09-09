


<style>
/* Floating Cookie Notice */
#cookieBanner {
    position: fixed;
    left: 20px;
    bottom: 100px;
    width: 300px;
    background: #222;
    color: white;
    padding: 15px;
    border-radius: 8px;
    display: none;
    z-index: 9999;
    box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.3);
}

/* Floating Cookie Button */
#cookieButton {
    position: fixed;
    left: 20px;
    bottom: 20px;
    background: #ffcc00;
    color: black;
    border-radius: 50%;
    width: 50px;
    height: 50px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 24px;
    cursor: pointer;
    z-index: 10000;
    box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.3);
}

/* Left Sidebar */
#cookieSidebar {
    position: fixed;
    left: -456px;
    top: 0;
    width: 456px;
    height: 100%;
    background: #3294CD;
    color: white;
    box-shadow: 2px 0 10px rgba(0, 0, 0, 0.2);
    padding: 20px;
    transition: left 0.3s ease-in-out;
    z-index: 9999;
    overflow-y: scroll;
}

#cookieSidebar.show {
    left: 0;
}

/* Toggle Switch */
.toggle-switch {
    width: 40px;
    height: 20px;
    background: #036;
    border-radius: 10px;
    position: relative;
    cursor: pointer;
}

.toggle-switch::before {
    content: "";
    width: 18px;
    height: 18px;
    background: white;
    position: absolute;
    top: 1px;
    left: 1px;
    border-radius: 50%;
    transition: 0.3s;
}

.toggle-active {
    background: #3c3 !important;
}

.toggle-active::before {
    left: 21px !important;
}

.disabled {
    pointer-events: none;
    opacity: 0.5;
}

#cookieSidebar a {
    color: white;
}



@media (max-width: 767px) {
    #cookieSidebar {
        width: 300px;
        left: -300px;
    }

}
</style>


<!-- Floating Cookie Notice -->
<div id="cookieBanner">
    <p class="mb-2">We use cookies to enhance your experience. Manage your preferences.</p>
    <button class="btn btn-light btn-sm" id="manageCookies">Manage</button>
    <button class="btn btn-success btn-sm" id="acceptAll">Accept All</button>
</div>

<!-- Floating Cookie Button -->
<div id="cookieButton">🍪</div>

<!-- Left Sidebar Cookie Settings -->
<div id="cookieSidebar">

    <div class="">
        <h4>Manage Cookie Preferences
            <button class="btn btn-sm btn-danger mb-3" id="closeSidebar" style="float: right;">x</button>
        </h4>
    </div>

    <div>
        <p>We use essential cookies to ensure this site functions properly. Additionally, we'd like to set some
            Analytics cookies to help us understand how you interact with our site.</p>
    </div>
    <div>
        <p>For more details, please visit our <a href="privacyium-cookies.php" target="_blank">Cookies page</a></p>
    </div>

    <hr>

    <div class="mt-2">
        <div>
            <h5>Essential Cookies</h5>
        </div>
        <div>
            <p>Purpose: These cookies are necessary for the website to function and cannot be switched off. They help
                with navigation, security, and user preferences.</p>
        </div>
    </div>

    <hr>

    <div class="mt-2">
        <div>
            <h5>Analytics Cookies</h5>
        </div>
        <div>
            <p>Purpose: These cookies help us understand how visitors interact with our website by collecting anonymous
                data. They allow us to improve site functionality and user experience.</p>
        </div>
        <div class="toggle-switch" id="analytics"></div>
    </div>

    <hr>

    <div class="mt-2">
        <div>
            <h5>Functional Cookies</h5>
        </div>
        <div>
            <p>Purpose: These cookies allow the website to remember choices you make and provide enhanced functionality,
                such as saving user preferences or chat support.</p>
        </div>
        <div class="toggle-switch" id="functional"></div>
    </div>

    <hr>

    <div class="mt-2">
        <div>
            <h5>Advertising Cookies</h5>
        </div>
        <div>
            <p>Purpose: These cookies are used to deliver ads that are relevant to users based on their browsing history
                and interactions.</p>
        </div>
        <div class="toggle-switch" id="advertising"></div>
    </div>

    <hr>

    <div class="d-flex justify-content-end mt-3">
        <button class="btn btn-primary" id="saveCookies">Save Preferences</button>
    </div>

</div>

<script>
// Get Cookie
function getCookie(name) {
    let match = document.cookie.match(new RegExp('(^| )' + name + '=([^;]+)'));
    return match ? JSON.parse(match[2]) : null;
}

// Set Cookie
function setCookie(name, value, days) {
    let expires = new Date();
    expires.setTime(expires.getTime() + (days * 24 * 60 * 60 * 1000));
    document.cookie = name + "=" + JSON.stringify(value) + ";expires=" + expires.toUTCString() + ";path=/";
}

// Load Saved Preferences
$(document).ready(function() {
    let savedCookies = getCookie("dpdpCookies");

    if (!savedCookies) {
        $("#cookieBanner").fadeIn();
    } else {
        $(".toggle-switch").each(function() {
            let id = $(this).attr("id");
            if (savedCookies[id]) {
                $(this).addClass("toggle-active");
            }
        });
    }

    // Toggle Button Click
    $(".toggle-switch").click(function() {
        if (!$(this).hasClass("disabled")) {
            $(this).toggleClass("toggle-active");
        }
    });

    // Open Sidebar on Button Click
    $("#manageCookies, #cookieButton").click(function() {
        $("#cookieSidebar").addClass("show");
    });

    // Close Sidebar
    $("#closeSidebar").click(function() {
        $("#cookieSidebar").removeClass("show");
    });

    // Accept All Cookies
    $("#acceptAll").click(function() {
        let allCookies = {
            analytics: true,
            functional: true,
            advertising: true
        };
        setCookie("dpdpCookies", allCookies, 365);
        $("#cookieBanner").fadeOut();
    });

    // Save Preferences
    $("#saveCookies").click(function() {
        let preferences = {};
        $(".toggle-switch").each(function() {
            let id = $(this).attr("id");
            preferences[id] = $(this).hasClass("toggle-active");
        });

        setCookie("dpdpCookies", preferences, 365);
        $("#cookieBanner").fadeOut();
        $("#cookieSidebar").removeClass("show");
    });
});
</script>