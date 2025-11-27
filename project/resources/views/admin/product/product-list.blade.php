@extends('layout/admin')
@section('body')
<div class ="card-footer small muted">
    <table class="table">
        <h1> Product</h1>
        <a href ="{{route('admin.product.create')}}" class="btn btn-primary"> add</a>
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
      <th scope="col">View</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
    @forelse($products as $object)
  
    <tr>
      <th scope="row">{{$object->id}}</th>
      <td>{{$object->name}}</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td><a href =""><i class="fa-solid fa-eye text-info"></i></a></td>
      <td><a href ="{{route('admin.product.edit',['product'=>$object->id])}}"><i class="fa-solid fa-pen-to-square text-warming"></i></a></td>
      <td><a href="{{route('admin.product.destroy',['product'=>$object->id])}}" title="Delete {{$object->name}}" onclick="event.preventDefault();window.confirm('Bạn đã chắc chắn xóa '+ '{{$object->name}}' +' chưa?') ?document.getElementById('product-delete-{{ $object->id }}').submit() :0;" class="btn btn-danger"><i class="far fa-trash-alt"></i>
          <form action="{{ route('admin.product.destroy', ['product' => $object->id]) }}" method="post" id="product-delete-{{ $object->id }}">
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