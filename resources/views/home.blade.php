@extends('layout.app')

@section('content')
    <nav>
        <div class="container-fluid d-flex justify-content-center align-items-center">
            <div class="logo me-4">
                <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="">
            </div>
            <div id="navbarNav" class="d-flex justify-content-center">
                <ul class="list-unstyled d-flex">
                    <li class="nav-item mx-3">
                        <a class="nav-link" href="{{url('/characters')}}">CHARACTERS</a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link active" href="{{url('/')}}">Comics</a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link" href="{{url('/movies')}}">Movies</a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link" href="{{url('/tv')}}">TV</a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link" href="{{url('/games')}}">GAMES</a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link" href="{{url('/collectibles')}}">COLLECTIBLES</a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link" href="{{url('/video')}}">VIDEO</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>
@endsection