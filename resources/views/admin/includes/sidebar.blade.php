<ul class="navbar-nav bg-gradient-danger sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">

        <div class="sidebar-brand-text mx-3">Teman Donor</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{ Request::is('admin/beranda') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('beranda.index') }}">
            <i class="fas fa-chart-bar"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Nav Item - Tables -->
    <li class="nav-item {{ Request::is('admin/darah-masuk') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('bloodin.index') }}">
            <i class="fas fa-sign-in-alt"></i>
            <span>Darah masuk</span></a>
    </li>

    <!-- Nav Item - Tables -->
    <li class="nav-item {{ Request::is('admin/darah-keluar') ? 'active' : '' }} ">
        <a class="nav-link" href="{{ route('bloodout.index') }}">
            <i class="fas fa-sign-out-alt"></i>
            <span>Darah diambil</span></a>
    </li>

    <!-- Nav Item - Tables -->
    <li class="nav-item {{ Request::is('admin/artikel') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('artikel.index') }}">
            <i class="fas fa-calendar fa-2x"></i>
            <span>Artikel</span></a>
    </li>




    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Tables -->
    <li class="nav-item">

        <a class="nav-link" href="{ route('logout') }}"
            onclick="event.preventDefault();document.getElementById('logout-form').submit();">
            <i class="fas fa-sign-out-alt"></i>
            <span>Logout</span></a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    </li>



</ul>
