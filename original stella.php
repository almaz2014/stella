<?php

header("Content-Type: text/html; charset=windows-1251");
//echo "<h1><a href='stella.php'>Stella Artua</a></h1>";
$file = file('prices.csv');
foreach($file as $k)
	$csv[] = explode(',', $k);
	
//print_r($csv);
$length=count($csv);

if (isset($_REQUEST["city"]))

{

$val=$_REQUEST["city"];
echo "<table bgcolor=grey>";
$tr=explode(";",$csv[0][0]);

echo "<tr><th bgcolor=silver>".$tr[0]."</th><th>".$tr[1]."</th><th>".$tr[2]."</th><th>".$tr[3]."</th></tr>";
	$tr=explode(";",$csv[$val][0]);
	echo "<tr><td bgcolor=silver>".$tr[0]."</td><td>".$tr[1]."</td><td>".$tr[2]."</td><td>".$tr[3]."</td></tr>";
	

echo "</table>";


} else

{
?>
<script>
function showUser(str)
{
if (str=="")
  {
  document.getElementById("txtHint").innerHTML="";
  return;
  }
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
    document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","stella.php?city="+str,true);
xmlhttp.send("");
}
</script>
<form action="stella.php">
   <select size="1" name="city" onchange="showUser(this.value)" style="width: 150;">
   
<?php
for ($i=1;$i<$length;$i++)
{
	$tr=explode(";",$csv[$i][0]);
	echo "<option value=".$i." >".$tr[0]."</option>";
	
}
  
?>
   </select>
  
  </form>
  
<div id="txtHint">
<?php
$val=1;
 
echo "<table bgcolor=grey>";
$tr=explode(";",$csv[0][0]);

echo "<tr><th bgcolor=silver>".$tr[0]."</th><th>".$tr[1]."</th><th>".$tr[2]."</th><th>".$tr[3]."</th></tr>";
	$tr=explode(";",$csv[$val][0]);
	echo "<tr><td bgcolor=silver>".$tr[0]."</td><td>".$tr[1]."</td><td>".$tr[2]."</td><td>".$tr[3]."</td></tr>";
	

echo "</table>";


}

?>
</div>

