@extends('layouts.app')

@section('title', 'Categories')

@section('content_header_title', 'Categories')
@section('content_header_subtitle', 'List of Categories')

@section('content_body')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Categories List</h3>
            <!-- Notifikasi -->
            @if (session('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
            @endif
            <div class="card-tools">
                <a href="{{ route('categories.create') }}" class="btn btn-primary">Add Category</a>
            </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($categories as $index => $category)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $category->categories_name }}</td>
                            <td>{{ $category->categories_description }}</td>
                            <td>
                                <a href="{{ route('categories.edit', $category->categories_id) }}" class="btn btn-warning">Edit</a>
                                <form action="{{ route('categories.destroy', $category->categories_id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
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
