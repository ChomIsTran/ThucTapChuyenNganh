
<?php $__env->startSection('body'); ?>
   <div class ="card-body"> 
    <table class="table">
            <h1> Product</h1>
            <a href =""class="btn btn-primary"> add </a>
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
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td><a href=""><i class="fa-solid fa-eye text-info"></i></a></td>
      <td><a href=""><i class="fa-solid fa-pen-to-square text-warming"></i></a></td>
      <td><a href=""><i class="fa-solid fa-trash text-danger "></i></a></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
      <td><a href=""><i class="fa-solid fa-eye text-info"></i></a></td>
      <td><a href=""><i class="fa-solid fa-pen-to-square text-warming"></i></a></td>
      <td><a href=""><i class="fa-solid fa-trash text-danger "></i></a></td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>John</td>
      <td>Doe</td>
      <td>@social</td>
      <td><a href=""><i class="fa-solid fa-eye text-info"></i></a></td>
      <td><a href=""><i class="fa-solid fa-pen-to-square text-warming"></i></a></td>
      <td><a href=""><i class="fa-solid fa-trash text-danger "></i></a></td>
    </tr>
  </tbody>
</table>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout/admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\Phanmemhoctap\ThucTapChuyenNganh\laravel\resources\views/admin/product/product-list.blade.php ENDPATH**/ ?>