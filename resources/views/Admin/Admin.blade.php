
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('be-assets')}}/css/form_admin_2.css">
    <link href="{{asset('be-assets')}}/css/bootstrap.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <title>Form admin</title>
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
            <div class="container">
                <div class="form_table">
                   {{-- <h1>Trang admin</h1> --}}
                   <style>
                    div.title{
                        width: 75%;
                        margin: auto;
                        border-radius: 50px;
                        height: 60px;
                        background-color:rgba(119, 117, 117, 0.386);
                        text-align: center;
                        font-size: 40px
                    }

                    div.tt_user{
                        width: 40%;
                        height: 300px;
                        border: 2px solid white;
                        border-radius: 40px;
                        /* box-shadow: 0 0 5px grey; */
                        box-shadow: 0 0 5px black;
                    }

                    div.tt_user label{
                        margin: 50px 60px 10px 60px;
                        font-size: 30px;
                    }

                    ul.menu_user{
                        margin: 0px 42px;
                    }
                    ul.menu_user li{
                        margin-top: 5px;
                        font-size: 18px;
                        font-weight: 550;
                    }

                    div.mesage{
                        width: 55%;
                        border: 2px solid white;
                        border-radius: 40px;
                        box-shadow: 0 0 5px black;
                    }

                    div.title_mes{
                        font-weight: 550;
                        color: whitesmoke;
                        font-size: 30px;
                        width: 100%;
                        text-align: center;
                        border-radius: 40px 40px 0 0;
                        background-color: #F05626;
                    }

                    p.text{
                        padding-left: 10px;
                        padding-top: 5px;
                        font-size: 15px;
                        font-weight: bold;
                        font-family: 'Times New Roman', Times, serif;
                    }


                   </style>
                    <div class="title">
                        Chào mừng 
                        <span style="color: #e04415">
                            @if(Auth::check())
                            {{Auth::user()->name}}
                            @else
                            @endif
                        </span>
                        đã đăng nhập trang quản lý
                    </div>
                    <div style="display: flex; margin-top: 50px;justify-content: space-between">
                        <div class="tt_user">
                            <label for="menu_user">Thông Tin Của Bạn</label>
                            <ul class="menu_user" id="menu_user">
                                <li>Họ Tên :@if(Auth::check())
                                        {{Auth::user()->name}}
                                        @else
                                        @endif
                                </li>
                                <li>Email :@if(Auth::check())
                                        {{Auth::user()->email}}
                                        @else
                                        @endif
                                </li>
                                <li>Quyền Hạn :@if(Auth::check())
                                        {{Auth::user()->role}}
                                        @else
                                        @endif
                                </li>
                                <li>Lần Đăng Nhập Cuối:@if(Auth::check())
                                        {{Auth::user()->updated_at}}
                                        @else
                                        @endif
                                </li>
                                {{-- <li>LogOut</li> --}}
                            </ul>
                        </div>
                        <div class="mesage">
                            <div class="title_mes">Thông Báo</div>
                            <p class="text">Khách hàng 0986.xxx.xxx vừa đăng kí gói kiểm tra "Các dòng xe phổ thông" giá 1.900.000 VND</p>
                            <p class="text">Khách hàng 0999.xxx.xxx vừa đăng kí gói kiểm tra "Các dòng xe Đức, xe sang" giá 2.999.999 VND</p>
                            <p class="text">Khách hàng 0909.xxx.xxx phản hồi dịch vụ tốt</p>
                            <p class="text">Khách hàng 0234.xxx.xxx vừa đăng kí gói kiểm tra "Các dòng xe phổ thông" giá 1.900.000 VND</p>
                            <p class="text">Khách hàng 0554.xxx.xxx vừa đăng kí gói kiểm tra "Các dòng xe Đức, xe sang" giá 2.999.999 VND</p>
                            <p class="text">Khách hàng 0865.xxx.xxx vừa đăng kí gói kiểm tra "Các dòng xe Đức, xe sang" giá 2.999.999 VND</p>
                            <p class="text">Khách hàng 0902.xxx.xxx vừa đăng kí xem xe Audi A9 giá 4.500.000.000 ở Bắc Ninh</p>
                        </div>
                    </div>
                </div>
                <!-- END CLASS FORM -->
            </div>
            <!-- END CONTAINER -->
        </setion>
        <!-- END WP-CONTENT -->
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
</body>
</html>