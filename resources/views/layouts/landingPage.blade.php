@include("include.landingPage.headLandingPage")
<title>Badubii</title>
</head>

<body class="poppins-regular">
    @include("include.landingPage.navLandingPage")
    <header class="header container-fluid">
        <div class="row row-header">
            <div class="col-6 px-custom-left d-flex justify-content-center align-items-start flex-column">
                <h1 class="poppins-bold mb-2 text-red">Menjadi Terhubung dengan Pengetahuan</h1>
                <h6 class="poppins-light mt-2">Temukan Potensi Anda di Sistem Manajemen
                    Pembelajaran Kami
                </h6>
                <a class="poppins-semibold box-get-started remove-default-link d-flex align-items-center justify-content-center mt-3 px-4 py-3"
                    href="/role">Gabung di sini
                    <i class="border ms-3 fa-solid fa-arrow-right-long fa-xl"></i>
                </a>
            </div>
            <div class="col-6 d-flex justify-content-center align-items-end">
                <img class="img-fluid img-custom-size highlight-disable" src="{{ asset("assets/DrawKit - Education Illustration Pack/SVG/7 SCENE.svg") }}" alt="main-image" draggable="false">
            </div>
        </div>
    </header>
    <main class="main">
        <section class="container-fluid next-section">
            <div class="row">
                <div class="col-12 px-custom-left px-custom-right">
                    <div class="drop-bottom d-flex justify-content-center align-items-center">
                        <i class="fa-solid fa-angles-down fa-xl"></i>
                    </div>
                </div>
            </div>
        </section>
        <section class="container-fluid about-section py-5">
            <div class="row">
                <div
                    class="col-6 px-custom-left px-custom-right py-5 d-flex justify-content-center align-items-start flex-column col-custom-left">
                    <h2 class="poppins-semibold text-white py-4" id="tentang">Tentang</h2>
                    <p class="text-white">Badubii adalah platform inovatif yang didedikasikan untuk memajukan
                        pembelajaran online. Dengan fokus pada keunggulan dalam manajemen pembelajaran, kami hadir untuk
                        membantu Anda menciptakan pengalaman belajar yang luar biasa.</p>
                </div>
                <div class="col-6 px-custom-right d-flex justify-content-end align-items-center">
                    <img class="img-fluid" src="{{ asset("assets/DrawKit - Education Illustration Pack/SVG/4 SCENE.svg") }}" alt="image-4">
                </div>
            </div>
        </section>
        <section class="container-fluid feature-section py-5">
            <div class="card-box d-flex justify-content-evenly flex-wrap">
                <div class="card-item d-flex justify-content-start p-4 align-items-center flex-column solid-orange">
                    <div class="card-item-header d-flex justify-content-center align-items-center ">
                        <i class="fa-solid fa-xl fa-screwdriver-wrench text-white"></i>
                    </div>
                    <div class="card-item-body mt-4 pt-4">
                        <h4 class="card-item-title text-center text-white poppins-semibold">Kustomisasi LMS secara
                            fleksibel</h4>
                        <p class="mt-4 text-center text-white">Jelajahi beragam opsi penyesuaian untuk menciptakan
                            pengalaman pembelajaran yang sesuai dengan kebutuhan, preferensi, dan tujuan Anda dengan
                            optimal.</p>
                    </div>
                </div>
                <div class="card-item d-flex justify-content-start p-4 align-items-center flex-column solid-blue">
                    <div class="card-item-header d-flex justify-content-center align-items-center ">
                        <i class="fa-brands fa-2xl fa-connectdevelop text-white"></i>
                    </div>
                    <div class="card-item-body mt-4 pt-4">
                        <h4 class="card-item-title text-center poppins-semibold text-white">Berkolaborasi dengan Mentor
                            dan Siswa Anda</h4>
                        <p class="mt-4 text-center text-white">Jadilah bagian dari kolaborasi untuk meraih kesuksesan
                            belajar secara dinamis.</p>
                    </div>
                </div>
                <div class="card-item d-flex justify-content-start p-4 align-items-center flex-column solid-yellow">
                    <div class="card-item-header d-flex justify-content-center align-items-center ">
                        <i class="fa-solid fa-xl fa-house-signal"></i>
                    </div>
                    <div class="card-item-body mt-4 pt-4">
                        <h4 class="card-item-title text-center poppins-semibold">Akses dimanapun, kapanpun Anda mau</h4>
                        <p class="mt-4 text-center">Tingkatkan potensi Anda dengan kemampuan belajar kapan saja, di mana
                            saja. Mulai perjalanan Anda menuju kesuksesan bersama Badubii.</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="container-fluid role-section py-5">
            <div class="row">
                <div class="col-6 px-custom-left d-flex justify-content-start align-items-center">
                    <img class="img-fluid" src="{{ asset("assets/DrawKit - Education Illustration Pack/SVG/9 SCENE.svg") }}" alt="image-5">
                </div>
                <div
                    class="col-6 px-custom-right px-custom-left py-5 d-flex justify-content-center align-items-start flex-column col-custom-right">
                    <h2 class="poppins-semibold text-white py-4" id="peran">Peran</h2>
                    <p class="text-white">Peran kami adalah menyediakan solusi yang mudah digunakan namun kuat
                        untuk membantu pendidik dan peserta didik dalam perjalanan pembelajaran online mereka. Kami
                        percaya bahwa setiap orang memiliki potensi untuk belajar, dan Badubii hadir untuk membuka pintu
                        kesempatan itu.</p>
                </div>
            </div>
        </section>
        <section class="container-fluid school-code-section py-5 my-5">
            <div class="row">
                <div class="col-12 border px-custom-left text-center school-code-row d-flex justify-content-center align-items-center position-relative">
                    {{-- <img class="arrow arrow-1 img-fluid position-absolute" src="{{ asset("assets/arrow/arrow-with-scribble-svgrepo-com.svg") }}" alt=""> --}}
                    <img class="arrow arrow-2 img-fluid position-absolute" src="{{ asset("assets/arrow/right-drawn-arrow.svg") }}" alt="">
                    <img class="arrow arrow-3 img-fluid position-absolute" src="{{ asset("assets/arrow/up-arrow.svg") }}" alt="">
                    <h2 class="poppins-semibold text-red" id="kode-sekolah">Kode Sekolah</h2>
                </div>
                <div class="col-12 border px-custom-left px-custom-right text-center">
                    <p>Cari kode sekolah anda melalui form di bawah ini.</p>
                </div>
                <div class="col-12 py-3 border px-custom-left px-custom-right text-center school-code-box-form d-flex justify-content-center align-items-center">
                    <form class="school-code-form" action="{{--  --}}" method="post">
                        @csrf
                        <div class="email d-flex justify-content-center align-items-center">
                            <div class="label-box p-2">
                                <label for="school-code-label"><i class="fa-solid fa-school fa-lg"></i></label>
                            </div>
                            <input type="text" id="school-code-label" placeholder="Nama Sekolah">
                        </div>
                        <button class="mt-3 py-3" type="submit">Cari</button>
                    </form>
                </div>
                <p class="text-center">Tidak ada? Kontak <a href="/school-code/help">Administrator</a></p>
            </div>
        </section>
    </main>
    <footer class="footer solid-navy">
        <div class="container-fluid">
            <div class="row">
                <div class="col-3 px-custom-left pt-5">
                    <img src="{{ asset('assets/badubii-white.png') }}" alt="Footer-Badubii-Logo" width="110">
                </div>
                <div class="col-3  px-custom-right pt-5 text-start">
                    <p class="poppins-medium ">TENTANG</p>
                    <div class=" mt-4">
                        <p class="poppins-regular default-m-p"><a class="remove-default-link text-grey2" href="">Tentang
                                Badubii
                            </a>
                        </p>
                        <p class="poppins-regular default-m-p"><a class="remove-default-link text-grey2" href="">Peran
                            </a>
                        </p>
                    </div>
                </div>
                <div class="col-3 px-custom-right pt-5 text-start">
                    <p class="poppins-medium ">SUMBER</p>
                    <div class=" mt-4">
                        <p class="poppins-regular default-m-p"><a class="remove-default-link text-grey2"
                                href="">Dapatkan Kode Sekolah</a>
                        </p>
                        <p class="poppins-regular default-m-p"><a class="remove-default-link text-grey2" href="">Jadi
                                Mentor</a>
                        </p>
                        <p class="poppins-regular default-m-p"><a class="remove-default-link text-grey2" href="">Jadi
                                Siswa</a>
                        </p>
                    </div>
                </div>
                {{-- <div class="col-3  px-custom-right pt-5 text-start">
                    <p class="poppins-medium ">MEDIA SOSIAL</p>
                    <div class=" mt-4">
                        <p class="poppins-regular default-m-p">
                            <a class="remove-default-link text-grey2 d-inline-block" href="">
                                <span
                                    class="d-inline-block custom-w-h border d-flex justify-content-center align-items-center p-3 rounded-circle">
                                    <i class="fa-brands fa-x-twitter"></i>
                                </span>
                            </a>
                        </p>
                        <p class="poppins-regular default-m-p">
                            <a class="remove-default-link text-grey2 d-inline-block" href="">
                                <span
                                    class="d-inline-block custom-w-h border d-flex justify-content-center align-items-center p-3 rounded-circle">
                                    <i class="fa-brands fa-instagram fa-lg"></i>
                                </span>
                            </a>
                        </p>
                        <p class="poppins-regular default-m-p">
                            <a class="remove-default-link text-grey2 d-inline-block" href="">
                                <span
                                    class="d-inline-block custom-w-h border d-flex justify-content-center align-items-center p-3 rounded-circle">
                                    <i class="fa-brands fa-facebook-f"></i>
                                </span>
                            </a>
                        </p>
                    </div>
                </div> --}}
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="https://kit.fontawesome.com/fe386f267a.js" crossorigin="anonymous"></script>
</body>

</html>