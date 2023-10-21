<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('fe-assets')}}/css/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>Login</title>
</head>
<body>
    <div id="wrapper">
        <div id="header">
            <div class="logo">
                <img src="{{asset('fe-assets')}}/img/logo_white_117_32.png" alt="logo">
            </div>
            <div class="container">
                    <div class="form_container">
                        <div class="form login_form">
                            <form action="" method="POST">

                                @csrf
                                
                                <h2>Đăng Nhập</h2>

                                

                                <hr width="100%">

                                <div class="input_button">
                                    <img src="{{asset('fe-assets')}}/img/facebook.png" alt="facebook">
                                    <input type="button" value="Đăng nhập bằng Facebook" required>
                                </div>

                                <div class="input_button">
                                    <img src="{{asset('fe-assets')}}/img/google.png" alt="google" >
                                    <input type="button" value="Đăng nhập bằng Google" required>
                                </div>

                                <div class="text_note">
                                    <span>Hoặc đăng nhập bằng tài khoản Chợ xe</span>
                                </div>
                                <br>
                                @if ($message = Session::get('error'))
                                <div class="alert alert-danger " role="alert" style="text-align: center">
                                    {{-- <button type="button" class="close" data-dismiss="alert">×</button>	 --}}
                                        <strong style="color: red;font-size: 20px">{{ $message }}</strong>
                                </div>
                                @endif

                                @if ($message = Session::get('success_reg'))
                                <div class="alert alert-danger " role="alert" style="text-align: center">
                                    {{-- <button type="button" class="close" data-dismiss="alert">×</button>	 --}}
                                        <strong style="color: rgb(4, 114, 4);font-size: 20px">{{ $message }}</strong>
                                </div>
                                @endif

                                @if ($message = Session::get('logout'))
                                <div class="alert alert-danger " role="alert" style="text-align: center">
                                    {{-- <button type="button" class="close" data-dismiss="alert">×</button>	 --}}
                                        <strong style="color: rgb(41, 145, 12);font-size: 20px">{{ $message }}</strong>
                                </div>
                                @endif


                                <div class="input_box">
                                <label for="email">Email</label>
                                    <input type="email" id="email" name="email" >
                                    <!-- placeholder="Nhập số điện thoại ..." -->
                                </div>

                                <div class="input_box">
                                    <label for="password">Mật khẩu</label>
                                    <input type="password" id="password"  name="password">
                                    <!-- placeholder="Nhập mật khẩu ..." -->
                                    <i class="fa-sharp fa-solid fa-eye-slash pw_hide"></i>
                                </div>

                                <div class="option_field">
                                    <span class="checkbox">
                                        <input type="checkbox" id="check"> 
                                        <label for="check">Lưu mật khẩu</label>
                                    </span>
                                    <a href="#" class="forgot_pw">Quên mật khẩu</a>
                                </div>

                                    <button class="button" type="submit" >Đăng Nhập</button>

                                <div class="login_signup">
                                    Bạn chưa có tài khoản ? <a href="{{route('register')}}">Đăng Ký</a>
                                </div> 
                            </form>
                        </div>
                    </div>
            </div>
            <!-- end container -->
        </div>
        <!-- end wp-content -->
        <div id="footer">
            <div class="container-footer">
                <div><img src="{{asset('fe-assets')}}/img/logo_white_117_32.png" alt=""></div>
                <div class="flex-footer">
                        <ul class="text">
                            <li>©2022 by ChoXe.net. Công Ty Cổ Phần Ô Tô Xuyên Việt;<br> Mã số thuế: 099999999</li><br>
                            <li>Lầu 1, B5-B6 Khu Kim Sơn - Đường Nguyễn Hữu Thọ,<br> phường Tân Phong, Quận 7, TPHCM</li><br>
                            <li style="display: flex;justify-content: space-between;">
                                <div><a href="#"><img src="{{asset('fe-assets')}}/img/phone_white_14_14.png" alt="phone">&nbsp;&nbsp;092.345.6789</a></div>
                                <div><a href="#"><img src="{{asset('fe-assets')}}/img/email_white_14_10.png" alt="email">&nbsp;&nbsp;cskh_ChoXe@gmail.com.vn</a></div>
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
                                    <img src="{{asset('fe-assets')}}/img/phone_red_16_16.png" alt="phone-red">
                                    <span class="hover">&nbspHotline: 092.345.6789</span>
                               </div>
                            </a></li><br><br>
                            <li><a href="#">
                                <div class="button_2">
                                    <img src="{{asset('fe-assets')}}/img/agent_18_16.png" alt="agent">
                                    <span>&nbspDành cho Salon, môi giới</span>
                                </div>
                                
                            </a></li>
                        </ul>
                </div>
                <div><img src="{{asset('fe-assets')}}/img/logo-bct.png" alt=""></div>
            </div>
        </div>
        <!-- end footer -->
    </div>
<script src="{{asset('fe-assets')}}/script/index_1.js"></script>
</body>
</html>
