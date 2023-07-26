<link href="styles.css"  rel="stylesheet" />
<div class="container" >
 <form action="product_insert.php" method="post" enctype="multipart/from-data">
ชื่อ <input type="text" name="name" class="input"/>
ราคา <input type="text" name="price"class="input"/> 
จำนวน <input type="text" name="stock"class="input"/> 
คำอธิบาย <input type="textarea" name="description"class="input"/> 
Add <input type="file" name="photo" />

<input type="submit" value="บันทึกข้อมูล"class="button"/>
</form>
</div>



