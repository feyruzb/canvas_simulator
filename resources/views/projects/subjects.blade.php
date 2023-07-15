@extends('layout.index')

@section('title', 'subjects')

@section('content')
  <!-- main page -->
  <div class="jumbotron text-center ">
    <h1 class="display-4">Subjects</h1>
    <hr class="my-4">
  
    <div class="subject-list m-auto row justify-content-between container-sm ">
    @foreach ($subjects_db as $element)
        <div class="card col-sm-3 m-auto my-4 mx-3" >
        <img src="{{ $element->image_url ?: "https://t3.ftcdn.net/jpg/02/48/42/64/360_F_248426448_NVKLywWqArG2ADUxDq6QprtIzsF82dMF.jpg" }}" class="card-img-top my-2" style="max-height:220px">
            <div class="card-body">
                <h5 class="card-name">{{ $element -> name }}</h5>
                <p class="card-text">{{ $element -> description }}</p>
            </div>
            <div class="card-footer text-body-secondary bg-transparent">
                @if (Auth::check() && Auth::user()->is_teacher==1)
                <a href="projects/{{$element -> id}}/edit" class="btn btn-primary">EDIT</a>
                @endif
                <a href="projects/{{$element -> id}}" class="btn btn-primary">View details</a>
                </div>
        </div>
    @endforeach
    </div>
  </div>
@endsection
