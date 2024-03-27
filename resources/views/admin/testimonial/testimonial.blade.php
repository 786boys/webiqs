@extends('admin.partials.header')

@section('title')
- webiqs
@endsection
@section('content')
<main id="main" class="main">
 <center>   
<h1>All Testimonials</h1>
</center>
<hr>
<ul class="list-group">
    
    <table class="table">
        <thead>
            <tr>
                {{-- <th scope="col">#</th> --}}
                <th scope="col">Num</th>
                <th scope="col">Name</th>
                <th scope="col">picture</th>
                <th scope="col">Detail</th>
                <th scope="col">view</th>
                <th scope="col">Delete</th>
            </tr>
        </thead>
        <tbody>
          @php
                $i=0;
            @endphp
            @foreach($data as $item)
                
          
          <tr>
            
            <th >{{++$i}}</th>
            <td>{{$item->name}}</td>
            <td>            
            <img src="{{ asset('storage/'. $item->image) }}" width="100px" class="img-fluid" />
            </td>
            <td>{{$item->about}}</td>
            
           
            <td> <a  class="btn btn-outline-secondary" href="{{route('testimonial.show', $item->id)}}">View</a> </td>
          
            
            {{-- <td> <a  class="btn btn-outline-secondary" href="{{route('portfolio.show', $item->id)}}">update</a> </td> --}}

            <td>
              <form action="{{ route('testimonial.destroy' , $item->id)}}" method="POST">
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
</main> 
@endsection