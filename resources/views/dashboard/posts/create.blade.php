@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Add New List</h1>
    </div>

    <div class="col-lg-8">
        <form method="post" action="/dashboard/posts" class="mb-5">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" autofocus value="{{ old('title') }}">
                @error('title')
                    <div class="invalid-feedback">
                    {{ $message }}
                    </div>
                @enderror
            </div>
            

            <div class="mb-3">
                <label for="slug" class="form-label">Slug</label>
                <input type="text" class="form-control" id="slug" name="slug" disabled readonly value="{{ old('slug') }}">
            </div>

            <div class="mb-3">
                <label for="body" class="form-label">To Do List</label>
                @error('body')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
                <input id="body" type="hidden" name="body" value="{{ old('body') }}">
                <trix-editor input="body"></trix-editor>
                
            </div>
            
            <a href="/dashboard/posts" class="btn btn-primary fw-semibold mb-5"><span data-feather="arrow-left"></span> Back</a>

            <button type="submit" class="btn btn-primary fw-semibold float-end mb-5"><span data-feather="plus"></span> Add List</button>
        </form>

    </div>

    <script>
        const title = document.querySelector('#title');
        const slug = document.querySelector('#slug');

        title.addEventListener('change', function() {
            fetch('/dashboard/posts/checkSlug?title=' + title.value)
            .then(response => response.json())
            .then(data => slug.value = data.slug)
        });

        document.addEventListener('trik-file-accept', function(e) {
            e.preventDefault();
        })

    </script>


@endsection