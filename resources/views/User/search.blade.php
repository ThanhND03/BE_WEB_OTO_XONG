
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('fe-assets')}}/css/index_1.css">
    <link rel="stylesheet" href="{{asset('fe-assets')}}/css/hiden_show.css">
    {{-- <link rel="stylesheet" href="{{asset('fe-assets')}}/css/list_sp_DEMO.css"> --}}
    <link rel="stylesheet" href="{{asset('fe-assets')}}/css/search.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>Search</title>
</head>
<body>
    
    <div id="wrapper">
        <div id="header">
            <div class="container">
                <nav>
                    <ul class="menu-top">
                        <li><a href="#">
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
                        <div class="container_sp">
                            <tbody>
                                <h1 class="tieude">Tìm Kiếm</h1>
                                <div class="title">Tìm thấy {{count($product_index)}} sản phẩm </div>
                                <div id="box_sp">

                                    
                                    @foreach($product_index as $row)
                                    <a style="text-decoration: none" href="/User/chitiet/{{$row->id}}">
                                        <div id="list_sp">
                                            <div id="hinhanh">
                                                <td>
                                                    @if($row->txtpicture)
                                                    <img src="{{ asset('uploads/'.$row->txtpicture) }}" style="height: 100%;width:100%;">
                                                    @else 
                                                    <span>No image found!</span>
                                                    @endif
                                                </td>
                                                <br></div>
                                            <div id="tensp_header">
                                                <div id=""><td>{{$row->hangsx}}</td><br></div>&ensp;
                                                <div id=""> <td>{{$row->dongxe}}</td><br></div>
                                            </div>

                                            <div id="tensp_content">
                                                <ul id="flex_tt_sp">
                                                        <div><td>{{$row->namsx}}</td><br></div>
                                                    <li><div><td>{{$row->hopso}}</td><br></div></li>
                                                    <li><div><td>{{$row->sokmdadi}}</td> KM<br></div></li>
                                                </ul>
                                            </div>
                                            
                                            <div id="giaban"><td>{{$row->giaban}}</td> VND</td><br></div>
                                        
                                            <div id="khuvuc"><td>{{$row->khuvuc}}</td></td><br></div>
                                        
                                            
                                        </div>
                                    </a>
                                    @endforeach

                                </div>
                            </tbody>
                            <button class="btn_back"><a href="{{route('index_tt')}}"><span><i class="fa-solid fa-angles-left"></i></span> Quay lại </a></button>
                        </div>
                    </div>
                </div>
             <!-- Table logo xe -->
             <section class="home">
                    <div class="down_up_container">
                        <b>Bảng giá xe các hãng</b>
                        <div > 
                            <ul class="menu-logo">
                                <div class="shadow" ><a href="Toyota.html"><img src="{{asset('fe-assets')}}/img/eOSjSo0gO8zg3aHRY4hpcC5hoLIfgYB47RZLyJF4.png" alt="logo-xe"  ><span style="right: 65px;">Toyota</span></a></div>
                                <div class="shadow" ><a href="Huyndai.html"><img src="{{asset('fe-assets')}}/img/hxYUSrBgsJGbgHENtd1chtBB19r1ksXHzQaPEAwr.png" alt="logo-xe"  ><span style="right: 55px;">Huyndai</span></a></div>
                                <div class="shadow" ><a href="#"><img src="{{asset('fe-assets')}}/img/uvICoTdobRIpiAXOixCuqkkLZz3s31JrMXLcm4Ap.png" alt="logo-xe"  ><span style="right: 75px;">Kia</span></a></div>
                                <div class="shadow" ><a href="Vinfast.html"><img src="{{asset('fe-assets')}}/img/b1jG5dKj26eRha1W4N18eDTmnRFtpQv4WaYoAQvx.png" alt="logo-xe"  ><span style="right: 65px;">Vinfat</span></a></div>
                                <div class="shadow" ><a href="#"><img src="{{asset('fe-assets')}}/img/SyCd75asAUtvOi47Xo8hhRwrUMFCzqVyMdTX4v1n.png" alt="logo-xe"  ><span style="right: 46px;">Mitsubishi</span></a></div>
                                <div class="shadow" ><a href="Mazda.html"><img src="{{asset('fe-assets')}}/img/Ivm3NQ38jfj7OB9CnvnrY832QuWVde0VS1zVxD6A.png" alt="logo-xe"  ><span style="right: 60px;">Mazda</span></a></div>
                            </ul>
                            <ul class="menu-logo">
                                <div class="shadow" ><a href="Ford.html"><img src="{{asset('fe-assets')}}/img/HIsRavXij0eXRvpan2rQ6hhK1x0xE5AQZQulMAwh.png" alt="logo-xe"  ><span style="right: 70px;">Ford</span></a></div>
                                <div class="shadow" ><a href="#"><img src="{{asset('fe-assets')}}/img/EUz8F51M2NxCyY6z4XTb9A2uBGxBRjeUIi6DdrBj.png" alt="logo-xe"  ><span style="right: 63px;">Honda</span></a></div>
                                <div class="shadow" ><a href="#"><img src="{{asset('fe-assets')}}/img/6gUqToXRpeo5wtrKZA7AerqzFRZWvDAOHvedLR8L.png" alt="logo-xe"  ><span style="right: 60px;">Suzuki</span></a></div>
                                <div class="shadow" ><a href="Mersedes-Benz.html"><img src="{{asset('fe-assets')}}/img/rflImCxyuFYRqhhufOzm49pxkBlTFElThgyp4gvz.png" alt="logo-xe"  ><span style="right: 20px;">Mercedes-Benz</span></a></div>
                                <div class="shadow" ><a href="BMW.html"><img src="{{asset('fe-assets')}}/img/GKp6EsreSG6EE6M4FGbwyTqtqW92dgs0gySJrgIm.png" alt="logo-xe"  ><span style="right: 68px;">BMW</span></a></div>
                                <div class="shadow" ><a href="Audi.html"><img src="{{asset('fe-assets')}}/img/B1WGu56r65M1CX2G7MwdsZBlsdtAn8sYkC6I7iz2.png" alt="logo-xe"  ><span style="right: 70px;">Audi</span></a></div>
                            </ul>

                            <ul class="menu-logo">
                                <div class="shadow" ><a href="#"><img src="{{asset('fe-assets')}}/img/RUaGWHaM7ITdK32Ym8C2CcQYex1TRltUG0TPNyiB.png" alt="logo-xe"  ><span style="right: 55px;">Peugeot</span></a></div>
                                <div class="shadow" ><a href="#"><img src="{{asset('fe-assets')}}/img/AObF7Z5iuO7k7LnLzHf04yK4afd72Z6KlZO3x6O7.png" alt="logo-xe"  ><span style="right: 65px;">Isuzu</span></a></div>
                                <div class="shadow" ><a href="#"><img src="{{asset('fe-assets')}}/img/6Iv4VKqCyIeHqokGF5hfRUkcd8sVhE5l7myc2gm2.png" alt="logo-xe"  ><span style="right: 60px;">Subaru</span></a></div>
                                <div class="shadow" ><a href="#"><img src="{{asset('fe-assets')}}/img/66WARwSXjFfhTS8Gd2Ze2bSzW05W4NB1JPE0TXHL.png" alt="logo-xe"  ><span style="right: 60px;">Nissan</span></a></div>
                                <div class="shadow" ><a href="#"><img src="{{asset('fe-assets')}}/img/bEniM1nfBsq6vBjO61Emk2kRTl0q8doZAV4HBaLm.png" alt="logo-xe"  ><span style="right: 75px;">MG</span></a></div>
                                <div class="shadow" ><a href="#"><img src="{{asset('fe-assets')}}/img/JhRTYkecAKtFQwmBMj6gTy996ZhjdBnYTyytlv77.png" alt="logo-xe"  ><span style="right: 65px;">Lexus</span></a></div>
                            </ul>
                        </div>
                        
                        <div id="btnShow">
                            <div class="hiden-show">
                                <button onclick="toggleShow()">Xem Thêm<img src="{{asset('fe-assets')}}/img/chevrons-down_20_20.png" alt="" ></button>
                            </div>
                        </div>
                        <!-- End form Down -->
                        <div id="btnHide" style="display: none;">
                            <ul class="menu-logo">
                                <div class="shadow" ><a href="#"><img src="{{asset('fe-assets')}}/img/lhb1UKRgVtLBmSbgejXh8KMT7Y1n10pnWjtc74GC.png" alt="logo-xe"  ><span style="right: 65px;">Acura</span></a></div>
                                <div class="shadow" ><a href="#"><img src="{{asset('fe-assets')}}/img/sNQQLeQlI0V92Bo5j4xUHhLwJ0hfJcGbZ5BeeUZa.jpg" alt="logo-xe"  ><span style="right: 48px;">Đô Thành</span></a></div>
                                <div class="shadow" ><a href="#"><img src="{{asset('fe-assets')}}/img/WtVMdr3zGFYCJYgwhnd3363643rJUDMBXkarqQdi.png" alt="logo-xe"  ><span style="right: 70px;">Hino</span></a></div>
                                <div class="shadow" ><a href="#"><img src="{{asset('fe-assets')}}/img/AxX6JwcNkq90Sh8LXffj9xgWpGIPJwbw5VRDE689.png" alt="logo-xe"  ><span style="right: 65px;">Volvo</span></a></div>
                                <div class="shadow" ><a href="#"><img src="{{asset('fe-assets')}}/img/yEUrcyAltI05Ms7iKAzgAzMDWkCpXYJYVR8r2AvO.png" alt="logo-xe"  ><span style="right: 35px;">Volkswagen</span></a></div>
                                <div class="shadow" ><a href="#"><img src="{{asset('fe-assets')}}/img/cYMrrMLBWgYKKju8imZiTSuec8Ketkld19SrCE0L.png" alt="logo-xe"  ><span style="right: 55px;">Bentley</span></a></div>
                            </ul>

                            <ul class="menu-logo">
                                <div class="shadow" ><a href="#"><img src="{{asset('fe-assets')}}/img/xP4BPDMQtJICmodpZ4z98MtdK1nN97nATjWnTL2Q.png" alt="logo-xe"  ><span style="right: 75px;">Mini</span></a></div>
                                <div class="shadow" ><a href="#"><img src="{{asset('fe-assets')}}/img/vfHWbuxbCaGyvCsqbiJKf0ix4vWbS76tnNox1xRv.png" alt="logo-xe"  ><span style="right: 70px;">Jeep</span></a></div>
                                <div class="shadow" ><a href="#"><img src="{{asset('fe-assets')}}/img/TDiHU9lqDxlyD74Iul1hVxtFElDC7LhK9MzXtyo8.png" alt="logo-xe"  ><span style="right: 35px;">Land Rover</span></a></div>
                                <div class="shadow" ><a href="#"><img src="{{asset('fe-assets')}}/img/TcFuubTaDmAh4fdMu2GDliLqlgdKZkcVOqrgkk6V.png" alt="logo-xe"  ><span style="right: 50px;">Dongben</span></a></div>
                                <div class="shadow" ><a href="#"><img src="{{asset('fe-assets')}}/img/rVIyp5kLRXmGOHpFlinPAUtd8PAUIt37oAbMyWdd.png" alt="logo-xe"  ><span style="right: 55px;">Porsche</span></a></div>
                                <div class="shadow" ><a href="Maserati.html"><img src="{{asset('fe-assets')}}/img/j4rPTwqOB5HsjMQOFfrNTt3frH2xUj1jrzd3wAUx.png" alt="logo-xe"  ><span style="right: 55px;">Maserati</span></a></div>
                            </ul>

                            <ul class="menu-logo">
                                <div class="shadow" ><a href="#"><img src="{{asset('fe-assets')}}/img/dzy60miFK4sJewVCRpAehjPOCk1sGWrDohWnBbep.png" alt="logo-xe"  ><span style="right: 50px;">Chevrolet</span></a></div>
                                <div class="shadow" ><a href="#"><img src="{{asset('fe-assets')}}/img/DHg3m1HXxu5qLZQCM6xSHbCabccJjrmOrvCfhQ6o.png" alt="logo-xe"  ><span style="right: 60px;">Jaguar</span></a></div>
                                <div class="shadow" ><a href="#"><img src="{{asset('fe-assets')}}/img/DDsGtA9u9cJGtHyQW0GX2kavHfAthqCIxmd1Mxpv.png" alt="logo-xe"  ><span style="right: 68px;">RAM</span></a></div>
                                <div class="shadow" ><a href="#"><img src="{{asset('fe-assets')}}/img/bTSWdI08orNpdut09fWv4LFsi7hfjtwng29h8RPz.png" alt="logo-xe"  ><span style="right: 50px;">Kawasaki</span></a></div>
                                <div style="border: none;"><a href="#"><img src=""></a></div>
                                <div style="border: none;"><a href="#"><img src=""></a></div>
                            </ul>

                            <div class="hiden-show">
                                <button onclick="toggleHiden()">Thu Gọn<img src="{{asset('fe-assets')}}/img/chevrons-up_20_20.png" alt=""></button>
                            </div>

                        </div>
                        <!-- End form hiden -->
                    </div>
                </section>
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