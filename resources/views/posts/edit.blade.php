@extends('layouts.app')

@section('content')
    <div class="col-sm-8 blog-main">
        <form action="{{ route('posts.update', $post->id) }}" method="POST">
            {{ method_field('PUT') }}
            {{ csrf_field() }}

            <div class="form-group">
                <label>标题</label>
                <input name="title" type="text" class="form-control" value="{{ old('title',$post->title) }}">
            </div>

            <div class="form-group">
                <label>内容</label>
                <textarea id="content" name="content" class="form-control" style="height:400px;max-height:500px;">
                    {{ old('content', $post->content) }}
                </textarea>
            </div>

            <button type="submit" class="btn btn-default">提交</button>
        </form>
        <br>
    </div>
@endsection
