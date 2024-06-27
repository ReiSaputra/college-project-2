@include("include.landingPage.headLandingPage")
<link rel="stylesheet" href="{{ asset('css/dashboardMentor.css') }}">
<title>Profile</title>
</head>
<body class="poppins-regular">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                <div class="card">
                    <div class="card-header">{{ __('Edit Profile') }}</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('profile.update') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group mb-3">
                                <label for="name">{{ __('Name') }}</label>
                                <input id="name" type="text" class="form-control" name="name" value="{{ $user->name }}" required>
                            </div>

                            <div class="form-group mb-3">
                                <label for="email">{{ __('Email Address') }}</label>
                                <input id="email" type="email" class="form-control" name="email" value="{{ $user->email }}" required>
                            </div>

                            <div class="form-group mb-3">
                                <label for="profile_pic">{{ __('Profile Picture') }}</label>
                                <input id="profile_pic" type="file" class="form-control" name="profile_pic">
                                @if($user->profile_pic)
                                    <img src="{{ asset($user->profile_pic) }}" alt="Profile Picture" class="mt-2" width="150">
                                @endif
                            </div>

                            <div class="form-group mb-3">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Update Profile') }}
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/fe386f267a.js" crossorigin="anonymous"></script>
</body>
</html>
