<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> MovieReview | Trang Chủ</title>

    <!-- Font & Icons -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #0a0a0f;
            color: #eee;
            font-family: 'Poppins', sans-serif;
        }

        /* === Navbar === */
        .navbar {
            background: linear-gradient(90deg, #081229, #0f2027);
            padding: 1rem 2rem;
        }

        .navbar-brand {
            font-weight: 700;
            color: #00ffff !important;
            font-size: 1.6rem;
        }

        .navbar-nav .nav-link {
            color: #d1d1d1 !important;
            margin-right: 20px;
            transition: 0.3s;
        }

        .navbar-nav .nav-link:hover {
            color: #00ffff !important;
        }

        /* === Hero Section === */
        .hero {
            background: url('img/banner-movie.jpg') center/cover no-repeat;
            min-height: 70vh;
            display: flex;
            align-items: center;
            text-align: center;
            justify-content: center;
            position: relative;
        }

        .hero::after {
            content: "";
            position: absolute;
            inset: 0;
            background: rgba(0, 0, 0, 0.7);
        }

        .hero-content {
            position: relative;
            z-index: 2;
        }

        .hero-content h1 {
            font-size: 3rem;
            color: #00ffff;
        }

        .hero-content p {
            color: #ccc;
            font-size: 1.2rem;
            margin-top: 10px;
        }

        .hero-content .btn {
            margin-top: 25px;
            padding: 10px 30px;
            border-radius: 30px;
            background: #00ffff;
            color: #000;
            font-weight: 600;
            transition: 0.3s;
        }

        .hero-content .btn:hover {
            background: #0fffb0;
        }

        /* === Section title === */
        .section-title {
            text-align: center;
            margin-bottom: 50px;
        }

        .section-title h2 {
            font-weight: 700;
            color: #00ffff;
        }

        /* === Movie Cards === */
        .movie-card {
            background: #111827;
            border-radius: 10px;
            overflow: hidden;
            transition: 0.4s ease;
            position: relative;
        }

        .movie-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 0 25px rgba(0, 255, 255, 0.2);
        }

        .movie-card img {
            width: 100%;
            height: 350px;
            object-fit: cover;
        }

        .movie-card .card-body {
            padding: 20px;
        }

        .movie-card h5 {
            color: #fff;
            margin-bottom: 8px;
        }

        .movie-card p {
            font-size: 0.9rem;
            color: #aaa;
        }

        .rating i {
            color: #ffcc00;
        }

        /* === Footer === */
        footer {
            background: #081229;
            color: #bbb;
            padding: 40px 0;
            text-align: center;
            font-size: 0.9rem;
            margin-top: 50px;
        }

        footer a {
            color: #00ffff;
            text-decoration: none;
        }

        footer a:hover {
            text-decoration: underline;
        }

        /* === Responsive === */
        @media (max-width: 768px) {
            .hero-content h1 {
                font-size: 2.3rem;
            }
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><i class="fa-solid fa-clapperboard me-2"></i>MovieInLife</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="menu">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li><a class="nav-link active" href="#">Trang Chủ</a></li>
                    <li><a class="nav-link" href="#">Review Phim</a></li>
                    <li><a class="nav-link" href="#">Tin Tức</a></li>
                    <li><a class="nav-link" href="#">Liên Hệ</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-content">
            <h1>Khám Phá Thế Giới Điện Ảnh</h1>
            <p>Review chuyên sâu - Cảm nhận chân thật - Cập nhật liên tục</p>
            <a href="#" class="btn">Bắt Đầu Xem Review</a>
        </div>
    </section>

    <!-- Phim nổi bật -->
    <section class="container py-5">
        <div class="section-title">
            <h2>🔥 Phim Nổi Bật Trong Tuần</h2>
            <p>Các bộ phim đang được quan tâm nhất hiện nay</p>
        </div>
        <div class="row g-4">
            <div class="col-md-6 col-lg-3">
                <div class="movie-card">
                    <img src="img/bogia.png" alt="Bố Già">
                    <div class="card-body">
                        <h5>Bố Già</h5>
                        <div class="rating mb-2"><i class="fa fa-star"></i> 9.2</div>
                        <p>Phim Việt cảm động về tình cha con, đầy ý nghĩa và hài hước.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="movie-card">
                    <img src="img/mai.png" alt="Mai">
                    <div class="card-body">
                        <h5>Mai</h5>
                        <div class="rating mb-2"><i class="fa fa-star"></i> 8.9</div>
                        <p>Cuộc hành trình vượt qua tổn thương và tìm lại bản thân.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="movie-card">
                    <img src="img/lamgiauma.png" alt="Làm Giàu Với Ma">
                    <div class="card-body">
                        <h5>Làm Giàu Với Ma</h5>
                        <div class="rating mb-2"><i class="fa fa-star"></i> 9.1</div>
                        <p>Pha trộn giữa kinh dị và hài hước mang phong cách Việt Nam.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="movie-card">
                    <img src="img/lactroi.png" alt="Lạc Trôi">
                    <div class="card-body">
                        <h5>Lạc Trôi</h5>
                        <div class="rating mb-2"><i class="fa fa-star"></i> 9.8</div>
                        <p>Âm nhạc, hình ảnh và cảm xúc hòa quyện trong một tuyệt phẩm.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @yield('body')

    <!-- Footer -->
    <footer>
        <p>© 2025 <a href="#">MovieReview</a>. Tất cả bản quyền được bảo lưu.</p>
        <p><i class="fa fa-envelope me-2"></i>contact@moviereview.com</p>
    </footer>

    <!-- Script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
