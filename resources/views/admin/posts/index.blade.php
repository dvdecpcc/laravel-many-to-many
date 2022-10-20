 @extends('layouts.app')
 @section('content')
    <div class="d-flex justify-content-end mb-3">
        <a class="btn btn-primary" href="{{route('admin.posts.create')}}">Add a New Post </a>
    </div>
    <div class="container">
        <table class="table table-dark table-striped">
            <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Title</th>
                  <th scope="col">Slug</th>
                  <th scope="col">Category </th>
                  <th scope="col">Tags  </th>
                  <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <th scope="row">{{$post->id}}</th>
                        <td>{{$post->title}}</td>
                        <td>{{$post->content}}</td>
                        <td>{{$post->slug}}</td>
                        <td>{{($post->category)?$post->category->name:'-'}}</td>
                        <td>
                            @foreach ($post->tags as $tag)
                                {{$tag->name}}; 
                            @endforeach
                        </td> 

                        <td class="d-flex">
                            <a href="{{route('admin.posts.show', ['post'=>$post->id])}}" class="btn btn-primary">Show</a>
                            <a href="{{route('admin.posts.edit', ['post'=>$post->id])}}" class="btn btn-light">Edit</a>
                            <a href="#" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    
                @endforeach
            </tbody>
        </table>
    </div>
 @endsection