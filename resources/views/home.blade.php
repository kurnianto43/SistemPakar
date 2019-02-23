@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
       <h2>Selamat Datang {{ Auth::user()->name }}</h2>
    </div>
    <div class="row">
        <div class="col-md-8">
            <p>Klik mulai untuk mulai diagnosa kerusakan kulkas</p>
        </div>
        <div class="col-md-4">
            <a class="btn btn-primary" href="#">Mulai</a>
        </div>
    </div>
    
</div>
@endsection
