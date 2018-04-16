@extends('layouts.master')

@section('title','Post list')

@section('content')
    @foreach($posts as $post)
        <b>{{ $post->title }}</b>
        <p>{{ $post->content }}</p>
        <hr>
    @endforeach

    {{ $posts->links() }}

@endsection
