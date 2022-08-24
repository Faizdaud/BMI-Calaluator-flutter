 


@extends('layouts.layout')  


@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 text-center pt-5">
            <h1 class="display-one mt-5">Blog Posts</h1>
            <p>This awesome blog has many articles, click the button below to see them</p>
            <br>
            <figure>
              <img>
            </figure>
        </div>

        @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if (session('fail'))
    <div class="alert alert-danger">
        {{ session('fail') }}
    </div>
@endif

        <div class="col-12 text-center pt-5">
          <a href="{{url('blog')}}" class="more">
            <button type="button" class="btn btn-outline-primary">
              <i class="bi bi-bookmark-plus-fill text-primary"></i>Create
            </button>
        </a>
          <button type="button" class="btn btn-danger">
            <i class="bi bi-trash text-light"></i> Delete
          </button>
        </div>

        @foreach ($posts as $post)
        <div class="card mx-auto my-2" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title">{{$post->title}}</h5>
              <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
              <p class="card-text">{{ Str::limit($post->content, 150) }}</p>
              <a href="{{url('blog', $post->id )}}" class="more">
                <button type="button" class="btn btn-primary">Show</button>
              </a>
            </div>
          </div>
        @endforeach

    </div>
</div>
@endsection




