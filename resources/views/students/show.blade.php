@extends('layouts.layout')

@section('main')
<div class="container">
    <div class="card-student">
        <div class="student">
                <img src="{{$data['poster']}}" alt="">
            <div class="date-student">
                <h3>{{$data['name']}} ({{$data['age']}})</h3>
                <p>Lavora da {{$data['company']}} come {{$data['role']}}</p>
            </div>
        </div>
        <p class="description">{{$data['description']}}</p>
        <div class="box-icon">
            <i class="fab fa-linkedin"></i>
        </div>
    </div>
</div>
@endsection