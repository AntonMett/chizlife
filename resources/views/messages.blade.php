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
