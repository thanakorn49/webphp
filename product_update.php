<?php
    include"connect.php";
    $sql="UPDATE tbl_product SET 
    name='$_POST[name]',
    price='$_POST[price]' ,
    stock='$_POST[stock]',
    description='$_POST[description]',
    address='$_POST[address]'
    WHERE id = '$_GET[id]'  ";
 
 if (mysqli_query($conn, $sql)) {
        echo "เเก้ไขข้อมูลเรียบร้อย";
        header("location: product_show.php" );
      } else {
        echo "Error deleting record: " . mysqli_error($conn) ;
    
      }
      mysqli_close($conn);