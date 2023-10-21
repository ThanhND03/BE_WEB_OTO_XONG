<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tin Tức</title>
    <link rel="stylesheet" href="{{asset('fe-assets')}}/css/TintucNew.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
<div class="logo"><a href="{{route('index')}}"><img src="{{asset('fe-assets')}}/img/choxe.png" alt="choxe"></a></div> 
<div class="top-container">
    <nav class="menu-container">
        <ul id="mainmenu">
            <li><a href="">Thông tin ô tô</a>
            <ul class="sub-menu">
                <li><a href="">Thông số kỹ thuật xe</a></li>
                <li><a href="">Thị trường ô tô cũ</a></li>
                <li><a href="">Thị trường ô tô mới</a>
                    <ul class="sub-menu">
                        <li><a href="">Thông số kỹ thuật xe</a></li>
                        <li><a href="">Thị trường ô tô cũ</a></li>
                        <li><a href="">Thị trường ô tô mới</a></li>
                        <li><a href="">Khuyến mãi</a></li>
                    </ul>         
                </li>
                <li><a href="">Khuyến mãi</a></li>
            </ul>            
            </li>
            <li><a href="">So sánh đánh giá xe</a>
                <ul class="sub-menu">
                    <li><a href="">Đánh giá xe</a>
                        <ul class="sub-menu">
                            <li><a href="">Đánh giá ô tô từ người dùng</a></li>
                        </ul>
                    </li>
                    <li><a href="">So sánh xe</a></li>
                </ul>
            </li>
            <li><a href="">Tư vấn</a>
                <ul class="sub-menu">
                    <li><a href="">Bảo hiểm ô tô</a></li>
                    <li><a href="">Chăm sóc bảo dưỡng xe</a></li>
                    <li><a href="">Đăng kiểm ô tô</a></li>
                    <li><a href="">Kinh nghiệm lái xe</a></li>
                    <li><a href="">Luật giao thông</a></li>
                    <li><a href="">Mua xe theo phong thủy</a></li>
                </ul>
            </li>
            <li><a href="">Mua bán xe ô tô cũ</a>
                <ul class="sub-menu">
                    <li><a href="">Kinh nghiệm mua ô tô cũ</a>
                        <ul class="sub-menu">
                            <li><a href="">Kinh nghiệm kiểm tra xe ô tô cũ</a></li>
                            <li><a href="">Nhật ký kiểm tra xe ô tô cũ Cả Audit</a></li>
                            <li><a href="">Thủ tục mua bán xe cũ</a></li>
                        </ul>
                    </li>
                    <li><a href="">Mua ô tô cũ trả góp</a></li>
                    <li><a href="">Mua xe cũ theo nhu cầu</a></li>
                    <li><a href="">Mua xe cũ theo tài chính</a></li>
                </ul>
            </li>
            <li><a href="">Giá xe ô tô</a>
                <ul class="sub-menu">
                    <li><a href="">Giá xe ô tô cũ</a></li>
                    <li><a href="">Giá xe ô tô mới</a>
                        <ul class="sub-menu">
                            <li><a href="">Toyota</a>
                                <ul class="sub-menu">
                                    <li><a href="">Bảng giá xe Vios</a></li>
                                    <li><a href="">Bảng giá xe Camry</a></li>
                                    <li><a href="">Bảng giá xe Innova</a></li>
                                    <li><a href="">Bảng giá xe Fortuner</a></li>
                                    <li><a href="">Bảng giá xe Altis</a></li>
                                    <li><a href="">Bảng giá xe Rush</a></li>
                                    <li><a href="">Bảng giá xe Avanza</a></li>
                                </ul>
                            </li>
                            <li><a href="">Mazda</a>
                                <ul class="sub-menu">
                                    <li><a href="">Bảng giá xe Mazda 2</a></li>
                                    <li><a href="">Bảng giá xe Mazda 3</a></li>
                                    <li><a href="">Bảng giá xe Mazda 6</a></li>
                                    <li><a href="">Bảng giá xe CX-5</a></li>
                                    <li><a href="">Bảng giá xe CX-8</a></li>
                                    <li><a href="">Bảng giá xe BT50</a></li>
                                </ul>
                            </li>
                            <li><a href="">Kia</a>
                                <ul class="sub-menu">
                                    <li><a href="">Bảng giá xe Cerato</a></li>
                                    <li><a href="">Bảng giá xe K3</a></li>
                                    <li><a href="">Bảng giá xe Optima</a></li>
                                    <li><a href="">Bảng giá xe Rio</a></li>
                                    <li><a href="">Bảng giá xe Morning</a></li>
                                    <li><a href="">Bảng giá xe Rondo</a></li>
                                    <li><a href="">Bảng giá xe Sedona</a></li>
                                    <li><a href="">Bảng giá xe Sorento</a></li>
                                    <li><a href="">Bảng giá xe Forte</a></li>
                                </ul>
                            </li>
                            <li><a href="">Huyndai</a>
                                <ul class="sub-menu">
                                    <li><a href="">Bảng giá xe i10</a></li>
                                    <li><a href="">Bảng giá xe i20</a></li>
                                    <li><a href="">Bảng giá xe Accent</a></li>
                                    <li><a href="">Bảng giá xe Elantra</a></li>
                                    <li><a href="">Bảng giá xe Sonata</a></li>
                                    <li><a href="">Bảng giá xe Santa Fe</a></li>
                                    <li><a href="">Bảng giá xe Tucson</a></li>
                                    <li><a href="">Bảng giá xe Starex</a></li>
                                </ul>
                            </li>
                            <li><a href="">Nissan</a>
                                <ul class="sub-menu">
                                    <li><a href="">Bảng giá xe Teana</a></li>
                                    <li><a href="">Bảng giá xe Xtrail</a></li>
                                    <li><a href="">Bảng giá xe Sunny</a></li>
                                    <li><a href="">Bảng giá xe Navara</a></li>
                                </ul>
                            </li>
                            <li><a href="">Vinfast</a>
                                <ul class="sub-menu">
                                    <li><a href="">Bảng giá xe Fadil</a></li>
                                    <li><a href="">Bảng giá xe Vinfast Lux</a></li>
                                </ul>
                            </li>
                            <li><a href="">Mercedes</a>
                                <ul class="sub-menu">
                                    <li><a href="">Bảng giá xe C-Class</a></li>
                                    <li><a href="">Bảng giá xe E-Class</a></li>
                                    <li><a href="">Bảng giá xe S-Class</a></li>
                                    <li><a href="">Bảng giá xe GLC</a></li>
                                </ul>
                            </li>
                            <li><a href="">Ford</a>
                                <ul class="sub-menu">
                                    <li><a href="">Bảng giá xe Transit</a></li>
                                    <li><a href="">Bảng giá xe Fiesta</a></li>
                                    <li><a href="">Bảng giá xe Focus</a></li>
                                    <li><a href="">Bảng giá xe Everest</a></li>
                                    <li><a href="">Bảng giá xe Ranger</a></li>
                                </ul>
                            </li>
                            <li><a href="">Mitsubishi</a>
                                <ul class="sub-menu">
                                    <li><a href="">Bảng giá xe XPander</a></li>
                                    <li><a href="">Bảng giá xe Attrage</a></li>
                                    <li><a href="">Bảng giá xe Mirage</a></li>
                                    <li><a href="">Bảng giá xe Triton</a></li>
                                    <li><a href="">Bảng giá xe Outlander</a></li>
                                    <li><a href="">Bảng giá xe Pajero</a></li>
                                </ul>
                            </li>
                            <li><a href="">Honda</a>
                                <ul class="sub-menu">
                                    <li><a href="">Bảng giá xe Civic</a></li>
                                    <li><a href="">Bảng giá xe City</a></li>
                                    <li><a href="">Bảng giá xe Jazz</a></li>
                                    <li><a href="">Bảng giá xe CRV</a></li>
                                    <li><a href="">Bảng giá xe HRV</a></li>
                                </ul>
                            </li>
                            <li><a href="">Suzuki</a>
                                <ul class="sub-menu">
                                    <li><a href="">Bảng giá xe Ertiga</a></li>
                                    <li><a href="">Bảng giá xe Vitara</a></li>
                                    <li><a href="">Bảng giá xe Swift</a></li>
                                    <li><a href="">Bảng giá xe Ciaz</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a href="">Bảng giá xe tải</a></li>
                </ul>
            </li>
        </ul>
    </nav>
</div>
<div class="body-container">
    <div class="body-left-container">
        <table class="copywrite">
            <tr>
                <td> <img src="{{asset('fe-assets')}}/img/Capture.PNG" alt="" class="pic"></td>
                <td><h2>Thủ tục sang tên xe ô tô khác tỉnh cập nhật mới nhất [07/2023]</h2>
                 <p>Việc sử dụng một khoản tiền sở hữu xe ô tô mới đã làm nhiều người 
                    suy nghĩ đến hướng mua xe ô tô đã...    
                </p></td>
            </tr>
            <tr>
                <td> <img src="{{asset('fe-assets')}}/img/Capture2.PNG" alt="" class="pic" ></td>
                <td> <h2>Phí sang tên ô tô cập nhật mới [2023] Sang tên xe ô 
                    tô hết bao nhiêu tiền
                </h2>
                <p>Việc trao đổi mua bán xe ô tô đã qua sử dụng không còn quá xa lạ trên
                    thị trường ô tô hiện nay. Tuy...
                </p></td>
            </tr>
            <tr>
                <td> <img src="{{asset('fe-assets')}}/img/Capture3.PNG" alt=""" class="pic"></td>
                <td>  <h2>Phí rút hồ sơ gốc xe ô tô cập nhật mới nhất [07/2023]</h2>
                    <p>Mua xe ô tô cũ khác tỉnh vấn đề lo ngại nhất đối với những
                        người mua xe ô tô cũ là thực hiện các...
                    </p></td>
            </tr>
            <tr>
                <td><img src="{{asset('fe-assets')}}/img/Capture4.PNG" alt="" class="pic"></td>
                <td><h2>Dịch vụ rút hồ sơ gốc xe ô tô TP HCM, Hà Nội, Đà Nẵng từ Car Audit</h2>
                    <p>Khi mua bán, sang tên đổi chủ xe ô tô khác tỉnh thì rút hồ sơ gốc là 
                        việc bắt buộc phải thực hiện. Tuy...
                    </p>
                </td>
            </tr>
            <tr>
                <td> <img src="{{asset('fe-assets')}}/img/Capture5.png" alt="" class="pic"></td>
                <td>  <h2>Thủ tục rút hồ sơ gốc xe ô tô Car Audit[2023] theo quy định mới nhất</h2>
                    <p>Rút hồ sơ gốc xe ô tô là thủ tục bắt buộc khi mua bán ô tô giữa các tỉnh khác nhau.
                        Bạn đang phân...</p>
                </td>
            </tr>
            <tr>
                <td><img src="{{asset('fe-assets')}}/img/Capture6.PNG" alt="" class="pic"></td>
                <td>
                    <h2>Thủ tục sang tên xe ô tô và lệ phí sang tên đổi chủ [07/2023] cập nhật mới</h2>
                    <p>Việc trao đổi mua bán xe ô tô cũ đã qua sử dụng không còn xa lạ đối với thị trường
                        ô tô Việt Nam...
                    </p>
                </td>
            </tr>
            <tr>
                <td><img src="{{asset('fe-assets')}}/img/Capture7.PNG" alt="" class="pic"></td>
                <td>
                    <h2>Mẫu hợp đồng mua bán xe ô tô cũ - Giấy mua bán xe ô tô [2023]</h2>
                    <p>Việc mua xe ô tô cũ có vai trò quan trọng trong bài toán chi phí của
                        nhiều người, tuy nhiên việc mua xe cũ...
                    </a></p>
                </td>
            </tr>
            <tr>
                <td><img src="{{asset('fe-assets')}}/img/Capture8.PNG" alt="" class="pic"></td>
                <td>
                    <h2>Rút hồ sơ gốc xe ô tô theo quy định cập nhật từ Car Audit [07/2023]</h2>
                    <p>Theo quy định mới từ ngày 1/8/2020, khi thực hiện các thủ tục sang tên xe 
                        khác tỉnh hoặc thành phố, chủ sở hữu sẽ...
                    </p>
                </td>
            </tr>
            <tr>
                <td><img src="{{asset('fe-assets')}}/img/Capture9.PNG" alt="" class="pic"></td>
                <td>
                    <h2>Thủ tục sang tên xe ô tô cùng tỉnh cập nhật mới nhất 2023</h2>
                    <p>Các thủ tục sang tên xe ô tô cùng tỉnh và khác tỉnh ngày nay đã được đơn giản hóa 
                        hơn so với trước đây...
                    </p>
                </td>
            </tr>
            <tr>
                <td><img src="{{asset('fe-assets')}}/img/Capture10.PNG" alt="" class="pic"></td>
                <td><h2>Thủ tục mua bán xe ô tô cũ theo quy định mới nhất 2023</h2>
                <p>Khi mua bán xe ô tô đã qua sử dụng từ đại lý mua bán xe ô tô cũ, có thể
                    đại lý sẽ giúp bạn...</p>
                </td>
            </tr> 
        </table>
        <div class="page">
            <div class="pagination">
                <a href="#" class="active">1</a>
                <a href="#">2</a>
                <a href="#">3</a>
                <a href="#">...</a>
                <a href="#">155</a>
                <a href="#">&raquo;</a>
              </div>
        </div>
    </div>
    <div class="body-right-container">
        <form>
            <table padding="0">
                <tr>
                    <td><input type="text" placeholder="Search this site..." class="searchbox">
                    <button class="searchbtn">Search</button></td>
                </tr>
            </table>
            <p class="headtitle">AN TÂM MUA Ô TÔ CŨ CÙNG CAR AUDIT</p>
            <hr class="myhr">
            <img src="{{asset('fe-assets')}}/img/Capture11.PNG">
            <p class="headtitle">Tham gia Group mua bán Ô tô cũ Chợ xe</p>
            <hr class="myhr">
            <img src="{{asset('fe-assets')}}/img/Capture12.PNG">
            <p class="headtitle">Bài mới nhất</p>
            <hr class="myhr">
            <p class="sidenews">Thủ tục sang tên xe ô tô khác tỉnh cập nhật mới nhất [07/2023]</p>
            <hr class="bothr">
            <p class="sidenews">Phí sang tên ô tô cập nhật mới [2023] Sang tên ô tô hết bao nhiêu tiền ?</p>
            <hr class="bothr">
            <p class="sidenews">Hợp đồng ủy quyền ô tô - Phí công chứng ủy quyền ô tô từ Car Audit</p>
            <hr class="bothr">
            <p class="sidenews">Phí rút hồ sơ gốc xe ô tô cập nhật mới nhất [07/2023]</p>
            <hr class="bothr">
            <p class="sidenews">Dịch vụ rút hồ sơ gốc xe ô tô TP HCM, Hà Nội, Đà Nẵng từ Car Audit</p>
            <hr class="bothr">
        </form>
    </div>
</div>
<div class="footer">
    <table class="container-footer">
        <tr>
            <td>Giới thiệu | Quy chế hoạt động | Báo giá</td>
            <td>Giới thiệu</td>
        </tr>
        <tr>
            <td rowspan="3" class="botlogo"><img src="{{asset('fe-assets')}}/img/logo_white_117_32.png" alt="" ></td>
            <td>CÔNG TY CỔ PHẦN Ô TÔ XUYÊN VIỆT</td>
        </tr>
        <tr>
            <td class="address">Địa chỉ: Tầng 6,Tòa Nhà Việt Úc, 402 Nguyễn Thị Minh Khai, Phường 5, Quận 3, TP.Hồ Chí Minh, Việt Nam.</td>
        </tr>
        <tr>
            <td>ĐT:0934161616</td>
        </tr>
        <tr>
            <td colspan="2">© 2023 Chợ Xe – Thông tin giá xe cũ mới, so sánh, kiểm tra và thẩm định ô tô | WordPress Theme by Superb WordPress Themes</td>
            <td></td>
        </tr>
    </table>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script>
    $(document).ready(function(){
        $('.sub-menu').parent('li').addClass('has-child');
    });
</script>
</body>
</html>