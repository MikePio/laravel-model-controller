@extends('layouts.main')

@section('title')
  Movie Details
@endsection


@section('content')
{{-- container --}}
    <div class="container d-flex flex-wrap align-items-center justify-content-center my-5">

      <div class="text-black my-4 ms-4 me-4 border border-light-dark rounded rounded-sm " style="width: 800px">

            <div class="d-flex justify-content-center">
                <div>
                    <img src="{{ Vite::asset('resources/img/1.jpg') }}" class="card-img-top rounded-start rounded-sm" alt="" style="height: 388px; min-width: 288px; max-width: 400px">
                </div>
                <div class="card-body d-flex flex-column justify-content-between align-items-start">

                    <div>
                        <h5 class="card-title p-3">{{ $movie->title }}</h5>
                        <p class="card-text mb-1 px-3">Original Title: {{ $movie->original_title }}</p>
                        <p class="card-text mb-1 px-3">Nationality: {{ $movie->nationality }}</p>
                        <p class="card-text mb-1 px-3">Date: {{ $movie->date }}</p>
                        <p class="card-text mb-1 px-3">Vote: {{ $movie->vote }}</p>
                    </div>

                    <div class="ms-auto">
                      <a href="{{ route('home') }}" class="btn btn-primary m-3">Home</a>
                    </div>


                </div>

            </div>

        </div>

      </div>



@endsection
