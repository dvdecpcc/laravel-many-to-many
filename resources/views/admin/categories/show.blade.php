@extends('layouts.app')
@section('content')

    <div class="container">
        <h2>
            {{$category->name}}
        </h2>
    
        <div>
            <span>Slug:</span>
            {{$category->slug}}
        </div>
        <div class="container">
            <table class="table table-dark table-striped">
                <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Title</th>
                      <th scope="col">Slug</th>
                    </tr>
                </thead>
        
                <tbody>
                    @foreach ($category->post as $post)

                        <tr>
                            <th scope="row">{{$post->id}}</th>
                            <td>{{$post->title}}</td>
                            <td>{{$post->slug}}</td>
                        </tr>
                        
                    @endforeach
                </tbody>
            </table>
        </div>
            
        @endforeach
 
        <a class="btn btn-primary" href="{{route('admin.categories .index')}}">Go Back</a>
    </div>

@endsection