@include("include.landingPage.headLandingPage")

<body class="poppins-regular">
    @include("include.landingPage.navLandingPage")
    <div class="container-fluid">
        <div class="row">
            <div class="col-6 px-custom-left d-flex justify-content-center align-items-start flex-column">
                <h1 class="poppins-bold text-purple mb-2">Menjadi Terhubung dengan Pengetahuan</h1>
                <h6 class="poppins-light text-grey mt-2">Temukan Potensi Anda di Sistem Manajemen
                    Pembelajaran Kami</h6>
                <a class="join d-flex align-items-center justify-content-center py-4" href="">
                    <h6 class="">Gabung di sini</h6>
                    <span class="ms-3 material-symbols-outlined  d-inline-block">
                        arrow_forward
                    </span>
                </a>
            </div>
            <div class="col-6 d-flex justify-content-center align-items-end">
                <img class="img-fluid img-custom-size highlight-disable" src="{{ asset('assets/undraw_learning_re_32qv.svg') }}"
                    alt="main-image" draggable="false">
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>