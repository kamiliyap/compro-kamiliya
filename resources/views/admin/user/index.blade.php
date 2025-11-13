@extends('admin.layouts.app')

@section('content')
<div class="card shadow-sm border-0">
    <div class="card-header text-center" style="background-color: #efecff; color: #696cff;">
        <h5 class="mb-0">{{ $title ?? 'Data User' }}</h5>
    </div>

    <div class="card-body">
        <div class="text-end mb-3">
            <a href="{{ route('user.create') }}" class="btn btn-sm"
               style="background-color: #e0dcff; color: #4b49ac;">
                <i class="bx bx-plus"></i> Create New User
            </a>
        </div>

        <table class="table table-bordered align-middle text-center">
            <thead style="background-color: #f3f1ff; color: #4b49ac;">
                <tr>
                    <th style="width: 5%;">No</th>
                    <th style="width: 25%;">Name</th>
                    <th style="width: 30%;">Email</th>
                    <th style="width: 20%;">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($datas as $key => $data)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $data->name }}</td>
                        <td>{{ $data->email }}</td>
                        <td>
                            <a href="{{ route('user.edit', $data->id) }}"
                               class="btn btn-sm"
                               style="background-color: #dcd6ff; color: #4b49ac;">
                                <i class="bx bx-pencil"></i> Edit
                            </a>
                            <form action="{{ route('user.destroy', $data->id) }}"
                                  method="POST" class="d-inline">
                                @method('delete')
                                @csrf
                                <button type="submit"
                                        class="btn btn-sm"
                                        style="background-color: #f5d7e3; color: #b71c1c;"
                                        onclick="return confirm('Are you sure to delete this user?')">
                                    <i class="bx bx-trash"></i> Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<style>
    /* Warna lembut dan efek halus */
    .card {
        border-radius: 12px;
        background-color: #ffffff;
    }

    table thead {
        font-weight: 600;
        letter-spacing: 0.3px;
    }

    table tbody tr:hover {
        background-color: #f3e8ff !important; /* ungu lembut saat hover */
        transition: background-color 0.3s ease;
    }

    .btn {
        border: none;
        border-radius: 6px;
        transition: 0.2s;
        font-weight: 500;
    }

    .btn:hover {
        opacity: 0.85;
        transform: scale(1.03);
    }
</style>
@endsection
