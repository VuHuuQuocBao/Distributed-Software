<?php
    require('Widget/Menu.php');
    require('Widget/Sub_Menu.php');
    require('Widget/scroll.php');
?>

<?php
    unset($_SESSION['brand']);

    $IDLoai = $_GET['IDLoai'];
    $brand = isset($_SESSION['brand']) ? $_SESSION['brand'] : null;

    $_SESSION['IDLoai'] = $IDLoai;

    //nếu có brand nhãn hiệu thì hiển thị
    if($brand != null)
    {
        $command = "SELECT * FROM `sanpham` WhERE brand = '".$brand."'";
    }
    else
    {
        //nếu không có brand và IDLoai = - 1 thì lấy ra tất cả sản phẩm
        if($IDLoai == -1)
        {
            $command = "SELECT * FROM `sanpham` as sp";   
        }
        else
	        $command = "SELECT * FROM `sanpham` as sp WHERE sp.IDLoai = '".$IDLoai."'";
	
    }
	$result = mysqli_query(connect(),$command);

    //Giảm giá
    $querySuKien = "SELECT * FROM sukien WHERE IDTL = '".$IDLoai."'";

    $resultSuKien = mysqli_query(connect(),$querySuKien);

    if($rowSK = mysqli_fetch_array($resultSuKien))
    {
        global $tienGiam;
        $tienGiam = $rowSK['tienGiam'];
    }

    mysqli_close(connect());
