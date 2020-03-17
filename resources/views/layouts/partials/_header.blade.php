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
    <div class="wrapper">
        <nav>
            <ul>
                <li>
                    {{-- Uso la funzione route per andare a prendere la rotta che mi serve --}}
                    <a href="{{route('static_page.home')}}">Home</a>
                </li>
                <li>
                    <a href="">Corso</a>
                </li>
                <li>
                    <a href="{{route('student.home')}}">Dopo Corso</a>
                </li>
                <li>
                    <a href="">Lezione Gratuita</a>
                </li>
                <li>
                    <a href="">Candidati ora</a>
                </li>
            </ul>
        </nav>

