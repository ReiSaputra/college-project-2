<div class="col-2 border menu px-4 py-4">
    <div class="logo d-flex align-items-center">
        <img class="border" src="{{ asset("assets/badubii-red.png") }}" alt="logo" width="110">
    </div>
    <a class="create-course mt-3 border d-flex p-2 justify-content-evenly align-items-center" href="{{ url('/participant/' . $id . '/course/join') }}">
        <i class="fa-solid fa-plus"></i>
        <h6>Gabung<br/>Kursus</h6>
    </a>
    <div class="feature-link border mt-3">
        <a href="dashboard">Dasboard</a>
    </div>
    <div class="logout">
        <form action="{{ route("logout.post") }}" method="post">
            @csrf
            <button type="submit">Logout</button>
        </form>
    </div>
</div>