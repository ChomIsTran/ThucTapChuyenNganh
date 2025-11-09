@extends('layout/admin')

@section('body')
    <h2>📊 Thống kê nhanh</h2>
    <p>Chào mừng bạn đến với trang quản trị !</p>

    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 20px; margin-top: 20px;">
        <div style="background:white; border-radius:10px; padding:20px; box-shadow:0 2px 8px rgba(0,0,0,0.1); text-align:center;">
            <h3>👥 Người dùng</h3>
            <p>120</p>
        </div>
        <div style="background:white; border-radius:10px; padding:20px; box-shadow:0 2px 8px rgba(0,0,0,0.1); text-align:center;">
            <h3>🎞️ Phim</h3>
            <p>45</p>
        </div>
        <div style="background:white; border-radius:10px; padding:20px; box-shadow:0 2px 8px rgba(0,0,0,0.1); text-align:center;">
            <h3>📝 Review</h3>
            <p>210</p>
        </div>
        <div style="background:white; border-radius:10px; padding:20px; box-shadow:0 2px 8px rgba(0,0,0,0.1); text-align:center;">
            <h3>🎟️ Vé đặt</h3>
            <p>75</p>
        </div>
    </div>
@endsection
