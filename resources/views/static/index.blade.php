{{-- Per richiamare la pagina che ho creato in layouts uso un extends --}}
@extends('layouts.layout')
@section('jumbo')
<div class="container-jumbo">
    <div class="jumbo">
        <div class="item">
            <h1>DIVENTA<br><strong>SVILUPPATORE WEB</strong></h1>
            <p><strong>Trasformiamo la tua passione in una carriera. Se non trovi lavoro, ti rimborsiamo.</strong></p>
            <ul>
                <li>6 mesi di corso intensivo online in diretta</li>
                <li>Nessuna competenza di programmazione richiesta</li>
                <li>Siamo certi del tuo successo, altrimenti ti rimborsiamo</li>
            </ul>
        </div>
        <div class="item-img">
            <img src="https://www.boolean.careers/images/homepage/pc-black-gif.gif" alt="">
        </div>
    </div>
</div>
@endsection