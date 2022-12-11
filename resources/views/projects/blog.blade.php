@extends('layout.master')
@section('content')
@foreach($posts as $post)
<a href="blog/{{ $post->slug }}" style="text-decoration: none; color: inherit;">
    <div class="card mb-3" style="border-radius: 14px;">
        <div style="
        border-radius: 14px 14px 0 0;
        min-height: 300px;
        background-image: url(/storage/wink/images/URSojItfzM3gW08tP4eyxnvHjnbzatJymFeve5Ow.png);
        height: 100%;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    "></div>
        <div class="card-body px-4">
            <h5 class="fw-bold card-title">{{$post->title}}</h5>
            <p class="card-text">{{ $post->excerpt }}</p>
            <p class="card-text"><small class="text-muted">
                    <?php echo date("M, d Y", strtotime($post->publish_date)) ?>
                </small>
            </p>
        </div>
    </div>
</a>
@endforeach
@endsection