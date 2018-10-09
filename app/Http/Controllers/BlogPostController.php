<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\BlogPost;
use App\Models\BlogTag as BlogTag;
use Illuminate\Http\Request;
use Log;


class BlogPostController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, $viewType)
    {

        $viewName = "blog.blog-$viewType";
        $this->setView($viewName);
        $this->setData('posts', $this->getBlogPosts($request));
        return $this->respond(200);
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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //
    }

    /**
     * Display the specified resource.
     *
     * @param \App\BlogPost $blogPost
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, BlogPost $blogPost, $postid)
    {

        // dd([
        // $postid,
        // $request,
        // $blogPost::with([
        // 'author'
        // ])->find($postid)->toArray()
        // ]);
        $this->setView('blog.blog-single');
        $this->setData('post', $blogPost::with([
            'author',
            'category',
            'tags'
        ])->find($postid));
        // dd($this->data);
        return $this->respond(200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\BlogPost $blogPost
     * @return \Illuminate\Http\Response
     */
    public function edit(BlogPost $blogPost)
    {

        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\BlogPost $blogPost
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BlogPost $blogPost)
    {

        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\BlogPost $blogPost
     * @return \Illuminate\Http\Response
     */
    public function destroy(BlogPost $blogPost)
    {

        //
    }

    private function getBlogPosts(Request $request, $withDeleted = false)
    {

        $query = BlogPost::with([
            'author',
            'category',
            'tags'
        ]);

        if ($request->category)
        {
            $query->where('category_id', $request->category);
        }

        if ($request->tag)
        {
            $query->whereHas('tags', function ($query) use ($request)
            {
                $query->where('blog_tags.id', $request->tag);
            });
        }

        return $query->get();
    }
}
