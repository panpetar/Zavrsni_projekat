<x-app-layout>
  
    <div class="row">
        <div class="col-md-6">
            <a href="{{ route('houses.create') }}" class="btn btn-dark m-3"><i class="bi bi-plus-circle me-2"></i>Create new house</a>
        </div>
    </div>
    <div class="row">
        @foreach ($products as $product)
            <div class="card" style="width: 18rem;">
                <img src="{{ asset('storage/images/houses/slika1.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Name: {{ $product->name }}</h5>
                    <h5 class="card-title">Category: {{ $product->category->name }}</h5>
                    <p class="card-text">Price: {{ $product->price }}</p>
                    <p class="card-text">Available: {{ $product->available }}</p>
                    <a href="{{ route('houses.show', $product->id) }}" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        @endforeach
    </div>

    {{ $products->links() }}

</x-app-layout>
