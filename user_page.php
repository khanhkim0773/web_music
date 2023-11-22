<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="./assets/css/style.css">
    <style>

body {
    height: 100vh;
}
.profile-container {
    max-width: 70vw;
    padding: 20px;
    background-color: #242526;
    border-radius: 8px;
    position: relative;
    left: 300px;
    height: 500px;
}

.avatar {
    width: 150px;
    height: 150px;
    border-radius: 50%;
    margin-bottom: 20px;
    position: absolute;
    left: 50%;
    transform: translateX(-50%);
    top:30px;
}

.username {
    color: #333;
    position: absolute;
    top: 180px;
    left: 50%;
    transform: translateX(-50%);


}

.user-info {
    position: absolute;
    top: 250px;
    left: 50%;
    transform: translateX(-50%);
}

#updatebtn {
    color: white;
    background-color: rgb(27, 109, 82);
    z-index: 999;
    padding: 8px;
    position: absolute;
    bottom: 50px;
    text-align: center;
    cursor: pointer;
    left: 50%;
    transform: translateX(-50%);

}

label {
    font-weight: bold;
}



    </style>
    <title>Document</title>
</head>
<body>
    <?php include('./modules/header.php') ?>
    <div class="profile-container">
        <img src="./assets/img/user/default-avatar.png" alt="Your Avatar" class="avatar">
        <h1 class="username">User Name</h1>
        <div class="user-info">
            <label>Sinh nhật:</label>
            <p>1 1, 1990</p>

            <label>Địa chỉ:</label>
            <p>124 Nguyễn Thái Học, TP Quy Nhơn</p>

            <label>Email:</label>
            <p>your.email@example.com</p>
        </div>
        <div id="updatebtn">Cập nhật thông tin</div>
    </div>
    

</body>
</html>