<?php 
session_start();
/*$_SESSION["product_sh"];
*/include_once("modify_shopping_start.php");

/*if(!isset($_SESSION["product_sh"])) {
	header("login_front_trial1.php");
}else { */
     if(isset($_POST["maybe_buy"])) { 

$obj= new control();

$hostname ="localhost";
$username ="root";
$password ="";
$database ="student";

$obj->database($hostname,$username,$password,$database);
$code = $_GET["code"];
$result = $obj->select("SELECT * from register where code='$code'");


/*	 }
*/}
?>
<!DOCTYPE html >
<html>
<head>
<title>Add to cart</title>
<style>
th, td {text-align:center;
         color:#000;
        }
</style>
</head>
<body>
<form action="" >
<table border="2">
<tr> 
     <th>Category</th>
     <th>Product</th>
     <th>Price</th>
     <th>Quantity</th>
     <th>Total</th>
</tr>
<?php while($catch = mysql_fetch_array($result))  { ?>
<tr>
<?php $total =0;
   $subtotal = ($catch["prdtquantity"]*$catch["prdtprice"]) ; ?>
   <td><?php echo $catch["prdtcatgry"];?></td>
   <td><?php echo $catch["prdtproduct"];?></td>
   <td><?php echo $catch["prdtprice"];?></td>
   <td><?Php echo $catch["prdtquantity"]?></td>
   <td><?php echo $subtotal ;?> </td>
   </tr>
<?php } ?>
 
</table>
</form>
</body>
</html>

     
