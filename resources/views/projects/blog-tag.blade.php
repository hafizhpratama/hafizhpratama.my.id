@extends('layout.master')
@section('content')
<div class="overlay">
  <div class="spinner-border" role="status">
  </div>
</div>
<h2 class="fw-bold mb-3 color-black" style="font-size: 20px;"><u>Tag</u></h2>
<h1 style="font-size: 20px;"
  class="fw-bold mb-5 d-inline-flex mb-3 px-2 py-1 fw-semibold text-primary bg-primary bg-opacity-10 border border-primary border-opacity-10 rounded-2">
  #{{ $tag_name }}</h1>
<h2 class="fw-bold mb-4 color-black" style="font-size: 20px;">All the Latest</h2>
@foreach($posts as $post)
<a href="/blog/{{ $post->slug }}" style="text-decoration: none; color: inherit;">
  <div class="card mb-4 hover-white" style="border-radius: 14px; border:none;">
    <div class="row g-0">
      <div class="col-md-4">
        <div
          style="border-radius: 14px 0 0 14px; min-height: 100%; background-image: url({{$post->featured_image}}); height: 100%; background-position: center; background-repeat: no-repeat; background-size: cover;">
        </div>
      </div>
      <div class="col-md-8 p-4 my-auto">
        <div class="card-body">
          <h5 class="card-title fw-bold color-black">{{$post->title}}</h5>
          <p class="card-text color-black">{{ $post->excerpt }}</p>
          <p class="card-text"><small class="text-muted">
              <?php echo date("M, d Y", strtotime($post->publish_date)) ?>
            </small></p>
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