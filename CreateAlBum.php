<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/style.css">
     <link rel="stylesheet" href="./assets/css/stylelistmusic.css">
    <link rel="stylesheet" href="./assets/icon/fontawesome-free-6.4.2-web/css/all.css">
    <title>Music</title>
</head>


<body>
        <?php include('./modules/header.php') ?>
        <?php include('./modules/rank.php') ?>

  <div class="content">
    <div class="poster"></div>
    <div class="playlists section" >
        
     <table class="creatAlBum">
          <td>Chọn ảnh</td><td ><input class="size_Profile_creatAlBum"> </td><tr>
        <td>Nhập tên Album</td><td><input type="text" class="size_Profile_creatAlBum"> </td><tr>
        <td>Ca Sĩ</td><td><input type="text" class="size_Profile_creatAlBum"> </td><tr>
        <td ><input style="float: right;width:50px;height:25px" type="submit" name="exit" value="Thoát"></td> <td ><input style="float: right;width:80px;height:25px" type="submit" name="Completed" value="Hoàn Tất"></td>
     </table>   
       
    </div>
  </div>
  <script src="./js/login.js"></script>
  <script src="./js/main.js"></script> 
</body>
</html>