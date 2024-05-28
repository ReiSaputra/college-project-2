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
                    <div class="title-dashboard border rounded p-4 mt-3">
                        <h2 class="poppins-semibold">Halo, {{ Auth::user()->name }}#{{ Auth::user()->id }}!</h2>
                        <h6 class="poppins-light">Siap untuk mengajar hari ini?</h6>
                    </div>
                    <h6 class="mt-3">Overview</h6>
                    <div class="row border mt-1 box-course overflow-auto">
                        {{-- For Each setiap judul coursenya --}}
                        @foreach ($data as $dataItem)                  
                        <div class="col-6 mt-2">
                            <div class="course-content border p-3">
                                <a href="{{ url('/mentor/' . Auth::user()->id . '/course/' . $dataItem->name) }}">{{ $dataItem->name }}</a>
                            </div>
                        </div>
                        @endforeach
                        {{-- <div class="col-6 mt-2">
                            <div class="course-content border p-3">
                                <a href="name-content">test</a>
                            </div>
                        </div>
                        <div class="col-6 mt-2">
                            <div class="course-content border p-3">
                                <a href="name-content">test</a>
                            </div>
                        </div> --}}
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