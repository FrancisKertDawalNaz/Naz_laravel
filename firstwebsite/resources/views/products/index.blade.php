@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Our Products</h1>
    
    <div class="row">
        @foreach($products as $product)
        <div class="col-md-4 mb-4">
            <div class="card product-card h-100">
                @if($product->image)
                    <img src="{{ asset('storage/' . $product->image) }}" class="card-img-top" alt="{{ $product->name }}">
                @else
                    <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="{{ $product->name }}">
                @endif
                <div class="card-body">
                    <h5 class="card-title">{{ $product->name }}</h5>
                    <p class="card-text">{{ Str::limit($product->description, 100) }}</p>
                    <p class="card-text"><strong>Price: ${{ number_format($product->price, 2) }}</strong></p>
                    <div class="d-flex justify-content-between align-items-center">
                        <a href="{{ route('products.show', $product) }}" class="btn btn-primary">View Details</a>
                        <form action="{{ route('add.to.cart', $product->id) }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-success">
                                <i class="fas fa-cart-plus"></i> Add to Cart
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <div class="d-flex justify-content-center mt-4">
        {{ $products->links() }}
    </div>
</div>
@endsection 