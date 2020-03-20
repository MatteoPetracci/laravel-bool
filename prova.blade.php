<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComicsController extends Controller
{
    private $comics;

    public function __construct()
    {
        $this->comics = config('comics.marvel') // <- chiamo il valore dell'array che ha come chiave marvel (che sta nel file nella cartella config)
    }

    public function index() {
        $marvel = $this->comics;
        // Cartella nome comics e file nome comics   secondo parametro si aspetta un array
        return view('comics.comics', ['marvel' => $marvel]); // Chiave e valore  al posto di marvel avrei potuto mettere qualsiasi nome e 
            //Chiamo la view (comic.comics)                 //quella chiave prenderà il valore di marvel che è un array
        // return view('comics.comics', compact('marvel'));  <- stessa cosa e prende il nome della variabile marvel che come valore ha un array
    }
}





@@($marvel)
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}"> 
    <title>Document</title>
</head>
<body>




    
</body>
</html>




@include('partials._header')

<main>
    @yield('comics_container')
</main>

@include('partials._footer')


{{-- comics.blade.php  --}}

@extends('layouts.layout')

@section('comics_container')

@foreach ($marvel as $comic)
    <img src="{{$comic['thumbnail']['path']}} . {{$comic['thumbnail']['extensions']}}" alt="{{$comic['title']}}">
    <p hidden> {{$comic['id']}}</p>
    <h5>{{$comic['title']}}</h5>
    <p>{{$comic['description']}}</p>
    <p>{{$comic['papgeCount']}}</p>
@endforeach
    
@endsection