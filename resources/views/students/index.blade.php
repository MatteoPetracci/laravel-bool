{{-- Index di students --}}
@extends('layouts.layout')
@section('main')
{{-- Posso usare config anche per ciclarci dentro --}}
<div class="container">
    @foreach (config('students.allStudents') as $key => $item)
    <div class="card-student">
        <div class="student">
            {{-- Inserire il nome della rotta come primo argomento --}}
            {{-- Per inserire un id a questa rotta assegno un id tramite posizione quindi Key  --}}

            <a href="{{route('student.show', ['id' => $key])}}">
                <img src="{{$item['poster']}}" alt="">
            </a>
            <div class="date-student">
                <h3>{{$item['name']}} ({{$item['age']}})</h3>
                <p>Lavora da {{$item['company']}} come {{$item['role']}}</p>
            </div>
        </div>
        <p class="description">{{$item['description']}}</p>
        <div class="box-icon">
            <i class="fab fa-linkedin"></i>
        </div>
    </div>
    @endforeach
</div>
@endsection

