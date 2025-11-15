 
<?php $__env->startSection('body'); ?>
  <div class="mb-3 d-flex justify-content-end">
    <a href="" class="btn btn-primary">
        <i class="fa fa-plus"></i> Thêm Phim Mới
    </a>
  </div>

  <div class="card mb-3">
    <div class="card-header">
      <i class="fa fa-table"></i> Danh Sách Chi Tiết Các Bộ Phim</div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>ID</th>
              <th>Tiêu Đề Phim</th>
              <th>Năm Phát Hành</th>
              <th>Thời Lượng (phút)</th>
              <th>Thể Loại</th>
              <th>Lượt Xem</th>
              <th>Thao Tác</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>Kẻ Săn Đêm (The Night Hunter)</td>
              <td>2024</td>
              <td>120</td>
              <td>Hành Động, Giật Gân</td>
              <td>150,234</td>
              <td>
                <a href="" class="btn btn-sm btn-warning text-dark" title="Chỉnh Sửa"><i class="fa fa-edit"></i> Sửa</a>
                <form action="" method="POST" style="display:inline;" onsubmit="return confirm('Bạn có chắc chắn muốn xóa bộ phim này không?');">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                    <button type="submit" class="btn btn-sm btn-danger" title="Xóa Phim"><i class="fa fa-trash"></i> Xóa</button>
                </form>
              </td>
            </tr>
            <tr>
              <td>2</td>
              <td>Mùa Hè Rực Rỡ Của Chúng Ta</td>
              <td>2023</td>
              <td>105</td>
              <td>Lãng Mạn, Học Đường</td>
              <td>80,500</td>
              <td>
                <a href="" class="btn btn-sm btn-warning text-dark"><i class="fa fa-edit"></i> Sửa</a>
                <form action="" method="POST" style="display:inline;" onsubmit="return confirm('Bạn có chắc chắn muốn xóa bộ phim này không?');">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                    <button type="submit" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> Xóa</button>
                </form>
              </td>
            </tr>
            <tr>
              <td>3</td>
              <td>Du Hành Tinh Vân Alpha</td>
              <td>2025</td>
              <td>145</td>
              <td>Khoa Học Viễn Tưởng, Phiêu Lưu</td>
              <td>210,980</td>
              <td>
                <a href="" class="btn btn-sm btn-warning text-dark"><i class="fa fa-edit"></i> Sửa</a>
                <form action="" method="POST" style="display:inline;" onsubmit="return confirm('Bạn có chắc chắn muốn xóa bộ phim này không?');">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                    <button type="submit" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> Xóa</button>
                </form>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout/admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\Phanmemhoctap\ThucTapChuyenNganh\project\resources\views/admin/quanlyphim/danhsachphim.blade.php ENDPATH**/ ?>