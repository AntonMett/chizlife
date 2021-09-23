@extends('layouts.app')

@section('title')Add Product @endsection

@section('content')
    <h1>Add New Product Here!</h1>
    <form action="{{ route('products.store') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Product Name</label>
            <input type="text" name="name" placeholder="Product name" id="name" class="form-control">
        </div>
        <br>
        <div class="form-group">
            <label for="price">Price</label>
            <input type="number" name="price" placeholder="Price" id="price" class="form-control">
        </div>
        <br>
        <div class="form-group">
            <label for="status">Status</label>
            <input type="number" name="status_id" placeholder="Status number" id="status_id" class="form-control">
        </div>
        <br>
        <div class="form-group">
            <label for="external">External Id</label>
            <input type="text" name="external_id" id="external_id" class="form-control"
                   placeholder="External Id"></input>
        </div>
        <br>
        <button type="submit" class="btn btn-success">ADD</button>
    </form>
@endsection

@section('aside')
    @parent
    <p>Feel free to test out product adding form.
    </p>
@endsection
