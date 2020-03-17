{{-- Index di students --}}
@extends('layouts.layout')
@section('main')
{{-- Posso usare config anche per ciclarci dentro --}}
    @foreach (config('students.allStudents') as $item)
        <img src="{{$item['poster']}}" alt="">
        <h2>{{$item['name']}} ({{$item['age']}})</h2>
        <p>Lavora da {{$item['company']}} come {{$item['role']}}</p>
    @endforeach
@endsection

