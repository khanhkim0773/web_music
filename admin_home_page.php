<!DOCTYPE html>
<html>

<head>
    <title>Trang quản trị</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        h1 {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 20px 0;
            margin: 0;
        }

        .container {
            width: 80%;
            margin: 20px auto;
            text-align: center;
        }

        .title {
            font-size: 24px;
            margin-bottom: 20px;
        }

        .selection-buttons {
            margin-top: 20px;
        }

        .selection-buttons button {
            padding: 10px 20px;
            background-color: #333;
            color: #fff;
            border: none;
            cursor: pointer;
            margin: 10px;
        }

        .selection-buttons button:hover {
            background-color: #555;
        }

        .logout-button-container {
            text-align: right;
            margin-top: -60px;
        }

        .logout-button {
            padding: 10px 20px;
            background-color: #ff0000;
            color: #fff;
            border: none;
            cursor: pointer;
        }

        .logout-button:hover {
            background-color: #cc0000;
        }
    </style>
</head>

<body>
    <h1>Trang admin</h1>

    <div class="container">
        
        <div class="logout-button-container">
            <button class="logout-button">Đăng xuất</button>
        </div>
        
        <div class="selection-buttons">
            <button onclick="window.location.href = 'admin_song.html'">Quản lý bài hát</button>
            <button onclick="window.location.href = 'admin_account.html'">Quản lý tài khoản</button>
            <button onclick="window.location.href = 'admin_category.html'">Quản lý thể loại</button>

        </div>
    </div>
</body>

</html>
