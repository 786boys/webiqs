@extends('admin.partials.header')

@section('title')
- webiqs
@endsection
@section('content')
<main id="main" class="main">

    <form action="{{route('img.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label class="form-label">Title</label>
            <input type="text" name="title" class="form-control" placeholder="Blog Title">
        </div>
        <div class="mb-3">
            <label class="form-label">Upload by</label>
            <input type="text" name="upload" class="form-control" placeholder="Upload by">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Description</label>
            <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="5"></textarea>
        </div>
        <div class="input-group mb-3">
            <input type="file" name="pic" class="form-control" id="inputGroupFile02">
            
          </div>
          
        <div class="mb-3">
            <label class="form-label">Tags</label>
            <input type="text" name="tags" class="form-control" placeholder="tags   ">
        </div>
        <div class="mb-3">
            <label class="form-label">Meta Title</label>
            <input type="text" name="metaTitle" class="form-control" placeholder="Blog Title">
        </div>
        <div class="mb-3">
            <label class="form-label">Meta Description</label>
            <input type="text" name="metaDescription"      class="form-control" placeholder="Meta Description">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</main>
@endsection