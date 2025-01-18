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

<script>
    history.pushState(null, null, 'view.php');
    window.addEventListener('popstate', function(event) {
    history.pushState(null, null, 'view.php');
    });
</script>

<?php
include_once("include\connection.php");

session_start();

$_SESSION['subtopic2'] = $_REQUEST['subtop-2'];
if($_SESSION['subtopic2'] == "")
{
$_SESSION['subtopic'] = $_REQUEST['subtop-1'];
}
if($_SESSION['subtopic'] == "")
{
$_SESSION['topic'] = $_REQUEST['top-1'];
}

if($_SESSION['subtopic']=="")
{
$roww = mysql_query("select * from asksubtopic where class ='".$_SESSION['class']."' && subject ='".$_SESSION['subject']."' && topic='".$_SESSION['topic']."'");
while($row = mysql_fetch_array($roww))
	{
	if($row['nosubtopic'] == "YES")
		{
		header("location:sub1topic.php");
		}	
	}
}

if($_SESSION['subtopic2']=="")
{
$rows = mysql_query("select * from asksubtopic2 where class='".$_SESSION['class']."'&& subject ='".$_SESSION['subject']."' && topic='".$_SESSION['topic']."' && subtopic='".$_SESSION['subtopic']."'");
while($ros = mysql_fetch_array($rows))
	{
	if($ros['nosubtopic2'] == "YES")
		{
		header("location:sub2topic.php");
		}		
	}		
}
?>
</head>
<body>
<section class="mbr-section mbr-section--relative" id="msg-box5-g" style="background-color: rgb(255, 255, 255);">
    
    <div class="mbr-section__container mbr-section__container--isolated container" style="padding-top: 20px; padding-bottom: 0px;">
        <div class="row">
            <div class="mbr-box mbr-box--fixed mbr-box--adapted">
                <div class="mbr-box__magnet mbr-box__magnet--top-right mbr-section__left col-sm-6 image-size" style="width: 17%;">
                    <figure class="mbr-figure mbr-figure--adapted mbr-figure--caption-inside-bottom mbr-figure--full-width"><img src="assets/images/logo-1400x959.png" class="mbr-figure__img"></figure>
                </div>
                <div class="mbr-box__magnet mbr-class-mbr-box__magnet--center-left col-sm-6 content-size mbr-section__right">
                    <div class="mbr-section__container mbr-section__container--middle">
                        <div class="mbr-header mbr-header--auto-align mbr-header--wysiwyg">
                            <div id="heead-1">
							<h3 class="mbr-header__text">MAHATMA HANSRAJ MODERN SCHOOL JHANSI.</h3>
							</div>
							<div id="heead-2">
							<img src="assets/images/interactive-1400x413.png" height="100%" width="100%" />							</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="engine"></section>
<section class="mbr-section mbr-section--relative mbr-section--short-paddings" id="msg-box1-h" style="background-color: rgb(255, 250, 7);">
    <div class="mbr-section__container mbr-section__container--isolated container" style="padding-top: 20px; padding-bottom: 0px;">
    </div>
</section>

<section class="mbr-section mbr-section--relative mbr-section--short-paddings" id="msg-box1-i" style="background-color: rgb(123, 35, 0);">
    <div class="mbr-section__container mbr-section__container--isolated container" style="padding-top: 30px; padding-bottom: 0px;">
    </div>
</section>

<section class="mbr-section mbr-section--relative mbr-section--short-paddings" id="msg-box1-f" style="background-color: rgb(255, 255, 255);">

    <div class="mbr-section__container mbr-section__container--isolated container" style="padding-top: 40px; padding-bottom: 20px;">
        <div class="row">
            <div class="mbr-box mbr-box--fixed mbr-box--adapted">
                <div class="mbr-box__magnet mbr-box__magnet--top-left mbr-section__left col-sm-8">
                    <div class="mbr-section__container">
                        <div class="mbr-header mbr-header--auto-align mbr-header--wysiwyg">
                            <h4 class="mbr-header__text">
							<a href="index.php" style="color:#CC3300;">HOME</a> > 
							<a href="class.php?class=<?php echo($_SESSION['class']); ?>" style="color:#CC3300;">
							<?php echo($_SESSION['class']); ?>
							</a> > 
							<a href="subject.php?top=<?php echo($_SESSION['subject']);?>" style="color:#CC3300;">
							<?php echo($_SESSION['subject']); ?>
							</a> > 
							<?php echo($_SESSION['topic']); ?> > Select Video</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

<section class="mbr-section mbr-section--relative mbr-section--fixed-size" id="features1-7" style="background-color: rgb(255, 255, 255);">
    
    
    <div class="mbr-section__container container mbr-section__container--std-top-padding" style="padding-top: 31px;">
        <div class="mbr-section__row row">
		<div id="list-1">
			<div id="list-12">
<?php
if($_SESSION['subtopic2'] == "" && $_SESSION['subtopic'] == "")
{
$dir = ("vedio/".$_SESSION['class']."/".$_SESSION['subject']."/".$_SESSION['topic']."/");
$_SESSION['dir'] = $dir;
// Open a directory, and read its contents
if (is_dir($dir)){
  if ($dh = opendir($dir)){
    while (($file = readdir($dh)) !== false){
	if($file == "." || $file == ".." )
	{}
	else
	{
	echo ("<a href='".$dir."/".$file."' target='frame_a' >
	  <button style='border-radius:6px 6px 6px 6px;'>".$file."</button></a><br /><br />");
	}
    }
    closedir($dh);
  }
}

php_ini_scanned_files();
}
else
{
if($_SESSION['subtopic2'] == "")
{
$pir = ("vedio/".$_SESSION['class']."/".$_SESSION['subject']."/".$_SESSION['topic']."/".$_SESSION['subtopic']."/");
$_SESSION['dir'] = $pir;
// Open a directory, and read its contents
if (is_dir($pir)){
  if ($ph = opendir($pir)){
    while (($file = readdir($ph)) !== false){
	if($file == "." || $file == ".." )
	{}
	else
	{
	echo ("<a href='".$pir."/".$file."' target='frame_a' >
	  <button style='border-radius:6px 6px 6px 6px;'>".$file."</button></a><br /><br />");
	}
    }
    closedir($ph);
  }
}

php_ini_scanned_files();
}
else
{
$dir = ("vedio/".$_SESSION['class']."/".$_SESSION['subject']."/".$_SESSION['topic']."/".$_SESSION['subtopic']."/".$_SESSION['subtopic2']."/");
$_SESSION['dir'] = $dir;
// Open a directory, and read its contents
if (is_dir($dir)){
  if ($dh = opendir($dir)){
    while (($file = readdir($dh)) !== false){
	if($file == "." || $file == ".." )
	{}
	else
	{
	echo ("<a href='".$dir."/".$file."' target='frame_a' >
	  <button style='border-radius:6px 6px 6px 6px;'>".$file."</button></a><br /><br />");
	}
    }
    closedir($dh);
  }
}

php_ini_scanned_files();
}
}
?>
			</div>
		</div>
		<div id="list-2">
			<div id="list-21">
				<center>
				<iframe src="play.php" height="400px" width="730px" name="frame_a" frameborder="0">
				</iframe>
				</center>
			</div>
		</div>
        </div>
    </div>
</section>

<footer class="mbr-section mbr-section--relative mbr-section--fixed-size" id="footer1-8" style="background-color: rgb(116, 27, 25);">
    
    <div class="mbr-section__container container">
        <div class="mbr-footer mbr-footer--wysiwyg row" style="padding-top: 36.900000000000006px; padding-bottom: 36.900000000000006px;">
            <div class="col-sm-12">
                <p class="mbr-footer__copyright">Copyright (c) 2013 reserved by - Hansraj | Designed By -&nbsp;Hansraj &nbsp; &nbsp;&nbsp;</p>
            </div>
        </div>
    </div>
</footer>


  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/smooth-scroll/smooth-scroll.js"></script>
  <script src="assets/jarallax/jarallax.js"></script>
  <script src="assets/mob/js/script.js"></script>
  
  
</body>
</html>