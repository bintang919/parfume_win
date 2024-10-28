@extends('layouts.app')

@section('title', 'Products')

@section('content_header_title', 'Products')
@section('content_header_subtitle', 'List of Products')

@section('content_body')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Products List</h3>
            <!-- Notifikasi -->
            @if (session('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
            @endif
            <div class="card-tools">
                <a href="{{ route('products.create') }}" class="btn btn-primary">Add Product</a>
            </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No</th> <!-- Ganti "ID" dengan "No" -->
                        <th>Name</th>
                        <th>Category</th>
                        <th>Description</th>
                        <th>Price</th>
                        <th>Image</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($products as $index => $product)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $product->product_name }}</td>
                            <td>{{ $product->category->categories_name }}</td>
                            <td>{{ $product->product_description }}</td>
                            <td>{{ number_format($product->product_price, 2) }}</td>
                            <td>
                                @if ($product->product_image)
                                    <img src="{{ asset('storage/' . $product->product_image) }}" alt="{{ $product->product_name }}" style="width: 100px; height: auto;">
                                @else
                                    {{ __('No Image') }}
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('products.edit', $product->product_id) }}" class="btn btn-warning">Edit</a>
                                <form action="{{ route('products.destroy', $product->product_id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <!-- Pagination Links -->
        </div>
        <!-- /.card-body -->
    </div>
@stop

@push('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@endpush

@push('js')
    <script>
        $(function () {
            // Optionally add some JS here
        });
    </script>
@endpush
