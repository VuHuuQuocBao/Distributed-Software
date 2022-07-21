<?php
require('Config.php');
if (isset($_GET['id'])) {
	$ID = $_GET['id'];
}

$soDong = mysqli_num_rows($resultRow);
//số trang
$soTrang = $soDong / $baiTrenMotTrang;
$listPage="";
for($i=0;$i<$soTrang;$i++)
{
	if($page==$i)
	{
	$listPage.='<a class="active" href=quantri.php?page_layout=detail_LS&chitietLS.php&id='.$ID.'&page='.$i.'>'.$i.'</a>';
	}
	else
	{
	$listPage.='<a href=quantri.php?page_layout=detail_LS&chitietLS.php&id='.$ID.'&page='.$i.'>'.$i.'</a>';
	}
}
$sql = "delete from danhgiasanpham where ID = ".$ID;
mysqli_query(connect(),$sql);
header("Location: quantri.php?page_layout=danhsachBinhLuan");
mysqli_close(connect());
?>