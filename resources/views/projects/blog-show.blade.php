@extends('layout.master')
@section('content')
<h1 class="fw-bold">{{ $post->title }}</h1>
<div class="row">
    <div class="col">
        <small class="text-muted">
            <?php echo date("M, d Y", strtotime($post->publish_date)) ?> —
        </small>
        @foreach ($post->tags as $tag)
        <span><a style="text-decoration: underline; font-size: 14px; color: #6c757d!important;" href="/blog/tag/{{$tag->slug}}">#{{$tag->name}}</a></span>
        @endforeach
    </div>
    <div class="col text-end">
        <span class="text-muted" style="text-align: right; font-size: 14px;">
            {{$estimate}}
        </span>
    </div>
</div>
<div class="mt-3">
    <img style="width: 40px;" class="rounded-circle" src="{{$author->avatar}}" alt="img-author">
    <span style="font-size: 14px; margin-left: 8px;">By <a style="text-decoration: none;" href="/blog/author/{{$author->slug}}"><b class="text-danger">{{$author->name}}</b></a></span>
</div>
<img class="img-fluid my-5" src="{{ $post->featured_image }}">
<div class="pb-5" style="text-align: justify;">
    {!! $post->body !!}
</div>
<div class="row g-0 border-top border-bottom mt-4 align-items-center">
    @if (isset($previous))
    <div class="col-6 border-end">
        <div class="row align-items-center">
            <div class="col-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-chevron-left" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z" />
                </svg>
            </div>
            <div class="col-10">
                <div class="p-3 bg-light"><a style="text-decoration: none; color: #212529;"
                        href="/blog/{{$previous->slug}}">{{$previous->title}}</a></div>
            </div>
        </div>
    </div>
    @else
    <div class="col-6 border-end">
        <div class="p-3 bg-light"></div>
    </div>
    @endif
    @if (isset($next))
    <div class="col-6">
        <div class="row align-items-center">
            <div class="col-10">
                <div class="p-3 bg-light"><a style="text-decoration: none; color: #212529;"
                        href="/blog/{{$next->slug}}">{{$next->title}}</a></div>
            </div>
            <div class="col-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-chevron-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                </svg>
            </div>
        </div>
    </div>
    @else
    <div class="col-6">
        <div class="p-3 bg-light"></div>
    </div>
    @endif
</div>
@endsection