<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="s">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="../assets/images/logo-1400x959.png" type="image/x-icon">
  <meta name="description" content="">
  
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:700,400&amp;subset=cyrillic,latin,greek,vietnamese">
  <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="../assets/mob/css/style.css">
  <link rel="stylesheet" href="../assets/mob/css/mbr-additional.css" type="text/css">
  
<title>Hansraj | E-Learning</title>

<script>
    history.pushState(null, null, 'subtopic4.php');
    window.addEventListener('popstate', function(event) {
    history.pushState(null, null, 'subtopic4.php');
    });
		
</script>

<?php
include_once("..\include\connection.php");

session_start();
if($_SESSION['adminuser'] == "")
{
header("location:..\index.php");
}


$classask = $_REQUEST['class'];
$subjectask = $_REQUEST['subject'];
$topicask = $_REQUEST['topic'];
$sub = $_REQUEST['subtopicask'];
$subsub = $_REQUEST['subsubtopicask'];
$submit = $_REQUEST['submit'];

if($submit=="Submit")
{
	$roww = mysql_query("select * from subtopic2 where class ='".$classask."' && subject =upper('".$subjectask."') && topic =upper('".$topicask."') && subtopic =upper('".$sub."') && subtopic2 =upper('".$subsub."')");
	$sk = mysql_affected_rows();
	if($sk=="0")
	{
			mysql_query("insert into subtopic2 values ('','".$classask."',upper('".$subjectask."'),
			upper('".$topicask."'),upper('".$sub."'),upper('".$subsub."'))");
			$k = mysql_affected_rows($link);
				if($k>0)
					{$subsub = strtoupper($subsub);
					 mkdir("../vedio/".$classask."/".$subjectask."/".$topicask."/".$sub."/".$subsub."");
					 header("Location:../logsuss.php");}
				else
					{ header("Location:../logerror.php");}
	}
	else
	{
	echo("<script>alert('This subtopic ia already added in list !');</script>");
	}
}

?>
</head>
<body onload="myFunction()">
<br />

<center><a href="../logerror.php" style="font-size:24px"><button>Back</button></a></center>

  <script src="../assets/web/assets/jquery/jquery.min.js"></script>
  <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="../assets/smooth-scroll/smooth-scroll.js"></script>
  <script src="../assets/jarallax/jarallax.js"></script>
  <script src="../assets/mob/js/script.js"></script>  
</body>
</html>