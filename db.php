<?php 

$con = mysql_connect('localhost',"root",'')
or die("failed");
mysql_select_db("node")
or die("failed");
//echo "connected";
$q = "select * from userDeatils";
$result = mysql_query($q)/*
or die("failed");
echo count(mysql_num_rows($result));
echo "<br>".json_encode($result);

while($row = mysql_fetch_assoc($result)){
echo "<br>".$row['id'];
}*/

?>
