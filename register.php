<link href="styles.css"  rel="stylesheet" />
<div class="container" >
<form action="member_insert.php" method="post" enctype="multipart/form-data"/>
    ชื่อ <input type="text" name="firstname"  class="input" />
    นามสกุล  <input type="text" name="lastname" class="input"/> 
    อีเมล  <input type="email" name="email" class="input"/> 
    เบอร์โทร <input type="text" name="phone" class="input"/> 
    ที่อยู่ <textarea name="address" class="input">  </textarea> 
    เเนบรูปภาพ <input type="file" name="photo"  class="input"/> 
    <input type="submit" value="บันทึกข้อมูล" class="button"/> 
</form>
</div>