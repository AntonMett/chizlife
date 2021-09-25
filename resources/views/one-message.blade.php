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
