@extends('dashboard.layouts.main')

@section('container')

    <div class="container">
    <div class="row my-5">
        <div class="col-lg-8">
            <h5 class="mb-3">{{ $post->title }}</h5>

            <a href="/dashboard/posts" class="btn btn-success"><span data-feather="arrow-left"></span> Back to all my list</a>
            <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning"><span data-feather="edit"></span> Edit</a>
            <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                  @method('delete')
                  @csrf
                  <button class="btn btn-danger" onclick="return confirm('Are you sure?')">
                    <span data-feather="trash-2"></span> Delete
                  </button>
                </form>
        

        <article class="my-3 fs-6">
            {!! $post->body !!}
        </article>
        
        </div>
    </div>
</div>

@endsection