
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('fe-assets')}}/css/index_1.css">
    <link rel="stylesheet" href="{{asset('fe-assets')}}/css/hiden_show.css">
    <link rel="stylesheet" href="{{asset('fe-assets')}}/css/list_sp_DEMO.css">
    <link rel="stylesheet" href="{{asset('fe-assets')}}/css/chitiet.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>Chi Tiết Sản Phẩm</title>
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
                                <li><a href="{{route('toyota')}}"><img src="{{asset('fe-assets')}}/img/eOSjSo0gO8zg3aHRY4hpcC5hoLIfgYB47RZLyJF4.png" alt="">Toyota</a> </li>
                                <li><a href="{{route('Mercedes')}}"><img src="{{asset('fe-assets')}}/img/rflImCxyuFYRqhhufOzm49pxkBlTFElThgyp4gvz.png" alt="">Mercedes-Benz</a>
                                <li><a href="Huyndai.html"> <img src="{{asset('fe-assets')}}/img/hxYUSrBgsJGbgHENtd1chtBB19r1ksXHzQaPEAwr.png" alt="">Huyndai</a></li>
                                <li><a href="BMW.html"><img src="{{asset('fe-assets')}}/img/GKp6EsreSG6EE6M4FGbwyTqtqW92dgs0gySJrgIm.png" alt="">BMW</a></li>
                                <li><a href="Porsche.html"><img src="{{asset('fe-assets')}}/img/rVIyp5kLRXmGOHpFlinPAUtd8PAUIt37oAbMyWdd.png" alt="">Porsche</a></li>
                                <li><a href="Audi.html"><img src="{{asset('fe-assets')}}/img/B1WGu56r65M1CX2G7MwdsZBlsdtAn8sYkC6I7iz2.png" alt="">Audi</a>
                                <li><a href="Vinfast.html"><img src="{{asset('fe-assets')}}/img/b1jG5dKj26eRha1W4N18eDTmnRFtpQv4WaYoAQvx.png" alt="">Vinfast</a>
                                <li><a href="Maserati.html"><img src="{{asset('fe-assets')}}/img/j4rPTwqOB5HsjMQOFfrNTt3frH2xUj1jrzd3wAUx.png" alt="">Maserati</a>
                                <li><a href="Ford.html"><img src="{{asset('fe-assets')}}/img/HIsRavXij0eXRvpan2rQ6hhK1x0xE5AQZQulMAwh.png" alt="">Ford</a>
                                <li><a href="Mazda.html"><img src="{{asset('fe-assets')}}/img/Ivm3NQ38jfj7OB9CnvnrY832QuWVde0VS1zVxD6A.png" alt="">Mazda</a>
                                
                            </ul>
                        </a></li>
                        <li><a href="#">
                            <div class="flex-menu-top">
                                <div><img src="{{asset('fe-assets')}}/img/support_white_24_24.png" alt=""></div>&nbsp&nbsp
                                <div>Thủ tục mua bán</div>
                            </div>
                        </a></li>
                        <li><a href="{{route('tintuc')}}">
                            <div class="flex-menu-top">
                                <div><img src="{{asset('fe-assets')}}/img/news_white_20_16.png" alt=""></div>&nbsp&nbsp
                                <div>Tin tức</div>
                            </div>
                        </a></li>
                    </ul>
                </nav>
                <div class="nav-bottom">
                    <div class="search">
                        <style>
                            button.search{
                                position: relative;
                                width: 50px;
                                left: 92%;
                                border: none;
                                outline: none

                            }

                            button.search i{
                                font-size: 20px
                            }

                            input.form-input{
                                width: 90%;
                                /* background-color: beige; */
                                margin-left: -29px;
                            }

                            a.back{
                                text-decoration: none;
                                font-size: 18px;
                                margin-top: 30px;
                                margin-left: 30px;
                            }
                        </style>
                        <form action="" id="search">
                            <input type="text" class="form-input" name="txtsearch" placeholder="Tìm kiếm trong chợ xe ..." >
                            <button class="search" type="submit"><i class="fa-sharp fa-solid fa-magnifying-glass" ></i></button>
                        </form>
                    </div>
                    <div class="menu_right">
                        <div class="logout">
                            <div style="display: flex;">
                                <img src="{{asset('fe-assets')}}/img/photosmile.vn__final_78465929967864021_.jpg" alt="Dang nhap" width="40px" style="border-radius: 50%;"> 
                                <div style="position: relative; top:10px;left:10px; font-size:20px;font-weight: bold">
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
                                <li>
                                    @if(Auth::check())
                                    {{Auth::user()->role}}
                                @else
                                @endif
                                </li>
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

        <!-- Form -->
        
        <!-- End form -->

        <div id="wp-content">
            <div class="container-content">
                <!-- end search-top -->
                <div id="hotnew">
                    <div class="form_list_sp">
                        <h1 class="title_sp">Chi Tiết Sản Phẩm</h1>

                        <div class="container_sp">
                            <tbody>
                               <div class="flex_chitiet">
                                    <div class="box_chitiet">
                                        <div class="container_chitiet">
                                            <div class="images">
                                                <td>
                                                    @if($product_index->txtpicture)
                                                    <img src="{{ asset('uploads/'.$product_index->txtpicture) }}" style="height: 100%;width:100%;">
                                                    @else 
                                                    <span>No image found!</span>
                                                    @endif
                                                </td>
                                            </div>
                                            <div class="tenxe_gia">
                                                <div class="box_diachi">
                                                    <div class="diachi">
                                                        <span><i class="fa-solid fa-location-dot"></i></span> {{ $product_index->khuvuc }}
                                                    </div>
                                                    <div class="tinhtrang">
                                                        <span><i class="fa-solid fa-car-side"></i></span> {{ $product_index->tinhtrang }}
                                                    </div>
                                                </div>
                                                <div class="tenxe">{{ $product_index->hangsx }} {{ $product_index->dongxe }} {{ $product_index->tieudetin }}</div>

                                                <div class="giaban">
                                                    {{ $product_index->giaban }} VND
                                                </div>

                                            </div>
    
                                            <div class="mota">
                                                <label >Mô Tả</label>
                                                <p>{{ $product_index->motachitiet }}</p>
                                            </div>
    
                                            <div class="chitiet">
                                                <label>Chi Tiết</label>
                                                
                                                <div style="display: flex">
                                                    <ul class="title">
                                                        <li><span><i class="fa-solid fa-car"></i></span> Hãng xe</li>
                                                        <li class="color"><span><i class="fa-solid fa-car-side"></i></span> Dòng xe</li>
                                                        <li><span><i class="fa-solid fa-calendar-days"></i></span> Năm sản xuất</li>
                                                        <li class="color"><span><i class="fa-solid fa-road"></i></span> Số Km đã đi</li>
                                                        <li><span><i class="fa-solid fa-gas-pump"></i></span> Nhiên liệu</li>
                                                    </ul>

                                                    <ul class="noidung">
                                                        <li>{{ $product_index->hangsx }}</li>
                                                        <li class="color">{{ $product_index->dongxe }}</li>
                                                        <li>{{ $product_index->namsx }}</li>
                                                        <li class="color">{{ $product_index->sokmdadi }}</li>
                                                        <li>{{ $product_index->nhienlieu }}</li>
                                                    </ul>
                                                </div>
                                                
                                            </div>
    
                                            <div>{!! $des !!}</div>
                                        </div>
                                    </div>
                                    {{-- end flex chitiet --}}
                                    <div class="box_address">
                                        <div class="text">
                                            <label>Liên hệ</label><br>
                                            {{--  --}}
                                            <div><span style="font-weight: bold;color: black">Khoa</span></div>
                                            <div><span><i class="fa-solid fa-phone"></i></span>0986xxx345</div>
                                            <div><span><i class="fa-solid fa-location-dot"></i></span> {{ $product_index->khuvuc }}</div>
                                        </div>
                                     
                                            <button class="phone"><span><i class="fa-solid fa-phone"></i></span> 0986xxx345</button><br>
                                            <button class="caraudit"><span><i class="fa-solid fa-screwdriver-wrench"></i></span> Car Audit</button>
                    
                                    </div>
                               </div>
                            </tbody>
                        </div>
                    </div>
                </div>
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
<script src="{{asset('fe-assets')}}/script/index_1.js"></script>
<script src="{{asset('fe-assets')}}/script/Accordion.js"></script>
<script src="{{asset('fe-assets')}}/script/hiden-show.js"></script>
</body>
</html>