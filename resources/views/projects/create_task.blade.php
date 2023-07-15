@extends('layout.index')

@section('title', 'New task page')

@section('content')
  <div class="container py-3">
    <h2>New task</h2>
    <form action="/tasks" method="POST">
      @csrf

      <div class="form-group">
        <label for="name">Task name</label>
        <input type="text" 
              class="form-control @error('name') is-invalid @enderror" 
              name="name" 
              placeholder=""
              value="{{ old('name', '') }}"
        >
        @error('name')
          <div class="invalid-feedback">  
            Please choose task name.
          </div>
        @enderror
      </div>
      
      <div class="form-group">
        <label for="description">Description</label>
        <textarea class="form-control @error('description') is-invalid @enderror" name="description" rows="3">{{ old('description', '') }}</textarea>
        @error('description')
          <div class="invalid-feedback">
            Please choose descripton.
          </div>
        @enderror
      </div>
      
      <div class="form-group">
        <label for="color">Color</label>
        <input type="text" class="form-control @error('color') is-invalid @enderror" name="color" placeholder=""
          value="{{ old('color', '') }}"
        >
        @error('color')
          <div class="invalid-feedback">
            Please choose color.
          </div>
        @enderror
      </div>

      <div class="form-group my-3">
        <button type="submit" class="btn btn-primary">Add new task to the project</button>
      </div>

    </form>
  </div>
@endsection