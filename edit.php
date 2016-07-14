<?php

header("Content-Type: text/html; charset=windows-1251");
//echo "<h1><a href='stella.php'>Stella Artua</a></h1>";



if (isset($_REQUEST["xval"]))
{
	$h=fopen("prices.csv","w");
	for ($i=0;$i<$_REQUEST["xval"];$i++)
{
	
	$r=explode(";",$csv[$i][0]);
	$t=0;
	$row=$_REQUEST["$i$t"];
	for ($t=1;$t<$_REQUEST["yval"];$t++){
	$row=$row.";".$_REQUEST["$i$t"];
	}
	fwrite($h,$row."\r\n");
    //echo $row."<br>";
	}
fclose($h);
	echo "PRICES UPDATED";
}
else
{

$file = file('prices.csv');
foreach($file as $k)
	$csv[] = explode('|', $k);
	
//print_r($csv);
$length=count($csv);

echo "<form method=POST><table>";
for ($i=0;$i<$length;$i++)
{
	echo "<tr>";
	$r=explode(";",$csv[$i][0]);
	for ($t=0;$t<count($r);$t++){
	echo "<td><input type=text value='$r[$t]' name='$i$t'/></td>";
	}
    echo "</tr>";
	}
echo "</table> <input type=hidden name=xval value=".$length." /><input type=hidden name=yval value=".count($r)." /> <input type=submit /> </form>";
//phpinfo();
}
?>