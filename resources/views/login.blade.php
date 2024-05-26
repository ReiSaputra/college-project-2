@include("include.landingPage.headLandingPage")
<style>
</style>
<title>Role - Badubii</title>
</head>

<body class="poppins-regular">
    <header class=" container-fluid text-center">
        <div class="px-4 pt-5 pb-4">
            <a class="navbar-brand" href="/">
                <img src="{{ asset("assets/badubii-red.png") }}" alt="Navigation-Badubii-Logo" width="110" class="d-inline-block align-text-top">
            </a>
        </div>
    </header>
    <main class="login form-log d-flex justify-content-center align-items-center mt-5 flex-column">
        <section class="container-fluid school-code-section">
            <div class="row">
                <div class="col-12 px-custom-left px-custom-right text-center">
                </div>
                <div
                    class="col-12 py-3 px-custom-left px-custom-right text-center school-code-box-form d-flex justify-content-center align-items-center">
                    <form class="school-code-form" action="{{ route('login.post') }}" method="post">
                        @csrf
                        <div class="email d-flex justify-content-center align-items-center">
                            <div class="label-box p-2">
                                <label for="school-code-label"><i class="fa-solid fa-school fa-lg"></i></label>
                            </div>
                            <input type="text" name="email" id="school-code-label" placeholder="Email">
                        </div>
                        <div class="email mt-2 d-flex justify-content-center align-items-center">
                            <div class="label-box p-2">
                                <label for="school-code-label"><i class="fa-solid fa-school fa-lg"></i></label>
                            </div>
                            <input type="text" name="password" id="school-code-label" placeholder="Password">
                        </div>
                        <button class="mt-3 py-3" type="submit">Masuk</button>
                    </form>
                </div>
            </div>
        </section>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="https://kit.fontawesome.com/fe386f267a.js" crossorigin="anonymous"></script>
</body>