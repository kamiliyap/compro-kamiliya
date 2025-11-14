<?php

namespace App\Http\Controllers\ADMIN;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Blog;
use App\Models\Categories;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\File;

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
        $data =[
            'category_id' => $request->category_id,
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'content' => $request->content,
            'status' => $request->status,
            'writer' => auth()->user()->name,
        ];

        if ($request->hasFile('photo')) {
            $photo = $request->file('photo')->store('blog', 'public');
            $data['photo'] = $photo;
        }
        Blog::create($data);

        Alert::success('Success', 'Create New Blog Successfully!');
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
         $data =[
            'category_id' => $request->category_id,
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'content' => $request->content,
            'status' => $request->status,
            'writer' => auth()->user()->name,
        ];
        if ($request->hasFile('photo')) {
            if ($update->photo) {
                File::delete(public_path('storage/' . $update->photo));
            }
            $photo = $request->file('photo')->store('blog', 'public');
            $data['photo'] = $photo;
        }

        $update->update($data);
        Alert::success('Success', 'Update Blog Successfully!');
        return redirect()->to('admin/blog');
    }

    public function destroy($id)
    {
        $delete= Blog::find($id)->delete();
        File::delete(public_path('storage/' . $update->photo));
        Alert::success('Success', 'Delete Blog Successfully!');
        return redirect()->to('admin/blog');
    }
}
