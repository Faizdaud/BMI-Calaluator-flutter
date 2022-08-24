
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
             
                <form name="add-blog-post-form" id="add-blog-post-form"  action={{url('/blog/{blogPost}/', $post->id )}} method="PUT">

                    @csrf

                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Title</label>
                      <input type="text" class="form-control" name="title" id="title" aria-describedby="title" value="{{$post->title}}">
                      <div id="title-prompt" class="form-text">What is the content about?</div>
                    </div>
                    <div class="form-group">
                        <label for="content">Content</label>
                        <textarea class="form-control" name="content" id="content" rows="3">
                            {{ old($post->content) }}
                        </textarea>
                      </div>
                   
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>

            </div>
          </div>

    </div>
</div>
@endsection