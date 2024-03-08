@extends('layouts.app')

@section('title', 'Properties Create')

@section('content')
<div>
    <h3>Edit a product</h3>
    <div>
        @if($errors->any())
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        @endif
    </div>
    <form method="post" action="{{route('product.update', ['product' => $product])}}">
        @csrf
         @method('PUT')
        <div>
            <label>Name</label>
            <input type="text" name="name" placeholder="name" value="{{$product->name}}"/>
        </div>
        <div>
            <label>Qty</label>
            <input type="text" name="qty" placeholder="qty" value="{{$product->qty}}"/>
        </div>
        <div>
            <label>Price</label>
            <input type="text" name="price" placeholder="Price" value="{{$product->price}}"/>
        </div>
        <div>
            <label>Description</label>
            <input type="text" name="description" placeholder="description" value="{{$product->description}}"/>
        </div>
        <div>
            <button class="bg-white mt-4">
                <input type="submit" value="Update"/>
            </button>
        </div>
    </form>
</div>
@endsection