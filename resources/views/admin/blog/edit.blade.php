@extends('admin.layouts.app')
@section('content')
    <div class="card">
        <div class="card-header">
            <h5>{{ $title ?? ''}}</h5>
        </div>
        <div class="card-body">
            <form action="{{route('blog.update', $edit->id)}}" method="POST"
            enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="" class="form-label">Category Blog</label>
                    <select name="category_id" class="form-control">
                        <option value="">Choose One</option>
                        @foreach ($categories as $category)
                        <option {{ $edit->category_id == $category->id ? 'selected' : '' }} value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Title</label>
                    <input type="text" name="title" class="form-control" value="{{ $edit->title }}" placeholder="Title Blog">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Content</label>
                    <textarea name="content" id="summernote" cols="30" rows="10" class="form-control" placeholder="Type your blog content">{{ $edit->content }}</textarea>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Photo</label>
                    <input type="file" name="photo" class="form-control">
                </div>
                    <div class="mb-3">
                    <label for="" class="form-label">Status</label>
                    <select name="status" class="form-control">
                        <option {{ $edit->status == 1 ? 'selected' : '' }} value="1">Published</option>
                        <option {{ $edit->status == 0 ? 'selected' : '' }} value="0">Draft</option>
                    </select>
                </div>

                <div class="mb-3"></div>
                    <button class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
@endsection
