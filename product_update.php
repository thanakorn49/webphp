<?php
    include"connect.php";

    $filename = $_FILES["photo"]["name"];
    $tempname = $_FILES["photo"]["tmp_name"];
    $folder = "./images/" . $filename;

    $sql="UPDATE tbl_product SET 
    name='$_POST[name]',
    price='$_POST[price]' ,
    stock='$_POST[stock]',
    description='$_POST[description]',
    photo='$filename'
    address='$_POST[address]'
    WHERE id = '$_GET[id]'  ";
 
 if (mysqli_query($conn, $sql)) {

  if (copy($tempname, $folder)) {
    echo "อับโหลดรูปได้แล้ว";
  } else {
    echo "อับโหลดรูปไม่ได้";
  }

        echo "เเก้ไขข้อมูลเรียบร้อย";
        header("location: product_show.php" );
      } else {
        echo "Error deleting record: " . mysqli_error($conn) ;
    
      }
      mysqli_close($conn);