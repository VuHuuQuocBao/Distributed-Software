<?php
    require('Config.php');

    if (!empty($_POST)) {
        if (isset($_GET['id'])) {
            $ID = $_GET['id'];
        }
        if (isset($_POST['IDNV'])) {
            $IDNV = $_POST['IDNV'];
        }
        if (isset($_POST['heSoLuong'])) {
            $heSoLuong = $_POST['heSoLuong'];
        }
        if (isset($_POST['soGioLam'])) {
            $soGioLam = $_POST['soGioLam'];
        }
        if (isset($_POST['tienThuong'])) {
            $tienThuong = $_POST['tienThuong'];
        }
        if (isset($_POST['tongLuong'])) {
            $tongLuong = $_POST['tongLuong'];
        }
        if (isset($_POST['batDau'])) {
            $batDau = $_POST['batDau'];
        }
        if (isset($_POST['ketThuc'])) {
            $ketThuc = $_POST['ketThuc'];
        }
        if (isset($_POST['ngayLam'])) {
            $ngayLam = $_POST['ngayLam'];
        }
    mysqli_query(connect(),"set names 'utf8'");
    $sql = "UPDATE bangluong SET IDNV='".$IDNV."',heSoLuong='".$heSoLuong."',soGioLam='".$soGioLam."',tienThuong='".$tienThuong."',tongLuong='".$tongLuong."',
    batDau='".$batDau."',ketThuc='".$ketThuc."',ngayLam='".$ngayLam."'
    WHERE ID = ".$ID;
    mysqli_query(connect(),$sql);
    header("Location: quantri.php?page_layout=danhsachBangLuong");
    mysqli_close(connect());
    }

    if (isset($_GET['id'])) {
        $ID       = $_GET['id'];
        $sql      = 'select * from bangluong where ID = '.$ID;
        $result = mysqli_query(connect(), $sql);
	    $row    = mysqli_fetch_array($result, 1);

        if ($row != null){
            $IDNV = $row['IDNV'];
            $heSoLuong = $row['heSoLuong'];
            $soGioLam = $row['soGioLam'];
            $tienThuong = $row['tienThuong'];
            $tongLuong = $row['tongLuong'];
            $batDau = $row['batDau'];
            $ketThuc = $row['ketThuc'];
            $ngayLam = $row['ngayLam'];
        }
    }
?>
<?php if(isset($_SESSION["admin"])){ ?>
<!DOCTYPE html>
<html>
<head>
	<title>Thêm/Sửa Sản Phẩm</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h2 class="text-center">Sửa Bảng Lương</h2>
			</div>
			<div class="panel-body">
				<form method="post">
                    <div class="form-group">
					    <label for="IDNV">IDNV:</label>
					    <input type="number" class="form-control" id="IDNV" name="IDNV" value="<?=$IDNV?>">
					</div> 
                    <div class="form-group">
					    <label for="heSoLuong">Hệ số lương:</label>
					    <input type="number" class="form-control" id="heSoLuong" name="heSoLuong" value="<?=$heSoLuong?>">
					</div>
                    <div class="form-group">
					    <label for="tienThuong">Tiền thưởng:</label>
					    <input type="number" class="form-control" id="tienThuong" name="tienThuong" value="<?=$tienThuong?>">
					</div>
                    <div class="form-group">
					    <label for="soGioLam">Số giờ làm:</label>
					    <input type="number" name= "soGioLam" class="form-control" value="<?=$soGioLam?>">
					</div> 
                    <div class="form-group">
					    <label for="tongLuong">Tổng Lương:</label>
					    <input type="number" class="form-control" id="tongLuong" name="tongLuong" value="<?=$tongLuong?>">
					</div> 
                    <div class="form-group">
					    <label for="batDau">Bắt Đầu:</label>
					    <input type="datetime" class="form-control" id="batDau" name="batDau" value="<?=$batDau?>">
					</div>
                    <div class="form-group">
					    <label for="ketThuc">Kết Thúc:</label>
					    <input type="datetime" class="form-control" id="ketThuc" name="ketThuc" value="<?=$ketThuc?>">
					</div>
                    <div class="form-group">
					    <label for="ngayLam">Ngày Làm:</label>
					    <input type="datetime" class="form-control" id="ngayLam" name="ngayLam" value="<?=$ngayLam?>">
					</div>
					<button class="btn btn-success">Lưu</button>
				</form>
			</div>
		</div>
	</div>
</body>
</html>

<?php } else{ 
    echo"404 ERROR!!!"?>
<?php }?>
