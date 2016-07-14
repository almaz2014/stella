<?php

header("Content-Type: text/html; charset=windows-1251");
//echo "<h1><a href='stella.php'>Stella Artua</a></h1>";
$file = file('prices.csv');
foreach($file as $k)
$csv[] = explode('|', $k);
//print_r($csv);
$length=count($csv);
if (isset($_REQUEST["city"]))
{
$val=$_REQUEST["city"];
echo "<table border=0 cellspacing=0 cellpadding=0>";
echo "<tr><td colspan=4><img src='stella_head.gif' border=0></td></tr>";
for ($i=1;$i<$length;$i++)
{
     //echo "<tr><th bgcolor=silver>".$tr[0]."</th><th>".$tr[1]."</th><th>".$tr[2]."</th><th>".$tr[3]."</th></tr>";
	$tr=explode(";",$csv[$i][0]);
	//echo "<tr><td bgcolor=silver>".$tr[0]."</td><td>".$tr[$val]."</td></tr>";

//	echo "<tr bgcolor=grey><td bgcolor=silver>".$tr[0]."</td><td>".$tr[$val]."</td>";
echo "<tr bgcolor='#0D5E92' ><td width=31>";
if ($i==1){
echo "<img src='g98.gif'>";
}else
	
if ($i==2){
echo "<img src='g95.gif'>";
}else
if ($i==3){
echo "<img src='a95.gif'>";
}else
if ($i==4){
echo "<img src='a92.gif'>";
}else
	if ($i==5){
echo "<img src='dt.gif'>";
}else
{	echo "$tr[0]";
}
echo "</td><td width=11 bgcolor='#333333'></td>";

	if (empty($tr[$val])){
	echo "<td bgcolor='#333333' width=90 ><img src='e.gif'  width='17' height='27' alt='' /><img src='e.gif'  width='17' height='27' alt='' /><img src='ed.gif'   width='10' height='27' alt='' /><img src='e.gif'  width='17' height='27' alt='' /><img src='e.gif' width='17' height='27' alt=''  /></td><td width=18></td>"; 
echo "</tr>";
	
}else{
	$arra=str_split(trim($tr[$val]));
echo "<td bgcolor='#333333' width=90 ><img src=".$arra[0].".gif   width='17' height='27' alt='' /><img src=".$arra[1].".gif   width='17' height='27' alt='' /><img src='d.gif'  width='10' height='27' alt='' />"; 
if (isset($arra[3]))
{
	echo "<img src=".$arra[3].".gif  width='17' height='27' alt='' />";
}else
{echo "<img src=0.gif  width='17' height='27' alt='' />";}

if (isset($arra[4]))
{
	echo "<img src=".$arra[4].".gif  width='17' height='27' alt='' /></td><td width=18></td>";
}else
{echo "<img src=0.gif width='17' height='27' alt='' /></td><td width=18></td>";}



echo "</tr>\n\r";
}
}
echo "<tr><td colspan=4><img src='stella_footer.gif'></td></tr>";
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
/*
for ($i=1;$i<$length;$i++)
{
	$tr=explode(";",$csv[$i][0]);
	echo "<option value=".$i." >".$tr[0]."</option>";
	
}
 */
$tr=explode(";",$csv[0][0]);
for ($i=1;$i<sizeof($tr);$i++)
{
  echo "<option value=".$i." >".$tr[$i]."</option>";
	
	
}

 
?>
   </select>
  
  </form>
  
<div id="txtHint">
<?php
$val=1;

echo "<table border=0 cellspacing=0 cellpadding=0>";
echo "<tr><td colspan=4><img src='stella_head.gif' border=0></td></tr>";
for ($i=1;$i<$length;$i++)
{
     //echo "<tr><th bgcolor=silver>".$tr[0]."</th><th>".$tr[1]."</th><th>".$tr[2]."</th><th>".$tr[3]."</th></tr>";
	$tr=explode(";",$csv[$i][0]);
	//echo "<tr><td bgcolor=silver>".$tr[0]."</td><td>".$tr[$val]."</td></tr>";

//	echo "<tr bgcolor=grey><td bgcolor=silver>".$tr[0]."</td><td>".$tr[$val]."</td>";
echo "<tr bgcolor='#0D5E92' ><td width=31>";
if ($i==1){
echo "<img src='g98.gif'>";
}else
	
if ($i==2){
echo "<img src='g95.gif'>";
}else
if ($i==3){
echo "<img src='a95.gif'>";
}else
if ($i==4){
echo "<img src='a92.gif'>";
}else
	if ($i==5){
echo "<img src='dt.gif'>";
}else
{	echo "$tr[0]";
}
echo "</td><td width=11 bgcolor='#333333'></td>";

	if (empty($tr[$val])){
	echo "<td bgcolor='#333333' width=90 ><img src='e.gif'  width='17' height='27' alt='' /><img src='e.gif'  width='17' height='27' alt='' /><img src='ed.gif'   width='10' height='27' alt='' /><img src='e.gif'  width='17' height='27' alt='' /><img src='e.gif' width='17' height='27' alt=''  /></td><td width=18></td>"; 
echo "</tr>";
	
}else{
	$arra=str_split(trim($tr[$val]));
echo "<td bgcolor='#333333' width=90 ><img src=".$arra[0].".gif   width='17' height='27' alt='' /><img src=".$arra[1].".gif   width='17' height='27' alt='' /><img src='d.gif'  width='10' height='27' alt='' />"; 
if (isset($arra[3]))
{
	echo "<img src=".$arra[3].".gif  width='17' height='27' alt='' />";
}else
{echo "<img src=0.gif  width='17' height='27' alt='' />";}

if (isset($arra[4]))
{
	echo "<img src=".$arra[4].".gif  width='17' height='27' alt='' /></td><td width=18></td>";
}else
{echo "<img src=0.gif width='17' height='27' alt='' /></td><td width=18></td>";}



echo "</tr>";
}
}
echo "<tr><td colspan=4><img src='stella_footer.gif'></td></tr>";
echo "</table>";



}

?>
</div>

