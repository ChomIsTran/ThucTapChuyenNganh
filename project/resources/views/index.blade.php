@extends('layout/home')

@section('body')
    <div class="container-fluid featured pt-3">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-4 wow fadeIn" data-wow-delay="0.1s">
                    <div class="featured-item">
                        <div class="featured-icon">
                            <i class="fas fa-globe-americas fa-3x"></i>
                        </div>
                        <div class="featured-content">
                            <div class="featured-title">
                                <h4>Phim Toàn Cầu</h4>
                            </div>
                            <a class="featured-btn">Chi Tiết</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeIn" data-wow-delay="0.3s">
                    <div class="featured-item">
                        <div class="featured-icon">
                            <i class="fas fa-video fa-3x"></i>
                        </div>
                        <div class="featured-content">
                            <div class="featured-title">
                                <h4>Đánh Giá Sớm</h4>
                            </div>
                            <a class="featured-btn">Chi Tiết</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeIn" data-wow-delay="0.5s">
                    <div class="featured-item">
                        <div class="featured-icon">
                            <i class="fas fa-users fa-3x"></i>
                        </div>
                        <div class="featured-content">
                            <div class="featured-title">
                                <h4>Cộng Đồng</h4>
                            </div>
                            <a class="featured-btn">Chi Tiết</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid py-5">
        <div class="container">
            <h2 class="mb-4 text-center">Các Bài Review Mới Nhất</h2>
            <p class="text-center text-muted">Đây là nơi hiển thị các bài review phim mới nhất được lấy từ cơ sở dữ liệu.</p>
            </div>
    </div>
    @endsection