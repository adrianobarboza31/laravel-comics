@extends('layouts.app')
@section('content')
<div class="container">
    <h2>prodotti</h2>
    <div class="d-flex wrap">
        @foreach ($prodotti as $pasta)
        <div class="bg-white  card">
            <img class="img-pr" src="{{$pasta['src-h']}}" alt="">
            <p>{{$pasta['titolo']}}</p>
        </div>
             
        @endforeach
       
    </div>
</div>
    
@endsection