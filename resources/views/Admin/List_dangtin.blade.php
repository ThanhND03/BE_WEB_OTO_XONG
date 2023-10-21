<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('be-assets')}}/css/form_admin.css">
    <link rel="stylesheet" href="{{asset('be-assets')}}/css/bootstrap.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="{{asset('be-assets')}}/css/phantrang_1.css">
    <title>ADMIN-Đăng Tin</title>
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
                    <!-- FORM SEARCH -->
                    <style>
                        /* SEARCH */
                           
                           form#search{
                               width: 100%;
                               margin: 0 auto;
                           }

                           input.txtsearch{
                               width: 85%;
                               height: 40px;
                               outline: none;
                               border: 1px solid #F05626;
                               box-shadow: 0 0 3px black;
                               border-radius: 5px;
                               cursor: pointer;
                               padding-left: 10px;
                           }

                   

                           button.submit-search{
                               position: relative;
                               top: 2px;
                               width: 14%;
                               height: 40px;
                               margin-left: 5px;
                               background-color: #F05626;
                               border: none;
                               outline: none;
                               font-size: 20px;
                               font-weight: 600;
                               letter-spacing: 2px;
                               color: white;
                               border-radius: 5px;
                               box-shadow: 0 0 3px black;
                           }

                       /* END SEARCH */
                   </style>

                   <form action=""  id="search">
                       
                       <input type="text" name="txtsearch" class="txtsearch" placeholder="Nhập Từ Khóa Cần Tìm Kiếm ......">
                       
                       {{-- <input type="submit" class="submit-search" > --}}
                       <button type="submit" class="submit-search">Tìm Kiếm</button>
                   </form>
                    <!-- END FORM SEARCH -->
                    
                    
                                <!-- <div class="panel-body">
                                    <div class="table-responsive"> -->

                                        @if ($message = Session::get('delete'))
                                        <div class="alert alert-danger " role="alert" style="text-align: center">
                                            {{-- <button type="button" class="close" data-dismiss="alert">×</button>	 --}}
                                                <strong style="color: rgb(41, 145, 12);font-size: 20px">{{ $message }}</strong>
                                        </div>
                                        @endif

                                        @if ($message = Session::get('edit'))
                                        <div class="alert alert-danger " role="alert" style="text-align: center">
                                            {{-- <button type="button" class="close" data-dismiss="alert">×</button>	 --}}
                                                <strong style="color: rgb(41, 145, 12);font-size: 20px">{{ $message }}</strong>
                                        </div>
                                        @endif

                                    <table class="table">
                                        <thead>
                                            <tr style="font-size: 15px; ">
                                                {{-- <th>STT</th> --}}
                                                <th>ID</th>
                                                <th>City</th>
                                                <th>Status</th>
                                                <th>Picture</th>
                                                <th>Hãngxe</th>
                                                <th>DòngXe</th>
                                                <th>NămSX</th>
                                                <th>PhiênBản</th>
                                                <th>Km</th>
                                                <th>Số</th>
                                                <th>ĐộngCơ</th>
                                                <th>NhiênLiệu</th>
                                                <th>GiáBán</th>
                                                <th>TiêuĐề</th>
                                                <th>MôTả</th>
                                                <th>Delete</th>
                                                <th>Edit</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($product as $row)
                                                <tr>
                                                    {{-- <td>{{++$i}}</td> --}}
                                                    <td>{{$row->id}}</td>
                                                    <td>{{$row->khuvuc}}</td>
                                                    <td>{{$row->tinhtrang}}</td>
                                                    {{-- <td>{{$row->txtpicture}}</td> --}}
                                                    {{-- <td><img src="{{ asset('storage/images/' .$row->txtpicture) }}" alt="img" width="50px" height="50px"></td> --}}
                                                    <td>
                                                        @if($row->txtpicture)
                                                        <img src="{{ asset('uploads/'.$row->txtpicture) }}" style="height: 50px;width:100px;">
                                                        @else 
                                                        <span>No image found!</span>
                                                        @endif
                                                    </td>
                                                    <td>{{$row->hangsx}}</td>
                                                    <td>{{$row->dongxe}}</td>
                                                    <td>{{$row->namsx}}</td>
                                                    <td>{{$row->phienban}}</td>
                                                    <td>{{$row->sokmdadi}}</td>
                                                    <td>{{$row->hopso}}</td>
                                                    <td>{{$row->dandong}}</td>
                                                    <td>{{$row->nhienlieu}}</td>
                                                    <td>{{$row->giaban}}</td>
                                                    <td>{{$row->tieudetin}}</td>
                                                    <td>{{$row->motachitiet}}</td>
                                                    {{-- <td>{{$row->created_at}}</td>
                                                    <td>{{$row->updated_at}}</td> --}}
                                                    <td>
                                                        {{-- <form action="/Admin/List_dangtin/delete/{{$row->id}}" method="POST" onsubmit="return ConfimDelete( this ) ">
                                                            @method('DELETE')
                                                            @csrf
                                                            <button style="border: none;outline: none; color:red" class="glyphicon glyphicon-remove" type="submit"></button>
                                                        </form> --}}
                                                        <a href="#" onclick=" return(confirm('Bạn có chắc muốn xóa')) ">
                                                            <form action="/Admin/List_dangtin/delete/{{$row->id}}" method="POST" onsubmit="return ConfimDelete( this ) ">
                                                                @method('DELETE')
                                                                @csrf
                                                                <button style="border: none;outline: none; color:red" class="glyphicon glyphicon-remove" type="submit"></button>
                                                            </form>
                                                        </a>
                                                    </td>
                                                    {{-- <td><a href="#" style="text-decoration: none"><span class="glyphicon glyphicon-remove" style="display: flex;justify-content: center"></span></a></td> --}}
                                                    <td><a href="/Admin/list_dangtin/edit/{{$row->id}}" style="text-decoration: none"><span class="glyphicon glyphicon-edit" style="display: flex;justify-content: center"></span></a></td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    {{$product->links()}}
                                    <a style="font-size: 18px;padding-left: 50px;" href="{{route('AdminTin')}}">Quay Lại</a>
                                 
                </div>
                <!-- END CLASS FORM -->
            </div>
            <!-- END CONTAINER -->
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
</body>
</html>