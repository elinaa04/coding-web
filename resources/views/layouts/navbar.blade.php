@extends('layouts.main')
<!-- @yield('sidebar') -->
@section('navbar')
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand fw-bold" href="#">Islamiq</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                @if (Auth::check() && Auth::user())
                    <p>Selamat datang, NIP Anda: {{ Auth::user()->nip }}</p>
                @else
                    <p>Silakan login untuk melihat informasi.</p>
                @endif
            </ul>

            @if (Auth::user())
            <form action="{{ route('logout') }}" method="POST" class="d-flex">
            @csrf
                <button class="btn btn-primary" type="submit">Logout</button>
            </form>
            @else
            <button class="btn btn-primary" type="submit" onclick="window.location.href='{{ route('login') }}'">Login</button>
            @endif
        </div>
    </div>
</nav>
@endsection