@extends('layouts.main-layout')

@section('title')
    home
@endsection

@section('content')

    <div class="text-center px-0 mx-0">
        <h1>Comics</h1>
        <img src="{{ Vite::asset('resources/img/jumbotron.jpg') }}" width="100%" class="mx-0 px-0">
        <div class="container">
            <div class="d-flex row gy-4">
                @foreach ($fumetti as $fumetto)
                    <div class="card rounded px-0">
                        <a href="{{ route('about') }}" class="text-decoration-none">
                            <h3 class="bg-dark text-light">
                                {{ $fumetto['title'] }}
                            </h3>
                        </a>
                        <div class="px-4 pt-3">
                            <p>
                                {{ $fumetto['description'] }}
                            </p>
                            <div class="column justify-content-between d-flex mt-3">
                                <span class="bg-dark text-light rounded px-3 py-1">
                                    {{ $fumetto['series'] }}
                                </span>
                                <span class="bg-dark text-light rounded px-3 py-1">
                                    {{ $fumetto['type'] }}
                                </span>
                                <span class="bg-dark text-light rounded px-3 py-1">
                                    {{ $fumetto['sale_date'] }}
                                </span>
                                <span class="bg-dark text-light rounded px-3 py-1">
                                    {{ $fumetto['price'] }}
                                </span>
                            </div>
                            <div class="column justify-content-between d-flex mt-5">
                                <div>
                                    <h4>ARTISTS</h4>
                                    <ul class="list-unstyled">
                                        @foreach ($fumetto['artists'] as $artist)
                                            <li>
                                                {{ $artist }}
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                                <div>
                                    <h4>WRITERS</h4>
                                    <ul class="list-unstyled">
                                        @foreach ($fumetto['writers'] as $writers)
                                            <li>
                                                {{ $writers }}
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection
