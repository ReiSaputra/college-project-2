<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid mx-4 my-3">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('badubii.png') }}" alt="Logo" width="110" class="d-inline-block align-text-top">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav border ms-auto">
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('about') ? 'active' : '' }}" href="/about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('pricing') ? 'active' : '' }}" href="/pricing">Pricing</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('diss') ? 'active' : '' }}" href="/diss">Disabled</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link ms-5 border px-3" href="/login">Log in</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link ms-2 border px-3" href="/signup/role">Sign Up</a>
                </li>
            </ul>
        </div>
    </div>
</nav>