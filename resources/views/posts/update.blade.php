@extends('layouts.master')
@section('content')
        <h2>Edit Posts </h2>
        <form action="{{route('posts.edit', $post->id)}}" method="post">
            @csrf
            <div class="form-group">
                <label class="from-label" >Title</label>
                <input type="text" value="{{ $post->title }}" name="title" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Desc</label>
                <input type="text" value="{{ $post->desc }}}" name="desc" class="form-control" >
            </div>
            <div class="form-group">
                <label for="">Content</label>
                <textarea type="text" name="contentPost" class="form-control" > {{ $post->content }}</textarea>
            </div>
                <div class="mb-3 form-group">
                <button type="submit" class="btn btn-success">Submit</button>
                <a class="btn btn-info" href="{{ route('posts.showList') }}">Cancel</a>
            </div>
        </form>
@endsection
