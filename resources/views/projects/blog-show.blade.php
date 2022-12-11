@extends('layout.master-blog')

@section('content')
<h1 class="fw-bold">{{ $post->title }}</h1>
<small class="text-muted">
    <?php echo date("M, d Y", strtotime($post->publish_date)) ?>
</small>
<img class="img-fluid my-5" src="{{ $post->featured_image }}">
<div style="text-align: justify;">
    {!! $post->body !!}
</div>
@endsection