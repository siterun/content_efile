<div id="myDiv">
<?php 
session_start();
$uid=$_SESSION["sid"];
 
require_once('main_class.php'); 
$obj = new parent_data();

$trash= 4;//not deleted

$unread_mes_status=6;//unread message
$result = $obj->select_msgs('messages',$uid,$trash,$unread_mes_status);
//$row = mysql_fetch_array($result);

//$count_ur = $obj->count_unread('messages',$uid,$unread_mes_status);
//$count_unread_all = mysql_fetch_assoc($count_ur);


 /* while($count_unread_all = mysql_fetch_assoc($count_ur)){
	 $s[]=$count_unread_all['senderid'];
	  $ur[]=$count_unread_all['count(read_status)'];}
	echo '<pre>';
	//print_r($s);print_r($ur);
	
while($row = mysql_fetch_assoc($result)){
	 $senro=$row['senderid'];
	 if(in_array($senro,$s)){echo 'matched';}
	 }
	  //$ur[]=$count_unread_all['count(read_status)'];
die;		
	 
	
	echo '</pre>';
	die;  */
require_once("header.php");
?>
<!DOCTYPE html>
<html>
<head>
<title>Inbox</title>

<script>
function msg_name(temp)
{console.log(temp);
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
xmlhttp.open("GET","msg_any1.php",true);
xmlhttp.send();
}

</script>
<!--<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
});
</script>-->

<style>

.sender_name {
	 color: #06F;
	 font-size:18px;
	 font-family:"Lucida Console", Monaco, monospace;
	 text-decoration:none;
	}
.read{
	display:block;
	background-color:#FF9966;
}

</style>

</head>
<body>
<?php //require_once("header.php");?>
<div class="container">
	<div class="row">
		<div class="col-lg-4">
            <p><b>Click below to type a message:</b></p>
               Write message: <input type="button" onClick="msg_name(this.value)" value="click me!!" />  
        </div>
        <div class="col-lg-4">
            
				<?php 
                while($row = mysql_fetch_array($result)) :
					$read_status_class='';
						
					if($row['read_status'] == 5) :
						$read_status_class='read'; 
					endif;
					$des = '';
					if($row['unread_count']!=NULL):
					$varr = $row['unread_count'];
					$des = '('.$varr.')';
					endif;
                ?>
                <div class="container-fluid <?php echo $read_status_class;?> read_msg">
                    <div class="row ">
                        <div class="col-sm-6 sender_name">
                        <a href="mes_detail.php?seid=<?php echo $row['senderid']?>">
                        <?php echo $row["sendername"], $des;?></a>
                        </div>
                        <!--<div class="col-sm-6 trash_link">
                        <a href="trash_msge.php?rowid=<?php //echo $row["id"];?>&action=inbox">del</a>
                        </div>-->
                    </div>
                    <div class="row">
                        <div class="col-sm-12 msg_matter_text">
                        <?php echo $row["msgmatter"];?>
                        </div>
                    </div>
                </div>
                <?php endwhile; ?>
         </div>
         <div class="col-lg-4">
         </div>   
    </div>
</div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>
var jQuery = $.noConflict();
jQuery(document).ready(function($){
	$('.read_msg').click(function(){
		$(this).css('background-color','#FF9966');
	})
})
</script>
</html>
</div>
