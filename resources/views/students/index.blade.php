{{-- Index di students --}}
@extends('layouts.layout')
@section('main')
{{-- Posso usare config anche per ciclarci dentro --}}
<div class="container">
    @foreach (config('students.allStudents') as $item)
    <div class="card-student">
        <div class="student">
            <img src="{{$item['poster']}}" alt="">
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

