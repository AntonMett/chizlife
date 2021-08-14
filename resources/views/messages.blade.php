@extends('layouts.app')

@section('title')Messages @endsection

@section('content')
    <h1>All messages from database.</h1>
    @foreach ($data as $el)
        <div class="alert alert-info">
            <h3>{{ $el->subject }}</h3>
            <p>From: {{ $el->email }}</p>
            <p>Created at: {{ $el->created_at }}</p>
            <a href="{{ route('contact-data-one', $el->id) }}"><button class="btn btn-warning">More</button></a>
        </div>
    @endforeach

@endsection
