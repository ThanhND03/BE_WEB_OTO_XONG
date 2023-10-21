<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('fe-assets')}}/css/dangtin.css">
    <link rel="stylesheet" href="{{asset('fe-assets')}}/css/dangtin_1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <title>Đăng Tin</title>
</head>
<body>
    
    <div id="wrapper">
        <div id="header">
            <div class="container">
                <nav>
                    <ul class="menu-top">
                        <li><a href="{{route('index')}}">
                            <img src="{{asset('fe-assets')}}/img/logo_white_117_32.png" alt="">
                        </a></li>
                        <li><a href="{{route('caraudit')}}">
                            <div class="flex-menu-top">
                                <div><img src="{{asset('fe-assets')}}/img/car_check_white_19_19.png" alt=""></div>&nbsp&nbsp
                                <div>Car Aduit</div>
                            </div>
                        </a></li>
                        <li><a href="#">
                            <div class="flex-menu-top">
                                <div><img src="{{asset('fe-assets')}}/img/add_listing_white_16_18.png" alt=""></div>&nbsp&nbsp
                                <div>Danh sách sản phẩm</div>
                            </div>
                            <ul class="sub-menu">
                                <li><a href="Toyota.html"><img src="{{asset('fe-assets')}}/img/eOSjSo0gO8zg3aHRY4hpcC5hoLIfgYB47RZLyJF4.png" alt="">Toyota</a> </li>
                                <li><a href="Huyndai.html"> <img src="{{asset('fe-assets')}}/img/hxYUSrBgsJGbgHENtd1chtBB19r1ksXHzQaPEAwr.png" alt="">Huyndai</a></li>
                                <li><a href="BMW.html"><img src="{{asset('fe-assets')}}/img/GKp6EsreSG6EE6M4FGbwyTqtqW92dgs0gySJrgIm.png" alt="">BMW</a></li>
                                <li><a href="Porsche.html"><img src="{{asset('fe-assets')}}/img/rVIyp5kLRXmGOHpFlinPAUtd8PAUIt37oAbMyWdd.png" alt="">Porsche</a></li>
                                <li><a href="Audi.html"><img src="{{asset('fe-assets')}}/img/B1WGu56r65M1CX2G7MwdsZBlsdtAn8sYkC6I7iz2.png" alt="">Audi</a>
                                <li><a href="Vinfast.html"><img src="{{asset('fe-assets')}}/img/b1jG5dKj26eRha1W4N18eDTmnRFtpQv4WaYoAQvx.png" alt="">Vinfast</a>
                                <li><a href="Maserati.html"><img src="{{asset('fe-assets')}}/img/j4rPTwqOB5HsjMQOFfrNTt3frH2xUj1jrzd3wAUx.png" alt="">Maserati</a>
                                <li><a href="Ford.html"><img src="{{asset('fe-assets')}}/img/HIsRavXij0eXRvpan2rQ6hhK1x0xE5AQZQulMAwh.png" alt="">Ford</a>
                                <li><a href="Mazda.html"><img src="{{asset('fe-assets')}}/img/Ivm3NQ38jfj7OB9CnvnrY832QuWVde0VS1zVxD6A.png" alt="">Mazda</a>
                                <li><a href="Mersedes-Benz.html"><img src="{{asset('fe-assets')}}/img/rflImCxyuFYRqhhufOzm49pxkBlTFElThgyp4gvz.png" alt="">Mercedes-Benz</a>
                            </ul>
                        </a></li>
                        <li><a href="#">
                            <div class="flex-menu-top">
                                <div><img src="{{asset('fe-assets')}}/img/support_white_24_24.png" alt=""></div>&nbsp&nbsp
                                <div>Thủ tục mua bán</div>
                            </div>
                        </a></li>
                        <li><a href="TintucNew.html">
                            <div class="flex-menu-top">
                                <div><img src="{{asset('fe-assets')}}/img/news_white_20_16.png" alt=""></div>&nbsp&nbsp
                                <div>Tin tức</div>
                            </div>
                        </a></li>
                    </ul>
                </nav>
                <div class="nav-bottom">
                    <div class="search">
                        <input type="text" class="form-input" placeholder="Tìm kiếm trong chợ xe ..." >
                        <span><i class="fa-sharp fa-solid fa-magnifying-glass"></i></span>
                        <a href="#" style="text-decoration: none;"><i class="fa-solid fa-sliders"></i></a>
                    </div>
                    <div class="menu_right">
                        <div class="logout">
                            <div style="display: flex;">
                                <img src="{{asset('fe-assets')}}/img/photosmile.vn__final_78465929967864021_.jpg" alt="Dang nhap" width="40px" style="border-radius: 50%;"> 
                                <div style="position: relative; top:10px;left:10px; font-size:16px;">
                                    @if(Auth::check())
                                    {{Auth::user()->name}}
                                    @else
                                    @endif
                                </div>
                            </div>
                            <ul class="dangxuat">
                                <li>
                                    @if(Auth::check())
                                    {{Auth::user()->name}}
                                @else
                                @endif
                                </li>
                                <li>
                                    @if(Auth::check())
                                    {{Auth::user()->email}}
                                @else
                                @endif
                                </li>
                                <li>Đổi Mật Khẩu</li>
                                <li style="font-size: 15px;"><a href="{{route('logout')}}"
                                    onclick=" return(confirm('Bạn có chắc muốn đăng xuất ?')) ">
                                    Đăng xuất&nbsp<img src="{{asset('fe-assets')}}/img/log-out.png" alt="" width="20px" style="margin-top: 3px;position: relative; top: 3px;"></a>
                                </li>
                            </ul>      
                        </div>
                        <div class="dangtin">       
                                <a href="{{route('dangtin')}}">Đăng tin <img src="{{asset('fe-assets')}}/img/add_listing_white_16_18.png" alt="Đăng tin" width="20px" style="position: relative; top: 3px;"></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end container -->
        </div>
        <!-- end header -->
        <div id="wp-content">
            <div class="title_form">
                <h1>Đăng tin</h1>
            </div>
            <div class="container_content">
                <form action="dangtin" method="post" class="form_dangtin" enctype="multipart/form-data"> 

                    @csrf

                    <div class="input_select">
                        <label for="tinh">Khu vực xem xe <span style="color: red;">*</span></label>
                        <br>
                        <select name="khuvuc" id="tinh">
                            <option selected disabled >Chọn tỉnh thành phố</option>
                            <option value="Bắc Ninh">Bắc Ninh</option>
                            <option value="Bắc Giang">Bắc Giang</option>
                            <option value="Hà Nội">Hà Nội</option>
                            <option value="Hà Nam">Hà Nam</option>
                            <option value="TP.Hồ Chí Minh">TP.Hồ Chí Minh</option>
                            <option value="Vũng Tàu">Vũng Tàu</option>
                            <option value="Quảng Ninh">Quảng Ninh</option>
                            <option value="Hạ Long">Hạ Long</option>
                            <option value="Thái Nguyên">Thái Nguyên</option>
                            <option value="Ninh Bình">Ninh Bình</option>
                        </select>
                        <div class="icon_select">
                            <img src="{{asset('fe-assets')}}/img/down-filled-triangular-arrow.png" alt="" width="15px" style="position: relative;top: -20px;left: 98%;"> 
                        </div>
                    </div>

                    <div class="form_input_chung">
                        <label for="radio_tile_group_4">Tình trạng<span style="color: red;">*</span></label>
                        <div class="radio_tile_group" id="radio_tile_group_4">

                            <div class="input_container_2">
                                <input type="radio" id="cu" name="tinhtrang" value="Xe Cũ">
                                <div class="radio_tile">
                                    <!-- iconn -->
                                    <label for="cu">Xe cũ</label>
                                </div>
                            </div>

                            <div class="input_container_2">
                                <input type="radio" id="moi" name="tinhtrang" value="Xe Mới">
                                <div class="radio_tile">
                                    <!-- iconn -->
                                    <label for="moi">Xe mới</label>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="form_input_chung">
                        <label for="">Ảnh xe<span style="color: red;">*</span></label>
                        <div class="huongdan">
                            <li>Đăng ít nhất 3 ảnh</li>
                            <li>Ảnh đầu tiên sẽ là ảnh đại diện cho tin đăng</li>
                            <p>Chụp hình đầy đủ và chi tiết sẽ gây ấn tượng tốt với người xem tin : ngoại thất ( mặt trước, mặt sau, hai bên ),
                                nội thất ( khoang lái, hàng ghế trước, hàng ghế sau ),khoang máy.
                                <br><a href="#">Tham khảo hình mẫu</a>     
                            </p>
                        </div>
                        <div class="push_picture">          
                            <div class="upload">
                                <div class="image">
                                    <img  alt="" id="img_1">
                                    <img  alt="" id="img_2">
                                    <img  alt="" id="img_3">
                                </div>
                                <div class="content">
                                    <div class="icon"><i class="fa-solid fa-cloud-arrow-up"></i></i></div>
                                    <div class="text">Không có file gì </div>
                                </div>
                                <div id="cancel-btn"><i class="fa-solid fa-xmark"></i></div>
                                <div class="file-name">Tên tập tin ở đây</div>
                            </div>
                            <input type="file" id="default-btn" name="hinhanh" hidden multiple="multiple">
                            <div class="icon_2"><i class="fa-solid fa-camera"></i></div>
                            <button onclick="defaultBtnActive()" type="button"  id="custom-btn">Bấm để chọn ảnh cần tải</button>
                        </div>
                    </div>

                    <div class="form_input_chung">
                        <div class="input_box">
                            <label for="text">Hãng sản xuất<span style="color: red;">*</span></label>
                            <input type="text" name="hangsx">
                        </div>
                    </div>

                    <div class="form_input_chung">
                        <div class="input_box">
                            <label for="text">Dòng xe<span style="color: red;">*</span></label>
                            <input type="text" name="dongxe">
                        </div>
                    </div>

                    <div class="form_input_chung">
                        <div class="input_box">
                            <label for="text">Năm sản xuất<span style="color: red;">*</span></label>
                            <input type="text" name="namsx">
                        </div>
                    </div>

                    <div class="form_input_chung">
                        <div class="input_box">
                            <label for="text">Phiên bản<span style="color: red;">*</span></label>
                            <input type="text" name="phienban">
                        </div>
                    </div>

                    <div class="form_input_chung">
                        <div class="input_box">
                            <label for="text">Số km đã đi<span style="color: red;">*</span></label>
                            <input type="number" name="sokmdadi"> <span style="position: relative;top: -15px;left: 700px;color: #81808095;">Km</span>
                        </div>
                    </div>

                    <div class="form_input_chung">
                            <label for="radio_tile_group">Hộp số<span style="color: red;">*</span></label>
                        <div class="radio_tile_group" id="radio_tile_group">

                            <div class="input_container">
                                <input type="radio" id="tudong" name="hopso" value="Tự Động">
                                <div class="radio_tile">
                                    <!-- iconn -->
                                    <label for="tudong">Tự Động</label>
                                </div>
                            </div>

                            <div class="input_container">
                                <input type="radio" id="sosan" name="hopso" value="Số Sàn">
                                <div class="radio_tile">
                                    <!-- iconn -->
                                    <label for="sosan">Số Sàn</label>
                                </div>
                            </div>

                            <div class="input_container">
                                <input type="radio" id="bantudong" name="hopso" value="Bán Tự Động">
                                <div class="radio_tile">
                                    <!-- iconn -->
                                    <label for="bantudong">Bán Tự Động</label>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="form_input_chung">
                        <label for="radio_tile_group_2">Dẫn động<span style="color: red;">*</span></label>
                        <div class="radio_tile_group" id="radio_tile_group_2">

                            <div class="input_container_4">
                                <input type="radio" id="FWD" name="dandong" value="FWD">
                                <div class="radio_tile">
                                    <!-- iconn -->
                                    <label for="FWD">FWD</label>
                                </div>
                            </div>

                            <div class="input_container_4">
                                <input type="radio" id="RWD" name="dandong" value="RWD">
                                <div class="radio_tile">
                                    <!-- iconn -->
                                    <label for="RWD">RWD</label>
                                </div>
                            </div>

                            <div class="input_container_4">
                                <input type="radio" id="AWD" name="dandong" value="AWD">
                                <div class="radio_tile">
                                    <!-- iconn -->
                                    <label for="AWD">AWD</label>
                                </div>
                            </div>

                            <div class="input_container_4">
                                <input type="radio" id="4WD" name="dandong" value="4WD">
                                <div class="radio_tile">
                                    <!-- iconn -->
                                    <label for="4WD">4WD</label>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="form_input_chung">
                        <label for="radio_tile_group_3">Nhiên liệu<span style="color: red;">*</span></label>
                        <div class="radio_tile_group" id="radio_tile_group_3">

                            <div class="input_container_4">
                                <input type="radio" id="xang" name="nhienlieu" value="Xăng">
                                <div class="radio_tile">
                                    <!-- iconn -->
                                    <label for="xang">Xăng</label>
                                </div>
                            </div>

                            <div class="input_container_4">
                                <input type="radio" id="dau" name="nhienlieu" value="Dầu">
                                <div class="radio_tile">
                                    <!-- iconn -->
                                    <label for="dau">Dầu</label>
                                </div>
                            </div>

                            <div class="input_container_4">
                                <input type="radio" id="dien" name="nhienlieu" value="Điện">
                                <div class="radio_tile">
                                    <!-- iconn -->
                                    <label for="dien">Điện</label>
                                </div>
                            </div>

                            <div class="input_container_4">
                                <input type="radio" id="hybird" name="nhienlieu" value="Hybird">
                                <div class="radio_tile">
                                    <!-- iconn -->
                                    <label for="hybird">Hybird</label>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="form_input_chung">
                            <div class="input_box">
                                <label for="text">Giá bán<span style="color: red;">*</span></label>
                                <input type="number" name="giaban"><span style="position: relative;top: -15px;left: 690px;color: #81808095;">VND</span>
                            </div>
                    </div>

                    <div class="form_input_chung">
                        <label for="text">Tiêu đề của tin<span style="color: red;">*</span></label>
                        <div class="input_box_title_tin">
                            <p>Tiêu đề tin cần các thông tin quan trọng nhất để nâng cao hiệu quả tìm kiếm :
                                hãng xe, dòng xe, phiên bản, năm sản xuất, số tự động / số sàn, số km đã đi,...và các đặc tính nổi bật khác.
                            </p>
                            <span style="color:#6d6b6bef;">Ví dụ:</span><b>Toyota Fortuner 2.8V 4x4 AT2019, máy dầu, đã đi 40.000km, nhập khẩu, màu đen...</b>
                        </div>
                        <div class="input_box_tin">
                            <label for="title_tin">Tiêu đề của tin<span style="color: red;">*</span></label>
                            <textarea name="title_tin" id="title_tin" cols="98" rows="7"></textarea>
                        </div>
                    </div>

                    <div class="form_input_chung">
                        <div class="input_box_tin">
                            <label for="title_tin">Mô tả chi tiết<span style="color: red;">*</span></label>
                            <textarea name="title_tin_ct" id="title_tin" cols="98" rows="7" 
                            placeholder="Nhập mô tả chi tiểt về xe đăng bán

                            - Tình trạng chiếc xe
                            - Thời gian sử dụng xe
                            - Bảo trì xe bao lâu/lần, Ở đâu
                            - Tình trạng giấy tờ"></textarea>
                        </div>
                    </div>

                    <div class="form_input_chung">
                        <button type="submit">Đăng tin</button>
                    </div>

                    
                </form>
            </div>
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
    <script src="{{asset('fe-assets')}}/script/upload_img_1.js"></script>

</body>
</html>