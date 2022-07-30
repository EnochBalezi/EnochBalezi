<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
    <!-- Navbar Brand-->
    <a class="navbar-brand ps-3" href="dashbordy.php">Dashboard Syst-Equip</a>
    <!-- Sidebar Toggle-->
    <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fa fa-bars"></i></button>
    <!-- Navbar Search-->
    <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
    </form>

    <!-- Navbar-->
    <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle " id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <?= ucfirst(@$_SESSION['name']) ?? "" ?>
                <i class="fa fa-user fa-lg"></i></a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <?php if (isset($_SESSION['token'])) { ?>
                    <li><a class="dropdown-item" href="index.php?controller=login&task=logout">Logout</a></li>
                <?php } else { ?>
                    <li><a class="dropdown-item" href="index.php?controller=login">Login</a></li><?php } ?>
            </ul>
        </li>
    </ul>
</nav>