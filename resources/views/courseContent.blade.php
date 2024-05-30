{{-- @dd($contents) --}}
@include("include.landingPage.headLandingPage")
    <link rel="stylesheet" href="{{ asset("css/dashboardMentor.css") }}">
    <title>Badubii</title>
</head>
<body class="poppins-regular">
    <div class="dashboard">
        <div class="container-fluid">
            <div class="row">
                @include("include.dashboard.mentor")
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
                    <div class="title-dashboard p-4 mt-3 bg-solid-orange-light position-relative d-flex overflow-hidden justify-content-between align-items-center">
                        <div class="title-text-group text-orange">
                            @foreach ($course as $courseName)
                            <h2 class="poppins-semibold">{{ $courseName->name }}</h2>
                            @endforeach
                        </div>
                        <img class="img-fluid-custom position-absolute" src="{{ asset("assets/DrawKit - Education Illustration Pack/SVG/5 SCENE.svg") }}" alt="">
                    </div>
                    <div class="d-flex mt-3 border justify-content-between align-items-center">
                        <h6 class="">Overview</h6>
                        <a class="text-decoration-none" href="{{ $courseTitle }}/add">Add Content</a>
                    </div>
                    <div class="row mt-1 p-2 box-course overflow-auto">
                        @foreach($contents as $content)
                        <a href="">{{ $content->name }}</a>
                        @endforeach
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