<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" integrity="sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk=" crossorigin="anonymous" />
    <title>Document</title>
</head>
<body>
    <div class="wrapper">
        <nav>
            <div class="box-img">
                <img src="https://www.boolean.careers/images/common/logo.png" alt="">
            </div>
            <div class="box-list">
                <ul>
                    <li>
                        {{-- Uso la funzione route per andare a prendere la rotta che mi serve --}}
                        <a href="{{route('static_page.home')}}">Home</a>
                    </li>
                    <li>
                        <a href="">Corso</a>
                    </li>
                    <li>
                        {{-- Request è un oggetto di laravel e grazie al metodo getName prendo il nome della rotta che ho usato per accedere --}}
                        {{-- Controllo se getName mi restituisce lo stesso nome della pagina poi con l'operatore ternario se è vero prende la classe active altrimenti  
                        stringa vuota  quindi niente--}}
                        <a class="{{(Request::route()->getName() == 'student.home') ? 'active' : ''}}" href="{{route('student.home')}}">Dopo Corso</a>
                    </li>
                    <li>
                        <a href="">Lezione Gratuita</a>
                    </li>
                    <li>
                        <a href="" class="btn">Candidati ora</a>
                    </li>
                </ul>
            </div>
            
        </nav>
        <h2 class="ex-student">I nostri ex studenti su LinkedIn</h2>
        
