@extends('layout/admin')

@section('body')
<div class="container">
    <div class="row">
        <form action="{{ route('admin.product.update', ['product' => $product->id]) }}" method="post">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label>Tittle</label>
                <input type="text" name="tittle" value="{{ $product->tittle }}" class="form-control">
            </div>

            <div class="mb-3">
                <label>Category</label>
                <select name="idCategory" class="form-control">
                    @foreach($categories as $cat)
                        <option value="{{ $cat->id }}" 
                            {{ $product->idCategory == $cat->id ? 'selected' : '' }}>
                            {{ $cat->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <button class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
@endsection
