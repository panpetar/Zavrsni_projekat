<x-app-layout>

    <div class="row">
        <div class="col-md-6">
            <a href="{{ route('snowmen.create') }}" class="btn btn-dark m-3">
                <i class="bi bi-plus-circle me-2"></i>
                Create new snowmen</a>
        </div>
    </div>
  
    <div class="row"">
        @foreach ($products as $product)
            <div class="card col-md-3 m-5 p-3">
                <img src="{{ asset('storage/images/snowmen/' . $product->image_url) }}" height="300px" class="card-img-top " alt="Snowman">
                <div class="card-body">
                    <h5 class="card-title">Name: {{ $product->name }}</h5>
                    <h5 class="card-title">Category: {{ $product->category->name }}</h5>
                    <p class="card-text">Price: {{ $product->price }}</p>
                    <p class="card-text">Available: {{ $product->available }}</p>
                    <a href="{{ route('snowmen.show', $product->id) }}" class="btn btn-primary btn-block btn-lg w-100">Show</a>
                </div>
            </div>
        @endforeach
        {{ $products->links() }}
    </div>
</x-app-layout>
