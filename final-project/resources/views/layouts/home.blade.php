@extends('layouts.main')

@section('content')

@if (Auth::check())
    <div class="container mt-4">
        <div class="row">
            <div class="col-12 d-flex justify-content-between align-items-center">
                <h1 class="mb-0">Hello {{ Auth::user()->name }}</h1>
                <a href="{{ route('logout') }}" class="btn btn-dark text-white fw-bold ms-auto" style="background-color: black;" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    Sair
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </div>
    </div>
@endif

<div class="container mt-5">
    <div class="row g-5 justify-content-center" style="margin: 0 50px;"> 
        <div class="col-lg-5 col-md-6">
            <div class="card h-100" style="background-color: black; border: none;">
                <img src="https://us.123rf.com/450wm/studiostoks/studiostoks1606/studiostoks160600052/58173508-m%C3%A1scara-de-gas-caucho-vendimia-verde-pop-retro-del-arte-del-vector-qu%C3%ADmica-y-protecci%C3%B3n-biol%C3%B3gica.jpg?ver=6" class="card-img-top" alt="Foto da Banda" style="height: 350px; object-fit: cover;">
                <div class="card-body">
                    <a href="{{ route('create') }}" style="text-decoration: none; color:white">
                        <h3 class="card-title fw-bold text-center">Add Band</h3>
                    </a>
                </div>
            </div>
        </div>

        <div class="col-lg-5 col-md-6">
            <div class="card h-100" style="background-color: black; border: none">
                <img src="https://funkybunky.co.uk/media/ecom/prodlg/iggypop2.jpg" alt="Foto da Banda" style="height: 350px; object-fit: cover;">
                <div class="card-body">
                    <a href="{{ route('index') }}" style="text-decoration: none; color:white;">
                        <h3 class="card-title fw-bold text-center">My Bands</h3>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
