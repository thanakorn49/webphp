<?php
    include"connect.php";
    $filename = $_FILES["photo"]["name"];
    $tempname = $_FILES["photo"]["tmp_name"];
    $folder = "./images/" . $filename;

    $sql="UPDATE tbl_member SET 
    firstname='$_POST[firstname]',
    lastname='$_POST[lastname]' ,
    email='$_POST[email]',
    phone='$_POST[phone]',
    photo='$filename'
    address='$_POST[address]'
    WHERE id = '$_GET[id]'  ";
 
 if (mysqli_query($conn, $sql)) {
   if (move_uploaded_file($tempname, $folder)) {
    echo "อับโหลดรู้ได้แล้ว";
  } else {
    echo "อับโหลดรูปไม่ได้";
  }
        echo "เเก้ไขข้อมูลเรียบร้อย";
        header("location: member_show.php" );
      } else {
        echo "Error deleting record: " . mysqli_error($conn) ;
    
      }
      mysqli_close($conn);