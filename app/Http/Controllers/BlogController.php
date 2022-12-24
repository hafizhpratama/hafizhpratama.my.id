<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Wink\WinkAuthor;
use Wink\WinkPost;
use Wink\WinkTag;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = WinkPost::with('tags')
            ->live()
            ->orderBy('publish_date', 'DESC')
            ->simplePaginate(10);

        return view('projects.blog', [
            'posts' => $posts,
            'url' => "blog"
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        // previous article
        $previous = WinkPost::live()->where('slug', '>', $slug)->first();

        // next article
        $next = WinkPost::live()->where('slug', '<', $slug)->first();

        // article
        $post = WinkPost::live()->whereSlug($slug)->firstOrFail();

        // author
        $author = WinkAuthor::whereId($post->author_id)->first();

        // estimate read
        $totalWords = str_word_count($post->body);
        $minutes = ceil($totalWords / 200);
        $minutes = max(1, $minutes);
        $estimate = ($minutes > 1) ? $minutes . ' minutes' : $minutes . ' minute';

        return view('projects.blog-show', [
            'post' => $post,
            'url' => "blog-show",
            'previous' => $previous,
            'next' => $next,
            'author' => $author,
            'estimate' => $estimate
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        //
    }

    public function search(Request $request)
    {
        $search = $request->input('search');

        $posts = WinkPost::with('tags')
            ->live()
            ->where('title', 'like', "%{$search}%")
            ->orderBy('publish_date', 'DESC')
            ->simplePaginate(10);

        return view('projects.blog', [
            'posts' => $posts,
            'url' => "blog",
            'search' => $search
        ]);
    }

    public function author($slug)
    {
        $author = WinkAuthor::whereSlug($slug)->first();

        $posts = WinkPost::with('tags')
            ->live()
            ->where('author_id', 'like', "%{$author->id}%")
            ->orderBy('publish_date', 'DESC')
            ->simplePaginate(10);

        return view('projects.blog-author', [
            'posts' => $posts,
            'author' => $author
        ]);
    }

    public function tag($slug)
    {
        $wink_tags = DB::table('wink_tags')->where('slug', $slug)->first();
        $tag_id = $wink_tags->id;
        $tag_name = $wink_tags->name;

        $wink_posts_tags = DB::table('wink_posts_tags')->where('tag_id', $tag_id)->get();

        foreach ($wink_posts_tags as $wink_post_tag) {
            $posts_ids[] = $wink_post_tag->post_id;
        }

        $posts = WinkPost::with('tags')
            ->live()
            ->whereIn('id', $posts_ids)
            ->orderBy('publish_date', 'DESC')
            ->simplePaginate(10);

        return view('projects.blog-tag', [
            'posts' => $posts,
            'tag_name' => $tag_name
        ]);
    }
}
