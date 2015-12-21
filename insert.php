<!DOCTYPE HTML>
<html>
<head>
<title>Alloy Jacket Website | Home </title>
</head>
<body>
<?php
$nm=$_GET["nm"];
$cardno=$_GET["cn"];
$cvv=$_GET["cv"];
$name1=$_GET["name1"];
$quantity=$_GET["quantity"];
mysql_connect("localhost","root","");
mysql_select_db("ziyaul");
mysql_query("insert into huk values('$nm','$cardno','$cvv','$name1','$quantity')");

?>
</body>
</html>
