@extends('admin.partials.header')

@section('title')
- webiqs
@endsection
@section('content')
<h1>Edit Portfolio</h1>

<form method="POST" action="{{ route('portfolio.update', $portfolio) }}">
    @csrf
    @method('PUT')

    <!-- Add the form fields here -->

    <button type="submit">Update Portfolio</button>
</form>
@endsection