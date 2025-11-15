 
<?php $__env->startSection('body'); ?>
  <div class="card mb-3">
    <div class="card-header">
      <i class="fa fa-table"></i> Danh Sách Review Chờ Duyệt Gần Đây</div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Tiêu Đề Review</th>
              <th>Phim Liên Quan</th>
              <th>Tác Giả</th>
              <th>Ngày Đăng</th>
              <th>Trạng Thái</th>
              <th>Thao Tác</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Review "Tên Phim 1"</td>
              <td>Tên Phim Bom Tấn</td>
              <td>Trần Văn A</td>
              <td>2024/01/15</td>
              <td><span class="badge bg-warning text-dark">Chờ Duyệt</span></td>
              <td><a href="#" class="btn btn-sm btn-success">Duyệt</a> <a href="#" class="btn btn-sm btn-danger">Xóa</a></td>
            </tr>
            <tr>
              <td>Phân tích "Tên Phim 2"</td>
              <td>Kẻ Cắp Giấc Mơ 2</td>
              <td>Lê Thị B</td>
              <td>2024/01/14</td>
              <td><span class="badge bg-warning text-dark">Chờ Duyệt</span></td>
              <td><a href="#" class="btn btn-sm btn-success">Duyệt</a> <a href="#" class="btn btn-sm btn-danger">Xóa</a></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <div class="card-footer small text-muted">Cập nhật lúc 11:59 PM hôm qua</div>
  </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout/admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH E:\Phanmemhoctap\ThucTapChuyenNganh\project\resources\views/admin/quanlyreview/phimchoduyet.blade.php ENDPATH**/ ?>