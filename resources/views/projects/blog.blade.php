@extends('layout.master')
@section('content')
<h2 class="fw-bold mb-5 color-black" style="font-size: 20px;"><u>Blog</u></h2>

<form action="/search" method="GET" class="form-inline">
    <div class="input-group">
        <input style="border-radius: 14px 0 0 14px;" type="text" name="search" @if (isset($search)) value="{{$search}}"
            @else placeholder="Search" @endif class="form-control p-2">
        <div class="input-group-append">
            <button style="border-radius: 0 14px 14px 0;" type="submit" class="btn btn-primary p-2">Search</button>
        </div>
    </div>
</form>

<div class="mb-5">
    <div class="mt-4">
        <span class="color-black">Recommended topics,</span><br>
    </div>
    @foreach ($tags as $tag)
    <span
        class="fw-bold mt-2 d-inline-flex px-2 py-1 fw-semibold text-primary bg-primary bg-opacity-10 border border-primary border-opacity-10 rounded-2"><a
            style="text-decoration: underline; font-size: 14px;"
            href="/blog/tag/{{$tag->slug}}">#{{$tag->name}}</a></span>
    @endforeach
</div>

@if (isset($search))
<div class="mb-3">
    <span>Search Results for <b>{{$search}}</b> </span>
</div>
@endif

@foreach($posts as $post)
<a href="/blog/{{ $post->slug }}" style="text-decoration: none; color: inherit;">
    <div class="card mb-4" style="border-radius: 14px; border:none;">
        <div style="
        border-radius: 14px 14px 0 0;
        min-height: 300px;
        background-image: url({{$post->featured_image}});
        height: 100%;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    "></div>
        <div class="card-body px-4">
            <h5 class="fw-bold card-title color-black">{{$post->title}}</h5>
            <p class="card-text color-black">{{ $post->excerpt }}</p>
            <p class="card-text"><small class="text-muted">
                    <?php echo date("M, d Y", strtotime($post->publish_date)) ?>
                </small>
            </p>
        </div>
    </div>
</a>
@endforeach
<div class="navigation-blog my-5 text-center">
    {{ $posts->links() }}
</div>
@endsection