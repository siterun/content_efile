<?php
mysql_connect("localhost","root","");
mysql_select_db("student");

if(isset($_POST['add_prdt_edit'])) {
	echo // $cd=$_GET["id"];
	 $id=$_POST["pr_id"];
	 $prdtcatgry =$_POST["prdt_catgry"];
	$prdtname =$_POST["prdt_name"];
	$prdtprice =$_POST["prdt_price"];
	$prdtdescrton =$_POST["prdt_descrton"];
	$prdtquantity =$_POST["prdt_quantity"];
	$prdtphoto =$_FILES["prdt_photo"]["name"];
    
    move_uploaded_file($_FILES["prdt_photo"]["tmp_name"],"prdtimages/$prdtphoto");
	
	echo $sql ="UPDATE add_product SET 
				prdtcatgry='$prdtcatgry',
				prdtname='$prdtname',
				prdtprice='$prdtprice',
				productdescptn='$prdtdescrton',
				prdtquantity='$prdtquantity',
				prdtphoto='$prdtphoto'
				WHERE id='$id'";
	 mysql_query($sql) or die(mysql_error());
	//header("location:ad_all_prdt_view.php?msg=Data Updated succesfully");
}
?>