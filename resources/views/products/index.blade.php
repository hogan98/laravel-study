@extends('layouts.app')

@section('title', 'Properties Index')

@section('content')
<div>
    <h3>Products Index</h3>
    <div>
        @if(session()->has('success'))
        <div>
            {{session('success')}}
        </div>
        @endif
    </div>
    <div>
        <a href="{{route('product.create')}}">Create a Product</a>
    </div>
    <div class="relative overflow-x-auto">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr class="text-center">
                    <th scope="col" class="px-6 py-3">
                        ID
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        QTY
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Price
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Description
                    </th>
                    <th scope="col" colspan="2" class="px-6 py-3">
                        Action
                    </th>
                    
                </tr>
            </thead>

            <tbody>
                @foreach($products as $product)
                    <tr class="bg-white dark:bg-gray-800">
                        <td class="px-6 py-4 text-center">{{$product->id}}</td>
                        <td class="px-6 py-4 text-center">{{$product->name}}</td>
                        <td class="px-6 py-4 text-center">{{$product->qty}}</td>
                        <td class="px-6 py-4 text-center">{{$product->price}}</td>
                        <td class="px-6 py-4 text-center">{{$product->description}}</td>
                        <td class="px-6 py-4 text-center">
                            <a class="text-amber-400" href="{{route('product.edit',['product' => $product])}}">Edit</a>
                        </td>
                        <td class="px-6 py-4 text-center">
                            <form method="post" action="{{route('product.destroy', ['product' => $product])}}">
                                @csrf
                                @method('delete')
                                <input type="submit" value="Delete">
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>



</div>
@endsection