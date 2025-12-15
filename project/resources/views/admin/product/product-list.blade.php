@extends('layout/admin')
@section('body')
<div class ="card-footer small muted">
    <table class="table">
        <h1> Product</h1>
        <a href ="{{route('admin.category.create')}}" class="btn btn-primary"> 
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
  <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4"/>
</svg>
        add</a>
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Tittle</th>
      <th scope="col">Category</th>
      <th scope="col">Image</th>
      <th scope="col">Price</th>

      <th scope="col">Status</th>
      <th scope="col">View</th>
      <th scope="col">Delete</th>
      <th scope="col">Edit</th>
      
    </tr>
  </thead>
  <tbody>
    @forelse($products as $object)
  
    <tr>
      <th scope="row">{{$object->id}}</th>
      
      <td>{{$object->tittle}}</td>
      <td>{{$object->category->name}}</td>
      <td><img src="{{$object->image}}" alt="" width="150"></td>
      <td>{{$object->price}}</td>
      <td>
        @if($object->status==1)
       <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill text-success" viewBox="0 0 16 16">
  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
</svg>
        @else
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill text-secondary" viewBox="0 0 16 16">
  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
</svg>
@endif
      
      </td>
      
      <td><a href =""><i class="fa-solid fa-eye text-info"></i></a></td>
      <td><a href ="{{route('admin.category.edit',['category'=>$object->id])}}"><i class="fa-solid fa-pen-to-square text-warming"></i></a></td>
      <td><a href="{{route('admin.category.destroy',['category'=>$object->id])}}" title="Delete {{$object->name}}" onclick="event.preventDefault();window.confirm('Bạn đã chắc chắn xóa '+ '{{$object->name}}' +' chưa?') ?document.getElementById('category-delete-{{ $object->id }}').submit() :0;" class="btn btn-danger"><i class="far fa-trash-alt"></i>
          <form action="{{ route('admin.category.destroy', ['category' => $object->id]) }}" method="post" id="category-delete-{{ $object->id }}">
         {{ csrf_field() }}
          {{ method_field('delete') }}
          </form>
                    </a></td>
    </tr>
   @empty
   <h1> chua co du lieu</h1>
   @endforelse
    
  </tbody>
</table>
</div>
@endsection