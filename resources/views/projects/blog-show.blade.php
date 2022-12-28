@extends('layout.master')
@section('content')
<h1 class="fw-bold color-black">{{ $post->title }}</h1>
<div class="row">
    <div class="col">
        <small class="text-muted">
            <?php echo date("M, d Y", strtotime($post->publish_date)) ?> —
        </small>
        @foreach ($post->tags as $tag)
        <span><a style="text-decoration: underline; font-size: 14px; color: #6c757d!important;"
                href="/blog/tag/{{$tag->slug}}">#{{$tag->name}}</a></span>
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
    <span class="color-black" style="font-size: 14px; margin-left: 8px;">By <a style="text-decoration: none;"
            href="/blog/author/{{$author->slug}}"><b class="text-danger">{{$author->name}}</b></a></span>
</div>
<img class="img-fluid my-5" src="{{ $post->featured_image }}">
<div class="pb-4 color-black" style="text-align: justify;">
    {!! $post->body !!}
</div>
<div class="pb-5">
    <span class="color-black">Share : </span>
    <a href="http://www.facebook.com/sharer.php?u=<?php echo url("/blog/$post->slug") ?>" class="fa">
        <button type="button" class="btn" style="background-color: #3B5998; color: white;">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook"
                viewBox="0 0 16 16">
                <path
                    d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z">
                </path>
            </svg>
        </button>
    </a>
    <a href="http://twitter.com/share?url=<?php echo url("/blog/$post->slug") ?>" class="fa">
        <button type="button" class="btn" style="background-color: #55ACEE; color: white;">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter"
                viewBox="0 0 16 16">
                <path
                    d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z">
                </path>
            </svg>
        </button>
    </a>
    <a href="http://www.linkedin.com/shareArticle?mini=true&url=<?php echo url("/blog/$post->slug") ?>" class="fa">
        <button type="button" class="btn" style="background-color: #007bb5; color: white;">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-linkedin"
                viewBox="0 0 16 16">
                <path
                    d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z">
                </path>
            </svg>
        </button>
    </a>
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
                <div class="p-3 bg-light"><a class="color-black" style="text-decoration: none;"
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
                <div class="p-3 bg-light"><a class="color-black" style="text-decoration: none;"
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