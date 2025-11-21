@extends('layout/admin')
@section('body')
<div class ="card-footer small muted">
    <table class="table">
        <h1> Category</h1>
        <a href ="" class="btn btn-primary"> add</a>
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
    @forelse($categories as $object)
  
    <tr>
      <th scope="row">{{$object->id}}</th>
      <td>{{$object->name}}</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td><a href =""><i class="fa-solid fa-eye text-info"></i></a></td>
      <td><a href =""><i class="fa-solid fa-pen-to-square text-warming"></i></a></td>
      <td><a href =""><i class="fa-solid fa-trash text-danger"></i></a></td>
    </tr>
   @empty
   <h1> chua co du lieu</h1>
   @endforelse
    
  </tbody>
</table>
</div>
@endsection