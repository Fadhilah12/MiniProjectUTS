@php
    $currentRouteName = Route::currentRouteName();
@endphp

<!--Navbar-->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top ps-5" style="background-color: #146C94">
    <div class="container">
        <a href="{{ route('home') }}" class="fw-bold  navbar-brand mb-0 h1"><img src="{{ Vite::asset('images/main.png') }}"
                alt="image" width=10%> KY.DATAMASTER</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-md-auto">
                <li class="nav-item fw-semibold">
                    <a class="nav-link @if ($currentRouteName == 'home') active @endif" aria-current="page"
                        href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item fw-semibold">
                    <a class="nav-link @if ($currentRouteName == 'barangs.index') active @endif""
                        href="{{ route('barangs.index') }}">List Barang</a>
                </li>
            </ul>
            <a href="{{ route('profile') }}" class="btn btn-outline-light ms-md-auto fw-semibold"><i
                    class="bi-person-circle me-1 fw-semibold"></i> My Profile</a>
        </div>
    </div>
</nav>
<!--akhir navbar-->
