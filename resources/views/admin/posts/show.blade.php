@extends('layouts.app')
@section('content')

    <div class="container">
        <div>
            <span class="fw-bolder">Title:</span>
            {{$post->title}}
        </div>
        <div>
            <span>Content</span>
            {{$post->content}}
        </div>
        <div>
            <span>Slug:</span>
            {{$post->slug}}
        </div>
        <div>
            <span>Category:</span>
            {{$post->category}}
        </div>
        <div>
            <span>Tags:</span>
            @foreach ($post->tags as $tag)
                {{$tag->name}}
            @endforeach
        </div>
        <a class="btn btn-primary" href="{{route('admin.posts.index')}}">Go Back</a>
    </div>

@endsection