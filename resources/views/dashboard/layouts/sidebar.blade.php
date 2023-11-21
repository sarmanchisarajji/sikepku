<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="/dashboard" class="app-brand-link">
            <div class="row align-items-center">
                <div class="col-auto">
                    <span class="app-brand-logo demo">
                        <svg width="25" viewBox="0 0 25 42" version="1.1" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink">
                        </svg>
                    </span>
                </div>
            </div>
            <div class="col">
                <span>
                    <img src="{{ asset('question/assets/img/brand/logo-brand2.svg') }}" alt="brand">
                </span> <br>
                <span class="app-brand-text demo menu-text fw-bolder text-capitalize" style="font-size: 12px">
                    Sistem Informasi Evaluasi KepuasanKu
                </span>
                {{-- <p>(Sistem Informasi Evaluasi Kepuasan Ku)</p> --}}
            </div>
        </a>
        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>
    <div class="menu-inner-shadow"></div>
    <ul class="menu-inner py-1">
        <!-- Dashboard -->
        <li class="menu-item {{ request()->is('dashboard') ? 'active' : '' }}">
            <a href="/dashboard" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
            </a>
        </li>
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text" style="font-size: 12px">Forms Pertanyaan</span>
        </li>
        <!-- Forms -->
        <li class="menu-item {{ request()->is('dashboard/tampil*') ? 'active open' : '' }}">
            <a href="javascript:void(0);" class="menu-link menu-toggle" data-bs-toggle="collapse"
                data-bs-target="#formLayoutsSubMenu">
                <i class="menu-icon tf-icons bx bx-detail"></i>
                <div data-i18n="Form Layouts">Form Layouts</div>
            </a>
            <ul class="menu-sub collapse" id="formLayoutsSubMenu">
                <li class="menu-item {{ request()->is('dashboard/tampil') ? 'active' : '' }}">
                    <a href="/dashboard/tampil" class="menu-link">
                        <div data-i18n="Vertical Form">Data Pertanyaan</div>
                    </a>
                </li>
            </ul>
        </li>
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text" style="font-size: 12px">Management Akun</span>
        </li>
        <li
            class="menu-item {{ request()->is('dashboard/user*') || request()->is('dashboard/admin*') ? 'active open' : '' }}">
            <a href="javascript:void(0);" class="menu-link menu-toggle" data-bs-toggle="collapse"
                data-bs-target="#accountSettingsSubMenu">
                <i class="menu-icon tf-icons bx bx-dock-top"></i>
                <div data-i18n="Account Settings">Data Akun</div>
            </a>
            <ul class="menu-sub collapse" id="accountSettingsSubMenu">
                <li class="menu-item {{ request()->is('dashboard/user') ? 'active' : '' }}">
                    <a href="/dashboard/user" class="menu-link">
                        <div data-i18n="Account">Akun User</div>
                    </a>
                </li>
                <li class="menu-item {{ request()->is('dashboard/admin') ? 'active' : '' }}">
                    <a href="/dashboard/admin" class="menu-link">
                        <div data-i18n="Account">Akun Admin</div>
                    </a>
                </li>
            </ul>
        </li>
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text" style="font-size: 12px">Monitoring Kepuasan Layanan</span>
        </li>
        <li class="menu-item {{ request()->is('grafik-kepuasan*') ? 'active open' : '' }}">
            <a href="/grafik-kepuasan" class="menu-link {{ request()->is('grafik-kepuasan*') ? 'active' : '' }}">
                <i class="menu-icon tf-icons bx bx-pie-chart"></i>
                <div data-i18n="Authentications">Persentasi Kepuasan Layanan</div>
            </a>
        </li>
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text" style="font-size: 12px">Lainnya</span>
        </li>
        <li class="menu-item {{ request()->is('dashboard/tentang*') ? 'active open' : '' }}">
            <a href="/tentang" class="menu-link {{ request()->is('dashboard/tentang)' ? 'active' : '') }}">
                <i class="menu-icon tf-icons bx bx-info-circle"></i>
                <div data-i18n="Misc">Tentang</div>
            </a>
        </li>
    </ul>
</aside>
