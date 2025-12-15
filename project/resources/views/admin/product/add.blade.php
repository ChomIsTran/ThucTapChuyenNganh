@extends('layout/admin')

@section('body')
<div class="container">
    <div class="row">
        <form action="{{ route('admin.product.store') }}" method="post">
            @csrf

            <div class="mb-3">
                <label>Tittle</label>
                <input type="text" name="tittle" class="form-control">
            </div>

            <div class="mb-3">
                <label>Category</label>
                <select name="idCategory" class="form-control">
                    @foreach($categories as $cat)
                        <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                    @endforeach
                </select>
            </div>

            <button class="btn btn-primary">Add</button>
        </form>
    </div>
</div>
@endsection
