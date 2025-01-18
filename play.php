<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="s">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="assets/images/logo-1400x959.png" type="image/x-icon">
  <meta name="description" content="">
  
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:700,400&amp;subset=cyrillic,latin,greek,vietnamese">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/mob/css/style.css">
  <link rel="stylesheet" href="assets/mob/css/mbr-additional.css" type="text/css">
  
<title>Hansraj | E-Learning</title>
<script src="js/jquery-1.9.1.js" type="text/javascript"></script>
<script>
$(function () {
      $(document).bind('contextmenu', function (e) {
        e.preventDefault();
        alert('Right Click is not allowed');
      });

      /*$('.Container').bind('contextmenu',function(e){
      e.preventDefault();
      alert('Right Click is not allowed on div');
      });*/
    });
</script>
<style>

#design-1 {
height:80px;
width:100%;
border:2px solid #FFCC66;
color:#FFCC66;
border-radius: 20px 20px 20px 20px;
font-size:36px;
background-color:#FFFFFF;
}

#design-1:hover {
background-color:#cccccc;
border:4px solid #333333;
color:#333333;
}

</style>

<?php
include_once("include\connection.php");

session_start();
$video = $_REQUEST['video'];

?>
</head>
<body>
<video controls height="390px" width="720px">
<source src="<?php echo($_SESSION['dir']."/".$video); ?>" type="video/wmv">
<source src="<?php echo($_SESSION['dir']."/".$video); ?>" type="video/mp4">
</video>

  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/smooth-scroll/smooth-scroll.js"></script>
  <script src="assets/jarallax/jarallax.js"></script>
  <script src="assets/mob/js/script.js"></script>
  
  
</body>
</html>