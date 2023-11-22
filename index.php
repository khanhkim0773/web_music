<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/icon/fontawesome-free-6.4.2-web/css/all.css">
    <title>Music</title>
</head>

<body>
    <main>
        <?php include('./modules/header.php') ?>

        <div class="content">
            <div class="poster"></div>
            <div class="playlists section">
                <p class="content-title">Danh sách playlist</p>
                <div class="playlists-container">
                    <?php
                    include('./db/config.php');
                    $sql = "SELECT * FROM playlists";

                    $result = $conn->query($sql);
                
                    if ($result->num_rows > 0) {
                        while ($playlist = $result->fetch_assoc()) {
                            echo '<div class="playlist sub-content">';
                            echo '    <div class="js-play-playlist-btn playbtn">';
                            echo '          <a href="playlist.php?playlist_id=' . $playlist['playlist_id'] . '"><i class="fa-solid fa-play"></i></a>';
                            echo '    </div>';
                            echo '    <img src="./assets/img/logo/playlistpng.png" alt="Playlist Image">';
                            echo '    <p>' . $playlist['playlist_name'] . '</p>';
                            $createdAt = $playlist['created_at'];

                            //định dạng ngày giờ
                            $formattedDatetime = date("D-m-y", strtotime($createdAt));
                            echo '    <p class="description">' . $formattedDatetime . '</p>';
                            echo '</div>';
                        }
                    }
                    $conn->close();
                    ?>
                </div>
            </div>

            <!-- <script>
                const playlistsContainer = document.querySelector('.playlists-container');
                let playlistHtml = '';
                for (let i = 0; i < 4; i++) {
                    playlistHtml += `
                        <div class="playlist sub-content">
                            <div class="js-play-playlist-btn playbtn">
                                <a href=""><i class="fa-solid fa-play"></i></a>
                            </div>
                            <img src="./assets/img/logo/playlistpng.png" alt="Playlist Image">
                            <p>Tên playlist</p>
                            <p class = "description">Số lượng bài hát</p>
                        </div>
                    `;
                }
                playlistsContainer.innerHTML = playlistHtml;
            </script> -->

            <div class="list-song section">
                <p class="content-title">Danh sách bài hát đề xuất</p>
                <div class="songs-container">
                    <?php
                    include('./db/config.php');
                    $sql = "SELECT * FROM songs";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        while ($song = $result->fetch_assoc()) {
                            echo '<div class="songs sub-content">';
                            echo '    <div class="js-play-song-btn playbtn">';
                            echo '        <a href="#"><i class="fa-solid fa-play"></i></a>';
                            echo '    </div>';
                            echo '    <img src="./assets/img/logo/logobaihat.jpg" alt="Playlist Image">';
                            echo '    <p>' . $song['song_name'] . '</p>';
                            $artistId = $song['artist_id'];
                            $artistQuery = "SELECT artist_name FROM artists WHERE artist_id = $artistId";
                            $artistResult = $conn->query($artistQuery);
                            $artist = $artistResult->fetch_assoc();
                            echo '    <p class="description">' . $artist['artist_name'] . '</p>';

                            echo '</div>';
                        }
                    }
                    $conn->close();

                    ?>
                </div>
            </div>

            <!-- <script>
                const songContainer = document.querySelector('.songs-container');
                let songHtml = '';
                for (let i = 0; i < 4; i++) {
                    songHtml += `
            <div class="songs sub-content">
                <div class="js-play-song-btn playbtn">
                    <a href=""><i class="fa-solid fa-play"></i></a>
                </div>
                <img src="./assets/img/logo/logobaihat.jpg" alt="Playlist Image">
                <p>Tên bài hát</p>
                <p class = "description">Tác giả</p>
            </div>
        `;
                }
                songContainer.innerHTML = songHtml;
            </script> -->


            <div class="artists section">
                <p class="content-title">Danh sách nghệ sĩ</p>
                <div class="artists-container">
                <?php
                    include('./db/config.php');
                    $sql = "SELECT * FROM artists";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        while ($artist = $result->fetch_assoc()) {
                            echo '<div class="artist sub-content">';
                            echo '    <div class="js-artist-btn playbtn">';
                            echo '        <a href=""><i class="fa-solid fa-play"></i></a>';
                            echo '    </div>';
                            echo '     <img src="./assets/img/logo/phuongly-17_VODL.webp" alt="Playlist Image">';
                            echo '    <p>' . $artist['artist_name'] . '</p>';
                            echo '</div>';
                        }
                    }
                    $conn->close();

                    ?>
                </div>

                <!-- <script>
                    const artistsContainer = document.querySelector('.artists-container');
                    let artistHtml = '';
                    for (let i = 0; i < 4; i++) {
                        artistHtml += `
                <div class="artist sub-content">
                    <div class="playbtn">
                        <a href=""><i class="fa-solid fa-play"></i></a>
                    </div>
                    <img src="./assets/img/logo/phuongly-17_VODL.webp" alt="Playlist Image">
                    <p>Tên nghệ sĩ</p>
                    <p class = "description">Số lượng bài hát</p>
                </div>
            `;
                    }
                    artistsContainer.innerHTML = artistHtml;
                </script> -->
            </div>
        </div>


        <?php include('./modules/rank.php') ?>

    </main>

    <!-- form dang ki -->
    <div class="js-register-modal modal">
        <div class="js-register-modal-container register-modal-container">
            <header class="register-modal-header">
                Đăng kí
            </header>
            <form action=""></form>
            <div class="register-modal-body">
                <div class="row-login">
                    <label for="">Tên đăng nhập</label>
                    <input type="text" required placeholder="user_name_example">
                </div>
                <div class="row-login">
                    <label for="">Số điện thoại</label>
                    <input type="tel" required placeholder="tel: 012xxxxx">
                </div>
                <div class="row-login">
                    <label for="">Email</label>
                    <input type="email" required placeholder="email@example.com">
                </div>
                <div class="row-login">
                    <label for="">Mật khẩu</label>
                    <input type="password" required placeholder="password_exg">
                </div>
                <div class="row-login">
                    <label for="">Nhập lại mật khẩu</label>
                    <input type="password" required placeholder="password_exg">
                </div>
                <div class="btns">
                    <button class="js-cancel-register cancel-btn btn">Hủy bỏ</button>
                    <button class="register-btn btn" type="submit">Đăng kí</button>
                </div>
            </div>
            </form>

            <footer class="register-modal-footer">
                <p><a href="">Quên mật khẩu?</a></p>
                <p>Đã có tài khoản? <a href="">Đăng nhập</a></p>
            </footer>
        </div>
    </div>

    <!-- form dang nhap -->
    <div class="js-login-modal modal">
        <div class="js-login-modal-container login-modal-container">
            <header class="login-modal-header">
                Đăng nhập
            </header>
            <form action=""></form>
            <div class="login-modal-body">
                <div class="row-login">
                    <label for="">Tên đăng nhập</label>
                    <input type="text" required placeholder="example@gmail.com">
                </div>
                <div class="row-login">
                    <label for="">Mật khẩu</label>
                    <input type="password" required placeholder="user_password_eg">
                </div>
                <div class="btns">
                    <button class="js-cancel-login cancel-btn btn">Hủy bỏ</button>
                    <button class="login-btn btn" type="submit">Đăng nhập</button>
                </div>
            </div>
            </form>

            <footer class="login-modal-footer">
                <p><a href="">Quên mật khẩu?</a></p>
                <p>Chưa có tài khoản? <a href="">Đăng kí</a></p>
            </footer>
        </div>
    </div>

    <script src="./js/main.js"></script>
</body>

</html>