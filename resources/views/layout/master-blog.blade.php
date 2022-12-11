<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="{{ $post->excerpt }}">
    <meta name="keywords" content="news, articles, blog">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="<?php echo url("projects/blog/$post->slug");?>">

    <meta property="og:title" content="{{ $post->title }} | Hafizh Pratama">
    <meta name="twitter:title" content="{{ $post->title }} | Hafizh Pratama">

    <meta name="twitter:description" content="{{ $post->excerpt }}">
    <meta name="og:description" content="{{ $post->excerpt }}">

    <meta name="twitter:image" content="<?php echo url("$post->featured_image")?>">
    <meta property="og:image" content="<?php echo url("$post->featured_image")?>">


    <meta name="template_type" content="article_blog" />
    <meta property='og:type' content="article" />
    <meta name='type' content="article" />
    <meta name="meta-section" content="blog">
    <meta name="meta-branding" content="">
    <meta name='theme' content="blog">
    <meta name="twitter:card" content="summary_large_image">


    @include('layout.styles')
</head>

<body class="col-lg-8 mx-auto p-4 py-md-3" style="background-color: #f6f8fd; font-family: 'Poppins', sans-serif;">
    @include('layout.header')
    @yield('content')
    @include('layout.footer')
    @include('layout.scripts')
</body>

</html>