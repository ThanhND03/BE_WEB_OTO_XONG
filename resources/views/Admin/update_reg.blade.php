
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('be-assets')}}/css/form_admin.css">
    <link rel="stylesheet" href="{{asset('be-assets')}}/css/bootstrap.css" />
    <link rel="stylesheet" href="{{asset('be-assets')}}/css/phantrang.css">
    <link rel="stylesheet" href="{{asset('be-assets')}}/css/reg_update_1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <title>EDIT-Register</title>
</head>
<body>

    <section id="wrapper">
        <setion id="header">
            <div class="container">
                <!-- NAV -->
                <nav>
                    <!-- LOGO -->
                    <div class="logo">
                        <img src="{{asset('fe-assets')}}/img/logo_white_117_32.png" alt="logo" >
                    </div>
                    <!-- END LOGO -->
                    <!-- MENU -->
                    <ul id="menu_bar">
                        <li><a href="{{route('adminPage')}}">Trang Chủ</a></li>
                        <li><a href="#">Trang Quản Lý</a>
                            <ul class="menu_bar_2">
                                <li><a href="{{route('AdminRegister')}}">Tài Khoản</a></li>
                                <li><a href="{{route('AdminCar')}}">Kiểm Tra Xe</a></li>
                                <li><a href="{{route('AdminTin')}}">Tất Cả Tin Đăng</a></li>
                                <li><a href="{{route('AdminTinIndex')}}">Tin Trang Chủ</a></li>
                            </ul>
                        </li>
                        <li><a href="{{route('logout')}}">LogOut</a></li>
                        <li><a href="{{route('loginPage')}}"><i class="fa-solid fa-right-to-bracket"></i>Login Page</a></li>
                    </ul>
                    <!-- END MENU -->
                </nav>
                <!-- END NAV -->
            </div>
        </setion>
        <!-- END HEADER -->
        <setion id="wp-content">
                <div class="form_container">
                    <form  method="post" action="/Admin/list_reg/update/{{ $user->id }}">
                      

                        @method('PATCH')
                        @csrf
                          <input type="hidden" name="sid" value="{{ $user->id}}" >
                        <h2>Sửa Tài Khoản</h2>
                        <hr width="100%" >
                        <div class="input_box">
                            <label for="username">Họ tên</label>
                            <input type="text" id="username" name="username" value="{{ $user->name}}">
                            <!-- placeholder="Nhập số điện thoại ..." -->
                        </div>

                        <div class="input_box">
                            <label for="email">Email</label>
                            <input type="email" id="email"  name="email" value="{{ $user->email}}">
                            <!-- placeholder="Nhập số điện thoại ..." -->
                        </div>

                        <div class="input_box">
                            <label for="password">Mật khẩu</label>
                            <input type="password" id="password" name="password" value="{{ $user->password}}">
                            <!-- placeholder="Nhập mật khẩu ..." -->
                            <i class="fa-sharp fa-solid fa-eye-slash pw_hide"></i>
                        </div>

                            <button class="button" type="submit">Sửa</button>

                    </form>
                    
                </div>
        </setion>
        <!-- END WP-CONTENT -->
        <!-- FOOTER -->
        <setion id="footer">
            <div class="container">
                <div class="container_footer">
                    <div><img src="img/logo_white_117_32.png" alt=""></div>
                    <div class="flex-footer">
                            <ul class="text">
                                <li>©2022 by ChoXe.net. Công Ty Cổ Phần Ô Tô Xuyên Việt;<br> Mã số thuế: 099999999</li><br>
                                <li>Lầu 1, B5-B6 Khu Kim Sơn - Đường Nguyễn Hữu Thọ,<br> phường Tân Phong, Quận 7, TPHCM</li><br>
                                <li style="display: flex;justify-content: space-between;">
                                    <div><a href="#"><img src="{{asset('be-assets')}}/img/phone_white_14_14.png" alt="phone">&nbsp;&nbsp;092.345.6789</a></div>
                                    <div><a href="#"><img src="{{asset('be-assets')}}/img/email_white_14_10.png" alt="email">&nbsp;&nbsp;cskh_ChoXe@gmail.com.vn</a></div>
                                </li>
                            </ul>

                            <ul class="text_2">
                                <li><a href="#">GIỚI THIỆU</a></li><br><br>
                                <li><a href="#">QUY CHẾ HOẠT ĐỘNG</a></li><br><br>
                                <li><a href="#">BÁO GIÁ</a></li>
                            </ul>

                            <ul class="text_3">
                                <li><a href="#">
                                    <div class="button_1">
                                        <img src="{{asset('be-assets')}}/img/phone_red_16_16.png" alt="phone-red">
                                        <span class="hover">&nbspHotline: 092.345.6789</span>
                                    </div>
                                </a></li><br><br>
                                <li><a href="#">
                                    <div class="button_2">
                                        <img src="{{asset('be-assets')}}/img/agent_18_16.png" alt="agent">
                                        <span>&nbspDành cho Salon, môi giới</span>
                                    </div>
                                    
                                </a></li>
                            </ul>
                    </div>
                    <div><img src="{{asset('be-assets')}}/img/logo-bct.png" alt=""></div>
                </div>
            </div>
        </setion>
        <!-- END FOOTER -->
    </section>
    <script>
        const  pwShowHide = document.querySelectorAll(".pw_hide");

        pwShowHide.forEach((icon) => {
            icon.addEventListener("click", () => {
                let getPwInput = icon.parentElement.querySelector("input");
                if(getPwInput.type === "password") {
                    getPwInput.type = "text";
                    icon.classList.replace("fa-eye-slash","fa-eye");
                }else{
                    getPwInput.type = "password";
                    icon.classList.replace("fa-eye", "fa-eye-slash");
                }
            });
        });

    </script>
</body>
</html>