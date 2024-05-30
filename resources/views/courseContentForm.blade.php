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
                    <div class="form-box mt-3">
                        <h6 class="py-3">Tambah Konten</h6>
                        <form action="{{ route("content.add", ['id' => Auth::user()->id, 'courseId' => $courseId]) }}" class="" method="POST">
                            <div class="row">
                                @csrf
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input name="name" type="text" class="form-control" id="floatingCourseContent" placeholder="Nama Konten" required>
                                        <label for="floatingCourseContent">Nama Konten</label>
                                    </div>
                                </div>
                                <div class="col-6 mt-3">
                                    <div class="form-floating">
                                        <input disabled type="text" class="form-control" id="floatingCourseName" placeholder="Nama Kursus" value="{{$courseTitle }}">
                                        <label for="floatingCourseName">Nama Kursus</label>
                                    </div>
                                </div>
                                {{-- Hidden --}}
                                <input hidden name="mentorName" type="text" id="floatingCourseMentor" placeholder="Nama Course" value="{{ Auth::user()->name }}#{{ Auth::user()->id }}">
                                <div class="col-6 mt-3">
                                    <div class="form-floating">
                                        <input disabled type="text" class="form-control" id="floatingCourseMentor" placeholder="Nama Course" value="{{ Auth::user()->name }}#{{ Auth::user()->id }}">
                                        <label for="floatingCourseMentor">Mentor</label>
                                    </div>
                                </div>
                                <div class="col-12 mt-3">
                                    <div class="form-floating">
                                        <input type="file" name="file" class="form-control" placeholder="Tambah File" id="floatingFile"></input>
                                        <label for="floatingFile">Tambah File</label>
                                    </div>
                                </div>
                                <div class="col-12 mt-3">
                                    <div class="form-floating">
                                        <textarea name="description" class="form-control" placeholder="Deskripsi" id="floatingTextarea" style="height: 100px"></textarea>
                                        <label for="floatingTextarea">Deskripsi</label>
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