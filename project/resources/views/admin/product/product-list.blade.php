@extends('layout/admin')

@section('body')
<div class="card-footer small muted">
    <table class="table">
        <h1>Product List</h1>
        <a href="" class="btn btn-primary">Add</a>

        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Price</th>
                <th>Image</th>
                <th>View</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>

        <tbody>
            @forelse($products as $object)
            <tr>
                <th>{{ $object->id }}</th>
                <td>{{ $object->name }}</td>
                <td>{{ $object->price }}</td>
                <td>
                    @if($object->image)
                        <img src="{{ asset($object->image) }}" width="50">
                    @else
                        No image
                    @endif
                </td>
                <td><a href=""><i class="fa-solid fa-eye text-info"></i></a></td>
                <td><a href=""><i class="fa-solid fa-pen-to-square text-warning"></i></a></td>
                <td><a href=""><i class="fa-solid fa-trash text-danger"></i></a></td>
            </tr>
            @empty
                <h3>Chưa có dữ liệu</h3>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
