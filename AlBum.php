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
            
        <form action = "<?php echo $_SERVER['PHP_SELF'] ?>" method = "POST">
            <div class="playlists section" >
                <p class="content-title">Danh sách playlist</p>
              <a href="1playlist.php">  <div class="playlists-container" style="padding-left: 10px;">
                    <?php include('./db/config.php');
                        $sql = "SELECT  id,TenAlbum,CaSi,LinkAnh FROM albumplaylist";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                            // output dữ liệu trên trang
                            while($row = $result->fetch_assoc()) {
                                 echo'<div class="playlist sub-content"  style="height:250px;" >';
                                      echo' <div class="js-play-playlist-btn playbtn">';
                                      echo'  </div>';
                                          echo' <a href="1playlist.php"><img src="./assets/img/logo/playlistpng.png" alt="Playlist Image"></a>';
                                       echo'  <div>';
                            
                                             echo'  <a href="1playlist.php"><div class="an" style="float: left;width: 60%;" >'.$row['TenAlbum'].'</div></a>';
                                            echo '  <div class="an" style="float: right;width: 30%;" >
                                                       <ul id="main-menu">
                                                           <li><img style="width: 30px;height:20px;float:right" id="'.$row['id'].'" src="./logo_list_music/3-dots.png">
                                                                <ul class="sub-menu">
                                                                   <li ><input class="edit" type="submit" name="Edit" value="Sửa"></li>
                                                                  <li ><input class="edit" type="submit" name="Delete" value="Xóa"></li>

                                                                  <li><input class="edit" type="submit" name="Detail" value="Chi tiết"></li>
                                                                </ul>
                                                            </li>
                       
                                                         </ul>
                                               </div>';
                                               if(isset($_POST['Edit'])){
                                       
                                                                                                    
                                               }  
                                           
                                               if(isset($_POST['Delete'])){
                                              
                                              $_SESSION['a']= $row.['id'];
                                              include_once ('a.php');
                                              exit;
                                             

                                              
                                               }
                                           
                                               if(isset($_POST['Detail'])){
                                             echo '<script>location.href = "playlist.php";</script>';
                                            exit;
                                               }
                            
                                               echo' <a href="1playlist.php">  <div style="float: left;width:70%;" class="an">'.$row['CaSi'].'</div></a>';
                                        echo' </div>
                                    </div>';
                                   
                               } 
                        }
                         else {
                            echo "0 results";
                         }
                         $conn->close();
                     ?>

      
               </a>
            </div>
        </div>
         
  
</form>

    
    </body>
</html>

<?php

        
    if(isset($_POST['Edit'])){
                                       
                                                                                                    
    }  

    if(isset($_POST['Delete'])){
   exit;
   $sql="";
   $sql = "DELETE FROM `albumplaylist` WHERE id ='$row[id]' ";
   $query = mysqli_query($conn,$sql);
  echo '<script>location.href = "AlBum.php";</script>';
 exit;
    }

    if(isset($_POST['Detail'])){
  echo '<script>location.href = "playlist.php";</script>';
 exit;
    }

?>
