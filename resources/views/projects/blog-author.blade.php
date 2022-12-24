@extends('layout.master')
@section('content')
<h2 class="fw-bold mb-5" style="font-size: 20px;"><u>Author</u></h2>
<div style="border-radius: 14px;" class="row align-items-center mb-5 bg-white border py-4 px-4 mx-1">
    <div class="col-lg-2 col-4 text-center">
        <img style="width: 80px;" class="rounded-circle" src="{{ $author->avatar }}" alt="author-avatar">
    </div>
    <div class="col-lg-10 col-8 text-start remove-p-mb">
        <h1 style="font-size: 32px;" class="fw-bold">{{ $author->name }}</h1>
        {!! $author->bio !!}
    </div>
</div>

<h2 class="fw-bold mb-4" style="font-size: 20px;">All the Latest</h2>

@foreach($posts as $post)
<a href="/blog/{{ $post->slug }}" style="text-decoration: none; color: inherit;">
    <div class="card mb-4" style="border-radius: 14px;">
        <div class="row g-0">
          <div class="col-md-4">
            <div style="border-radius: 14px 0 0 14px; min-height: 100%; background-image: url({{$post->featured_image}}); height: 100%; background-position: center; background-repeat: no-repeat; background-size: cover;"></div>
          </div>
          <div class="col-md-8 py-4 my-auto">
            <div class="card-body">
              <h5 class="card-title fw-bold">{{$post->title}}</h5>
              <p class="card-text">{{ $post->excerpt }}</p>
              <p class="card-text"><small class="text-muted"><?php echo date("M, d Y", strtotime($post->publish_date)) ?></small></p>
            </div>
          </div>
        </div>
      </div>
</a>
@endforeach
<div class="navigation-blog my-5 text-center">
    {{ $posts->links() }}
</div>
@endsection