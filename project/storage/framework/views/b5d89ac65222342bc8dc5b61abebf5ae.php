<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JamJam Admin - Trang quản trị</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: "Poppins", sans-serif;
        }
        .navbar {
            background-color: #212529;
        }
        .navbar-brand {
            font-weight: 600;
            color: #ffcc00 !important;
        }
        .sidebar {
            min-height: 100vh;
            background-color: #343a40;
            padding-top: 1rem;
        }
        .sidebar a {
            color: #fff;
            display: block;
            padding: 10px 20px;
            text-decoration: none;
        }
        .sidebar a:hover {
            background-color: #495057;
        }
        footer {
            background-color: #212529;
            color: #fff;
            padding: 10px;
            text-align: center;
        }
        .content-area {
            padding: 20px;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="<?php echo e(route('admin')); ?>">
            Trang quản trị
        </a>
        <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Tìm kiếm..." aria-label="Search">
            <button class="btn btn-warning" type="submit"><i class="fa fa-search"></i></button>
        </form>
        <a href="#" class="btn btn-outline-light ms-2"><i class="fa fa-sign-out"></i> Đăng xuất</a>
    </div>
</nav>

<div class="container-fluid">
    <div class="row">
        <!-- Sidebar -->
        <aside class="col-md-2 sidebar">
            <a href="<?php echo e(route('admin')); ?>"><i class="fa fa-dashboard me-2"></i> Tổng quan</a>
            <a href="<?php echo e(route('danhsachphim')); ?>"><i class="fa fa-film me-2"></i> Quản lý phim</a>
            <a href="<?php echo e(route('phimchoduyet')); ?>"><i class="fa fa-film me-2"></i> Phim chờ duyệt</a>
            <a href="<?php echo e(route('theloai')); ?>"><i class="fa fa-tags me-2"></i> Thể loại</a>
            <a href="#"><i class="fa fa-pen me-2"></i> Review</a>
            <a href="#"><i class="fa fa-users me-2"></i> Người dùng</a>
            <a href="#"><i class="fa fa-comments me-2"></i> Bình luận</a>
            <a href="#"><i class="fa fa-cog me-2"></i> Cài đặt</a>
        </aside>

        <!-- Content -->
        <main class="col-md-10 content-area">
            <?php echo $__env->yieldContent('body'); ?>
        </main>
    </div>
</div>

<footer>
    ©Movie Review — Trang quản trị
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
<?php /**PATH D:\Phanmemhoctap\ThucTapChuyenNganh\project\resources\views/layout/admin.blade.php ENDPATH**/ ?>