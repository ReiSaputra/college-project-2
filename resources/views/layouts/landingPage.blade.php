@include("include.landingPage.headLandingPage")

<body class="poppins-regular">
    @include("include.landingPage.navLandingPage")
    <header class="header container-fluid background-gradient">
        <div class="row row-header">
            <div class="col-6 px-custom-left d-flex justify-content-center align-items-start flex-column">
                <h1 class="poppins-bold text-white mb-2">Menjadi Terhubung dengan Pengetahuan</h1>
                <h6 class="poppins-light text-white mt-2">Temukan Potensi Anda di Sistem Manajemen
                    Pembelajaran Kami
                </h6>
                <a class="remove-default-link d-flex align-items-center justify-content-center text-white mt-3" href="">
                    <h6>Gabung di sini</h6>
                    <span class="ms-3 material-symbols-outlined d-inline-block">
                        arrow_forward
                    </span>
                </a>
            </div>
            <div class="col-6 d-flex justify-content-center align-items-end">
                <img class="img-fluid img-custom-size highlight-disable"
                    src="{{ asset('assets/undraw_online_test_re_kyfx.svg') }}" alt="main-image" draggable="false">
            </div>
        </div>
    </header>
    <main class="main mt-4">
        <section class="container-fluid about">
            <div class="row">
                <div class="col-12 border px-custom-left">
                    <h3 class="poppins-semibold text-navy" id="tentang">Tentang</h3>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-6 border px-custom-left">a</div>
                <div class="col-6 border">a</div>
            </div>
        </section>
        <section class="container-fluid role">
            <div class="row">
                <div class="col-12 border px-custom-left">
                    <h3 class="poppins-semibold text-navy" id="peran">Peran</h3>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-6 border px-custom-left">a</div>
                <div class="col-6 border">a</div>
            </div>
        </section>
        <section class="container-fluid school-code">
            <div class="row">
                <div class="col-12 border px-custom-left">
                    <h3 class="poppins-semibold text-navy" id="school-code">Kode Sekolah</h3>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-6 border px-custom-left">a</div>
                <div class="col-6 border">a</div>
            </div>
        </section>
    </main>
    <footer class="footer solid-navy">
        <div class="container-fluid">
            <div class="row">
                <div class="col-3  px-custom-left pt-5">
                    <img src="{{ asset('assets/badubii-white.png') }}" alt="Footer-Badubii-Logo" width="110">
                </div>
                <div class="col-3  px-custom-right pt-5 text-end">
                    <p class="poppins-medium text-white">TENTANG</p>
                    <hr>
                    <div class=" mt-4">
                        <p class="poppins-regular text-white  default-m-p"><a class="remove-default-link text-grey2"
                                href="">Tentang Badubii
                            </a>
                        </p>
                        <p class="poppins-regular text-white  default-m-p"><a class="remove-default-link text-grey2"
                                href="">Peran
                            </a>
                        </p>
                    </div>
                </div>
                <div class="col-3  px-custom-right pt-5 text-end">
                    <p class="poppins-medium text-white">SUMBER</p>
                    <hr>
                    <div class=" mt-4">
                        <p class="poppins-regular text-white  default-m-p"><a class="remove-default-link text-grey2"
                                href="">Dapatkan Kode Sekolah</a>
                        </p>
                        <p class="poppins-regular text-white  default-m-p"><a class="remove-default-link text-grey2"
                                href="">Jadi Mentor</a>
                        </p>
                        <p class="poppins-regular text-white  default-m-p"><a class="remove-default-link text-grey2"
                                href="">Jadi Siswa</a>
                        </p>
                    </div>
                </div>
                <div class="col-3  px-custom-right pt-5 text-end">
                    <p class="poppins-medium text-white">MEDIA SOSIAL</p>
                    <hr>
                    <div class=" mt-4">
                        <p class="poppins-regular text-white default-m-p">
                            <a class="remove-default-link text-grey2 d-inline-block" href="">
                                <span
                                    class="d-inline-block custom-w-h border d-flex justify-content-center align-items-center p-3 rounded-circle">
                                    <i class="fa-brands fa-x-twitter"></i>
                                </span>
                            </a>
                        </p>
                        <p class="poppins-regular text-white  default-m-p">
                            <a class="remove-default-link text-grey2 d-inline-block" href="">
                                <span
                                    class="d-inline-block custom-w-h border d-flex justify-content-center align-items-center p-3 rounded-circle">
                                    <i class="fa-brands fa-instagram fa-lg"></i>
                                </span>
                            </a>
                        </p>
                        <p class="poppins-regular text-white  default-m-p">
                            <a class="remove-default-link text-grey2 d-inline-block" href="">
                                <span
                                    class="d-inline-block custom-w-h border d-flex justify-content-center align-items-center p-3 rounded-circle">
                                    <i class="fa-brands fa-facebook-f"></i>
                                </span>
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="https://kit.fontawesome.com/fe386f267a.js" crossorigin="anonymous"></script>
</body>

</html>