<div id="layoutSidenav_nav">
<nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
    <div class="sb-sidenav-menu">
        <div class="nav">
            <div class="sb-sidenav-menu-heading">Core</div>
            <a class="nav-link" href="dashboard.php">
                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                Dashboard
            </a>
            <div class="sb-sidenav-menu-heading">Interface</div>
            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                <div class="sb-nav-link-icon"><i class="fas fa-bullhorn"></i></div>
                Announcements
                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav">
                    <a class="nav-link" href="home.php">View</a>
                    <a class="nav-link" href="create_ann.php">Create</a>
                </nav>
            </div>
            </a>
            <a class="nav-link" href="https://mail.hostinger.com/?clearSession=true&_user=admin@him-batangas-scholarship.com">
                <div class="sb-nav-link-icon"><i class="fas fa-bell"></i></div>
                Messages
</a>
<a class="nav-link" href="includes/logout_incl.php">
                <div class="sb-nav-link-icon"><i class="fas fa-sign-out-alt"></i></div>
                Log Out
</a>
</div>
</div>
    <div class="sb-sidenav-footer">
        <div class="small">Logged in as:</div>
        <?php 
        $admin = $_SESSION['admin'];
        echo $admin; 
       ?>
    </div>
</nav>
</div>