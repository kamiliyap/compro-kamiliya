@extends('admin.layouts.app')
@section('content')
    <div class="card">
        <div class="card-header">
            <h5>{{ $title ?? '' }}</h5>
        </div>
        <div class="card-body">
            <form action="{{ route('user.update', $edit->id) }}" method="post">
                @method('PUT')
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">
                        Full Name
                    </label>
                    <input type="text" class="form-control" placeholder="Enter your fullname"
                    value="{{ $edit->name }}" name="name" />
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">
                        Email
                    </label>
                    <input type="email" class="form-control" placeholder="Enter your email"
                    value="{{ $edit->email }}" name="email" />
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">
                        Password
                    </label>
                    <input type="password" class="form-control" placeholder="Enter your password" name="password" />
                </div>
                <div class="mb-3">
                    <button class="btn btn-primary" type="submit">
                        Save
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection