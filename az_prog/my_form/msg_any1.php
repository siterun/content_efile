<!DOCTYPE html>
<html>
<head>
<script>
function showHint(str)
{
//alert(str.length);	
if (str.length==0) { 
    document.getElementById("txtHint").innerHTML="";
    return;
} else {
    var xmlhttp=new XMLHttpRequest();
    xmlhttp.onreadystatechange=function() {
        if (xmlhttp.readyState==4 && xmlhttp.status==200) {
            document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
        }
    }
    xmlhttp.open("GET","msg_any1_hint.php?q="+str,true);
    xmlhttp.send();
}    
}
</script>
</head>
<body>

<p><b>Start typing a name in the input field below:</b></p>
<form action=""> 
First name: <input type="text" id="txt1" onkeyup="showHint(this.value)">
</form>
<p>Suggestions: <span id="txtHint"></span></p> 

</body>
</html>
