<!DOCTYPE html>
<!--%USERPROFILE%\AppData\Local\Temp-->
<html>
<head>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
});
</script>

<script>
//This is for add_product
function add_product()
{
var xmlhttp;
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("myDiv").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","add_product.php",true);
xmlhttp.send();
}
//this is for add_category
function add_category()
{
var xmlhttp;
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("myDiv").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","add_category.php",true);
xmlhttp.send();
}


//this is for popup box...
function myFunction() {
 alert("You really!!!\n want to logout");
/*   if (confirm("Press a button!") == home.php) {
    } else { }
 // document.getElementById("a_tag").innerHTML=
*/
}

</script>
<script src="js/jquery.min.js"></script>
<script>
var jq = $.noConflict();
jq(document).ready(function($){
	$("button").css({"color":"white" ,
	"background-color":"black",
	"border-radius":"10px 10px 0 0",
	"margin":"4px",
	"padding":"10px 20px"});
	//$("button").css("font-size","20px");
});

  /* function milestone_cancle(pid,mid){
    $.ajax({
      type : "post" ,
      url:'<?php ?>', 
      data: {pid:pid,mid:mid},
      success:function(response){
        //alert(response);
        if(response === 'true'){
          alert("Milestone Cancled ");
          window.location.reload();
        }else{
          alert("Error In Cancling Milstone");
        }
        
      }
    });
  } */
</script>
<!-- this is for menu,,for menu <ol>-->
 <style>
ol#menu  {
    padding: 0;
}

ol#menu li {
    display: inline;
}

ol#menu li a {
    background-color: black;
    color: white;
    padding: 10px 20px;
    text-decoration: none;
    border-radius: 10px 10px 0 0;
	margin:4px;
}


ol#menu li a:hover {
    background-color: orange;
}/*"ol"which used near the 'id' name is just to make a remember that this 'id' is for "ol" and if u make space between "ol" and 'id name' then that 'id' 
will not act or execute which means that it will become useless except the 1st 'id name'(#menu),and if u give space in "ol" and 1st 'id name' then that 
will create a space from the boundary where it had written(or programmed) but that space should only be at the 1st id name time not at everywhere.
*/
<!--below this ,the coding is for button-->
#menu li button:hover {
    background-color: red;  }
	
body {
	background-color:#FC9;
	font-family:"Times New Roman", Times, serif;}
</style>



</head>

<body>

<div class="container-fluid">
<!--<button type="button" onclick="loadXMLDoc()">Change Content</button>
-->
<!--<table align="center" width="100%">
  <tr bgcolor="#FF9933">
    <td width="5%"><a href="home.php" style="text-decoration:none">Home </a></td>
    <td width="9%"><a href="form2_edit_final.php" style="text-decoration:none">Edit Profile </a></td>
    <td width="7%"><a href="inbox.php?senderid=<?php //echo $row["id"];?>" style="text-decoration:none">Inbox </a></td>
    <td width="9%"><a href="outbox.php?receiverid=<?php //echo $row["id"];?>" style="text-decoration:none">Outbox</a></td>
        <td width="5%"><a href="trash.php" style="text-decoration:none">Trash </a></td>
        <td width="11%"><a href="add_category.php" style="text-decoration:none">Add Category </a></td>
          <td width="50%"><a href="add_product.php" style="text-decoration:none">Add Product </a></td>
    <td width="4%"><a href="logout.php" style="text-decoration:none" id="a_tag" onClick="myFunction()">Logout</a></td>
  </tr>
</table>
-->


<ol id="menu">
  <li><a href="home.php" style="text-decoration:none">Home </a></li>
  
  <li><a href="form2_edit_final.php" style="text-decoration:none">Edit Profile </a></li>
 
  <li><a href="form2_frnd+req.php" style="text-decoration:none">FRNDSnREQ </a></li>
 
  <li><a href="inbox.php" style="text-decoration:none">Inbox </a></li>
 
 <li><a href="user_detail.php" style="text-decoration:none">User </a></li>
  
 <li><a href="outbox.php" style="text-decoration:none">Outbox</a></li>
 
  <li><a href="trash.php" style="text-decoration:none">Trash </a></li>
  <li><!--<a href="add_category.php" style="text-decoration:none">Add Category </a>--><button type="button" onClick="add_category()">Bring category </button></li>
  <li><!--<a href="add_product.php" style="text-decoration:none" onClick="loadXMLDoc()">Add Product </a>--><button type="button" onClick="add_product()">Bring product</button></li>
  <li>   <div class="btn-group"> <a class="btn btn-default btn-xs" data-toggle="dropdown" href="#"> Action <i class="fa fa-cog"></i> </a>
                        <ul role="menu" class="dropdown-menu pull-right">
                          <li role="presentation"> <a onClick="online_update()" role="menuitem" tabindex="-1" href=""> <i class="fa fa-edit"></i> Online </a> </li>
                          <li role="presentation"> <a onClick="offline_update()" role="menuitem" tabindex="-1" href=""> <i class="fa fa-edit"></i> Offline </a> </li>
                        </ul>
                      </div>
  </li>
  <li><a href="logout.php" style="text-decoration:none" onClick="myFunction()">Logout</a></li>
</ol> 
<?php
include_once('main_class.php'); 
$obj = new parent_data();

function online_update(){
	$db_name = array('login_status'=>11);
	echo 'this is test ';
	$obj->update_database('register',$db_fname, $uid);
}
function offline_update(){
	$db_name = array('login_status'=>12);
	
	$obj->update_database('register',$db_fname, $uid);
}

?>
</div>
</body>
</html>
