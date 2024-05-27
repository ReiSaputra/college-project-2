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
                    <a class="create-course mt-3 border d-flex p-2 justify-content-evenly align-items-center" href="{{ url('/participant/' . $id . '/course/join') }}">
                        <i class="fa-solid fa-plus"></i>
                        <h6>Ikuti<br/>Kursus</h6>
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
                                    <p class="border poppins-semibold"><a href="">{{ Auth::user()->name }}#{{ Auth::user()->id }}</a></p>
                                    <p class="border poppins-light">{{ Auth::user()->role }}</p>
                                </div>
                                <img class="rounded-circle profile-pic" src="{{ Auth::user()->profile_pic }}" alt="">
                                <i class="fa-solid fa-chevron-down ms-2 fa-xs"></i>
                            </div>
                        </div>
                    </div>
                    <div class="form-box mt-3">
                        <h6 class="py-3">Ikuti Kursus</h6>
                        <form action="{{ route("course.controller", ['id' => Auth::user()->id]) }}" class="" method="POST">
                            <div class="row">
                                @csrf
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input name="name" type="text" class="form-control" id="floatingCourseName" placeholder="Nama Kursus" required>
                                        <label for="floatingCourseName">Nama Kursus</label>
                                    </div>
                                </div>
                                <div class="col-6 mt-3">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="floatingCourseToken" placeholder="Token">
                                        <label for="floatingCourseToken">Token</label>
                                    </div>
                                </div>
                                <div class="col-6 mt-3">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="floatingCourseMentor" placeholder="Token">
                                        <label for="floatingCourseMentor">Mentor</label>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <button type="submit" class="btn btn-primary btn-sm btn-custom py-3 mt-3">Buat</button>
                                </div>
                            </div>
                        </form>
                    </div>
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