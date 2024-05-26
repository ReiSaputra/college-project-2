@include("include.landingPage.headLandingPage")
<style>
</style>
<title>Sign Up Mentor - Badubii</title>
</head>

<body class="poppins-regular">
    <header class=" container-fluid text-center">
        <div class="px-4 pt-5 pb-4">
            <a class="navbar-brand" href="/">
                <img src="{{ asset('assets/badubii-red.png') }}" alt="Navigation-Badubii-Logo" width="110"
                    class="d-inline-block align-text-top">
            </a>
        </div>
    </header>
    <main class="login form-log d-flex justify-content-center align-items-center mt-5 flex-column">
        <h3 class="text-navy poppins-semibold pt-5">Sign Up</h3>
        @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li> {{ $error}} </li>    
                @endforeach
            </ul>
        </div>
        @endif
        <form class="d-flex justify-content-center align-items-start flex-column mt-2" action="{{ route('student.register.post') }}" method="POST" style="width: 25%">
            @csrf
            <div class="input-text" style="width: 100%">
                <label class="mt-2 poppins-light" for="name"><i class="fa-solid fa-user me-2"></i>Name</label>
                <input class="input mt-1 d-block p-1" type="text" name="name" id="name" style="width: 100%" placeholder="Name" value="{{ old('name') }}" required>
            </div>532.
            <div class="input-text" style="width: 100%">
                <label class="mt-2 poppins-light" for="email"><i class="fa-solid fa-envelope me-2"></i>Email</label>
                <input class="input mt-1 d-block p-1" type="email" name="email" id="email" style="width: 100%" placeholder="Email" value="{{ old('email') }}" required>
            </div>
            <div class="input-text" style="width: 100%">
                <label class="mt-2 poppins-light" for="password"><i class="fa-solid fa-lock me-2"></i>Password</label>
                <input class="input mt-1 d-block p-1" type="password" name="password" id="password" style="width: 100%" placeholder="Password" required>
            </div>
            <div class="input-text" style="width: 100%">
                <label class="mt-2 poppins-light" for="password_confirmation"><i class="fa-solid fa-lock me-2"></i>Confirm Password</label>
                <input class="input mt-1 d-block p-1" type="password" name="password_confirmation" id="password_confirmation" style="width: 100%" placeholder="Confirm Password" required>
            </div>
            <div class="input-text" style="width: 100%">
                <label class="mt-3 poppins-light" for="role"><i class="fa-solid fa-user me-2"></i>Role</label>
                <select class="mt-1 d-block px-2 py-1" name="role" id="role">
                    <option value="1">Mentor</option>
                </select>
            </div>
            <button class="button mt-4 py-3" type="submit" style="width: 100%;">Continue</button>
            <p style="width: 100%" class="text-center mt-3 poppins-regular form-p">Sudah punya akun? <a class="poppins-semibold" href="/login">Log In</a></p>
        </form>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="https://kit.fontawesome.com/fe386f267a.js" crossorigin="anonymous"></script>
</body>