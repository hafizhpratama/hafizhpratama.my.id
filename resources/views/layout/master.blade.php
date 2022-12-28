<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="keywords" content="news, articles, blog">
    <meta name="robots" content="index, follow">

    @if (isset($url))
        @if ($url == "blog-show")
            <meta property="og:title" content="{{ $post->title }} | Hafizh Pratama">
            <meta name="twitter:title" content="{{ $post->title }} | Hafizh Pratama">
            <meta name="twitter:description" content="{{ $post->excerpt }}">
            <meta name="og:description" content="{{ $post->excerpt }}">
            <meta name="twitter:image" content="<?php echo url("$post->featured_image")?>">
            <meta property="og:image" content="<?php echo url("$post->featured_image")?>">
            <meta name="description" content="{{ $post->excerpt }}">
            <link rel="canonical" href="<?php echo url("blog/$post->slug");?>">
        @elseif($url == "blog")
            <meta property="og:title" content="Hafizh Pratama | Software Engineer">
            <meta name="twitter:title" content="Hafizh Pratama | Software Engineer">
            <meta name="twitter:description" content="Blog's Hafizh Pratama">
            <meta name="og:description" content="Blog's Hafizh Pratama">
            <meta name="twitter:image" content="<?php echo url("/images/foto_cv.jpeg")?>">
            <meta property="og:image" content="<?php echo url("/images/foto_cv.jpeg")?>">
            <meta name="description" content="Blog's Hafizh Pratama">
            <link rel="canonical" href="<?php echo url("/blog");?>">
        @elseif($url == "certificates")
            <meta property="og:title" content="Hafizh Pratama | Software Engineer">
            <meta name="twitter:title" content="Hafizh Pratama | Software Engineer">
            <meta name="twitter:description" content="Certificates's Hafizh Pratama">
            <meta name="og:description" content="Certificates's Hafizh Pratama">
            <meta name="twitter:image" content="<?php echo url("/images/foto_cv.jpeg")?>">
            <meta property="og:image" content="<?php echo url("/images/foto_cv.jpeg")?>">
            <meta name="description" content="Certificates's Hafizh Pratama">
            <link rel="canonical" href="<?php echo url("/certificates");?>">
        @endif
    @else
        <meta property="og:title" content="Hafizh Pratama | Software Engineer">
        <meta name="twitter:title" content="Hafizh Pratama | Software Engineer">
        <meta name="twitter:description" content="Experienced Software Engineer with a demonstrated history in the tech industry. Skilled in bug fixing and feature development with a strong emphasis on creativity and efficiency.">
        <meta name="og:description" content="Experienced Software Engineer with a demonstrated history in the tech industry. Skilled in bug fixing and feature development with a strong emphasis on creativity and efficiency.">
        <meta name="twitter:image" content="<?php echo url("/images/foto_cv.jpeg")?>">
        <meta property="og:image" content="<?php echo url("/images/foto_cv.jpeg")?>">
        <meta name="description" content="Experienced Software Engineer with a demonstrated history in the tech industry. Skilled in bug fixing and feature development with a strong emphasis on creativity and efficiency.">
        <link rel="canonical" href="<?php echo url("");?>">
    @endif

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