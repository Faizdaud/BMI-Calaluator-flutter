
@include('layouts.navbar')   

@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 text-center pt-5">
            <h1 class="display-one mt-5">{{ config('app.name') }}</h1>
            <p>This awesome blog has many articles, click the button below to see them</p>
            <br>
            <figure>
              <img>
            </figure>
        </div>

        <div class="card mx-auto my-2">
            <div class="card-body">
              <h5 class="card-title">{{$post->title}}</h5>
              <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
              <p class="card-text">{{ $post->content }}</p>
              <a href="{{url('/blog/edit', $post->id )}}" class="more">
              <button type="button" class="btn btn-primary">Edit</button>
              </a>
              <a href="{{url('/delete/blog', $post->id )}}" class="more">
                <button type="button" class="btn btn-danger">
                    <i class="bi bi-trash text-light"></i> Delete
                </button>
              </a>
            </div>
          </div>

    </div>
</div>
@endsection