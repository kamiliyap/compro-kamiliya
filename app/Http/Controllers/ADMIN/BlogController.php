<?php

namespace App\Http\Controllers\ADMIN;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Blog;
use App\Models\Categories;
use RealRashid\SweetAlert\Facades\Alert;

class BlogController extends Controller
{
    public function index()
    {
        $datas = Blog::with('category')->get();
        $title = "Data Blog";
        $categories = Categories::get();
        return view('admin.blog.index', compact('datas', 'title'));
    }

    public function create()
    {
        $title = "Create Blog";
        $categories = Categories::get();

        return view('admin.blog.create', compact('title', 'categories'));
    }

    public function store(Request $request)
    {
        Blog::create([
            'category_id' => $request->category_id,
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'content' => $request->content,
        ]);

        Alert::success('Success', 'Blog baru berhasil dibuat!');
        return redirect()->to('admin/blog');
    }

    public function edit($id)
    {
        $edit = Blog::find($id);
        $categories = Categories::get();
        $title = "Edit Blog";
        return view('admin.blog.edit', compact('edit', 'title', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $update = Blog::find($id);
        $update->category_id = $request->category_id;
        $update->title = $request->title;
        $update->slug = Str::slug($request->title);
        $update->content = $request->content;
        $update->save();

        return redirect()->to('admin/blog');
    }

    public function destroy($id)
    {
        Blog::find($id)->delete();
        return redirect()->to('admin/blog');
    }
}
