@extends('layouts.base')

@section('pageTitle','Movies home')
    
@section('mainContent')
    <section class="container">
        <h1 class="text-center">Movies <i class="fa-solid fa-film"></i></h1>
        <div class="row">
            @foreach ($movies as $movie)
            <div class="col col-md-3 md-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{$movie->title}}</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum cum velit minus voluptatum, ad quia tenetur architecto doloribus odio sapiente!</p>
                        <a href="{{route('detail',$movie->id)}}" class="btn btn-primary">{{$movie->title}}</a>
                    </div>
                </div>
            </div>
                
            @endforeach
        </div>

    </section>
@endsection