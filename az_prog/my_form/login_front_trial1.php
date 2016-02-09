<?php 
session_start();
/*$_SESSION["product_sh"];
*/require_once("modify_shopping_start.php");
$call_class = new control();

     $hostname ="localhost";
	 $username ="root";
	 $password ="";
	$database ="student";
	
	$call_class->database($hostname,$username,$password,$database);
    $check_val = $call_class->select("SELECT * from add_product ");
   //$bring =mysql_fetch_array($check);

?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>login front1</title>
<style> 
.product {
			background-color: antiquewhite;
			color: #cf9c03;
			font-size: 28px;
			margin: -1px;
			padding: 0;
			text-align: center;
			text-decoration: blink;
			
            }
h1,h2,h3  {
           text-align:center;
           }
.shopping  {background-color: aquamarine;
			color: -moz-eventreerow;
			margin: -5px;
			max-width: 836px;
			padding: 2px;
			text-align: justify;

           }
.picture  { text-align:left;
		   }
.table    { text-align:center;
          margin:5px 10px 15px 20px;
		   padding:4px 8px 12px 16px;
		   border:red;
		   border-radius:500%;
		   white-space:pre-line;
		   }
.tabrow   {text-align:left;
           backface-visibility:visible;
          }
.submitadd { background-color: #39b3d7;
		     border: medium none;
			border-radius: 3px;
			color: #fff;
			cursor: pointer;
			display: inline-block;
			font: 12px/15px Arial,Helvetica,sans-serif;
			min-height: 15px;
			min-width: 100px;
			padding: 10px;
			text-align: center;
			text-decoration: none;
			text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.26);
			}
.backmode  {
			background:#900; 
			height:100px; 
			width:100px;
		   }

		   		   
		   
</style>
</head>
<body>

<?php
if(isset($_POST["name"]))  {

echo "";
}
?>


    <div class="shopping">
           <h1>Shopping</h1>
     </div>
<table height="250" border="0" cellpadding="0" cellspacing="0">
<tr> <?php while ($bring =mysql_fetch_array($check_val)) { ?>
    <td width="273" align="right" valign="top">
     <div class="table"><table align="right" border="0" cellspacing="0" width="79%" height="100%">
    <tr>
        <td colspan="3" ><div class="product"><h3><input type="hidden" name="prdt_catgry"/><?php echo $bring["prdtcatgry"];?></h3> </div></td>
    </tr>
    <tr>
        <td colspan="3" height="100%"><div class="picture"><img src="prdtimages/<?php echo $bring["prdtphoto"];?>" alt="Analog watch" width="100%" height="100%"/></div></td>
    </tr>
    <tr>
    <td height="42" colspan="3"><div class="product"><input type="hidden" name="prdt_name"/><?php echo $bring["prdtname"];?></div></td>
    </tr>
    <tr>
        <th width="38%"><div class="tabrow">Price</div></th>
            <td width="16%">:</td>
               <td width="46%"><input type="text" name="price" value="<?php echo $bring["prdtprice"];?>" readonly /></td><!-- u can also use "disabled" instead of "readonly" but then that field will not be submitted and during readonly  the field is submitted n color of displaying the field is change-->
     </tr>
     <tr>
         <th><div class="tabrow">About Product</div></th>
             <td>:</td>
                <td><?php echo $bring["productdescptn"];?></td>
      </tr>
       <tr>
         <th><div class="tabrow">Product quantity</div></th>
             <td>:</td>
                <td><input type="number" name="quantity" value="2"/></td><!-- use of size attribute in input field limits the size(in characters) in that field,and The maxlength attribute specifies the maximum allowed length for the input field-->
      </tr>
      <tr>
     <td colspan="3" align="center"><button class="submitadd" type="submit" name="maybe_buy" formmethod="post" formtarget="_parent" formaction="add_to_cart.php?code=<?php echo $bring["code"];?>">Add</button></td>
      </tr>
      </table></div></td> <?php } ?>
</tr>
</table>
</body>
</html>

