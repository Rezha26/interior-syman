<nav class="navbar-vertical navbar">
    <div class="nav-scroller">
        <!-- Brand logo -->
        <a class="navbar-brand" href="./index.html">
            <img src="{{ url('assets/images/brand/logo/logo.svg') }}" alt="" />
        </a>
        <!-- Navbar nav -->
        <ul class="navbar-nav flex-column" id="sideNavbar">
            <li class="nav-item">
                <a class="nav-link has-arrow  active " href="/dashboard">
                    <i data-feather="home" class="nav-icon icon-xs me-2"></i> Dashboard
                </a>

            </li>


            <!-- Nav item -->
            <li class="nav-item">
                <div class="navbar-heading">Layouts & Pages</div>
            </li>


            <!-- Nav item -->
            {{-- <li class="nav-item">
                <a class="nav-link has-arrow  collapsed " href="#!" data-bs-toggle="collapse"
                    data-bs-target="#navPages" aria-expanded="false" aria-controls="navPages">
                    <i data-feather="layers" class="nav-icon icon-xs me-2">
                    </i> Lab
                </a>

                <div id="navPages" class="collapse " data-bs-parent="#sideNavbar">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link " href="./pages/profile.html">
                                Profile
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link has-arrow   " href="./pages/settings.html">
                                Settings
                            </a>

                        </li>


                        <li class="nav-item">
                            <a class="nav-link " href="./pages/billing.html">
                                Billing
                            </a>
                        </li>




                        <li class="nav-item">
                            <a class="nav-link " href="./pages/pricing.html">
                                Pricing
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="./pages/404-error.html">
                                404 Error
                            </a>
                        </li>
                    </ul>
                </div>

            </li> --}}


            <!-- Nav item -->
            @if(Auth::user()->role == 'superadmin')
            <li class="nav-item">
                <a class="nav-link has-arrow  collapsed " href="#!" data-bs-toggle="collapse"
                    data-bs-target="#navAuthentication" aria-expanded="false" aria-controls="navAuthentication">
                    <i data-feather="lock" class="nav-icon icon-xs me-2">
                    </i> Users
                </a>
                <div id="navAuthentication" class="collapse " data-bs-parent="#sideNavbar">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="/admin"> Admin</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/mahasiswa"> Mahasiswa</a>
                        </li>

                    </ul>
                </div>
            </li>
            @endif
            {{-- @if(Auth::user()->role == 'admin') --}}

            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i data-feather="sidebar" class="nav-icon icon-xs me-2">
                    </i>
                    Barang
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i data-feather="sidebar" class="nav-icon icon-xs me-2">
                    </i>
                    Request Peminjaman
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i data-feather="sidebar" class="nav-icon icon-xs me-2">
                    </i>
                    Peminjaman
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="#">
                    <i data-feather="sidebar" class="nav-icon icon-xs me-2">
                    </i>
                    Pengembalian
                </a>
            </li>
            
            {{-- @endif --}}

            @if(Auth::user()->role == 'mahasiswa')

            <li class="nav-item">
                <a class="nav-link " href="#">
                    <i data-feather="sidebar" class="nav-icon icon-xs me-2">
                    </i>
                    Lab
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="#">
                    <i data-feather="sidebar" class="nav-icon icon-xs me-2">
                    </i>
                    My Cart
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="#">
                    <i data-feather="sidebar" class="nav-icon icon-xs me-2">
                    </i>
                    Peminjaman
                </a>
            </li>
            
            @endif



        </ul>

    </div>
</nav>