<?php

namespace App\Http\Controllers\Back;

use App\DataTables\CategoriesDataTable;
use App\Http\{
    Controllers\Controller,
};
use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Models\Courses;
use App\Models\Module;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image as InterventionImage;
use Illuminate\Support\Facades\File;


class CategoryController extends Controller
{

    public function index(CategoriesDataTable $dataTable)
    {
        $categories = Category::all();
        // $categories     = Category::with('posts')->get(5);
        $courses = Courses::all();
       // return view('front.categories.index', compact('categories', 'courses'));
        return $dataTable->render('back.shared.index');
    }

    public function posts($id)
    {
        $categories = Category::all();
        $current_category = Category::findOrFail($id);
        $posts = $current_category->posts;
        $users = User::all();

        //dd($posts);
        return view('front.courses.course', compact('current_category', 'users', 'categories', 'posts'));
    }

    public function postsByCategories($id)
    {
        $categories = Module::all();
        $current_category = Module::findOrFail($id);
        $posts = $current_category->posts;
        return view('front.courses.postsByCategories', compact('current_category', 'categories', 'posts'));
    }

    public function create()
    {
        return view('front.categories.form');
    }

    public function store(CategoryRequest $request)
    {
        $inputs = $this->getInputs($request);
        Module::create($inputs);
       // Category::create($request->all());

        return back()->with('status', __('created.'));

      //  return back()->with('status', __('created.'));
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

    public function show(Module $category)
    {

        return view('categories.show', compact('category'));
    }


    public function edit(Module $category)
    {
        return view('front.categories.form', ['category' => $category]);
    }


    public function update(CategoryRequest $request, Module $category)
    {/*
        $inputs = $this->getInputs($request);
        if ($request->has('image')) {
            $this->deleteImages($category);
        }
        $category->update($inputs); */

        $category->update($request->all());
        return back()->with('status', __('Updated.'));
    }


    public function delete(Module $category)
    {
        $this->deleteImages($category);
        $category->delete();
        return redirect()->route('front.categories.index')
            ->with('success', 'Category deleted successfully');
    }


    protected function deleteImages($category)
    {
        File::delete([
            public_path('/images/') . $category->image,
            public_path('/images/thumbs/') . $category->image,
        ]);
    }
}
