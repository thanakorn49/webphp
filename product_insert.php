<div class="container" >
<?php
include "connect.php";

$filename = $_FILES["photo"]["name"];
$tempname = $_FILES["photo"]["tmp_name"];
$folder = "./images/" . $filename;

$sql = "INSERT INTO  tbl_product (name, price, stock, description )
VALUES ('$_POST[name]','$_POST[price]','$_POST[stock]','$filename','$_POST[description]') ";

if (mysqli_query($conn, $sql)) {

  if (copy($tempname, $folder)) {
    echo "อับโหลดรูปได้แล้ว";
  } else {
    echo "อับโหลดรูปไม่ได้";
  }   
  echo "New record created successfully";
  header("location: product_show.php" );
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


?>
</div>