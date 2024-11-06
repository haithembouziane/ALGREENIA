<header class="header glass-theme sp_between">
    <img src="../images/logo.PNG" class="logo"/>

    <nav class="navbar sp_between">
        <ul id="nav-links">
            <li><a href="#" class="links">Home</a></li>
            <li><a href="#" class="links">About us</a></li>
            <li><a href="#" class="links">Projects</a></li>
            <li class="dropdown">
                <a href="#" class="links" aria-expanded="false">Services</a>
                <ul class="dropdown-menu glass-theme">
                    <li><a href="#" class="links">Irrigation</a></li>
                    <li><a href="#" class="links">Tree Identification</a></li>
                    <li><a href="#" class="links">Tree Recommendation</a></li>
                    <li><a href="#" class="links">Impact Tracking</a></li>
                </ul>
            </li>
            <li><a href="#" class="links">Contact</a></li>
        </ul>
        <div id="bar" style="border-left: 2px solid white; width: 2px; height: 80%;"></div>
        <div id="btn-nav" class="sp_between">
            <button class="btn-login">Log in</button>
            <button class="btn-signup">Sign up</button>
        </div>
    </nav>
</header>

<span class="hamburger" onclick="toggleSidebar()">
    <i class="menu-icon fas fa-bars"></i>
    <i class="menu-icon fas fa-times"></i>
</span>

<!-- Sidebar -->
<div id="sidebar" class="sidebar glass-theme">
    <div id="sidebar-links-container">
        <ul id="sidebar-links">
            <li><a href="#" class="links"><i class="fas fa-home"></i> Home</a></li>
            <li><a href="#" class="links"><i class="fas fa-info-circle"></i> About us</a></li>
            <li><a href="#" class="links"><i class="fas fa-project-diagram"></i> Projects</a></li>
            <li>
                <a href="#" class="links"><i class="fas fa-concierge-bell"></i> Services</a>
                <ul class="service-submenu">
                    <li><a href="#" class="links"><i class="fa fa-tint"></i> Irrigation</a></li>
                    <li><a href="#" class="links"><i class="fa fa-search"></i> Tree Identification</a></li>
                    <li><a href="#" class="links"><i class="fa fa-tree"></i> Tree Recommendation</a></li>
                    <li><a href="#" class="links"><i class="fa fa-chart-line"></i> Impact Tracking</a></li>
                </ul>
            </li>
            <li><a href="#" class="links"><i class="fas fa-envelope"></i> Contact</a></li>
        </ul>
    </div>
    <div id="sidebar-btn-nav" class="sp_between">
        <button class="btn-login">Log in</button>
        <button class="btn-signup">Sign up</button>
    </div>
</div>

<script>
    function toggleSidebar() {
        document.getElementById("sidebar").classList.toggle("active");
        const hamburger = document.querySelector(".hamburger");
        hamburger.classList.toggle("active");
    }
</script>
