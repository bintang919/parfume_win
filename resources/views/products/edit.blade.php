@extends('layouts.app')

@section('css')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />
@endsection
@section('content_header')
    <h1>{{ __('Edit Product') }}</h1>
@endsection

@section('content_body')
    <form action="{{ route('products.update', $product->product_id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="card">
            <div class="card-body">
                <div class="form-group">
                    <label for="product_name">{{ __('Product Name') }}</label>
                    <input type="text" id="product_name" name="product_name" 
                        class="form-control @error('product_name') is-invalid @enderror" 
                        value="{{ old('product_name', $product->product_name) }}" required>
                    @error('product_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="category_id">{{ __('Category') }}</label>
                    <select id="category_id" name="category_id" class="form-control @error('category_id') is-invalid @enderror" required>
                        <option value="">-- Select Category --</option>
                        @foreach($categories as $category)
                            <option value="{{ $category->categories_id }}" {{ (old('category_id', $product->category_id) == $category->categories_id) ? 'selected' : '' }}>
                                {{ $category->categories_name }}
                            </option>
                        @endforeach
                    </select>
                    @error('category_id')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="product_description">{{ __('Description') }}</label>
                    <textarea id="product_description" name="product_description" 
                        class="form-control @error('product_description') is-invalid @enderror" 
                        rows="4">{{ old('product_description', $product->product_description) }}</textarea>
                    @error('product_description')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="product_price">{{ __('Price') }}</label>
                    <input type="number" id="product_price" name="product_price" 
                        class="form-control @error('product_price') is-invalid @enderror" 
                        value="{{ old('product_price', $product->product_price) }}" required>
                    @error('product_price')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group prod-img">
                    <label for="product_image">{{ __('Image') }}</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" id="product_image" name="product_image" class="custom-file-input @error('product_image') is-invalid @enderror">
                            <label class="custom-file-label" for="product_image">Choose file</label>
                        </div>
                            <div class="input-group-append">
                            <span class="input-group-text">Upload</span>
                        </div>
                    </div>
                    <label>Preview</label>
                    @if($product->product_image)
                        <div class="current-img">
                            <img src="{{ asset('storage/' . $product->product_image) }}" alt="Current Image" style="width: 100px; height: auto; margin-bottom: 10px;">
                        </div>
                    @endif
                    @error('product_image')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="url_tiktok">{{ __('TikTok URL') }}</label>
                    <input type="url" id="url_tiktok" name="url_tiktok" 
                        class="form-control @error('url_tiktok') is-invalid @enderror" 
                        value="{{ old('url_tiktok', $product->url_tiktok) }}">
                    @error('url_tiktok')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="url_shopee">{{ __('Shopee URL') }}</label>
                    <input type="url" id="url_shopee" name="url_shopee" 
                        class="form-control @error('url_shopee') is-invalid @enderror" 
                        value="{{ old('url_shopee', $product->url_shopee) }}">
                    @error('url_shopee')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="url_tokopedia">{{ __('Tokopedia URL') }}</label>
                    <input type="url" id="url_tokopedia" name="url_tokopedia" 
                        class="form-control @error('url_tokopedia') is-invalid @enderror" 
                        value="{{ old('url_tokopedia', $product->url_tokopedia) }}">
                    @error('url_tokopedia')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">{{ __('Update') }}</button>
                <a href="{{ route('products.index') }}" class="btn btn-secondary">{{ __('Cancel') }}</a>
            </div>
        </div>
    </form>
    
    <script>
        // Optional: JavaScript untuk preview gambar
        document.getElementById('product_image').addEventListener('change', function(event) {
            const file = event.target.files[0];
            const reader = new FileReader();

            reader.onload = function(e) {
                // Menampilkan gambar preview
                const currentImageDiv = document.querySelector('.current-img');
                const previewImage = document.createElement('img');
                previewImage.src = e.target.result;
                previewImage.style.width = '100px';
                previewImage.style.height = 'auto';
                const imgTag = currentImageDiv.querySelector('img');
                if (imgTag) {
                    imgTag.remove(); // Hapus tag img
                }
                document.querySelector('.current-img').appendChild(previewImage);
            };

            if (file) {
                reader.readAsDataURL(file);
            }
        });
    </script>
@endsection
@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
<script>
    $(document).ready(function() {
        $('#category_id').select2({
            placeholder: "Select a category",
            allowClear: true
        });
    });
</script>
@endsection
