@extends('admin.partials.header')

@section('title')
- webiqs
@endsection
@section('content')
<main id="main" class="main">

    
    < <h2>Add Servises</h2>
    <form method="POST" 
    action="{{route('service.store')}}"
    enctype="multipart/form-data"
    >
      @csrf
      <div class="mb-3">
        <label class="form-label">Service Name</label>
        <input type="text" class="form-control" name="servises" id="exampleInputEmail1" aria-describedby="emailHelp">
      </div>

      {{-- <div class=" mb-3">
        <label class="form-label">Service pic</label><br>
        <input type="file" class="form-control" name="image" id="inputGroupFile01">
      </div> --}}
    
      <div class="mb-3">
        <label class="form-label">First title</label>
        <input type="text" class="form-control" name="f_title" id="exampleInputEmail1" aria-describedby="emailHelp">
      </div>
    
      <div class="mb-3">
        <label class="form-label">first description</label>
        <textarea class="form-control" name="f_dec" id="exampleFormControlTextarea1" rows="5"></textarea>
    
      </div>
    
      <div class="mb-3">
        <label class="form-label">Second titile</label>
        <input type="text" class="form-control" name="sec_title" id="exampleInputEmail1" aria-describedby="emailHelp">
      </div>

      <div class="mb-3">
        <label class="form-label">Second description</label>
        <textarea class="form-control" name="sec_dec" id="exampleFormControlTextarea1" rows="5"></textarea>
    
      </div>
    
      <div class="mb-3">
        <label class="form-label">Meta title</label>
        <input type="text" class="form-control" name="meta_title" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

      <div class="mb-3">
        <label class="form-label">Meta description</label>
        <textarea class="form-control" name="meta_dec"id="exampleFormControlTextarea1" rows="5"></textarea>
      </div>


     
      
      
      <button type="submit" class="btn btn-primary">Add</button>
    </form>



</main>

@endsection