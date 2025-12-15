@extends('layout/admin')

@section('body')
<div class="card-footer small muted">

    <h1>Product</h1>

    <a href="{{ route('admin.product.create') }}" class="btn btn-primary mb-3">
        Add
    </a>

    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Tittle</th>
                <th>Category</th>
                <th>Image</th>
                <th>Price</th>
                <th>Status</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>

        <tbody>
            @forelse($products as $object)
            <tr>
                <td>{{ $object->id }}</td>
                <td>{{ $object->tittle }}</td>

                <td>{{ $object->category->name ?? 'Không có danh mục' }}</td>

                <td><img src="{{ $object->image }}" width="120"></td>

                <td>{{ $object->price }}</td>

                <td>{{ $object->status == 1 ? 'Hiện' : 'Ẩn' }}</td>

                <td>
                    <a href="{{ route('admin.product.edit', ['product' => $object->id]) }}" class="btn btn-warning">
                        Edit
                    </a>
                </td>

                <td>
                    <form action="{{ route('admin.product.destroy', ['product' => $object->id]) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr><td colspan="8">Chưa có dữ liệu</td></tr>
            @endforelse
        </tbody>
    </table>

</div>
@endsection
