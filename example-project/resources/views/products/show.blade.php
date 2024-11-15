<x-layout>

<h1>Product id:{{$product->id}}</h1>

    <h2>{{ $product->name }}</h2>
    <p>{{ $product->description }}</p>
    <p>{{ $product->size }}</p>

    <p><a href="{{ route('products.edit', $product->id) }}">Edit Product</a></p>

    <p><a href="{{ route('products.index') }}">View All Products</a></p>

    <form method="post" action="{{ route('products.destroy', $product) }}">
        @csrf 
        @method('DELETE')

        <button>Delete</button>
    </form>
</x-layout>
