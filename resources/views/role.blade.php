@include("include.landingPage.headLandingPage")
<title>Role - Badubii</title>
</head>

<body class="role">
    <header class=" container-fluid text-center">
        <div class="px-4 pt-5 pb-4">
            <a class="navbar-brand" href="/">
                <img src="{{ asset('assets/badubii-red.png') }}" alt="Navigation-Badubii-Logo" width="110"
                    class="d-inline-block align-text-top">
            </a>
        </div>
    </header>
    <main>
        <div class="container-fluid">
            <div class="row px-3">
                <div class="text-box mb-2">
                    <h5 class="text-center text-navy">Pilih Peran</h5>
                    <h6 class="text-center text-grey2 poppins-light">Saya akan menjadi ...</h6>
                </div>
                <div class="col-6 text-end px-1 parent-box d-flex justify-content-center align-items-center">
                    <a class="border-role text-center box d-flex justify-content-center align-items-center flex-column p-5 rounded-5 remove-default-link text-navy"
                        href="/sign-up/student">
                        <i class="fa-solid fa-graduation-cap fa-2xl"></i>
                        <h5 class="mt-5">Siswa</h5>
                        <p class="text-navy">Siswa memiliki tanggung jawab untuk mengikuti kelas, menyelesaikan tugas,
                            berkomunikasi
                            dengan mentor,
                            memantau kemajuan belajar pribadi, serta berkolaborasi dengan rekan-rekan sekelas dalam
                            proses pembelajaran</p>
                    </a>
                </div>
                <div class="col-6 px-1 parent-box d-flex justify-content-center align-items-center">
                    <a class="border-role text-center box d-flex justify-content-center align-items-center flex-column p-5 rounded-5 remove-default-link text-navy"
                        href="/sign-up/mentor">
                        <i class="fa-solid fa-chalkboard-user fa-2xl"></i>
                        <h5 class="mt-5">Mentor</h5>
                        <p class="text-navy">Mentor bertanggung jawab untuk membuat dan mengelola kelas, mengelola
                            tugas
                            siswa, berinteraksi dengan
                            siswa, memantau kemajuan mereka, dan berkolaborasi dengan siswa dalam meningkatkan
                            pembelajaran</p>
                    </a>
                </div>
            </div>
        </div>
    </main>
    <script src="https://kit.fontawesome.com/fe386f267a.js" crossorigin="anonymous"></script>
</body>

</html>