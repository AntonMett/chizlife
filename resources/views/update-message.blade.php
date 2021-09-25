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

@section('sidePanelDescription')
    <p>"At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque
        corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in
        culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et
        expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id
        quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem
        quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et
        molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus
        maiores alias consequatur aut perferendis doloribus asperiores repellat."</p>
@endsection
