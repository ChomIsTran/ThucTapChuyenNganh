 
<?php $__env->startSection('body'); ?>
<div class="container-fluid">

  <div class="mb-3 d-flex justify-content-end">
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addGenreModal">
        <i class="fa fa-plus"></i> Thêm Thể Loại Mới
    </button>
  </div>

  <div class="card mb-3">
    <div class="card-header">
      <i class="fa fa-table"></i> Danh Sách Các Thể Loại Phim</div>
    <div class="card-body">
      <div class="table-responsive">
        
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>ID</th>
              <th>Tên Thể Loại</th>
              <th>Số Phim</th>
              <th>Thao Tác</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>Hành Động</td>
              <td>45</td>
              <td>
                <button type="button" class="btn btn-sm btn-warning text-dark" data-toggle="modal" data-target="#editGenreModal1" title="Chỉnh Sửa"><i class="fa fa-edit"></i> Sửa</button>
                <form action="" method="POST" style="display:inline;" onsubmit="return confirm('Xóa thể loại này sẽ ảnh hưởng đến các phim liên quan. Bạn có chắc chắn?');">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                    <button type="submit" class="btn btn-sm btn-danger" title="Xóa Thể Loại"><i class="fa fa-trash"></i> Xóa</button>
                </form>
              </td>
            </tr>
            <tr>
              <td>2</td>
              <td>Lãng Mạn</td>
              <td>30</td>
              <td>
                <button type="button" class="btn btn-sm btn-warning text-dark" data-toggle="modal" data-target="#editGenreModal2" title="Chỉnh Sửa"><i class="fa fa-edit"></i> Sửa</button>
                <form action="" method="POST" style="display:inline;" onsubmit="return confirm('Xóa thể loại này sẽ ảnh hưởng đến các phim liên quan. Bạn có chắc chắn?');">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                    <button type="submit" class="btn btn-sm btn-danger" title="Xóa Thể Loại"><i class="fa fa-trash"></i> Xóa</button>
                </form>
              </td>
            </tr>
            <tr>
              <td>3</td>
              <td>Kinh Dị</td>
              <td>25</td>
              <td>
                <button type="button" class="btn btn-sm btn-warning text-dark" data-toggle="modal" data-target="#editGenreModal3" title="Chỉnh Sửa"><i class="fa fa-edit"></i> Sửa</button>
                <form action="" method="POST" style="display:inline;" onsubmit="return confirm('Xóa thể loại này sẽ ảnh hưởng đến các phim liên quan. Bạn có chắc chắn?');">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                    <button type="submit" class="btn btn-sm btn-danger" title="Xóa Thể Loại"><i class="fa fa-trash"></i> Xóa</button>
                </form>
              </td>
            </tr>
</div>

<div class="modal fade" id="addGenreModal" tabindex="-1" role="dialog" aria-labelledby="addGenreModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form action="" method="POST">
        <?php echo csrf_field(); ?>
        <div class="modal-header">
          <h5 class="modal-title" id="addGenreModalLabel">Thêm Thể Loại Phim Mới</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <label for="genre_name">Tên Thể Loại:</label>
            <input type="text" class="form-control" id="genre_name" name="name" required>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
          <button type="submit" class="btn btn-primary">Lưu Thể Loại</button>
        </div>
      </form>
    </div>
  </div>
</div>

<div class="modal fade" id="editGenreModal1" tabindex="-1" role="dialog" aria-labelledby="editGenreModalLabel1" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form action="" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <div class="modal-header">
          <h5 class="modal-title" id="editGenreModalLabel1">Chỉnh Sửa Thể Loại: Hành Động</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
          <button type="submit" class="btn btn-primary">Cập Nhật</button>
        </div>
      </form>
    </div>
</div> 
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout/admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH E:\Phanmemhoctap\ThucTapChuyenNganh\project\resources\views/admin/quanlyphim/theloai.blade.php ENDPATH**/ ?>