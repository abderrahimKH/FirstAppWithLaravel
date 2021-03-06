@extends('layouts.admin')

@section('content')

    <h1> Posts </h1>

    <table class="table">
        <tr>
            <th>Id</th>
            <th>Owner </th>
            <th>Category </th>
            <th>Photo </th>
            <th>Title</th>
            <th>Body</th>
            <th>Created </th>
            <th>Updated </th>
        </tr>
        <tbody>
            @if($posts)
                @foreach($posts as $post)
                  <tr>
                      <td>{{$post->id}}</td>
                      <td>{{$post->user->name}}</td>
                      <td>{{$post->category ? $post->category->name : 'Uncategorized' }}</td>
                      <td> <img height="60" src="{{$post->photo ?  $post->photo->file  : "http://placehold.it/400x400" }}" alt=""></td>
                      <td>{{$post->title}}</td>
                      <td>{{$post->body}}
                      <td>{{$post->created_at->diffForHumans()}}</td>
                      <td>{{$post->updated_at->diffForHumans()}}</td>
                  </tr>
                @endforeach
            @endif
        </tbody>
    </table>

@stop