 
<?php $__env->startSection('body'); ?>
<div class="container-fluid">
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="<?php echo e(route('admin')); ?>">Dashboard</a>
    </li>
    <li class="breadcrumb-item active">Tổng Quan</li>
  </ol>
  <div class="row">
    <div class="col-xl-3 col-sm-6 mb-3">
      <div class="card text-white bg-warning o-hidden h-100">
        <div class="card-body">
          <div class="card-body-icon">
            <i class="fa-solid fa-hourglass-half"></i>
          </div>
          <div class="mr-5">26 Bài Review Chờ Duyệt!</div>
        </div>
        <a class="card-footer text-white clearfix small z-1" href=""> 
          <span class="float-left">Duyệt Ngay</span>
          <span class="float-right">
            <i class="fa fa-angle-right"></i>
          </span>
        </a>
      </div>
    </div>
    <div class="col-xl-3 col-sm-6 mb-3">
      <div class="card text-white bg-primary o-hidden h-100">
        <div class="card-body">
          <div class="card-body-icon">
            <i class="fa fa-fw fa-user-plus"></i>
          </div>
          <div class="mr-5">11 Thành Viên Mới Hôm Nay!</div>
        </div>
        <a class="card-footer text-white clearfix small z-1" href="">
          <span class="float-left">Xem Chi Tiết</span>
          <span class="float-right">
            <i class="fa fa-angle-right"></i>
          </span>
        </a>
      </div>
    </div>
    <div class="col-xl-3 col-sm-6 mb-3">
      <div class="card text-white bg-info o-hidden h-100">
        <div class="card-body">
          <div class="card-body-icon">
            <i class="fa-solid fa-video"></i>
          </div>
          <div class="mr-5">123 Phim Cần Cập Nhật!</div>
        </div>
        <a class="card-footer text-white clearfix small z-1" href="">
          <span class="float-left">Quản Lý Phim</span>
          <span class="float-right">
            <i class="fa fa-angle-right"></i>
          </span>
        </a>
      </div>
    </div>
    <div class="col-xl-3 col-sm-6 mb-3">
      <div class="card text-white bg-danger o-hidden h-100">
        <div class="card-body">
          <div class="card-body-icon">
            <i class="fa-solid fa-comment-slash"></i>
          </div>
          <div class="mr-5">13 Bình Luận Vi Phạm!</div>
        </div>
        <a class="card-footer text-white clearfix small z-1" href="">
          <span class="float-left">Xử Lý Ngay</span>
          <span class="float-right">
            <i class="fa fa-angle-right"></i>
          </span>
        </a>
      </div>
    </div>
  </div>
  <div class="card mb-3">
    <div class="card-header">
      <i class="fa fa-area-chart"></i> Lưu Lượng Truy Cập Theo Ngày</div>
    <div class="card-body">
      <canvas id="myAreaChart" width="100%" height="30"></canvas>
    </div>
    <div class="card-footer small text-muted">Cập nhật lúc 11:59 PM hôm qua</div>
  </div>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout/admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\Phanmemhoctap\ThucTapChuyenNganh\project\resources\views/admin.blade.php ENDPATH**/ ?>