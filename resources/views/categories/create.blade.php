@extends('layouts.app')

@section('content_header')
    <h1>{{ __('Create Category') }}</h1>
@endsection

@section('content_body')
    <form action="{{ route('categories.store') }}" method="POST">
        @csrf
        <div class="card">
            <div class="card-body">
                <div class="card-body" style="width: 800px; height: 100px">
                    <div class="form-group">
                        <label for="categories_name">{{ __('Category Name') }}</label>
                        <input type="text" id="categories_name" name="categories_name" 
                            class="form-control @error('categories_name') is-invalid @enderror" 
                            value="{{ old('categories_name') }}" required>
                        @error('categories_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="card-body" style="width: 800px">
                    <div class="form-group">
                        <label for="categories_description">{{ __('Description') }}</label>
                        <textarea id="categories_description" name="categories_description" 
                                class="form-control @error('categories_description') is-invalid @enderror" 
                                rows="4">{{ old('categories_description') }}</textarea>
                        @error('categories_description')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>
                <a href="{{ route('categories.index') }}" class="btn btn-danger">{{ __('Cancel') }}</a>
            </div>
        </div>
    </form>
@endsection
