<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion bg-success sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <a class="nav-link text-white" href="#">
                    <div class="sb-nav-link-icon"><i class="text-white fas fa-tachometer-alt"></i></div>
                    Dashboard
                </a>
                <div class="sb-sidenav-menu-heading text-white">Menu</div>
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="text-white sb-nav-link-icon"><i class="text-white fa-brands fa-accessible-icon"></i></div>
                    Pasien
                    <div class="sb-sidenav-collapse-arrow"><i class="text-white fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="#">List Pasien</a>
                        <a class="nav-link" href="#">Tambah Pasien</a>
                    </nav>
                </div>
                {{-- <div class="sb-sidenav-menu-heading">Addons</div>
                <a class="nav-link" href="charts.html">
                    <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                    Charts
                </a>
                <a class="nav-link" href="tables.html">
                    <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                    Tables
                </a> --}}
            </div>
        </div>
        <div class="sb-sidenav-footer bg-success">
            <div class="small">Logged in as:</div>
            Test User
        </div>
    </nav>
</div>