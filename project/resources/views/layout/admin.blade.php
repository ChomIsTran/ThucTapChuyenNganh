<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <style>
        body {
            margin: 0;
            font-family: "Poppins", sans-serif;
            background-color: #f8f9fa;
            display: flex;
            height: 100vh;
        }

        /* Sidebar */
        .sidebar {
            width: 220px;
            background: #222;
            color: #fff;
            display: flex;
            flex-direction: column;
            padding: 20px 0;
        }

        .sidebar h2 {
            text-align: center;
            margin-bottom: 30px;
            color: #e50914;
        }

        .sidebar a {
            color: #ccc;
            text-decoration: none;
            padding: 12px 20px;
            display: block;
            transition: 0.3s;
        }

        .sidebar a:hover {
            background-color: #e50914;
            color: white;
        }

        /* Navbar */
        .navbar {
            background: white;
            padding: 15px 20px;
            border-bottom: 1px solid #ddd;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .navbar h1 {
            font-size: 1.2rem;
            color: #333;
        }

        .navbar .user {
            font-size: 0.95rem;
            color: #555;
        }

        /* Main content */
        .main-content {
            flex: 1;
            display: flex;
            flex-direction: column;
            overflow-y: auto;
        }

        .content {
            padding: 20px 30px;
        }

        footer {
            text-align: center;
            padding: 15px;
            font-size: 0.85rem;
            color: #777;
            border-top: 1px solid #ddd;
            margin-top: auto;
        }

        @media (max-width: 768px) {
            body {
                flex-direction: column;
            }

            .sidebar {
                width: 100%;
                flex-direction: row;
                overflow-x: auto;
            }

            .sidebar a {
                flex: 1;
                text-align: center;
                padding: 10px;
            }
        }
    </style>
</head>
<body>

    <div class="sidebar">
        <h2>🎬 Trang Admin</h2>
        <a href="">Trang chủ</a>
        <a href="">Quản lý người dùng</a>
        <a href="">Quản lý phim</a>
        <a href="">Quản lý review</a>
        <a href="">Quản lý vé</a>
        <a href="">Đăng xuất</a>
    </div>

    <div class="main-content">
        <div class="navbar">
            <h1>Trang quản trị </h1>
            <div class="user">👤 Admin</div>
        </div>

        <div class="content">
            @yield('body')
        </div>

        <footer>
            © 2025 Review Movie | Admin Dashboard
        </footer>
    </div>

</body>
</html>
