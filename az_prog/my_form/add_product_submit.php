<?php 

mysql_connect("localhost","root","");
mysql_select_db("student");
if(isset($_POST["add_product"])) {
	
	
	

     $prdtcatgry=$_POST["category"];

	 $prdtname =$_POST["prdt_name"];
     $prdtprice =$_POST["prdt_price"];
	 $productdescptn =$_POST["prdt_descrton"];
	 $prdtquantity =$_POST["prdt_quantity"];
	 
	 $prdtphoto=$_FILES["prdt_photo"]["name"];
	 move_uploaded_file($_FILES["prdt_photo"]["tmp_name"],"prdtimages/$prdtphoto");

 echo $sql ="insert into add_product(prdtcatgry,prdtname,prdtprice,productdescptn,prdtquantity,prdtphoto)values('$prdtcatgry','$prdtname','$prdtprice','$productdescptn','$prdtquantity','$prdtphoto')";
  mysql_query($sql) or die(mysql_error());
 
 header("location:add_product.php?msg=Entry of product is added");
}else {
header("location:login.php?msg=You need to Log in First!!!");
}
?>








