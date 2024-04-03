<nav class="navbar navbar-expand-lg">
    <div class="container-fluid mx-4 my-3">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('badubii.png') }}" alt="Logo" width="110" class="d-inline-block align-text-top">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('about') ? 'active' : '' }}" href="/about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('mentor') ? 'active' : '' }}" href="/mentor">Mentor</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('student') ? 'active' : '' }}" href="/student">Student</a>
                </li>
                <a class="nav-link text-white button-solid ms-5 px-3" href="/login">Log in</a>
                <a class="nav-link text-purple button-outline ms-2 px-3" href="/signup/role">Sign Up</a>
            </ul>
        </div>
    </div>
</nav>