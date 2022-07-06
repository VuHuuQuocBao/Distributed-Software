<?php
require "Widget/Menu.php";
require('Widget/scroll.php');

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/LienHe.css">
    <script src="https://unpkg.com/scrollreveal"></script>
</head>

<body>

    <div>
        <style>
            .Contain_Contact--info {
                display: flex;
                flex-direction: column;
            }

            .Contain_Contact {
                justify-content: space-between;
                padding: 0 30px;
            }

            .Contain_Contact--info,
            .map {
                flex-basis: 50%;
            }

            .map iframe {
                width: 100%;
                height: 100%;
            }
            .Contain_Contact__Left textarea,
            .Contain_Contact__Left input {
                width: 714px;
            }
        </style>
            <div class="Nav__Staff--Contact">
                <b></b>
                <h2>LIÊN HỆ</h2>
                <b></b>
            </div>
        <div class="Contain_Contact">
            <div class="Contain_Contact--info">
                <div style="order: 2" class="Contain_Contact__Left">
                    <form action="" method="POST">
                        <div>
                            <h3>Tiêu đề liên hệ</h3>
                            <input type="text" name="tieuDe" placeholder="Nhập tiêu đề">
                        </div>

                        <div>
                            <h3>Họ tên</h3>
                            <input type="text" name="hoTen" placeholder="Nhập Họ tên">
                        </div>

                        <div>
                            <h3>Email</h3>
                            <input type="text" name="email" placeholder="Nhập Email">
                        </div>

                        <div>
                            <h3>Nội dung</h3>
                            <textarea name="noidung" placeholder="Nhập nội dung"></textarea>
                        </div>

                        <input type="Submit" name="sendEmail" class="Contain_Contact__Left__Submit" value="Gửi">
                    </form>
                </div>

                <div class="Contain_Contact__Right">
                    <p style="padding-right: 120px;">Wibugang Shop là nơi mua sắm các sản phẩm Quần áo nữ - Váy - Đầm</p> <br> 
                    <p> uy tín và chất lượng kiểu dáng đẹp, hợp thời trang </p><br> 
                    <p> đồng hành cùng cung cách phục vụ chuyên nghiệp nhất.</p><br>
                    <p> Nếu bạn là một tín đồ thời trang và luôn muốn “săn lùng”</p> <br>
                    <p> những mặt hàng thời trang mới nhất, hợp thời trang nhất, </p><br>
                    <p> đẹp nhất, giá cả phù hợp nhất, đồng thời trải nghiệm dịch vụ tốt nhất,</p><br>
                    <p> hãy để Wibugang đồng hành cùng bạn!</p>
                        <br>
                        ------------------------------------------------------------
                        <br>

                        <span>
                            <i class="fa-solid fa-location-dot"></i>
                            97 Sông Nhuệ, Đức Thắng, Bắc Từ Liêm, Hà Nội
                            <br>
                            <br>
                        </span>

                        <span>
                            <i class="fa-solid fa-phone"></i>
                            0862880810
                            <br>
                            <br>
                        </span>

                        <span>
                            <i class="fa-solid fa-envelope"></i>
                            <a href="">webshopdocker@gmail.com</a>
                            <br>
                            <br>
                        </span>

                        <span>
                            <i class="fa-solid fa-house"></i>
                            <a href="">www.wibugangz.com</a>
                            <br>
                            <br>
                        </span>

                        <span>
                            <i class="fa-brands fa-facebook"></i>
                            <a href="https://www.facebook.com/nhat.canh.1998/">facebook.com/nhat.canh.1998/</a>
                        </span>
                    </p>
                </div>
            </div>
            <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3722.922387437337!2d105.76756112945151!3d21.075761846695585!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313455370ce0c26d%3A0x84694460eefc5345!2zOTcgxJAuIFPDtG5nIE5odeG7hywgxJDDtG5nIE5n4bqhYywgVOG7qyBMacOqbSwgSMOgIE7hu5lpLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1655229540563!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

        </div>

        <div class="Nav__Staff--Contact">
            <b></b>
            <h2>NHÂN VIÊN</h2>
            <b></b>
        </div>

        <div class="Nav__Staff">
            <div class="Nav__StaffContain">
                <div class="Nav__StaffContain__div Nav__StaffContain__div_1">
                    <img class="Animation_Hover" src="\Image\NhanVien\Nhat.jpg" alt="">
                    <h2>Nguyễn Cảnh Nhật</h2>
                    <h3 style="color:rgb(245, 77, 77)">Tổng Giám đốc</h3>

                    <div class="Infor_Staff">
                        <img src="/Image/Icon/Ins.png" alt="">
                        <img src="/Image/Icon/Tw.png" alt="">
                        <img src="/Image/Icon/Fb.png" alt="">
                    </div>
                </div>

                <div class="Nav__StaffContain__div Nav__StaffContain__div_2">
                    <img class="Animation_Hover" src="\Image\NhanVien\Linh.jpg" alt="">
                    <h2>Nguyễn Văn Linh</h2>
                    <h3 style="color:rgb(245, 77, 77)">Phó Tổng Giám Đốc</h3>

                    <div class="Infor_Staff">
                        <img src="/Image/Icon/Ins.png" alt="">
                        <img src="/Image/Icon/Tw.png" alt="">
                        <img src="/Image/Icon/Fb.png" alt="">
                    </div>
                </div>

                <div class="Nav__StaffContain__div Nav__StaffContain__div_3">
                    <img class="Animation_Hover" src="\Image\NhanVien\Hoan.jpg" alt="">
                    <h2>Lại Văn Hoàn</h2>
                    <h3 style="color:rgb(245, 77, 77)">Cô Thư Ký May Mắn</h3>

                    <div class="Infor_Staff">
                        <img src="/Image/Icon/Ins.png" alt="">
                        <img src="/Image/Icon/Tw.png" alt="">
                        <img src="/Image/Icon/Fb.png" alt="">
                    </div>
                </div>

                <div class="Nav__StaffContain__div Nav__StaffContain__div_4">
                    <img class="Animation_Hover" src="\Image\NhanVien\Bao.jpg" alt="">
                    <h2>Vũ Hữu Quốc Bảo</h2>
                    <h3 style="color:rgb(245, 77, 77)">Bảo Vệ</h3>

                    <div class="Infor_Staff">
                        <img src="/Image/Icon/Ins.png" alt="">
                        <img src="/Image/Icon/Tw.png" alt="">
                        <img src="/Image/Icon/Fb.png" alt="">
                    </div>
                </div>

                <div class="Nav__StaffContain__div Nav__StaffContain__div_5">
                    <img class="Animation_Hover" src="\Image\NhanVien\Quan.jpg" alt="">
                    <h2>Ngọ Văn Quân</h2>
                    <h3 style="color:rgb(245, 77, 77)">Nhân Viên</h3>

                    <div class="Infor_Staff">
                        <img src="/Image/Icon/Ins.png" alt="">
                        <img src="/Image/Icon/Tw.png" alt="">
                        <img src="/Image/Icon/Fb.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        ScrollReveal(
        {
            reset: true,
            distance: '150px',
            duaration: 1600,
            delay: 25,
        });

     

    </script>
</body>

</html>

<?php
require('Widget/Footer.php');
?>
