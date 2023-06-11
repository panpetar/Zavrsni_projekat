<x-app-layout>

    <div class="row">
        <div class="col-md-4 offset-4 mt-5 p-0">
            <form action="{{ route('houses.store') }}" method="POST">
                @csrf

                <h3 class="mb-3 bg-dark text-white rounded-top p-3">Create new house:</h3>
                <div class="mb-3">
                    <label for="house_name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="house_name" name="house_name" value="{{ old('house_name') }}">
                </div>
                @error('house_name')
                    <div class="bg-danger p-2 m-2">{{ $message }}</div>
                @enderror
                <div class="mb-3">
                    <label for="price" class="form-label">Price</label>
                    <input type="number" class="form-control" id="price" value="{{ old('price') }}" name="price" min=1>
                </div>
                @error('price')
                    <div class="bg-danger p-2 m-2">{{ $message }}</div>
                @enderror
                <div class="mb-3">
                    <label for="product_category" class="form-label">Product Category</label>
                    <select class="form-select" aria-label="product_category" id="product_category"
                        name="product_category">
                        <option disabled>Open this select menu</option>
                        <option  {{ old('product_category') == 1 ? "selected" : "" }} value="1">House</option>
                        <option  {{ old('product_category') == 2 ? "selected" : "" }} value="2">Snowman</option>
                    </select>
                </div>
                @error('product_category')
                    <div class="bg-danger p-2 m-2">{{ $message }}</div>
                @enderror
                <div class="mb-3">
                    <label for="product_image_url" class="form-label">Select product image</label>
                    <input class="form-control" type="file" name="product_image_url" id="product_image_url" value="{{ old('product_image_url') }}">
                </div>
                @error('product_image_url')
                    <div class="bg-danger p-2 m-2">{{ $message }}</div>
                @enderror
                <div class="mb-3">
                    <button type="submit" class="btn btn-success">Primary</button>
                </div>
            </form>
        </div>
    </div>


</x-app-layout>
