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
                <th scope="col">Num</th>
                <th scope="col">Title</th>
                <th scope="col">picture</th>
                <th scope="col">type</th>
                {{-- <th scope="col">Edit</th> --}}
                <th scope="col">Delete</th>
                <th scope="col">view</th>
            </tr>
        </thead>
        <tbody>
          @php
                $i=0;
            @endphp
            @foreach($value as $item)
                
          
          <tr>
            
            <th >{{++$i}}</th>
            <td>{{$item->name}}</td>
            <td>            
            <img src="{{ asset('storage/'. $item->img) }}" width="100px" class="img-fluid" />
            </td>
            <td>{{$item->type}}</td>
            {{-- <td><form method="POST" action="{{ route('portfolio.update') }}">
              @csrf
              @method('PUT')
          
              <!-- Add the form fields here -->
          
              <button type="submit">Update Portfolio</button>
          </form></td> --}}
           
            <td> <a  class="btn btn-outline-secondary" href="{{route('portfolio.update', $item->id)}}">View</a> </td>
          
            
            {{-- <td> <a  class="btn btn-outline-secondary" href="{{route('portfolio.show', $item->id)}}">update</a> </td> --}}

            <td>
              <form action="{{ route('portfolio.destroy' , $item->id)}}" method="POST">
                <input name="_method" type="hidden" value="DELETE">
                {{ csrf_field() }}
            
                <div class="">
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


