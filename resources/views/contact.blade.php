@extends('layouts.app')

@section('title')Contact @endsection

@section('content')
    <h1>Contact Us!</h1>
    <p>
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Necessitatibus, inventore perferendis. A eos hic
        voluptatem
        sint amet non voluptatibus, praesentium ut aut quos iure neque sapiente reiciendis quidem corporis nam!
    </p>
    <form action="{{ route('contact-form') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" placeholder="Your name" id="name" class="form-control">
        </div><br>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" name="email" placeholder="Your email" id="email" class="form-control">
        </div><br>
        <div class="form-group">
            <label for="subject">Subject</label>
            <input type="text" name="subject" placeholder="Subject" id="subject" class="form-control">
        </div><br>
        <div class="form-group">
            <label for="message">Message</label>
            <textarea name="message" id="message" cols="30" rows="10" class="form-control"
                placeholder="Insert Message"></textarea>
        </div><br>
        <button type="submit" class="btn btn-success">Send</button>
    </form>
@endsection

@section('sidePanelHeader')
    <h1>Leave us a message!</h1>
@endsection

@section('sidePanelDescription')
    <p>This contant form is saving your message to my database. Do not worry, you can delete your message if you want :)
    Form data is validated by the server.</p>
@endsection
