{{-- @dump($movie) --}}
@extends('layouts.base')

@section('pageTitle')
{{$movie->title}} - Page

@endsection

@section('mainContent')
    <h1>{{$movie->title}}</h1>

@endsection



