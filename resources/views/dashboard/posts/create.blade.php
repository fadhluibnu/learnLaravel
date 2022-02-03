@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Create New Post</h1>
    </div>

    <div class="col-lg-8">
        <form method="POST" action="/dashboard/posts" class="mb-5">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title"
                    autofocus value="{{ @old('title') }}" required>
                @error('title')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="slug" class="form-label">Slug</label>
                <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug"
                    {{ @old('slug') }} required>
                {{-- <div class="align-items-center d-none" id="spinner-cek">
                    <div class="spinner-grow spinner-grow-sm" role="status">
                    </div>
                    <span class="ms-2">Mengecek ...</span>
                </div> --}}
                <div id="relatime-response" class="mt-1">
                </div>
                @error('slug')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="Category" class="form-label">Category</label>
                @error('body')
                    <p class="text-denger">{{ $message }}</p>
                @enderror
                <select class="form-select" name="category_id">
                    @foreach ($categories as $category)
                        @if (old('category') == $category->id)
                            <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                        @endif
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="Body" class="form-label">Body</label>
                <input id="body" type="hidden" name="body" value="{{ @old('body') }}">
                <trix-editor input="body"></trix-editor>
            </div>
            <button type="submit" id="submit" class="btn btn-primary">Create post</button>
        </form>
    </div>

@endsection
