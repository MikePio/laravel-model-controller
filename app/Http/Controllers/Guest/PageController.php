<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;

class PageController extends Controller
{
  public function index(){

    $movies = Movie::all();

    // dd($movies);
    return view('home', compact('title', 'movies'));
  }

  public function movie_detail($id){
    $movie = Movie::where('id', $id)->first();
    // dd($movie);

    $text = 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Esse animi in ab a blanditiis ea, provident magnam harum dicta totam sapiente dolorem magni.';
    if($movie === null) abort(404);
    return view('movie_detail', compact('movie','text'));
  }

  }


