@extends('layouts.main')

@section('title')
  Movie Details
@endsection


@section('content')
{{-- container --}}
    <div class="container d-flex flex-wrap align-items-center justify-content-center my-5">

      <div class="text-black my-4 ms-4 me-4 border border-light-dark rounded rounded-sm " style="width: 1000px">

            <div class="d-flex justify-content-center">
                <div>
                    <img src="" class="card-img-top rounded-start rounded-sm" alt="" style="height: 389px; width: 400px">
                </div>
                <div class="card-body d-flex flex-column justify-content-between align-items-start">

                    <div>
                        <h5 class="card-title p-3">Title film</h5>
                        <p class="card-text mb-1 px-3">Description</p>
                    </div>

                    <div class="ms-auto">
                      <a href="#" class="btn btn-primary m-3">Details</a>
                    </div>


                </div>

            </div>

        </div>

      </div>



@endsection
