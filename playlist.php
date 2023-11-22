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
    <main>
        <div style="float: left;width:20%;height: 200px;"></div>
        <?php include('./modules/header.php') ?>
        </div>
        <div class="main">
            <?php
            include('./db/config.php');
            if (isset($_GET['playlist_id'])) {
                $playlistId = $_GET['playlist_id'];
                $sql = "SELECT * FROM playlists WHERE playlist_id = $playlistId";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    $playlist = $result->fetch_assoc();
                    echo '<div class="logo_anh_music"><img src="logo_list_music/logo_playlist.jpg" alt="Ảnh" class="logo_anh_music"></div>';
                    echo '<div class="name">' . $playlist['playlist_name'] . '</div>';
                }
            }
            ?>

            <div class="icon" id="my-out-img">
                <table>
                    <td style="padding-left: 10px;"> <a href="play.html"><img src="logo_list_music/play.png" class="icon_mini"></a></td>
                    <td style="padding-left: 15px;"> <a href="replay.html"><img src="logo_list_music/replay.png" class="icon_mini"></a></td>
                    <td style="padding-left: 15px;"><a href="radom.html"><img src="logo_list_music/random-music.png" class="icon_mini"></a></td>
                </table>

            </div>
            <div class="icon" id="my-out-img" style="float: right;padding-top:0px;padding-right: 50px;">
                <a href="3-dots.html"><img src="logo_list_music/3-dots.png" class="icon_mini"></a>
            </div>
        </div>
        <div class="inside">
            <table border="0" style="width: 97%;">
                <td></td>
                <th class="list_music_icon" style="text-align: left; width: 35%;"> Tên bài hát</th>
                <th class="list_music_name">Nhạc sĩ</th>
                <th class="list_music_name">Ca sĩ</th>
                <th class="list_music_name">Thời lượng</th>
                <th class="list_music_icon"></th>
                <th class="list_music_icon"></th>
                <th class="list_music_icon"></th>

                <?php
                $sqlDetails = "SELECT s.*, a.artist_name 
                   FROM songs s
                   JOIN playlist_details pd ON s.song_id = pd.song_id
                   JOIN artists a ON s.artist_id = a.artist_id
                   WHERE pd.playlist_id = $playlistId";

                $detailsResult = $conn->query($sqlDetails);

                if ($detailsResult->num_rows > 0) {
                    while ($playlistDetails = $detailsResult->fetch_assoc()) {
                        echo '<tr class="out">';
                        echo '<td class="list_music_icon" id="my-out-img"><a href=""><img src="logo_list_music/three-bars-icon-28.jpg" width=100% height=40px></a></td>';
                        echo '<td class="list_music_name" style="text-align: left; width: 35%;">' . $playlistDetails['song_name'] . '</td>';

                        // Lấy tên nghệ sĩ
                        $artistId = $playlistDetails['artist_id'];
                        $artistQuery = "SELECT artist_name FROM artists WHERE artist_id = $artistId";
                        $artistResult = $conn->query($artistQuery);

                        if ($artistResult->num_rows > 0) {
                            $artistName = $artistResult->fetch_assoc();
                            echo '<td class="list_music_name">' . $artistName['artist_name'] . '</td>';
                        } else {
                            echo '<td class="list_music_name">Không xác định</td>';
                        }

                        echo '<td class="list_music_name">05:42:00</td>';
                        echo '<td class="list_music_icon" id="my-out-img"><a href="play.html"><img src="logo_list_music/play.png" class="icon_mini"></a></td>
                  <td class="list_music_icon" id="my-out-img"><a href="download.html"><img src="logo_list_music/download.png" class="icon_mini"></a></td>
                  <td class="list_music_icon"><a href="like.html"><img src="logo_list_music/heart (1).png" class="icon_mini"></a></td>';
                        echo '</tr>';
                    }
                } else {
                    echo '<tr><td colspan="8">Không có bài hát trong playlist này.</td></tr>';
                }

                $conn->close();
                ?>
            </table>

        </div>
        <?php include('./modules/rank.php') ?>
    </main>
</body>

</html>