@extends('layout/admin')
@section('body')
  <div class="container">
    <div class="row">
        <form action="{{route('admin.category.store')}}" method="post">
          @csrf()
  <div class="mb-3">
    <label for="name" class="form-label">Category name</label>
    <input type="text" name="name" class="form-control" id="name" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="image" class="form-label">Image</label>
    <input type="text" name="image" class="form-control" id="image" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="status" name ="status" class="form-label">Status</label>
    <select name="status" id="" class="form-control">
      <option value="1">On </option>
      <option value="0">Off </option>
    </select>
  </div>
  <button type="submit" class="btn btn-primary">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
  <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4"/>
</svg>
  Add</button>
  <a href ="{{route('admin.category.index')}}" class="btn btn-secondary">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-return-left" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M14.5 1.5a.5.5 0 0 1 .5.5v4.8a2.5 2.5 0 0 1-2.5 2.5H2.707l3.347 3.346a.5.5 0 0 1-.708.708l-4.2-4.2a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 8.3H12.5A1.5 1.5 0 0 0 14 6.8V2a.5.5 0 0 1 .5-.5"/>
</svg>
  Back</a>
</form>
    </div>
</div>
@endsection
