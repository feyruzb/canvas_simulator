@extends('layout.index')

@section('title', 'LMS Subjects')

@section('content')
  <!-- main page -->
  <div class="jumbotron text-center">
    <h1 class="display-4">LMS</h1>
    <hr class="my-4">
  
    <p class="lead">
      <a class="btn btn-primary btn-lg" href="/subjects" role="button">View projects</a>
      @if (Auth::check() && Auth::user()->is_teacher==1)
      <a class="btn btn-primary btn-lg" href="{{route("projects.create")}}" role="button">Create new subject</a>   
      @endif
    </div>
@endsection