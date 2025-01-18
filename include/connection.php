<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN">
<html>
<head>
<title>sharad yadav</title>
</head>
<body>
<?php
$usernameh = "root";
$passwordh = "";
$hostname = "localhost"; 

//connection to the database
$link = mysql_connect($hostname, $usernameh, $passwordh)
 or die("Unable to connect to MySQL");

//select a database to work with
mysql_select_db("hansraj",$link)
  or die("Could not select examples");
  
?>
</body>
</html>
