@extends('layouts.app')

@section('title', 'Properties Create')

@section('content')
<div>
    <h3>Create a product</h3>
    <div>
        @if($errors->any())
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        @endif
    </div>
    <form method="post" action="{{route('product.store')}}">

        @csrf
        <div>
            <label>Name</label>
            <input type="text" name="name" placeholder="name"/>
        </div>
        <div>
            <label>Qty</label>
            <input type="text" name="qty" placeholder="qty"/>
        </div>
        <div>
            <label>Price</label>
            <input type="text" name="price" placeholder="Price"/>
        </div>
        <div>
            <label>Description</label>
            <input type="text" name="description" placeholder="description"/>
        </div>
        <div>
            <button class="bg-white mt-4">
                <input type="submit" value="Save a new Product"/>
            </button>
        </div>
    </form>
</div>
@endsection