<?php
    require('Widget/Menu.php');
    require('Widget/scroll.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/DonMua.css">
    <link rel="stylesheet" href="css/TrangChu.css">
    <link rel="stylesheet" href="css/responsive.css">

    <title>Document</title>
</head>
<body>
            <div class="Main_Cart" style="Margin-top: 200px">
                <div class="TitleItem" style="margin-top:150px">
                    <b></b>
                        <span>Lịch Sử Mua Hàng Wibugangz</span>
                    <b></b>
                </div>
        
                <form action="" method="GET">
                    <div class="Infor_Cart">
                        <table>
                            <thead>
                                <th>Ảnh</th>
                                <th>Sản Phẩm</th>
                                <th>Loại</th>
                                <th>Đơn Giá</th>
                                <th>Size</th>
                                <th>Số Lượng</th>
                                <th>Số Tiền</th>
                                <th>Trạng Thái</th>
                                <th>Thao Tác</th>
                            </thead> 
        
                            <tbody>
                                <?php
                                    while($row = mysqli_fetch_array($result))
                                    { ?>    
                                        <tr>
                                            <td><img src="<?php echo $row['imageSP']?>"></img>
                                            <td><?php echo $row['tenSP']?>
                                            <td><?php echo $row['tenTL']?>
                                            <td><?php echo format_money($row['giaSP'],0,'','.')?>
                                            <td><?php echo $row['size']?>
                                            <td><?php echo $row['soLuongDat']?>
                                            <td><?php echo format_money($row['soTien'],0,'','.')?>
                                            <td><?php echo $row['trangThai']?>        
        
                                            <?php
                                                if($row['trangThai'] == "Đang Duyệt")
                                                { ?>
                                                    <td><a class="Del_Cancel" href="PHP/Xulyxoadonmua.php?page=Donmua&IDDH=<?php echo $row['id']?>">Xóa Hàng</a>
                                            <?php }
                                                else
                                                {?>
                                                    <td><a class="Del_Cancel" href="PHP/Xulyxoadonmua.php?page=Donmua&IDDH=<?php echo $row['id']?>">Hủy Hàng</a></td>                                              
                                            <?php }
                                            ?>
                                        </tr>     
                                   <?php }
                                ?>
         
                            </tbody>
                        </table>          
                    </div>
                </form>
            while($row = mysqli_fetch_array($result))
                { ?>
                    <div align="center" class="SubProduct">

                    <?php
                        $querySK = "SELECT * FROM sukien";
                        $resultSK = mysqli_query(Connect(),$querySK);

                    while($rowSK = mysqli_fetch_array($resultSK))
                    {
                        if($row['IDLoai'] == $rowSK['IDTL'])
                        { ?>
                            <span class="Discount">-<?php if(isset($rowSK['tienGiam']))  echo $rowSK['tienGiam']?>%</span>

                    <?php }
                    } ?>
                        
                        <?php
                            if($row['soLuong'] == 0)
                            { ?>
                                <span id="Sold_Out">Cháy hàng</span>
                      <?php }?>

                        <a href="PHP/Xulychitietsanpham.php?page=danhsach&brand=<?php echo $row['brand']; ?>&id=<?php echo $row['ID']; ?>&IDLoai=<?php echo $row['IDLoai']; ?>" id="buyProduct">
                            <img type="image" id="ImgShirt" src="<?php echo $row['imageSP']?>"></a>
                                
                        <p><?php echo $row['tenSP']?></p>
                        <div style="display:flex; width:100%; justify-content:center">
                                <?php
                                    if($row['giaGiam'] > 0)
                                    {?>
                                        <p style="text-decoration:line-through; color:gray; font-weight:500; font-size: 15px; margin: auto 10px"><?php echo format_money($row['giaSP'],0,'','.')?></p>
                                <?php }?>

                                <p><?php echo format_money($row['giaSP'] - $row['giaGiam'],0,'','.')?>
                        </div>                 
                    </div>
                <?php }?>
        </div>       
        </div> 
</body>
</html>

<?php
    require('Widget/Footer.php');
?>