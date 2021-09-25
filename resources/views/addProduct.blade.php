@extends('layouts.app')

@section('title')Add Product @endsection

@section('topScript')
    <script src="https://code.jquery.com/jquery-3.6.0.js"
            integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
            crossorigin="anonymous"></script>
@endsection

@section('content')
    <h1>Add New Product Here!</h1>
    <form action="{{ route('products.store') }}" method="post">
        @csrf
        <div id="name-group" class="form-group">
            <label for="name">Product Name</label>
            <input type="text" name="name" placeholder="Product name" id="name" class="form-control">
        </div>
        <br>
        <div id="price-group" class="form-group">
            <label for="price">Price</label>
            <input type="number" name="price" placeholder="Price" id="price" class="form-control">
        </div>
        <br>
        <div id="status-id-group" class="form-group">
            <label for="status">Status</label>
            <input type="number" name="status_id" placeholder="Status number 0,1,2 or 3" id="status_id"
                   class="form-control">
        </div>
        <br>
        <div id="external-id-group" class="form-group">
            <label for="external">External Id</label>
            <input type="text" name="external_id" id="external_id" class="form-control"
                   placeholder="External Id"></input>
        </div>
        <br>
        <button type="submit" class="btn btn-success">ADD</button>
    </form>

@endsection

@section('bottomScript')
    <script src="{{url('js/form.js')}}"></script>
@endsection
@section('sidePanelHeader')
    <h1>Test adding new product to database.</h1>
@endsection
@section('sidePanelDescription')
    <p>This form in sent to the API via ajax XML request, data validation is made by the API.  </p>
@endsection

