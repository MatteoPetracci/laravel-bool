{{-- Index di students --}}
@extends('layouts.layout')
@section('main')
{{-- Posso usare config anche per ciclarci dentro --}}
<div class="container">
    @foreach (config('students.allStudents') as $item)
    <div class="card-student">
        <img src="{{$item['poster']}}" alt="">
        <h2>{{$item['name']}} ({{$item['age']}})</h2>
        <p>Lavora da {{$item['company']}} come {{$item['role']}}</p>
        <p>{{$item['description']}}</p>
    </div>
    @endforeach
</div>
@endsection

