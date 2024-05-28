<div class="col-2 border menu px-4 py-4">
    <div class="logo d-flex align-items-center">
        <img class="" src="{{ asset("assets/badubii-red.png") }}" alt="logo" width="110">
    </div>
    <a class="create-course mt-3 d-flex p-2 justify-content-evenly align-items-center text-white bg-solid-orange" href="{{ url('/participant/' . $id . '/course/join') }}">
        <i class="fa-solid fa-plus d-flex justify-content-center align-items-center custom-i"></i>
        <h6 class="">Gabung<br/>Kursus</h6>
    </a>
    <div class="feature-link mt-3">
        <a class="text-decoration-none text-orange d-flex py-3 justify-content-evenly align-items-center" href="dashboard">
            <i class="fa-solid fa-house custom-i d-flex justify-content-center align-items-center"></i>Dasboard</a>
    </div>
    <div class="logout">
        <form action="{{ route("logout.post") }}" method="post">
            @csrf
            <button type="submit">Logout</button>
        </form>
    </div>
</div>