@extends('layouts.app')

@section('title')Updating Message @endsection

@section('content')
    <h1>Update Message</h1>
    <form action="{{ route('contact-update-submit', $data->id) }}" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" value="{{ $data->name }}" placeholder="Your name" id="name"
                class="form-control">
        </div><br>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" name="email" value="{{ $data->email }}" placeholder="Your email" id="email"
                class="form-control">
        </div><br>
        <div class="form-group">
            <label for="subject">Subject</label>
            <input type="text" name="subject" value="{{ $data->subject }}" placeholder="Subject" id="subject"
                class="form-control">
        </div><br>
        <div class="form-group">
            <label for="message">Message</label>
            <textarea name="message" id="message" cols="30" rows="10" class="form-control"
                placeholder="Insert Message">{{ $data->message }}</textarea>
        </div><br>
        <button type="submit" class="btn btn-success">Update</button>
    </form>
@endsection

@section('aside')
    @parent
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae eos aliquam, beatae dolores ea corrupti magnam
        reiciendis adipisci tempore doloribus quas, suscipit fugit cupiditate ducimus accusamus in sint, unde repellat.
    </p>
@endsection

