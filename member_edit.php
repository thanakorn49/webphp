
<?php
    include "connect.php";
    $sql = "SELECT * FROM tbl_member WHERE id='$_GET[id]'  ";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result)

?>

<link href="styles.css"  rel="stylesheet" />
<div class="container" >
<form action="member_update.php?id=<?php echo $row[id]?>" method="post" enctype="multipart/form-data"/>
    ชื่อ <input type="text" name="firstname" class="input" value="<?php echo $row[firstname]; ?>" />
    นามสกุล  <input type="text" name="lastname" class="input" value="<?php echo $row[lastname]; ?>" /> 
    อีเมล  <input type="email" name="email" class="input" value="<?php echo $row[email]; ?>" /> 
    เบอร์โทร <input type="text" name="phone" class="input" value="<?php echo $row[phone]; ?>" /> 
    ที่อยู่ <textarea name="address"><?php echo $row[address]; ?> </textarea>
    เเนบรูปภาพ <input type="file" name="photo" /> <br/>
    <input type="submit" value="Update" class="button"/> 
</form>
</div>