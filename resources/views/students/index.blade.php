{{-- Index di students --}}
@extends('layouts.layout')
@section('main')
{{-- Posso usare config anche per ciclarci dentro --}}
    @foreach (config('students.allStudents') as $item)
    {{$item['name']}}
    @endforeach
@endsection

