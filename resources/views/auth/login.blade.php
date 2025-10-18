<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    
    <!-- Import file CSS -->
    <link rel="stylesheet" href="{{ asset('Tra/signup_signin/style.css') }}">

    <title>Đăng nhập & Đăng ký</title>
</head>
<body>
<div class="container">
<div class="forms-container">
        <div class="signin-signup">

            <form method="POST" action="{{ route('login') }}" class="sign-in-form">
            @csrf
            <h2 class="title">Đăng nhập</h2>


            <div class="input-field">
              <!-- Column 1 -->
              <div class="icon-wrapper">
                <i class="fas fa-user"></i>
                <span class="required-star">*</span>
              </div>
              <!-- Column 2 -->
              <input type="email" name="email" placeholder="Email" required />
              </div>



            <div class="input-field">
              <!-- Column 1 -->
              <div class="icon-wrapper">
                <i class="fas fa-user"></i>
                <span class="required-star">*</span>
              </div>
              <!-- Column 2 -->
              <input type="password" name="password" placeholder="Mật khẩu" required />
              </div>




            <input type="submit" value="Login" class="btn solid" />
            <p class="social-text">Hoặc đăng nhập bằng:</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <ion-icon name="logo-google"></ion-icon>
              </a>
              <a href="#" class="social-icon">
                <ion-icon name="logo-facebook"></ion-icon>
              </a>
              <a href="#" class="social-icon">
                <ion-icon name="logo-twitter"></ion-icon>
              </a>
              <a href="#" class="social-icon">
                <ion-icon name="logo-tiktok"></ion-icon>
              </a>
            </div>
            </form>


            <form method="POST" action="{{ route('register') }}" class="sign-up-form">
            @csrf
            <h2 class="title">Đăng ký</h2>
            <div class="input-field">
              <!-- Column 1 -->
              <div class="icon-wrapper">
                <i class="fas fa-user"></i>
                <span class="required-star">*</span>
              </div>
              <!-- Column 2 -->
              <input type="text" placeholder="Tên tài khoản" required />
            </div>



            <div class="input-field">
              <!-- Column 1 -->
              <div class="icon-wrapper">
                <i class="fas fa-user"></i>
                <span class="required-star">*</span>
              </div>
              <!-- Column 2 -->
              <input type="email" name="email" placeholder="Email" required />
            </div>



            <div class="input-field">
              <!-- Column 1 -->
              <div class="icon-wrapper">
                <i class="fas fa-user"></i>
                <span class="required-star">*</span>
              </div>
              <!-- Column 2 -->
              <select name="usertype" required style="border:none; width:100%; outline:none;">
                <option value="">-- Chọn loại tài khoản --</option>
                <option value="Admin">Admin</option>
                <option value="User">User</option>
              </select>
            </div>



            <div class="input-field">
              <!-- Column 1 -->
              <div class="icon-wrapper">
                <i class="fas fa-user"></i>
                <span class="required-star">*</span>
              </div>
              <!-- Column 2 -->
              <input type="password" name="password" placeholder="Mật khẩu" required />
            </div>



            <div class="input-field">
              <!-- Column 1 -->
              <div class="icon-wrapper">
                <i class="fas fa-user"></i>
                <span class="required-star">*</span>
              </div>
              <!-- Column 2 -->
              <input type="password" name="password_confirmation" placeholder="Xác nhận mật khẩu" required />
            </div>




            

            <input type="submit" class="btn" value="Sign up" />
            <p class="social-text"> Hoặc đăng nhập bằng :</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <ion-icon name="logo-google"></ion-icon>
              </a>
              <a href="#" class="social-icon">
                <ion-icon name="logo-facebook"></ion-icon>
              </a>
              <a href="#" class="social-icon">
                <ion-icon name="logo-twitter"></ion-icon>
              </a>
              <a href="#" class="social-icon">
                <ion-icon name="logo-tiktok"></ion-icon>
              </a>
            </div>
            </form>

        </div>
    </div>

    <!-- Panels -->
    <div class="panels-container">
        <div class="panel left-panel">
            <div class="content">
                <h3>Chưa có tài khoản ?</h3>
                <p>Đăng ký ngay để mở khóa toàn bộ chức năng!</p>
                <button class="btn transparent" id="sign-up-btn">Đăng ký</button>
            </div>
            <!-- <img src="{{ asset('Tra/signup_signin/login.svg') }}" class="image" alt="Đăng nhập"> -->
        </div>
        <div class="panel right-panel">
            <div class="content">
                <h3>Đã có tài khoản?</h3>
                <p>Đăng nhập ngay để nhận thông báo và sử dụng toàn bộ chức năng!</p>
                <button class="btn transparent" id="sign-in-btn">Đăng nhập</button>
            </div>
            <!-- <img src="{{ asset('Tra/signup_signin/reg.svg') }}" class="image" alt="Đăng ký"> -->
        </div>
    </div>
</div>

<!-- Import Ionicons -->
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

<!-- Import file JavaScript -->
<script src="{{ asset('Tra/signup_signin/app.js') }}"></script>
</body>
</html>
