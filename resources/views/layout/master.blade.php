<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description"
        content="Experienced Software Engineer with a demonstrated history of working in the tech industry. Skilled in fixing bugs and creating new features with my imagination.">
    <meta name="keywords" content="news, articles, blog">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="<?php echo url("");?>">

    <meta property="og:title" content="Hafizh Pratama | Software Engineer">
    <meta name="twitter:title" content="Hafizh Pratama | Software Engineer">

    <meta name="twitter:description"
        content="Experienced Software Engineer with a demonstrated history of working in the tech industry. Skilled in fixing bugs and creating new features with my imagination.">
    <meta name="og:description"
        content="Experienced Software Engineer with a demonstrated history of working in the tech industry. Skilled in fixing bugs and creating new features with my imagination.">

    <meta name="twitter:image"
        content="https://copyfol.io/_next/image?url=https%3A%2F%2Fcopyfolio.s3.us-east-1.amazonaws.com%2Fclay2h9b1218308mpkeifvaht%2Fcropped_clayshmf1000o08mj50erewiv.jpeg&w=256&q=75">
    <meta property="og:image"
        content="https://copyfol.io/_next/image?url=https%3A%2F%2Fcopyfolio.s3.us-east-1.amazonaws.com%2Fclay2h9b1218308mpkeifvaht%2Fcropped_clayshmf1000o08mj50erewiv.jpeg&w=256&q=75">


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