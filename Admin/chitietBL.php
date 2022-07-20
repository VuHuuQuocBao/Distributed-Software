
<?php
    require('Config.php');
    if(isset($_GET['page'])){
        $page = $_GET['page'];
    }
    else{
        $page = 0;
    }
    //số bài trên một trang
    $baiTrenMotTrang = 10;

    $temp = $page*$baiTrenMotTrang;

    if(isset($_GET['ngayBinhLuan'])){
        $ngayBinhLuan = $_GET['ngayBinhLuan'];
    } 
    $command = "select sp.tenSP, kh.hoTen,dgsp.IDKH,dgsp.ID,dgsp.binhLuan,dgsp.ngayBinhLuan
    from danhgiasanpham as dgsp 
    join sanpham as sp on dgsp.IDSP = sp.ID
    join khachhang as kh on dgsp.IDKH = kh.ID
    where dgsp.ngayBinhLuan = '".$ngayBinhLuan."'
    limit $temp,$baiTrenMotTrang";
    $result = mysqli_query(connect(), $command);

    $querySoDong="select sp.tenSP, kh.hoTen,dgsp.IDKH,dgsp.ID,dgsp.binhLuan,dgsp.ngayBinhLuan
    from danhgiasanpham as dgsp 
    join sanpham as sp on dgsp.IDSP = sp.ID
    join khachhang as kh on dgsp.IDKH = kh.ID
    where dgsp.ngayBinhLuan = '".$ngayBinhLuan."'";
    $resultRow= mysqli_query(connect(),$querySoDong);
    $soDong = mysqli_num_rows($resultRow);
    //số trang
    $soTrang = $soDong / $baiTrenMotTrang;
    $listPage="";
    for($i=0;$i<$soTrang;$i++)
    {
        if($page==$i)
        {
        $listPage.='<a class="active" href=quantri.php?page_layout=detail_BL&chitietBL.php&ngayBinhLuan='.$ngayBinhLuan.'&page='.$i.'>'.$i.'</a>';
        }
        else
        {
        $listPage.='<a href=quantri.php?page_layout=detail_BL&chitietBL.php&ngayBinhLuan='.$ngayBinhLuan.'&page='.$i.'>'.$i.'</a>';
        }
    }

    $ID = $IDSP = $IDSize = $hoTen = $soLuongSP = $ngaySinh = $SDT = $email = $diaChi = $avatar = '';
    if (!empty($_POST)) {
        if (isset($_POST['ID'])) {
            $ID = $_POST['ID'];
        }
        if (isset($_POST['tenDangNhap'])) {
            $tenDangNhap = $_POST['tenDangNhap'];
        }
        if (isset($_POST['matKhau'])) {
            $matKhau = $_POST['matKhau'];
        }
        if (isset($_POST['hoTen'])) {
            $hoTen = $_POST['hoTen'];
        }
        if (isset($_POST['avatar'])) {
            $avatar = $_POST['avatar'];
        }
        if (isset($_POST['gioiTinh'])) {
            $gioiTinh = $_POST['gioiTinh'];
        }

        }        if (isset($_POST['email'])) {
            $email = $_POST['email'];
        }
        if (isset($_POST['diaChi'])) {
            $diaChi = $_POST['diaChi'];
        }

        // chọn bảng mã cho kết nối
        mysqli_query(connect(), "set names 'utf8'");
        // thực hiện lệnh truy vấn
        $istk = 'INSERT INTO taikhoan(ID, tenDangNhap,matKhau) VALUES ("' . $ID . '","' . $tenDangNhap . '","' . $matKhau . '")';
        $result1 = mysqli_query(connect(), $istk);
        $iskh = 'INSERT INTO khachhang(ID,tenDangNhap, hoTen, gioiTinh, ngaySinh, SDT, email, diaChi, avatar)
        VALUES ("' . $ID . '","' . $tenDangNhap . '","' . $hoTen . '","' . $gioiTinh . '","' . $ngaySinh . '","' . $SDT . '","' . $email . '","' . $diaChi . '","' . $file . '")';
        mysqli_query(connect(), $iskh);
        header("Location:quantri.php?page_layout=danhsachKH");
        mysqli_close(connect());

        if(!headers_sent())
        {
            header("Location: quantri.php?page_layout=danhsachTheLoai");
        }
        else
        {
            echo '<script>window.location="quantri.php?page_layout=danhsachTheLoai"</script>';
        }
        mysqli_close(connect());
    }
mysqli_close(connect());
?>
<?php if(isset($_SESSION["admin"])) { ?>
<!DOCTYPE html>
<html lang="en" >
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="css/quanLy.css">
            <link rel="stylesheet" href="css/global.css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
            <title>Chi Tiết Bình Luận</title>
        </head>

<body>
        <h1>Chi Tiết Bình Luận</h1>
        <table id="keywords">
                    <thead>
                        <tr>
                            <th><span>ID</span></th>
                            <th><span>IDKH</span></th>
                            <th><span>Tên Khách Hàng</span></th>
                            <th><span>Tên Sản Phẩm</span></th>
                        </tr>
                    </thead>
                    <?php
            while ($row = mysqli_fetch_array($result)) { ?>
                <tr>
                <td><?php echo $row['ID']?>
                <td><?php echo $row['IDKH'] ?>
                <td><?php echo $row['hoTenKH'] ?>
                <td><?php echo $row['tenSanPham'] ?>
                <td><?php echo $row['binhLuan'] ?>
                <td><?php echo $row['ngayBinhLuansanPham'] ?> 
                <td>
                <a href="deleteBL.php?id=<?php echo $row['ID']?>">
                <button class="btn btn-danger">
                    <i class="fa-solid fa-trash"></i>
                    </button>
                </a>
                </tr>
            <?php } ?>
        </table>    
        <div class="Pagination">
                <?php
                    echo $listPage;
                ?>
</div> 
        </body>
</html>
<?php } else{ 
    echo"404 ERROR!!!";?>
<?php }?>