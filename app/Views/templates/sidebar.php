<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Peduli <sup>diri</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Divider -->
    <hr class="sidebar-divider">

    <?php if (in_groups('admin')) : ?>
        <!-- Heading -->
        <div class="sidebar-heading">
            User Profile
        </div>

        <!-- Nav Item -->
        <li class="nav-item">
            <a class="nav-link" href="/user/profile">
                <i class="fas fa-fw fa-user"></i>
                <span>My Profile</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/user/profile">
                <i class="fas fa-fw fa-user"></i>
                <span>Edit Profile</span>
            </a>
        </li>
        <!-- Heading -->
        <div class="sidebar-heading">
            Management User
        </div>

        <!-- Nav Item -->
        <li class="nav-item">
            <a class="nav-link" href="/admin/datauser">
                <i class="fas fa-fw fa-user"></i>
                <span>Daftar User</span>
            </a>
        </li>
    <?php endif; ?>


    <?php if (in_groups('user')) : ?>
        <div class="sidebar-heading">
            User Profile
        </div>

        <!-- Nav Item -->
        <li class="nav-item">
            <a class="nav-link" href="/user/profile">
                <i class="fas fa-fw fa-user"></i>
                <span>My Profile</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/user/profile">
                <i class="fas fa-fw fa-user"></i>
                <span>Edit Profile</span>
            </a>
        </li>
        <!-- Nav Item - Charts -->
        <li class="nav-item">
            <a class="nav-link" href="/user/isidata">
                <i class="fas fa-fw fa-chart-area"></i>
                <span>Tambah Perjalanan</span></a>
        </li>

        <!-- Nav Item - Charts -->
        <li class="nav-item">
            <a class="nav-link" href="/user/catatan">
                <i class="fas fa-fw fa-chart-area"></i>
                <span>Riwayat Perjalanan</span></a>
        </li>

    <?php endif; ?>

    <!-- Heading -->
    <div class="sidebar-heading">
        Logout
    </div>

    <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link" href="/logout">
            <i class="fas fa-sign-out-alt"></i>
            <span>Logout</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>