@extends('admin.partials.header')

@section('title')
- webiqs
@endsection
@section('content')
<main id="main" class="main">

    
    <h2>Add Portfolio</h2>
    <form method="POST" action="{{route('portfolio.store')}}" enctype="multipart/form-data">
      @csrf
      <div class="mb-3">
        <label class="form-label">Project Name</label>
        <input type="text" class="form-control" name="Pname">
      </div>

      <div class=" mb-3">
        <label class="form-label">Service pic</label><br>
        <input type="file" class="form-control" name="image" ">
      </div>
    
      <div class="mb-3">
        <label class="form-label">About Project</label>
        <input type="text" class="form-control" name="about" >
      </div>

      <div class="mb-3">
        <label class="form-label">Solution</label>
        <input type="text" class="form-control" name="solution" >
      </div>

      <label for="sel1" class="form-label">type</label>
      <select class="form-select" id="sel1" name="type">
        <option>Website</option>
        <option>Landing Page</option>
        <option>Branding Design</option>
      </select>
       <br>
           
      <button type="submit" class="btn btn-primary">Add</button>
    </form>



</main>

@endsection