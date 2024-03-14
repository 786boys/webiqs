@extends('admin.partials.header')

@section('title')
- webiqs
@endsection
@section('content')
<main id="main" class="main">

    <h1>User detial</h1>
    <a class="btn btn-secondary" href="{{ route('service.index')}}" role="button">Move back</a>
    <hr>
    
    <div class="table-responsive">
        <table class="table table-primary">
            <tbody>
                <tr class="">
                    <th>Name:</th>  
                    <td>{{$service->id}}</td>
                </tr>
                <tr>
                    <th>Service Name:</th>                   
                     <td> {{$service->servises}}</td>
                </tr>
                <tr>
                    <th>First title:</th>                   
                     <td>{{$service->title_fst}}</td>
                </tr>
                <tr>
                    <th>First Description:</th>                   
                     <td>{{$service->description_fst}}</td>
                </tr>
                <tr>
                    <th>Second title:</th>                   
                     <td>{{$service->title_sec}}</td>
                </tr>
                <tr>
                    <th>Second Description:</th>                   
                     <td>{{$service->description_sec}}</td>
                </tr>
            </tbody>
        </table>
    </div>
    

    {{-- <img src="{{asset($service->image)}}" alt="hello"> --}}




</main>

@endsection