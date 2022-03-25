@extends('front.layouts.app')

@section('content')

    <div class="d-flex justify-content-center" style="margin-left: 40%">
        <img src="{{ asset('images/'.$user['image'])}}" alt="Image" 
        height="140px" width="200px"
        style="margin-left: 10%" class="tm-margin-b-20 img-fluid">
        <p><h4>Full Name: {{$user['name']}}</h4></p>
        <p><h4>Age: {{$user['age']}}</h4></p>
        <p><h4>Email Address: {{$user['email']}}</h4></p>
        <p><h4>Biography: {{$user['bio']}}</h4></p>
    </div>

@endsection