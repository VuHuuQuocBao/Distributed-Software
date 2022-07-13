<?php
require "Widget/Menu.php";
require('Widget/scroll.php');


if (isset($_POST['sendEmail'])) {
    require "PHPMailer-master/src/PHPMailer.php";
    require "PHPMailer-master/src/SMTP.php";
    require 'PHPMailer-master/src/Exception.php';

    $tieuDe = isset($_POST['tieuDe']) ? $_POST['tieuDe'] : null;
    $hoTen = isset($_POST['hoTen']) ? $_POST['hoTen'] : null;
    $email = isset($_POST['email']) ? $_POST['email'] : null;
    $noiDung = isset($_POST['noidung']) ? $_POST['noidung'] : null;

    $mail = new PHPMailer\PHPMailer\PHPMailer(true); //true:xử lý lỗi nếu có

    try {
        $mail->SMTPDebug = 0; //0,1,2: chế độ debug. khi chạy ngon thì chỉnh lại 0 nhé
        $mail->isSMTP();
        $mail->CharSet  = "utf-8";
        $mail->Host = 'smtp.gmail.com';  //địa chỉ mail sever gmail
        $mail->SMTPAuth = true; // Enable authentication
        $mail->Username = 'dockerwebshop@gmail.com'; //TK email gửi
        $mail->Password = 'ipvjvcxsznalwxxy';   // pass email gửi
        $mail->SMTPSecure = 'ssl';  // encryption SSL/Port = 465  TSL/Port = 587
        $mail->Port = 465;  // port to connect to                
        $mail->setFrom("dockerwebshop@gmail.com", $hoTen); //địa chỉ email người gửi, và tên
        $mail->addAddress('dockerwebshop@gmail.com', 'Wibugangz'); //mail và tên người nhận  
        $mail->isHTML(true);  // Set email format to HTML
        $mail->Subject = $tieuDe; //tiêu đề thư
        $mail->Body = "<b>Email: </b>".$email."<br><b>Nội dung: </b>".$noiDung; //nội dung thư
        $mail->smtpConnect(array(
            "ssl" => array(
                "verify_peer" => false,
                "verify_peer_name" => false,
                "allow_self_signed" => true
            )
        ));
        $mail->send(); //gủi mail
    } catch (Exception $e) {
    }
}
?>

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
    
    <section class="section-content flex-wr d-f">
        <div class="row d-f">
            <div class="col d-f">
                <i class="fa-solid fa-clock-rotate-left  icon-introduct"></i>
                <div class="info">
                    <h3>Đổi trả với điều kiện</h3>
                    <p><b>Quý Khách hàng cần kiểm tra tình trạng hàng hóa và có thể đổi hàng/ trả lại hàng ngay tại thời điểm giao/nhận hàng trong những trường hợp sau:</b><br>
                        Hàng không đúng chủng loại, mẫu mã trong đơn hàng đã đặt hoặc như trên website tại thời điểm đặt hàng<br>
                        Không đủ số lượng, không đủ bộ như trong đơn hàng<br>
                        Tình trạng bên ngoài bị ảnh hưởng như rách bao bì, bong tróc, bể vỡ…<br>
                        Khách hàng có trách nhiệm trình giấy tờ liên quan chứng minh sự thiếu sót trên để hoàn thành việc hoàn trả/đổi trả hàng hóa.<br></p>
                </div>
            </div>
            <div class="col d-f">
                <i class="fa-solid fa-money-bill-transfer  icon-introduct"></i>
                <div class="info">
                    <h3>Đổi trả trong vòng 7 ngày</h3>
                    <p>Thời gian thông báo đổi : trong vòng 48h kể từ khi nhận sản phẩm đối với trường hợp sản phẩm bị bong tróc hình in , loang màu.<br>
                        Thời gian gửi chuyển trả sản phẩm: trong vòng 7 ngày kể từ khi nhận sản phẩm.<br>
                        Địa điểm đổi sản phẩm: Khách hàng có thể mang hàng trực tiếp đến văn phòng/ cửa hàng của chúng tôi<br>
                        Khách hàng được đổi miễn phí sản phẩm trong vòng 30 ngày kể từ ngày nhận được sản phẩm nếu gặp các vẫn đề liên quan đến in ấn<br>
                        Trong trường hợp Quý Khách hàng có ý kiến đóng góp/khiếu nại liên quan đến chất lượng sản phẩm,
                        Quý Khách hàng vui lòng liên hệ đường dây chăm sóc khách hàng của chúng tôi.<br></p>
                </div>
            </div>
        </div>
        <div class="row d-f">
            <div class="col d-f">
                <i class="fa-solid fa-money-bill-1 icon-introduct"></i>
                <div class="info">
                    <h3>Thanh Toán An Toàn Và Tiện lợi</h3>
                    <p>Người mua có thể tham khảo các phương thức thanh toán sau đây và lựa chọn áp dụng phương thức phù hợp:<br>
                        Cách 1: Thanh toán trực tiếp (người mua nhận hàng tại địa chỉ người bán)<br>
                        Cách 2: Thanh toán sau (COD - giao hàng và thu tiền tận nơi)<br></p>
                </div>
            </div>
            <div class="col d-f">
                <i class="fa-solid fa-user-shield icon-introduct"></i>
                <div class="info">
                    <h3>Hàng chính hãng</h3>
                    <p>Tại đây, mỗi một dòng chữ, mỗi chi tiết và hình ảnh đều là những bằng chứng mang dấu ấn lịch sử của cửa hàng chúng tôi và đang không ngừng phát triển lớn mạnh<br>
                </div>
            </div>
        </div>
    </section>

    <script>
        ScrollReveal(
        {
            reset: true,
            distance: '150px',
            duaration: 1600,
            delay: 25,
        });

        ScrollReveal().reveal('.Nav__Staff--Contact',{delay: 200, origin: 'left'});
        ScrollReveal().reveal('.Contain_Contact__Right p', {delay: 1, origin: 'left', interval: 50});
        ScrollReveal().reveal('.Contain_Contact__Right span', {delay: 5, origin: 'top', interval: 50});
        ScrollReveal().reveal('.Contain_Contact__Left input, textarea', {delay: 5, origin: 'left', interval: 50});
        ScrollReveal().reveal('.Nav__StaffContain__div_1', {delay: 200, origin: 'left'});
        ScrollReveal().reveal('.Nav__StaffContain__div_2', {delay: 200, origin: 'top'});
        ScrollReveal().reveal('.Nav__StaffContain__div_3', {delay: 200, origin: 'right'});
        ScrollReveal().reveal('.Nav__StaffContain__div_4', {delay: 200, origin: 'left'});
        ScrollReveal().reveal('.Nav__StaffContain__div_5', {delay: 200, origin: 'right'});

    </script>
</body>

</html>

<?php
require('Widget/Footer.php');
?>