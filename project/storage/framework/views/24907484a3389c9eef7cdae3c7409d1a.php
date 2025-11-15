
<?php $__env->startSection('body'); ?>
<div class ="card-footer small muted">
    <table class="table">
        <h1>Menu</h1>
        <a href =""class="btn btn-primary">add</a>
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td><i class="fa-solid fa-eye"></i></td>
      <td><i class="fa-solid fa-pen-to-square"></i></td>
      <td><i class="fa-solid fa-trash"></i></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
      <td><i class="fa-solid fa-eye"></i></td>
      <td><i class="fa-solid fa-pen-to-square"></i></td>
      <td><i class="fa-solid fa-trash"></i></td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>John</td>
      <td>Doe</td>
      <td>@social</td>
      <td><i class="fa-solid fa-eye"></i></td>
      <td><i class="fa-solid fa-pen-to-square"></i></td>
      <td><i class="fa-solid fa-trash"></i></td>
    </tr>
  </tbody>
</table>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout/home', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH E:\Phanmemhoctap\ThucTapChuyenNganh\project\resources\views/admin/menu/menu-list.blade.php ENDPATH**/ ?>