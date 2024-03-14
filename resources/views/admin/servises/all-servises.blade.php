@extends('admin.partials.header')

@section('title')
- webiqs
@endsection
@section('content')
<main id="main" class="main">


<h1>All Services</h1>
<hr>
<ul class="list-group">
    
    <table class="table">
        <thead>
            <tr>
                {{-- <th scope="col">#</th> --}}
                <th scope="col">Names</th>
                <th scope="col">Title</th>
                <th scope="col">view</th>
                <th scope="col">Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($service as $item)
                
          
          <tr>
            {{-- <th >{{$item->id}}</th> --}}
            <td>{{$item->servises}}</td>
            <td>{{$item->title_fst}}</td>
            
            <td> <a  class="btn btn-outline-secondary" href="{{route('service.show', $item->id)}}">View</a> </td>
            {{-- <a class="btn btn-outline-danger" href="{{route('service.destroy', $item->id)}}">Delete</a> --}}
            <td>
              <form action="{{ route('service.destroy' , $item->id)}}" method="POST">
                <input name="_method" type="hidden" value="DELETE">
                {{ csrf_field() }}
            
                <div class="">
                    {{-- <button type="button" class="btn btn-info" data-dismiss="modal">No</button> --}}
                    <button type="submit" class="btn btn-outline-danger">Delete</button>
                </div>
            </form>
            </td>
          </tr>
          @endforeach
         
        </tbody>
      </table>
    
</ul>
<br>
{{-- <a type="submit" href="/admin/add"class="btn btn-primary">Add more servises</a> --}}

 

</main>

@endsection


