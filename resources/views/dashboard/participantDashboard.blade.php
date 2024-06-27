@include("include.landingPage.headLandingPage")
    <link rel="stylesheet" href="{{ asset("css/dashboardMentor.css") }}">
    <title>Badubii</title>
</head>
<body class="poppins-regular">
    <div class="dashboard">
        <div class="container-fluid">
            <div class="row">
                @include("include.dashboard.participant")
                <div class="col-10 border dashboard px-5 py-4">
                    <div class="tab">
                        <div class="profile-box d-flex justify-content-end">
                            <div class="profile border d-flex text-end align-items-center">
                                <div class="name me-2">
                                    <p class="border poppins-semibold"><a href="{{ route ('profile') }}">{{ Auth::user()->name }}#{{ Auth::user()->id }}</a></p>
                                    <p class="border poppins-light">{{ Auth::user()->role }}</p>
                                </div>
                                <img class="rounded-circle profile-pic" src="{{ Auth::user()->profile_pic }}" alt="">
                                <i class="fa-solid fa-chevron-down ms-2 fa-xs"></i>
                            </div>
                        </div>
                    </div>
                    <div class="title-dashboard p-4 mt-3 bg-solid-orange-light position-relative d-flex overflow-hidden justify-content-between align-items-center">
                        <div class="title-text-group text-orange">
                            <h2 class="poppins-semibold">Halo, {{ Auth::user()->name }}#{{ Auth::user()->id }}!</h2>
                            <h6 class="poppins-light">Siap untuk belajar hari ini?</h6>
                        </div>
                        <img class="img-fluid-custom position-absolute" src="{{ asset("assets/DrawKit - Education Illustration Pack/SVG/5 SCENE.svg") }}" alt="">
                    </div>
                    <h6 class="mt-3">Overview</h6>
                    <div class="row mt-1 p-2 box-course overflow-auto">
                        {{-- For Each setiap judul coursenya --}}
                        @foreach ($data as $dataItem)                  
                        <div class="col-6 mt-2 mb-2">
                            @if ($dataItem->course_type == "Matematika")                        
                            <div class="course-content p-3 bg-solid-blue">
                                <a class="text-white poppins-semibold text-decoration-underline" href="{{ url('/participant/' . Auth::user()->id . '/course/' . $dataItem->id) }}">{{ $dataItem->name }}</a>
                                <p class="text-white">{{ $dataItem->course_type }}</p>
                            </div>
                            @elseif ($dataItem->course_type == "Bahasa Inggris")
                            <div class="course-content p-3 bg-solid-yellow">
                                <a class="text-white poppins-semibold text-decoration-underline" href="{{ url('/participant/' . Auth::user()->id . '/course/' . $dataItem->id) }}">{{ $dataItem->name }}</a>
                                <p class="text-white">{{ $dataItem->course_type }}</p>
                            </div>
                            @elseif ($dataItem->course_type == "Sains")
                            <div class="course-content p-3 bg-solid-green">
                                <a class="text-white poppins-semibold text-decoration-underline" href="{{ url('/participant/' . Auth::user()->id . '/course/' . $dataItem->id) }}">{{ $dataItem->name }}</a>
                                <p class="text-white">{{ $dataItem->course_type }}</p>
                            </div>
                            @else
                            <div class="course-content p-3 bg-solid-orange">
                                <a class="text-white poppins-semibold text-decoration-underline" href="{{ url('/participant/' . Auth::user()->id . '/course/' . $dataItem->id) }}">{{ $dataItem->name }}</a>
                                <p class="text-white">{{ $dataItem->course_type }}</p>
                            </div>
                            @endif
                        </div>
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