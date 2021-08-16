@extends('layouts.app')

@section('title'){{ $data->subject }} @endsection

@section('content')
    <h1>{{ $data->subject }} </h1>
    <div class="alert alert-info">
        <div class="alert alert-info border border-info">
            <p>
                {{ $data->message }}
            </p>
        </div>

        <p>From: {{ $data->email }}</p>
        <p>Created at: {{ $data->created_at }}</p>
        <div class="d-flex ">
            <a href="{{ route('contact-data') }}" class="p-1">
                <button class="btn btn-warning">Back</button>
            </a>
            <a href="{{ route('contact-update', $data->id) }}" class="p-1">
                <button class="btn btn-warning ">Change</button>
            </a>
            <a href="{{ route('contact-delete', $data->id) }}" class="p-1">
                <button class="btn btn-danger">Delete</button>
            </a>
        </div>

    </div>


@endsection
