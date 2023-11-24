<!DOCTYPE html>
<html>

<head>
    <title>Quản lý tài khoản</title>
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
        }

        table {
            border-collapse: collapse;
            width: 100%;
            background-color: #fff;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
            height: 30px;
        }

        th {
            background-color: #f2f2f2;
        }

        .action-buttons {
            text-align: center;
        }

        .action-buttons button {
            margin: 5px;
            padding: 5px 10px;
            background-color: #333;
            color: #fff;
            border: none;
            cursor: pointer;
        }

        .action-buttons button:hover {
            background-color: #555;
        }

        .add-button-container {
            text-align: right;
            margin-bottom: 10px;
        }

        .add-button {
            padding: 5px 10px;
            background-color: green;
            color: #fff;
            border: none;
            cursor: pointer;
        }

        .add-button:hover {
            background-color: #555;
        }

        .search-container {
            text-align: right;
            margin-bottom: 10px;
        }

        .search-container input[type="text"] {
            padding: 5px;
            width: 200px;
        }

        .search-container button {
            padding: 5px 10px;
            background-color: #333;
            color: #fff;
            border: none;
            cursor: pointer;
        }

        .search-container button:hover {
            background-color: #555;
        }

        .back-button-container {
            text-align: left;
            margin-bottom: 10px;
        }

        .back-button {
            padding: 5px 10px;
            background-color: #333;
            color: #fff;
            border: none;
            cursor: pointer;
        }

        .back-button:hover {
            background-color: #555;
        }

        .deletebtn {
            background-color: red !important;
        }
    </style>
</head>

<body>
    <h1>Quản lý tài khoản</h1>

    <div class="container">
        <div class="back-button-container">
            <button class="back-button" onclick="window.location.href = 'admin_home_page.php'">Quay lại</button>
        </div>
        <div class="add-button-container">
            <button class="add-button">Thêm</button>
        </div>

        <div class="search-container">
            <input type="text" id="searchInput" placeholder="Tìm kiếm tài khoản...">
            <button>Tìm kiếm</button>
        </div>

        <table>
            <tr>
                <th>Tên người dùng</th>
                <th>Email</th>
                <th>Quyền hạn</th>
                <th>Thao tác</th>
            </tr>

            <?php
            include('./db/config.php');
            $sql = "SELECT accounts.*, users.*
            FROM accounts
            JOIN users ON accounts.user_id = users.user_id;
            ";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while ($account = $result->fetch_assoc()) {
                    echo '<tr>';
                    echo '<td>'.$account['username'].'</td>';
                    echo '<td>'.$account['email'].'</td>';
                    echo '<td>'.$account['role'].'</td>';
                    echo '<td class="action-buttons">';
                    echo '<button>Sửa</button>';
                    echo '<button class = "deletebtn">Xóa</button>';
                    echo '</td>';
                    echo '</tr>';
                }
            }
            ?>
        </table>
    </div>
</body>

</html>