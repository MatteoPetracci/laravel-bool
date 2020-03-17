{{-- Struttura base --}}
{{-- Includo l'header e il footer che ho creato nella cartella partials --}}
@include('layouts.partials._header')

<header>
    @yield('header')
</header>
<main></main>
<footer></footer>

 @include('layouts.partials._footer')

 {{-- Questa pagina per essere vista in index ho bisogno di un extends --}}