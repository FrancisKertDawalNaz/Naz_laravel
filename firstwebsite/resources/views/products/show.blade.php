@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            @if($product->image)
                <img src="{{ asset('storage/' . $product->image) }}" class="img-fluid rounded" alt="{{ $product->name }}">
            @else
                <img src="https://via.placeholder.com/600x400" class="img-fluid rounded" alt="{{ $product->name }}">
            @endif
        </div>
        <div class="col-md-6">
            <h1 class="mb-4">{{ $product->name }}</h1>
            <p class="lead mb-4">{{ $product->description }}</p>
            <p class="h3 mb-4">${{ number_format($product->price, 2) }}</p>
            
            @if($product->stock > 0)
                <p class="text-success mb-4">In Stock ({{ $product->stock }} available)</p>
                <form action="{{ route('add.to.cart', $product->id) }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-success btn-lg">
                        <i class="fas fa-cart-plus"></i> Add to Cart
                    </button>
                </form>
            @else
                <p class="text-danger mb-4">Out of Stock</p>
            @endif

            <div class="mt-4">
                <a href="{{ route('products.index') }}" class="btn btn-secondary">
                    <i class="fas fa-arrow-left"></i> Back to Products
                </a>
            </div>
        </div>
    </div>
</div>
@endsection 