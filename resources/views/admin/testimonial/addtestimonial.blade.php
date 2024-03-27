@extends('admin.partials.header')

@section('title')
- webiqs
@endsection
@section('content')
<main id="main" class="main">

    <form method="POST" action="{{route('testimonial.store')}}" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Name</label>
          <input type="text" name="name" class="form-control" >
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label"> Company Name</label>
          <input type="text" name="companyName" class="form-control" >
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">About</label>
          <input type="text" name="about" class="form-control" >
        </div>
        <div class="mb-3">
          <input type="file" name="image" class="form-control" >
        </div>
       
        
       
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>

</main> 
@endsection