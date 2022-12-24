<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <url>
        <loc>http://hafizhpratama.my.id/</loc>
        <lastmod>2022-12-18T07:47:39+00:00</lastmod>
        <priority>1.00</priority>
    </url>
    <url>
        <loc>http://hafizhpratama.my.id/blog</loc>
        <lastmod>2022-12-18T07:47:39+00:00</lastmod>
        <priority>0.80</priority>
    </url>
    <url>
        <loc>http://hafizhpratama.my.id/certificates</loc>
        <lastmod>2022-12-18T07:47:39+00:00</lastmod>
        <priority>0.80</priority>
    </url>
    <url>
        <loc>http://hafizhpratama.my.id/projects/openai</loc>
        <lastmod>2022-12-18T07:47:39+00:00</lastmod>
        <priority>0.80</priority>
    </url>
    @foreach ($posts as $post)
    <url>
        <loc>{{ url('/') }}/blog/{{ $post->slug }}</loc>
        <lastmod>{{ $post->updated_at->tz('UTC')->toAtomString() }}</lastmod>
        <changefreq>weekly</changefreq>
        <priority>0.64</priority>
    </url>
    @endforeach
</urlset>