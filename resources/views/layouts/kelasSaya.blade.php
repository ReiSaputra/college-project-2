@include('include.mentor.headMentor')

<body>
    @include('include.mentor.navMentor')
    <div class="offcanvas offcanvas-start" id="demo">
        <div class="offcanvas-header">
            <img src="{{ asset('assets/badubii-purple.png') }}" alt="Navigation-Badubii-Logo" width="110"
                class="d-inline-block align-text-top ms-3 mt-2">
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
        </div>
        <div class="offcanvas-body">
            <div class="row" style="height: 200px;">
                <div class="col-2 border border-3 ms-4 mt-1 border"></div>
                <div class="col-8 border border-3 ms-2 mt-1"class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <h6>Pilih Sekolah</h6>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" class="nav-link" href="#tambah">
                                <h6>Tambah Kelas</h6>
                            </a></li>
                    </ul>
                </div>
                <div class="col-2 border border-3 ms-4 mt-1"></div>
                <div class="col-8 border border-3 ms-2 mt-1">
                  <h6><a class="nav-link" href="kelas">Kelas Baru</h6></a>
                </div>
                <div class="col-2 border border-3 ms-4 mt-1"></div>
                <div class="col-8 border border-3 ms-2 mt-1">
                  <h6><a class="nav-link" href="kelasSaya">Kelas Ny.Genooaa</h6></a>
                </div>
                <div class="col-2 border border-3 ms-4 mt-1"></div>
                <div class="col-8 border border-3 ms-2 mt-1">
                  <h6><a class="nav-link" href="kelasDemo">Kelas Demo</h6></a>
                </div>

            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row border bg-warning">
            <div class="col-3 mb-3 mb-sm-0 border bg-danger">
                <div class="card mt-4">
                    <div class="card-body">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <h4>Seluruh Kelas</h4>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-9 border">
                <div class="row px-3">
                    <div class=" col-2 border-3 mt-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">fathur</h5>
                                <a href="#" class="btn btn-primary">Go</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-2 mt-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Rizky</h5>
                                <a href="#" class="btn btn-primary">Go</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-2 mt-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Azizah</h5>
                                <a href="#" class="btn btn-primary">Go</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-2 mt-4">
                      <div class="card">
                          <div class="card-body">
                              <h5 class="card-title">Adha</h5>
                              <a href="#" class="btn btn-primary">Go</a>
                          </div>
                      </div>
                  </div>
                </div>
            </div>
        </div>
    </div>


    <script src="src/script.js"></script>
</body>

</html>
