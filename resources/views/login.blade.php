@include("include.landingPage.headLandingPage")
<style>
</style>
<title>Role - Badubii</title>
</head>

<body class="poppins-regular">
    <header class=" container-fluid text-center">
        <div class="px-4 pt-5 pb-4">
            <a class="navbar-brand" href="/">
                <img src="{{ asset('assets/badubii-purple.png') }}" alt="Navigation-Badubii-Logo" width="110"
                    class="d-inline-block align-text-top">
            </a>
        </div>
    </header>
    <main class="login form-log d-flex justify-content-center align-items-center mt-5 flex-column">
        <h3 class="text-navy poppins-semibold">Selamat datang, kembali</h3>
        <form class="d-flex justify-content-center align-items-start flex-column mt-2" action="" method="POST"
            style="width: 25%">
            <div class="input-text" style="width: 100%">
                <label class="mt-2 poppins-light" for="username"><i class="fa-solid fa-user me-2"></i>Username</label>
                <input class="input mt-1 d-block p-1" type="text" name="username" id="username" style="width: 100%"
                    placeholder="Username">
            </div>
            <div class="input-text" style="width: 100%">
                <label class="mt-2 poppins-light" for="password"><i class="fa-solid fa-lock me-2"></i>Password</label>
                <input class="input mt-1 d-block p-1" type="password" name="password" id="password" style="width: 100%"
                    placeholder="Password">
            </div>
            <button class="button mt-4 py-3" type="submit" style="width: 100%;">Continue</button>
            <p style="width: 100%" class="text-center mt-3 poppins-regular form-p">Belum punya akun? <a
                    class="poppins-semibold" href="/role">Sign Up</a></p>
        </form>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="https://kit.fontawesome.com/fe386f267a.js" crossorigin="anonymous"></script>
</body>