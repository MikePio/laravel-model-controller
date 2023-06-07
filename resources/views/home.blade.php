@extends('layouts.main')

@section('title')
    Home
@endsection


@section('content')
{{-- container --}}
    <div class="container d-flex flex-wrap align-items-start my-5">

    @foreach ($movies as $movie)
    <div class="text-black my-3 ms-3 me-3" style="width: calc(100%/5.89);">
      <div class="card" style="height: 535px;">
          <img src="{{ Vite::asset('resources/img/1.jpg') }}" class="card-img-top" alt="" style="height: 380px;">
          <div class="card-body d-flex flex-column justify-content-between align-items-start">
              <div>
                  <h5 class="card-title">{{ $movie->title }}</h5>
                  {{-- OPPURE --}}
                  {{-- <h5 class="card-title">{{ $movie['title'] }}</h5> --}}
                  <p class="card-text">Vote: {{ $movie->vote}}</p>
                  {{-- OPPURE --}}
                  {{-- <p class="card-text mb-1">Vote: {{ $movie['vote']}}</p> --}}
              </div>
              <div class="ms-auto">
                  <a href="{{ route('movie_detail') }}" class="btn btn-primary">Details</a>
              </div>
          </div>
      </div>
  </div>
    @endforeach


{{--
        <div class="text-black my-3 ms-4 me-4" style="width: calc(100%/6.15)">
            <div class="card">
                <img src="{{ Vite::asset('resources/img/1.jpg') }}" class="card-img-top" alt="" style="height: 380px;">
                <div class="card-body d-flex justify-content-between align-items-center">
                    <div>
                        <h5 class="card-title">Title film</h5>
                        <p class="card-text mb-1">Vote: 10</p>
                    </div>
                    <div>
                        <a href="{{ route('movie_detail') }}" class="btn btn-primary">Details</a>
                    </div>
                </div>
            </div>
        </div>


        <div class="text-black my-3 ms-4 me-4" style="width: calc(100%/6.15)">
            <div class="card">
                <img src="{{ Vite::asset('resources/img/2.jpg') }}" class="card-img-top" alt="" style="height: 380px;">
                <div class="card-body d-flex justify-content-between align-items-center">
                    <div>
                        <h5 class="card-title">Title film</h5>
                        <p class="card-text mb-1">Vote: 10</p>
                    </div>
                    <div>
                        <a href="{{ route('movie_detail') }}" class="btn btn-primary">Details</a>
                    </div>
                </div>
            </div>
        </div>


        <div class="text-black my-3 ms-4 me-4" style="width: calc(100%/6.15)">
            <div class="card">
                <img src="{{ Vite::asset('resources/img/3.jpg') }}" class="card-img-top" alt="" style="height: 380px;">
                <div class="card-body d-flex justify-content-between align-items-center">
                    <div>
                        <h5 class="card-title">Title film</h5>
                        <p class="card-text mb-1">Vote: 10</p>
                    </div>
                    <div>
                        <a href="{{ route('movie_detail') }}" class="btn btn-primary">Details</a>
                    </div>
                </div>
            </div>
        </div>


        <div class="text-black my-3 ms-4 me-4" style="width: calc(100%/6.15)">
            <div class="card">
                <img src="{{ Vite::asset('resources/img/4.jpg') }}" class="card-img-top" alt="" style="height: 380px;">
                <div class="card-body d-flex justify-content-between align-items-center">
                    <div>
                        <h5 class="card-title">Title film</h5>
                        <p class="card-text mb-1">Vote: 10</p>
                    </div>
                    <div>
                        <a href="{{ route('movie_detail') }}" class="btn btn-primary">Details</a>
                    </div>
                </div>
            </div>
        </div>


        <div class="text-black my-3 ms-4 me-4" style="width: calc(100%/6.15)">
            <div class="card">
                <img src="{{ Vite::asset('resources/img/5.jpg') }}" class="card-img-top" alt="" style="height: 380px;">
                <div class="card-body d-flex justify-content-between align-items-center">
                    <div>
                        <h5 class="card-title">Title film</h5>
                        <p class="card-text mb-1">Vote: 10</p>
                    </div>
                    <div>
                        <a href="{{ route('movie_detail') }}" class="btn btn-primary">Details</a>
                    </div>
                </div>
            </div>
        </div>


        <div class="text-black my-3 ms-4 me-4" style="width: calc(100%/6.15)">
            <div class="card">
                <img src="{{ Vite::asset('resources/img/6.jpg') }}" class="card-img-top" alt="" style="height: 380px;">
                <div class="card-body d-flex justify-content-between align-items-center">
                    <div>
                        <h5 class="card-title">Title film</h5>
                        <p class="card-text mb-1">Vote: 10</p>
                    </div>
                    <div>
                        <a href="{{ route('movie_detail') }}" class="btn btn-primary">Details</a>
                    </div>
                </div>
            </div>
        </div>


        <div class="text-black my-3 ms-4 me-4" style="width: calc(100%/6.15)">
            <div class="card">
                <img src="{{ Vite::asset('resources/img/7.jpg') }}" class="card-img-top" alt="" style="height: 380px;">
                <div class="card-body d-flex justify-content-between align-items-center">
                    <div>
                        <h5 class="card-title">Title film</h5>
                        <p class="card-text mb-1">Vote: 10</p>
                    </div>
                    <div>
                        <a href="{{ route('movie_detail') }}" class="btn btn-primary">Details</a>
                    </div>
                </div>
            </div>
        </div>


        <div class="text-black my-3 ms-4 me-4" style="width: calc(100%/6.15)">
            <div class="card">
                <img src="{{ Vite::asset('resources/img/8.jpg') }}" class="card-img-top" alt="" style="height: 380px;">
                <div class="card-body d-flex justify-content-between align-items-center">
                    <div>
                        <h5 class="card-title">Title film</h5>
                        <p class="card-text mb-1">Vote: 10</p>
                    </div>
                    <div>
                        <a href="{{ route('movie_detail') }}" class="btn btn-primary">Details</a>
                    </div>
                </div>
            </div>
        </div>


        <div class="text-black my-3 ms-4 me-4" style="width: calc(100%/6.15)">
            <div class="card">
                <img src="{{ Vite::asset('resources/img/9.jpg') }}" class="card-img-top" alt="" style="height: 380px;">
                <div class="card-body d-flex justify-content-between align-items-center">
                    <div>
                        <h5 class="card-title">Title film</h5>
                        <p class="card-text mb-1">Vote: 10</p>
                    </div>
                    <div>
                        <a href="{{ route('movie_detail') }}" class="btn btn-primary">Details</a>
                    </div>
                </div>
            </div>
        </div>


        <div class="text-black my-3 ms-4 me-4" style="width: calc(100%/6.15)">
            <div class="card">
                <img src="{{ Vite::asset('resources/img/10.jpg') }}" class="card-img-top" alt="" style="height: 380px;">
                <div class="card-body d-flex justify-content-between align-items-center">
                    <div>
                        <h5 class="card-title">Title film</h5>
                        <p class="card-text mb-1">Vote: 10</p>
                    </div>
                    <div>
                        <a href="{{ route('movie_detail') }}" class="btn btn-primary">Details</a>
                    </div>
                </div>
            </div>
        </div> --}}

      </div>

@endsection
