<x-app-layout>
    <div class="row">
        <div class="col-md-6">
            <a href="{{ url()->previous() }}" class="btn btn-dark m-3"><i class="bi bi-arrow-left-square me-2"></i>Go back</a>
        </div>
    </div>
    <div class="card" style="width: 18rem;">
        <img src="{{ asset('storage/images/houses/slika1.jpg') }}" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Name: {{ $product->id }}</h5>
            <h5 class="card-title">Name: {{ $product->name }}</h5>
            <h5 class="card-title">Category: {{ $product->category->name }}</h5>
            <h5 class="card-title">Category: {{ $product->category->id }}</h5>
            <p class="card-text">Price: {{ $product->price }}</p>
            <p class="card-text">Available: {{ $product->available }}</p>
        </div>
        <div class="col-md-6">
            <a href="{{ url()->previous() }}" class="btn btn-success m-3"><i class="bi bi-pencil-square me-2"></i>Edit</a>
            <form action="{{ route('houses.show', $product->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger m-3"><i class="bi bi-trash3 me-2"></i>Delete</button>
            </form>
        </div>
    </div>

</x-app-layout>
