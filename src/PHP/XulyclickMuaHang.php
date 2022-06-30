<?php
    session_start();
    $connect = mysqli_connect("db","root","example","quanlyshop");

    $IDKH = isset($_SESSION['IDKH']) ? $_SESSION['IDKH'] : null;
    $IDSP = isset($_SESSION['IDSP']) ? $_SESSION['IDSP'] : null;
    $SIZE = isset($_POST["rdSize"]) ? $_POST["rdSize"] : null;
    $AMOUT = isset($_POST['amout_Product']) ? $_POST['amout_Product'] : null;
    $now = new DateTime();

    if(isset($_SESSION['Logined']))
    {        
        //lấy ra thông tin sản phẩm
        $querySP = "select * from sanpham where ID = '".$IDSP."'";

        $resultSP = mysqli_query($connect,$querySP);

        $row = mysqli_fetch_array($resultSP);

        $total = ( $row['giaSP'] - $row['giaGiam']) * $AMOUT;

     
    }
    else
    {
        header("location: /DangNhap.php");
    }

    mysqli_close($connect);
?>
