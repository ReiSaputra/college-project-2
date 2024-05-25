    @include("include.landingPage.headLandingPage")
    <link rel="stylesheet" href="{{ asset("css/dashboardMentor.css") }}">
    <title>Badubii</title>
</head>
<body class="poppins-regular">
    <div class="dashboard">
        <div class="container-fluid">
            <div class="row">
                <div class="col-2 border menu px-4 py-4">
                    <div class="logo d-flex align-items-center">
                        <img class="border" src="{{ asset("assets/badubii-red.png") }}" alt="logo" width="110">
                    </div>
                    <a class="create-course mt-3 border d-flex p-2 justify-content-evenly align-items-center" href="{{ url('/mentor/' . "al" . '/course/create') }}">
                        <i class="fa-solid fa-plus"></i>
                        <h6>Buat<br/>Kursus</h6>
                    </a>
                    <div class="feature-link border mt-3">
                        <a href="dashboard">Dasboard</a>
                    </div>
                </div>
                <div class="col-10 border dashboard px-5 py-4">
                    <div class="tab">
                        <div class="profile-box d-flex justify-content-end">
                            <div class="profile border d-flex text-end align-items-center">
                                <div class="name me-2">
                                    <p class="border poppins-semibold">Nama</p>
                                    <p class="border poppins-light">Status Role</p>
                                </div>
                                <img class="rounded-circle profile-pic" src="" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="title-dashboard border rounded p-4 mt-3">
                        <h2 class="poppins-semibold">Halo, Nama!</h2>
                        <h6 class="poppins-light">Siap untuk mengajar hari ini?</h6>
                    </div>
                    <h6 class="mt-3">Overview</h6>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="https://kit.fontawesome.com/fe386f267a.js" crossorigin="anonymous"></script>
</body>
</html>