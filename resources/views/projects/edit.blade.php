@extends('layout.index')

@section('title', 'edit project')

@section('content')
  <div class="container py-3">
    <h2>Edit subject details</h2>
    <form action="/projects/{{ $project["id"]}}" method="post">
      @csrf
      @method('PUT')

      <div class="form-group">
        <label for="name">Project name</label>
        <input type="text" 
              class="form-control @error('name') is-invalid @enderror" 
              name="name" 
              placeholder=""
              value="{{ old('name', $project["name"]) }}"
              >
        @error('name')
          <div class="invalid-feedback">  
            Please choose subject name.
          </div>
        @enderror
      </div>
      
      <div class="form-group">
        <label for="description">Description</label>
        <textarea class="form-control @error('description') is-invalid @enderror" name="description" rows="3">{{ old('description', $project["description"]) }}</textarea>
        @error('description')
          <div class="invalid-feedback">
            Please choose descripton.
          </div>
        @enderror
      </div>
      
      <div class="form-group">
        <label for="image_url">Background image URL</label>
        <input type="text" class="form-control @error('image_url') is-invalid @enderror" name="image_url" placeholder=""
          value="{{ old('image_url', $project["image_url"]) }}"
        >
        @error('image_url')
          <div class="invalid-feedback">
            Please choose a valid url.
          </div>
        @enderror
      </div>

      <div class="form-group mt-4">
        <button type="submit" class="btn btn-primary">Modify the subject</button>
      </div>

    </form>
  </div>
@endsection