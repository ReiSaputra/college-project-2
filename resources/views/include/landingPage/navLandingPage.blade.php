<nav class="navbar navbar-expand-lg">
    <div class="container-fluid mx-4 my-3">
        <a class="navbar-brand" href="/">
            <img src="{{ asset('assets/badubii-red.png') }}" alt="Navigation-Badubii-Logo" width="110"
                class="d-inline-block align-text-top">
        </a>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="list-custom d-flex align-items-center ms-auto ">
                <li class="nav-item">
                    <a class="nav-link-custom  {{ request()->is('/') ? 'active' : '' }}" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link-custom  {{ request()->is('#about') ? 'active' : '' }}" href="#tentang">Tentang</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link-custom  {{ request()->is('#role') ? 'active' : '' }}" href="#peran">Peran</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link-custom  {{ request()->is('/#school-code') ? 'active' : '' }}" href="#kode-sekolah">Kode
                        Sekolah</a>
                </li>
                <div class="log-auth d-flex ms-5 ">
                    <div class="log-auth-item d-flex align-items-center solid-box-custom">
                        <a class="px-4 py-2 custom-link-hover" href="/login">Log in</a>
                    </div>
                    <div class="log-auth-item d-flex align-items-center border-box-custom ms-2">
                        <a class="px-4 py-2 custom-link-hover" href="/role">Sign Up</a>
                    </div>
                </div>
            </ul>
        </div>
    </div>
</nav>