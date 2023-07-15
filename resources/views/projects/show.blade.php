@extends('layout.index')

@section('title', 'Subject show project')

@section('content')

<div class="main-subject m-auto row  container-sm ">
        <div class=" col-sm-10  m-auto my-4" >
        <img src="{{ $subject->image_url ?: "https://t3.ftcdn.net/jpg/02/48/42/64/360_F_248426448_NVKLywWqArG2ADUxDq6QprtIzsF82dMF.jpg" }}" class="card-img-top my-3" style="max-height:500px">
            <div class="card-body">
                <h3 class="card-name h4 pb-2 mb-4 text-danger border-bottom border-danger">{{ $subject -> name }}</h5>
                <p class="card-text ">{{ $subject -> description }}</p>
            </div>
        <div class="tasks">
            @foreach ($subject->tasks as $task)
            <div class="p-3 bg-info bg-opacity-10 border border-info border-start-0 rounded-end my-4">
                <h3 class="card-name">{{ $task -> name }}</h5>
                <p class="card-text ">{{ $task -> description }}</p>
            </div>
            @endforeach



            <div class="buttons position-relative p-3 mx-auto">
            
            <a href="/subjects" class="btn bg-warning btn-primary" >Back</a>
            <form action="/projects/{{$subject->id}}" method="POST" class="my-4">
                @csrf
                @method('delete')
                @if (Auth::check() && Auth::user()->is_teacher==1)
                 <button class="btn btn-secondary bg-danger text-white">Delete subject</button>
                @endif
            </form>
            @csrf
                @method('create_task')
                @if (Auth::check() && Auth::user()->is_teacher==1)
                 <a href="/tasks/create"class="position-absolute top-0 end-0 btn btn-success">create new task</a>
                @endif
            </div>
        </div>

</div>



@endsection