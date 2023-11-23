<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/icon/fontawesome-free-6.4.2-web/css/all.css">

    <link rel="stylesheet" href="./assets/css/style.css">
    <style>
        .profile-container {
            background-color: #242424;
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            padding: 60px 150px;
        }



        .profile-container img {
            display: block;
            height: 150px;
            margin: 0 auto;
        }

        .profile-container h2 {
            color: grey;
            text-align: center;
        }

        .title {
            margin-bottom: 40px;
        }

        label {
            width: 30%;
        }

        .user-infor{
            margin-bottom: 20px;
        }

        .sub p {
            width: 70%;
            
        }

        .sub label,
        .sub p {
            float: left;
            padding: 8px;
            cursor: pointer;
        }

        .sub::after{
            content: '';
            display: block;
            clear: both;
        }
        .title i {
            margin-left: 4px;
            color: gray;
        }

        #btn {
            background-color: green;
            padding: 8px 16px;
            float: right;
        }
    </style>
    <title>Document</title>
</head>

<body>
    <?php include('./modules/header.php') ?>
    <div class="profile-container">
        <div class="title">
            <img src="./assets/img/user/default-avatar.png" alt="">
            <h2>khanhkim0773 <i class="fa-regular fa-pen-to-square"></i></h2>
        </div>
        <div class="user-infor">
            <div class="sub">
                <label for="">Họ và tên</label>
                <p>Lê Đoàn Kim Khanh</p>
                
            </div>

            <div class="sub">
                <label for="">Giới tính</label>
                <p>Nam</p>
            </div>

            <div class="sub">
                <label for="">Email</label>
                <p>myemail@example.com</p>
            </div>

            <div class="sub">
                <label for="">Địa chỉ</label>
                <p>Thôn A, Xã B, Huyện C, Tỉnh D</p>
            </div>
        </div>
        <div id = "btn">Cập nhật</div>
    </div>
</body>

</html>