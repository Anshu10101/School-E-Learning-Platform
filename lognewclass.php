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

<script>
    history.pushState(null, null, 'lognewclass.php');
    window.addEventListener('popstate', function(event) {
    history.pushState(null, null, 'lognewclass.php');
    });
</script>

<?php
session_start();
if($_SESSION['adminuser'] == "")
{
header("location:index.php");
}

include_once("include\connection.php");

$newc = $_REQUEST['newc'];
$dnewc = $_REQUEST['dnewc'];
$submit = $_REQUEST['submit'];

if($submit == "Add")
{
$roww = mysql_query("select * from newclass where class =upper('".$newc."')");
$n = mysql_affected_rows();
	if($n=="0")
	{
	mysql_query("insert into newclass values ('',upper('".$newc."'))");
	$s = mysql_affected_rows($link);
		if($s>0)
			{
			$cap = strtoupper($newc);
			mkdir("vedio/".$cap."");
			header("Location:lognewclass.php");}
		else
			{ header("Location:logerror.php");}
	}
	else
	{
	echo("<script>alert('This Class is already added !');</script>");
	}
}

if($submit == "Remove")
{
$roww = mysql_query("select * from newclass where class =upper('".$dnewc."')");
$s = mysql_affected_rows();
	if($s=="0")
	{
	echo("<script>alert('You have selected wrong class !');</script>");
	}
	else
	{
	mysql_query("delete from newclass where class =upper('".$dnewc."')");
	$n = mysql_affected_rows($link);
	if($n>0)
		{
		mysql_query("delete from subject where class =upper('".$dnewc."')");
		mysql_query("delete from topic where class =upper('".$dnewc."')");
		while($row = mysql_fetch_array($roww))
		{
		}
		echo($full);
		}
	else
		{ 
		header("location:logerror.php");
		}
	}
}

?>
</head>
<body onload="myFunction()">
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
                            <h5 class="mbr-header__text">
							<a href="loghome.php" style="color:#CC3300;">HOME</a> >> Add new class</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

<section class="mbr-section mbr-section--relative mbr-section--short-paddings" id="msg-box1-f" style="background-color: rgb(255, 255, 255);">

    <div class="mbr-section__container mbr-section__container--isolated container" style="padding-top: 40px; padding-bottom: 20px;">
        <div class="row">
            <div class="mbr-box mbr-box--fixed mbr-box--adapted">
                <div class="mbr-box__magnet mbr-box__magnet--top-left mbr-section__left col-sm-8">
                    <div class="mbr-section__container">
                        <div class="mbr-header mbr-header--auto-align mbr-header--wysiwyg">
                            <h3 class="mbr-header__text">Add New Class</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

<section class="mbr-section mbr-section--relative mbr-section--fixed-size" id="features1-7" style="background-color: rgb(255, 255, 255);">
    
    
    <div class="mbr-section__container container mbr-section__container--std-top-padding" style="padding-top: 31px;">
	
	<div class="mbr-section mbr-section-nopadding">
        <div class="container">
            <div class="row">
			
	<form action="#" method="post">
				
				<div class="row row-sm-offset">

                            <div class="col-xs-12 col-md-12">
                                <div class="form-group">
									<label class="form-control-label" for="form1-9-name">Enter Class Name<span class="form-asterisk">*</span></label> 
	<input type="text" name="newc" class="form-control" required="" />
								</div>
                            </div>

	<div><input type="submit" name="submit" value="Add" class="btn btn-primary" />
	<h5 style="color:#FF0000">Please enter in capital letter("Do not insert class between pre-primary to XII standard, They are already added").</h5>
	</div>
	</form>	
    			</div>
        	  </div>
		   </div>
        </div>
    </div>
</section>

<hr size="2px;" width="100%" />
<hr size="2px;" width="100%" />
	
<section class="mbr-section mbr-section--relative mbr-section--short-paddings" id="msg-box1-f" style="background-color: rgb(255, 255, 255);">

    <div class="mbr-section__container mbr-section__container--isolated container" style="padding-top: 40px; padding-bottom: 20px;">
        <div class="row">
            <div class="mbr-box mbr-box--fixed mbr-box--adapted">
                <div class="mbr-box__magnet mbr-box__magnet--top-left mbr-section__left col-sm-8">
                    <div class="mbr-section__container">
                        <div class="mbr-header mbr-header--auto-align mbr-header--wysiwyg">
                            <h3 class="mbr-header__text">Delete Class</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

<section class="mbr-section mbr-section--relative mbr-section--fixed-size" id="features1-7" style="background-color: rgb(255, 255, 255);">
    
    
    <div class="mbr-section__container container mbr-section__container--std-top-padding" style="padding-top: 31px;">
	
	<div class="mbr-section mbr-section-nopadding">
        <div class="container">
            <div class="row">
			
	<form action="#" method="post">
				
				<div class="row row-sm-offset">

                            <div class="col-xs-12 col-md-12">
                                <div class="form-group">
                                    <label class="form-control-label" for="form1-9-email">Select a Class<span class="form-asterisk">*</span></label>
	<select name="dnewc" class="form-control" required="" >
		<option value="" selected="selected">Select</option>
<?php
$roww = mysql_query("select * from newclass");
while($row = mysql_fetch_array($roww))
{
echo("<option value='".$row['class']."'>".$row['class']."</option>");
}
?>
	</select>	
								</div>
                            </div>
							
	<div><input type="submit" name="submit" value="Remove" class="btn btn-primary" /></div>
	</form>	
    			</div>
        	  </div>
		   </div>
        </div>
    </div>
</section>

<hr size="2px;" width="100%" />
<hr size="2px;" width="100%" />

  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/smooth-scroll/smooth-scroll.js"></script>
  <script src="assets/jarallax/jarallax.js"></script>
  <script src="assets/mob/js/script.js"></script>
  
</body>
</html>