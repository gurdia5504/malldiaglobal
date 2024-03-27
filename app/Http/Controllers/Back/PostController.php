<?php

namespace App\Http\Controllers\Back;

use App\Http\{
    Controllers\Controller,
    Requests\Back\PostRequest
};
use App\Repositories\PostRepository;
use App\Models\{Post, Category};
use App\DataTables\PostsDataTable;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use Intervention\Image\Facades\Image as InterventionImage;

class PostController extends Controller
{
    /**
     * Create the controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->authorizeResource(Post::class, 'post');
    }

    /**
     * Display a listing of the posts.
     *
     * @param  \App\DataTables\PostsDataTable  $dataTable
     * @return \Illuminate\Http\Response
     */
    public function index(PostsDataTable $dataTable)
    {
        return $dataTable->render('back.shared.index');
    }


    /**
     * Show the form for creating a new post.
     *
     * @param  Integer $id
     * @return \Illuminate\Http\Response
     */
    public function create($id = null)
    {
        $post = null;

        if ($id) {
            $post = Post::findOrFail($id);
            if ($post->user_id === auth()->id()) {
                $post->title .= ' (2)';
               // $post->slug .= '-2';
                $post->active = false;
            } else {
                $post = null;
            }
        }

        $categories = Category::all()->pluck('title', 'id');

        return view('back.posts.form', compact('post', 'categories'));
    }

    /**
     * Store a newly created post in storage.
     *
     * @param  \App\Http\Requests\Back\PostRequest  $request
     * @param  \App\Repositories\PostRepository $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostRequest $request, PostRepository $repository)
    {
        $repository->store($request);
        //$inputs = $this->getInputs($request);
        //  Post::create($inputs);

        return back()->with('ok', __('The course has been successfully created'));
    }

    protected function saveImages($request)
    {
        $image = $request->file('image');
        $name = time() . '.' . $image->extension();
        $img = InterventionImage::make($image->path());

        $img->widen(800)->encode()->save(public_path('/images/') . $name);
        $img->widen(400)->encode()->save(public_path('/images/thumbs/') . $name);
        return $name;
    }
    protected function getInputs($request)
    {
        $inputs = $request->except(['image']);
        // $inputs['active'] = $request->has('active');
        if ($request->image) {
            $inputs['image'] = $this->saveImages($request);
        }
        return $inputs;
    }

    /**
     * Show the form for editing the specified post.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $categories = Category::all()->pluck('title', 'id');

        return view('back.posts.form', compact('post', 'categories'));
    }

    /**
     * Update the specified post in storage.
     *
     * @param  \App\Http\Requests\Back\PostRequest  $request
     * @param  \App\Repositories\PostRepository $repository
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(PostRequest $request, PostRepository $repository, Post $post)
    {
        $repository->update($post, $request);

        return back()->with('ok', __('The course has been successfully updated'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();

        return response()->json();
    }
}