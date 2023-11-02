const headerDiv = `<header id='header'>
<div class="sub-header">
    <section class="logo">
        <img src="./assets/img/logo/homeLogo.jpg" alt="">
    </section>
    <section class="search-box">
        <form action="" id="">
            <input type="text" class="search-text" placeholder="Tìm kiếm bài hát">
            <button class="search-btn"><i class="fa-solid fa-magnifying-glass"></i></button>
        </form>
    </section>
</div>


<nav class="sub-header-nav">
    <ul>
        <li>
            <a href=""><i class="fa-solid fa-house"></i>Trang chủ</a>
        </li>
        <li>
            <a href=""><i class="fa-solid fa-music"></i> Nhạc của tôi</a>

        </li>
    </ul>
    <ul>
        <li>
            <a href=""><i class="fa-solid fa-circle-play"></i>Playlist</a>
        </li>
        <li>
            <a href=""><i class="fa-solid fa-plus"></i>Tạo playlist</a>

        </li>
    </ul>
    <ul>
        <li>
            <a href=""><i class="fa-solid fa-circle-question"></i>Hỗ trợ</a>
        </li>
        <li>
            <a href=""><i class="fa-solid fa-gear"></i> Cài đặt</a>
        </li>
        <li>
            <a href=""><i class="fa-solid fa-circle-info"></i>Giới thiệu</a>

        </li>
    </ul>
    <li>
        <a class="login-btn" href="#"><i class="fa-solid fa-right-to-bracket"></i> Đăng nhập</a>
    </li>
    <li><a class="register-btn" href="#"><i class="fa-solid fa-user-plus"></i>Đăng ký</a>

    </li>
    </ul>
</nav>
</header>

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
        </div>`