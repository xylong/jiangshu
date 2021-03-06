@extends('layouts.app')

@section('content')
<div class="col-sm-8 blog-main">
    <div class="blog-post">
        <div style="display:inline-flex">
            <h2 class="blog-post-title">{{ $post->title }}</h2>
            <a style="margin: auto"  href="{{ route('posts.edit', $post->id) }}">
                <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
            </a>

            <a style="margin: auto" onclick="document.getElementById('delete-post').submit();">
                <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
            </a>

            <form action="{{ route('posts.destroy', $post->id) }}" method="post" id="delete-post" style="display: none;">
                {{ method_field('DELETE') }}
                {{ csrf_field() }}
            </form>
        </div>

        <p class="blog-post-meta">
            {{ $post->created_at->toFormattedDateString() }}
            <a href="#">Kassandra Ankunding2</a>
        </p>

        {!! $post->content !!}

        <div>
            <a href="/posts/62/zan" type="button" class="btn btn-primary btn-lg">赞</a>
        </div>
    </div>

    <div class="panel panel-default">
        <!-- Default panel contents -->
        <div class="panel-heading">评论</div>

        <!-- List group -->
        <ul class="list-group">
            <li class="list-group-item">
                <h5>2017-05-28 10:15:08 by Kassandra Ankunding2</h5>
                <div>
                    这是第一个评论这是第一个评论这是第一个评论这是第一个评论这是第一个评论这是第一个评论这是第一个评论这是第一个评论这是第一个评论
                </div>
            </li>
        </ul>
    </div>

    <div class="panel panel-default">
        <!-- Default panel contents -->
        <div class="panel-heading">发表评论</div>

        <!-- List group -->
        <ul class="list-group">
            <form action="/posts/comment" method="post">
                <input type="hidden" name="_token" value="4BfTBDF90Mjp8hdoie6QGDPJF2J5AgmpsC9ddFHD">
                <input type="hidden" name="post_id" value="62"/>
                <li class="list-group-item">
                    <textarea name="content" class="form-control" rows="10"></textarea>
                    <button class="btn btn-default" type="submit">提交</button>
                </li>
            </form>

        </ul>
    </div>

</div>
@endsection
