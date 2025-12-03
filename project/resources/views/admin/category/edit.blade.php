@extends('layout/admin')
@section('body')
  <div class="container">
    <div class="row">
        <form action="{{route('admin.category.update',['category'=>$category->id])}}" method="post">
          @csrf()
          {{method_field('put')}}
  <div class="mb-3">
    <label for="name" class="form-label">Category name</label>
    <input type="text" name="name" value="{{$category->name}}" class="form-control" id="name" aria-describedby="emailHelp">
  </div>
    <div class="mb-3">
    <label for="image" class="form-label">Image</label>
    <input type="text" name="image" value="{{$category->image}}" class="form-control" id="image" aria-describedby="emailHelp">
  </div>
  <select name="status" id="" class="form-control">
    @if($category->status==1)
      <option value="1" selected >On </option>
    @else
      <option value="1">On </option>
    @endif
      <option value="0">Off </option>
    </select>
  <button type="submit" class="btn btn-primary">Update</button>
</form>
    </div>
</div>
@endsection