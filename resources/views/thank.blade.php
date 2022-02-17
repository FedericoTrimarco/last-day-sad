@extends('layouts.main')

@section('main-content')
    <div class="container">
        <h1>Than you!</h1>
        <p>Form inviata con successo!</p>
        <a href="{{ route('home') }}" class="btn btn-primary">Back home</a>
    </div>
@endsection