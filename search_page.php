<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/icon/fontawesome-free-6.4.2-web/css/all.css">
    <title>Tìm kiếm</title>
</head>

<body>
    <?php include('./modules/header.php');
    include('./db/config.php'); ?>



    <div class="content">

        <div class="list-song section">
            <?php
            if (isset($_GET['search_query'])) {
                $search_query = $_GET['search_query'];

                $sql = "SELECT * FROM songs WHERE song_name like '%$search_query%'";
                $result = $conn->query($sql);
                echo '<p class="content-title">' . $search_query . '</p>';
                echo '<div class="songs-container">';

                if ($result->num_rows > 0) {
                    while ($song = $result->fetch_assoc()) {
                        echo '<div class="songs sub-content">';
                        echo '    <div class="js-play-song-btn playbtn">';
                        echo '        <a href="#"><i class="fa-solid fa-play"></i></a>';
                        echo '    </div>';
                        echo '    <img src="./assets/img/songs/' . $song['image'] . '" alt="' . $song['song_name'] . '">';
                        echo '    <p>' . $song['song_name'] . '</p>';
                        $artistId = $song['artist_id'];
                        $artistQuery = "SELECT artist_name FROM artists WHERE artist_id = $artistId";
                        $artistResult = $conn->query($artistQuery);
                        $artist = $artistResult->fetch_assoc();
                        echo '    <p class="description">' . $artist['artist_name'] . '</p>';

                        echo '</div>';
                    }
                }
            }
            $conn->close();

            echo '</div>';
            echo '</div>';
            ?>
        </div>

        <?php include('./modules/rank.php') ?>


        <!-- <div class="rank">
        <p class="rank-title"><i class="rank-title fa-solid fa-ranking-star"></i>Bảng xếp hạng </p>
        <div class="tabs">
            <div class="tab-item">
                Việt Nam
            </div>
            <div class="tab-item border">

                Âu mỹ
            </div>
            <div class="tab-item">
                Hàn Quốc
            </div>
        </div>

        <div class="rank-songs">
            <script>
                const rankSongContainer = document.querySelector('.rank-songs');
                let rankSongHtml = '';
                for (let i = 0; i < 8; i++) {
                    rankSongHtml += `
                        <div class="rank-song">
                            <div class="rank-img">
                                <div class="rank-number">1</div>
                                <img src="./assets/img/logo/Songs_to_Calm_Your_Mind_1080x.webp" alt="">
                            </div>
                            
                            <div class="song-info">
                                <p class="info">Tên bài hát <i class="info fa-regular fa-heart"></i> <i class="info fa-solid fa-ellipsis-vertical"></i></p>
                                <p class="info">Tác giả</p>
                            </div>
                        </div>`;
                }
                rankSongContainer.innerHTML = rankSongHtml;
            </script>           
        </div>
    </div> -->
        <script src="./js/main.js"></script>
</body>

</html>