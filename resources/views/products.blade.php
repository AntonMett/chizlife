extends('layouts.app')

@section('title')Products @endsection

@section('content')
    <h1>All products from database.</h1>
    <div class="alert alert-info">
        <h3>{{ $productData }}</h3>

    @endsection
