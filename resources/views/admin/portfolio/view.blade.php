@extends('admin.partials.header')

@section('title')
- webiqs
@endsection
@section('content')
<main id="main" class="main">
    <h1>Portfolio detial</h1>
    <a class="btn btn-secondary" href="{{ route('portfolio.index')}}" role="button">Move back</a>
    <hr>

    <div class="table-responsive">
        <table class="table table-light">
            <thead>
               
            </thead>
            <tbody>
                <tr>  
                    <th> Name</th>
                    <td>{{$value->name}}</td>
                </tr>
                <tr>  
                    <th> type</th>
                    <td>{{$value->type}}</td>
                </tr>
                <tr>  
                    <th> about</th>
                    <td>{{$value->about}}</td>
                </tr>
                <tr>  
                    <th> Name</th>
                    <td>            <img src="{{ asset('storage/'. $value->img) }}" width="100px" class="img-fluid" />
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</main>
    @endsection